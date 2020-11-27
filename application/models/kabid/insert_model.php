<?php defined('BASEPATH') or exit('No direct script access allowed');

class Insert_model extends CI_Model
{
    // Tambah Data Guru
    function tambah_guru()
    {
        $nip = htmlspecialchars($this->input->post('nip'));
        $password = 'GURU123abc';
        $pass = password_hash($password, PASSWORD_DEFAULT);
        $tgl_ini = date('Y-m-d');
        $data = array(
            'id_login' => '',
            'nis_nip' => $nip,
            'pass' => $pass,
            'level' => 'guru',
            'status' => 'AKTIF',
            'tgl_daftar' => $tgl_ini
        );
        $this->db->insert('tbl_login', $data);
        $data['login'] = $this->db->get_where('tbl_login', ['nis_nip' => $nip])->row_array();
        $id_login = $data['login']['id_login'];
        $nm_guru = htmlspecialchars($this->input->post('nm_guru'));
        $no_hp = htmlspecialchars($this->input->post('no_hp'));
        $email = htmlspecialchars($this->input->post('email'));
        $alamat = htmlspecialchars($this->input->post('alamat'));
        $data_guru = array(
            'id_guru' => '',
            'id_login' => $id_login,
            'nm_guru' => $nm_guru,
            'no_hp' => $no_hp,
            'email' => $email,
            'alamat' => $alamat,
            'foto_profile' => 'default.png'
        );
        $this->db->insert('tbl_guru', $data_guru);
    }
    // Tambah Siswa
    function siswa_tambah()
    {
        $data_login = array(
            'id_login' => '',
            'nis_nip' => htmlspecialchars($this->input->post('nis')),
            'pass' => password_hash('SISWA123abc', PASSWORD_DEFAULT),
            'level' => 'siswa',
            'status' => 'AKTIF',
            'tgl_daftar' => date('Y-m-d')
        );
        $this->db->insert('tbl_login', $data_login);
        $data['login'] = $this->db->get_where('tbl_login', ['nis_nip' => $this->input->post('nis')])->row_array();
        $data_siswa = array(
            'id_login' => $data['login']['id_login'],
            'nm_siswa' => htmlspecialchars($this->input->post('nm_siswa')),
            'no_hp' => htmlspecialchars($this->input->post('no_hp')),
            'email' => 'default',
            'tmp_lahir' => null,
            'tgl_lahir' => '0000-00-00',
            'agama' => null,
            'j_kelamin' => null,
            'foto_profile' => 'default.png',
            'alamat' => 'default',
            'nm_ortu' => 'default'
        );
        $this->db->insert('tbl_siswa', $data_siswa);
        $rinci_kelas = array(
            'id_siswa' => '',
            'id_login' => $data['login']['id_login'],
            'id_kelas' => htmlspecialchars($this->input->post('id_kelas')),
            'masuk_tanggal' => date('Y-m-d'),
            'status_siswa' => 'AKTIF'
        );
        $this->db->insert('rinci_kelas', $rinci_kelas);
    }
    // Tambah Jurusan
    function tambah_jurusan()
    {
        $nm_jurusan = htmlspecialchars($this->input->post('nm_jurusan'));
        $ket_jurusan = htmlspecialchars($this->input->post('ket_jurusan'));
        $data = array(
            'id_jurusan' => '',
            'nm_jurusan' => $nm_jurusan,
            'ket_jurusan' => $ket_jurusan,
            'ket_status' => 'ADA'
        );
        $this->db->insert('tbl_jurusan', $data);
    }
    // Tambah Jurusan
    function tambah_kelas()
    {
        $id_jurusan = htmlspecialchars($this->input->post('id_jurusan'));
        $nm_kelas = htmlspecialchars($this->input->post('nm_kelas'));
        $tingkat_kelas = htmlspecialchars($this->input->post('tingkat_kelas'));
        $jml_siswa = htmlspecialchars($this->input->post('jml_siswa'));
        $id_guru = htmlspecialchars($this->input->post('id_guru'));
        $data = array(
            'id_kelas' => '',
            'id_jurusan' => $id_jurusan,
            'nm_kelas' => $nm_kelas,
            'tingkat_kelas' => $tingkat_kelas,
            'status_kelas' => 'ADA',
            'jml_siswa' => $jml_siswa,
            'id_guru' => $id_guru
        );
        $this->db->insert('tbl_kelas', $data);
    }
    // Tambah Mata Pelajaran
    function tambah_mapel($id_guru, $id_kelas, $nm_mapel)
    {
        $data = array(
            'id_mapel' => '',
            'nm_mapel' => $nm_mapel,
            'id_kelas' => $id_kelas,
            'id_guru' => $id_guru,
            'status_mapel' => 'ADA'
        );
        $this->db->insert('tbl_mapel', $data);
    }
}
