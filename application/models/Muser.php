<?php defined('BASEPATH') or exit('No direct script access allowed');

class Muser extends CI_Model
{
    private $_table = "tbl_user";

    public $unama;
    public $uid;


    public function rules()
    {
        return [
            [
                'field' => 'unama',
                'label' => 'Nama User',
                'rules' => 'required'
            ],


        ];
    }

    public function getAllData()
    {
        return $this->db->get('tbl_user')->result_array();
    }

    public function createUserData($data)
    {
    }
}
