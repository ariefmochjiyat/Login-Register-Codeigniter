<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index()
    {
        if ($this->session->userdata('authenticated')) // Jika user sudah pernah login
            redirect('dashbord'); // Auto redirect ke dashbord
        $this->load->view('templates/login_header'); //Meampilkan view login
        $this->load->view('auth/login');
        $this->load->view('templates/login_footer');
    }

    public function proses_login()
    {
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $user = $this->M_login->get($email, $password);

        if (empty($user)) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email not found!
          </div>');
            redirect('login');
        } else {
            if ($password == $user->password) {
                $session = array(
                    'authenticated' => true,
                    'name' => $user->name
                );
                $this->session->set_userdata($session); //Session buat user yg berhasil login
                redirect('dashbord');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong password!
              </div>');
                redirect('login');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
