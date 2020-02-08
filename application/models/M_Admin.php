<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {

    public function tampil_data()
    {
        return $this->db->get('user');
    }

    public function input_data($data,$table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data()
    {
        return $this->db->get('user');
        
    }

    public function hapus_data($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}

/* End of file M_Admin.php */
