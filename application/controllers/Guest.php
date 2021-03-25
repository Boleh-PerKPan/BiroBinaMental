<?php
class Guest extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('');
        $this->load->library('form_validation');
    }

    public function index()
    {
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
    public function galery_view() {
        $data = [
            'title' => 'Index Galery'
        ];
        $this->load->view('template/header', $data);
        $this->load->view('guest/index_galery');
        //$this->load->view('guest/sidebar');
        //$this->load->view('guest/test-page');
        $this->load->view('template/footer');
    }
    public function berita_view() {
        $data = [
            'title' => 'Index Berita'
        ];
        $this->load->view('template/header', $data);
        $this->load->view('guest/index_berita');
        //$this->load->view('guest/sidebar');
        //$this->load->view('guest/test-page');
        $this->load->view('template/footer');
    }
    public function agenda_view() {
        $data = [
            'title' => 'Index Agenda'
        ];
        $this->load->view('template/header', $data);
        $this->load->view('guest/index_berita');
        //$this->load->view('guest/sidebar');
        //$this->load->view('guest/test-page');
        $this->load->view('template/footer');
    }
    public function detail_berita($judul) {
        //$judul = "Judul Berita"; 
        $data = [
            'title' => $judul
        ];
        $this->load->view('template/header', $data);
        $this->load->view('guest/detail_berita');
        //$this->load->view('guest/sidebar');
        //$this->load->view('guest/test-page');
        $this->load->view('template/footer');
    }
    public function detail_agenda($judul) {
        $data = [
            'title' => $judul
        ];
        $this->load->view('template/header', $data);
        $this->load->view('guest/detail_berita');
        //$this->load->view('guest/sidebar');
        //$this->load->view('guest/test-page');
        $this->load->view('template/footer');
    }
    public function extrapage_news($judul) {
        //$judul = "Judul extrapage";
        $data = [
            'title' => $judul
        ];
        $this->load->view('template/header', $data);
        $this->load->view('guest/extrapage_news');
        //$this->load->view('guest/sidebar');
        //$this->load->view('guest/test-page');
        $this->load->view('template/footer');
    }
}