<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {

        if ($this->session->userdata('email')) {
            redirect(base_url('user'));
        }

        #Rules form
        $this->form_validation->set_rules('username', 'NRP/NIP', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        #Cek jika isi form masih salah / kosong
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/index');
            #Jika sudah benar, panggil fungsi login di bawah
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        #mengambil data yg diinput oleh user
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        #query data select * from user where 'email'='$email'
        $user = $this->db->get_where('tb_user', ['nrp' => $username])->row_array();

        #jika data user ditemukan
        if ($user) {

            #mengecek password
            if ($password == $user['pass']) {
                $data = [
                    'username' => $user['username'],
                    'role_id' => $user['role_id'],
                    'nama' => $user['nama']
                ];
                $this->session->set_userdata($data);
                #memasukkan data di atas ke session
                redirect(base_url('user'));

                #jika password salah
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong password!
                    </div>');
                redirect(base_url(''));
            }

            #jika data user tidak ditemukan
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Username is not registered!
            </div>');
            redirect(base_url(''));
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('nama');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            You have been logged out!
            </div>');
        redirect(base_url('auth'));
    }
}
