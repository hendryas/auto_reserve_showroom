<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JenisMobil_model extends CI_Model
{
  public function getData()
  {
    $this->db->select('a.*');
    $this->db->where('a.delete_sts', 0);
    $this->db->from('jenis_mobil a');

    $result = $this->db->get();
    return $result;
  }

  public function insertData($data)
  {
    $this->db->insert('jenis_mobil', $data);
  }

  public function updateData($id, $data)
  {
    $this->db->where('id_jenis_mobil', $id);
    $this->db->update('jenis_mobil', $data);
  }

  public function deleteData($id)
  {
    $this->db->set('delete_sts', 1);
    $this->db->where('id_jenis_mobil', $id);
    $this->db->update('jenis_mobil');
  }
}
