<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerKasiProfile extends CI_Controller
{

    public function index()
    {
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'KASI'])->row_array();
        if ($query_login > 0) :
            $data = array(
                'folder'  => 'profile',
                'halaman' => 'index'
            );
            $this->load->view('kasi/include/index', $data);
        else :
            redirect('/');
        endif;
    }
    public function crudprofile()
    {
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'KASI'])->row_array();
        if ($query_login > 0) :
            $data = array(
                'folder'  => 'profile',
                'halaman' => 'index'
            );
            $this->load->view('kasi/include/index', $data);
        else :
            redirect('/');
        endif;
    }
}
        
    /* End of file  ControllerKasiProfile.php */
