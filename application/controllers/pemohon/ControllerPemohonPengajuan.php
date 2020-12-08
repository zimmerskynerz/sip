<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerPemohonPengajuan extends CI_Controller
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
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'PEMOHON'])->row_array();
        if ($query_login > 0) :
            redirect('pemohon');
        else :
            redirect('/');
        endif;
    }
    public function baru()
    {
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'PEMOHON'])->row_array();
        if ($query_login > 0) :
            $id_user = $query_login['id_user'];
            $cek_sip = $this->select_model->cekDataSIP($id_user);
            $data_baru = $this->select_model->getDataAllBaru($id_user);
            $cek_komentar = $this->select_model->getDataKomentar($id_user);
            // echo "<pre>";
            // var_dump($data_baru);
            // die;
            $data = array(
                'folder' => 'perijinan',
                'halaman' => 'baru',
                // Cek Apakah Pernah Punya SIP
                'cek_sip' => $cek_sip,
                'data_baru' => $data_baru,
                'cek_komentar' => $cek_komentar
            );
            $this->load->view('pemohon/include/index', $data);
        else :
            redirect('/');
        endif;
    }
    public function ajukan_baru()
    {
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'PEMOHON'])->row_array();
        if ($query_login > 0) :
            $id_user = $query_login['id_user'];
            $cek_pengajuan = $this->db->get_where('tbl_rekomendasi', ['id_user' => $id_user, 'status_rekomendasi' => 'KONFIRMASI'])->row_array();
            if ($cek_pengajuan > 0) :
                redirect('pemohon/perijinan/baru');
            else :
                $cek_sip = $this->select_model->cekDataSIP($id_user);
                $data_kategori = $this->select_model->getAllDokterKategori();
                $data = array(
                    'folder' => 'perijinan',
                    'halaman' => 'ajukan_baru',
                    'id_user' => $id_user,
                    // Cek Apakah Pernah Punya SIP
                    'cek_sip' => $cek_sip,
                    'data_kategori' => $data_kategori
                );
                $this->load->view('pemohon/include/index', $data);
            endif;
        else :
            redirect('/');
        endif;
    }
    public function perpanjang()
    {
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'PEMOHON'])->row_array();
        if ($query_login > 0) :
            $id_user = $query_login['id_user'];
            $cek_sip = $this->select_model->cekDataSIP($id_user);
            $cek_rekomendasi = $this->select_model->cekRekomendasi($id_user);
            $data_baru = $this->select_model->getDataAllPerpanjang($id_user);
            // var_dump($data_baru);
            // die;
            $data = array(
                'folder' => 'perijinan',
                'halaman' => 'perpanjang',
                // Cek Apakah Pernah Punya SIP
                'cek_sip' => $cek_sip,
                'cek_rekomendasi' => $cek_rekomendasi,
                'data_baru' => $data_baru
            );
            $this->load->view('pemohon/include/index', $data);
        else :
            redirect('/');
        endif;
    }
    public function crudpengajuan()
    {
        $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'PEMOHON'])->row_array();
        if ($query_login > 0) :
            if (isset($_POST['kirimBaru'])) :
                $this->insert_model->insertTblIdentitas();
                $this->insert_model->insertTblBerkas();
                $this->insert_model->insertTblKantor();
                $this->insert_model->insertTblRekomendasi();
                $this->session->set_flashdata('berhasil_kirim_berkas', '<div class="berhasil_kirim_berkas"></div>');
                redirect('pemohon/perijinan/baru');
            endif;
        else :
            redirect('/');
        endif;
    }

    public function perbarui_data()
    {
        if (isset($_POST['perbaruiData'])) :
            $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'PEMOHON'])->row_array();
            if ($query_login > 0) :
                $id_user = $query_login['id_user'];
                $cek_sip = $this->select_model->cekDataSIP($id_user);
                $data_identitas = $this->select_model->getAllIdentitasDokter($id_user);
                $data_berkas = $this->select_model->getAllBerkasDokter($id_user);
                $data_rekomendasi = $this->select_model->getAllRekomendasi($id_user);
                $data_kategori = $this->select_model->getAllDokterKategori();
                // var_dump($data_baru);
                // die;
                $data = array(
                    'folder' => 'perijinan',
                    'halaman' => 'detail_permohonan',
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
        else :
            $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'PEMOHON'])->row_array();
            if ($query_login > 0) :
                $id_user = $query_login['id_user'];
                $cek_sip = $this->select_model->cekDataSIP($id_user);
                $data_identitas = $this->select_model->getAllIdentitasDokter($id_user);
                $data_berkas = $this->select_model->getAllBerkasDokter($id_user);
                $data_rekomendasi = $this->select_model->getAllRekomendasi($id_user);
                $data_kategori = $this->select_model->getAllDokterKategori();
                // var_dump($data_baru);
                // die;
                $data = array(
                    'folder' => 'perijinan',
                    'halaman' => 'detail_permohonan',
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
        endif;
        if (isset($_POST['ubahBerkas'])) :
            $this->update_model->ubahBerkas();
            redirect('pemohon/perijinan/perbarui_data');
        endif;
        if (isset($_POST['kirimBerkasKembali'])) :
            $this->update_model->ubahTblIdentitas();
            $this->update_model->ubahTblKantor();
            $this->update_model->ubahTblRekomendasi();
            $this->session->set_flashdata('berhasil_kirim_berkas', '<div class="berhasil_kirim_berkas"></div>');
            redirect('pemohon');
        endif;
    }
}
        
    /* End of file  ControllerPemohonPengajuan.php */
