<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cobat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mobat");
        $this->load->model('Msatuan');
        $this->Mobat->checkedStock();
    }

    public function index()
    {

        $data["data"] = $this->Mobat->getAllData();
        $data["sat"] = $this->Msatuan->getAllData();
        $data['title'] = "Obat";
        $this->template->template('obat/index', $data);
    }

    public function tambah()
    {
        $data = array('success' => false, 'messages' => array());

        $this->form_validation->set_rules(
            'nama',
            'Nama Obat',
            'required|trim',
            [
                'required' => '%s Tidak Boleh Kosong'
            ]
        );
        $this->form_validation->set_rules(
            'satuan',
            'Satuan Obat',
            'required|trim',
            [
                'required' => '%s Tidak Boleh Kosong'
            ]
        );
        $this->form_validation->set_rules(
            'stok',
            'Stok Obat',
            'numeric'
        );
        $this->form_validation->set_rules(
            'harga',
            'Harga Obat',
            'numeric'
        );

        if ($this->form_validation->run()) {
            $request = $this->Mobat->insertObatData();
            $data['success'] = $request['success'];
            $data['message'] = $request['message'];
        } else {
            foreach ($_POST as $key => $val) {
                $data['message'][$key] = form_error($key, '<div class="error text-danger">', '</div>');
            }
        }
        echo json_encode($data);
    }

    public function edit()
    {
        $id = $this->uri->segment('3');
        $data['title'] = 'Ubah Data Obat';
        $data['data'] = $this->Mobat->getSpesificData($id);
        $data["sat"] = $this->Msatuan->getAllData();
        $this->template->template("obat/ubah", $data);
    }

    public function ubah()
    {
        $data = array('success' => false, 'messages' => array());

        $this->form_validation->set_rules(
            'nama',
            'Nama Obat',
            'required|trim',
            [
                'required' => '%s Tidak Boleh Kosong'
            ]
        );
        $this->form_validation->set_rules(
            'satuan',
            'Satuan Obat',
            'required|trim',
            [
                'required' => '%s Tidak Boleh Kosong'
            ]
        );
        $this->form_validation->set_rules(
            'stok',
            'Stok Obat',
            'numeric'
        );
        $this->form_validation->set_rules(
            'harga',
            'Harga Obat',
            'numeric'
        );

        if ($this->form_validation->run()) {
            $request = $this->Mobat->updateObatData();
            $data['success'] = $request['success'];
            $data['message'] = $request['message'];
        } else {
            foreach ($_POST as $key => $val) {
                $data['message'][$key] = form_error($key, '<div class="error text-danger">', '</div>');
            }
        }

        echo json_encode($data);
    }


    public function hapus($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->MPasien->delete($id)) {
            redirect(site_url('pasien'));
        }
    }
}
