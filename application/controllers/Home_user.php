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
    private function setnavkonten($parentid, $child,$link,$namamenu) {
        if ($child == 0) {
            //data yg ditransfer dari db hanya yang parent nya = 0
            $this->nav_konten .= 
                '<li class="nav-item active">
                    <a class="nav-link " href="';
                    $this->nav_konten .= $link;
                    $this->nav_konten .= '">';
                    $this->nav_konten .= $namamenu;
                    $this->nav_konten .= '</a>
                </li>';
        } else {
            // get the child from db with transfer parent id number 
            $this->nav_konten .= ' <li class="nav-item active dropdown">
            <a href="#" data-target="#';
            $this->nav_konten .= $parentid;
            $this->nav_konten .='" class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="collapse" aria-expanded="false">';
            $this->nav_konten .= $namamenu;
            $this->nav_konten .= '</a><ul class="collapse dropdown-menu" id="';
            $this->nav_konten .=$parentid;
            $this->nav_konten .='" aria-labelledby="navbarDropdown">';
                        
            $data_nav = $this->Main_model->getHeaderData($parentid);
            foreach ($data_nav as $data) :
                $this->setnavkonten($data['id_menu'], $data['child'], $data['link'], $data['nama_menu']);
            endforeach;    
                        
            $act =    '    <a class="dropdown-item" href="<?= base_url() ?>home_user/extrapage_news/visimisi">Visi dan Misi</a>
                                <a class="dropdown-item" href="<?= base_url() ?>home_user/extrapage_news/strukturOrganisasi">Struktur Organisasi</a>
                           ';
            $this->nav_konten .= '</ul></li>';
            //$child = $data['parent_id']; 
            //$header_data['child'] = $this->Main_model->getHeaderData($data['parent_id']);
        } 
    }
    public function index()
    {   
        $data_nav = $this->Main_model->getHeaderData();
        foreach ($data_nav as $data) :
           $this->setnavkonten($data['id_menu'], $data['child'], $data['link'], $data['nama_menu']);
        endforeach; 

        // $header_data = $this->Main_model->getHeaderData();
        //         foreach ($header_data as $datas) {
        //            echo $datas['id_menu'];
        //        }
        // $header_data['class'] = 'dropdown';
        // $header_data['dropdown_item'] = ' id="navbarDropdown" data-toggle="collapse" aria-expanded="false" ';
        $header_data = [
            'data' => $data_nav,
            'nav_konten' => $this->nav_konten,
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
