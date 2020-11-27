<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerPemohon extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pemohon/insert_model');
        $this->load->model('pemohon/update_model');
        $this->load->model('pemohon/select_model');
    }

    public function index()
    {
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'PEMOHON'])->row_array();
        if ($query_login > 0) :
            $id_user = $query_login['id_user'];
            $cek_sip = $this->select_model->cekDataSIP($id_user);
            $data_identitas = $this->db->get_where('tbl_identitas', ['id_user' => $id_user])->row_array();
            // var_dump($cek_sip);
            // die;
            $data = array(
                'folder'  => 'beranda',
                'halaman' => 'index',
                'identitas' => $data_identitas,
                // Cek Apakah Pernah Punya SIP
                'cek_sip' => $cek_sip
            );
            $this->load->view('pemohon/include/index', $data);

        else :
            redirect('/');
        endif;
    }
}
        
    /* End of file  ControllerPemohon.php */
