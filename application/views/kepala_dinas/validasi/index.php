<br>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Validasi SIP</h3>
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
                                    <th style="text-align: center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($data_validasi as $Data_validasi) : ?>
                                    <tr>
                                        <td class="text-center"><?= $no ?></td>
                                        <td><?= $Data_validasi->nm_lengkap ?></td>
                                        <td class="text-center"><?= $Data_validasi->singkatan ?> - <?= $Data_validasi->nm_kategori ?></td>
                                        <td><?= $Data_validasi->nm_kantor ?></td>
                                        <td><?= $Data_validasi->alamat_praktik ?></td>
                                        <td><?= $Data_validasi->no_str ?></td>
                                        <td>00<?= $Data_validasi->id_rekomendasi ?>/SR.<?= $Data_validasi->singkatan ?>/<?= date('Y', strtotime($Data_validasi->tgl_daftar)) ?>/KUDUS-JT12</td>
                                        <td class="text-center">
                                            <a id="detail_sip" href="javascript:void(0);" class="bs-tooltip" data-toggle="modal" data-target="#sip_detail" data-placement="top" title="" data-original-title="Detail" data-nm_lengkap="<?= $Data_validasi->nm_lengkap ?>" data-id_sip="<?= $Data_validasi->id_sip ?>" data-no_str="<?= $Data_validasi->no_str ?>" data-no_rekomendasi="00<?= $Data_validasi->id_rekomendasi ?>/SR.<?= $Data_validasi->singkatan ?>/<?= date('Y', strtotime($Data_validasi->tgl_daftar)) ?>/KUDUS-JT12"
                                            data-status_validasi="<?= $Data_validasi->status_sip?>">
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
<?php $this->load->view('kepala_dinas/validasi/detail_sip') ?>