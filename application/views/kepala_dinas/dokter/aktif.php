<br>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Dokter Aktif</h3>
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
                                    <th style="text-align: center;">Berlaku SIP</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($data_dokter_aktif as $Data_dokter_aktif) : ?>
                                    <tr>
                                        <td class="text-center"><?= $no ?></td>
                                        <td><?= $Data_dokter_aktif->nm_lengkap ?></td>
                                        <td class="text-center"><?= $Data_dokter_aktif->singkatan ?> - <?= $Data_dokter_aktif->nm_kategori ?></td>
                                        <td><?= $Data_dokter_aktif->nm_kantor ?></td>
                                        <td><?= $Data_dokter_aktif->alamat_praktik ?></td>
                                        <td><?= date('d F Y', strtotime($Data_dokter_aktif->tgl_mulai)) ?> - <?= date('d F Y', strtotime($Data_dokter_aktif->tgl_akhir)) ?></td>
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