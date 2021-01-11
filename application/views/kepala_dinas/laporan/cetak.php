<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SELAMAT DATANG PEMOHON</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/') ?>dist/img/logo_icon.png" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/adminlte.min.css">
    <style>
        [class*=sidebar-light-] .nav-sidebar>.nav-item.menu-open>.nav-link,
        [class*=sidebar-light-] .nav-sidebar>.nav-item:hover>.nav-link {
            background-color: #007bff;
            color: #fff;
        }
    </style>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
    <style>
        .sidebar.toggled .nav-item .collapse {
            position: relative;
            padding-left: 1rem;
            left: 0;
            z-index: 1;
            top: 0;
        }

        .sidebar.toggled {
            width: 60vw !important;
            transition: all .3s ease-in-out;
            -webkit-transition: all .3s ease-in-out;
        }
    </style>
    <style>
        .responsive img {
            max-width: 50%;
            align-content: center;
            /*width:100%;*/
            height: auto;
        }
    </style>
    <style>
        .avatar {
            vertical-align: top;
            width: 126px;
            margin-right: 6px;
        }
    </style>
</head>

<body>

    <div class="main-panel">
        <div class="content-wrapper">
            <style>
                hr {
                    display: block;
                    margin-top: 0.1em;
                    margin-bottom: 0.5em;
                    margin-left: auto;
                    margin-right: auto;
                    border-style: double;
                    border-width: 2px;
                }

                table,
                th,
                td {
                    padding: 8px 10px;
                }
            </style>

            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="card-body">
                                    <img src="<?= base_url('assets/') ?>dist/img/logo.png" width="100px" style="position: absolute;" alt="">
                                    <center>
                                        <h4><b>PEMERINTAHAN KABUPATEN KUDUS</b></h4>
                                        <h4><b>DINAS KESEHATAN</b></h4>
                                        <h7>Jl. Diponegoro No.15, Nganguk, Kec. Kota Kudus</h7><br>
                                        <h7>Kabupaten Kudus, Jawa Tengah 59312</h7>
                                    </center>
                                    <center>
                                        <h4>LAPORAN PENGAJUAN SIP BULAN <?= $bulan ?> TAHUN <?= $tahun ?></h4>
                                    </center>
                                    <br>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">No</th>
                                                <th style="text-align: center;">No SIP</th>
                                                <th style="text-align: center;">Nama</th>
                                                <th style="text-align: center;">No HP</th>
                                                <th style="text-align: center;">Pengajuan</th>
                                                <th style="text-align: center;">Kategori</th>
                                                <th style="text-align: center;">STR</th>
                                                <th style="text-align: center;">Rekomendasi</th>
                                                <th style="text-align: center;">SIP</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($rekomendasi as $Rekomendasi) : ?>
                                                <tr>
                                                    <td style="text-align: center;"><?= $no ?></td>
                                                    <td>
                                                        <?= '33.' . $Rekomendasi->id_sip . '/59' . $Rekomendasi->id_rekomendasi . $Rekomendasi->id_sip . '/' . $Rekomendasi->singkatan . '/0' . $Rekomendasi->id_sip . '/II/' . date('Y', strtotime($Rekomendasi->tgl_daftar)) . '' ?>
                                                    </td>
                                                    <td><?= $Rekomendasi->nm_lengkap ?></td>
                                                    <td><?= $Rekomendasi->no_hp ?></td>
                                                    <td>
                                                        <?= date('d F Y', strtotime($Rekomendasi->tgl_daftar)) ?>
                                                    </td>
                                                    <td>
                                                        <?= $Rekomendasi->nm_kategori; ?>
                                                    </td>
                                                    <td>
                                                        <?= date('d F Y', strtotime($Rekomendasi->tgl_berakhir_str)) ?>
                                                    </td>
                                                    <td>
                                                        <?= date('d F Y', strtotime($Rekomendasi->tgl_berakhir)) ?>
                                                    </td>
                                                    <td>
                                                        <?= date('d F Y', strtotime($Rekomendasi->tgl_akhir)) ?>
                                                    </td>
                                                </tr>
                                                <?php $no++; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <br>
                                    <h5 style="text-indent: 60px; font-weight: normal; line-height: 2;">Data yang diberikan bisa dipertanggung jawabkan kebenarannya, di tulis dan disahkan oleh kepala dinas kesehatan Kab. Kudus.</h5>
                                    <table colspan="2" width="100%">
                                        <thead>
                                            <tr>
                                                <td align="center">Kudus, <?= date('d F Y') ?></td>
                                            </tr>
                                            <tr>
                                                <td align="center">Kepala Dinas Kesehatan,</td>
                                            </tr>
                                            <tr>
                                                <td align="center"></td>
                                            </tr>
                                            <tr>
                                                <td align="center"></td>
                                            </tr>
                                            <tr colspan="3">
                                                <td align="center"></td>
                                            </tr>
                                            <tr>
                                                <td align="center">JOKO DWI PUTRANTO, SH, MM<br>NIP : 19600816 199202 1 001</td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php $this->load->view('pemohon/include/footer') ?>
    <script language=javascript>
        function printWindow() {
            bV = parseInt(navigator.appVersion);
            if (bV >= 4) window.print();
        }
        printWindow();
    </script>
</body>

</html>