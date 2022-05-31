<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_account extends CI_Model
{
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_account($username)
    {
        $result = $this->db->where('username', $username)->get('account');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}