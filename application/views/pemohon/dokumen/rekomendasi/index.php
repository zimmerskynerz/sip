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
                <a href="<?= base_url('pemohon/dokumen/cetak_rekomendasi') ?>" style="position: absolute; right: 20px; top:10px">cetak</a>
                <hr style="size: 10px;">
                <center>
                    <h3><b><u>SURAT REKOMENDASI IZIN PRAKTIK DOKTER</u></b></h3>
                    <h5>Nomor : 00<?= $data_rekomendasi['id_rekomendasi'] ?>/SR.<?= $data_rekomendasi['singkatan'] ?>/<?= date('Y', strtotime($data_rekomendasi['tgl_daftar'])) ?>/KUDUS-JT12</h5>
                </center>
                <p>Yang bertanda tangan dibawah ini, kepala Dinas Kesehatan Kabupaten Kudus, dengan ini menerangkan :</p>
                <table>
                    <tr>
                        <th>Nama </th>
                        <th>:</th>
                        <th> <?= $data_identitas['nm_lengkap'] ?></th>
                    </tr>
                    <tr>
                        <th>Tempat Tanggal Lahir </th>
                        <th>:</th>
                        <th> <?= $data_identitas['tmp_lahir'] ?>, <?= date('d F Y', strtotime($data_identitas['tgl_lahir'])) ?></th>
                    </tr>
                    <tr>
                        <th>Asal FK </th>
                        <th>:</th>
                        <th> <?= $data_identitas['universitas'] ?></th>
                    </tr>
                    <tr>
                        <th>Alamat Rumah Dinas </th>
                        <th>:</th>
                        <th> <?= $data_identitas['alamat'] ?></th>
                    </tr>
                    <tr>
                        <th>Alamat Praktik </th>
                        <th>:</th>
                        <th> <?= $data_identitas['alamat_praktik'] ?></th>
                    </tr>
                </table><br>
                <p>Pada dasarnya kami tidak keberatan dengan adanya praktek atas nama dr. Muhammad Yusuf Aji Wijaya di wilayah Kabupaten kudus dan kami memberikan surat rekomendasi ini untuk melengkapi pembuatan surat izin praktek ( SIP ) dokter.</p>
                <p>Demikian surat rekomendasi izin praktek dokter ini dibuat dan dapat dipergunakan sebgaimana mestinya.</p>
                <p>Dengan Catatan</p>
                <ol>1. Mentaati peraturan undang-undang yang berlaku</ol>
                <ol>2. Menjungjung tinggi kode etik dan standar profesi</ol>
                <br>
                <table style="position: absolute; right:120px">
                    <center>
                        <h7>Kudus, <?= date('d F Y', strtotime($data_rekomendasi['tgl_mulai'])) ?></h7>
                        <h6>Kepala Dinas Kesehatan Kab. Kudus</h6>
                        <br><br><br>
                        <h6><b><u>JOKO DWI PUTRANTO, SH, MM</u></b></h6>
                        <h8>Pembina Utama Muda</h8>
                        <h6>NIP : 19600816 199202 1 001</h6>
                    </center>
                </table>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>