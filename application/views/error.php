<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Lockscreen</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/adminlte.min.css">
</head>

<body class="hold-transition lockscreen">
    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper">
        <div class="lockscreen-logo">
            <a href="<?= base_url('assets/') ?>index2.html"><b>ERROR</b> 404</a>
        </div>
        <!-- User name -->
        <div class="lockscreen-name">ZimmerSkyNerz</div>

        <!-- START LOCK SCREEN ITEM -->
        <div class="lockscreen-item">
            <!-- lockscreen image -->
            <div class="lockscreen-image">
                <img src="<?= base_url('assets/') ?>dist/img/user1-128x128.jpg" alt="User Image">
            </div>
            <!-- /.lockscreen-image -->

            <!-- lockscreen credentials (contains the form) -->
            <form class="lockscreen-credentials" action="<?= base_url('login') ?>">
                <div class="input-group">
                    <span>Kembali Ke Menu Utama</span>
                    <div class="input-group-append">
                        <button type="submit" class="btn" style="right: 1px; position:absolute">
                            <i class="fas fa-arrow-right text-muted"></i>
                        </button>
                    </div>
                </div>
            </form>
            <!-- /.lockscreen credentials -->

        </div>
        <!-- /.lockscreen-item -->
        <div class="help-block text-center">
            Selamat Anda Menemukan Tampilan Mati Kami
        </div>
        <div class="text-center">
            silahkan untuk kembali ke <a href="<?= base_url('login') ?>">menu utama</a>
        </div>
        <div class="lockscreen-footer text-center">
            Copyright &copy; <?= date('Y') ?> <b><a href="<?= base_url('login') ?>" class="text-black">201753080</a></b><br>
            All rights reserved
        </div>
    </div>
    <!-- /.center -->

    <!-- jQuery -->
    <script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>