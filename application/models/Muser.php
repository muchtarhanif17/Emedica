<?php defined('BASEPATH') or exit('No direct script access allowed');

class Muser extends CI_Model
{

    // Mendapatkan Semua Data
    public function getAllData()
    {
        return $this->db->get('tbl_user')->result_array();
    }

    // Insert Data
    public function insertUserData()
    {
        $password = $this->input->post('password', true);
        $data = [
            "unama" => htmlspecialchars($this->input->post('nama', true)),
            "uemail" =>  htmlspecialchars($this->input->post('email', true)),
            "upassword" => password_hash($password, PASSWORD_BCRYPT),
            "ustatus" => 1
        ];

        $request =  $this->db->insert('tbl_user', $data);
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

    // Data Dengan Limit
    public function getData($limit, $start)
    {
        return $this->db->get('tbl_user', $limit, $start)->result_array();
    }

    // Mendapatkan Total Record
    public function countAllUser()
    {
        return $this->db->get('tbl_user')->num_rows();
    }

    // Mendapatkan Spesifik Data
    public function getSpesificData($id)
    {
        $result = $this->db->get_where('tbl_user', array('uid' => $id))->row_array();
        return $result;
    }

    // Update Data
    public function updateUserData()
    {
        $id = $this->input->post('id');
        $data = [
            "unama" => htmlspecialchars($this->input->post('nama', true)),
            "uemail" =>  htmlspecialchars($this->input->post('email', true)),
            "ustatus" => $this->input->post('status', true)
        ];


        $request =  $this->db->update('tbl_user', $data, array('uid' => $id));
        if ($request) {
            $data = [
                "success" => true,
                "message" => "Data Telah Diperbarui"
            ];
        } else {
            $data = [
                "success" => true,
                "message" => "Data Gagal Diperbarui"
            ];
        }

        return $data;
    }
}
