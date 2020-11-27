<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('halaman_utama/include/head') ?>

<body class="hold-transition <?= $page ?> ">
    <div class="<?= $box ?>">
        <!-- /.login-logo -->
        <?php $this->load->view('halaman_utama/' . $halaman . '') ?>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <?php $this->load->view('halaman_utama/include/footer') ?>

</body>

</html>