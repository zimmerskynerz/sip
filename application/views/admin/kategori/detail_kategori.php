<div class="modal fade" id="kategori_detail" tabindex="-1" role="dialog" aria-labelledby="kategori_detailLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kategori_detailLabel">Detail Kategori Dokter!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
            <div class="modal-body" id="detail_body">
                <?php echo form_open_multipart('admin/kategori_dokter/crudkategori'); ?>
                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
                <div class="form-group mb-4">
                    <input type="text" class="form-control" id="nm_kategori" name="nm_kategori" required placeholder="Nama Kategori, Mis. Dokter Gigi">
                    <input type="text" class="form-control" id="id_kategori" name="id_kategori" hidden required placeholder="Nama Kategori, Mis. Dokter Gigi">
                </div>
                <div class="form-group mb-4">
                    <input type="text" class="form-control" id="singkatan" name="singkatan" required placeholder="Singkatan, Mis. DG">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Keluar</button>
                <button type="submit" class="btn btn-warning" id="hapusKategori" name="hapusKategori">Hapus</button>
                <button type="submit" class="btn btn-primary" id="ubahKategori" name="ubahKategori">Ubah</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).on("click", "#detail_kategori", function() {
        var id_kategori = $(this).data('id_kategori');
        var nm_kategori = $(this).data('nm_kategori');
        var singkatan = $(this).data('singkatan');
        $(".modal-body#detail_body #id_kategori").val(id_kategori);
        $(".modal-body#detail_body #nm_kategori").val(nm_kategori);
        $(".modal-body#detail_body #singkatan").val(singkatan);
    })
</script>