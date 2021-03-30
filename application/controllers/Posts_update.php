<?php
class Posts_update extends CI_Controller
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

    #MENU
    public function Update_menu($id)
    {
        $data['judul'] = "Update Menu";
        $data['post'] = $this->Posts_model->getMenuId($id);
        $data['menu'] = $this->Posts_model->getMenu();
        $this->form_validation->set_rules('name', 'nama menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/template/header');
            $this->load->view('admin/Update/update_menu', $data);
            $this->load->view('admin/template/footer');
        } else {
            $this->Posts_model->updatePostMenu($id);
            $this->session->set_flashdata('pesan', 'diupdate');
            redirect(base_url() . "home_admin/manage_menu");
        }
    }

    public function Tambah_submenu($id)
    {
        $data['post'] = $this->Posts_model->getBanyakMenu();
        $data['order_no'] = $data['post'] + 1;
        $data['id_parent'] = $id;
        $this->form_validation->set_rules('name', 'nama menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/template/header');
            $this->load->view('admin/tambah/sub_modul/tambah_menu', $data);
            $this->load->view('admin/template/footer');
        } else {
            $this->Posts_model->tambahPostSubMenu($id);
            $this->session->set_flashdata('pesan', 'ditambahkan');
            redirect(base_url() . "home_admin/manage_menu");
        }
    }

    #INSTANSI
    public function Update_instansi($id)
    {
        $data['judul'] = "Update Instansi";
        $data['post'] = $this->Posts_model->getInstansiId($id);
        $this->form_validation->set_rules('name', 'nama Instansi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/template/header');
            $this->load->view('admin/Update/update_instansi', $data);
            $this->load->view('admin/template/footer');
        } else {
            $this->Posts_model->updatePostInstansi($id);
            $this->session->set_flashdata('pesan', 'diupdate');
            redirect(base_url() . "home_admin/manage_instansi");
        }
    }

    public function Tambah_subinstansi($id)
    {
        $data['id_parent'] = $id;
        $this->form_validation->set_rules('name', 'nama instansi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/template/header');
            $this->load->view('admin/tambah/sub_modul/tambah_instansi', $data);
            $this->load->view('admin/template/footer');
        } else {
            $this->Posts_model->tambahPostSubInstansi($id);
            $this->session->set_flashdata('pesan', 'ditambahkan');
            redirect(base_url() . "home_admin/manage_instansi");
        }
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
