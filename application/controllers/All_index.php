<?php
defined('BASEPATH') or exit('No direct script access allowed');

class All_index extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('GetAll_model');
        $this->load->library('form_validation');
        
    }

    public function index_video() {
        $page_data['page_data'] = $this->GetAll_model->getAllVideo();
        $header_data = [
            'nav_konten' => $_SESSION['data_nav'],
            'title' => 'Index Video'
        ];
        $this->load->view('template/header', $header_data);
        $this->load->view('guest/index_video', $page_data);
        $this->load->view('template/footer');
    }
    public function index_foto() {
        $page_data['page_data'] = $this->GetAll_model->getAllFoto();
        $header_data = [
            'nav_konten' => $_SESSION['data_nav'],
            'title' => 'Index Video'
        ];
        $this->load->view('template/header', $header_data);
        $this->load->view('guest/index_foto', $page_data);
        $this->load->view('template/footer');
    }
    public function index_berita($filter = 'all') {
        if ($filter == 'all') {
            $page_data['page_data'] = $this->GetAll_model->getAllBerita();
        } else {
            $page_data['page_data'] = $this->GetAll_model->getAllbyKategori($filter);
        }
        $page_data['kategori_data'] = $this->GetAll_model->getAllArtikelKategori();
        $header_data = [
            'nav_konten' => $_SESSION['data_nav'],
            'title' => 'Index Berita'
        ];
        $this->load->view('template/header', $header_data);
        $this->load->view('guest/index_berita', $page_data);
        $this->load->view('template/footer');
    }
    public function index_agenda() {
        $page_data['page_data'] = $this->GetAll_model->getAllAgenda();
        $page_data['kategori_data'] = $this->GetAll_model->getAllArtikelKategori();
        $header_data = [
            'nav_konten' => $_SESSION['data_nav'],
            'title' => 'Index Agenda'
        ];
        $this->load->view('template/header', $header_data);
        $this->load->view('guest/index_berita', $page_data);
        //$this->load->view('guest/sidebar');
        $this->load->view('template/footer');
    }
}