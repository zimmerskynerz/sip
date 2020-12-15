<section class="content">
    <div class="container-fluid">
        <br>
        <div class="card">
            <div class="card-body">
                <img src="<?= base_url('assets/') ?>dist/img/logo.png" width="100px" style="position: absolute;" alt="">
                <center>
                    <h4><b>PEMERINTAHAN KABUPATEN KUDUS</b></h4>
                    <h4><b>DINAS KESEHATAN</b></h4>
                    <h7>Jl. Diponegoro No.15, Nganguk, Kec. Kota Kudus</h7><br>
                    <h7>Kabupaten Kudus, Jawa Tengah 59312</h7>
                </center>
                <a href="<?= base_url('pemohon/dokumen/cetak_sip') ?>" style="position: absolute; right: 20px; top:10px">cetak</a>
                <hr>
                <center>
                    <h3><b><u>SURAT IZIN PRAKTIK ( SIP ) DOKTER</u></b></h3>
                    <h5>Nomor : 33.<?= $cek_sip['id_sip'] ?>/59<?= $data_rekomendasi['id_rekomendasi'] ?><?= $cek_sip['id_sip']  ?>/<?= $data_rekomendasi['singkatan'] ?>/0<?= $cek_sip['id_sip'] ?>/II/<?= date('Y', strtotime($data_rekomendasi['tgl_daftar'])) ?></h5>
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
                        <th>Tempat/ tgl. Lahir </th>
                        <th>:</th>
                        <th> <?= $data_identitas['tmp_lahir'] ?>, <?= date('d F Y', strtotime($data_identitas['tgl_lahir'])) ?></th>
                    </tr>
                    <tr>
                        <th>Alamat Rumah</th>
                        <th>:</th>
                        <th> <?= $data_identitas['alamat'] ?></th>
                    </tr>
                    <tr>
                        <th>Untuk Praktik </th>
                        <th>:</th>
                        <th> <?= $data_rekomendasi['nm_kategori'] ?></th>
                    </tr>
                    <tr>
                        <th>Tempat Praktik </th>
                        <th>:</th>
                        <th> <?= $data_identitas['nm_kantor'] ?></th>
                    </tr>
                    <tr>
                        <th>Alamat Praktik </th>
                        <th>:</th>
                        <th> <?= $data_identitas['alamat_praktik'] ?></th>
                    </tr>
                    <tr>
                        <th>Nomor STR</th>
                        <th>:</th>
                        <th> <?= $data_rekomendasi['no_str'] ?></th>
                    </tr>
                    <tr>
                        <th>STR Berlaku sampai dengan</th>
                        <th>:</th>
                        <th> <?= date('d F Y', strtotime($data_rekomendasi['tgl_berakhir_str'])) ?></th>
                    </tr>
                    <tr>
                        <th>Nomor Rekomendasi OP</th>
                        <th>:</th>
                        <th> 00<?= $data_rekomendasi['id_rekomendasi'] ?>/SR.<?= $data_rekomendasi['singkatan'] ?>/<?= date('Y', strtotime($data_rekomendasi['tgl_daftar'])) ?>/KUDUS-JT12</th>
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
                                    <h5 style="position:absolute; right: 300px; bottom:400px;">Kudus, <?= date('d F Y', strtotime($data_rekomendasi['tgl_mulai'])) ?></h5>
                                    <img src="<?= base_url('assets/dist/img/ttd2.png') ?>" width="320px" style="position:absolute; right: 300px; bottom:200px;" alt="">
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
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>