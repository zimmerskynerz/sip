<br>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="widget-content widget-content-area br-6">
                        <div class="modal-body">
                            <?php echo form_open_multipart('kepala_dinas/cek_laporan'); ?>
                            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
                            <div class="row">
                                <div class="col">
                                    <label for="tgl_mulai">Bulan Laporan</label>
                                    <select name="bulan" id="bulan" class="form-control" required>
                                        <option value="1">Januari</option>
                                        <option value="2">Februari</option>
                                        <option value="3">Maret</option>
                                        <option value="4">April</option>
                                        <option value="5">Mei</option>
                                        <option value="6">Juni</option>
                                        <option value="7">Juli</option>
                                        <option value="8">Agustus</option>
                                        <option value="9">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="tgl_mulai">Tahun Laporan</label>
                                    <select name="tahun" id="tahun" class="form-control" required>
                                        <?php
                                        $mulai = date('Y') - 50;
                                        for ($i = $mulai; $i < $mulai + 100; $i++) {
                                            $sel = $i == date('Y') ? ' selected="selected"' : '';
                                            echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-warning" id="reset_lapor" name="reset_lapor" class="btn btn-primary mb-2">reset</button>
                            <button type="submit" class="btn btn-primary" id="tampil_lapor" name="tampil_lapor" class="btn btn-primary mb-2">tampil</button>
                            <?php echo form_close(); ?>
                            <a type="button" class="btn btn-success" data-toggle="modal" data-target="#cetak_laporan">Cetak</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Laporan <?= $bulan ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
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
<?php $this->load->view('kepala_dinas/laporan/laporan') ?>