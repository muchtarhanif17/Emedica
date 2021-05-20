<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cdashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model("Mdashboard");
        $this->load->library('form_validation');
        $this->load->model("Mobat");
        $this->load->model("Mapoteker");
        $this->load->model("Mpenjualan");

        $this->load->model("Mlogin");
        if ($this->Mlogin->isNotLogin()) redirect(site_url('login'));
    }

    public function index()
    {
        $data["obat"] = $this->Mobat->getCount();
        $data["apoteker"] = $this->Mapoteker->getCount();
        $data["penjualan"] = $this->Mpenjualan->getCount();
        $data['title'] = "Dashboard";
        $this->template->template('dashboard/index', $data);
    }
}
