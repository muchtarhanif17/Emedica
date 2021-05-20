<?php

class Mlogin extends CI_Model
{
    private $_table = "tbl_user";

    public function doLogin()
    {
        $post = $this->input->post();

        // cari user berdasarkan email dan username
        $this->db->where('uemail', $post["uemail"]);
        $user = $this->db->get($this->_table)->row_array();

        // jika user terdaftar
        if ($user) {
            // periksa password-nya
            $isPasswordTrue = password_verify($post["upassword"], $user['upassword']);
            // periksa status-nya
            $isAdmin = $user['ustatus'] == "1";

            // jika password benar dan user dia aktif
            if ($isPasswordTrue && $isAdmin) {
                // login sukses yay!
                $this->session->set_userdata(['user_logged' => $user]);
                return true;
            }
        }

        // login gagal
        return false;
    }

    public function isNotLogin()
    {
        return $this->session->userdata('user_logged') === null;
    }
}
