<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function getDataPesanMember($id)
    {
        $this->db->select('a.*');
        $this->db->where('a.delete_sts', 0);
        $this->db->where('a.id_user', $id);
        $this->db->from('notifikasi_member a');

        $result = $this->db->get();
        return $result;
    }

    public function updateData($id, $data)
    {
        $this->db->where('id_user', $id);
        $this->db->update('user', $data);
    }
}
