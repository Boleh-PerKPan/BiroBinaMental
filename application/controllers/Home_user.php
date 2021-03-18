<?php
class Home_user extends CI_Controller
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
        $this->load->view('home/index');
        $this->load->view('template/footer');
    }
}
