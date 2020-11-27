<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerKepalaDinasProfile extends CI_Controller
{

    public function index()
    {
        $data = array(
            'folder'  => 'profile',
            'halaman' => 'index'
        );
        $this->load->view('kepala_dinas/include/index', $data);
    }
}
        
    /* End of file  ControllerKepalaDinasProfile.php */
