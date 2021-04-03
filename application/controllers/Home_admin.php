<?php
class Home_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Posts_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $this->load->view('admin/template/header');
        $this->load->view('admin/index');
        $this->load->view('admin/template/footer');
    }

    public function manage_menu()
    {
        $data['posts'] = $this->Posts_model->getMenu();
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage/manage_menu', $data);
        $this->load->view('admin/template/footer');
    }

    public function manage_instansi()
    {
        $data['posts'] = $this->Posts_model->getInstansi();
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage/manage_instansi', $data);
        $this->load->view('admin/template/footer');
    }

    public function manage_user()
    {
        $data['posts'] = $this->Posts_model->getUser();
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage/manage_user', $data);
        $this->load->view('admin/template/footer');
    }

    public function manage_category()
    {
        $data['posts'] = $this->Posts_model->getArtikelKategori();
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage/manage_category', $data);
        $this->load->view('admin/template/footer');
    }

    public function manage_article_news()
    {
        $data['posts'] = $this->Posts_model->getArtikelBerita();
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage/manage_article_news', $data);
        $this->load->view('admin/template/footer');
    }

    public function manage_article_upload()
    {
        $data['posts'] = $this->Posts_model->getArtikelUpload();
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage/manage_article_upload', $data);
        $this->load->view('admin/template/footer');
    }

    public function manage_slide_show()
    {
        $data['posts'] = $this->Posts_model->getSlideShow();
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage/manage_slide_show', $data);
        $this->load->view('admin/template/footer');
    }

    public function manage_page_news()
    {
        $data['posts'] = $this->Posts_model->getPageNews();
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage/manage_page_news', $data);
        $this->load->view('admin/template/footer');
    }

    public function manage_photo()
    {
        $data['posts'] = $this->Posts_model->getPhoto();
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage/manage_photo', $data);
        $this->load->view('admin/template/footer');
    }

    public function manage_video()
    {
        $data['posts'] = $this->Posts_model->getVideo();
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage/manage_video', $data);
        $this->load->view('admin/template/footer');
    }

    public function manage_agenda()
    {
        $data['posts'] = $this->Posts_model->getAgenda();
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage/manage_agenda', $data);
        $this->load->view('admin/template/footer');
    }
}
