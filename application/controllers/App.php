<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index($mac_address)
    {
        $this->load->view('app/index', $mac_address);
    }
}
