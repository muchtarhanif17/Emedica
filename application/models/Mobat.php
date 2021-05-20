<?php
class Mobat extends CI_Model
{
    public function getAllData()
    {
        return $this->db->get('tbl_obat')->result_array();
    }

    public function getCount()
    {
        $result = $this->db->get('tbl_obat');
        return $result->num_rows();
    }
}
