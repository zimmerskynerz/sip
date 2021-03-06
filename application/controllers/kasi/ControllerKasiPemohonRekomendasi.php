<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerKasiPemohonRekomendasi extends CI_Controller
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
            redirect('login');
        endif;
    }
    public function baru()
    {
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'KASI'])->row_array();
        if ($query_login > 0) :
            $data_baru = $this->select_model->getDataAllBaru();
            $data = array(
                'folder'  => 'rekomendasi',
                'halaman' => 'baru',
                'data_baru' => $data_baru
            );
            $this->load->view('kasi/include/index', $data);
        else :
            redirect('login');
        endif;
    }
    public function perpanjang()
    {
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'KASI'])->row_array();
        if ($query_login > 0) :
            $data_perpanjang = $this->select_model->getDataAllPerpanjang();
            $data = array(
                'folder'  => 'rekomendasi',
                'halaman' => 'perpanjang',
                'data_perpanjang' => $data_perpanjang
            );
            $this->load->view('kasi/include/index', $data);
        else :
            redirect('login');
        endif;
    }
    public function detail_berkas($id)
    {
        $id_user = $id;
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'KASI'])->row_array();
        if ($query_login > 0) :
            $data_identitas = $this->select_model->getAllIdentitasDokter($id_user);
            $data_berkas = $this->select_model->getAllBerkasDokter($id_user);
            $data_rekomendasi = $this->select_model->getAllRekomendasi($id_user);
            $data_kategori = $this->select_model->getAllDokterKategori();
            $data = array(
                'folder'  => 'rekomendasi',
                'halaman' => 'detail_berkas',
                // Data Konten
                'data_identitas' => $data_identitas,
                'data_berkas' => $data_berkas,
                'data_rekomendasi' => $data_rekomendasi,
                'data_kategori' => $data_kategori
            );
            $this->load->view('kasi/include/index', $data);
        else :
            redirect('login');
        endif;
    }
    public function crudpemohon()
    {
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'KASI'])->row_array();
        if ($query_login > 0) :
            if (isset($_POST['terimaKasiRekomendasi'])) :
                $this->update_model->terima_rekomendasi();
                $this->session->set_flashdata('berhasil_terima_rekomendasi', '<div class="berhasil_terima_rekomendasi"></div>');
                redirect('kasi/pemohon_rekomendasi/baru');
            endif;
            if (isset($_POST['terimaKasiRekomendasiPerpanjang'])) :
                $this->update_model->terima_rekomendasi_perpanjang();
                $this->session->set_flashdata('berhasil_terima_rekomendasi', '<div class="berhasil_terima_rekomendasi"></div>');
                redirect('kasi/pemohon_rekomendasi/perpanjang');
            endif;
        else :
            redirect('login');
        endif;
    }
}
        
    /* End of file  ControllerKasiPemohonRekomendasi.php */
