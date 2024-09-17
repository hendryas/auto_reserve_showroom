<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    //jika tidak ada session,lempar ke auth
    // is_logged_in();
    $this->load->model('Home_model');
    $this->load->model('auth/Auth_model', 'authModel');
    $this->load->model('merekmobil/MerekMobil_model', 'merkModel');
    $this->load->model('modelmobil/modelmobil_model', 'modelModel');
    $this->load->model('varianmobil/varianmobil_model', 'varianModel');
    $this->load->model('jenismobil/jenismobil_model', 'jenisModel');
    $this->load->model('warnamobil/warnamobil_model', 'warnaModel');
    $this->load->model('mobil/Mobil_model', 'mobilModel');
    date_default_timezone_set('Asia/Jakarta');
  }

  public function index()
  {
    $data['title'] = 'Profile';
    $email = $this->session->userdata('email');
    $data['user'] = $this->authModel->getDataUser($email)->row_array();
    $data['merkModel'] = $this->merkModel->getDataMerk()->result_array();
    $data['mobilDetail'] = $this->mobilModel->getDataMobilDetails()->result_array();
    $data['mobilPopuler'] = $this->mobilModel->getDataMobilPopuler()->result_array();

    $this->load->view('templates/templatehome/header_home', $data);
    $this->load->view('home/profile', $data);
    $this->load->view('templates/templatehome/footer_home');
  }

  public function updatedata()
  {
    $id_user = $this->input->post('id_user');
    $nama = $this->input->post('nama');
    $pass = $this->input->post('password');

    if ($pass == "") {
      $data = [
        'name' => $nama,
      ];
    } else {
      $password =  password_hash($this->input->post('password'), PASSWORD_DEFAULT);
      $data = [
        'password' => $password,
        'name' => $nama,
      ];
    }

    $this->Home_model->updateData($id_user, $data);

    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
    <strong>Data telah di ubah!</strong></div>');
    redirect('home/profile');
  }
}
