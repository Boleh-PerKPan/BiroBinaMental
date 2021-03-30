<?php
class Posts_tambah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Posts_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
    }

    public function tambah_menu()
    {
        $data['post'] = $this->Posts_model->getBanyakMenu();
        $data['order_no'] = $data['post'] + 1;
        $this->form_validation->set_rules('name', 'nama menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/template/header');
            $this->load->view('admin/tambah/tambah_menu', $data);
            $this->load->view('admin/template/footer');
        } else {
            $this->Posts_model->tambahPostMenu();
            $this->session->set_flashdata('pesan', 'ditambahkan');
            redirect(base_url() . "home_admin/manage_menu");
        }
    }

    public function tambah_instansi()
    {
        $this->form_validation->set_rules('name', 'nama instansi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/template/header');
            $this->load->view('admin/tambah/tambah_instansi');
            $this->load->view('admin/template/footer');
        } else {
            $this->Posts_model->tambahPostInstansi();
            $this->session->set_flashdata('pesan', 'ditambahkan');
            redirect(base_url() . "home_admin/manage_instansi");
        }
    }

    public function tambah_user()
    {
        $data['instansi'] = $this->Posts_model->getInstansi();
        $data['role'] = $this->Posts_model->getRole();

        $this->form_validation->set_rules('name', 'nama instansi', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('username', 'username', 'required|min_length[4]', [
            'min_length' => 'Username too short'
        ]);
        $this->form_validation->set_rules('password', 'password', 'required|min_length[4]', [
            'min_length' => 'Password too short'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/template/header');
            $this->load->view('admin/tambah/tambah_user', $data);
            $this->load->view('admin/template/footer');
        } else {
            $this->Posts_model->tambahPostUser();
            $this->session->set_flashdata('pesan', 'ditambahkan');
            redirect(base_url() . "home_admin/manage_user");
        }
    }

    public function tambah_category()
    {
        $this->form_validation->set_rules('name', 'nama kategori', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('admin/template/header');
            $this->load->view('admin/tambah/tambah_category');
            $this->load->view('admin/template/footer');
        } else {
            $this->Posts_model->tambahPostArtikelKategori();
            $this->session->set_flashdata('pesan', 'ditambahkan');
            redirect(base_url() . "home_admin/manage_category");
        }
    }

    public function tambah_article_news()
    {
        $data['kategori'] = $this->Posts_model->getArtikelKategori();
        date_default_timezone_set('Asia/Jakarta');
        $data['tanggal_publish'] = date("Y-m-d H:i:s");
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/template/header');
            $this->load->view('admin/tambah/tambah_article_news', $data);
            $this->load->view('admin/template/footer');
        } else {
            #pengambilan Foto
            if (isset($_FILES)) {
                $namaFile = $_FILES['gambar']['name'];
                $ukuranFile = $_FILES['gambar']['size'];
                $error = $_FILES['gambar']['error'];
                $tmpName = $_FILES['gambar']['tmp_name'];

                // cek apakah yang di upload adalah gambar
                $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
                $ekstensiGambar = explode('.', $namaFile);
                $ekstensiGambar = strtolower(end($ekstensiGambar));

                // lolos pengecekan, gambar siap di upload
                // generate nama gambar baru
                $namaFileBaru = uniqid();
                $namaFileBaru .= '.';
                $namaFileBaru .= $ekstensiGambar;
                move_uploaded_file($tmpName, 'assets/img/' . $namaFileBaru);
            } else {
                $namaFileBaru = 'default.png';
            }

            $userdataSTATIS = "1";
            $this->Posts_model->tambahGaleriKontenBerita($namaFileBaru, $userdataSTATIS);

            $LastGaleriKonten = $this->Posts_model->getGaleriKontenLastID();

            $this->Posts_model->tambahPostArtikelBerita($LastGaleriKonten, $userdataSTATIS);
            $this->session->set_flashdata('pesan', 'ditambahkan');
            redirect(base_url() . "home_admin/manage_article_news");
        }
    }

    public function tambah_article_upload()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/tambah/tambah_article_upload');
        $this->load->view('admin/template/footer');
    }

    public function tambah_slide_show()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/tambah/tambah_slide_show');
        $this->load->view('admin/template/footer');
    }

    public function tambah_page_news()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/tambah/tambah_page_news');
        $this->load->view('admin/template/footer');
    }

    public function tambah_photo()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/tambah/tambah_photo');
        $this->load->view('admin/template/footer');
    }

    public function tambah_video()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/tambah/tambah_video');
        $this->load->view('admin/template/footer');
    }
}
