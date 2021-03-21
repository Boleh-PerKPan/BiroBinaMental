<?php
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('');
        $this->load->library('form_validation');
    }

    public function index()
    {
        //$header_data['title'] = 'Biro Bina Mental dan Kesra';
        $data = [
            'title' => 'Biro Bina Mental Dan Kesra'
        ];
        $this->load->view('template/header', $data);
        $this->load->view('guest/carousel');
        $this->load->view('guest/index');
        $this->load->view('guest/sidebar');
        //$this->load->view('guest/test-page');
        $this->load->view('template/footer');
    }

}