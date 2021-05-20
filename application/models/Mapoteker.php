<?php
class Mapoteker extends CI_Model
{
    public function getAllData()
    {
        return $this->db->get('tbl_apoteker')->result_array();
    }

    public function getCount()
    {
        $result = $this->db->get('tbl_apoteker');
        return $result->num_rows();
    }
}
