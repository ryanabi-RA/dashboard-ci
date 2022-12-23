<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data['title'] = "About";
		$data['titleNav'] = "About";
		// $data['jumlahPegawai'] = $this->db->get('pegawai')->num_rows();

		$this->load->view('templates/Header', $data);
		$this->load->view('templates/Sidebar');
		// $this->load->view('templates/Navbar', $data);
		$this->load->view('pages/About');
		// $this->load->view('templates/Footer');
	}
}
