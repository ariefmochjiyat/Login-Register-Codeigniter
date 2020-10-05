<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_register'); //call model
    }

    public function index()
    {
        $this->load->view('templates/login_header');
        $this->load->view('auth/register');
        $this->load->view('templates/login_footer');
    }

    public function proses_register()
    {
        $this->form_validation->set_rules('name', 'name', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has registered!'
        ]);
        $this->form_validation->set_rules('password', 'password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            if ($errors) {
                $this->load->view('templates/login_header');
                $this->load->view('auth/register');
                $this->load->view('templates/login_footer');
            }
        } else {
            $name = htmlspecialchars($this->input->post('name', true));
            $email = htmlspecialchars($this->input->post('email', true));
            $password = md5($this->input->post('password'));
            $data = [
                'name' => $name,
                'email' => $email,
                'password' => $password
            ];
            $insert = $this->m_register->simpan_register($data);
            if ($insert) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Success, please login!
              </div>');
                redirect('login');
            }
        }
    }
}
