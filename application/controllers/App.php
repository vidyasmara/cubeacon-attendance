<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App extends CI_Controller
{

    public function index()
    {
        $data = [
            'nrp' => 1,
            'id_matkul' => 1,
            'nip' => $this->input->post('mac_address'),
            'waktu' => 1
        ];
        $this->db->insert('tb_absen', $data);
    }
}
