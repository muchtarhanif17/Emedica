<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cobat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model("Muser");
        $this->load->model("Mlogin");
        $this->load->library('form_validation');
        if ($this->Mlogin->isNotLogin()) redirect(site_url('login'));
    }

    public function index()
    {
        // $data["user"] = $this->Muser->getAll();
        $data['title'] = "Obat";
        $this->template->template('obat/index', $data);
    }
    //
    // public function tambah()
    // {
    //     $pasien = $this->MPasien;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($pasien->rules());
    //
    //     if ($validation->run()) {
    //         $pasien->save();
    //         redirect(site_url('pasien'));
    //
    //     }
    //
    //     $data["vaksin"] = $pasien->getVak();
    //
    //     $this->load->view("pasien/tambah", $data);
    // }

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
