<?php
class Home_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('');
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
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage_menu');
        $this->load->view('admin/template/footer');
    }

    public function manage_instansi()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage_instansi');
        $this->load->view('admin/template/footer');
    }

    public function manage_user()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage_user');
        $this->load->view('admin/template/footer');
    }

    public function manage_category()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage_category');
        $this->load->view('admin/template/footer');
    }

    public function manage_article_news()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage_article_news');
        $this->load->view('admin/template/footer');
    }

    public function manage_article_upload()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage_article_upload');
        $this->load->view('admin/template/footer');
    }

    public function manage_slide_show()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage_slide_show');
        $this->load->view('admin/template/footer');
    }

    public function manage_page_news()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage_page_news');
        $this->load->view('admin/template/footer');
    }

    public function manage_photo()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage_photo');
        $this->load->view('admin/template/footer');
    }

    public function manage_video()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage_video');
        $this->load->view('admin/template/footer');
    }
}
