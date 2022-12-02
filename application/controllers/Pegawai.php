<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{

	public function index()
	{
		$this->load->library('pagination');

		$data['title'] = "Pegawai";
		$data['titleNav'] = "Data Pegawai";
		$data['pegawai'] = $this->db->get('pegawai')->result_array();

		$config['base_url'] = 'http://localhost/dashboard-ci3/pegawai/index';
		$config['total_rows'] = $this->db->get('pegawai')->num_rows();
		$config['per_page'] = 6;

		//styling
		$config['full_tag_open'] = '<nav class="m-auto"><ul class="inline-flex items-center -space-x-px">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'first';
		$config['first_tag_open'] = '<li class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">';
		$config['first_tag_close'] = '</a></li>';

		$config['last_link'] = 'last';
		$config['last_tag_open'] = '<li class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">';
		$config['last_tag_close'] = '</a></li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">';
		$config['next_tag_close'] = '</a></li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">';
		$config['prev_tag_close'] = '</a></li>';

		$config['cur_link'] = '&laquo';
		$config['cur_tag_open'] = '<li aria-current="page" class="z-10 px-3 py-2 leading-tight text-blue-600 border border-blue-300 bg-blue-100 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_link'] = '&laquo';
		$config['num_tag_open'] = '<li class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">';
		$config['num_tag_close'] = '</a></li>';

		$config['attributes'] = array('class' => 'page-link');

		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$data['pegawai'] = $this->db->get('pegawai', $config['per_page'], $data['start'])->result_array();

		$this->load->view('templates/Header', $data);
		$this->load->view('templates/Sidebar');
		$this->load->view('templates/Navbar', $data);
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
		$data['titleNav'] = "Profile Pegawai";
		$data['pegawai'] = $this->db->get_where('pegawai', array('id_pegawai' => $id_pegawai))->row();

		$this->load->view('templates/Header', $data);
		$this->load->view('templates/Sidebar');
		$this->load->view('templates/Navbar', $data);
		$this->load->view('pages/Detail', $data);
		$this->load->view('templates/Footer');
	}

	public function Edit($id_pegawai)
	{
		$data['title'] = "Edit Pegawai";
		$data['titleNav'] = "Edit Profile Pegawai";
		$data['pegawai'] = $this->db->get_where('pegawai', array('id_pegawai' => $id_pegawai))->row();

		$this->load->view('templates/Header', $data);
		$this->load->view('templates/Sidebar');
		$this->load->view('templates/Navbar', $data);
		$this->load->view('pages/Edit', $data);
		$this->load->view('templates/Footer');
	}


	// public function update()
	// {
	// 	$id_pegawai = $this->input->post('id_pegawai');
	// 	$nip = $this->input->post('nip');
	// 	$nama = $this->input->post('nama');
	// 	$alamat = $this->input->post('alamat');
	// 	$tgl_lahir = $this->input->post('tgl_lahir');
	// 	$no_telp = $this->input->post('no_telp');
	// 	// $foto = $_FILES['foto'];

	// 	// if ($foto = '') {
	// 	// 	# code...
	// 	// } else {
	// 	// 	$config['upload_path'] = './assets/foto';
	// 	// 	$config['allowed_types'] = 'jpg|png|gif|jpeg';

	// 	// 	$this->load->library('upload');
	// 	// 	$this->upload->initialize($config);
	// 	// 	if (!$this->upload->do_upload('foto')) {
	// 	// 		echo "Upload Gagal";
	// 	// 		die;
	// 	// 	} else {
	// 	// 		$foto = $this->upload->data('file_name');
	// 	// 	}
	// 	// }

	// 	$data = array(
	// 		'nip' => $nip,
	// 		'nama' => $nama,
	// 		'alamat' => $alamat,
	// 		'tgl_lahir' => $tgl_lahir,
	// 		'no_telp' => $no_telp,
	// 		// 'foto' => $foto,
	// 	);

	// 	// $where = array('id_pegawai' => $id_pegawai);
	// 	$this->db->update('pegawai', $data);
	// 	$this->db->where('1001014');
	// 	redirect('pegawai');
	// }

	public function update()
	{
		$id_pegawai = $this->input->post('id_pegawai');
		$nama = $this->input->post('nama');
		$nip = $this->input->post('nip');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$foto = $_FILES['foto'];

		if ($foto != '') {
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
			'nama'          => $nama,
			'nip'           => $nip,
			'tgl_lahir'     => $tgl_lahir,
			'alamat'        => $alamat,
			'no_telp'       => $no_telp,
			'foto'       => $foto,
		);

		$where = array('id_pegawai' => $id_pegawai);

        $this->db->where($where);
        $this->db->update('pegawai', $data);
		// $this->m_mahasiswa->update_data($where, $data, 'tb_mahasiswa');
		redirect('pegawai/index');
	}

	public function hapus($id_pegawai)
	{
		$this->db->where(array('id_pegawai' => $id_pegawai));
		$this->db->delete('pegawai');
		redirect('pegawai');
	}
}
