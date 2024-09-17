<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WarnaMobil_model extends CI_Model
{
  public function getData()
  {
    $this->db->select('a.*');
    $this->db->where('a.delete_sts', 0);
    $this->db->from('warna_mobil a');

    $result = $this->db->get();
    return $result;
  }

  public function insertData($data)
  {
    $this->db->insert('warna_mobil', $data);
  }

  public function updateData($id, $data)
  {
    $this->db->where('id_warna_mobil', $id);
    $this->db->update('warna_mobil', $data);
  }

  public function deleteData($id)
  {
    $this->db->set('delete_sts', 1);
    $this->db->where('id_warna_mobil', $id);
    $this->db->update('warna_mobil');
  }
}
