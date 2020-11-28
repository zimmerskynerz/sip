<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = 'lostpage';
$route['translate_uri_dashes'] = FALSE;

// Halaman Pendaftar
// Menu Beranda
$route['login']                                                 = 'Welcome/index';
$route['login/cek_login']                                       = 'Welcome/cek_login';
$route['daftar']                                                = 'Welcome/daftar';
$route['daftar/regsitrasi']                                     = 'Welcome/regsitrasi';
$route['reset']                                                 = 'Welcome/reset';
$route['login/logout']                                          = 'Welcome/logout';

// Level Pemohon
// Menu Beranda Pemohon
$route['pemohon']                                               = 'pemohon/ControllerPemohon/index';
$route['pemohon/beranda']                                       = 'pemohon/ControllerPemohon/index';
// Menu Perijinan Praktek
$route['pemohon/perijinan/baru']                                = 'pemohon/ControllerPemohonPengajuan/baru';
$route['pemohon/perijinan/ajukan_baru']                         = 'pemohon/ControllerPemohonPengajuan/ajukan_baru';
$route['pemohon/perijinan/perpanjang']                          = 'pemohon/ControllerPemohonPengajuan/perpanjang';
$route['pemohon/perijinan/perbarui_data']                       = 'pemohon/ControllerPemohonPengajuan/perbarui_data';
$route['pemohon/perijinan/crudpengajuan']                       = 'pemohon/ControllerPemohonPengajuan/crudpengajuan';
$route['pemohon/perijinan/detail_berkas/(:any)']                = 'pemohon/ControllerPemohonPengajuan/detail_berkas/$1';
// Menu Dokumen
$route['pemohon/dokumen/rekomendasi']                           = 'pemohon/ControllerPemohonDocument/rekomendasi';
$route['pemohon/dokumen/ijin_praktek']                          = 'pemohon/ControllerPemohonDocument/ijin_praktek';
$route['pemohon/dokumen/cetak_rekomendasi']                     = 'pemohon/ControllerPemohonDocument/cetak_rekomendasi';
$route['pemohon/dokumen/cetak_sip']                             = 'pemohon/ControllerPemohonDocument/cetak_sip';
$route['pemohon/dokumen/berkas_permohonan']                     = 'pemohon/ControllerPemohonDocument/berkas_permohonan';
$route['pemohon/dokumen/cruddokumen']                           = 'pemohon/ControllerPemohonDocument/cruddokumen';


// Level Kasi
// Menu Beranda
$route['kasi']                                                  = 'kasi/ControllerKasi/index';
$route['kasi/beranda']                                          = 'kasi/ControllerKasi/index';
// Menu Kategori Dokter
$route['kasi/kategori_dokter']                                  = 'kasi/ControllerKasiKategoriDokter/index';
$route['kasi/kategori_dokter/crudkategori']                     = 'kasi/ControllerKasiKategoriDokter/crudkategori';
// Menu Pemohon Rekomendasi
$route['kasi/pemohon_rekomendasi/baru']                         = 'kasi/ControllerKasiPemohonRekomendasi/baru';
$route['kasi/pemohon_rekomendasi/perpanjang']                   = 'kasi/ControllerKasiPemohonRekomendasi/perpanjang';
$route['kasi/pemohon_rekomendasi/detail_berkas/(:any)']         = 'kasi/ControllerKasiPemohonRekomendasi/detail_berkas/$1';
$route['kasi/pemohon_rekomendasi/crudpemohon']                  = 'kasi/ControllerKasiPemohonRekomendasi/crudpemohon';
// Menu Validasi SIP
$route['kasi/validasi']                                         = 'kasi/ControllerKasiValidasi/index';
$route['kasi/validasi/sip/crudsip']                             = 'kasi/ControllerKasiValidasi/crudsip';
// Menu Daftar Dokter
$route['kasi/dokter/aktif']                                     = 'kasi/ControllerKasiDokter/aktif';
$route['kasi/dokter/non_aktif']                                 = 'kasi/ControllerKasiDokter/non_aktif';
// Menu Profile
$route['kasi/profile']                                          = 'kasi/ControllerKasiProfile/index';
$route['kasi/profile/crudprofile']                              = 'kasi/ControllerKasiProfile/crudprofile';


// Level Kabid
// Menu Beranda
$route['kabid']                                                 = 'kabid/ControllerKabid/index';
$route['kabid/beranda']                                         = 'kabid/ControllerKabid/index';
// Menu Rekomendasi
$route['kabid/rekomendasi/baru']                                = 'kabid/ControllerKabidRekomendasi/baru';
$route['kabid/rekomendasi/perpanjang']                          = 'kabid/ControllerKabidRekomendasi/perpanjang';
$route['kabid/rekomendasi/detail_berkas/(:any)']                = 'kabid/ControllerKabidRekomendasi/detail_berkas/$1';
$route['kabid/rekomendasi/crudrekomendasi']                     = 'kabid/ControllerKabidRekomendasi/crudrekomendasi';
// Menu Validasi SIP
$route['kabid/validasi']                                        = 'kabid/ControllerKabidValidasi/index';
$route['kabid/validasi/crudvalidasi']                           = 'kabid/ControllerKabidValidasi/crudvalidasi';
// Menu Daftar Dokter
$route['kabid/dokter/aktif']                                     = 'kabid/ControllerKabidDokter/aktif';
$route['kabid/dokter/non_aktif']                                 = 'kabid/ControllerKabidDokter/non_aktif';
// Menu Profile
$route['kabid/profile']                                          = 'kabid/ControllerKabidProfile/index';
$route['kabid/profile/crudprofile']                              = 'kabid/ControllerKabidProfile/crudprofile';

// Level Kepala Dinas
// Menu Beranda
$route['kepala_dinas']                                           = 'kepala_dinas/ControllerKepalaDinas/index';
$route['kepala_dinas/beranda']                                   = 'kepala_dinas/ControllerKepalaDinas/index';
// Menu Rekomendasi
$route['kepala_dinas/rekomendasi/baru']                          = 'kepala_dinas/ControllerKepalaDinasRekomendasi/baru';
$route['kepala_dinas/rekomendasi/perpanjang']                    = 'kepala_dinas/ControllerKepalaDinasRekomendasi/perpanjang';
$route['kepala_dinas/rekomendasi/detail_berkas/(:any)']          = 'kepala_dinas/ControllerKepalaDinasRekomendasi/detail_berkas/$1';
$route['kepala_dinas/rekomendasi/crudrekomendasi']               = 'kepala_dinas/ControllerKepalaDinasRekomendasi/crudrekomendasi';
// Menu Validasi SIP
$route['kepala_dinas/validasi']                                  = 'kepala_dinas/ControllerKepalaDinasValidasi/index';
$route['kepala_dinas/validasi/crudvalidasi']                     = 'kepala_dinas/ControllerKepalaDinasValidasi/crudvalidasi';
// Menu Daftar Dokter
$route['kepala_dinas/dokter/aktif']                              = 'kepala_dinas/ControllerKepalaDinasDokter/aktif';
$route['kepala_dinas/dokter/non_aktif']                          = 'kepala_dinas/ControllerKepalaDinasDokter/non_aktif';
// Menu Profile
$route['kepala_dinas/profile']                                   = 'kepala_dinas/ControllerKepalaDinasProfile/index';
$route['kepala_dinas/profile/crudprofile']                       = 'kepala_dinas/ControllerKepalaDinasProfile/crudprofile';
