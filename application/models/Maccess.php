<?php
class Maccess extends CI_Model
{
    public function getDataAll()
    {
        return $this->db->get('tbl_access')->result_array();
    }
}
