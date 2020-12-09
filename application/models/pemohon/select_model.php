<?php defined('BASEPATH') or exit('No direct script access allowed');

class Select_model extends CI_Model
{
    // Cek Data SIP
    // SELECT * FROM `tbl_sip` as `A` JOIN `tbl_rekomendasi` as `B` ON `A`.`id_rekomendasi`=`B`.`id_rekomendasi` WHERE `B`.`id_user` = '4' AND `B`.`status_rekomendasi` != 'PROSES' AND `B`.`status_rekomendasi` != 'KASI' AND `B`.status_rekomendasi != 'KABID'
    function cekDataSIP($id_user)
    {
        $query  = $this->db->select('*');
        $query  = $this->db->from('tbl_sip as A');
        $query  = $this->db->join('tbl_rekomendasi as B', 'A.id_rekomendasi=B.id_rekomendasi');
        $query  = $this->db->where('B.id_user', $id_user);
        $query  = $this->db->where('B.status_rekomendasi', 'AKTIF');
        $query  = $this->db->or_where('B.status_rekomendasi', 'BLOKIR');
        $query  = $this->db->get();
        return  $query->row_array();
    }
    // Get Data Kategori Dokter
    // Select * from tbl_kategori where status_kategori='ADA'
    function getAllDokterKategori()
    {
        $query  = $this->db->select('*');
        $query  = $this->db->from('tbl_kategori');
        $query  = $this->db->where('status_kategori', 'ADA');
        $query  = $this->db->get();
        return  $query->result();
    }
    // Get Data Kategori Dokter
    // Select * from tbl_kategori where status_kategori='ADA'
    function cekRekomendasi($id_user)
    {
        $query  = $this->db->select('*');
        $query  = $this->db->from('tbl_rekomendasi');
        $query  = $this->db->where('id_user', $id_user);
        $query  = $this->db->get();
        return  $query->result();
    }
    // Get Semua Data Pengajuan Rekomendasi Dokter
    // 
    function getDataAllBaru($id_user)
    {
        $query  = $this->db->select('*');
        $query  = $this->db->from('tbl_user as A');
        $query  = $this->db->join('tbl_identitas as B', 'A.id_user=B.id_user');
        $query  = $this->db->join('tbl_kantor as C', 'A.id_user=C.id_user');
        $query  = $this->db->join('tbl_rekomendasi as D', 'A.id_user=D.id_user');
        $query  = $this->db->join('tbl_kategori as E', 'E.id_kategori=D.id_kategori');
        $query  = $this->db->group_by('D.id_rekomendasi');
        $query  = $this->db->where('A.id_user', $id_user);
        $query  = $this->db->get();
        return $query->result();
    }
    function getDataAllPerpanjang($id_user)
    {
        $query  = $this->db->select('*');
        $query  = $this->db->from('tbl_user as A');
        $query  = $this->db->join('tbl_identitas as B', 'A.id_user=B.id_user');
        $query  = $this->db->join('tbl_kantor as C', 'A.id_user=C.id_user');
        $query  = $this->db->join('tbl_rekomendasi as D', 'A.id_user=D.id_user');
        $query  = $this->db->join('tbl_kategori as E', 'E.id_kategori=D.id_kategori');
        $query  = $this->db->join('tbl_sip as F', 'F.id_rekomendasi=D.id_rekomendasi');
        $query  = $this->db->where('A.id_user', $id_user);
        $query  = $this->db->get();
        return $query->result();
    }
    function getAllIdentitasDokter($id_user)
    {
        $query  = $this->db->select('*');
        $query  = $this->db->from('tbl_user as A');
        $query  = $this->db->join('tbl_identitas as B', 'A.id_user=B.id_user');
        $query  = $this->db->join('tbl_kantor as C', 'A.id_user=C.id_user');
        $query  = $this->db->where('A.id_user', $id_user);
        $query  = $this->db->get();
        return $query->row_array();
    }
    function getAllBerkasDokter($id_user)
    {
        return $query = $this->db->get_where('tbl_berkas', ['id_user' => $id_user])->row_array();
    }
    function getAllRekomendasi($id_user)
    {
        $query  = $this->db->select('*');
        $query  = $this->db->from('tbl_rekomendasi as A');
        $query  = $this->db->join('tbl_kategori as B', 'A.id_kategori=B.id_kategori');
        $query  = $this->db->join('tbl_sip as C', 'A.id_rekomendasi=C.id_rekomendasi');
        $query  = $this->db->where('A.id_user', $id_user);
        $query  = $this->db->get();
        return $query->row_array();
    }
    function getDataKomentar($id_user)
    {
        $query  = $this->db->select('*');
        $query  = $this->db->from('tbl_history');
        $query  = $this->db->where('id_user', $id_user);
        $query  = $this->db->order_by('id_history', 'DESC');
        $query  = $this->db->limit(1);
        $query  = $this->db->get();
        return $query->row_array();
    }
}
