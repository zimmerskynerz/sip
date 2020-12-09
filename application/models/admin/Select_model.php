<?php defined('BASEPATH') or exit('No direct script access allowed');

class Select_model extends CI_Model
{
    function getDataAllBaruAdmin()
    {
        $query  = $this->db->select('*');
        $query  = $this->db->from('tbl_user as A');
        $query  = $this->db->join('tbl_identitas as B', 'A.id_user=B.id_user');
        $query  = $this->db->join('tbl_kantor as C', 'A.id_user=C.id_user');
        $query  = $this->db->join('tbl_rekomendasi as D', 'A.id_user=D.id_user');
        $query  = $this->db->join('tbl_kategori as E', 'E.id_kategori=D.id_kategori');
        $query  = $this->db->where('D.status_rekomendasi', 'KONFIRMASI');
        $query  = $this->db->or_where('D.status_rekomendasi', 'P_KONFIRMASI');
        $query  = $this->db->group_by('D.id_rekomendasi');
        $query  = $this->db->get();
        return $query->result();
    }
    function getDataAllBaruTerima()
    {
        $query  = $this->db->select('*');
        $query  = $this->db->from('tbl_user as A');
        $query  = $this->db->join('tbl_identitas as B', 'A.id_user=B.id_user');
        $query  = $this->db->join('tbl_kantor as C', 'A.id_user=C.id_user');
        $query  = $this->db->join('tbl_rekomendasi as D', 'A.id_user=D.id_user');
        $query  = $this->db->join('tbl_kategori as E', 'E.id_kategori=D.id_kategori');
        $query  = $this->db->where('D.status_rekomendasi', 'AKTIF');
        $query  = $this->db->group_by('D.id_rekomendasi');
        $query  = $this->db->get();
        return $query->result();
    }
    function getDataAllBaruTolak()
    {
        $query  = $this->db->select('*');
        $query  = $this->db->from('tbl_user as A');
        $query  = $this->db->join('tbl_identitas as B', 'A.id_user=B.id_user');
        $query  = $this->db->join('tbl_kantor as C', 'A.id_user=C.id_user');
        $query  = $this->db->join('tbl_rekomendasi as D', 'A.id_user=D.id_user');
        $query  = $this->db->join('tbl_kategori as E', 'E.id_kategori=D.id_kategori');
        $query  = $this->db->join('tbl_history as F', 'F.id_rekomendasi=D.id_rekomendasi');
        $query  = $this->db->where('D.status_rekomendasi', 'TOLAK');
        $query  = $this->db->group_by('D.id_rekomendasi');
        $query  = $this->db->get();
        return $query->result();
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
    function getDataAllBaru()
    {
        $query  = $this->db->select('*');
        $query  = $this->db->from('tbl_user as A');
        $query  = $this->db->join('tbl_identitas as B', 'A.id_user=B.id_user');
        $query  = $this->db->join('tbl_kantor as C', 'A.id_user=C.id_user');
        $query  = $this->db->join('tbl_rekomendasi as D', 'A.id_user=D.id_user');
        $query  = $this->db->join('tbl_kategori as E', 'E.id_kategori=D.id_kategori');
        $query  = $this->db->where('D.status_rekomendasi', 'KASI');
        $query  = $this->db->get();
        return $query->result();
    }
    function getDataAllPerpanjang()
    {
        $query  = $this->db->select('*');
        $query  = $this->db->from('tbl_user as A');
        $query  = $this->db->join('tbl_identitas as B', 'A.id_user=B.id_user');
        $query  = $this->db->join('tbl_kantor as C', 'A.id_user=C.id_user');
        $query  = $this->db->join('tbl_rekomendasi as D', 'A.id_user=D.id_user');
        $query  = $this->db->join('tbl_kategori as E', 'E.id_kategori=D.id_kategori');
        $query  = $this->db->where('D.status_rekomendasi', 'P_KASI');
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
        $query  = $this->db->where('A.id_user', $id_user);
        $query  = $this->db->get();
        return $query->row_array();
    }
    function getDataValidasi()
    {
        $query  = $this->db->select('*');
        $query  = $this->db->from('tbl_sip as A');
        $query  = $this->db->join('tbl_rekomendasi as B', 'A.id_rekomendasi=B.id_rekomendasi');
        $query  = $this->db->join('tbl_kategori as C', 'B.id_kategori=C.id_kategori');
        $query  = $this->db->join('tbl_identitas as D', 'B.id_user=D.id_user');
        $query  = $this->db->join('tbl_kantor as E', 'B.id_user=E.id_user');
        $query  = $this->db->where('A.status_sip', 'KASI');
        $query  = $this->db->or_where('A.status_sip', 'P_KASI');
        $query  = $this->db->get();
        return $query->result();
    }
}
