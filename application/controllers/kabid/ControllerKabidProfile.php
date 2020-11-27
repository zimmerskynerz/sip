<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerKabidProfile extends CI_Controller
{

    public function index()
    {
        $data = array(
            'folder'  => 'profile',
            'halaman' => 'index'
        );
        $this->load->view('kabid/include/index', $data);
    }
}
        
    /* End of file  ControllerKabidProfile.php */
