<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cuser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Muser");
        $this->load->model("Mlogin");
        if ($this->Mlogin->isNotLogin()) redirect(site_url('login'));
    }

    public function index()
    {
        $data["user"] = $this->Muser->getAllData();
        $data['title'] = "Data User";

        $this->template->template("user/index", $data);
    }

    public function tambah()
    {

        // $data = array('success' => false, 'message' => array());

        $data['name'] = $this->input->post('name');
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');

        // var_dump($data);
        // die;
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered !'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|max_length[12]');

        if ($this->form_validation->run() == FALSE) {
            $data['is_success'] = false;
        } else {
            $data['is_success'] = true;
        }

        echo json_encode($data);

        // $result = $this->Muser->createUserData($data);
    }




    // public function ubah($id = null)
    // {
    //     if (!isset($id)) redirect('pasien');
    //
    //     $pasien = $this->MPasien;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($pasien->rules());
    //
    //     if ($validation->run()) {
    //         $pasien->update();
    //         redirect(site_url('pasien'));
    //
    //     }
    //
    //     $data["pasien"] = $pasien->getById($id);
    //     $data["vaksin"] = $pasien->getVak();
    //
    //     if (!$data["pasien"]) show_404();
    //
    //     $this->load->view("pasien/ubah", $data);
    // }


    public function hapus($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->MPasien->delete($id)) {
            redirect(site_url('pasien'));
        }
    }
}
