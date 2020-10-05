<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashbord extends CI_Controller
{
    public function index()
    {
        // Cek apakah terdapat session dengan nama authenticated
        if (!$this->session->userdata('authenticated')) // Jika tidak ada
            redirect('login'); // Redirect ke halaman login
        $this->load->view('templates/login_header');
        $this->load->view('auth/dashbord');
        $this->load->view('templates/login_footer');
    }
}
