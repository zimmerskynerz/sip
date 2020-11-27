<div class="modal fade" id="ubah_berkas" tabindex="-1" role="dialog" aria-labelledby="ubah_berkasLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ubah_berkasLabel">Ubah Berkas!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('pemohon/perijinan/perbarui_data'); ?>
                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
                <div class="form-group mb-4">
                    <label>Foto Berwarna</label>
                    <input type="file" class="form-control" id="foto" name="foto" placeholder="Foto Berwarna" required>
                    <small>* Tahun Lahir Genap BG Merah; Tahun Lahir Ganjil BG Biru</small>
                    <input type="text" class="form-control" value="<?= $id_user ?>" hidden id="id_user" name="id_user" required placeholder="Nama Kategori, Mis. Dokter Gigi" required>
                </div>
                <div class="form-group mb-4">
                    <label>Scan Ijazah Terakhir</label>
                    <input type="file" class="form-control" id="ijazah" name="ijazah" placeholder="Scan Ijazah Terakhir" required>
                    <small>* Dalam Bentuk Jpeg, jpg, png</small>
                </div>
                <div class="form-group mb-4">
                    <label>Scan E-KTP</label>
                    <input type="file" class="form-control" id="ktp" name="ktp" placeholder="Scan E-KTP" required>
                    <small>* Dalam Bentuk Jpeg, jpg, png</small>
                </div>
                <div class="form-group mb-4">
                    <label>Scan STR Aktif</label>
                    <input type="file" class="form-control" id="str_legalisir" name="str_legalisir" placeholder="Scan STR Aktif" required>
                    <small>* Dalam Bentuk Jpeg, jpg, png</small>
                </div>
                <div class="form-group mb-4">
                    <label>Surat Pernyataan Tempat Praktik</label>
                    <input type="file" class="form-control" id="s_pernyataan" name="s_pernyataan" placeholder="Surat Pernyataan Tempat Praktik" required>
                    <small>* Dalam Bentuk Jpeg, jpg, png</small>
                </div>
                <div class="form-group mb-4">
                    <label>Surat Persetujuan Atasan</label>
                    <input type="file" class="form-control" id="s_persetujuan" name="s_persetujuan" placeholder="Surat Persetujuan Atasan" required>
                    <small>* Dalam Bentuk Jpeg, jpg, png</small>
                </div>
                <div class="form-group mb-4">
                    <label>Scan Kartu BPJS</label>
                    <input type="file" class="form-control" id="bpjs" name="bpjs" placeholder="Scan Kartu BPJS" required>
                    <small>* Dalam Bentuk Jpeg, jpg, png</small>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Keluar</button>
                <button type="submit" class="btn btn-primary" id="ubahBerkas" name="ubahBerkas"> Simpan</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>