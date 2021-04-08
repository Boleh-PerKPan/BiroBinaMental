<?php
class Home_user extends CI_Controller
{
    private $nav_konten ="";

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
        $this->load->model('GetAll_model');
        $this->load->library('form_validation');
        if (!isset($_SESSION['data_nav'])) {
            $this->callNavKonten();
        }
    }
    public function index()
    {   
        #pengambilan data untuk carousel
        $data_carousel['data_carousel'] = $this->Main_model->getDataCarousel();
        #pengambilan data berita utama
        $berita_utama['berita_utama'] = $this->Main_model->getBeritaUtama();
        //$berita_utama['berita_terkait'] = $this->Main_model->getBeritaTerkait($this->Main_model->idBeritaUtama());
        if ($berita_utama['berita_utama'] == null) {
            $berita_utama['berita_terkait'] = $this->Main_model->getBeritaTerkait();
        } else {
            foreach ($berita_utama['berita_utama'] as $row){
                $berita_utama['berita_terkait'] = $this->Main_model->getBeritaTerkait($row['id_artikel_berita']);
            }
        }
        $sidebar_data['allkategori'] = $this->GetAll_model->getAllArtikelKategori();
        $sidebar_data['data_foto'] = $this->Main_model->getCarouselFoto();
        $sidebar_data['data_video'] = $this->Main_model->getLastVideo();
        $sidebar_data['data_agenda'] = $this->Main_model->getAgendaTerkait();
        $header_data = [
            'nav_konten' => $_SESSION['data_nav'],
            'title' => 'Biro Bina Mental Dan Kesra',
        ];

        $this->load->view('template/header', $header_data);
        $this->load->view('guest/carousel', $data_carousel);
        $this->load->view('guest/index', $berita_utama);
        $this->load->view('guest/sidebar', $sidebar_data);
        $this->load->view('template/footer');
    }
    public function callNavKonten() {
        $data_nav = $this->Main_model->getHeaderData();
        foreach ($data_nav as $data) :
        $this->setnavkonten($data['id_menu'], $data['child'], $data['link'], $data['nama_menu'], $data['status'], $data['level']);
        endforeach; 
        #set session data navbar
        $session = [
            'data_nav' => $this->nav_konten
        ];
        $this->session->set_userdata($session);
        
    }
    private function setnavkonten($parentid, $child,$link,$namamenu, $status, $x) {
        if ($status == "Aktif") {
            if ($child == 0) {
                //data yg ditransfer dari db hanya yang parent nya = 0
                $this->nav_konten .= 
                    '<li class="nav-item active">
                        <a class="nav-link " href="';
                        $this->nav_konten .= base_url().'home_user/'.$link;
                        $this->nav_konten .= '">';
                        $this->nav_konten .= $namamenu;
                        $this->nav_konten .= '</a>
                    </li>';
            } else {
                // get the child from db with transfer parent id number 
                
               //$this->nav_konten .= '<li class="nav-item active dropdown">';
                if ($x == 0) {
                    $this->nav_konten .= '<li class="nav-item active dropdown ">';
                } else {
                    $this->nav_konten .= '<li class="nav-item btn-group active dropend" >';
                }
                $this->nav_konten .= '<a href="#" data-target="#';
                $this->nav_konten .= $parentid;
                $this->nav_konten .='" class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                $this->nav_konten .= $namamenu;
                $this->nav_konten .= '</a><ul class="collapse dropdown-menu " id="';
                $this->nav_konten .=$parentid;
                $this->nav_konten .='" >';
                            
                $data_nav = $this->Main_model->getHeaderData($parentid);
                foreach ($data_nav as $data) :
                    $this->setnavkonten($data['id_menu'], $data['child'], $data['link'], $data['nama_menu'], $data['status'], $data['level']);
                endforeach;    
                            
                $this->nav_konten .= '</ul></li>';
            } 
        }
    }
    
    public function detail($tabel, $id) {
        if ($tabel == 'Berita') {
            $data_detail = $this->Main_model->getDetailBerita($id);
        } else {
            $data_detail = $this->Main_model->getDetailAgenda($id);
           
        }
        foreach ($data_detail as $value) {
            $page_data = array(
                'judul' => $value['judul'],
                'isi' => $value['isi'],
                'nama_lengkap' => $value['nama_lengkap'],
                'nama_file_gambar' => $value['nama_file']
                
            );
            if ($tabel != 'Berita') {
                $page_data['id'] = $value['id_agenda'];
                $page_data['tanggal_pelaksanaan'] = $value['tanggal_pelaksanaan'];
                $page_data['tempat_pelaksanaan'] = $value['tempat_pelaksanaan'];
            } else {
                $page_data['id'] = $value['id_artikel_berita'];
                $page_data['tanggal_publish'] = $value['tanggal_publish'];
                $page_data['kategori'] = $value['nama_artikel_kategori'];
            }
        }
        if ($tabel == 'Berita') {
            $page_data['artikel_terkait'] = $this->Main_model->getBeritaTerkait($page_data['id']);
        } else {
            $page_data['artikel_terkait'] = $this->Main_model->getAgendaTerkait($page_data['id']);
        }
        
        $header_data = [
            'nav_konten' => $_SESSION['data_nav'],
            'title' => $page_data['judul']
        ];
        $this->load->view('template/header', $header_data);
        $this->load->view('guest/detail', $page_data);
        //$this->load->view('guest/sidebar');
        $this->load->view('template/footer');
    }
    
    public function extrapage_news($id) {
        $data = $this->Main_model->getExtraPage($id);
        foreach ($data as $value) {
            $page_data = array(
                'judul' => $value['judul'],
                'isi' => $value['isi'],
                'nama_file_image' => $value['nama_file'],               
                'info_terkait' => $this->Main_model->getAnotherExtraPage($value['id_extrapage'])
            );
        }
        $header_data = [
            'nav_konten' => $_SESSION['data_nav'],
            'title' => $page_data['judul']
        ];
        $this->load->view('template/header', $header_data);
        $this->load->view('guest/extrapage_news', $page_data);
        $this->load->view('template/footer');
    }
    public function show_video($id) {
        $page_data['page_data'] = $this->Main_model->getShowVideo($id);
        foreach ($page_data['page_data'] as  $value) {
            $title = $value['text'];
        }
        $header_data = [
            'nav_konten' => $_SESSION['data_nav'],
            'title' => $title
        ];
        $this->load->view('template/header', $header_data);
        $this->load->view('guest/detail_video', $page_data);
        $this->load->view('template/footer');
    }
    
    public function index_berita($filter) {
        redirect(base_url().'all_index/search_index/index_berita/'.$filter);
    }
    public function index_agenda() {
        redirect(base_url().'all_index/search_index/index_agenda');
    }
    public function index_foto() {
        redirect(base_url().'all_index/search_index/index_foto');
    }
    public function index_video() {
        redirect(base_url().'all_index/search_index/index_video');
    }
    public function index_upload() {
        redirect(base_url().'all_index/search_index/index_upload');
    }
    
}
