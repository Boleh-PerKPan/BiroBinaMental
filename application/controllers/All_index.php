<?php
defined('BASEPATH') or exit('No direct script access allowed');

class All_index extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('GetAll_model');
        $this->load->model('Main_model');
        $this->load->library('form_validation');
        $this->load->library('pagination');
        if (!isset($_SESSION['data_nav'])) {
            redirect(base_url().'Home_user/callNavKonten');
        } 
        // if (isset($_POST['cari'])) {
        //     $this->search_index();
        // }     
    }
    public function index() {
        redirect(base_url().'Home_user/index');
    }
    public function search_index($method = "", $filter = null) {
        if(isset($_POST['judul'])) {
            $method = $this->input->post('filterby');
            $this->session->set_userdata('keyword', $this->input->post('judul'));
           
        } else {
            $this->session->unset_userdata('keyword');
        }
        if ($method == 'index_berita') {
            redirect('all_index/'.$method.'/'.$filter);
        } else {
            redirect('all_index/'.$method);
        }
    }
    // function end() {
    //     $this->session->unset_userdata('email');
    //     redirect('all_index/index_berita');
    // }
    public function index_berita() {
        
        if ($this->uri->segment(4) != null) {
            $page_data['start'] = $this->uri->segment(4); 
        } else {
            $page_data['start'] = 0;
        }
        if ($this->uri->segment(3) != null) {
            $filter = $this->uri->segment(3);
        } else {
            $filter = 'all';
        }
            
        $config['base_url'] = base_url().'all_index/index_berita/'.$filter;
        $config['per_page'] = 10;

        //cek keyword
        if (isset($_SESSION['keyword'])) {
            $data['keyword'] = $_SESSION['keyword'];
        } else {
            $data['keyword'] = null;
        }
        //cek filter for count
        if ($filter == 'all') {
            $config['total_rows'] = $this->GetAll_model->countAllBerita($data['keyword']);
        } else {
            $config['total_rows'] = $this->GetAll_model->countAllbyKategori($filter, $data['keyword']);
        }
        //cek filter for get data
        $this->pagination->initialize($config);
        
        if ($filter == 'all') {
            //$page_data['page_data'] = $this->GetAll_model->getAllBerita();
            $page_data['page_data'] = $this->GetAll_model->getAllBerita($config['per_page'], $page_data['start'], $data['keyword']);
        } else {
            $page_data['page_data'] = $this->GetAll_model->getAllbyKategori($filter, $config['per_page'], $page_data['start'], $data['keyword']);
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
        if ($this->uri->segment(3) != null) {
            $page_data['start'] = $this->uri->segment(3); 
        } else {
            $page_data['start'] = 0;
        }

        $config['base_url'] = base_url().'all_index/index_agenda';
        $config['per_page'] = 10;

         //cek keyword
         if (isset($_SESSION['keyword'])) {
            $data['keyword'] = $_SESSION['keyword'];
        } else {
            $data['keyword'] = null;
        }

        $config['total_rows'] = $this->GetAll_model->countAllAgenda($data['keyword']);
        //cek filter for get data
        $this->pagination->initialize($config);
        
        $page_data['page_data'] = $this->GetAll_model->getAllAgenda($config['per_page'], $page_data['start'], $data['keyword']);
        $page_data['kategori_data'] = $this->GetAll_model->getAllArtikelKategori();
        $header_data = [
            'nav_konten' => $_SESSION['data_nav'],
            'title' => 'Index Agenda'
        ];
        $this->load->view('template/header', $header_data);
        $this->load->view('guest/index_berita', $page_data);
        $this->load->view('template/footer');
    }
    public function index_video($keyword = null) {
        if ($this->uri->segment(3) != null) {
            $page_data['start'] = $this->uri->segment(3); 
        } else {
            $page_data['start'] = 0;
        }

        $config['base_url'] = base_url().'all_index/index_video';
        $config['per_page'] = 12;
        //$this->searchAndPagination();

         //cek keyword
         if (isset($_SESSION['keyword'])) {
            $data['keyword'] = $_SESSION['keyword'];
        } else {
            $data['keyword'] = null;
        }

        $config['total_rows'] = $this->GetAll_model->countAllVideo($data['keyword']);
        //cek filter for get data
        $this->pagination->initialize($config);

        $page_data['page_data'] = $this->GetAll_model->getAllVideo($config['per_page'], $page_data['start'], $data['keyword']);
        $header_data = [
            'nav_konten' => $_SESSION['data_nav'],
            'title' => 'Index Video'
        ];
        $this->load->view('template/header', $header_data);
        $this->load->view('guest/index_galery', $page_data);
        $this->load->view('template/footer');
    }
    public function index_foto() {
        if ($this->uri->segment(3) != null) {
            $page_data['start'] = $this->uri->segment(3); 
        } else {
            $page_data['start'] = 0;
        }

        $config['base_url'] = base_url().'all_index/index_foto';
        $config['per_page'] = 24;
        //$this->searchAndPagination();

         //cek keyword
         if (isset($_SESSION['keyword'])) {
            $data['keyword'] = $_SESSION['keyword'];
        } else {
            $data['keyword'] = null;
        }

        $config['total_rows'] = $this->GetAll_model->countAllFoto($data['keyword']);
        //cek filter for get data
        $this->pagination->initialize($config);
        
        $page_data['page_data'] = $this->GetAll_model->getAllFoto($config['per_page'], $page_data['start'], $data['keyword']);
        $header_data = [
            'nav_konten' => $_SESSION['data_nav'],
            'title' => 'Index Foto'
        ];
        $this->load->view('template/header', $header_data);
        $this->load->view('guest/index_galery', $page_data);
        $this->load->view('template/footer');
    }
    public function index_upload() {
        if ($this->uri->segment(3) != null) {
            $page_data['start'] = $this->uri->segment(3); 
        } else {
            $page_data['start'] = 0;
        }

        $config['base_url'] = base_url().'all_index/index_upload';
        $config['per_page'] = 10;
        //$this->searchAndPagination();

         //cek keyword
         if (isset($_SESSION['keyword'])) {
            $data['keyword'] = $_SESSION['keyword'];
        } else {
            $data['keyword'] = null;
        }

        $config['total_rows'] = $this->GetAll_model->countAllArtikelUpload($data['keyword']);
        //cek filter for get data
        $this->pagination->initialize($config);
        
        $page_data['page_data'] = $this->GetAll_model->getAllArtikelUpload($config['per_page'], $page_data['start'], $data['keyword']);
        
        $header_data = [
            'nav_konten' => $_SESSION['data_nav'],
            'title' => 'Index Download'
        ];
        $this->load->view('template/header', $header_data);
        $this->load->view('guest/download_list', $page_data);
        $this->load->view('template/footer');
    }
}