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
        $header_data = [
            'title' => 'Biro Bina Mental Dan Kesra',
            'class' => 'dropdown',
            'dropdown_item' => ' id="navbarDropdown" data-toggle="collapse" aria-expanded="false" '
        ];
        $this->load->view('template/header', $header_data);
        $this->load->view('guest/carousel');
        $this->load->view('guest/index');
        $this->load->view('guest/sidebar');
        $this->load->view('template/footer');
    }
    public function index_foto() {
        $header_data = [
            'title' => 'Index Foto', 
            'class' => 'dropdown',
            'dropdown_item' => ' id="navbarDropdown" data-toggle="collapse" aria-expanded="false" '
        ];
        $this->load->view('template/header', $header_data);
        $this->load->view('guest/index_foto');
        $this->load->view('template/footer');
    }
    public function index_video() {
        $header_data = [
            'title' => 'Index Video', 
            'class' => 'dropdown',
            'dropdown_item' => ' id="navbarDropdown" data-toggle="collapse" aria-expanded="false" '
        ];
        $this->load->view('template/header', $header_data);
        $this->load->view('guest/index_video');
        $this->load->view('template/footer');
    }
    public function index_berita() {
        $header_data = [
            'title' => 'Index Berita',
            'class' => 'dropdown',
            'dropdown_item' => ' id="navbarDropdown" data-toggle="collapse" aria-expanded="false" '
        ];
        $this->load->view('template/header', $header_data);
        $this->load->view('guest/index_berita');
        $this->load->view('template/footer');
    }
    public function index_agenda() {
        $header_data = [
            'title' => 'Index Agenda',
            'class' => 'dropdown',
            'dropdown_item' => ' id="navbarDropdown" data-toggle="collapse" aria-expanded="false" '
        ];
        $this->load->view('template/header', $header_data);
        $this->load->view('guest/index_berita');
        //$this->load->view('guest/sidebar');
        $this->load->view('template/footer');
    }
    public function detail($judul, $jenis) {
        $header_data = [
            'title' => $judul,
            'class' => 'dropdown',
            'dropdown_item' => ' id="navbarDropdown" data-toggle="collapse" aria-expanded="false" '
        ];
        $this->load->view('template/header', $header_data);
        $this->load->view('guest/detail');
        //$this->load->view('guest/sidebar');
        $this->load->view('template/footer');
    }
    public function detail_agenda($judul) {
        $header_data = [
            'title' => $judul,
            'class' => 'dropdown',
            'dropdown_item' => ' id="navbarDropdown" data-toggle="collapse" aria-expanded="false" '
        ];
        $this->load->view('template/header',$header_data);
        $this->load->view('guest/detail_berita');
        //$this->load->view('guest/sidebar');
        //$this->load->view('guest/test-page');
        $this->load->view('template/footer');
    }
    public function extrapage_news($judul) {
        $header_data = [
            'title' => $judul,
            'class' => 'dropdown',
            'dropdown_item' => ' id="navbarDropdown" data-toggle="collapse" aria-expanded="false" '
        ];
        $this->load->view('template/header', $header_data);
        $this->load->view('guest/extrapage_news');
        $this->load->view('template/footer');
    }
}
