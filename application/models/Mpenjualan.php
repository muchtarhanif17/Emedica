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

    public function insertPenjualan()
    {

        $data = [
            "uid" => $_POST['uid'],
            "pjfaktur" =>  $_POST['pjfaktur'],
            "pjtgl" =>  $_POST['pjtgl'],
            "pjtotal" =>  $_POST['pjtotal'],
            "pjbayar" =>  $_POST['pjbayar'],
            "pjfeedback" =>  '',

        ];

        $request =  $this->db->insert('tbl_penjualan', $data);
        if ($request) {
          $insert_id = $this->db->insert_id();

          $datac['obat'] = array_values(unserialize($this->session->userdata('cart')));
          for ($i=0; $i <count($datac['obat']); $i++) {
            $data2 = [
                "pjid" => $insert_id,
                "obid" =>  $datac['obat'][$i]['obid'],
                "pjdqty" =>  $datac['obat'][$i]['quantity'],
            ];

            $request =  $this->db->insert('tbl_penjualan_detail', $data2);
          }


        }

        return $insert_id;
    }

    public function getStruk($id){
      $query = $this->db->query("SELECT tbl_penjualan.*,tbl_user.unama
                                  FROM tbl_penjualan
                                  INNER JOIN tbl_user ON tbl_user.uid = tbl_penjualan.uid
                                  WHERE tbl_penjualan.pjid = $id
                                  ");
      return $query->result_array();
    }

    public function getStrukDetail($id){
      $query = $this->db->query("SELECT tbl_penjualan.*,tbl_penjualan_detail.pjdid,tbl_penjualan_detail.obid,tbl_penjualan_detail.pjdqty,
                                                        tbl_obat.obnama,tbl_obat.obharga,tbl_satuan_obat.satnama,tbl_user.unama
                                  FROM tbl_penjualan
                                  INNER JOIN tbl_penjualan_detail ON tbl_penjualan_detail.pjid = tbl_penjualan.pjid
                                  INNER JOIN tbl_obat ON tbl_obat.obid = tbl_penjualan_detail.obid
                                  INNER JOIN tbl_satuan_obat ON tbl_satuan_obat.satid = tbl_obat.satid
                                  INNER JOIN tbl_user ON tbl_user.uid = tbl_penjualan.uid
                                  WHERE tbl_penjualan.pjid = $id

                                  ");
      return $query->result_array();
    }

    public function getLaporan(){
      $query = $this->db->query("SELECT tbl_penjualan.*,tbl_user.unama
                                  FROM tbl_penjualan
                                  INNER JOIN tbl_user ON tbl_user.uid = tbl_penjualan.uid
                                  ");
      return $query->result_array();
    }

    public function getLaporanDate(){
      $date1 = $_POST['date1'];
      $date2 = $_POST['date2'];
      $query = $this->db->query("SELECT tbl_penjualan.*,tbl_user.unama
                                  FROM tbl_penjualan
                                  INNER JOIN tbl_user ON tbl_user.uid = tbl_penjualan.uid
                                  WHERE tbl_penjualan.pjtgl BETWEEN '$date1' AND '$date2'
                                  ");
      return $query->result_array();
    }

    public function getLaporanDateNow(){
      $date1 = date('Y-m-d');
      $date2 = date('Y-m-d');
      $query = $this->db->query("SELECT tbl_penjualan.*,tbl_user.unama
                                  FROM tbl_penjualan
                                  INNER JOIN tbl_user ON tbl_user.uid = tbl_penjualan.uid
                                  WHERE tbl_penjualan.pjtgl BETWEEN '$date1' AND '$date2'
                                  ");
      return $query->result_array();
    }

    public function getLaporanDetail(){
      $query = $this->db->query("SELECT tbl_penjualan.*,tbl_penjualan_detail.pjdid,tbl_penjualan_detail.obid,tbl_penjualan_detail.pjdqty,
                                                    		tbl_obat.obnama,tbl_obat.obharga,tbl_satuan_obat.satnama,tbl_user.unama
                                  FROM tbl_penjualan
                                  INNER JOIN tbl_penjualan_detail ON tbl_penjualan_detail.pjid = tbl_penjualan.pjid
                                  INNER JOIN tbl_obat ON tbl_obat.obid = tbl_penjualan_detail.obid
                                  INNER JOIN tbl_satuan_obat ON tbl_satuan_obat.satid = tbl_obat.satid
                                  INNER JOIN tbl_user ON tbl_user.uid = tbl_penjualan.uid
                                  ");
      return $query->result_array();
    }

    public function goodfb($id){
      $data = [
          "pjfeedback" => "good",
      ];

      $request =  $this->db->update('tbl_penjualan', $data, array('pjid' => $id));

    }

    public function badfb($id){
      $data = [
          "pjfeedback" => "bad",
      ];

      $request =  $this->db->update('tbl_penjualan', $data, array('pjid' => $id));

    }
    public function getObatTerlaris(){
      $query = $this->db->query("   SELECT tbl_penjualan_detail.obid,SUM(tbl_penjualan_detail.pjdqty) AS totals,tbl_obat.obnama
                                      FROM tbl_penjualan_detail
                                      LEFT JOIN tbl_obat ON tbl_obat.obid = tbl_penjualan_detail.obid
                                      GROUP BY tbl_penjualan_detail.obid
                                      ORDER BY SUM(tbl_penjualan_detail.pjdqty) DESC

                                  ");
      return $query->result_array();
    }

    public function getOmzetMonthly(){
      $query = $this->db->query("     SELECT SUM(tbl_penjualan.pjtotal) AS totals
                                      FROM tbl_penjualan
                                  ");
      return $query->result_array();
    }

    public function getCountMonthly(){
      $query = $this->db->query("     SELECT pjid,pjtgl
                                      FROM tbl_penjualan
                                      WHERE MONTH(pjtgl) = MONTH(CURRENT_DATE())
                                  ");
      return $query->num_rows();
    }

    public function getGrafik(){
      $query = $this->db->query("     SELECT DAYNAME(pjtgl) AS day_name,
                                      COUNT(`pjid`) AS total_penjualan
                                      FROM tbl_penjualan
                                      WHERE YEARWEEK(pjtgl) = YEARWEEK(NOW()+1)

                                      GROUP BY day_name
                                      ORDER BY day_name;
                                  ");
      return $query->result_array();
    }

}
