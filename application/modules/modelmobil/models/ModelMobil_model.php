<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelMobil_model extends CI_Model
{
  public function getData()
  {
    $this->db->select('a.*');
    $this->db->where('a.delete_sts', 0);
    $this->db->from('model_mobil a');

    $result = $this->db->get();
    return $result;
  }

  public function insertData($data)
  {
    $this->db->insert('model_mobil', $data);
  }

  public function updateData($id, $data)
  {
    $this->db->where('id_model_mobil', $id);
    $this->db->update('model_mobil', $data);
  }

  public function deleteData($id)
  {
    $this->db->set('delete_sts', 1);
    $this->db->where('id_model_mobil', $id);
    $this->db->update('model_mobil');
  }
}
