<?php defined('BASEPATH') or exit('No direct script access allowed');

class Update_model extends CI_Model
{
    function terima_rekomendasi()
    {
        $status_pengjauan = $this->input->post('status_pengjauan');
        if ($status_pengjauan == 1) :
            $alasan = 'Berkas Diterima';
            $status = 'TERIMA';
            $status_rekomendasi = 'KABID';
        else :
            $alasan = $this->input->post('alasan');
            $status = 'TOLAK';
            $status_rekomendasi = 'TOLAK';
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
        $status_pengjauan = $this->input->post('status_pengjauan');
        if ($status_pengjauan == 1) :
            $alasan = 'Berkas Diterima';
            $status = 'TERIMA';
            $status_rekomendasi = 'P_KABID';
        else :
            $alasan = $this->input->post('alasan');
            $status = 'TOLAK';
            $status_rekomendasi = 'AKTIF';
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
    function validasiSip()
    {
        $status_validasi = htmlentities($this->input->post('status_validasi'));
        if ($status_validasi == 'P_KASI') :
            // echo 'P_KASI';
            $id_sip = htmlentities($this->input->post('id_sip'));
            $data = array(
                'status_sip' => 'P_KABID'
            );
            $this->db->where('id_sip', $id_sip);
            $this->db->update('tbl_sip', $data);
        else :
            // echo 'KASI';
            $id_sip = htmlentities($this->input->post('id_sip'));
            $data = array(
                'status_sip' => 'KABID'
            );
            $this->db->where('id_sip', $id_sip);
            $this->db->update('tbl_sip', $data);
        endif;
    }
}
