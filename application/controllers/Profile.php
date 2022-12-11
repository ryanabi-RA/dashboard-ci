<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$data['title'] = "Profile";
		$data['titleNav'] = "Profile";
		// $data['jumlahPegawai'] = $this->db->get('pegawai')->num_rows();

		$this->load->view('templates/Header', $data);
		$this->load->view('templates/Sidebar');
		$this->load->view('templates/Navbar', $data);
		$this->load->view('pages/Profile');
		$this->load->view('templates/Footer');
	}
}
