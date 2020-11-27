<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerKasiKategoriDokter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kasi/insert_model');
        $this->load->model('kasi/update_model');
    }
    public function index()
    {
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'KASI'])->row_array();
        if ($query_login > 0) :
            $kategori_dokter  = $this->db->get_where('tbl_kategori', ['status_kategori' => 'ADA'])->result();
            $data = array(
                'folder'  => 'kategori',
                'halaman' => 'index',
                'kategori' => $kategori_dokter
            );
            $this->load->view('kasi/include/index', $data);
        else :
            redirect('/');
        endif;
    }
    public function crudkategori()
    {
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'KASI'])->row_array();
        if ($query_login > 0) :
            if (isset($_POST['simpanKategori'])) :
                $this->insert_model->tambahKategori();
                $this->session->set_flashdata('berhasil_tambah_kategori', '<div class="berhasil_tambah_kategori"></div>');
                redirect('kasi/kategori_dokter');
            endif;
            if (isset($_POST['hapusKategori'])) :
                $this->update_model->hapusKategori();
                $this->session->set_flashdata('berhasil_hapus_kategori', '<div class="berhasil_hapus_kategori"></div>');
                redirect('kasi/kategori_dokter');
            endif;
            if (isset($_POST['ubahKategori'])) :
                $this->update_model->ubahKategori();
                $this->session->set_flashdata('berhasil_ubah_kategori', '<div class="berhasil_ubah_kategori"></div>');
                redirect('kasi/kategori_dokter');
            endif;
        else :
            redirect('/');
        endif;
    }
}
        
    /* End of file  ControllerKasiKategoriDokter.php */
