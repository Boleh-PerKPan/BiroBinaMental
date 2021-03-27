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
        $this->load->view('admin/template/header');
        $this->load->view('admin/tambah/tambah_instansi');
        $this->load->view('admin/template/footer');
    }

    public function tambah_user()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/tambah/tambah_user');
        $this->load->view('admin/template/footer');
    }

    public function tambah_category()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/tambah/tambah_category');
        $this->load->view('admin/template/footer');
    }

    public function tambah_article_news()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/tambah/tambah_article_news');
        $this->load->view('admin/template/footer');
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
