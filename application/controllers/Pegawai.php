<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{

	public function index()
	{
		$data['title'] = "Pegawai";
		$data['titleNav'] = "Data Pegawai";
		
		$this->load->library('pagination');

		$config['base_url'] = 'http://localhost/dashboard-ci-tailwind/pegawai/index/';
		$config['total_rows'] =  $this->m_pegawai->total_pegawai();
		$config['per_page'] = 5;

		//styling
		$config['full_tag_open'] = '<nav class="flex justify-center" aria-label="Page navigation example"><ul class="pagination flex">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'first';
		$config['first_tag_open'] = '<li class="page-item px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">';
		$config['first_tag_close'] = '</li>';
		
		$config['last_link'] = 'last';
		$config['last_tag_open'] = '<li class="page-item px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">';
		$config['last_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">';
		$config['prev_tag_close'] = '</li>';
		
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">';
		$config['next_tag_close'] = '</li>';

		$config['cur_link'] = '&laquo';
		$config['cur_tag_open'] = '<li aria-current="page" class="px-3 py-2 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_link'] = '&laquo';
		$config['num_tag_open'] = '<li class="page-item px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$data['pegawai'] = $this->m_pegawai->data_pegawai();
		$data['pegawai'] = $this->db->get('pegawai', $config['per_page'], $data['start'])->result();

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

		$this->m_pegawai->tambah_pegawai($data);
		$this->session->set_flashdata('massage','<div id="alert" class="flex py-3 px-4 mb-4 bg-green-500 rounded-lg dark:bg-green-600" role="alert">
				<svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-white dark:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
				</svg>
				<span class="sr-only">Info</span>
				<div class="ml-3 text-sm font-medium">
					<p class="text-gray-100 font-medium"><span class="text-[20px] text-white font-extrabold">Success!</span>, Data Berhasil di Tambah</p>
				</div>
				<button type="button" class="ml-auto -mx-1.5 -my-1.5 text-xl rounded-lg focus:ring-2 focus:ring-gray-400 p-1.5 hover:bg-gray-200 inline-flex h-8 w-8 dark:text-white dark:bg-green-700 dark:hover:bg-green-900" data-dismiss-target="#alert" aria-label="Close">
					<span class="sr-only">Close</span>
					<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
					</svg>
				</button>
			</div>');
		redirect('pegawai');
	}

	public function Detail($id_pegawai)
	{
		$data['title'] = "Detail Pegawai";
		$data['titleNav'] = "Profile Pegawai";
		$data['pegawai'] = $this->m_pegawai->detail_pegawai($id_pegawai);

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
		$data['pegawai'] = $this->m_pegawai->detail_pegawai($id_pegawai);

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
			if ($this->upload->do_upload('foto')) {
				$foto = $this->upload->data('file_name');
			}
		}

		if ($foto != null) {
			$data = array(
				'nama'          => $nama,
				'nip'           => $nip,
				'tgl_lahir'     => $tgl_lahir,
				'alamat'        => $alamat,
				'no_telp'       => $no_telp,
				'foto'       	=> $foto,
			);
		} else {
			$data = array(
				'nama'          => $nama,
				'nip'           => $nip,
				'tgl_lahir'     => $tgl_lahir,
				'alamat'        => $alamat,
				'no_telp'       => $no_telp,
			);
		}

        $where = array('id_pegawai' => $id_pegawai);
		$this->m_pegawai->update_pegawai($data, $where);
		$this->session->set_flashdata('massage','<div id="alert" class="flex py-3 px-4 mb-4 bg-yellow-500 rounded-lg dark:bg-yellow-600" role="alert">
				<svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-white dark:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
				</svg>
				<span class="sr-only">Info</span>
				<div class="ml-3 text-sm font-medium">
					<p class="text-gray-100 font-medium"><span class="text-[20px] text-white font-extrabold">Warning!</span>, Data Berhasil di Edit</p>
				</div>
				<button type="button" class="ml-auto -mx-1.5 -my-1.5 text-xl rounded-lg focus:ring-2 focus:ring-gray-400 p-1.5 hover:bg-gray-200 inline-flex h-8 w-8 dark:text-white dark:bg-yellow-700 dark:hover:bg-yellow-900" data-dismiss-target="#alert" aria-label="Close">
					<span class="sr-only">Close</span>
					<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
					</svg>
				</button>
			</div>');
		redirect('pegawai');

	}

	public function hapus($id_pegawai)
	{
		$this->m_pegawai->delete_pegawai($id_pegawai);
		
		$this->session->set_flashdata(
			'massage',
			'<div id="alert" class="flex py-3 px-4 mb-4 bg-red-500 rounded-lg dark:bg-red-600" role="alert">
				<svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-white dark:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
				</svg>
				<span class="sr-only">Info</span>
				<div class="ml-3 text-sm font-medium">
					<p class="text-gray-100 font-medium"><span class="text-[20px] text-white font-extrabold">Warning!</span>, Data Berhasil di Hapus</p>
				</div>
				<button type="button" class="ml-auto -mx-1.5 -my-1.5 text-xl rounded-lg focus:ring-2 focus:ring-gray-400 p-1.5 hover:bg-gray-200 inline-flex h-8 w-8 dark:text-white dark:bg-red-700 dark:hover:bg-red-900" data-dismiss-target="#alert" aria-label="Close">
					<span class="sr-only">Close</span>
					<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
					</svg>
				</button>
			</div>');
		redirect('pegawai');
	}

	public function search()
	{
		$data['title'] = "Pencarian Data Pegawai";
		$data['titleNav'] = "Data Pegawai";
		$this->load->library('pagination');

		$keyword = $this->input->post('keyword');
		$data['pegawai'] = $this->m_pegawai->get_keyword($keyword);
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

		$data['pegawai'] = $this->m_pegawai->data_pegawai();
		// $this->load->view('templates/Header', $data);
		$this->load->view('pages/print_pegawai', $data);
	}

	public function exportPdf()
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
		$pdf->Cell(40, 10, 'Nama pegawai', 1, 0, 'C');
		$pdf->Cell(30, 10, 'NIP', 1, 0, 'C');
		$pdf->Cell(40, 10, 'Tanggal Lahir', 1, 0, 'C');
		$pdf->Cell(40, 10, 'Alamat', 1, 0, 'C');
		$pdf->Cell(30, 10, 'No Telp', 1, 1, 'C');
		$pdf->SetFont('Arial', '', 10);

		$pegawai = $this->m_pegawai->data_pegawai();
		$no = 0;
		foreach ($pegawai as $data) {
			$no++;
			$pdf->Cell(10, 10, $no, 1, 0, 'C');
			$pdf->Cell(40, 10, $data->nama, 1, 0);
			$pdf->Cell(30, 10, $data->nip, 1, 0);
			$pdf->Cell(40, 10, $data->tgl_lahir, 1, 0);
			$pdf->Cell(40, 10, $data->alamat, 1, 0);
			$pdf->Cell(30, 10, $data->no_telp, 1, 1);
		}
		$pdf->Output();
	}

	public function exportExcel()
	{
		$data = $this->db->get('pegawai')->result_array();

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
			'No Telpon' => 'integer',
		);

		$writer = new XLSXWriter();
		$writer->setAuthor("RA");

		$writer->writeSheetHeader('Sheet1', $header, $styles);
		$no = 1;
		foreach ($data as $row) {
			$writer->writeSheetRow('Sheet1', [$no, $row['nama'], $row['nip'], $row['tgl_lahir'], $row['alamat'], $row['no_telp']], $styles2);
			$no++;
		}
		$writer->writeToStdOut();
	}
	
	public function visual_grafik()
	{		
		$data['title'] = "Pencarian Data Pegawai";
		$data['titleNav'] = "Data Pegawai";

		$data['hasil'] = $this->m_pegawai->Jumlah_alamat_pegawai();
		$data['no'] = 1;

		$this->load->view('templates/Header', $data);
		$this->load->view('templates/Sidebar');
		$this->load->view('templates/Navbar', $data);
		$this->load->view('pages/Grafik', $data);
		$this->load->view('templates/Footer');
	}
}
