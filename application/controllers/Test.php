<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		$data['title'] = "Test";
		// $this->load->view('templates/Header', $data);
		$this->load->view('pages/Test');
	}
}
