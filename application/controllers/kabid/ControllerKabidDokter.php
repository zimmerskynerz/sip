<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerKabidDokter extends CI_Controller
{

    public function index()
    {
        redirect('kabid');
    }
    public function aktif()
    {
        $data = array(
            'folder'  => 'dokter',
            'halaman' => 'aktif'
        );
        $this->load->view('kabid/include/index', $data);
    }
    public function non_aktif()
    {
        $data = array(
            'folder'  => 'dokter',
            'halaman' => 'non_aktif'
        );
        $this->load->view('kabid/include/index', $data);
    }
}
        
    /* End of file  ControllerKabidDokter.php */
