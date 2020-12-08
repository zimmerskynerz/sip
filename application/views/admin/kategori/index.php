<?php $this->load->view('kasi/kategori/notif') ?>
<br>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Kategori</h3>
                        <a type="button" style="position: absolute; right:12px; top:5px" class="btn btn-primary" data-toggle="modal" data-target="#tambah_kategori"><i class="fas fa-plus-circle"></i> Tambah</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Kategori</th>
                                    <th class="text-center">Singkatan</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($kategori as $Kategori) : ?>
                                    <tr>
                                        <td class="text-center"><?= $no ?></td>
                                        <td><?= $Kategori->nm_kategori ?></td>
                                        <td class="text-center"><?= $Kategori->singkatan ?></td>
                                        <td class="text-center">
                                            <a id="detail_kategori" href="javascript:void(0);" class="bs-tooltip" data-toggle="modal" data-target="#kategori_detail" data-placement="top" title="" data-original-title="Detail" data-id_kategori="<?= $Kategori->id_kategori ?>" data-nm_kategori="<?= $Kategori->nm_kategori ?>" data-singkatan="<?= $Kategori->singkatan ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                </svg>
                                            </a>
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
<?php $this->load->view('kasi/kategori/tambah_kategori') ?>
<?php $this->load->view('kasi/kategori/detail_kategori') ?>