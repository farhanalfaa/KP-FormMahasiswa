<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Mahasiswa extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
        $this->load->library('session');
    }

    public function addMahasiswa($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
