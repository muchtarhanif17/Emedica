<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Template
{

    function template($page, $data = NUll)
    {
        $CI = &get_instance();
        $data['user_logged'] = json_decode(json_encode($CI->session->userdata('user_logged')), true);
        // var_dump($data['user_logged']);
        // die;

        $CI->load->view('template/header', $data);
        $CI->load->view('template/navbar', $data);
        $CI->load->view($page, $data);
        $CI->load->view('template/footer');
    }

    function template_login($page, $data = null)
    {
        $CI = &get_instance();

        $CI->load->view('template/login/login_header', $data);
        $CI->load->view($page);
        $CI->load->view('template/login/login_footer');
    }
}
