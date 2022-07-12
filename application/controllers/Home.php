<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "Curhatin";
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('content/home');
        $this->load->view('layout/footnote');
        $this->load->view('layout/footer');
    }
}
