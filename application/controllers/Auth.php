<?php
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        #$this->load->model('');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('auth/template/header');
        #$this->load->view('auth/login');
        $this->load->view('auth/template/footer');
    }
}
