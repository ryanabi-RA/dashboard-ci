<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offline extends CI_Controller {

	public function index()
	{
		$data['title'] = "Dashboard";

		$this->load->view('pages/Offline', $data);
	}
}
