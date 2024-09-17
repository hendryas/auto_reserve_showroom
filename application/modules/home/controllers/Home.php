<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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
    $data['title'] = 'Home';
    $email = $this->session->userdata('email');
    $data['user'] = $this->authModel->getDataUser($email)->row_array();
    $data['merkModel'] = $this->merkModel->getDataMerk()->result_array();
    $data['mobilDetail'] = $this->mobilModel->getDataMobilDetails()->result_array();
    $data['mobilPopuler'] = $this->mobilModel->getDataMobilPopuler()->result_array();

    $merk = $this->input->post('merk') != '' ? $this->input->post('merk') : '';
    $grade = $this->input->post('grade') != '' ? $this->input->post('grade') : '';
    $search_text = $this->input->post('search_text') != '' ? $this->input->post('search_text') : '';

    if ($merk != '' || $grade != '' || $search_text != '') {
      $data['mobilDetail'] = $this->mobilModel->getDataBySearch($merk, $grade, $search_text)->result_array();
    }

    $this->load->view('templates/templatehome/header_home', $data);
    $this->load->view('home/home', $data);
    $this->load->view('templates/templatehome/footer_home');
  }

  public function penjualanmobil()
  {
    $data['title'] = 'Home';
    $email = $this->session->userdata('email');
    $data['user'] = $this->authModel->getDataUser($email)->row_array();
    $data['merkmobil'] = $this->merkModel->getData()->result_array();
    $data['modelmobil'] = $this->modelModel->getData()->result_array();
    $data['varianmobil'] = $this->varianModel->getData()->result_array();
    $data['jenismobil'] = $this->jenisModel->getData()->result_array();
    $data['warnamobil'] = $this->warnaModel->getData()->result_array();

    $this->load->view('templates/templatehome/header_home', $data);
    $this->load->view('home/formpenjualan', $data);
    $this->load->view('templates/templatehome/footer_home');
  }

  public function prosesjualmobil()
  {
    $email = $this->session->userdata('email');
    $data['user'] = $this->authModel->getDataUser($email)->row_array();
    $id_user = $data['user']['id_user'];

    // Data Penjual Mobil
    $img_mobil = $_FILES['files']['name'];
    $nama = $this->input->post('nama');
    $no_telp = $this->input->post('no_telp');
    $domisili = $this->input->post('domisili');
    $provinsi = $this->input->post('provinsi');
    $kota = $this->input->post('kota');
    $perkiraan_harga_mobil = $this->input->post('perkiraan_harga_mobil');
    $count = count($_FILES['files']['name']);

    // Data Mobil
    $merk = $this->input->post('merk');
    $model = $this->input->post('model');
    $variant = $this->input->post('variant');
    $jenis = $this->input->post('jenis');
    $warna = $this->input->post('warna');
    $tahun = $this->input->post('tahun');
    $kilometer = $this->input->post('kilometer');
    $plat_nomor = $this->input->post('plat_nomor');
    $transmisi = $this->input->post('transmisi');
    $bebas_tabrak = $this->input->post('bebas_tabrak');
    $bebas_banjir = $this->input->post('bebas_banjir');
    $bpkb = $this->input->post('bpkb');
    $buku_service = $this->input->post('buku_service');
    $date_created = date('Y-m-d H:i:s');

    // 2009 <= 2010
    // var_dump((int)$tahun <= 2008);
    // var_dump($tahun);
    // die;

    if ((int)$tahun < 2010) {
      // $this->form_validation->set_message('year_check', 'Tahun harus kurang dari atau sama dengan 2010');

      $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
      <strong>Tahun kendaraan dibawah 2010!</strong></div>');
      redirect('home/penjualanmobil');
    }

    $data = [
      'id_merk_mobil' => $merk,
      'id_model_mobil' => $model,
      'id_variant_mobil' => $variant,
      'id_jenis_mobil' => $jenis,
      'id_warna_mobil' => $warna,
      'tahun_pembuatan' => $tahun,
      'kilometer_mobil' => $kilometer,
      'plat_nomor' => $plat_nomor,
      'transmisi' => $transmisi,
      'bebas_tabrak' => $bebas_tabrak,
      'bebas_banjir' => $bebas_banjir,
      'bpkb' => $bpkb,
      'buku_service' => $buku_service,
      'date_created' => $date_created,
      'delete_sts' => 0
    ];

    if ($bebas_tabrak == 'Tidak' || $bebas_banjir == 'Tidak' || $bpkb == 'Tidak') {
      $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
      <strong>Mohon maaf, mobil anda belum memenuhi persyaratan untuk dijual!</strong></div>');
      redirect('home/penjualanmobil');
    }

    if (!empty($_FILES['files']['name'][0])) {
      $dataMobil = [
        'id_merk_mobil' => $merk,
        'id_model_mobil' => $model,
        'id_variant_mobil' => $variant,
        'id_jenis_mobil' => $jenis,
        'id_warna_mobil' => $warna,
        'tahun_pembuatan' => $tahun,
        'kilometer_mobil' => $kilometer,
        'plat_nomor' => $plat_nomor,
        'transmisi' => $transmisi,
        'bebas_tabrak' => $bebas_tabrak,
        'bebas_banjir' => $bebas_banjir,
        'bpkb' => $bpkb,
        'buku_service' => $buku_service,
        'date_created' => $date_created,
        'delete_sts' => 0
      ];

      $this->mobilModel->insertData($dataMobil);

      $getLatestData = $this->mobilModel->getLatestData()->row_array();
      $id_mobil = $getLatestData['id_mobil'];

      $dataPenjualMobil = [
        'id_user' => $id_user,
        'id_mobil' => $id_mobil,
        'nama' => $nama,
        'no_telp' => $no_telp,
        'domisili' => $domisili,
        'provinsi' => $provinsi,
        'kota' => $kota,
        'perkiraan_harga_mobil' => $perkiraan_harga_mobil,
        'status' => "Menunggu Verifikasi Admin",
        'date_created' => $date_created,
        'delete_sts' => 0
      ];

      $this->mobilModel->insertDataPenjualMobil($dataPenjualMobil);

      $his    = date("His");
      $thbl   = date("Ymd");

      // Loop melalui setiap file
      for ($i = 0; $i < $count; $i++) {
        $file_name1 = 'car' . '_' . $thbl . '-' . $his . '-' . $i;
        $config1['upload_path']          = './assets_home/images/cars/';
        // $config1['allowed_types']        = 'doc|docx|pdf';
        $config1['allowed_types']        = 'jpg|png|jpeg';
        $config1['max_size']             = 3023;
        $config1['remove_space']         = TRUE;
        $config1['file_name']            = $file_name1;

        $this->load->library('upload', $config1);

        $dname = explode(".", $_FILES['files']['name'][$i]);
        $ext = end($dname);
        $new_image = strtolower('car' . '_' . $thbl . '-' . $his . '-' . $i . '.' . $ext);

        $data_img = [
          'id_mobil' => $id_mobil,
          'gambar_mobil' => $new_image,
          'date_created' => $date_created,
          'delete_sts' => 0
        ];

        $this->mobilModel->insertDataImgMobil($data_img);

        // Set the file name for the current upload
        $_FILES['file']['name'] = $_FILES['files']['name'][$i];
        $_FILES['file']['type'] = $_FILES['files']['type'][$i];
        $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
        $_FILES['file']['error'] = $_FILES['files']['error'][$i];
        $_FILES['file']['size'] = $_FILES['files']['size'][$i];

        $this->upload->initialize($config1); // Reinitialize the upload library with the new config

        if ($this->upload->do_upload('file')) {
          $this->upload->data();
        } else {
          // Handle the error, for example:
          $error = $this->upload->display_errors();
        }
      }

      $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
      <strong>Berhasil mengirimkan data!</strong></div>');
      redirect('home/booking/historypenjualan');
    }
  }
}
