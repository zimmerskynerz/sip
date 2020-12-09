<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerKepalaDinasDokter extends CI_Controller
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
            redirect('kepala_dinas');
        else :
            redirect('/');
        endif;
    }
    public function aktif()
    {
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'KEPALA'])->row_array();
        if ($query_login > 0) :
            $data_dokter_aktif = $this->select_model->getDataDokterAktif();
            // echo "<pre>";
            // var_dump($data_dokter_aktif);
            // die;
            $data = array(
                'folder'  => 'dokter',
                'halaman' => 'aktif',
                'data_dokter_aktif' => $data_dokter_aktif
            );
            $this->load->view('kepala_dinas/include/index', $data);
        else :
            redirect('/');
        endif;
    }
    public function non_aktif()
    {
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'KEPALA'])->row_array();
        if ($query_login > 0) :
            $data_dokter_pasif = $this->select_model->getDataDokterPasif();
            $data = array(
                'folder'  => 'dokter',
                'halaman' => 'non_aktif',
                'data_dokter_pasif' => $data_dokter_pasif
            );
            $this->load->view('kepala_dinas/include/index', $data);
        else :
            redirect('/');
        endif;
    }
}
        
    /* End of file  ControllerKepalaDinasDokter.php */
