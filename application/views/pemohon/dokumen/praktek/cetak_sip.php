<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('pemohon/include/head') ?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <style>
                hr {
                    border: none;
                    height: 3px;
                    /* Set the hr color */
                    color: #333;
                    /* old IE */
                    background-color: #333;
                    /* Modern Browsers */
                }
            </style>
            <div class="card-body">
                <img src="<?= base_url('assets/') ?>dist/img/logo.png" width="100px" style="position: absolute;" alt="">
                <center>
                    <h4><b>PEMERINTAHAN KABUPATEN KUDUS</b></h4>
                    <h4><b>DINAS KESEHATAN</b></h4>
                    <h7>Jl. Diponegoro No.15, Nganguk, Kec. Kota Kudus</h7><br>
                    <h7>Kabupaten Kudus, Jawa Tengah 59312</h7>
                </center>
                <hr>
                <center>
                    <h3><b><u>SURAT IZIN PRAKTIK ( SIP ) DOKTER</u></b></h3>
                    <h5>Nomor : 33.<?= $data_rekomendasi['id_sip'] ?>/59<?= $data_rekomendasi['id_rekomendasi'] ?><?= $data_rekomendasi['id_sip']  ?>/<?= $data_rekomendasi['singkatan'] ?>/0<?= $data_rekomendasi['id_sip'] ?>/II/<?= date('Y', strtotime($data_rekomendasi['tgl_daftar'])) ?></h5>
                </center>
                <p>Berdasarkan Peraturan Menteri Kesehatan Republik Indonesia Nomor : 2052/Menkes/Per/X/2011 tentang Izin Praktik dan Pelaksanaan Praktik Kedokteran dan peraturan Bupati Kudus Nomor 30 Tahun 2010 tentang Perizinan Bidang Kesehatan, sebagaimana telah diubah dengan Peraturan Bupati Nomor 25 Tahun 2012 tentang Perubahan Atas Peraturan Bupati Kudus Nomor 30 Tahun 2010 tentang Perizinan Bidang Kesehatan.
                    yang bertanda tangan dibawah ini, Kepala Dinas Kesehatan Kabupaten Kudus memberikan Izin Praktik kepada
                    :</p>
                <br>
                <center>
                    <h4><b><u><?= $data_identitas['nm_lengkap'] ?></u></b></h4><br>
                </center>

                <table>
                    <tr>
                        <th style="text-align: left;">Tempat/ tgl. Lahir </th>
                        <th style="text-align: left;">:</th>
                        <th style="text-align: left;"> <?= $data_identitas['tmp_lahir'] ?>, <?= date('d F Y', strtotime($data_identitas['tgl_lahir'])) ?></th>
                    </tr>
                    <tr>
                        <th style="text-align: left;">Alamat Rumah</th>
                        <th style="text-align: left;">:</th>
                        <th style="text-align: left;"> <?= $data_identitas['alamat'] ?></th>
                    </tr>
                    <tr>
                        <th style="text-align: left;">Untuk Praktik </th>
                        <th style="text-align: left;">:</th>
                        <th style="text-align: left;"> <?= $data_rekomendasi['nm_kategori'] ?></th>
                    </tr>
                    <tr>
                        <th style="text-align: left;">Tempat Praktik </th>
                        <th style="text-align: left;">:</th>
                        <th style="text-align: left;"> <?= $data_identitas['nm_kantor'] ?></th>
                    </tr>
                    <tr>
                        <th style="text-align: left;">Alamat Praktik </th>
                        <th style="text-align: left;">:</th>
                        <th style="text-align: left;"> <?= $data_identitas['alamat_praktik'] ?></th>
                    </tr>
                    <tr>
                        <th style="text-align: left;">Nomor STR</th>
                        <th style="text-align: left;">:</th>
                        <th style="text-align: left;"> <?= $data_rekomendasi['no_str'] ?></th>
                    </tr>
                    <tr>
                        <th style="text-align: left;">STR Berlaku sampai dengan</th>
                        <th style="text-align: left;">:</th>
                        <th style="text-align: left;"> <?= date('d F Y', strtotime($data_rekomendasi['tgl_berakhir_str'])) ?></th>
                    </tr>
                    <tr>
                        <th style="text-align: left;">Nomor Rekomendasi OP</th>
                        <th style="text-align: left;">:</th>
                        <th style="text-align: left;"> 00<?= $data_rekomendasi['id_rekomendasi'] ?>/SR.<?= $data_rekomendasi['singkatan'] ?>/<?= date('Y', strtotime($data_rekomendasi['tgl_daftar'])) ?>/KUDUS-JT12</th>
                    </tr>
                </table><br>
                <p><u>Dengan ketentuan sebagai berikut</u></p>
                <ol>1. Mentaati peraturan undang-undang yang berlaku</ol>
                <ol>2. Surat Izin Praktik ini berlaku sesuai dengan Surat Tanda Registrasi ( STR ) Dokter Jantung sampai dengan tanggal 23 Juni 2020</ol>
                <br>
                <center>
                    <table>
                        <tr>
                            <th><img src="<?= base_url('assets/') ?>berkas/<?= $data_berkas['foto'] ?>" width="150px" alt=""></th>
                            <th>
                                <center>
                                    <h7>Kudus, <?= date('d F Y', strtotime($data_rekomendasi['tgl_mulai'])) ?></h7>
                                    <h6>Kepala Dinas Kesehatan Kab. Kudus</h6>
                                    <br><br><br>
                                    <h6><b><u>JOKO DWI PUTRANTO, SH, MM</u></b></h6>
                                    <h8>Pembina Utama Muda</h8>
                                    <h6>NIP : 19600816 199202 1 001</h6>
                                </center>
                            </th>
                        </tr>
                    </table>
                </center>
                <p><b><u>Tembusan disampaikan kepada Yth :</u></b></p>
                <ol>1. Menteri Kesehatan Republik Indonesia di Jakarta</ol>
                <ol>2. Ketua Konsil Kedokteran Indonesia di Jakarta</ol>
                <ol>3. Kepala Dinas Kesehatan Provinsi Jawa Tengah di Kota Semarang</ol>
                <ol>4. Ketua Ikatan Dokter Indonesia ( IDI ) Cabang Kudus di Kabupaten Kudus</ol>
            </div>
            <script language=javascript>
                function printWindow() {
                    bV = parseInt(navigator.appVersion);
                    if (bV >= 4) window.print();
                }
                printWindow();
            </script>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php $this->load->view('pemohon/include/footer') ?>
</body>

</html>