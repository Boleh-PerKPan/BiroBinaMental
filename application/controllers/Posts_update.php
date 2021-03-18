<?php
class Posts_update extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('');
        $this->load->library('form_validation');
    }

    public function index()
    {
    }

    public function Update_menu()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/Update/Update_menu');
        $this->load->view('admin/template/footer');
    }

    public function Update_instansi()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/Update/Update_instansi');
        $this->load->view('admin/template/footer');
    }

    public function Update_user()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/Update/Update_user');
        $this->load->view('admin/template/footer');
    }

    public function Update_category()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/Update/Update_category');
        $this->load->view('admin/template/footer');
    }

    public function Update_article_news()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/Update/Update_article_news');
        $this->load->view('admin/template/footer');
    }

    public function Update_article_upload()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/Update/Update_article_upload');
        $this->load->view('admin/template/footer');
    }

    public function Update_slide_show()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/Update/Update_slide_show');
        $this->load->view('admin/template/footer');
    }

    public function Update_page_news()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/Update/Update_page_news');
        $this->load->view('admin/template/footer');
    }

    public function Update_photo()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/Update/Update_photo');
        $this->load->view('admin/template/footer');
    }

    public function Update_video()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/Update/Update_video');
        $this->load->view('admin/template/footer');
    }
}
