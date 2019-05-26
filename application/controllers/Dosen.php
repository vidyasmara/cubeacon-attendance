<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function detailmatkul($kodematkul)
    {
        $matkul = $this->db->get_where('tb_matakuliah', ['id_matkul' => $kodematkul])->row_array();
        $data['title'] = 'Log Absensi Mata Kuliah ' . $matkul['nama_matkul'];
        $data['user'] = $this->db->get_where('tb_user', ['nrp' => $this->session->userdata('nrp')])->row_array();
        $data['absen'] = $this->db->get_where('tb_absen', ['id_matkul' => $kodematkul]);
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('template/footer');
    }
}
