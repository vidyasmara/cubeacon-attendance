<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        if (!$this->session->userdata('nrp')) {
            redirect(base_url('auth/login'));
        }
        $data['title'] = "Dashboard";
        $data['user'] = $this->db->get_where('tb_user', ['nrp' => $this->session->userdata('nrp')])->row_array();
        if ($this->session->userdata('role_id') == 3) {
            $data['absen'] = $this->db->get_where('tb_absen', ['nrp' => $this->session->userdata('nrp')])->result_array();
        } else if ($this->session->userdata('role_id') == 2) {
            $data['matkul'] = $this->db->get_where('tb_dosen_matkul', ['nip_dosen' => $this->session->userdata('nrp')])->result_array();
        }
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('template/footer');
    }

    public function profile()
    {
        if (!$this->session->userdata('nrp')) {
            redirect(base_url('auth/login'));
        }
        $data['title'] = "My Profile";
        $user = $this->db->get_where('tb_user', ['nrp' => $this->session->userdata('nrp')])->row_array();
        $data['email'] = $user['email'];
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('template/footer', $data);
    }

    public function changePassword()
    {
        if (!$this->session->userdata('nrp')) {
            redirect(base_url('auth/login'));
        }
        $data['user'] = $this->db->get_where('tb_user', ['nrp' => $this->session->userdata('nrp')])->row_array();
        $data['title'] = 'Change Password';

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[8]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[8]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('template/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if ($current_password != $data['user']['password']) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong current password!
                </div>');
                redirect(base_url('user/changepassword'));
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    New password cannot be the same as current password!
                    </div>');
                    redirect(base_url('user/changepassword'));
                } else {
                    $this->db->set('password', $new_password);
                    $this->db->where('nrp', $this->session->userdata('nrp'));
                    $this->db->update('tb_user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password changed!
                    </div>');
                    redirect(base_url('user/changepassword'));
                }
            }
        }
    }
}
