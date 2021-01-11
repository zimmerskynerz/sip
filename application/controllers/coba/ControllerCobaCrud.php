<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerCobaCrud extends CI_Controller
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
        $coba = $this->select_model->getDataCoba();
        // var_dump($coba);die;
        $data = array(
            'coba' => $coba
        );
        $this->load->view('kabid/beranda/cobacrud', $data);
    }
    public function crudform(){
        $id_nama  = $this->input->post('idnama');
        $data = array(
            'nama' => $id_nama
        );
        $this->db->insert('tbl_coba',$data);
        redirect('coba/form');
    }
}
        
    /* End of file  ControllerKabid.php */
