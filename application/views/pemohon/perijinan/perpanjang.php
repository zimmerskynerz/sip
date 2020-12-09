<?php $this->load->view('pemohon/perijinan/notif') ?>
<br>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Perpanjang SIP</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">No</th>
                                    <th style="text-align: center;">Dokter</th>
                                    <th style="text-align: center;">STR</th>
                                    <th style="text-align: center;">Rekomendasi</th>
                                    <th style="text-align: center;">SIP</th>
                                    <th style="text-align: center;">Masa STR</th>
                                    <th style="text-align: center;">Masa Rekomendasi</th>
                                    <th style="text-align: center;">Masa SIP</th>
                                    <th style="text-align: center;">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($data_baru as $Data_baru) : ?>
                                    <tr>
                                        <td style="text-align: center;"><?= $no ?></td>
                                        <td><?= $Data_baru->nm_lengkap ?></td>
                                        <td><?= $Data_baru->no_str ?></td>
                                        <td>00<?= $Data_baru->id_rekomendasi ?>/SR.<?= $Data_baru->singkatan ?>/<?= date('Y', strtotime($Data_baru->tgl_daftar)) ?>/KUDUS-JT12</td>
                                        <td>33.<?= $Data_baru->id_sip ?>/59<?= $Data_baru->id_rekomendasi ?><?= $Data_baru->id_sip ?>/<?= $Data_baru->singkatan ?>/0<?= $Data_baru->id_sip ?>/II/<?= date('Y', strtotime($Data_baru->tgl_daftar)) ?></td>
                                        <td><?= date('d F Y', strtotime($Data_baru->tgl_berakhir_str)) ?></td>
                                        <td><?= date('d F Y', strtotime($Data_baru->tgl_berakhir)) ?></td>
                                        <td><?= date('d F Y', strtotime($Data_baru->tgl_akhir)) ?></td>
                                        <td style="text-align: center;">
                                            <?php if ($Data_baru->status_sip == 'AKTIF') : ?>
                                                <?php
                                                if ($Data_baru->tgl_akhir > date('Y-m-d')) : ?>
                                                    Aktif
                                                <?php else : ?>
                                                    <a id="detail_renew" href="javascript:void(0);" class="bs-tooltip" data-toggle="modal" data-target="#renew_detail" data-placement="top" title="" data-original-title="Detail" data-id_user="<?= $Data_baru->id_user ?>" data-id_rekomendasi="<?= $Data_baru->id_rekomendasi ?>" data-id_sip="<?= $Data_baru->id_sip ?>" data-nm_lengkap="<?= $Data_baru->nm_lengkap ?>" data-no_str="<?= $Data_baru->no_str ?>" data-masa_no_str="<?= date('d F Y', strtotime($Data_baru->tgl_berakhir_str)) ?>" data-no_rekomendasi="00<?= $Data_baru->id_rekomendasi ?>/SR.<?= $Data_baru->singkatan ?>/<?= date('Y', strtotime($Data_baru->tgl_daftar)) ?>/KUDUS-JT12" data-masa_no_rekomendasi="<?= date('d F Y', strtotime($Data_baru->tgl_berakhir)) ?>" data-no_sip="33.<?= $Data_baru->id_sip ?>/59<?= $Data_baru->id_rekomendasi ?><?= $Data_baru->id_sip ?>/<?= $Data_baru->singkatan ?>/0<?= $Data_baru->id_sip ?>/II/<?= date('Y', strtotime($Data_baru->tgl_daftar)) ?>" data-masa_no_sip="<?= date('d F Y', strtotime($Data_baru->tgl_akhir)) ?>">
                                                        <span style="font-size: 24px; color: Dodgerblue;">
                                                            <i class="fas fa-retweet"></i>
                                                        </span>
                                                    </a>
                                                <?php endif; ?>
                                            <?php else : ?>
                                                Proses Perpanjang
                                            <?php endif; ?>
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
<?php $this->load->view('pemohon/perijinan/detail_renew') ?>