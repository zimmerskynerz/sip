<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerLaporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kepala_dinas/insert_model');
        $this->load->model('kepala_dinas/update_model');
        $this->load->model('kepala_dinas/select_model');
    }
    public function index()
    {
        if (isset($_POST['reset_lapor'])) :
            redirect('kepala_dinas/laporan');
        else :
            $query_login = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username'), 'level' => 'KEPALA'])->row_array();
            if ($query_login > 0) :
                if (isset($_POST['tampil_lapor'])) :
                    $bulan_ini = $this->input->post('bulan');
                    $tahun = $this->input->post('tahun');
                else :
                    $bulan_ini = date('m');
                    $tahun = date('Y');
                endif;
                if ($bulan_ini == 1) :
                    $bulan = 'Januari';
                elseif ($bulan_ini == 2) :
                    $bulan = 'Febuari';
                elseif ($bulan_ini == 3) :
                    $bulan = 'Maret';
                elseif ($bulan_ini == 4) :
                    $bulan = 'April';
                elseif ($bulan_ini == 5) :
                    $bulan = 'Mei';
                elseif ($bulan_ini == 6) :
                    $bulan = 'Juni';
                elseif ($bulan_ini == 7) :
                    $bulan = 'Juli';
                elseif ($bulan_ini == 8) :
                    $bulan = 'Agustus';
                elseif ($bulan_ini == 9) :
                    $bulan = 'September';
                elseif ($bulan_ini == 10) :
                    $bulan = 'Oktober';
                elseif ($bulan_ini == 11) :
                    $bulan = 'November';
                elseif ($bulan_ini == 12) :
                    $bulan = 'Desember';
                else :
                    $bulan = 'Tidak Ada Bulan';
                endif;
                $data_rekomendasi = $this->select_model->getAllRekomendasiBaru($bulan_ini, $tahun);
                $data = array(
                    'folder'      => 'laporan',
                    'halaman'     => 'index',
                    'bulan'       => $bulan,
                    // Data Identitas
                    'rekomendasi' => $data_rekomendasi
                    // Halaman Isi
                );
                $this->load->view('kepala_dinas/include/index', $data);
            else :
                redirect('/');
            endif;
        endif;
    }
    public function cetak()
    {
        if (isset($_POST['cetak_lapor'])) :
            // Data Cetak Laporan
            $bulan_ini = $this->input->post('bulan');
            $tahun = $this->input->post('tahun');
            if ($bulan_ini == 1) :
                $bulan = 'Januari';
            elseif ($bulan_ini == 2) :
                $bulan = 'Febuari';
            elseif ($bulan_ini == 3) :
                $bulan = 'Maret';
            elseif ($bulan_ini == 4) :
                $bulan = 'April';
            elseif ($bulan_ini == 5) :
                $bulan = 'Mei';
            elseif ($bulan_ini == 6) :
                $bulan = 'Juni';
            elseif ($bulan_ini == 7) :
                $bulan = 'Juli';
            elseif ($bulan_ini == 8) :
                $bulan = 'Agustus';
            elseif ($bulan_ini == 9) :
                $bulan = 'September';
            elseif ($bulan_ini == 10) :
                $bulan = 'Oktober';
            elseif ($bulan_ini == 11) :
                $bulan = 'November';
            elseif ($bulan_ini == 12) :
                $bulan = 'Desember';
            else :
                $bulan = 'Tidak Ada Bulan';
            endif;
            $data_rekomendasi = $this->select_model->getAllRekomendasiBaru($bulan_ini, $tahun);
            $data = array(
                'bulan'       => $bulan,
                'tahun'       => $tahun,
                // Data Identitas
                'rekomendasi' => $data_rekomendasi
                // Halaman Isi
            );
            $this->load->view('kepala_dinas/laporan/cetak', $data);
        endif;
    }
}
        
    /* End of file  ControllerLaporan.php */
