<div class="modal fade" id="cetak_laporan" tabindex="-1" role="dialog" aria-labelledby="cetak_laporanLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cetak_laporanLabel">Cetak Laporan Pengajuan SIP!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('kepala_dinas/cetak_laporan'); ?>
                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
                <div class="form-group mb-4">
                    <label for="tgl_mulai">Bulan Laporan</label>
                    <select name="bulan" id="bulan" class="form-control" required>
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label for="tgl_mulai">Tahun Laporan</label>
                    <select name="tahun" id="tahun" class="form-control" required>
                        <?php
                        $mulai = date('Y') - 50;
                        for ($i = $mulai; $i < $mulai + 100; $i++) {
                            $sel = $i == date('Y') ? ' selected="selected"' : '';
                            echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Keluar</button>
                <button type="submit" class="btn btn-primary" id="cetak_lapor" name="cetak_lapor"> Cetak</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>