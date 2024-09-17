<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WarnaMobil extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    //jika tidak ada session,lempar ke auth
    // is_logged_in();
    $this->load->model('WarnaMobil_model');
    $this->load->model('auth/Auth_model', 'authModel');
    date_default_timezone_set('Asia/Jakarta');
  }

  public function index()
  {
    $data['title'] = 'Warna Mobil Management';
    $email = $this->session->userdata('email');
    $data['user'] = $this->authModel->getDataUser($email)->row_array();

    $data['warnamobil'] = $this->WarnaMobil_model->getData()->result_array();

    $this->form_validation->set_rules('warna_mobil', 'Nama Merek Mobil', 'required', [
      'required' => 'Nama Warna Mobil tidak boleh kosong'
    ]);

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/templateadmin/main_header', $data);
      $this->load->view('templates/loaders/loader');
      $this->load->view('templates/templateadmin/header_menu', $data);
      $this->load->view('templates/templateadmin/navbar_menu', $data);
      $this->load->view('warnamobil/warnamobil', $data);
      $this->load->view('templates/templateadmin/main_footer');
    } else {
      $warna_mobil = htmlspecialchars($this->input->post('warna_mobil'));
      $date_created = date('Y-m-d H:i:s');

      $data = [
        'warna_mobil' => $warna_mobil,
        'date_created' => $date_created,
        'delete_sts' => 0
      ];

      $this->WarnaMobil_model->insertData($data);

      $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            <strong>Warna mobil baru telah ditambahkan!</strong></div>');
      redirect('warnamobil');
    }
  }

  public function editdata()
  {
    $id = decrypt_url($this->input->post('id_warna_mobil'));
    $warna_mobil = htmlspecialchars($this->input->post('warna_mobil'));
    $date_updated = date('Y-m-d H:i:s');

    $data = [
      'warna_mobil' => $warna_mobil,
      'date_updated' => $date_updated
    ];

    $this->WarnaMobil_model->updateData($id, $data);

    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Data warna mobil telah diubah!</strong></div>');
    redirect('warnamobil');
  }

  public function deletedata($id)
  {
    $id = decrypt_url($id);
    $this->WarnaMobil_model->deleteData($id);

    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Data warna mobil telah dihapus!</strong></div>');
    redirect('warnamobil');
  }
}
