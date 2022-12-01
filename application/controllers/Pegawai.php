<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{

	public function index()
	{
		$data['title'] = "Pegawai";
		$data['pegawai'] = $this->db->get('pegawai')->result_array();

		$this->load->view('templates/Header', $data);
		$this->load->view('templates/Sidebar');
		$this->load->view('templates/Navbar');
		$this->load->view('pages/Pegawai', $data);
		$this->load->view('templates/Footer');
	}

	public function tambah_pegawai()
	{
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$no_telp = $this->input->post('no_telp');
		$foto = $_FILES['foto'];

		if ($foto = '') {
				# code...
		} else {
				$config['upload_path'] = './assets/foto';
				$config['allowed_types'] = 'jpg|png|gif|jpeg';

				$this->load->library('upload');
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('foto')) {
						echo "Upload Gagal";
						die;
				} else {
						$foto = $this->upload->data('file_name');
				}
		}

		$data = array(
			'nip' => $nip,
			'nama' => $nama,
			'alamat' => $alamat,
			'tgl_lahir' => $tgl_lahir,
			'no_telp' => $no_telp,
			'foto' => $foto,
		);

		$this->db->insert('pegawai', $data);
		redirect('pegawai');
	}

	public function Detail($id_pegawai)
	{
		
		$data['title'] = "Detail Pegawai";
		$data['pegawai'] = $this->db->get_where('pegawai', array('id_pegawai' => $id_pegawai))->row();

		$this->load->view('templates/Header', $data);
		$this->load->view('templates/Sidebar');
		$this->load->view('templates/Navbar');
		$this->load->view('pages/Detail', $data);
		$this->load->view('templates/Footer');
	}
}
