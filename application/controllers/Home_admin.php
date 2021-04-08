<?php
class Home_admin extends CI_Controller
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

        $data['role'] = $_SESSION['role'];
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/index');
        $this->load->view('admin/template/footer');
    }

    public function access_denied()
    {
        $data['role'] = $_SESSION['role'];
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/access_denied');
        $this->load->view('admin/template/footer');
    }

    public function manage_menu()
    {
        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
            $data['role'] = $_SESSION['role'];
            $data['posts'] = $this->Posts_model->getMenu();
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/manage/manage_menu', $data);
            $this->load->view('admin/template/footer');
        } else {
            redirect(base_url() . 'home_admin/access_denied');
        }
    }

    public function manage_instansi()
    {
        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
            $data['role'] = $_SESSION['role'];
            $data['posts'] = $this->Posts_model->getInstansi();
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/manage/manage_instansi', $data);
            $this->load->view('admin/template/footer');
        } else {
            redirect(base_url() . 'home_admin/access_denied');
        }
    }

    public function manage_user()
    {
        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
            $data['role'] = $_SESSION['role'];
            $data['posts'] = $this->Posts_model->getUser();
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/manage/manage_user', $data);
            $this->load->view('admin/template/footer');
        } else {
            redirect(base_url() . 'home_admin/access_denied');
        }
    }

    public function manage_category()
    {
        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
            $data['role'] = $_SESSION['role'];
            $data['posts'] = $this->Posts_model->getArtikelKategori();
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/manage/manage_category', $data);
            $this->load->view('admin/template/footer');
        } else {
            redirect(base_url() . 'home_admin/access_denied');
        }
    }

    public function manage_article_news()
    {
        $data['role'] = $_SESSION['role'];
        if ($_SESSION['role'] == 3 || $_SESSION['role'] == 5) {
            $id = $_SESSION['id'];
            $data['posts'] = $this->Posts_model->getArtikelBeritaById($id);
        } else {
            $data['posts'] = $this->Posts_model->getArtikelBerita();
        }
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/manage/manage_article_news', $data);
        $this->load->view('admin/template/footer');
    }

    public function manage_article_upload()
    {
        $data['role'] = $_SESSION['role'];
        if ($_SESSION['role'] == 3 || $_SESSION['role'] == 5) {
            $id = $_SESSION['id'];
            $data['posts'] = $this->Posts_model->getArtikelUploadById($id);
        } else {
            $data['posts'] = $this->Posts_model->getArtikelUpload();
        }
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/manage/manage_article_upload', $data);
        $this->load->view('admin/template/footer');
    }

    public function manage_slide_show()
    {
        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
            $data['role'] = $_SESSION['role'];
            $data['posts'] = $this->Posts_model->getSlideShow();
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/manage/manage_slide_show', $data);
            $this->load->view('admin/template/footer');
        } else {
            redirect(base_url() . 'home_admin/access_denied');
        }
    }

    public function manage_page_news()
    {
        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
            $data['role'] = $_SESSION['role'];
            $data['posts'] = $this->Posts_model->getPageNews();
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/manage/manage_page_news', $data);
            $this->load->view('admin/template/footer');
        } else {
            redirect(base_url() . 'home_admin/access_denied');
        }
    }

    public function manage_photo()
    {
        $data['role'] = $_SESSION['role'];
        if ($_SESSION['role'] == 3 || $_SESSION['role'] == 5) {
            $id = $_SESSION['id'];
            $data['posts'] = $this->Posts_model->getPhotoById($id);
        } else {
            $data['posts'] = $this->Posts_model->getPhoto();
        }
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/manage/manage_photo', $data);
        $this->load->view('admin/template/footer');
    }

    public function manage_video()
    {
        $data['role'] = $_SESSION['role'];
        if ($_SESSION['role'] == 3 || $_SESSION['role'] == 5) {
            $id = $_SESSION['id'];
            $data['posts'] = $this->Posts_model->getVideoById($id);
        } else {
            $data['posts'] = $this->Posts_model->getVideo();
        }
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/manage/manage_video', $data);
        $this->load->view('admin/template/footer');
    }

    public function manage_agenda()
    {
        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2 || $_SESSION['role'] == 5) {
            $data['role'] = $_SESSION['role'];

            if ($_SESSION['role'] == 5) {
                $id = $_SESSION['id'];
                $data['posts'] = $this->Posts_model->getAgendaById($id);
            } else {
                $data['posts'] = $this->Posts_model->getAgenda();
            }
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/manage/manage_agenda', $data);
            $this->load->view('admin/template/footer');
        } else {
            redirect(base_url() . 'home_admin/access_denied');
        }
    }
}
