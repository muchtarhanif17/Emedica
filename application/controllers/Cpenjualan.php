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
          // for ($i=0; $i <count($data['obat']); $i++) {
          //   echo $data['obat'][$i]['obid'];
          //   echo "<br>";
          // }
          // die();
        }else {
          $data['obat'] = '';
          $data['total'] = 0;
        }


        $data['pjfaktur'] = "PJ".date("Ymdhis");
        $data['user'] = $this->session->userdata('user_logged');
        $data['pjtgl'] = date("Y-m-d");
        $data['title'] = "Penjualan Obat";

        $this->template->template('penjualan/index', $data);
    }

    public function obat(){
      $data["data"] = $this->Mobat->getAllData();
      $data["sat"] = $this->Msatuan->getAllData();

      $this->template->template('penjualan/obat', $data);
    }

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

      public function bayar()
      {

          if ($_POST['pjfaktur']!='' && $_POST['pjtgl'] !='' && $_POST['uid']!='' && $_POST['pjbayar']!='' ) {
            $insert_id = $this->Mpenjualan->insertPenjualan();
            $this->session->unset_userdata('cart');
            
            echo "<script>window.open('".site_url('penjualan/feedback/').$insert_id."');</script>";
            echo "<script>window.open('".site_url('penjualan/struk/').$insert_id."');</script>";

            echo "<script>window.location.href='".site_url('penjualan')."'</script>";
          }
      }

      public function struk($id){
        $data['lap'] = $this->Mpenjualan->getStruk($id);
        // echo "<pre>";
        // var_dump($data['lap']);
        // die();
        $data['lapd'] = $this->Mpenjualan->getStrukDetail($id);

        $this->load->view('penjualan/struk',$data);
      }

      public function feedback($id){
        $data['id'] = $id;
        $this->template->template('penjualan/feedback',$data);

      }

      public function goodfb($id){
        $this->Mpenjualan->goodfb($id);
        echo "<script>window.close()</script>";

      }

      public function badfb($id){
        $this->Mpenjualan->badfb($id);
        echo "<script>window.close()</script>";
      }

}
