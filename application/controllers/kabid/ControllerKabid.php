<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerKabid extends CI_Controller
{
    public function index()
    {
        $data = array(
            'folder'  => 'beranda',
            'halaman' => 'index'
        );
        $this->load->view('kabid/include/index', $data);
    }
}
        
    /* End of file  ControllerKabid.php */
