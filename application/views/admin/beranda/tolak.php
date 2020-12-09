<br>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Permohonan Ditolak</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">No</th>
                                    <th style="text-align: center;">Nama Dokter</th>
                                    <th style="text-align: center;">Tempat, Tanggal Lahir</th>
                                    <th style="text-align: center;">Nama Kantor</th>
                                    <th style="text-align: center;">Nomor Rekomendasi</th>
                                    <th style="text-align: center;">Nomor STR</th>
                                    <th style="text-align: center;">Masa Berlaku STR</th>
                                    <th style="text-align: center;">Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($data_baru as $Data_baru) : ?>
                                    <tr>
                                        <td style="text-align: center;"><?= $no ?></td>
                                        <td><?= $Data_baru->nm_lengkap ?></td>
                                        <td><?= $Data_baru->tmp_lahir ?>, <?= date('d F Y', strtotime($Data_baru->tgl_lahir)) ?></td>
                                        <td><?= $Data_baru->nm_kantor ?></td>
                                        <td>00<?= $Data_baru->id_rekomendasi ?>/SR.<?= $Data_baru->singkatan ?>/<?= date('Y', strtotime($Data_baru->tgl_daftar)) ?>/KUDUS-JT12</td>
                                        <td><?= $Data_baru->no_str ?></td>
                                        <td><?= date('d F Y', strtotime($Data_baru->tgl_berakhir_str)) ?></td>
                                        <td>
                                            <?= $Data_baru->ket_lain ?>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>