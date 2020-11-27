<?php defined('BASEPATH') or exit('No direct script access allowed');

class Insert_model extends CI_Model
{
    // Tambah Data Guru
    function tambahKategori()
    {
        $nm_kategori = htmlentities($this->input->post('nm_kategori'));
        $singkatan = htmlentities($this->input->post('singkatan_kategori'));
        $data = array(
            'id_kategori' => '',
            'nm_kategori' => $nm_kategori,
            'singkatan' => $singkatan,
            'status_kategori' => 'ADA'
        );
        $this->db->insert('tbl_kategori', $data);
    }
}
