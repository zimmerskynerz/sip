<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerKepalaDinas extends CI_Controller
{
    public function index()
    {
        $data = array(
            'folder'  => 'beranda',
            'halaman' => 'index'
        );
        $this->load->view('kepala_dinas/include/index', $data);
    }
}
        
    /* End of file  ControllerKepalaDinas.php */
