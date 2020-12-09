<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerKasiDokter extends CI_Controller
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
            redirect('kasi');
        else :
            redirect('/');
        endif;
    }
    public function aktif()
    {
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'KASI'])->row_array();
        if ($query_login > 0) :
            $data_dokter_aktif = $this->select_model->getDataDokterAktif();
            var_dump($data_dokter_aktif);
            die;
            $data = array(
                'folder'  => 'dokter',
                'halaman' => 'aktif',
                'data_dokter_aktif' => $data_dokter_aktif
            );
            $this->load->view('kasi/include/index', $data);
        else :
            redirect('/');
        endif;
    }
    public function non_aktif()
    {
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'KASI'])->row_array();
        if ($query_login > 0) :
            $data = array(
                'folder'  => 'dokter',
                'halaman' => 'non_aktif'
            );
            $this->load->view('kasi/include/index', $data);
        else :
            redirect('/');
        endif;
    }
}
        
    /* End of file  ControllerKasiDokter.php */
