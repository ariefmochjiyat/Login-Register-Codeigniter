<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_register extends CI_model
{

    // fungsi simpan data register
    public function simpan_register($data)
    {
        return $this->db->insert("user", $data);
    }
}
