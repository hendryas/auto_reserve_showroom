<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MerekMobil extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    //jika tidak ada session,lempar ke auth
    // is_logged_in();
    $this->load->model('MerekMobil_model');
    $this->load->model('auth/Auth_model', 'authModel');
    date_default_timezone_set('Asia/Jakarta');
  }

  public function index()
  {
    $data['title'] = 'Merek Mobil Management';
    $email = $this->session->userdata('email');
    $data['user'] = $this->authModel->getDataUser($email)->row_array();

    $data['merekmobil'] = $this->MerekMobil_model->getData()->result_array();

    $this->form_validation->set_rules('merk_mobil', 'Nama Merek Mobil', 'required', [
      'required' => 'Nama Merek Mobil tidak boleh kosong'
    ]);

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/templateadmin/main_header', $data);
      $this->load->view('templates/loaders/loader');
      $this->load->view('templates/templateadmin/header_menu', $data);
      $this->load->view('templates/templateadmin/navbar_menu', $data);
      $this->load->view('merekmobil/merekmobil', $data);
      $this->load->view('templates/templateadmin/main_footer');
    } else {
      $merk = htmlspecialchars($this->input->post('merk_mobil'));
      $date_created = date('Y-m-d H:i:s');

      $data = [
        'merk' => $merk,
        'date_created' => $date_created,
        'delete_sts' => 0
      ];

      $this->MerekMobil_model->insertData($data);

      $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            <strong>Merk mobil baru telah ditambahkan!</strong></div>');
      redirect('merekmobil');
    }
  }

  public function editdata()
  {
    $id = decrypt_url($this->input->post('id_merk_mobil'));
    $merk_mobil = htmlspecialchars($this->input->post('merk_mobil'));
    $date_updated = date('Y-m-d H:i:s');

    $data = [
      'merk' => $merk_mobil,
      'date_updated' => $date_updated
    ];

    $this->MerekMobil_model->updateData($id, $data);

    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Data merk mobil telah diubah!</strong></div>');
    redirect('merekmobil');
  }

  public function deletedata($id)
  {
    $id = decrypt_url($id);
    $this->MerekMobil_model->deleteData($id);

    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Data merk mobil telah dihapus!</strong></div>');
    redirect('merekmobil');
  }
}
