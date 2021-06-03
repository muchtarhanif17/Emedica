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

    // Data Dengan Limit
    public function getData($limit, $start)
    {
        return $this->db->get('tbl_obat', $limit, $start)->result_array();
    }

    public function insertObatData()
    {

        if ($this->input->post('stok', true)) {
            $status = 1;
        } else {
            $status = 0;
        }

        $data = [
            "satid" => htmlspecialchars($this->input->post('satuan', true)),
            "obnama" =>  htmlspecialchars($this->input->post('nama', true)),
            "obstok" =>  $this->input->post('stok', true),
            "obharga" =>  $this->input->post('harga', true),
            "obstatus" => $status
        ];

        $request =  $this->db->insert('tbl_obat', $data);
        if ($request) {
            $data = [
                "success" => true,
                "message" => "Data Telah Disimpan"
            ];
        } else {
            $data = [
                "success" => true,
                "message" => "Data Gagal Disimpan"
            ];
        }

        return $data;
    }


    // Mendapatkan Spesifik Data
    public function getSpesificData($id)
    {
        $result = $this->db->get_where('tbl_obat', array('obid' => $id))->row_array();
        return $result;
    }

    public function updateObatData()
    {
        $id = $this->input->post('id', true);
        if ($this->input->post('stok', true)) {
            $status = 1;
        } else {
            $status = 0;
        }

        $data = [
            "satid" => htmlspecialchars($this->input->post('satuan', true)),
            "obnama" =>  htmlspecialchars($this->input->post('nama', true)),
            "obstok" =>  $this->input->post('stok', true),
            "obharga" =>  $this->input->post('harga', true),
            "obstatus" => $status
        ];

        $request =  $this->db->update('tbl_obat', $data, array('obid' => $id));
        if ($request) {
            $data = [
                "success" => true,
                "message" => "Data Telah Diupdate"
            ];
        } else {
            $data = [
                "success" => false,
                "message" => "Data Gagal Diupdate"
            ];
        }

        return $data;
    }


    public function deleteSoftData($id)
    {
        $data = [
            "obstatus" => 0
        ];

        $request = $this->db->update('tbl_obat', $data, array('obid' => $id));

        if ($request) {
            $data = [
                "success" => true,
                "message" => "Data Telah Dihapus"
            ];
        } else {
            $data = [
                "success" => false,
                "message" => "Data Gagal Dihapus"
            ];
        }
        return $data;
    }







    public function checkedStock()
    {
        $request = $this->getAllData();


        foreach ($request as $row) {
            if ($row['obstok'] == 0) {
                $data = [
                    'obstatus' => 0
                ];

                $request =  $this->db->update('tbl_obat', $data, array('obid' => $row['obid']));
            } else {
                $data = [
                    'obstatus' => 1
                ];

                $request =  $this->db->update('tbl_obat', $data, array('obid' => $row['obid']));
            }
        }
    }
}
