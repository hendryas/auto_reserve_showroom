<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cardetail extends CI_Controller
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

  public function detail($id)
  {
    $data['title'] = 'Detail Car';
    $email = $this->session->userdata('email');
    $data['user'] = $this->authModel->getDataUser($email)->row_array();
    $data['mobilDetail'] = $this->mobilModel->getDataMobilById($id)->row_array();

    // var_dump($data['mobilDetail']);
    // die;

    $this->load->view('templates/templatehome/header_home', $data);
    $this->load->view('home/cardetail', $data);
    $this->load->view('templates/templatehome/footer_home');
  }
}
