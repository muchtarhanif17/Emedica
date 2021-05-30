<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cuser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("form_validation");
        $this->load->model("Muser");
        $this->load->model("Mlogin");
        if ($this->Mlogin->isNotLogin()) redirect(site_url('login'));
    }

    public function index()
    {

        // Pagination
        // Config
        $config['base_url'] = site_url('user/');
        $config['total_rows'] = $this->Muser->countAllUser();
        $config['per_page'] = 4;

        $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);


        $data['start'] = $this->uri->segment('2');
        $data["user"] = $this->Muser->getData($config['per_page'], $data['start']);

        $data['title'] = "Data User";

        $this->template->template("user/index", $data);
    }

    public function tambah()
    {

        $data = array('success' => false, 'messages' => array());

        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required|trim',
            [
                'required' => '%s Tidak Boleh Kosong'
            ]
        );
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => '%s Tidak Boleh Kosong'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|max_length[12]');

        if ($this->form_validation->run()) {
            $request = $this->Muser->insertUserData();
            $data['success'] = $request['success'];
            $data['message'] = $request['message'];
        } else {
            foreach ($_POST as $key => $val) {
                $data['message'][$key] = form_error($key, '<div class="error text-danger">', '</div>');
            }
        }



        // $result = $this->Muser->createUserData($data);
        echo json_encode($data);
    }

    public function edit()
    {
        $id = $this->uri->segment('3');
        $data['title'] = 'Ubah Data User';
        $data['data'] = $this->Muser->getSpesificData($id);
        // var_dump($data);
        // die;
        $this->template->template("user/ubah", $data);
    }


    public function ubah()
    {
        $data = array('success' => false, 'messages' => array());


        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required|trim',
            [
                'required' => '%s Tidak Boleh Kosong'
            ]
        );
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => '%s Tidak Boleh Kosong'
        ]);
        // $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|max_length[12]');

        if ($this->form_validation->run()) {
            $request = $this->Muser->updateUserData();
            $data['success'] = $request['success'];
            $data['message'] = $request['message'];
        } else {
            foreach ($_POST as $key => $val) {
                $data['message'][$key] = form_error($key, '<div class="error text-danger">', '</div>');
            }
        }

        // var_dump($data);
        // die;


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
