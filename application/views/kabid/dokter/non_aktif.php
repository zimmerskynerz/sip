<br>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Dokter Non Aktif</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">No</th>
                                    <th style="text-align: center;">Nama Dokter</th>
                                    <th style="text-align: center;">Kategori Dokter</th>
                                    <th style="text-align: center;">Nama Kantor</th>
                                    <th style="text-align: center;">Alamat Kantor</th>
                                    <th style="text-align: center;">No STR</th>
                                    <th style="text-align: center;">No Rekomendasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($data_dokter_pasif as $Data_dokter_pasif) : ?>
                                    <tr>
                                        <td class="text-center"><?= $no ?></td>
                                        <td><?= $Data_dokter_pasif->nm_lengkap ?></td>
                                        <td class="text-center"><?= $Data_dokter_pasif->singkatan ?> - <?= $Data_dokter_pasif->nm_kategori ?></td>
                                        <td><?= $Data_dokter_pasif->nm_kantor ?></td>
                                        <td><?= $Data_dokter_pasif->alamat_praktik ?></td>
                                        <td><?= $Data_dokter_pasif->no_str ?></td>
                                        <td>00<?= $Data_dokter_pasif->id_rekomendasi ?>/SR.<?= $Data_dokter_pasif->singkatan ?>/<?= date('Y', strtotime($Data_dokter_pasif->tgl_daftar)) ?>/KUDUS-JT12</td>
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