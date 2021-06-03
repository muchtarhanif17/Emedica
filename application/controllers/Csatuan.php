<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Csatuan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model("Msatuan");
        $this->load->model("Mobat");
    }

    public function index()
    {



        $data["satuan"] = $this->Msatuan->getAllData();
        $data['title'] = "Satuan Obat";
        $this->template->template('satuan/index', $data);
    }

    public function tambah()
    {
        $data = array('success' => false, 'messages' => array());

        $this->form_validation->set_rules(
            'satuan',
            'Jenis',
            'required|trim',
            [
                'required' => '%s Tidak Boleh Kosong'
            ]
        );
        if ($this->form_validation->run()) {
            $request = $this->Msatuan->insertSatuanData();
            $data['success'] = $request['success'];
            $data['message'] = $request['message'];
        } else {
            foreach ($_POST as $key => $val) {
                $data['message'][$key] = form_error($key, '<div class="error text-danger">', '</div>');
            }
        }

        echo json_encode($data);
    }

    public function updateStatus()
    {
        $dataObat = $this->Mobat->getAllData();
        $request = $this->Msatuan->updateSatuanStatus($dataObat);

        if ($request['success']) {
            redirect('satuan/');
        } else {
            echo "<script type='text/javascript'>alert(" . $request['message'] . ");</script>";
            redirect('satuan/');
        }
    }
}
