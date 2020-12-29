<?php defined('BASEPATH') or exit('No direct script access allowed');

class Update_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kepala_dinas/select_model');
    }
    function terima_rekomendasi()
    {
        // tANGGAL
        $tgl_ini   = date('Y-m-d');
        $cek_tgl = $this->select_model->cekTanggal();
        $tgl_akhir = $cek_tgl['max_tanggal'];
        // ISI 
        $status_pengjauan = $this->input->post('status_pengjauan');
        if ($status_pengjauan == 1) :
            $alasan = 'Berkas Diterima Kepala';
            $status = 'TERIMA';
            $status_rekomendasi = 'AKTIF';
            $id_rekomendasi = htmlentities($this->input->post('id_rekomendasi'));
            $data = array(
                'tgl_mulai' => $tgl_ini,
                'tgl_berakhir' => $tgl_akhir,
                'status_rekomendasi' => $status_rekomendasi
            );
            $this->db->where('id_rekomendasi', $id_rekomendasi);
            $this->db->update('tbl_rekomendasi', $data);
            $data_sip = array(
                'id_sip' => '',
                'id_rekomendasi' => $id_rekomendasi,
                'tgl_mulai' => $tgl_ini,
                'tgl_akhir' => $tgl_akhir,
                'status_sip' => 'AKTIF'
            );
            $this->db->insert('tbl_sip', $data_sip);
        else :
            $status_rekomendasi = $this->input->post('status_rekomendasi');

            $alasan = $this->input->post('alasan');
            $status = 'TOLAK';
            if ($status_rekomendasi == 'P_KEPALA') :
                $status_rekomendasi = 'TP_KEPALA';
            else :
                $status_rekomendasi = 'T_KEPALA';
            endif;
            $id_rekomendasi = htmlentities($this->input->post('id_rekomendasi'));
            $data = array(
                'status_rekomendasi' => $status_rekomendasi
            );
            $this->db->where('id_rekomendasi', $id_rekomendasi);
            $this->db->update('tbl_rekomendasi', $data);
        endif;
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
        $tgl_ini   = date('Y-m-d');
        $cek_tgl = $this->select_model->cekTanggal();
        $tgl_akhir = $cek_tgl['max_tanggal'];
        $id_sip = htmlentities($this->input->post('id_sip'));
        $data = array(
            'tgl_mulai' => $tgl_ini,
            'tgl_akhir' => $tgl_akhir,
            'status_sip' => 'AKTIF'
        );
        $this->db->where('id_sip', $id_sip);
        $this->db->update('tbl_sip', $data);
    }
    function terima_rekomendasi_perpanjang()
    {
        $tgl_ini   = date('Y-m-d');
        $cek_tgl = $this->select_model->cekTanggal();
        $tgl_akhir = $cek_tgl['max_tanggal'];
        $id_rekomendasi = htmlentities($this->input->post('id_rekomendasi'));
        $data = array(
            'tgl_mulai' => $tgl_ini,
            'tgl_berakhir' => $tgl_akhir,
            'status_rekomendasi' => 'AKTIF'
        );
        $this->db->where('id_rekomendasi', $id_rekomendasi);
        $this->db->update('tbl_rekomendasi', $data);
        $data_sip = array(
            'id_rekomendasi' => $id_rekomendasi,
            'tgl_mulai' => $tgl_ini,
            'tgl_akhir' => $tgl_akhir,
            'status_sip' => 'AKTIF'
        );
        $this->db->where('id_rekomendasi', $id_rekomendasi);
        $this->db->update('tbl_sip', $data_sip);
    }
}
