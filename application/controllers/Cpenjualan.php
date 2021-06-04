<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cpenjualan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mpenjualan");
        $this->load->model("Mobat");
        $this->load->model("Msatuan");

        $this->load->model("Mlogin");
        $this->load->library('form_validation');
        if ($this->Mlogin->isNotLogin()) redirect(site_url('login'));
    }

    public function index()
    {

        if($this->session->has_userdata('cart')) {
          $data['obat'] = array_values(unserialize($this->session->userdata('cart')));
          $data['total'] = $this->total();
        }else {
          $data['obat'] = '';
          $data['total'] = 0;
        }


        $data['title'] = "Penjualan Obat";
        $this->template->template('penjualan/index', $data);
    }

    public function obat(){
      $data["data"] = $this->Mobat->getAllData();
      $data["sat"] = $this->Msatuan->getAllData();

      $this->template->template('penjualan/obat', $data);
    }

    // public function index()
    //   {
    //       $data['items'] = array_values(unserialize($this->session->userdata('cart')));
    //       $data['total'] = $this->total();
    //       $this->load->view('cart/index', $data);
    //   }

      public function pilih($id)
      {
          $obat = $this->Mpenjualan->find($id);

          $item = array(
              'obid' => $obat->obid,
              'obnama' => $obat->obnama,
              'satid' => $obat->satid,
              'satnama' => $obat->satnama,
              'obharga' => $obat->obharga,
              'quantity' => 1
          );
          if(!$this->session->has_userdata('cart')) {
              $cart = array($item);
              $this->session->set_userdata('cart', serialize($cart));
          } else {
              $index = $this->exists($id);
              $cart = array_values(unserialize($this->session->userdata('cart')));
              if($index == -1) {
                  array_push($cart, $item);
                  $this->session->set_userdata('cart', serialize($cart));
              } else {
                  $cart[$index]['quantity']++;
                  $this->session->set_userdata('cart', serialize($cart));
              }
          }
          redirect('penjualan');
      }

      public function tambah($id){
        $index = $this->exists($id);
        $cart = array_values(unserialize($this->session->userdata('cart')));
        $cart[$index]['quantity']++;
        $this->session->set_userdata('cart', serialize($cart));
        redirect('penjualan');

      }

      public function kurang($id){
        $index = $this->exists($id);

        if ($index == 1) {
          $this->remove($id);
        }else {
          $cart = array_values(unserialize($this->session->userdata('cart')));
          $cart[$index]['quantity']--;
          $this->session->set_userdata('cart', serialize($cart));
        }
        redirect('penjualan');

      }



      public function remove($id)
      {
          $index = $this->exists($id);
          $cart = array_values(unserialize($this->session->userdata('cart')));
          unset($cart[$index]);
          $this->session->set_userdata('cart', serialize($cart));
          redirect('penjualan');
      }

      private function exists($id)
      {
          $cart = array_values(unserialize($this->session->userdata('cart')));
          for ($i = 0; $i < count($cart); $i ++) {
              if ($cart[$i]['obid'] == $id) {
                  return $i;
              }
          }
          return -1;
      }

      private function total() {
        if($this->session->has_userdata('cart')) {
          $items = array_values(unserialize($this->session->userdata('cart')));
          $s = 0;
          foreach ($items as $item) {
              $s += $item['obharga'] * $item['quantity'];
          }
          return $s;
        }

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
