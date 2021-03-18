<?php
class Home_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('index');
        $this->load->view('template/footer');
    }

}