<div class="modal fade" id="sip_detail" tabindex="-1" role="dialog" aria-labelledby="sip_detailLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sip_detailLabel">Validasi Surat Izin Praktik!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
            <div class="modal-body" id="detail_body">
                <?php echo form_open_multipart('kabid/validasi/crudvalidasi'); ?>
                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
                <div class="form-group mb-4">
                    <label for="">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nm_lengkap" name="nm_lengkap" required placeholder="Nama Kategori, Mis. Dokter Gigi" readonly>
                    <input type="text" class="form-control" id="id_sip" name="id_sip" hidden required placeholder="Nama Kategori, Mis. Dokter Gigi">
                </div>
                <div class="form-group mb-4">
                    <label for="">Nomor STR</label>
                    <input type="text" class="form-control" id="no_str" name="no_str" required placeholder="Singkatan, Mis. DG" readonly>
                </div>
                <div class="form-group mb-4">
                    <label for="">Nomor Rekomendasi</label>
                    <input type="text" class="form-control" id="no_rekomendasi" name="no_rekomendasi" required placeholder="Singkatan, Mis. DG" readonly>
                    <input type="text" class="form-control" id="status_validasi" name="status_validasi" required placeholder="Singkatan, Mis. DG" readonly hidden>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Keluar</button>
                <button type="submit" class="btn btn-primary" id="validasiSip" name="validasiSip">Validasi</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).on("click", "#detail_sip", function() {
        var id_sip = $(this).data('id_sip');
        var nm_lengkap = $(this).data('nm_lengkap');
        var no_str = $(this).data('no_str');
        var no_rekomendasi = $(this).data('no_rekomendasi');
        var status_validasi = $(this).data('status_validasi');
        $(".modal-body#detail_body #id_sip").val(id_sip);
        $(".modal-body#detail_body #nm_lengkap").val(nm_lengkap);
        $(".modal-body#detail_body #no_str").val(no_str);
        $(".modal-body#detail_body #no_rekomendasi").val(no_rekomendasi);
        $(".modal-body#detail_body #status_validasi").val(status_validasi);
    })
</script>