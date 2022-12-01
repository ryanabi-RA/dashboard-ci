<?php

class NotFoundPage extends CI_Controller {
    public function index() 
    {
        $data['title'] = "404 | Not Found Page";
        $this->output->set_status_header(404);
        $this->load->view('templates/Header', $data);
        $this->load->view('templates/Sidebar');
        $this->load->view('pages/NotFoundPage');
        $this->load->view('templates/Footer');
    }
}