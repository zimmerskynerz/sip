<br>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php echo form_open_multipart('pemohon/perijinan/crudpengajuan'); ?>
                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
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
                                <input type="text" class="form-control" id="nm_lengkap" name="nm_lengkap" placeholder="Nama Lengkap Dengan Gelar" required>
                                <input type="text" class="form-control" id="id_user" value="<?= $id_user ?>" hidden name="id_user" placeholder="Nama Lengkap Dengan Gelar" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <select type="text" class="form-control" id="jekel" name="jekel" placeholder="Nama Lengkap" required>
                                    <option>Pilih Jenis Kelamin</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">TTL</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" placeholder="Tempat Lahir" required>
                            </div>
                            <div class="col-sm-5">
                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <select type="text" class="form-control" id="agama" name="agama" placeholder="Nama Lengkap" required>
                                    <option>Pilih Agama</option>
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
                                <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Lengkap Rumah" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor HP Pribadi</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor Telepon Pribadi" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                            <div class="col-sm-10">
                                <select type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" placeholder="Nama Lengkap" required>
                                    <option>Pilih Pendidikan Terakhir</option>
                                    <option value="S1">STRATA SATU (S1)</option>
                                    <option value="S2">STRATA DUA (S2)</option>
                                    <option value="S3">STRATA TIGA (S3)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Universitas</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="universitas" name="universitas" placeholder="Nama Universitas" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Tahun Lulus</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="tahun" name="tahun" placeholder="Tahun Lulus" required>
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
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Foto Berwarna</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="foto" name="foto" placeholder="Foto Berwarna" required>
                                <small>* Tahun Lahir Genap BG Merah; Tahun Lahir Ganjil BG Biru</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Scan Ijazah Terakhir</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="ijazah" name="ijazah" placeholder="Scan Ijazah Terakhir" required>
                                <small>* Dalam Bentuk Jpeg, jpg, png</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Scan E-KTP</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="ktp" name="ktp" placeholder="Scan E-KTP" required>
                                <small>* Dalam Bentuk Jpeg, jpg, png</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Scan STR Aktif</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="str_legalisir" name="str_legalisir" placeholder="Scan STR Aktif" required>
                                <small>* Dalam Bentuk Jpeg, jpg, png</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Surat Pernyataan Tempat Praktik</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="s_pernyataan" name="s_pernyataan" placeholder="Surat Pernyataan Tempat Praktik" required>
                                <small>* Dalam Bentuk Jpeg, jpg, png</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Surat Persetujuan Atasan</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="s_persetujuan" name="s_persetujuan" placeholder="Surat Persetujuan Atasan" required>
                                <small>* Dalam Bentuk Jpeg, jpg, png</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Scan Kartu BPJS</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="bpjs" name="bpjs" placeholder="Scan Kartu BPJS" required>
                                <small>* Dalam Bentuk Jpeg, jpg, png</small>
                            </div>
                        </div>
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
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Praktik</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nm_kantor" name="nm_kantor" placeholder="Nama Kantor, Mis. Kimia Farma" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat Praktik</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" id="alamat_praktik" name="alamat_praktik" placeholder="Alamat Lengkap Praktik" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor HP Praktik</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="no_kantor" name="no_kantor" placeholder="Nomor Telepon Kantor" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori Dokter</label>
                            <div class="col-sm-10">
                                <select type="text" class="form-control" id="id_kategori" name="id_kategori" placeholder="Nama Lengkap" required>
                                    <option>Pilih Kategori Dokter</option>
                                    <?php foreach ($data_kategori as $Data_kategori) : ?>
                                        <option value="<?= $Data_kategori->id_kategori ?>"><?= $Data_kategori->singkatan ?> - <?= $Data_kategori->nm_kategori ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor STR</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="no_str" name="no_str" placeholder="Nomor Surat Tanda Registrasi" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Berakhir STR</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_berakhir_str" name="tgl_berakhir_str" placeholder="Nomor Telepon Pribadi" required>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" id="kirimBaru" name="kirimBaru" class="btn btn-primary float-right">Kirim Permohonan</button>
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