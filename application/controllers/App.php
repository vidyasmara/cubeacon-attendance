<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App extends CI_Controller
{

    public function index($mac_address)
    {
        $data = [
            'nrp' => 1,
            'id_matkul' => 1,
            'nip' => $mac_address,
            'waktu' => 1
        ];
        $this->db->insert('tb_absen', $data);
    }
}
