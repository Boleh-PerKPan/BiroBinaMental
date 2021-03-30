<?php
class Posts_hapus extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Posts_model');
        $this->load->library('form_validation');
    }

    public function hapus_menu($id)
    {
        $this->Posts_model->hapusMenu($id);
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
}
