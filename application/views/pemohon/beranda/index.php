<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <center>
                    <h1>SELAMAT DATANG <?= $identitas['nm_lengkap'] ?></h1>
                </center>

            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-12">
                <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Pengajuan Ijin Praktek</span>
                        <span class="info-box-number">Pengajuan Ijin Praktek Dokter</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="progress-description">
                            <a href="<?= base_url('pemohon/perijinan/baru') ?>" style="color: aliceblue;">Ajukan Permohonan Baru</a>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <!-- /.col -->
            <div class="col-md-6 col-sm-6 col-12">
                <div class="info-box bg-danger">
                    <span class="info-box-icon"><i class="fas fa-exclamation"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Perpanjang Ijin Praktek</span>
                        <span class="info-box-number">Perpanjang Ijin Praktek Anda disini!</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <?php if ($cek_sip > 0) : ?>
                            <span class="progress-description">
                                <a href="<?= base_url('pemohon/perijinan/perpanjang') ?>" style="color: aliceblue;">Ajukan Perpanjang</a>
                            </span>
                        <?php else : ?>
                            <span class="progress-description">
                                <a href="<?= base_url('pemohon/perijinan/baru') ?>" style="color: aliceblue;">Ajukan Permohonan Baru</a>
                            </span>
                        <?php endif; ?>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>