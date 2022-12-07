<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		$connected = @fsockopen("www.tailwindcss.com", 80);	//website, port  (try 80 or 443)
		if (!$connected) {
			redirect('offline');  //action when connected
		}
		
		$data['title'] = "Dashboard";
		$data['titleNav'] = "Dashboard";
		$data['jumlahPegawai'] = $this->db->get('pegawai')->num_rows();

		$this->load->view('templates/Header', $data);
		$this->load->view('templates/Sidebar');
		$this->load->view('templates/Navbar', $data);
		$this->load->view('pages/Dashboard');
		$this->load->view('templates/Footer');
	}
}
