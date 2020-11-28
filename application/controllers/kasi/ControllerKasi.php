<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerKasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kasi/insert_model');
        $this->load->model('kasi/update_model');
        $this->load->model('kasi/select_model');
    }
    public function index()
    {
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'KASI'])->row_array();
        if ($query_login > 0) :
            $data_baru = $this->select_model->getDataAllBaru();
            $data_perpanjang = $this->select_model->getDataAllPerpanjang();
            $data = array(
                'folder'  => 'beranda',
                'halaman' => 'index',
                'data_baru' => $data_baru,
                'data_perpanjang' => $data_perpanjang
            );
            $this->load->view('kasi/include/index', $data);
        else :
            redirect('/');
        endif;
    }
}
        
    /* End of file  ControllerKasi.php */
