<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Clappenjualan extends CI_Controller
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
        if (isset($_POST['date1'])) {
          $data['date1'] = $_POST['date1'];
          $data['date2'] = $_POST['date2'];
          $data["lap"] = $this->Mpenjualan->getLaporanDate();

        }else {
          $data['date1'] = date('Y-m-d');
          $data['date2'] = date('Y-m-d');

          $data["lap"] = $this->Mpenjualan->getLaporanDateNow();
        }

        $data['title'] = "Laporan Penjualan";
        $this->template->template('lappenjualan/index', $data);
    }


    public function getlaporandetail($id){
      $data["lapd"] = $this->Mpenjualan->getStrukDetail($id);
      $no=1;$gtotal=0;

      foreach ($data["lapd"] as $lapd): ?>

          <tr>
            <td> <?= $no++ ?></td>
            <td> <?= $lapd['obnama']?> </td>
            <td> Rp.<?= number_format($lapd['obharga'],0,'.')?> </td>
            <td> <?= $lapd['pjdqty']?> </td>
            <td> Rp. <?= number_format(($lapd['pjdqty']*$lapd['obharga']),0,'.') ?></td>

          </tr>
      <?php
      $total = $lapd['pjdqty']*$lapd['obharga'];
      $gtotal += $total;
    endforeach;

    }

}
