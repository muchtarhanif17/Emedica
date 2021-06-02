<?php

class Mmenu extends CI_Model
{

    public function getDataAll()
    {
        return $this->db->get('tbl_menu')->result_array();
    }
}
