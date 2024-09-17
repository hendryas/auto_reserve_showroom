<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginMember extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    ini_set('date.timezone', 'Asia/Jakarta');
    $this->load->model('auth/Auth_model', 'authModel');
    $this->load->library('session');
  }

  public function index()
  {
    // $email = $this->session->userdata('email');
    // $user = $this->authModel->getDataUser($email)->row_array();

    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $user = $this->authModel->getDataUser($email)->row_array();

    // Jika usernya ada
    if ($user) {
      // cek password
      if (password_verify($password, $user['password'])) {
        // jika data benar
        $data = [
          'id' => $user['id_user'],
          'email' => $user['email'],
          'id_role' => $user['id_role']
        ];
        $this->session->set_userdata($data);
        // var_dump($data);
        // die;
        if ($user['id_role'] == 1 || $user['id_role'] == 2) {
          redirect('admin');
        } elseif ($user['id_role'] == 3 || $user['id_role'] == 4) {
          redirect('home');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
                    <strong>Password salah!</strong> Silahkan coba lagi.</div>');
        redirect('home');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
            <strong>E-mail belum terdaftar!</strong> Silahkan daftarkan E-mail anda.</div>');
      redirect('home');
    }
  }
}
