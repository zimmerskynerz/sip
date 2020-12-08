<?php defined('BASEPATH') or exit('No direct script access allowed');

class Insert_model extends CI_Model
{
    // Kirim Permohonan Rekomendasi
    function insertTblIdentitas()
    {
        $data = array(
            'id_user' => htmlentities($this->input->post('id_user')),
            'nm_lengkap' => htmlentities($this->input->post('nm_lengkap')),
            'jekel' => htmlentities($this->input->post('jekel')),
            'tmp_lahir' => htmlentities($this->input->post('tmp_lahir')),
            'tgl_lahir' => htmlentities($this->input->post('tgl_lahir')),
            'agama' => htmlentities($this->input->post('agama')),
            'alamat' => htmlentities($this->input->post('alamat')),
            'no_hp' => htmlentities($this->input->post('no_hp')),
            'pendidikan_terakhir' => htmlentities($this->input->post('pendidikan_terakhir')),
            'universitas' => htmlentities($this->input->post('universitas')),
            'tahun' => htmlentities($this->input->post('tahun'))
        );
        $this->db->insert('tbl_identitas', $data);
    }
    function insertTblBerkas()
    {
        $config['upload_path']   = './assets/berkas';
        $config['allowed_types'] = 'jpeg|jpg|png|pdf|doc|docx|ppt|pptx|zip|rar';
        $config['encrypt_name']  = true;
        $config['overwrite']     = true;
        $config['max_size']      = 10024; // 10MB
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
            $_FILES['file']['name'] = $_FILES['foto']['name'];
            $_FILES['file']['type'] = $_FILES['foto']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['foto']['tmp_name'];
            $_FILES['file']['size'] = $_FILES['foto']['size'];
            $uploadData = $this->upload->data();
            $foto = $uploadData['file_name'];
        }
        if ($this->upload->do_upload('ijazah')) {
            $_FILES['file']['name'] = $_FILES['ijazah']['name'];
            $_FILES['file']['type'] = $_FILES['ijazah']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['ijazah']['tmp_name'];
            $_FILES['file']['size'] = $_FILES['ijazah']['size'];
            $uploadData = $this->upload->data();
            $ijazah = $uploadData['file_name'];
        }
        if ($this->upload->do_upload('ktp')) {
            $_FILES['file']['name'] = $_FILES['ktp']['name'];
            $_FILES['file']['type'] = $_FILES['ktp']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['ktp']['tmp_name'];
            $_FILES['file']['size'] = $_FILES['ktp']['size'];
            $uploadData = $this->upload->data();
            $ktp = $uploadData['file_name'];
        }
        if ($this->upload->do_upload('str_legalisir')) {
            $_FILES['file']['name'] = $_FILES['str_legalisir']['name'];
            $_FILES['file']['type'] = $_FILES['str_legalisir']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['str_legalisir']['tmp_name'];
            $_FILES['file']['size'] = $_FILES['str_legalisir']['size'];
            $uploadData = $this->upload->data();
            $str_legalisir = $uploadData['file_name'];
        }
        if ($this->upload->do_upload('s_pernyataan')) {
            $_FILES['file']['name'] = $_FILES['s_pernyataan']['name'];
            $_FILES['file']['type'] = $_FILES['s_pernyataan']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['s_pernyataan']['tmp_name'];
            $_FILES['file']['size'] = $_FILES['s_pernyataan']['size'];
            $uploadData = $this->upload->data();
            $s_pernyataan = $uploadData['file_name'];
        }
        if ($this->upload->do_upload('s_persetujuan')) {
            $_FILES['file']['name'] = $_FILES['s_persetujuan']['name'];
            $_FILES['file']['type'] = $_FILES['s_persetujuan']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['s_persetujuan']['tmp_name'];
            $_FILES['file']['size'] = $_FILES['s_persetujuan']['size'];
            $uploadData = $this->upload->data();
            $s_persetujuan = $uploadData['file_name'];
        }
        if ($this->upload->do_upload('bpjs')) {
            $_FILES['file']['name'] = $_FILES['bpjs']['name'];
            $_FILES['file']['type'] = $_FILES['bpjs']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['bpjs']['tmp_name'];
            $_FILES['file']['size'] = $_FILES['bpjs']['size'];
            $uploadData = $this->upload->data();
            $bpjs = $uploadData['file_name'];
        }
        $data = array(
            'id_berkas' => '',
            'id_user' => htmlentities($this->input->post('id_user')),
            'foto' => $foto,
            'ijazah' => $ijazah,
            'ktp' => $ktp,
            'str_legalisir' => $str_legalisir,
            's_pernyataan' => $s_pernyataan,
            's_persetujuan' => $s_persetujuan,
            'bpjs' => $bpjs
        );
        $this->db->insert('tbl_berkas', $data);
    }
    function insertTblKantor()
    {
        $data = array(
            'id_user' => htmlentities($this->input->post('id_user')),
            'nm_kantor' => htmlentities($this->input->post('nm_kantor')),
            'alamat_praktik' => htmlentities($this->input->post('alamat_praktik')),
            'no_kantor' => htmlentities($this->input->post('no_kantor'))
        );
        $this->db->insert('tbl_kantor', $data);
    }
    function insertTblRekomendasi()
    {
        $data = array(
            'id_rekomendasi' => '',
            'id_user' => htmlentities($this->input->post('id_user')),
            'id_kategori' => htmlentities($this->input->post('id_kategori')),
            'no_str' => htmlentities($this->input->post('no_str')),
            'tgl_berakhir_str' => htmlentities($this->input->post('tgl_berakhir_str')),
            'tgl_mulai' => null,
            'tgl_berakhir' => null,
            'tgl_daftar' => date('Y-m-d'),
            'status_rekomendasi' => 'KONFIRMASI'
        );
        $this->db->insert('tbl_rekomendasi', $data);
    }
}
