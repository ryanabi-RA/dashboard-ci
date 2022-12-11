<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{

	public function index()
	{
		$data['title'] = "Pegawai";
		$data['titleNav'] = "Data Pegawai";
		$data['pegawai'] = $this->db->get('pegawai')->result();

		$this->load->library('pagination');

		$config['base_url'] = 'http://localhost/dashboard-ci-tailwind/pegawai/index';
		// $config['base_url'] = 'https://avallion.000webhostapp.com/pegawai/index';
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

		$data['pegawai'] = $this->db->get('pegawai')->result();
		$data['pegawai'] = $this->db->get('pegawai', $config['per_page'], $data['start'])->result();

		$data['pagination'] = $this->pagination->create_links();

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
		// $this->M_pegawai->update_data($where, $data, 'pegawai');
		redirect('pegawai');
	}

	public function hapus($id_pegawai)
	{
		$this->db->where(array('id_pegawai' => $id_pegawai));
		$this->db->delete('pegawai');
		redirect('pegawai');
	}

	public function search()
	{
		$data['title'] = "Pencarian Data Pegawai";
		$data['titleNav'] = "Data Pegawai";
		$this->load->library('pagination');

		$keyword = $this->input->post('keyword');
		$data['pegawai'] = $this->M_pegawai->get_keyword($keyword);
		$config['base_url'] = 'http://localhost/dashboard-ci-tailwind/pegawai/index';
		// $config['base_url'] = 'https://avallion.000webhostapp.com/pegawai/search/index';
		$data['start'] = $this->uri->segment(4);

		$data['pagination'] = $this->pagination->create_links();

		$this->load->view('templates/Header', $data);
		$this->load->view('templates/Sidebar');
		$this->load->view('templates/Navbar', $data);
		$this->load->view('pages/Search', $data);
		$this->load->view('templates/Footer');
	}

	public function print()
	{
		$data['title'] = "Pencarian Data Pegawai";
		$data['titleNav'] = "Data Pegawai";

		$data['pegawai'] = $this->db->get('pegawai')->result();
		$this->load->view('templates/Header', $data);
		$this->load->view('pages/print_pegawai', $data);
	}

	public function pdf1()
	{
		$this->load->library('Pdf'); //MEMANGGIL LIBRARY YANG KITA BUAT TADI
		error_reporting(0); // AGAR ERROR MASALAH PHP TIDAK MUNCUL
		$pdf = new FPDF('P', 'mm', 'Letter');
		$pdf->AddPage();
		$pdf->SetFont('Arial', 'B', 16);
		$pdf->Cell(0, 7, 'Daftar pegawai', 0, 1, 'C');
		$pdf->Cell(10, 7, '', 0, 1);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->Cell(10, 10, 'No', 1, 0, 'C');
		$pdf->Cell(60, 10, 'Nama pegawai', 1, 0, 'C');
		$pdf->Cell(30, 10, 'NIP', 1, 0, 'C');
		$pdf->Cell(50, 10, 'Tanggal Lahir', 1, 0, 'C');
		$pdf->Cell(50, 10, 'Alamat', 1, 1, 'C');
		$pdf->SetFont('Arial', '', 10);

		$pegawai = $this->db->get('pegawai')->result();
		$no = 0;
		foreach ($pegawai as $data) {
			$no++;
			$pdf->Cell(10, 10, $no, 1, 0, 'C');
			$pdf->Cell(60, 10, $data->nama, 1, 0);
			$pdf->Cell(30, 10, $data->nip, 1, 0);
			$pdf->Cell(50, 10, $data->tgl_lahir, 1, 0);
			$pdf->Cell(50, 10, $data->alamat, 1, 1);
		}
		$pdf->Output();
	}

	public function exportExcel()
	{
		$data = $this->db->get('pegawai')->result_array();
		// $data = $this->db->get('pegawai')->result();

		include_once APPPATH . '/third_party/excel/xlsxwriter.class.php';
		ini_set('display_error', 0);
		ini_set('log_errors', 1);
		error_reporting(E_ALL & ~E_NOTICE);

		$filename = "report-" . date('d-m-Y-H-i-s') . ".xlsx";
		header('Content-disposition: attachment; filename="' . XLSXWriter::sanitize_filename($filename) . '"');
		header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
		header('Content-Transfer-Encoding: binary');
		header("Cache-Control: must-revalidate");
		header('Pragma: public');

		$styles = array('widths' => [3, 20, 30, 40], 'font' => 'Arial', 'fonrsize' => 10, 'font-style' => 'bold', 'fill' => '#fff', 'haling' => 'center', 'border' => 'left,right,top,bottom');
		$styles2 = array(['font' => 'Arial', 'font-size' => 10, 'font-style' => 'bold', 'fill' => '#000', 'haling' => 'left', 'border' => 'left,right,top,bottom', 'fill' => '#ffc'], ['fill' => '#fcf'], ['fill' => '#ccf'], ['fill' => 'cff'], ['fill' => '#cff'], ['fill' => '#cff'],);

		$header = array(
			'No' => 'integer',
			'Nama pegawai' => 'string',
			'NIP' => 'string',
			'Tanggal Lahir' => 'string',
			'Alamat' => 'string',
		);

		$writer = new XLSXWriter();
		$writer->setAuthor("RA");

		$writer->writeSheetHeader('Sheet1', $header, $styles);
		$no = 1;
		foreach ($data as $row) {
			$writer->writeSheetRow('Sheet1', [$no, $row['nama'], $row['nip'], $row['tgl_lahir'], $row['alamat']], $styles2);
			$no++;
		}
		$writer->writeToStdOut();
	}
}
