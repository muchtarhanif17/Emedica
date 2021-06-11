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
        $this->load->model("Mpenjualan");

        $this->load->model("Mlogin");
        if ($this->Mlogin->isNotLogin()) redirect(site_url('login'));
    }

    public function index()
    {
        $data["obat"] = $this->Mobat->getCount();
        $data["penjualan"] = $this->Mpenjualan->getCountMonthly();
        $data["omzet"] = $this->Mpenjualan->getOmzetMonthly();
        $data['day'] = $this->Mpenjualan->getGrafik();

        // $data['days'][];
        for ($i=1; $i <=7 ; $i++) {
          $data['days'][$i]=0;
        }
          foreach ($data['day'] as $daysql) {

            if ($daysql['day_name'] == "Monday") {
              $data['days'][1] = (int)$daysql['total_penjualan'];
            }

            if ($daysql['day_name'] == "Tuesday") {
              $data['days'][2] = (int)$daysql['total_penjualan'];
            }

            if ($daysql['day_name'] == "Wednesday") {
              $data['days'][3] = (int)$daysql['total_penjualan'];
            }

            if ($daysql['day_name'] == "Thursday") {
              $data['days'][4] = (int)$daysql['total_penjualan'];
            }

            if ($daysql['day_name'] == "Friday") {
              $data['days'][5] = (int)$daysql['total_penjualan'];
            }
            if ($daysql['day_name'] == "Saturday") {
              $data['days'][6] = (int)$daysql['total_penjualan'];
            }
            if ($daysql['day_name'] == "Sunday") {
              $data['days'][7] = (int)$daysql['total_penjualan'];
            }

          }

          // echo "<pre>";
          // var_dump($data['days']);
          // die();

        $data['title'] = "Dashboard";
        $this->template->template('dashboard/index', $data);
    }
}
