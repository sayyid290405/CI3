<?php

class M_mhs extends CI_Model{
    public function get_data()
    {
        return $this->db->get('db_mhs')->result_array();
    }
    }