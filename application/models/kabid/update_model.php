<?php defined('BASEPATH') or exit('No direct script access allowed');

class Update_model extends CI_Model
{
    function terima_rekomendasi()
    {
        $id_rekomendasi = htmlentities($this->input->post('id_rekomendasi'));
        $data = array(
            'status_rekomendasi' => 'KABID'
        );
        $this->db->where('id_rekomendasi', $id_rekomendasi);
        $this->db->update('tbl_rekomendasi', $data);
    }
    function validasiSip()
    {
        $id_sip = htmlentities($this->input->post('id_sip'));
        $data = array(
            'status_sip' => 'KABID'
        );
        $this->db->where('id_sip', $id_sip);
        $this->db->update('tbl_sip', $data);
    }
}
