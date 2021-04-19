<?php
class Posts_update extends CI_Controller
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
    }

    #MENU
    public function Update_menu($id)
    {
        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
            $data['role'] = $_SESSION['role'];
            $data['judul'] = "Update Menu";
            $data['post'] = $this->Posts_model->getMenuId($id);
            $data['menu'] = $this->Posts_model->getMenu();
            $this->form_validation->set_rules('name', 'nama menu', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/Update/update_menu', $data);
                $this->load->view('admin/template/footer');
            } else {
                $this->Posts_model->updatePostMenu($id);
                $this->session->set_flashdata('pesan', 'diupdate');
                redirect(base_url() . "home_admin/manage_menu");
            }
        } else {
            redirect(base_url() . 'home_admin/access_denied');
        }
    }

    public function Tambah_submenu($id)
    {
        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
            $data['role'] = $_SESSION['role'];
            $data['post'] = $this->Posts_model->getBanyakMenu();
            $data['order_no'] = $data['post'] + 1;
            $data['id_parent'] = $id;
            $this->form_validation->set_rules('name', 'nama menu', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/tambah/sub_modul/tambah_menu', $data);
                $this->load->view('admin/template/footer');
            } else {
                $level = $this->Posts_model->getMenuId($id);
                $level['level'] = $level['level'] + 1;

                $this->Posts_model->tambahPostSubMenu($id, $level);
                $this->session->set_flashdata('pesan', 'ditambahkan');
                redirect(base_url() . "home_admin/manage_menu");
            }
        } else {
            redirect(base_url() . 'home_admin/access_denied');
        }
    }

    #INSTANSI
    public function Update_instansi($id)
    {
        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
            $data['role'] = $_SESSION['role'];
            $data['judul'] = "Update Instansi";
            $data['post'] = $this->Posts_model->getInstansiId($id);
            $this->form_validation->set_rules('name', 'nama Instansi', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/Update/update_instansi', $data);
                $this->load->view('admin/template/footer');
            } else {
                $this->Posts_model->updatePostInstansi($id);
                $this->session->set_flashdata('pesan', 'diupdate');
                redirect(base_url() . "home_admin/manage_instansi");
            }
        } else {
            redirect(base_url() . 'home_admin/access_denied');
        }
    }

    public function Tambah_subinstansi($id)
    {
        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
            $data['role'] = $_SESSION['role'];
            $data['id_parent'] = $id;
            $this->form_validation->set_rules('name', 'nama instansi', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/tambah/sub_modul/tambah_instansi', $data);
                $this->load->view('admin/template/footer');
            } else {
                $this->Posts_model->tambahPostSubInstansi($id);
                $this->session->set_flashdata('pesan', 'ditambahkan');
                redirect(base_url() . "home_admin/manage_instansi");
            }
        } else {
            redirect(base_url() . 'home_admin/access_denied');
        }
    }

    public function Update_user($id)
    {
        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
            $data['listrole'] = $this->Posts_model->getRole();
            $data['role'] = $_SESSION['role'];
            $data['judul'] = "Update User";
            $data['post'] = $this->Posts_model->getUserId($id);
            $data['instansi'] = $this->Posts_model->getInstansiForUser();

            $this->form_validation->set_rules('name', 'nama instansi', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('username', 'username', 'required|min_length[4]', [
                'min_length' => 'Username too short'
            ]);

            $this->form_validation->set_rules('password', 'password', 'required|min_length[4]', [
                'min_length' => 'Password too short'
            ]);

            if ($this->form_validation->run() == false) {
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/Update/update_user', $data);
                $this->load->view('admin/template/footer');
            } else {
                $this->Posts_model->updatePostUser($id);
                $this->session->set_flashdata('pesan', 'diupdate');
                redirect(base_url() . "home_admin/manage_user");
            }
        } else {
            redirect(base_url() . 'home_admin/access_denied');
        }
    }

    public function Update_category($id)
    {
        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
            $data['role'] = $_SESSION['role'];
            $data['judul'] = "Update Kategori";
            $data['post'] = $this->Posts_model->getArtikelKategoriId($id);

            $this->form_validation->set_rules('name', 'nama Kategori', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/Update/update_category', $data);
                $this->load->view('admin/template/footer');
            } else {
                $this->Posts_model->updatePostArtikelKategori($id);
                $this->session->set_flashdata('pesan', 'diupdate');
                redirect(base_url() . "home_admin/manage_category");
            }
        } else {
            redirect(base_url() . 'home_admin/access_denied');
        }
    }

    public function Update_artikel_news($id)
    {
        $data['role'] = $_SESSION['role'];
        $data['post'] = $this->Posts_model->getArtikelBeritaId($id);
        $data['kategori'] = $this->Posts_model->getArtikelKategori();

        #if ($_SESSION['role'] == 3 || $_SESSION['role'] == 5) {
        #$this->Posts_model->cekIdUserArtikelBerita
        #}
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');

        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
            if ($this->form_validation->run() == false) {
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/Update/update_article_news', $data);
                $this->load->view('admin/template/footer');
            } else {
                $this->Posts_model->updatePostArtikelBerita($id);
                $this->session->set_flashdata('pesan', 'diupdate');
                redirect(base_url() . "home_admin/manage_article_news");
            }
        } else {
            $artikel_berita = $this->Posts_model->getArtikelBeritaId($id);
            if ($_SESSION['id'] == $artikel_berita['id_user']) {
                if ($this->form_validation->run() == false) {
                    $this->load->view('admin/template/header', $data);
                    $this->load->view('admin/Update/update_article_news', $data);
                    $this->load->view('admin/template/footer');
                } else {
                    $this->Posts_model->updatePostArtikelBerita($id);
                    $this->session->set_flashdata('pesan', 'diupdate');
                    redirect(base_url() . "home_admin/manage_article_news");
                }
            } else {
                redirect(base_url() . 'home_admin/access_denied');
            }
        }
    }

    public function Update_artikel_upload($id)
    {
        $data['role'] = $_SESSION['role'];
        $data['post'] = $this->Posts_model->getArtikelUploadId($id);

        $this->form_validation->set_rules('judul', 'Judul', 'required');

        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
            if ($this->form_validation->run() == false) {
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/Update/update_article_upload', $data);
                $this->load->view('admin/template/footer');
            } else {
                $this->Posts_model->updatePostArtikelUpload($id);
                $this->session->set_flashdata('pesan', 'diupdate');
                redirect(base_url() . "home_admin/manage_article_upload");
            }
        } else {
            $artikel_upload = $this->Posts_model->getArtikelUploadId($id);
            if ($_SESSION['id'] == $artikel_upload['id_user']) {
                if ($this->form_validation->run() == false) {
                    $this->load->view('admin/template/header', $data);
                    $this->load->view('admin/Update/update_article_upload', $data);
                    $this->load->view('admin/template/footer');
                } else {
                    $this->Posts_model->updatePostArtikelUpload($id);
                    $this->session->set_flashdata('pesan', 'diupdate');
                    redirect(base_url() . "home_admin/manage_article_upload");
                }
            } else {
                redirect(base_url() . 'home_admin/access_denied');
            }
        }
    }

    public function Update_slide_show($id)
    {
        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
            $data['role'] = $_SESSION['role'];
            $data['post'] = $this->Posts_model->getSlideShowId($id);

            $this->form_validation->set_rules('judul', 'Judul', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/Update/update_slide_show', $data);
                $this->load->view('admin/template/footer');
            } else {
                $this->Posts_model->updatePostSlideShow($id);
                $this->session->set_flashdata('pesan', 'diupdate');
                redirect(base_url() . "home_admin/manage_slide_show");
            }
        } else {
            redirect(base_url() . 'home_admin/access_denied');
        }
    }

    public function Update_page_news($id)
    {
        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
            $data['role'] = $_SESSION['role'];
            $data['post'] = $this->Posts_model->getPageNewsId($id);

            $this->form_validation->set_rules('judul', 'Judul', 'required');
            $this->form_validation->set_rules('isi', 'Isi', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/Update/update_page_news', $data);
                $this->load->view('admin/template/footer');
            } else {
                $this->Posts_model->updatePostPagenews($id);
                $this->session->set_flashdata('pesan', 'diupdate');
                redirect(base_url() . "home_admin/manage_page_news");
            }
        } else {
            redirect(base_url() . 'home_admin/access_denied');
        }
    }

    public function Update_photo($id)
    {
        $data['role'] = $_SESSION['role'];
        $data['post'] = $this->Posts_model->getPhotoId($id);

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
            if ($this->form_validation->run() == false) {
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/Update/update_photo', $data);
                $this->load->view('admin/template/footer');
            } else {
                $this->Posts_model->updatePostPhoto($id);
                $this->session->set_flashdata('pesan', 'diupdate');
                redirect(base_url() . "home_admin/manage_photo");
            }
        } else {
            $photo = $this->Posts_model->getPhotoId($id);
            if ($_SESSION['id'] == $photo['id_user']) {
                if ($this->form_validation->run() == false) {
                    $this->load->view('admin/template/header', $data);
                    $this->load->view('admin/Update/update_photo', $data);
                    $this->load->view('admin/template/footer');
                } else {
                    $this->Posts_model->updatePostPhoto($id);
                    $this->session->set_flashdata('pesan', 'diupdate');
                    redirect(base_url() . "home_admin/manage_photo");
                }
            } else {
                redirect(base_url() . "home_admin/access_denied");
            }
        }
    }

    public function Update_video($id)
    {
        $data['role'] = $_SESSION['role'];
        $data['post'] = $this->Posts_model->getVideoId($id);

        $this->form_validation->set_rules('judul', 'Judul', 'required');

        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
            if ($this->form_validation->run() == false) {
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/Update/update_video', $data);
                $this->load->view('admin/template/footer');
            } else {
                $this->Posts_model->updatePostVideo($id);
                $this->session->set_flashdata('pesan', 'diupdate');
                redirect(base_url() . "home_admin/manage_video");
            }
        } else {
            $video = $this->Posts_model->getVideoId($id);
            if ($_SESSION['id'] == $video['id_user']) {
                if ($this->form_validation->run() == false) {
                    $this->load->view('admin/template/header', $data);
                    $this->load->view('admin/Update/update_video', $data);
                    $this->load->view('admin/template/footer');
                } else {
                    $this->Posts_model->updatePostVideo($id);
                    $this->session->set_flashdata('pesan', 'diupdate');
                    redirect(base_url() . "home_admin/manage_video");
                }
            } else {
                redirect(base_url() . "home_admin/access_denied");
            }
        }
    }

    public function Update_agenda($id)
    {
        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2 || $_SESSION['role'] == 5) {
            $data['role'] = $_SESSION['role'];
            $data['post'] = $this->Posts_model->getAgendaId($id);

            $this->form_validation->set_rules('judul', 'Judul', 'required');

            if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
                if ($this->form_validation->run() == false) {
                    $this->load->view('admin/template/header', $data);
                    $this->load->view('admin/Update/update_agenda', $data);
                    $this->load->view('admin/template/footer');
                } else {
                    $this->Posts_model->updatePostAgenda($id);
                    $this->session->set_flashdata('pesan', 'diupdate');
                    redirect(base_url() . "home_admin/manage_agenda");
                }
            } else {
                $agenda = $this->Posts_model->getAgendaId($id);
                if ($_SESSION['id'] == $agenda['id_user']) {
                    if ($this->form_validation->run() == false) {
                        $this->load->view('admin/template/header', $data);
                        $this->load->view('admin/Update/update_agenda', $data);
                        $this->load->view('admin/template/footer');
                    } else {
                        $this->Posts_model->updatePostAgenda($id);
                        $this->session->set_flashdata('pesan', 'diupdate');
                        redirect(base_url() . "home_admin/manage_agenda");
                    }
                } else {
                    redirect(base_url() . "home_admin/access_denied");
                }
            }
        } else {
            redirect(base_url() . 'home_admin/access_denied');
        }
    }
}
