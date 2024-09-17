<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MerekMobil_model extends CI_Model
{
  public function getData()
  {
    $this->db->select('a.*');
    $this->db->where('a.delete_sts', 0);
    $this->db->from('merk_mobil a');

    $result = $this->db->get();
    return $result;
  }

  public function insertData($data)
  {
    $this->db->insert('merk_mobil', $data);
  }

  public function updateData($id, $data)
  {
    $this->db->where('id_merk_mobil', $id);
    $this->db->update('merk_mobil', $data);
  }

  public function deleteData($id)
  {
    $this->db->set('delete_sts', 1);
    $this->db->where('id_merk_mobil', $id);
    $this->db->update('merk_mobil');
  }

  public function getDataMerk()
  {
    $this->db->select('a.*,b.gambar_merk');
    $this->db->where('a.delete_sts', 0);
    $this->db->from('merk_mobil a');
    $this->db->join('gambar_merk b', 'b.id_merk_mobil = a.id_merk_mobil');


    $result = $this->db->get();
    return $result;
  }
}
