<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    //jika tidak ada session,lempar ke auth
    // is_logged_in();
    $this->load->model('Home_model');
    $this->load->model('auth/Auth_model', 'authModel');
    $this->load->model('merekmobil/MerekMobil_model', 'merkModel');
    $this->load->model('mobil/Mobil_model', 'mobilModel');
    date_default_timezone_set('Asia/Jakarta');
  }

  public function booking_mobil()
  {
    $email = $this->session->userdata('email') ?? 'customer@gmail.com';
    $data['user'] = $this->authModel->getDataUser($email)->row_array();
    $id_user = $data['user']['id_user'] ?? 0;
    $id_mobil = htmlspecialchars($this->input->post('id_mobil'));
    $nama = htmlspecialchars($this->input->post('nama'));
    $no_telp = htmlspecialchars($this->input->post('no_telp'));
    $domisili = htmlspecialchars($this->input->post('domisili'));
    $provinsi = htmlspecialchars($this->input->post('provinsi'));
    $kota = htmlspecialchars($this->input->post('kota'));
    $tgl_kedatangan = htmlspecialchars($this->input->post('tgl_kedatangan'));
    $jam_kedatangan = htmlspecialchars($this->input->post('jam_kedatangan'));
    $data = [
      'id_user' => $id_user,
      'id_mobil' => $id_mobil,
      'nama' => $nama,
      'no_telp' => $no_telp,
      'domisili' => $domisili,
      'provinsi' => $provinsi,
      'kota' => $kota,
      'tgl_kedatangan' => $tgl_kedatangan,
      'jam_kedatangan' => $jam_kedatangan,
      'status' => "Menunggu Konfirmasi Admin / Booked",
      'date_created' => date('Y-m-d H:i:s'),
      'delete_sts' => 0
    ];

    $this->mobilModel->insertDataBooking($data);

    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
          <strong>Berhasil booking!</strong></div>');
    redirect('home/booking/historybooking');
  }

  public function historybooking()
  {
    $data['title'] = 'Hitory Booking';
    $email = $this->session->userdata('email') ?? 'customer@gmail.com';
    $data['user'] = $this->authModel->getDataUser($email)->row_array();
    $id_user = $data['user']['id_user'] ?? 0;
    $data['historyBookingMobil'] = $this->mobilModel->getHistoryBookingMobil($id_user)->result_array();

    $this->load->view('templates/templatehome/header_home', $data);
    $this->load->view('home/historybooking', $data);
    $this->load->view('templates/templatehome/footer_home');
  }

  public function historypenjualan()
  {
    $data['title'] = 'History Penjualan';
    $email = $this->session->userdata('email') ?? 'customer@gmail.com';
    $data['user'] = $this->authModel->getDataUser($email)->row_array();
    $id_user = $data['user']['id_user'] ?? 0;
    $data['historyPenjualanMobil'] = $this->mobilModel->getHistoryPenjualanMobil($id_user)->result_array();

    $this->load->view('templates/templatehome/header_home', $data);
    $this->load->view('home/penjualanbooking', $data);
    $this->load->view('templates/templatehome/footer_home');
  }

  public function dashboard()
  {
    $data['title'] = 'Dashboard';
    $email = $this->session->userdata('email') ?? 'customer@gmail.com';
    $data['user'] = $this->authModel->getDataUser($email)->row_array();
    $id_user = $data['user']['id_user'] ?? 0;
    // $data['historyPenjualanMobil'] = $this->mobilModel->getHistoryPenjualanMobil($id_user)->result_array();
    $data['dataPenjualMember'] = $this->mobilModel->getHistoryMobilPenjualById($id_user)->result_array();
    $data['dataPembeliMember'] = $this->mobilModel->getHistoryMobilPembeliById($id_user)->result_array();

    $this->load->view('templates/templatehome/header_home', $data);
    $this->load->view('home/dashboard', $data);
    $this->load->view('templates/templatehome/footer_home');
  }
}
