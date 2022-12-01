<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['title'] = "Dashboard";
		$data['jumlahPegawai'] = $this->db->get('pegawai')->num_rows();

		$this->load->view('templates/Header', $data);
		$this->load->view('templates/Sidebar');
		$this->load->view('templates/Navbar');
		$this->load->view('pages/Dashboard');
		$this->load->view('templates/Footer');
	}
}
