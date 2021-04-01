<?php
class Posts_hapus extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Posts_model');
        $this->load->library('form_validation');
    }

    public function hapus_menu($id, $parent)
    {
        $this->Posts_model->hapusMenu($id, $parent);
        $this->session->set_flashdata('pesan', 'dihapus');
        redirect(base_url() . "home_admin/manage_menu");
    }

    public function hapus_instansi($id)
    {
        $this->Posts_model->hapusInstansi($id);
        $this->session->set_flashdata('pesan', 'dihapus');
        redirect(base_url() . "home_admin/manage_instansi");
    }

    public function hapus_user($id)
    {
        $this->Posts_model->hapusUser($id);
        $this->session->set_flashdata('pesan', 'dihapus');
        redirect(base_url() . "home_admin/manage_user");
    }

    public function hapus_artikel_kategori($id)
    {
        $this->Posts_model->hapusArtikelKategori($id);
        $this->session->set_flashdata('pesan', 'dihapus');
        redirect(base_url() . "home_admin/manage_category");
    }

    public function hapus_artikel_news($id)
    {
        $this->Posts_model->hapusArtikelBerita($id);
        $this->session->set_flashdata('pesan', 'dihapus');
        redirect(base_url() . "home_admin/manage_article_news");
    }
}
