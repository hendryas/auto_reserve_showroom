<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobil_model extends CI_Model
{
  public function getData()
  {
    $this->db->select('a.*');
    $this->db->where('a.delete_sts', 0);
    $this->db->from('mobil a');

    $result = $this->db->get();
    return $result;
  }

  public function getLatestData()
  {
    $this->db->select('a.*');
    $this->db->where('a.delete_sts', 0);
    $this->db->from('mobil a');
    $this->db->order_by("a.id_mobil", "desc");
    $this->db->limit(1);

    $result = $this->db->get();
    return $result;
  }

  public function getDataMobilPopuler()
  {
    $this->db->select('a.*,b.merk,c.model,d.variant_mobil,e.jenis_mobil');
    $this->db->where('a.delete_sts', 0);
    $this->db->like('a.grade_mobil', 'A+');
    $this->db->like('a.grade_mobil', 'A');
    $this->db->from('mobil a');
    $this->db->join('merk_mobil b', 'b.id_merk_mobil = a.id_merk_mobil');
    $this->db->join('model_mobil c', 'c.id_model_mobil = a.id_model_mobil');
    $this->db->join('variant_mobil d', 'd.id_variant_mobil = a.id_variant_mobil');
    $this->db->join('jenis_mobil e', 'e.id_jenis_mobil = a.id_jenis_mobil');
    // $this->db->join('gambar_mobil f', 'f.id_mobil = a.id_mobil');
    $result = $this->db->get();
    return $result;
  }

  public function getHistoryMobilPenjualById($id)
  {
    $this->db->select('a.*');
    $this->db->where('a.delete_sts', 0);
    $this->db->where('a.id_user', $id);
    $this->db->from('penjual_mobil a');

    $result = $this->db->get();
    return $result;
  }

  public function getHistoryMobilPembeliById($id)
  {
    $this->db->select('a.*');
    $this->db->where('a.delete_sts', 0);
    $this->db->where('a.id_user', $id);
    $this->db->from('booking_mobil a');

    $result = $this->db->get();
    return $result;
  }

  public function getDataGambarMobils($id)
  {
    $this->db->select('a.*');
    $this->db->where('a.delete_sts', 0);
    $this->db->where('a.id_mobil', $id);
    $this->db->from('gambar_mobil a');

    $result = $this->db->get();
    return $result;
  }

  public function insertData($data)
  {
    $this->db->insert('mobil', $data);
  }

  public function insertDataBooking($data)
  {
    $this->db->insert('booking_mobil', $data);
  }

  public function insertDataImgMobil($data)
  {
    $this->db->insert('gambar_mobil', $data);
  }

  public function updateData($id, $data)
  {
    $this->db->where('id_mobil', $id);
    $this->db->update('mobil', $data);
  }

  public function updateDataBookingMobil($id, $data)
  {
    $this->db->where('id_booking_mobil', $id);
    $this->db->update('booking_mobil', $data);
  }

  public function updateDataJualMobil($id, $data)
  {
    $this->db->where('id_penjual_mobil', $id);
    $this->db->update('penjual_mobil', $data);
  }

  public function findDataPenjualMobil($id)
  {
    $this->db->select('a.*');
    $this->db->where('a.id_penjual_mobil', $id);
    $this->db->from('penjual_mobil a');

    $result = $this->db->get();
    return $result;
  }

  public function getDataBookingMobilByIdMobil($id)
  {
    $this->db->select('a.*');
    $this->db->where('a.id_mobil', $id);
    $this->db->from('booking_mobil a');

    $result = $this->db->get();
    return $result;
  }

  public function findDataPembeliMobil($id)
  {
    $this->db->select('a.*');
    $this->db->where('a.id_booking_mobil', $id);
    $this->db->from('booking_mobil a');

    $result = $this->db->get();
    return $result;
  }

  public function deleteData($id)
  {
    $this->db->set('delete_sts', 1);
    $this->db->where('id_mobil', $id);
    $this->db->update('mobil');
  }

  public function getDataBySearch($merk, $grade, $search_text)
  {
    // $this->db->select('a.*,b.merk,c.model,d.variant_mobil,e.jenis_mobil');
    // $this->db->where('a.delete_sts', 0);
    // $this->db->where('a.id_merk_mobil', $merk);
    // $this->db->where('a.grade_mobil LIKE', $grade);
    // $this->db->where('e.jenis_mobil LIKE', $search_text);
    // $this->db->from('mobil a');
    // $this->db->join('merk_mobil b', 'b.id_merk_mobil = a.id_merk_mobil', 'left');
    // $this->db->join('model_mobil c', 'c.id_model_mobil = a.id_model_mobil', 'left');
    // $this->db->join('variant_mobil d', 'd.id_variant_mobil = a.id_variant_mobil', 'left');
    // $this->db->join('jenis_mobil e', 'e.id_jenis_mobil = a.id_jenis_mobil', 'left');
    // // $this->db->join('booking_mobil f', 'f.id_mobil = a.id_mobil', 'left');


    // $result = $this->db->get();
    // return $result;
    $this->db->select('a.*,b.merk,c.model,d.variant_mobil,e.jenis_mobil');
    $this->db->from('mobil a');
    $this->db->join('merk_mobil b', 'b.id_merk_mobil = a.id_merk_mobil', 'left');
    $this->db->join('model_mobil c', 'c.id_model_mobil = a.id_model_mobil', 'left');
    $this->db->join('variant_mobil d', 'd.id_variant_mobil = a.id_variant_mobil', 'left');
    $this->db->join('jenis_mobil e', 'e.id_jenis_mobil = a.id_jenis_mobil', 'left');
    $this->db->join('booking_mobil f', 'f.id_mobil = a.id_mobil', 'left');
    $this->db->where('a.delete_sts', 0);

    if (!empty($merk)) {
      $this->db->where('a.id_merk_mobil', $merk);
    }

    if (!empty($grade)) {
      $this->db->where('a.grade_mobil LIKE', '%' . $grade . '%');
    }

    if (!empty($search_text)) {
      $this->db->where('e.jenis_mobil LIKE', '%' . $search_text . '%');
    }

    $this->db->group_start();
    $this->db->like('f.status', 'Posting');
    $this->db->or_like('a.status_mobil', 'Posting');
    $this->db->group_end();

    $result = $this->db->get();
    return $result;
  }

  public function getDataMobilDetails()
  {
    $this->db->select('a.*, b.merk, c.model, d.variant_mobil, e.jenis_mobil');
    $this->db->from('mobil a');
    $this->db->join('merk_mobil b', 'b.id_merk_mobil = a.id_merk_mobil', 'left');
    $this->db->join('model_mobil c', 'c.id_model_mobil = a.id_model_mobil', 'left');
    $this->db->join('variant_mobil d', 'd.id_variant_mobil = a.id_variant_mobil', 'left');
    $this->db->join('jenis_mobil e', 'e.id_jenis_mobil = a.id_jenis_mobil', 'left');
    $this->db->join('booking_mobil f', 'f.id_mobil = a.id_mobil', 'left');
    $this->db->where('a.delete_sts', 0);

    // Menggunakan group_start dan or_like untuk kondisi OR
    $this->db->group_start();
    $this->db->like('f.status', 'Posting');
    $this->db->or_like('a.status_mobil', 'Posting');
    $this->db->group_end();

    $result = $this->db->get();
    return $result;


    // $this->db->select('a.*, b.merk, c.model, d.variant_mobil, e.jenis_mobil');
    // $this->db->from('mobil a');
    // $this->db->join('merk_mobil b', 'b.id_merk_mobil = a.id_merk_mobil', 'left');
    // $this->db->join('model_mobil c', 'c.id_model_mobil = a.id_model_mobil', 'left');
    // $this->db->join('variant_mobil d', 'd.id_variant_mobil = a.id_variant_mobil', 'left');
    // $this->db->join('jenis_mobil e', 'e.id_jenis_mobil = a.id_jenis_mobil', 'left');
    // $this->db->join('booking_mobil f', 'f.id_mobil = a.id_mobil', 'left');
    // $this->db->where('a.delete_sts', 0);
    // $this->db->like('f.status', 'Posting');
    // $this->db->like('a.status_mobil', 'Posting');

    // $result = $this->db->get();
    // return $result;


    // $this->db->select('a.*,b.merk,c.model,d.variant_mobil,e.jenis_mobil');
    // $this->db->where('a.delete_sts', 0);
    // $this->db->like('f.status', 'Posting');
    // $this->db->like('a.status_mobil', 'Posting');
    // $this->db->from('mobil a');
    // $this->db->join('merk_mobil b', 'b.id_merk_mobil = a.id_merk_mobil', 'left');
    // $this->db->join('model_mobil c', 'c.id_model_mobil = a.id_model_mobil', 'left');
    // $this->db->join('variant_mobil d', 'd.id_variant_mobil = a.id_variant_mobil', 'left');
    // $this->db->join('jenis_mobil e', 'e.id_jenis_mobil = a.id_jenis_mobil', 'left');
    // $this->db->join('booking_mobil f', 'f.id_mobil = a.id_mobil', 'left');


    // $result = $this->db->get();
    // return $result;

    // $this->db->select('a.*, b.merk, c.model, d.variant_mobil, e.jenis_mobil');
    // $this->db->from('mobil a');
    // $this->db->join('merk_mobil b', 'b.id_merk_mobil = a.id_merk_mobil', 'left');
    // $this->db->join('model_mobil c', 'c.id_model_mobil = a.id_model_mobil', 'left');
    // $this->db->join('variant_mobil d', 'd.id_variant_mobil = a.id_variant_mobil', 'left');
    // $this->db->join('jenis_mobil e', 'e.id_jenis_mobil = a.id_jenis_mobil', 'left');
    // $this->db->join('booking_mobil f', 'f.id_mobil = a.id_mobil', 'left');
    // $this->db->where('a.delete_sts', 0);
    // $this->db->where('f.status NOT LIKE', 'Booked');

    // $result = $this->db->get();
    // return $result;
  }

  public function getDataMobilById($id)
  {
    $this->db->select('a.*,b.merk,c.model,d.variant_mobil,e.jenis_mobil');
    $this->db->where('a.delete_sts', 0);
    $this->db->where('a.id_mobil', $id);
    $this->db->from('mobil a');
    $this->db->join('merk_mobil b', 'b.id_merk_mobil = a.id_merk_mobil');
    $this->db->join('model_mobil c', 'c.id_model_mobil = a.id_model_mobil');
    $this->db->join('variant_mobil d', 'd.id_variant_mobil = a.id_variant_mobil');
    $this->db->join('jenis_mobil e', 'e.id_jenis_mobil = a.id_jenis_mobil');
    // $this->db->join('gambar_mobil f', 'f.id_mobil = a.id_mobil');


    $result = $this->db->get();
    return $result;
  }

  public function getHistoryBookingMobil($id)
  {
    $this->db->select('a.*,b.name,c.harga_cash,c.harga_credit,c.tahun_pembuatan,c.plat_nomor,c.transmisi,c.lokasi,d.merk,e.model');
    $this->db->where('a.delete_sts', 0);
    $this->db->where('a.id_user', $id);
    $this->db->from('booking_mobil a');
    $this->db->join('user b', 'b.id_user = a.id_user', 'left');
    $this->db->join('mobil c', 'c.id_mobil = a.id_mobil', 'left');
    $this->db->join('merk_mobil d', 'd.id_merk_mobil = c.id_merk_mobil', 'left');
    $this->db->join('model_mobil e', 'e.id_model_mobil = c.id_model_mobil', 'left');

    $result = $this->db->get();
    return $result;
  }

  public function getHistoryBookingMobils()
  {
    $this->db->select('a.*,b.name,c.harga_cash,c.harga_credit,c.tahun_pembuatan,c.plat_nomor,c.transmisi,c.lokasi,d.merk,e.model');
    $this->db->where('a.delete_sts', 0);
    $this->db->from('booking_mobil a');
    $this->db->join('user b', 'b.id_user = a.id_user', 'left');
    $this->db->join('mobil c', 'c.id_mobil = a.id_mobil', 'left');
    $this->db->join('merk_mobil d', 'd.id_merk_mobil = c.id_merk_mobil', 'left');
    $this->db->join('model_mobil e', 'e.id_model_mobil = c.id_model_mobil', 'left');

    $result = $this->db->get();
    return $result;
  }

  public function getHistoryPenjualanMobil($id)
  {
    $this->db->select('a.*,b.name,c.harga_cash,c.harga_credit,c.tahun_pembuatan,c.plat_nomor,c.transmisi,c.lokasi,d.merk,e.model');
    $this->db->where('a.delete_sts', 0);
    $this->db->where('a.id_user', $id);
    $this->db->from('penjual_mobil a');
    $this->db->join('user b', 'b.id_user = a.id_user', 'left');
    $this->db->join('mobil c', 'c.id_mobil = a.id_mobil', 'left');
    $this->db->join('merk_mobil d', 'd.id_merk_mobil = c.id_merk_mobil', 'left');
    $this->db->join('model_mobil e', 'e.id_model_mobil = c.id_model_mobil', 'left');

    $result = $this->db->get();
    return $result;
  }

  public function getHistoryPenjualMobils()
  {
    $this->db->select('a.*,b.name,c.harga_cash,c.harga_credit,c.tahun_pembuatan,c.plat_nomor,c.transmisi,c.lokasi,d.merk,e.model');
    $this->db->where('a.delete_sts', 0);
    $this->db->from('penjual_mobil a');
    $this->db->join('user b', 'b.id_user = a.id_user', 'left');
    $this->db->join('mobil c', 'c.id_mobil = a.id_mobil', 'left');
    $this->db->join('merk_mobil d', 'd.id_merk_mobil = c.id_merk_mobil', 'left');
    $this->db->join('model_mobil e', 'e.id_model_mobil = c.id_model_mobil', 'left');

    $result = $this->db->get();
    return $result;
  }

  public function insertDataPenjualMobil($data)
  {
    $this->db->insert('penjual_mobil', $data);
  }

  public function insertDataNotifikasiAdmin($data)
  {
    $this->db->insert('notifikasi_admin', $data);
  }

  public function insertDataNotifikasiMember($data)
  {
    $this->db->insert('notifikasi_member', $data);
  }
}
