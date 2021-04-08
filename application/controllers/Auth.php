<?php
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if (logged_in()) {
            redirect('home_admin');
        } else {
            $this->form_validation->set_rules('username', 'Email', 'required|trim|min_length[4]');
            $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[4]');

            if ($this->form_validation->run() == false) {
                $this->load->view('auth/template/header');
                $this->load->view('auth/login');
                $this->load->view('auth/template/footer');
            } else {
                $this->_login();
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message3', '<div class = "alert alert-danger" role="alert">Telah Logout</div>');
        redirect('auth');
    }

    public function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->User_model->getUserByUsername($username);

        if ($user) {
            if ($user['status'] == 'Aktif') {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'id' => $user['id_user'],
                        'role' => $user['id_role']
                    ];
                    $this->session->set_userdata($data);
                    redirect('home_admin');
                } else {
                    $this->session->set_flashdata('message2', '<small class=" text-danger">Password salah</small>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<small class="text-danger">User belum diaktivasi</small>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message3', '<small class=" text-danger">Username / Password Salah</small>');
            redirect('auth');
        }
    }
}
