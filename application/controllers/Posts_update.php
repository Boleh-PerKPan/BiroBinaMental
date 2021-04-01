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
            $this->Posts_model->updatePostSubMenu($id);
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

    public function Update_user($id)
    {
        $data['judul'] = "Update User";
        $data['post'] = $this->Posts_model->getUserId($id);
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
            $this->load->view('admin/Update/update_user', $data);
            $this->load->view('admin/template/footer');
        } else {
            $this->Posts_model->updatePostUser($id);
            $this->session->set_flashdata('pesan', 'diupdate');
            redirect(base_url() . "home_admin/manage_user");
        }
    }

    public function Update_category($id)
    {
        $data['judul'] = "Update Kategori";
        $data['post'] = $this->Posts_model->getArtikelKategoriId($id);

        $this->form_validation->set_rules('name', 'nama Kategori', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/template/header');
            $this->load->view('admin/Update/update_category', $data);
            $this->load->view('admin/template/footer');
        } else {
            $this->Posts_model->updatePostArtikelKategori($id);
            $this->session->set_flashdata('pesan', 'diupdate');
            redirect(base_url() . "home_admin/manage_category");
        }
    }

    public function Update_artikel_news($id)
    {
        $data['post'] = $this->Posts_model->getArtikelBeritaId($id);
        $data['kategori'] = $this->Posts_model->getArtikelKategori();


        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/template/header');
            $this->load->view('admin/Update/update_article_news', $data);
            $this->load->view('admin/template/footer');
        } else {
            $this->Posts_model->updatePostArtikelBerita($id);
            $this->session->set_flashdata('pesan', 'diupdate');
            redirect(base_url() . "home_admin/manage_article_news");
        }
    }

    public function Update_artikel_upload($id)
    {
        $data['post'] = $this->Posts_model->getArtikelUploadId($id);

        $this->form_validation->set_rules('judul', 'Judul', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/template/header');
            $this->load->view('admin/Update/update_article_upload', $data);
            $this->load->view('admin/template/footer');
        } else {
            $this->Posts_model->updatePostArtikelUpload($id);
            $this->session->set_flashdata('pesan', 'diupdate');
            redirect(base_url() . "home_admin/manage_article_upload");
        }
    }

    public function Update_slide_show($id)
    {
        $data['post'] = $this->Posts_model->getSlideShowId($id);

        $this->form_validation->set_rules('judul', 'Judul', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/template/header');
            $this->load->view('admin/Update/update_slide_show', $data);
            $this->load->view('admin/template/footer');
        } else {
            $this->Posts_model->updatePostSlideShow($id);
            $this->session->set_flashdata('pesan', 'diupdate');
            redirect(base_url() . "home_admin/manage_slide_show");
        }
    }

    public function Update_page_news($id)
    {
        $data['post'] = $this->Posts_model->getPageNewsId($id);

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/template/header');
            $this->load->view('admin/Update/update_page_news', $data);
            $this->load->view('admin/template/footer');
        } else {
            $this->Posts_model->updatePostPagenews($id);
            $this->session->set_flashdata('pesan', 'diupdate');
            redirect(base_url() . "home_admin/manage_page_news");
        }
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
