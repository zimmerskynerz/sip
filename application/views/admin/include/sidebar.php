<aside class="main-sidebar elevation-4 sidebar-light-primary">
    <!-- Brand Logo -->
    <a href="<?= base_url('admin') ?>" class="brand-link navbar-primary">
        <img src="<?= base_url('assets/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light" style="color: aliceblue;"><b>ADMIN</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url('admin/beranda') ?>" class="nav-link <?php echo $this->uri->segment(2) == 'beranda' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Beranda
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/kategori_dokter') ?>" class="nav-link <?php echo $this->uri->segment(2) == 'kategori_dokter' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-stethoscope"></i>
                        <p>
                            Kategori Dokter
                        </p>
                    </a>
                </li>
                <li class="nav-item <?php echo $this->uri->segment(2) == 'perijinan' ? 'menu-open' : '' ?>">
                    <a class="nav-link">
                        <i class="nav-icon fas fa-notes-medical"></i>
                        <p>
                            Permohonan
                            <i class="fas fa-angle-right right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/perijinan/terima') ?>" class="nav-link <?php echo $this->uri->segment(3) == 'terima' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Diterima</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/perijinan/tolak') ?>" class="nav-link <?php echo $this->uri->segment(3) == 'tolak' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ditolak</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('login/logout') ?>" class="nav-link ">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>