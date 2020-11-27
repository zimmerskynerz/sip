<div class="card card-outline card-primary">
    <div class="card-header text-center">
        <a href="../../index2.html" class="h1"><b>Register</b></a>
    </div>
    <div class="card-body">
        <p class="login-box-msg">Register Dokter Baru</p>

        <?php echo form_open_multipart('daftar/regsitrasi'); ?>
        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
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
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <!-- /.col -->
        </div>
        <?php echo form_close(); ?>


        <br>

        Sudah Punya Akun? <a href="<?= base_url('/') ?>" class="text-center">Login Disini!</a>
    </div>
    <!-- /.form-box -->
</div><!-- /.card -->