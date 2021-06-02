<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Template
{



    function template($page, $data = NUll)
    {
        $CI = &get_instance();


        $CI->load->model('Mmenu');
        $CI->load->model('Maccess');
        $data['user_logged'] = json_decode(json_encode($CI->session->userdata('user_logged')), true);
        $data['menu'] = $CI->Mmenu->getDataAll();
        $data['access'] = $CI->Maccess->getDataAll();

        if ($data['user_logged'] == FALSE) {
            redirect('login');
        } else {
            $CI->load->view('template/header', $data);
            $CI->load->view('template/navbar', $data);
            $CI->load->view($page, $data);
            $CI->load->view('template/footer');
        };
    }

    function template_login($page, $data = null)
    {
        $CI = &get_instance();

        $CI->load->view('template/login/login_header', $data);
        $CI->load->view($page);
        $CI->load->view('template/login/login_footer');
    }
}
