<?php defined('BASEPATH') or exit('No direct script access allowed');

class Update_model extends CI_Model
{
    //CRUD Kategori
    function hapusKategori()
    {
        $id_kategori = htmlentities($this->input->post('id_kategori'));
        $data = array(
            'status_kategori' => 'HAPUS'
        );
        $this->db->where('id_kategori', $id_kategori);
        $this->db->update('tbl_kategori', $data);
    }
    function ubahKategori()
    {
        $id_kategori = htmlentities($this->input->post('id_kategori'));
        $nm_kategori = htmlentities($this->input->post('nm_kategori'));
        $singkatan   = htmlentities($this->input->post('singkatan'));
        $data = array(
            'nm_kategori' => $nm_kategori,
            'singkatan' => $singkatan
        );
        $this->db->where('id_kategori', $id_kategori);
        $this->db->update('tbl_kategori', $data);
    }
    function terima_rekomendasi()
    {
        $status_pengjauan = $this->input->post('status_pengjauan');
        if ($status_pengjauan == 1) :
            $alasan = 'Berkas Diterima Kasi';
            $status = 'TERIMA KASI';
            $status_rekomendasi = 'KABID';
        else :
            $alasan = $this->input->post('alasan');
            $status = 'TOLAK';
            $status_rekomendasi = 'T_KASI';
        endif;
        $id_rekomendasi = htmlentities($this->input->post('id_rekomendasi'));
        $data = array(
            'status_rekomendasi' => $status_rekomendasi
        );
        $this->db->where('id_rekomendasi', $id_rekomendasi);
        $this->db->update('tbl_rekomendasi', $data);
        $data_hsitory = array(
            'id_history' => '',
            'id_user' => $this->input->post('id_user'),
            'id_rekomendasi' => $id_rekomendasi,
            'tgl_validasi' => date('Y-m-d'),
            'status_pengajuan' => $status,
            'ket_lain' => $alasan
        );
        $this->db->insert('tbl_history', $data_hsitory);
    }
    function terima_rekomendasi_perpanjang()
    {
        $id_rekomendasi = htmlentities($this->input->post('id_rekomendasi'));
        $status_pengjauan = $this->input->post('status_pengjauan');
        if ($status_pengjauan == 1) :
            $alasan = 'Berkas Diterima Kasi';
            $status = 'TERIMA KASI';
            $data = array(
                'status_rekomendasi' => 'P_KABID'
            );
        else :
            $alasan = $this->input->post('alasan');
            $status = 'TOLAK';
            $data = array(
                'status_rekomendasi' => 'TP_KASI'
            );
        endif;
        $this->db->where('id_rekomendasi', $id_rekomendasi);
        $this->db->update('tbl_rekomendasi', $data);
        $data_hsitory = array(
            'id_history' => '',
            'id_user' => $this->input->post('id_user'),
            'id_rekomendasi' => $id_rekomendasi,
            'tgl_validasi' => date('Y-m-d'),
            'status_pengajuan' => $status,
            'ket_lain' => $alasan
        );
        $this->db->insert('tbl_history', $data_hsitory);
    }
    function validasiSip()
    {
        $status_validasi = htmlentities($this->input->post('status_validasi'));
        if ($status_validasi == 'P_PROSES') :
            $id_sip = htmlentities($this->input->post('id_sip'));
            $data = array(
                'status_sip' => 'P_KASI'
            );
            $this->db->where('id_sip', $id_sip);
            $this->db->update('tbl_sip', $data);
        else :
            $id_sip = htmlentities($this->input->post('id_sip'));
            $data = array(
                'status_sip' => 'KASI'
            );
            $this->db->where('id_sip', $id_sip);
            $this->db->update('tbl_sip', $data);
        endif;
    }
}
