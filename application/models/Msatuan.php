<?php defined('BASEPATH') or exit('No direct script access allowed');

class Msatuan extends CI_Model
{
    public function getAllData()
    {
        return $this->db->get('tbl_satuan_obat')->result_array();
    }

    public function countDataSatuan()
    {
        return $this->db->get('tbl_satuan_obat')->num_rows();
    }

    // Data Dengan Limit
    public function getData($limit, $start)
    {
        return $this->db->get('tbl_satuan_obat', $limit, $start)->result_array();
    }

    public function insertSatuanData()
    {
        $data = [
            'satnama' => htmlspecialchars($this->input->post('satuan')),
            'satstatus' => $this->input->post('status')
        ];

        $request = $this->db->insert('tbl_satuan_obat', $data);
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

    public function updateSatuanStatus($dataObat = NULL)
    {
        $id = $this->input->post('id');
        $data['status'] = $this->input->post('status');
        $data['nama'] = $this->input->post('nama');

        foreach ($dataObat as $do) {
            if ($do['satid'] == $id) {
                $data = [
                    "success" => false,
                    "message" => "Status Gagal Diperbarui"
                ];
                return $data;
            }
        }

        if ($data['status'] == 0) {
            $data = [
                'satstatus' => 1
            ];
        } else {
            $data = [
                'satstatus' => 0
            ];
        }


        $request =  $this->db->update('tbl_satuan_obat', $data, array('satid' => $id));
        if ($request) {
            $data = [
                "success" => true,
                "message" => "Status " . $data['nama'] . "Sukses Diperbarui"
            ];
        } else {
            $data = [
                "success" => false,
                "message" => "Status Gagal Diperbarui"
            ];
        }

        return $data;
    }
}
