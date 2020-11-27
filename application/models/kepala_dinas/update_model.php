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
            'id_sip' => '',
            'id_rekomendasi' => $id_rekomendasi,
            'tgl_mulai' => null,
            'tgl_akhir' => null,
            'status_sip' => 'PROSES'
        );
        $this->db->insert('tbl_sip', $data_sip);
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
}
