<div class="card card-outline card-primary">
    <div class="card-header text-center">
        <a href="" class="h1"><b>LOGIN</b></a>
    </div>
    <div class="card-body">
        <?= $this->session->flashdata('pesan_gagal'); ?>
        <?= $this->session->flashdata('pesan_gagal2'); ?>
        <?= $this->session->flashdata('pesan_gagal4'); ?>
        <?= $this->session->flashdata('pesan_gagal3'); ?>
        <?= $this->session->flashdata('berhasil_logout'); ?>
        <p class="login-box-msg">SURAT IZIN PRAKTIK DOKTER</p>
        <form action="<?= base_url('login/cek_login') ?>" method="post">
            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">

                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <!-- /.social-auth-links -->
        <br>
        <p class="mb-1">
            Lupa Password? <a href="<?= base_url('reset') ?>">Reset Disini</a>
        </p>
        <p class="mb-1">
            Belum Punya Akun? <a href="<?= base_url('daftar') ?>">Daftar Disini</a>
        </p>
    </div>
    <!-- /.card-body -->
</div>
<script>
    setTimeout(function() {
        $('#pesan_gagal').hide()
    }, 3000);
    setTimeout(function() {
        $('#pesan_gagal2').hide()
    }, 3000);
    setTimeout(function() {
        $('#berhasil_logout').hide()
    }, 3000);
    setTimeout(function() {
        $('#pesan_gagal3').hide()
    }, 3000);
    setTimeout(function() {
        $('#pesan_gagal4').hide()
    }, 3000);
</script>