<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staff extends CI_Controller
{

    public function matkul()
    {
        if (!$this->session->userdata('nrp')) {
            redirect(base_url('auth/login'));
        }
        $data['title'] = "Data Mata Kuliah";
        $data['user'] = $this->db->get_where('tb_user', ['nrp' => $this->session->userdata('nrp')])->row_array();
        $data['matkul'] = $this->db->get('tb_matakuliah')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('staff/matkul', $data);
        $this->load->view('template/footer');
    }

    public function dosen()
    {
        if (!$this->session->userdata('nrp')) {
            redirect(base_url('auth/login'));
        }
        $data['title'] = "Data Dosen";
        $data['user'] = $this->db->get_where('tb_user', ['nrp' => $this->session->userdata('nrp')])->row_array();
        $data['dosen'] = $this->db->get_where('tb_user', ['role_id' => 2])->result_array();


        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('staff/dosen', $data);
        $this->load->view('template/footer');
    }

    public function mahasiswa()
    {
        if (!$this->session->userdata('nrp')) {
            redirect(base_url('auth/login'));
        }
        $data['title'] = "Data Mahasiswa";
        $data['user'] = $this->db->get_where('tb_user', ['nrp' => $this->session->userdata('nrp')])->row_array();
        $data['mahasiswa'] = $this->db->get_where('tb_user', ['role_id' => 3])->result_array();


        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('staff/mahasiswa', $data);
        $this->load->view('template/footer');
    }
}
