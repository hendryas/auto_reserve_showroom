<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesan extends CI_Controller
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

  public function index()
  {
    $data['title'] = 'Pesan';
    $email = $this->session->userdata('email');
    $data['user'] = $this->authModel->getDataUser($email)->row_array();
    $id_user = $data['user']['id_user'] ?? 0;
    $data['dataPesan'] = $this->Home_model->getDataPesanMember($id_user)->result_array();

    // $this->load->view('templates/loaders/loader');
    // $this->load->view('templates/templatestaff/header_menu', $data);
    // $this->load->view('templates/templatestaff/navbar_menu', $data);
    // $this->load->view('staff/staffpage/dashboardpage/view_dashboard', $data);
    $this->load->view('templates/templatehome/header_home', $data);
    $this->load->view('home/pesan', $data);
    $this->load->view('templates/templatehome/footer_home');
  }
}
