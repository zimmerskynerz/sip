<br>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Identitas Pemohon</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nm_lengkap" value="<?= $data_identitas['nm_lengkap'] ?>" name="nm_lengkap" placeholder="Nama Lengkap Dengan Gelar" readonly>
                                <input type="text" class="form-control" id="id_user" value="<?= $data_identitas['id_user'] ?>" hidden name="id_user" placeholder="Nama Lengkap Dengan Gelar" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <select type="text" class="form-control" id="jekel" name="jekel" placeholder="Nama Lengkap" readonly>
                                    <option value="<?= $data_identitas['jekel'] ?>">
                                        <?php if ($data_identitas['jekel'] == 'L') :
                                            echo 'Laki-laki';
                                        else :
                                            echo 'Perempuan';
                                        endif; ?>

                                    </option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">TTL</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" value="<?= $data_identitas['tmp_lahir'] ?>" id="tmp_lahir" name="tmp_lahir" placeholder="Tempat Lahir" readonly>
                            </div>
                            <div class="col-sm-5">
                                <input type="date" class="form-control" value="<?= $data_identitas['tgl_lahir'] ?>" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <select type="text" class="form-control" id="agama" name="agama" placeholder="Nama Lengkap" readonly>
                                    <option value="<?= $data_identitas['jekel'] ?>">
                                        <?php if ($data_identitas['agama'] == 'Islam') :
                                            echo 'Islam';
                                        elseif ($data_identitas['agama'] == 'Katholik') :
                                            echo 'Katholik';
                                        elseif ($data_identitas['agama'] == 'Protestan') :
                                            echo 'Protestan';
                                        elseif ($data_identitas['agama'] == 'Hindu') :
                                            echo 'Hindu';
                                        elseif ($data_identitas['agama'] == 'Budha') :
                                            echo 'Budha';
                                        else :
                                            echo 'Konghucu';
                                        endif; ?>
                                    </option>
                                    <option value="Islam">Islam</option>
                                    <option value="Katholik">Katholik</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat Rumah</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Lengkap Rumah" readonly><?= $data_identitas['alamat'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor HP Pribadi</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" value="<?= $data_identitas['no_hp'] ?>" id="no_hp" name="no_hp" placeholder="Nomor Telepon Pribadi" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                            <div class="col-sm-10">
                                <select type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" placeholder="Nama Lengkap" readonly>
                                    <option value="<?= $data_identitas['pendidikan_terakhir'] ?>">
                                        <?php if ($data_identitas['pendidikan_terakhir'] == 'S1') :
                                            echo 'STRATA SATU (S1)';
                                        elseif ($data_identitas['pendidikan_terakhir'] == 'S2') :
                                            echo 'STRATA DUA (S2)';
                                        else :
                                            echo 'STRATA TIGA (S3)';
                                        endif; ?>
                                    </option>
                                    <option value="S1">STRATA SATU (S1)</option>
                                    <option value="S2">STRATA DUA (S2)</option>
                                    <option value="S3">STRATA TIGA (S3)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Universitas</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="universitas" value="<?= $data_identitas['universitas'] ?>" name="universitas" placeholder="Nama Universitas" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Tahun Lulus</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="tahun" value="<?= $data_identitas['tahun'] ?>" name="tahun" placeholder="Tahun Lulus" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Berkas Pemohon</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">Foto</th>
                                    <th style="text-align: center;">Ijazah</th>
                                    <th style="text-align: center;">KTP</th>
                                    <th style="text-align: center;">STR Legalisir</th>
                                    <th style="text-align: center;">Surat Pernyataan</th>
                                    <th style="text-align: center;">Surat Persetujuan</th>
                                    <th style="text-align: center;">BPJS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img class="avatar zoom" src="<?= base_url('assets/') ?>berkas/<?= $data_berkas['foto'] ?>" width="25%" alt="avatar"></td>
                                    <td><img class="avatar zoom" src="<?= base_url('assets/') ?>berkas/<?= $data_berkas['ijazah'] ?>" width="25%" alt="avatar"></td>
                                    <td><img class="avatar zoom" src="<?= base_url('assets/') ?>berkas/<?= $data_berkas['ktp'] ?>" width="25%" alt="avatar"></td>
                                    <td><img class="avatar zoom" src="<?= base_url('assets/') ?>berkas/<?= $data_berkas['str_legalisir'] ?>" width="25%" alt="avatar"></td>
                                    <td><img class="avatar zoom" src="<?= base_url('assets/') ?>berkas/<?= $data_berkas['s_pernyataan'] ?>" width="25%" alt="avatar"></td>
                                    <td><img class="avatar zoom" src="<?= base_url('assets/') ?>berkas/<?= $data_berkas['s_persetujuan'] ?>" width="25%" alt="avatar"></td>
                                    <td><img class="avatar zoom" src="<?= base_url('assets/') ?>berkas/<?= $data_berkas['bpjs'] ?>" width="25%" alt="avatar"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Biodata Izin Praktik</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <?php echo form_open_multipart('admin/pemohon_rekomendasi/crudpemohon'); ?>
                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Praktik</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?= $data_identitas['nm_kantor'] ?>" id="nm_kantor" name="nm_kantor" placeholder="Nama Kantor, Mis. Kimia Farma" readonly>
                                <input type="text" class="form-control" hidden value="<?= $data_rekomendasi['id_rekomendasi'] ?>" id="id_rekomendasi" name="id_rekomendasi" placeholder="Nama Kantor, Mis. Kimia Farma" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat Praktik</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" id="alamat_praktik" name="alamat_praktik" placeholder="Alamat Lengkap Praktik" readonly><?= $data_identitas['alamat_praktik'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor HP Praktik</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" value="<?= $data_identitas['no_kantor'] ?>" id="no_kantor" name="no_kantor" placeholder="Nomor Telepon Kantor" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori Dokter</label>
                            <div class="col-sm-10">
                                <select type="text" class="form-control" id="id_kategori" name="id_kategori" placeholder="Nama Lengkap" readonly>
                                    <option value="<?= $data_rekomendasi['id_kategori'] ?>"><?= $data_rekomendasi['singkatan'] ?> - <?= $data_rekomendasi['nm_kategori'] ?></option>
                                    <?php foreach ($data_kategori as $Data_kategori) : ?>
                                        <option value="<?= $Data_kategori->id_kategori ?>"><?= $Data_kategori->singkatan ?> - <?= $Data_kategori->nm_kategori ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor STR</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" value="<?= $data_rekomendasi['no_str'] ?>" id="no_str" name="no_str" placeholder="Nomor Surat Tanda Registrasi" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Berakhir STR</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_berakhir_str" value="<?= $data_rekomendasi['tgl_berakhir_str'] ?>" name="tgl_berakhir_str" placeholder="Nomor Telepon Pribadi" readonly>
                                <input type="text" class="form-control" id="id_user" value="<?= $data_identitas['id_user'] ?>" hidden name="id_user" placeholder="Nama Lengkap Dengan Gelar" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Status Pengajuan</label>
                            <div class="col-sm-10">
                                <select type="text" class="form-control" id="status_pengjauan" onchange="showDiv2(this)" name="status_pengjauan" placeholder="Nama Lengkap" required>
                                    <option value="1">Diterima</option>
                                    <option value="2">Ditolak</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row" id="select_id_prodi2">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Alasan</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" id="alasan" name="alasan" placeholder="Alasan Ditolak"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <?php if ($data_rekomendasi['status_rekomendasi'] == 'P_KONFIRMASI') : ?>
                            <button type="submit" id="terimaKasiRekomendasiPerpanjang" name="terimaKasiRekomendasiPerpanjang" class="btn btn-primary float-right">Simpan Rekomendasi</button>
                        <?php else : ?>
                            <button type="submit" id="terimaKasiRekomendasi" name="terimaKasiRekomendasi" class="btn btn-primary float-right">Simpan Rekomendasi</button>
                        <?php endif; ?>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <?php echo form_close(); ?>
            </div>
            <!-- /.col -->
        </div>
        <!-- ./row -->
    </div><!-- /.container-fluid -->
</section>
<script>
    $("#select_id_prodi2").hide();

    function showDiv2(select) {
        if (select.value == 1) {
            $("#select_id_prodi2").hide();
        } else {
            $("#select_id_prodi2").show();
        }
    }
</script>