<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerValidasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/insert_model');
        $this->load->model('admin/update_model');
        $this->load->model('admin/select_model');
    }
    public function index()
    {
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'ADMIN'])->row_array();
        if ($query_login > 0) :
            $data_baru = $this->select_model->getDataAllBaruAdmin();
            $data = array(
                'folder'  => 'beranda',
                'halaman' => 'index',
                // Halaman Konfirmasi
                'data_baru' => $data_baru
            );
            $this->load->view('admin/include/index', $data);
        else :
            redirect('/');
        endif;
    }
    public function detail($id)
    {
        $id_user = $id;
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'ADMIN'])->row_array();
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
            $this->load->view('admin/include/index', $data);
        else :
            redirect('/');
        endif;
    }
    public function crudpemohon()
    {
        if (isset($_POST['terimaKasiRekomendasi'])) :
            $this->update_model->terima_rekomendasi();
            $this->session->set_flashdata('terimaKasiRekomendasi', '<div class="terimaKasiRekomendasi"></div>');
            redirect('admin');
        endif;
        if (isset($_POST['terimaKasiRekomendasiPerpanjang'])) :
            $this->update_model->terima_rekomendasi_perpanjang();
            $this->session->set_flashdata('berhasil_terima_rekomendasi', '<div class="berhasil_terima_rekomendasi"></div>');
            redirect('admin');
        endif;
    }
}
        
    /* End of file  ControllerValidasi.php */
