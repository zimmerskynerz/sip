<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerKabidValidasi extends CI_Controller
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
            $data_validasi = $this->select_model->getDataValidasi();
            // var_dump($data_validasi);
            // die;
            $data = array(
                'folder'  => 'validasi',
                'halaman' => 'index',
                // Halaman Isi
                'data_validasi' => $data_validasi
            );
            $this->load->view('kabid/include/index', $data);
        else :
            redirect('/');
        endif;
    }
    public function crudvalidasi()
    {
        if (isset($_POST['validasiSip'])) :
            $this->update_model->validasiSip();
            redirect('kabid/validasi');
        endif;
    }
}
        
    /* End of file  ControllerKabidValidasi.php */
