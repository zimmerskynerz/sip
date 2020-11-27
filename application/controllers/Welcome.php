<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
		if ($query_login > 0) :
			if ($query_login['level'] == 'KEPALA') :
				redirect('kepala_dinas');
			elseif ($query_login['level'] == 'KASI') :
				redirect('kasi');
			elseif ($query_login['level'] == 'KABID') :
				redirect('kabid');
			else :
				redirect('pemohon');
			endif;
		else :
			$data = array(
				'halaman' => 'login',
				'page' => 'login-page',
				'box' => 'login-box'
			);
			$this->load->view('halaman_utama/include/index', $data);
		endif;
	}
	public function daftar()
	{
		$query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
		if ($query_login > 0) :
			if ($query_login['level'] == 'KEPALA') :
				redirect('kepala_dinas');
			elseif ($query_login['level'] == 'KASI') :
				redirect('kasi');
			elseif ($query_login['level'] == 'KABID') :
				redirect('kabid');
			else :
				redirect('pemohon');
			endif;
		else :
			$data = array(
				'halaman' => 'daftar',
				'page' => 'register-page',
				'box' => 'register-box'
			);
			$this->load->view('halaman_utama/include/index', $data);
		endif;
	}
	public function reset()
	{
		$query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
		if ($query_login > 0) :
			if ($query_login['level'] == 'KEPALA') :
				redirect('kepala_dinas');
			elseif ($query_login['level'] == 'KASI') :
				redirect('kasi');
			elseif ($query_login['level'] == 'KABID') :
				redirect('kabid');
			else :
				redirect('pemohon');
			endif;
		else :
			$data = array(
				'halaman' => 'reset',
				'page' => 'login-page',
				'box' => 'login-box'
			);
			$this->load->view('halaman_utama/include/index', $data);
		endif;
	}
	public function cek_login()
	{
		$username = htmlentities($this->input->post('username'));
		$pass     = htmlentities($this->input->post('password'));
		$query_login = $this->db->get_where('tbl_user', ['username' => $username])->row_array();
		if ($query_login > 0) :
			if (password_verify($pass, $query_login['password'])) :
				$data_login = [
					'id_user' => $query_login['id_user'],
					'username' => $query_login['username'],
					'email' => $query_login['email'],
					'level' => $query_login['level']
				];
				// var_dump($data['query_login']);
				// die;
				if ($query_login['level'] == 'KEPALA') :
					$this->session->set_userdata($data_login);
					$this->session->set_flashdata('berhasil_login', '<div class="berhasil_login"></div>');
					redirect('kepala_dinas');
				elseif ($query_login['level'] == 'KASI') :
					$this->session->set_userdata($data_login);
					$this->session->set_flashdata('berhasil_login', '<div class="berhasil_login"></div>');
					redirect('kasi');
				elseif ($query_login['level'] == 'KABID') :
					$this->session->set_userdata($data_login);
					$this->session->set_flashdata('berhasil_login', '<div class="berhasil_login"></div>');
					redirect('kabid');
				else :
					$this->session->set_userdata($data_login);
					$this->session->set_flashdata('berhasil_login', '<div class="berhasil_login"></div>');
					redirect('pemohon');
				endif;
			else :
				$this->session->set_flashdata('pesan_gagal', '<div class="alert alert-danger" id="pesan_gagal" role="alert">Password salah!</div>');
				redirect('/');
			endif;
		else :
			$this->session->set_flashdata('pesan_gagal2', '<div class="alert alert-danger" id="pesan_gagal" role="alert">Username Belum Terdaftar!</div>');
			redirect('/');
		endif;
	}
	public function regsitrasi()
	{
		$username     = htmlentities($this->input->post('username'));
		$email        = htmlentities($this->input->post('email'));
		$cek_username = $this->db->get_where('tbl_user', ['username' => $username])->row_array();
		$password	  = htmlentities($this->input->post('password'));
		if ($cek_username > 0) :
			$this->session->set_flashdata('pesan_gagal', '<div class="alert alert-danger" id="pesan_gagal" role="alert">Username Sudah Ada!</div>');
			redirect('/');
		else :
			$cek_email = $this->db->get_where('tbl_user', ['email' => $email])->row_array();
			if ($cek_email > 0) :
				$this->session->set_flashdata('pesan_gagal3', '<div class="alert alert-danger" id="pesan_gagal3" role="alert">Email Sudah Ada!</div>');
				redirect('/');
			else :
				$data = array(
					'id_user'  => '',
					'username' => $username,
					'email'    => $email,
					'password' => password_hash($password, PASSWORD_DEFAULT),
					'level'	   => 'PEMOHON'
				);
				$this->db->insert('tbl_user', $data);
				$this->session->set_flashdata('pesan_gagal4', '<div class="alert alert-success" id="pesan_gagal4" role="alert">Silahkan Login!</div>');
				redirect('/');
			endif;
		endif;
	}
	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('berhasil_logout', '<div class="alert alert-success" id="berhasil_logout" role="alert">Terimakasih Dokter!</div>');
		redirect('/');
	}
}
