<?php
defined('BASEPATH') or exit('No direct script access allowed');

class riwayatpenjualanmobil extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //jika tidak ada session,lempar ke auth
    // is_logged_in();
    $this->load->model('admin/admin_model', 'adminModel');
    $this->load->model('auth/Auth_model', 'authModel');
    $this->load->model('mobil/Mobil_model', 'mobilModel');
    date_default_timezone_set('Asia/Jakarta');
  }

  public function index()
  {
    $data['title'] = 'Riwayat Penjual Mobil';
    $email = $this->session->userdata('email');
    $data['user'] = $this->authModel->getDataUser($email)->row_array();
    $data['historyPenjualMobil'] = $this->mobilModel->getHistoryPenjualMobils()->result_array();

    $this->load->view('templates/templateadmin/main_header', $data);
    $this->load->view('templates/loaders/loader');
    $this->load->view('templates/templateadmin/header_menu', $data);
    $this->load->view('templates/templateadmin/navbar_menu', $data);
    $this->load->view('riwayatpenjualanmobil/riwayatpenjualmobil', $data);
    $this->load->view('templates/templateadmin/main_footer');
  }

  public function prosesdata()
  {
    $id_penjual_mobil = $this->input->post('id_penjual_mobil');
    $id_user = $this->input->post('id_user');
    $keterangan = $this->input->post('keterangan');
    $nama = $this->input->post('nama');
    $id = decrypt_url($id_penjual_mobil);
    $id_user = decrypt_url($id_user);

    $data = [
      'status' => "Diterima",
      'date_updated' => date('Y-m-d H:i:s')
    ];

    $this->mobilModel->updateDataJualMobil($id, $data);

    $dataNotifAdmin = [
      'id_user' => $id_user,
      'nama' => $nama,
      'isi_notifikasi' => $keterangan,
      'status_notif' => 0,
      'tanggal' => date('Y-m-d H:i:s'),
      'created_date' => date('Y-m-d H:i:s'),
      'delete_sts' => 0
    ];

    $this->mobilModel->insertDataNotifikasiAdmin($dataNotifAdmin);

    $dataNotifMember = [
      'id_user' => $id_user,
      'nama' => $nama,
      'isi_notifikasi' => $keterangan,
      'status_notif' => 0,
      'tanggal' => date('Y-m-d H:i:s'),
      'created_date' => date('Y-m-d H:i:s'),
      'delete_sts' => 0
    ];

    $this->mobilModel->insertDataNotifikasiMember($dataNotifMember);

    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
    <strong>Status telah diubah menjadi diterima!</strong></div>');
    redirect('riwayatpenjualanmobil');
  }

  public function prosesbatal()
  {
    $id_penjual_mobil = $this->input->post('id_penjual_mobil');
    $id_user = $this->input->post('id_user');
    $keterangan = $this->input->post('keterangan');
    $nama = $this->input->post('nama');
    $id = decrypt_url($id_penjual_mobil);
    $id_user = decrypt_url($id_user);

    $data = [
      'status' => "Status Awal",
      'date_updated' => date('Y-m-d H:i:s')
    ];

    $this->mobilModel->updateDataJualMobil($id, $data);

    $dataNotifAdmin = [
      'id_user' => $id_user,
      'nama' => $nama,
      'isi_notifikasi' => $keterangan,
      'status_notif' => 0,
      'tanggal' => date('Y-m-d H:i:s'),
      'created_date' => date('Y-m-d H:i:s'),
      'delete_sts' => 0
    ];

    $this->mobilModel->insertDataNotifikasiAdmin($dataNotifAdmin);

    $dataNotifMember = [
      'id_user' => $id_user,
      'nama' => $nama,
      'isi_notifikasi' => $keterangan,
      'status_notif' => 0,
      'tanggal' => date('Y-m-d H:i:s'),
      'created_date' => date('Y-m-d H:i:s'),
      'delete_sts' => 0
    ];

    $this->mobilModel->insertDataNotifikasiMember($dataNotifMember);

    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
    <strong>Status telah diubah menjadi status awal!</strong></div>');
    redirect('riwayatpenjualanmobil');
  }

  public function reject($id_booking_mobil)
  {
    $id = decrypt_url($id_booking_mobil);

    $dataPenjual = $this->mobilModel->findDataPenjualMobil($id)->row_array();
    $id_user = $dataPenjual['id_user'];
    $nama = $dataPenjual['nama'];

    $data = [
      'status' => "Reject",
      'date_updated' => date('Y-m-d H:i:s')
    ];

    $this->mobilModel->updateDataJualMobil($id, $data);

    $dataNotifAdmin = [
      'id_user' => $id_user,
      'nama' => $nama,
      'isi_notifikasi' => 'Tolak penjualan mobil ini',
      'status_notif' => 0,
      'tanggal' => date('Y-m-d H:i:s'),
      'created_date' => date('Y-m-d H:i:s'),
      'delete_sts' => 0
    ];

    $this->mobilModel->insertDataNotifikasiAdmin($dataNotifAdmin);

    $dataNotifMember = [
      'id_user' => $id_user,
      'nama' => $nama,
      'isi_notifikasi' => 'Tolak penjualan mobil ini',
      'status_notif' => 0,
      'tanggal' => date('Y-m-d H:i:s'),
      'created_date' => date('Y-m-d H:i:s'),
      'delete_sts' => 0
    ];

    $this->mobilModel->insertDataNotifikasiMember($dataNotifMember);

    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
    <strong>Status telah diubah menjadi Reject!</strong></div>');
    redirect('riwayatpenjualanmobil');
  }

  public function posting($id_mobil)
  {
    $id = decrypt_url($id_mobil);

    $data = [
      'status_mobil' => 'Posting',
      'date_updated' => date('Y-m-d H:i:s')
    ];

    $this->mobilModel->updateData($id, $data);

    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
    <strong>Mobil berhasil di posting!</strong></div>');
    redirect('mobil');
  }
}
