<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerKategoriDokter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/select_model');
        $this->load->model('kasi/insert_model');
        $this->load->model('kasi/update_model');
    }
    public function index()
    {
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'ADMIN'])->row_array();
        if ($query_login > 0) :
            $data_baru = $this->select_model->getDataAllBaruAdmin();
            $kategori_dokter  = $this->db->get_where('tbl_kategori', ['status_kategori' => 'ADA'])->result();
            $data = array(
                'folder'  => 'kategori',
                'halaman' => 'index',
                // Halaman Konfirmasi
                'data_baru' => $data_baru,
                'kategori' => $kategori_dokter
            );
            $this->load->view('admin/include/index', $data);
        else :
            redirect('/');
        endif;
    }
    public function crudkategori()
    {
        if (isset($_POST['simpanKategori'])) :
            $this->insert_model->tambahKategori();
            $this->session->set_flashdata('berhasil_tambah_kategori', '<div class="berhasil_tambah_kategori"></div>');
            redirect('admin/kategori_dokter');
        endif;
        if (isset($_POST['hapusKategori'])) :
            $this->update_model->hapusKategori();
            $this->session->set_flashdata('berhasil_hapus_kategori', '<div class="berhasil_hapus_kategori"></div>');
            redirect('admin/kategori_dokter');
        endif;
        if (isset($_POST['ubahKategori'])) :
            $this->update_model->ubahKategori();
            $this->session->set_flashdata('berhasil_ubah_kategori', '<div class="berhasil_ubah_kategori"></div>');
            redirect('admin/kategori_dokter');
        endif;
    }
}
        
    /* End of file  crudkategori.php */
