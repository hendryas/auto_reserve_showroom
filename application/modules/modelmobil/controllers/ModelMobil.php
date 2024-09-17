<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelMobil extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    //jika tidak ada session,lempar ke auth
    // is_logged_in();
    $this->load->model('ModelMobil_model');
    $this->load->model('merekmobil/MerekMobil_model', 'MerekMobil_model');
    $this->load->model('auth/Auth_model', 'authModel');
    date_default_timezone_set('Asia/Jakarta');
  }

  public function index()
  {
    $data['title'] = 'Model Mobil Management';
    $email = $this->session->userdata('email');
    $data['user'] = $this->authModel->getDataUser($email)->row_array();

    $data['modelmobil'] = $this->ModelMobil_model->getData()->result_array();
    $data['merekmobil'] = $this->MerekMobil_model->getData()->result_array();

    $this->form_validation->set_rules('model_mobil', 'Nama Model Mobil', 'required', [
      'required' => 'Nama Model Mobil tidak boleh kosong'
    ]);

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/templateadmin/main_header', $data);
      $this->load->view('templates/loaders/loader');
      $this->load->view('templates/templateadmin/header_menu', $data);
      $this->load->view('templates/templateadmin/navbar_menu', $data);
      $this->load->view('modelmobil/modelmobil', $data);
      $this->load->view('templates/templateadmin/main_footer');
    } else {
      $model_mobil = htmlspecialchars($this->input->post('model_mobil'));
      $merk_mobil = htmlspecialchars($this->input->post('merk_mobil'));

      $date_created = date('Y-m-d H:i:s');

      $data = [
        'id_merk_mobil' => $merk_mobil,
        'model' => $model_mobil,
        'date_created' => $date_created,
        'delete_sts' => 0
      ];

      $this->ModelMobil_model->insertData($data);

      $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            <strong>Model mobil baru telah ditambahkan!</strong></div>');
      redirect('modelmobil');
    }
  }

  public function editdata()
  {
    $id = decrypt_url($this->input->post('id_model_mobil'));
    $model_mobil = htmlspecialchars($this->input->post('model_mobil'));
    $merk_mobil = htmlspecialchars($this->input->post('merk_mobil'));
    $date_updated = date('Y-m-d H:i:s');

    $data = [
      'id_merk_mobil' => $merk_mobil,
      'model' => $model_mobil,
      'date_updated' => $date_updated
    ];

    $this->ModelMobil_model->updateData($id, $data);

    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Data model mobil telah diubah!</strong></div>');
    redirect('modelmobil');
  }

  public function deletedata($id)
  {
    $id = decrypt_url($id);
    $this->ModelMobil_model->deleteData($id);

    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Data model mobil telah dihapus!</strong></div>');
    redirect('modelmobil');
  }
}
