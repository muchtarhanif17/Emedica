<?php
class Mpenjualan extends CI_Model
{
    public function getAllData()
    {
        return $this->db->get('tbl_penjualan')->result_array();
    }

    public function getCount()
    {
        $result = $this->db->get('tbl_penjualan');
        return $result->num_rows();
    }
}
