<?php $this->load->view('pemohon/perijinan/notif') ?>
<br>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Daftar Permohonan</h3>
            <?php if ($cek_sip == 0) : ?>
              <a type="button" style="position: absolute; right:12px; top:5px" class="btn btn-primary" href="<?= base_url('pemohon/perijinan/ajukan_baru') ?>"><i class="fas fa-plus-circle"></i> Tambah</a>
            <?php endif; ?>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th style="text-align: center;">No</th>
                  <th style="text-align: center;">Nama Dokter</th>
                  <th style="text-align: center;">Nama Kantor</th>
                  <th style="text-align: center;">Nomor Rekomendasi</th>
                  <th style="text-align: center;">Nomor STR</th>
                  <th style="text-align: center;">Masa Berlaku STR</th>
                  <th style="text-align: center;">Komentar</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php foreach ($data_baru as $Data_baru) : ?>
                  <tr>
                    <td style="text-align: center;"><?= $no ?></td>
                    <td><?= $Data_baru->nm_lengkap ?></td>
                    <td><?= $Data_baru->nm_kantor ?></td>
                    <td>00<?= $Data_baru->id_rekomendasi ?>/SR.<?= $Data_baru->singkatan ?>/<?= date('Y', strtotime($Data_baru->tgl_daftar)) ?>/KUDUS-JT12</td>
                    <td><?= $Data_baru->no_str ?></td>
                    <td><?= date('d F Y', strtotime($Data_baru->tgl_berakhir_str)) ?></td>
                    <td>
                      <?php
                      if ($Data_baru->id_rekomendasi == $cek_komentar['id_rekomendasi']) :
                        if ($cek_komentar['status_pengajuan'] == 'TERIMA') :
                          echo 'Diterima';
                        else :
                          $cek_komentar['ket_lain'];
                        endif;;
                      else :
                        echo 'Menunggu Konfirmasi';
                      endif;
                      ?>
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