<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerPemohonDocument extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pemohon/insert_model');
        $this->load->model('pemohon/update_model');
        $this->load->model('pemohon/select_model');
    }
    public function index()
    {
        redirect('pemohon');
    }
    public function rekomendasi()
    {

        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'PEMOHON'])->row_array();
        if ($query_login > 0) :
            $id_user = $query_login['id_user'];
            $cek_sip = $this->select_model->cekDataSIP($id_user);
            $data_identitas = $this->select_model->getAllIdentitasDokter($id_user);
            $data_rekomendasi = $this->select_model->getAllRekomendasi($id_user);
            $data = array(
                'folder' => 'dokumen',
                'halaman' => 'rekomendasi/index',
                // Cek Apakah Pernah Punya SIP
                'cek_sip' => $cek_sip,
                'data_identitas' => $data_identitas,
                'data_rekomendasi' => $data_rekomendasi
            );
            $this->load->view('pemohon/include/index', $data);
        else :
            redirect('/');
        endif;
    }
    public function ijin_praktek()
    {
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'PEMOHON'])->row_array();
        if ($query_login > 0) :
            $id_user = $query_login['id_user'];
            $cek_sip = $this->select_model->cekDataSIP($id_user);
            $data_identitas = $this->select_model->getAllIdentitasDokter($id_user);
            $data_rekomendasi = $this->select_model->getAllRekomendasi($id_user);
            $data_berkas = $this->select_model->getAllBerkasDokter($id_user);
            $data = array(
                'folder' => 'dokumen',
                'halaman' => 'praktek/index',
                // Cek Apakah Pernah Punya SIP
                'cek_sip' => $cek_sip,
                'data_identitas' => $data_identitas,
                'data_rekomendasi' => $data_rekomendasi,
                'data_berkas' => $data_berkas
            );
            $this->load->view('pemohon/include/index', $data);
        else :
            redirect('/');
        endif;
    }
    public function cetak_rekomendasi()
    {

        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'PEMOHON'])->row_array();
        if ($query_login > 0) :
            $id_user = $query_login['id_user'];
            $cek_sip = $this->select_model->cekDataSIP($id_user);
            $data_identitas = $this->select_model->getAllIdentitasDokter($id_user);
            $data_rekomendasi = $this->select_model->getAllRekomendasi($id_user);
            $data = array(
                'cek_sip' => $cek_sip,
                'data_identitas' => $data_identitas,
                'data_rekomendasi' => $data_rekomendasi
            );
            $this->load->view('pemohon/dokumen/rekomendasi/cetak_rekomendasi', $data);
        else :
            redirect('/');
        endif;
    }
    public function cetak_sip()
    {
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'PEMOHON'])->row_array();
        if ($query_login > 0) :
            $id_user = $query_login['id_user'];
            $cek_sip = $this->select_model->cekDataSIP($id_user);
            $data_identitas = $this->select_model->getAllIdentitasDokter($id_user);
            $data_rekomendasi = $this->select_model->getAllRekomendasi($id_user);
            $data_berkas = $this->select_model->getAllBerkasDokter($id_user);
            $data = array(
                'cek_sip' => $cek_sip,
                'data_identitas' => $data_identitas,
                'data_rekomendasi' => $data_rekomendasi,
                'data_berkas' => $data_berkas
            );
            $this->load->view('pemohon/dokumen/praktek/cetak_sip', $data);
        else :
            redirect('/');
        endif;
    }
    public function berkas_permohonan()
    {
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'PEMOHON'])->row_array();
        if ($query_login > 0) :
            $id_user = $query_login['id_user'];
            $cek_sip = $this->select_model->cekDataSIP($id_user);
            $data_identitas = $this->select_model->getAllIdentitasDokter($id_user);
            $data_berkas = $this->select_model->getAllBerkasDokter($id_user);
            $data_rekomendasi = $this->select_model->getAllRekomendasi($id_user);
            $data_kategori = $this->select_model->getAllDokterKategori();
            // var_dump($data_rekomendasi);
            // die;
            $data = array(
                'folder' => 'dokumen',
                'halaman' => 'berkas/index',
                'cek_sip' => $cek_sip,
                'id_user' => $id_user,
                // Data Konten
                'data_identitas' => $data_identitas,
                'data_berkas' => $data_berkas,
                'data_rekomendasi' => $data_rekomendasi,
                'data_kategori' => $data_kategori
            );
            $this->load->view('pemohon/include/index', $data);
        else :
            redirect('/');
        endif;
    }
    public function cruddokumen()
    {
        if (isset($_POST['ubahBerkas'])) :
            $this->update_model->ubahBerkas();
            redirect('pemohon/dokumen/berkas_permohonan');
        endif;
        if (isset($_POST['ubahDataDiri'])) :
            $this->update_model->ubahTblIdentitas();
            $this->update_model->ubahTblKantor();
            $this->session->set_flashdata('berhasil_kirim_berkas', '<div class="berhasil_kirim_berkas"></div>');
            redirect('pemohon/dokumen/berkas_permohonan');
        endif;
        if (isset($_POST['kirim_ulang_admin'])) :
            $this->update_model->ubahTblIdentitas();
            $this->update_model->ubahTblKantor();
            $this->update_model->kirim_ulang_admin();
            $this->session->set_flashdata('berhasil_kirim_berkas', '<div class="berhasil_kirim_berkas"></div>');
            redirect('pemohon/perijinan/baru');
        endif;
        if (isset($_POST['kirim_ulang_kasi'])) :
            $this->update_model->ubahTblIdentitas();
            $this->update_model->ubahTblKantor();
            $this->update_model->kirim_ulang_kasi();
            $this->session->set_flashdata('berhasil_kirim_berkas', '<div class="berhasil_kirim_berkas"></div>');
            redirect('pemohon/perijinan/baru');
        endif;
        if (isset($_POST['kirim_ulang_kabid'])) :
            $this->update_model->ubahTblIdentitas();
            $this->update_model->ubahTblKantor();
            $this->update_model->kirim_ulang_kabid();
            $this->session->set_flashdata('berhasil_kirim_berkas', '<div class="berhasil_kirim_berkas"></div>');
            redirect('pemohon/perijinan/baru');
        endif;
        if (isset($_POST['kirim_ulang_kepala'])) :
            $this->update_model->ubahTblIdentitas();
            $this->update_model->ubahTblKantor();
            $this->update_model->kirim_ulang_kepala();
            $this->session->set_flashdata('berhasil_kirim_berkas', '<div class="berhasil_kirim_berkas"></div>');
            redirect('pemohon/perijinan/baru');
        endif;
    }
}
        
    /* End of file  ControllerPemohonDocument.php */
