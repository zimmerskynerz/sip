<div class="card card-outline card-primary">
    <div class="card-header text-center">
        <a href="../../index2.html" class="h1"><b>RESET PASSWORD</b></a>
    </div>
    <div class="card-body">
        <form action="recover-password.html" method="post">
            <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Request new password</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <br>
        <p class="mt-3 mb-1">
            <a href="<?= base_url('/') ?>">Login</a>
        </p>
    </div>
    <!-- /.login-card-body -->
</div>