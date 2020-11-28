<br>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-12">
                <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="fas fa-notes-medical"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Pengajuan Ijin Praktek</span>
                        <span class="info-box-number"><?= count($data_baru); ?> Dokter</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="progress-description">
                            <a href="<?= base_url('kabid/rekomendasi/baru') ?>" style="color: aliceblue;">Selengkapnya >>></a>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <!-- /.col -->
            <div class="col-md-6 col-sm-6 col-12">
                <div class="info-box bg-primary">
                    <span class="info-box-icon"><i class="fas fa-file-signature"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Perpanjang Ijin Praktek</span>
                        <span class="info-box-number"><?= count($data_perpanjang); ?> Dokter</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="progress-description">
                            <a href="<?= base_url('kabid/rekomendasi/perpanjang') ?>" style="color: aliceblue;">Selengkapnya >>></a>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="info-box bg-fuchsia">
                    <span class="info-box-icon"><i class="fas fa-notes-medical"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Validasi Surat Izin Praktik</span>
                        <span class="info-box-number">1000 Dokter</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="progress-description">
                            <a href="<?= base_url('kabid/validasi') ?>" style="color: aliceblue;">Selengkapnya >>></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-12">
                <div class="info-box bg-indigo">
                    <span class="info-box-icon"><i class="fas fa-user-md"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Dokter Aktif</span>
                        <span class="info-box-number">3000 Dokter</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="progress-description">
                            <a href="<?= base_url('kabid/dokter/aktif') ?>" style="color: aliceblue;">Selengkapnya >>></a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-12">
                <div class="info-box bg-danger">
                    <span class="info-box-icon"><i class="fas fa-user-times"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Dokter Non Aktif</span>
                        <span class="info-box-number">40 Dokter</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="progress-description">
                            <a href="<?= base_url('kabid/dokter/non_aktif') ?>" style="color: aliceblue;">Selengkapnya >>></a>
                        </span>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>