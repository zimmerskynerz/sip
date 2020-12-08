<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SELAMAT DATANG ADMIN</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/') ?>dist/img/logo_icon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/adminlte.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style>
        [class*=sidebar-light-] .nav-sidebar>.nav-item.menu-open>.nav-link,
        [class*=sidebar-light-] .nav-sidebar>.nav-item:hover>.nav-link {
            background-color: #007bff;
            color: #fff;
        }
    </style>
    <style>
        hr {
            border: none;
            height: 3px;
            /* Set the hr color */
            color: #333;
            /* old IE */
            background-color: #333;
            /* Modern Browsers */
        }
    </style>
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/toastr/toastr.min.css">
    <script src="<?= base_url('assets/') ?>plugins/notif/custom_notif.js"></script>
    <style>
        .sidebar.toggled .nav-item .collapse {
            position: relative;
            padding-left: 1rem;
            left: 0;
            z-index: 1;
            top: 0;
        }

        .sidebar.toggled {
            width: 60vw !important;
            transition: all .3s ease-in-out;
            -webkit-transition: all .3s ease-in-out;
        }
    </style>
    <style>
        .responsive img {
            max-width: 50%;
            align-content: center;
            /*width:100%;*/
            height: auto;
        }
    </style>
    <style>
        .avatar {
            vertical-align: top;
            width: 126px;
            margin-right: 6px;
        }
    </style>
</head>