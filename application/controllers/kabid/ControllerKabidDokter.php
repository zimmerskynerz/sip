<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerKabidDokter extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kabid/insert_model');
        $this->load->model('kabid/update_model');
        $this->load->model('kabid/select_model');
    }
    public function index()
    {
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'KABID'])->row_array();
        if ($query_login > 0) :
            redirect('kabid');
        else :
            redirect('/');
        endif;
    }
    public function aktif()
    {
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'KABID'])->row_array();
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
            $this->load->view('kabid/include/index', $data);
        else :
            redirect('/');
        endif;
    }
    public function non_aktif()
    {
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'KABID'])->row_array();
        if ($query_login > 0) :
            $data_dokter_pasif = $this->select_model->getDataDokterPasif();
            $data = array(
                'folder'  => 'dokter',
                'halaman' => 'non_aktif',
                'data_dokter_pasif' => $data_dokter_pasif
            );
            $this->load->view('kabid/include/index', $data);
        else :
            redirect('/');
        endif;
    }
}
        
    /* End of file  ControllerKabidDokter.php */
