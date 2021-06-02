<?php defined('BASEPATH') or exit('No direct script access allowed');

class Mroleuser extends CI_Model
{
    public function getRole()
    {
        return $this->db->get('tbl_role_user')->result_array();
    }
}
