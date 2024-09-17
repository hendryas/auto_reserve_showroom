<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JenisMobil extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    //jika tidak ada session,lempar ke auth
    // is_logged_in();
    $this->load->model('JenisMobil_model');
    $this->load->model('auth/Auth_model', 'authModel');
    date_default_timezone_set('Asia/Jakarta');
  }

  public function index()
  {
    $data['title'] = 'Jenis Mobil Management';
    $email = $this->session->userdata('email');
    $data['user'] = $this->authModel->getDataUser($email)->row_array();

    $data['jenismobil'] = $this->JenisMobil_model->getData()->result_array();

    $this->form_validation->set_rules('jenis_mobil', 'Nama Jenis Mobil', 'required', [
      'required' => 'Nama Jenis Mobil tidak boleh kosong'
    ]);

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/templateadmin/main_header', $data);
      $this->load->view('templates/loaders/loader');
      $this->load->view('templates/templateadmin/header_menu', $data);
      $this->load->view('templates/templateadmin/navbar_menu', $data);
      $this->load->view('jenismobil/jenismobil', $data);
      $this->load->view('templates/templateadmin/main_footer');
    } else {
      $jenis_mobil = htmlspecialchars($this->input->post('jenis_mobil'));
      $date_created = date('Y-m-d H:i:s');

      $data = [
        'jenis_mobil' => $jenis_mobil,
        'date_created' => $date_created,
        'delete_sts' => 0
      ];

      $this->JenisMobil_model->insertData($data);

      $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            <strong>Jenis mobil baru telah ditambahkan!</strong></div>');
      redirect('jenismobil');
    }
  }

  public function editdata()
  {
    $id = decrypt_url($this->input->post('id_jenis_mobil'));
    $jenis_mobil = htmlspecialchars($this->input->post('jenis_mobil'));
    $date_updated = date('Y-m-d H:i:s');

    $data = [
      'jenis_mobil' => $jenis_mobil,
      'date_updated' => $date_updated
    ];

    $this->JenisMobil_model->updateData($id, $data);

    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Data jenis mobil telah diubah!</strong></div>');
    redirect('jenismobil');
  }

  public function deletedata($id)
  {
    $id = decrypt_url($id);
    $this->JenisMobil_model->deleteData($id);

    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Data jenis mobil telah dihapus!</strong></div>');
    redirect('jenismobil');
  }
}
