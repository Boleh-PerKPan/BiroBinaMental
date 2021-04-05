<?php
class Home_user extends CI_Controller
{
    private $nav_konten ="";

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
        $this->load->library('form_validation');
        
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
    public function index()
    {   
        #Pengambilan data navbar
        $data_nav = $this->Main_model->getHeaderData();
        foreach ($data_nav as $data) :
           $this->setnavkonten($data['id_menu'], $data['child'], $data['link'], $data['nama_menu'], $data['status'], $data['level']);
        endforeach; 
        #set session data navbar
        $session = [
            'data_nav' => $this->nav_konten
        ];
        $this->session->set_userdata($session);
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
        $header_data = [
            'nav_konten' => $_SESSION['data_nav'],
            'title' => 'Biro Bina Mental Dan Kesra',
        ];

        $this->load->view('template/header', $header_data);
        $this->load->view('guest/carousel', $data_carousel);
        $this->load->view('guest/index', $berita_utama);
        $this->load->view('guest/sidebar');
        $this->load->view('template/footer');
    }
    public function index_foto() {
        $header_data = [
            'nav_konten' => $_SESSION['data_nav'],
            'title' => 'Index Foto'
        ];
        $this->load->view('template/header', $header_data);
        $this->load->view('guest/index_foto');
        $this->load->view('template/footer');
    }
    public function index_video() {
        $header_data = [
            'nav_konten' => $_SESSION['data_nav'],
            'title' => 'Index Video'
        ];
        $this->load->view('template/header', $header_data);
        $this->load->view('guest/index_video');
        $this->load->view('template/footer');
    }
    public function index_berita() {
        $header_data = [
            'nav_konten' => $_SESSION['data_nav'],
            'title' => 'Index Berita'
        ];
        $this->load->view('template/header', $header_data);
        $this->load->view('guest/index_berita');
        $this->load->view('template/footer');
    }
    public function index_agenda() {
        $header_data = [
            'nav_konten' => $_SESSION['data_nav'],
            'title' => 'Index Agenda'
        ];
        $this->load->view('template/header', $header_data);
        $this->load->view('guest/index_berita');
        //$this->load->view('guest/sidebar');
        $this->load->view('template/footer');
    }
    public function detail($tabel, $id) {
        $data_detail = $this->Main_model->getDetailKonten($tabel, $id);
        foreach ($data_detail as $value) {
            $page_data = array(
                'judul' => $value['judul'],
                'tanggal_publish' => $value['tanggal_publish'],
                'isi' => $value['isi'],
                'nama_user' => $value['nama_lengkap'],
                'nama_file_gambar' => $value['nama_file'],
                'kategori' => $value['nama_artikel_kategori']
            );
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
    public function detail_agenda($judul) {
        $header_data = [
            'nav_konten' => $_SESSION['data_nav'],
            'title' => $judul
        ];
        $this->load->view('template/header',$header_data);
        $this->load->view('guest/detail_berita');
        //$this->load->view('guest/sidebar');
        //$this->load->view('guest/test-page');
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
}
