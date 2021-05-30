<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Clogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mlogin");
        $this->load->library('form_validation');
    }

    public function index()
    {

        // jika form login disubmit 
        if ($this->input->post()) {
            if ($this->Mlogin->doLogin()) redirect(site_url('dashboard'));
        }

        // tampilkan halaman login
        $data['title'] = "Login";
        $this->template->template_login('user/login', $data);
    }

    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }
}
