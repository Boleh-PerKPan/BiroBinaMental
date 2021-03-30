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
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage/manage_category');
        $this->load->view('admin/template/footer');
    }

    public function manage_article_news()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage/manage_article_news');
        $this->load->view('admin/template/footer');
    }

    public function manage_article_upload()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage/manage_article_upload');
        $this->load->view('admin/template/footer');
    }

    public function manage_slide_show()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage/manage_slide_show');
        $this->load->view('admin/template/footer');
    }

    public function manage_page_news()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage/manage_page_news');
        $this->load->view('admin/template/footer');
    }

    public function manage_photo()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage/manage_photo');
        $this->load->view('admin/template/footer');
    }

    public function manage_video()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/manage/manage_video');
        $this->load->view('admin/template/footer');
    }
}
