<?php
defined('BASEPATH') or exit('No direct script access allowed');

class VarianMobil extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    //jika tidak ada session,lempar ke auth
    // is_logged_in();
    $this->load->model('VarianMobil_model');
    $this->load->model('modelmobil/ModelMobil_model', 'ModelMobil_model');
    $this->load->model('auth/Auth_model', 'authModel');
    date_default_timezone_set('Asia/Jakarta');
  }

  public function index()
  {
    $data['title'] = 'Varian Mobil Management';
    $email = $this->session->userdata('email');
    $data['user'] = $this->authModel->getDataUser($email)->row_array();

    $data['varianmobil'] = $this->VarianMobil_model->getData()->result_array();
    $data['modelmobil'] = $this->ModelMobil_model->getData()->result_array();

    $this->form_validation->set_rules('varian_mobil', 'Nama Varian Mobil', 'required', [
      'required' => 'Nama Varian Mobil tidak boleh kosong'
    ]);

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/templateadmin/main_header', $data);
      $this->load->view('templates/loaders/loader');
      $this->load->view('templates/templateadmin/header_menu', $data);
      $this->load->view('templates/templateadmin/navbar_menu', $data);
      $this->load->view('varianmobil/varianmobil', $data);
      $this->load->view('templates/templateadmin/main_footer');
    } else {
      $variant_mobil = htmlspecialchars($this->input->post('varian_mobil'));
      $model_mobil = htmlspecialchars($this->input->post('model_mobil'));

      $date_created = date('Y-m-d H:i:s');

      $data = [
        'id_model_mobil' => $model_mobil,
        'variant_mobil' => $variant_mobil,
        'date_created' => $date_created,
        'delete_sts' => 0
      ];

      $this->VarianMobil_model->insertData($data);

      $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            <strong>Varian mobil baru telah ditambahkan!</strong></div>');
      redirect('varianmobil');
    }
  }

  public function editdata()
  {
    $id = decrypt_url($this->input->post('id_variant_mobil'));
    $variant_mobil = htmlspecialchars($this->input->post('variant_mobil'));
    $model_mobil = htmlspecialchars($this->input->post('model_mobil'));
    $date_updated = date('Y-m-d H:i:s');

    $data = [
      'id_model_mobil' => $model_mobil,
      'variant_mobil' => $variant_mobil,
      'date_updated' => $date_updated
    ];

    $this->VarianMobil_model->updateData($id, $data);

    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Data varian mobil telah diubah!</strong></div>');
    redirect('varianmobil');
  }

  public function deletedata($id)
  {
    $id = decrypt_url($id);
    $this->VarianMobil_model->deleteData($id);

    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Data varian mobil telah dihapus!</strong></div>');
    redirect('varianmobil');
  }
}
