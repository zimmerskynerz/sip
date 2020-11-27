<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerKasi extends CI_Controller
{

    public function index()
    {
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'KASI'])->row_array();
        if ($query_login > 0) :
            $data = array(
                'folder'  => 'beranda',
                'halaman' => 'index'
            );
            $this->load->view('kasi/include/index', $data);
        else :
            redirect('/');
        endif;
    }
}
        
    /* End of file  ControllerKasi.php */
