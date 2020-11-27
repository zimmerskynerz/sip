<?php defined('BASEPATH') or exit('No direct script access allowed');

class Update_model extends CI_Model
{
    //Ubah Modal Jurusan
    function ubah_jurusan()
    {
        $id_jurusan = htmlspecialchars($this->input->post('id_jurusan'));
        $nm_jurusan = htmlspecialchars($this->input->post('nm_jurusan'));
        $ket_jurusan = htmlspecialchars($this->input->post('ket_jurusan'));
        $data = array(
            'nm_jurusan' => $nm_jurusan,
            'ket_jurusan' => $ket_jurusan,
            'ket_status' => 'ADA'
        );
        $this->db->where('id_jurusan', $id_jurusan);
        $this->db->update('tbl_jurusan', $data);
    }
    function hapusJurusan()
    {
        $id_jurusan = htmlspecialchars($this->input->post('id_jurusan'));
        $data = array(
            'ket_status' => 'HAPUS'
        );
        $this->db->where('id_jurusan', $id_jurusan);
        $this->db->update('tbl_jurusan', $data);
    }
    // Ubah Modal Guru
    function ubah_guru()
    {
        $id_guru = htmlspecialchars($this->input->post('id_guru'));
        $id_login = htmlspecialchars($this->input->post('id_login'));
        $nm_guru = htmlspecialchars($this->input->post('nm_guru'));
        $nip = htmlspecialchars($this->input->post('nip'));
        $no_hp = htmlspecialchars($this->input->post('no_hp'));
        $email = htmlspecialchars($this->input->post('email'));
        $alamat = htmlspecialchars($this->input->post('alamat'));
        $data_login = array(
            'nis_nip' => $nip
        );
        $this->db->where('id_login', $id_login);
        $this->db->update('tbl_login', $data_login);
        $data_guru = array(
            'nm_guru' => $nm_guru,
            'no_hp' => $no_hp,
            'email' => $email,
            'alamat' => $alamat
        );
        $this->db->where('id_guru', $id_guru);
        $this->db->update('tbl_guru', $data_guru);
    }
    function reset_guru()
    {
        $id_login = htmlspecialchars($this->input->post('id_login'));
        $pass = 'GURU123abc';
        $password = password_hash($pass, PASSWORD_DEFAULT);
        $data = array(
            'pass' => $password
        );
        $this->db->where('id_login', $id_login);
        $this->db->update('tbl_login', $data);
    }
    function hapus_guru()
    {
        $id_login = htmlspecialchars($this->input->post('id_login'));
        $data = array(
            'status' => 'BLOKIR'
        );
        $this->db->where('id_login', $id_login);
        $this->db->update('tbl_login', $data);
    }

    //CRUD Siswa
    function reset_siswa()
    {
        $id_login = htmlspecialchars($this->input->post('id_login'));
        $data = array(
            'pass' => password_hash('SISWA123abc', PASSWORD_DEFAULT)
        );
        $this->db->where('id_login', $id_login);
        $this->db->update('tbl_login', $data);
    }
    // CRUD Kelas
    function ubahKelasGuru()
    {
        $nm_kelas = htmlspecialchars($this->input->post('nm_kelas'));
        $jml_siswa = htmlspecialchars($this->input->post('jml_siswa'));
        $tingkat_kelas = htmlspecialchars($this->input->post('tingkat_kelas'));
        $id_jurusan = htmlspecialchars($this->input->post('id_jurusan'));
        $id_kelas = htmlspecialchars($this->input->post('id_kelas'));
        $data = array(
            'nm_kelas' => $nm_kelas,
            'jml_siswa' => $jml_siswa,
            'tingkat_kelas' => $tingkat_kelas,
            'id_jurusan' => $id_jurusan
        );
        $this->db->where('id_kelas', $id_kelas);
        $this->db->update('tbl_kelas', $data);
    }
    function ubahKelas()
    {
        $nm_kelas = htmlspecialchars($this->input->post('nm_kelas'));
        $jml_siswa = htmlspecialchars($this->input->post('jml_siswa'));
        $tingkat_kelas = htmlspecialchars($this->input->post('tingkat_kelas'));
        $id_jurusan = htmlspecialchars($this->input->post('id_jurusan'));
        $id_kelas = htmlspecialchars($this->input->post('id_kelas'));
        $id_guru = htmlspecialchars($this->input->post('id_guru'));
        $data = array(
            'nm_kelas' => $nm_kelas,
            'jml_siswa' => $jml_siswa,
            'tingkat_kelas' => $tingkat_kelas,
            'id_guru' => $id_guru,
            'id_jurusan' => $id_jurusan
        );
        $this->db->where('id_kelas', $id_kelas);
        $this->db->update('tbl_kelas', $data);
    }
    function hapuskelas()
    {
        $id_kelas = htmlspecialchars($this->input->post('id_kelas'));
        $data = array(
            'status_kelas' => 'HAPUS'
        );
        $this->db->where('id_kelas', $id_kelas);
        $this->db->update('tbl_kelas', $data);
    }
    // CRUD Mata Pelajaran
    function hapus_mapel()
    {
        $id_mapel = htmlspecialchars($this->input->post('id_mapel'));
        $data = array(
            'status_mapel' => 'HAPUS'
        );
        $this->db->where('id_mapel', $id_mapel);
        $this->db->update('tbl_mapel', $data);
    }
    function ubahBerkas()
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
            'foto' => $foto,
            'ijazah' => $ijazah,
            'ktp' => $ktp,
            'str_legalisir' => $str_legalisir,
            's_pernyataan' => $s_pernyataan,
            's_persetujuan' => $s_persetujuan,
            'bpjs' => $bpjs
        );
        $this->db->where('id_user', htmlentities($this->input->post('id_user')));
        $this->db->update('tbl_berkas', $data);
    }
    function ubahTblIdentitas()
    {
        $data = array(
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
        $this->db->where('id_user', htmlentities($this->input->post('id_user')));
        $this->db->update('tbl_identitas', $data);
    }
    function ubahTblKantor()
    {
        $data = array(
            'nm_kantor' => htmlentities($this->input->post('nm_kantor')),
            'alamat_praktik' => htmlentities($this->input->post('alamat_praktik')),
            'no_kantor' => htmlentities($this->input->post('no_kantor'))
        );
        $this->db->where('id_user', htmlentities($this->input->post('id_user')));
        $this->db->update('tbl_kantor', $data);
    }
    function ubahTblRekomendasi()
    {
        $data = array(
            'id_kategori' => htmlentities($this->input->post('id_kategori')),
            'no_str' => htmlentities($this->input->post('no_str')),
            'tgl_berakhir_str' => htmlentities($this->input->post('tgl_berakhir_str')),
            'tgl_mulai' => null,
            'tgl_berakhir' => null,
            'tgl_daftar' => date('Y-m-d'),
            'status_rekomendasi' => 'P_PROSES'
        );
        $this->db->where('id_user', htmlentities($this->input->post('id_user')));
        $this->db->update('tbl_rekomendasi', $data);
    }
}
