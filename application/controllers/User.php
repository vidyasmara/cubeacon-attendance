<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Dashboard";
        var_dump($this->session->userdata('role_id'));
        die;
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('template/footer', $data);
    }

    public function profile()
    {
        $data['title'] = "My Profile";
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('template/footer', $data);
    }

    public function changepassword()
    {
        $data['title'] = "Change Password";
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/changepassword', $data);
        $this->load->view('template/footer');
    }
}
