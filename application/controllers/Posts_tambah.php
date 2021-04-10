<?php
class Posts_tambah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Posts_model');
        $this->load->library('form_validation');
        if (!logged_in()) {
            redirect('auth');
        }
    }

    public function index()
    {
    }

    public function tambah_menu()
    {
        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
            $data['role'] = $_SESSION['role'];
            $data['post'] = $this->Posts_model->getBanyakMenu();
            $data['order_no'] = $data['post'] + 1;
            $this->form_validation->set_rules('name', 'nama menu', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/tambah/tambah_menu', $data);
                $this->load->view('admin/template/footer');
            } else {
                $this->Posts_model->tambahPostMenu();
                $this->session->set_flashdata('pesan', 'ditambahkan');
                redirect(base_url() . "home_admin/manage_menu");
            }
        } else {
            redirect(base_url() . 'home_admin/access_denied');
        }
    }

    public function tambah_instansi()
    {
        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
            $data['role'] = $_SESSION['role'];
            $this->form_validation->set_rules('name', 'nama instansi', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/tambah/tambah_instansi');
                $this->load->view('admin/template/footer');
            } else {
                $this->Posts_model->tambahPostInstansi();
                $this->session->set_flashdata('pesan', 'ditambahkan');
                redirect(base_url() . "home_admin/manage_instansi");
            }
        } else {
            redirect(base_url() . 'home_admin/access_denied');
        }
    }

    public function tambah_user()
    {
        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
            $data['role'] = $_SESSION['role'];
            $data['listrole'] = $this->Posts_model->getRole();
            $data['instansi'] = $this->Posts_model->getInstansi();

            $this->form_validation->set_rules('name', 'nama instansi', 'required');
            $this->form_validation->set_rules('email', 'email', 'required|is_unique[user.email]');
            $this->form_validation->set_rules('username', 'username', 'required|is_unique[user.username]|min_length[4]', [
                'min_length' => 'Username too short'
            ]);
            $this->form_validation->set_rules('password', 'password', 'required|min_length[4]', [
                'min_length' => 'Password too short'
            ]);

            if ($this->form_validation->run() == false) {
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/tambah/tambah_user', $data);
                $this->load->view('admin/template/footer');
            } else {
                $this->Posts_model->tambahPostUser();
                $this->session->set_flashdata('pesan', 'ditambahkan');
                redirect(base_url() . "home_admin/manage_user");
            }
        } else {
            redirect(base_url() . 'home_admin/access_denied');
        }
    }

    public function tambah_category()
    {
        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
            $data['role'] = $_SESSION['role'];
            $this->form_validation->set_rules('name', 'nama kategori', 'required');


            if ($this->form_validation->run() == false) {
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/tambah/tambah_category');
                $this->load->view('admin/template/footer');
            } else {
                $this->Posts_model->tambahPostArtikelKategori();
                $this->session->set_flashdata('pesan', 'ditambahkan');
                redirect(base_url() . "home_admin/manage_category");
            }
        } else {
            redirect(base_url() . 'home_admin/access_denied');
        }
    }

    public function tambah_article_news()
    {

        $data['role'] = $_SESSION['role'];
        $data['kategori'] = $this->Posts_model->getArtikelKategori();
        date_default_timezone_set('Asia/Jakarta');
        $data['tanggal_publish'] = date("Y-m-d H:i:s");
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/template/header', $data);
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

            $this->Posts_model->tambahGaleriKontenBerita($namaFileBaru, $_SESSION['id']);

            $LastGaleriKonten = $this->Posts_model->getGaleriKontenLastID();

            $this->Posts_model->tambahPostArtikelBerita($LastGaleriKonten, $_SESSION['id']);

            $this->Posts_model->tambahBeritaKategori();
            $this->session->set_flashdata('pesan', 'ditambahkan');
            redirect(base_url() . "home_admin/manage_article_news");
        }
    }

    public function tambah_article_upload()
    {
        $data['role'] = $_SESSION['role'];
        date_default_timezone_set('Asia/Jakarta');
        $data['tanggal_publish'] = date("Y-m-d H:i:s");
        $this->form_validation->set_rules('judul', 'Judul', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/tambah/tambah_article_upload', $data);
            $this->load->view('admin/template/footer');
        } else {
            #pengambilan File
            if (isset($_FILES)) {
                $namaFile = $_FILES['file_upload']['name'];
                $ukuranFile = $_FILES['file_upload']['size'];
                $error = $_FILES['file_upload']['error'];
                $tmpName = $_FILES['file_upload']['tmp_name'];

                // cek apakah yang di upload adalah gambar
                $ekstensiGambarValid = ['pdf'];
                $ekstensiGambar = explode('.', $namaFile);
                $ekstensiGambar = strtolower(end($ekstensiGambar));

                // lolos pengecekan, gambar siap di upload
                // generate nama gambar baru
                $namaFileBaru = uniqid();
                $namaFileBaru .= '.';
                $namaFileBaru .= $ekstensiGambar;
                move_uploaded_file($tmpName, 'assets/file_upload/' . $namaFileBaru);
            } else {
            }

            $this->Posts_model->tambahPostArtikelUpload($namaFileBaru, $_SESSION['id']);
            $this->session->set_flashdata('pesan', 'ditambahkan');
            redirect(base_url() . "home_admin/manage_article_upload");
        }
    }

    public function tambah_slide_show()
    {
        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
            $data['role'] = $_SESSION['role'];
            $this->form_validation->set_rules('judul', 'Judul', 'required', $data);

            if ($this->form_validation->run() == false) {

                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/tambah/tambah_slide_show');
                $this->load->view('admin/template/footer');
            } else {
                #pengambilan File
                if (isset($_FILES)) {
                    $namaFile = $_FILES['gambar']['name'];
                    $ukuranFile = $_FILES['gambar']['size'];
                    $error = $_FILES['gambar']['error'];
                    $tmpName = $_FILES['gambar']['tmp_name'];

                    // cek apakah yang di upload adalah gambar
                    $ekstensiGambarValid = ['pdf'];
                    $ekstensiGambar = explode('.', $namaFile);
                    $ekstensiGambar = strtolower(end($ekstensiGambar));

                    // lolos pengecekan, gambar siap di upload
                    // generate nama gambar baru
                    $namaFileBaru = uniqid();
                    $namaFileBaru .= '.';
                    $namaFileBaru .= $ekstensiGambar;
                    move_uploaded_file($tmpName, 'assets/img/' . $namaFileBaru);
                } else {
                }

                $this->Posts_model->tambahPostSlideShow($namaFileBaru, $_SESSION['id']);
                $this->session->set_flashdata('pesan', 'ditambahkan');
                redirect(base_url() . "home_admin/manage_slide_show");
            }
        } else {
            redirect(base_url() . 'home_admin/access_denied');
        }
    }

    public function tambah_page_news()
    {
        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
            $data['role'] = $_SESSION['role'];
            $this->form_validation->set_rules('judul', 'Judul', 'required');
            $this->form_validation->set_rules('isi', 'Isi', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/tambah/tambah_page_news');
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

                $this->Posts_model->tambahGaleriKontenExtraPage($namaFileBaru, $_SESSION['id']);

                $LastGaleriKonten = $this->Posts_model->getGaleriKontenLastID();

                $this->Posts_model->tambahPostPageNews($LastGaleriKonten, $_SESSION['id']);
                $this->session->set_flashdata('pesan', 'ditambahkan');
                redirect(base_url() . "home_admin/manage_page_news");
            }
        } else {
            redirect(base_url() . 'home_admin/access_denied');
        }
    }

    public function tambah_photo()
    {
        $data['role'] = $_SESSION['role'];
        $this->form_validation->set_rules('judul', 'Judul', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/tambah/tambah_photo');
            $this->load->view('admin/template/footer');
        } else {
            #pengambilan File
            if (isset($_FILES)) {
                $namaFile = $_FILES['gambar']['name'];
                $ukuranFile = $_FILES['gambar']['size'];
                $error = $_FILES['gambar']['error'];
                $tmpName = $_FILES['gambar']['tmp_name'];

                // cek apakah yang di upload adalah gambar
                $ekstensiGambarValid = ['pdf'];
                $ekstensiGambar = explode('.', $namaFile);
                $ekstensiGambar = strtolower(end($ekstensiGambar));

                // lolos pengecekan, gambar siap di upload
                // generate nama gambar baru
                $namaFileBaru = uniqid();
                $namaFileBaru .= '.';
                $namaFileBaru .= $ekstensiGambar;
                move_uploaded_file($tmpName, 'assets/img/' . $namaFileBaru);
            } else {
            }

            $this->Posts_model->tambahPostPhoto($namaFileBaru, $_SESSION['id']);
            $this->session->set_flashdata('pesan', 'ditambahkan');
            redirect(base_url() . "home_admin/manage_photo");
        }
    }

    public function tambah_video()
    {
        $data['role'] = $_SESSION['role'];
        $this->form_validation->set_rules('judul', 'Judul', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/tambah/tambah_video');
            $this->load->view('admin/template/footer');
        } else {
            $this->Posts_model->tambahPostVideo($_SESSION['id']);
            $this->session->set_flashdata('pesan', 'ditambahkan');
            redirect(base_url() . "home_admin/manage_video");
        }
    }

    public function tambah_agenda()
    {
        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2 || $_SESSION['role'] == 5) {
            $data['role'] = $_SESSION['role'];
            $this->form_validation->set_rules('judul', 'Judul', 'required');
            $this->form_validation->set_rules('isi', 'Isi', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/tambah/tambah_agenda');
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

                $this->Posts_model->tambahGaleriKontenAgenda($namaFileBaru, $_SESSION['id']);

                $LastGaleriKonten = $this->Posts_model->getGaleriKontenLastID();

                $this->Posts_model->tambahPostAgenda($LastGaleriKonten, $_SESSION['id']);

                $this->session->set_flashdata('pesan', 'ditambahkan');
                redirect(base_url() . "home_admin/manage_agenda");
            }
        } else {
            redirect(base_url() . 'home_admin/access_denied');
        }
    }
}
