<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerKepalaDinas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kepala_dinas/insert_model');
        $this->load->model('kepala_dinas/update_model');
        $this->load->model('kepala_dinas/select_model');
    }
    public function index()
    {
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'KEPALA'])->row_array();
        if ($query_login > 0) :
            $data_baru = $this->select_model->getDataAllBaru();
            $data_perpanjang = $this->select_model->getDataAllPerpanjang();
            $data = array(
                'folder'  => 'beranda',
                'halaman' => 'index',
                'data_perpanjang' => $data_perpanjang,
                'data_baru' => $data_baru
            );
            $this->load->view('kepala_dinas/include/index', $data);
        else :
            redirect('/');
        endif;
    }
}
        
    /* End of file  ControllerKepalaDinas.php */
