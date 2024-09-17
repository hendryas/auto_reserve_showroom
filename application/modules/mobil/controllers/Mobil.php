<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobil extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    //jika tidak ada session,lempar ke auth
    // is_logged_in();
    $this->load->library('upload');

    $this->load->model('Mobil_model');
    $this->load->model('merekmobil/merekmobil_model');
    $this->load->model('modelmobil/modelmobil_model');
    $this->load->model('varianmobil/varianmobil_model');
    $this->load->model('jenismobil/jenismobil_model');
    $this->load->model('warnamobil/warnamobil_model');
    $this->load->model('auth/Auth_model', 'authModel');
    date_default_timezone_set('Asia/Jakarta');
  }

  public function index()
  {
    $data['title'] = 'Mobil Management';
    $email = $this->session->userdata('email');
    $data['user'] = $this->authModel->getDataUser($email)->row_array();

    $data['mobil'] = $this->Mobil_model->getData()->result_array();
    $data['merkmobil'] = $this->merekmobil_model->getData()->result_array();
    $data['modelmobil'] = $this->modelmobil_model->getData()->result_array();
    $data['varianmobil'] = $this->varianmobil_model->getData()->result_array();
    $data['jenismobil'] = $this->jenismobil_model->getData()->result_array();
    $data['warnamobil'] = $this->warnamobil_model->getData()->result_array();

    $data['mobilDetail'] = $this->Mobil_model->getDataMobilDetails()->result_array();

    $this->form_validation->set_rules('tahun_mobil', 'Tahun Mobil', 'required', [
      'required' => 'Tahun Mobil tidak boleh kosong'
    ]);

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/templateadmin/main_header', $data);
      $this->load->view('templates/loaders/loader');
      $this->load->view('templates/templateadmin/header_menu', $data);
      $this->load->view('templates/templateadmin/navbar_menu', $data);
      $this->load->view('mobil/mobil', $data);
      $this->load->view('templates/templateadmin/main_footer');
    } else {
      $files = $_FILES;
      $count = count($_FILES['files']['name']);
      $merk_mobil = htmlspecialchars($this->input->post('merk_mobil'));
      $model_mobil = htmlspecialchars($this->input->post('model_mobil'));
      $varian_mobil = htmlspecialchars($this->input->post('varian_mobil'));
      $jenis_mobil = htmlspecialchars($this->input->post('jenis_mobil'));
      $warna_mobil = htmlspecialchars($this->input->post('warna_mobil'));
      $tahun_mobil = htmlspecialchars($this->input->post('tahun_mobil'));
      $kilometer_mobil = htmlspecialchars($this->input->post('kilometer_mobil'));
      $plat_nomor = htmlspecialchars($this->input->post('plat_nomor'));
      $transmisi = htmlspecialchars($this->input->post('transmisi'));
      $bebas_tabrak = htmlspecialchars($this->input->post('bebas_tabrak'));
      $bebas_banjir = htmlspecialchars($this->input->post('bebas_banjir'));
      $bpkb = htmlspecialchars($this->input->post('bpkb'));
      $buku_service = htmlspecialchars($this->input->post('buku_service'));
      $grade_mobil = htmlspecialchars($this->input->post('grade_mobil'));
      $harga_cash = htmlspecialchars($this->input->post('harga_cash'));
      $harga_credit = htmlspecialchars($this->input->post('harga_credit'));
      $url_video_mobil = htmlspecialchars($this->input->post('url_video_mobil'));
      $lokasi = htmlspecialchars($this->input->post('lokasi'));
      $img_mobil = $_FILES['files']['name'];
      $date_created = date('Y-m-d H:i:s');
      $upload_data = array();
      $status_mobil = 'Posting';

      if (!empty($_FILES['files']['name'][0])) {

        $data = [
          'id_merk_mobil' => $merk_mobil,
          'id_model_mobil' => $model_mobil,
          'id_variant_mobil' => $varian_mobil,
          'id_jenis_mobil' => $jenis_mobil,
          'id_warna_mobil' => $warna_mobil,
          'tahun_pembuatan' => $tahun_mobil,
          'kilometer_mobil' => $kilometer_mobil,
          'plat_nomor' => $plat_nomor,
          'transmisi' => $transmisi,
          'bebas_tabrak' => $bebas_tabrak,
          'bebas_banjir' => $bebas_banjir,
          'bpkb' => $bpkb,
          'buku_service' => $buku_service,
          'grade_mobil' => $grade_mobil,
          'harga_cash' => $harga_cash,
          'harga_credit' => $harga_credit,
          'url_video_mobil' => $url_video_mobil,
          'lokasi' => $lokasi,
          'status_mobil' => $status_mobil,
          'date_created' => $date_created,
          'delete_sts' => 0
        ];

        $qryInsert = $this->Mobil_model->insertData($data);

        $getLatestData = $this->Mobil_model->getLatestData()->row_array();
        $id_mobil = $getLatestData['id_mobil'];

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

          $this->Mobil_model->insertDataImgMobil($data_img);

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
        <strong>Mobil baru telah ditambahkan!</strong></div>');
        redirect('mobil');
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
        <strong>Gagal menambahkan data mobil!</strong></div>');
        redirect('mobil');
      }
    }
  }

  private function set_upload_options()
  {
    //upload an image options
    $config = array();
    $file_name                = 'img_mobil' . '_' . $thbl . '-' . $his;
    $config['upload_path']    = './assets/images/mobil/';
    $config['allowed_types']  = 'jpg|png|jpeg';
    $config['max_size']       = 3023;
    $config['max_width']      = '1024';
    $config['max_height']     = '768';
    $config['overwrite']      = FALSE;
    $config['remove_space']   = TRUE;
    $config['file_name']      = $file_name;

    return $config;
  }

  public function editdata()
  {
    $id = decrypt_url($this->input->post('id_model_mobil'));
    $model_mobil = htmlspecialchars($this->input->post('model_mobil'));
    $date_updated = date('Y-m-d H:i:s');

    $data = [
      'model' => $model_mobil,
      'date_updated' => $date_updated
    ];

    $this->Mobil_model->updateData($id, $data);

    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Data model mobil telah diubah!</strong></div>');
    redirect('modelmobil');
  }

  public function deletedata($id)
  {
    $id = decrypt_url($id);
    $this->Mobil_model->deleteData($id);

    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Data model mobil telah dihapus!</strong></div>');
    redirect('modelmobil');
  }

  public function add_ajax_model($id)
  {
    $query = $this->db->get_where('model_mobil', array('id_merk_mobil' => $id));
    $data = "<option value=''>- Pilih Model -</option>";
    foreach ($query->result() as $value) {
      $data .= "<option value='" . $value->id_model_mobil . "'>" . $value->model . "</option>";
    }
    echo $data;
  }

  public function add_ajax_variant($id)
  {
    $query = $this->db->get_where('variant_mobil', array('id_model_mobil' => $id));
    $data = "<option value=''> - Pilih Variant - </option>";
    foreach ($query->result() as $value) {
      $data .= "<option value='" . $value->id_variant_mobil . "'>" . $value->variant_mobil . "</option>";
    }
    echo $data;
  }

  public function editdatamobil()
  {
    $id = decrypt_url($this->input->post('id_mobil'));
    $harga_cash = htmlspecialchars($this->input->post('harga_cash'));
    $harga_credit = htmlspecialchars($this->input->post('harga_credit'));
    $url_video_mobil = htmlspecialchars($this->input->post('url_video_mobil'));
    $grade_mobil = htmlspecialchars($this->input->post('grade_mobil'));
    $lokasi = htmlspecialchars($this->input->post('lokasi'));
    $date_updated = date('Y-m-d H:i:s');

    $data = [
      'harga_cash' => $harga_cash,
      'harga_credit' => $harga_credit,
      'url_video_mobil' => $url_video_mobil,
      'lokasi' => $lokasi,
      'grade_mobil' => $grade_mobil,
      'date_updated' => $date_updated
    ];

    $this->Mobil_model->updateData($id, $data);

    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Data model mobil telah diubah!</strong></div>');
    redirect('mobil');
  }
}
