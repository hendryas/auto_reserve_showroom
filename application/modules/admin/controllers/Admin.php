<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //jika tidak ada session,lempar ke auth
        // is_logged_in();
        $this->load->model('admin/admin_model', 'adminModel');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $email = $this->session->userdata('email');
        $data['user'] = $this->adminModel->getDataUser($email)->row_array();
        $data['totBookingMobil'] = $this->adminModel->getDataTotBookingMobil()->result_array();
        $data['totJualMobil'] = $this->adminModel->getDataTotJualMobil()->result_array();
        $data['totMember'] = $this->adminModel->getDataTotMember()->result_array();
        $data['totAdmin'] = $this->adminModel->getDataTotAdmin()->result_array();

        $this->load->view('templates/templateadmin/main_header', $data);
        $this->load->view('templates/loaders/loader');
        $this->load->view('templates/templateadmin/header_menu', $data);
        $this->load->view('templates/templateadmin/navbar_menu', $data);
        $this->load->view('admin/dashboardpage/view_index', $data);
        $this->load->view('templates/templateadmin/main_footer');
    }

    public function user()
    {
        $data['title'] = 'User Management';
        $email = $this->session->userdata('email');
        $data['user'] = $this->adminModel->getDataUser($email)->row_array();

        $data['peserta'] = $this->adminModel->getUser()->result_array();
        // var_dump($data['peserta']);
        // die;
        $data['role'] = $this->adminModel->getRole()->result_array();

        $this->load->view('templates/templateadmin/main_header', $data);
        $this->load->view('templates/loaders/loader');
        $this->load->view('templates/templateadmin/header_menu', $data);
        $this->load->view('templates/templateadmin/navbar_menu', $data);
        $this->load->view('admin/usermanagementpage/view_user', $data);
        $this->load->view('templates/templateadmin/main_footer');
    }

    public function edituser()
    {
        $id_user = $this->input->post('id_user');
        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $id_role = $this->input->post('id_role');
        $is_active = $this->input->post('is_active');

        $data = [
            'name' => $name,
            'email' => $email,
            'id_role' => $id_role,
            'is_active' => $is_active,
            'date_updated' => date('Y-m-d H:i:s')
        ];

        $this->adminModel->updateDataUserM($id_user, $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Data telah dirubah!</strong></div>');
        redirect('admin/user');
    }

    public function adddatauser()
    {
        $name = $this->input->post('name');
        $date_of_birth = $this->input->post('date_of_birth');
        $gender = $this->input->post('gender');
        $phone = $this->input->post('phone');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $id_role = $this->input->post('id_role');

        $data = [
            'name' => $name,
            'date_of_birth' => $date_of_birth,
            'gender' => $gender,
            'phone' => $phone,
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'id_role' => $id_role,
            'is_active' => 1,
            'date_created' => date('Y-m-d H:i:s'),
            'delete_sts' => 0
        ];

        $this->adminModel->insertDataUserM($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Data telah ditambah!</strong></div>');
        redirect('admin/user');
    }

    public function deleteuser($id)
    {
        $data = [
            'delete_sts' => 1
        ];
        $this->adminModel->updateDataUserM($id, $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        <strong>Data telah dihapus!</strong></div>');
        redirect('admin/user');
    }
}
