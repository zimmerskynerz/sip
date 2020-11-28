<br>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Rekomendasi Baru</h3>
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
                                <?php foreach ($data_perpanjang as $Data_perpanjang) : ?>
                                    <tr>
                                        <td style="text-align: center;"><?= $no ?></td>
                                        <td><?= $Data_perpanjang->nm_lengkap ?></td>
                                        <td><?= $Data_perpanjang->tmp_lahir ?>, <?= date('d F Y', strtotime($Data_perpanjang->tgl_lahir)) ?></td>
                                        <td><?= $Data_perpanjang->nm_kantor ?></td>
                                        <td>00<?= $Data_perpanjang->id_rekomendasi ?>/SR.<?= $Data_perpanjang->singkatan ?>/<?= date('Y', strtotime($Data_perpanjang->tgl_daftar)) ?>/KUDUS-JT12</td>
                                        <td><?= $Data_perpanjang->no_str ?></td>
                                        <td><?= date('d F Y', strtotime($Data_perpanjang->tgl_berakhir_str)) ?></td>
                                        <td style="text-align: center;">
                                            <a href="<?= base_url('kepala_dinas/rekomendasi/detail_berkas/' . $Data_perpanjang->id_user . '') ?>" class="bs-tooltip" data-placement="top" title="" data-original-title="Detail">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                </svg>
                                            </a>
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