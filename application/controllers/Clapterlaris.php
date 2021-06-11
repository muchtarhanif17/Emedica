<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Clapterlaris extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mpenjualan");
        $this->load->model("Mlogin");
        $this->load->library('form_validation');
        if ($this->Mlogin->isNotLogin()) redirect(site_url('login'));
    }

    public function index()
    {
        $data['lap'] = $this->Mpenjualan->getObatTerlaris();
        $data['title'] = "Laporan Obat";
        $this->template->template('lapterlaris/index', $data);
    }

    public function hapus($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->MPasien->delete($id)) {
            redirect(site_url('pasien'));
        }
    }
}
