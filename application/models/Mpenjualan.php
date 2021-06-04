<?php
class Mpenjualan extends CI_Model
{
    public function getAllData()
    {
        return $this->db->get('tbl_penjualan')->result_array();
    }
    public function getCount()
    {
        $result =  $this->db->get('tbl_penjualan');
        return $result->num_rows();
    }

    function find($id)
    {
      $query = $this->db->query("SELECT tbl_obat.*, tbl_satuan_obat.satnama FROM tbl_obat
                                  INNER JOIN tbl_satuan_obat ON tbl_obat.satid = tbl_satuan_obat.satid
                                  WHERE tbl_obat.obid = $id");
      return $query->row();
    }


    public function getObat()
    {
        $result = $this->db->get('tbl_obat');
        return $result;
    }
    public function getSat()
    {
        $result = $this->db->get('tbl_satuan_obat');
        return $result;
    }
}
