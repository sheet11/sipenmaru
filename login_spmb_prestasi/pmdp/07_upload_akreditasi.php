<?php 
    include"01_nav.php";
    error_reporting(0);
    include "../config/koneksi.php"; 
?>

<!-- POPUP PERINGATAN -->
<div class="modal fade" id="popupPeringatan" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-content">

      <div class="modal-header bg-warning">
        <h3 style="color: #d9534f; margin-top: 0;">
            <i class="fa fa-exclamation-triangle"></i> Perhatian Penting!
        </h3>
      </div>

      <div class="modal-body">
        <p><b>Catatan:</b></p>
        <ol>
            <li>Catatan Untuk Akre Sekolah Bisa Diminta Ke Sekolah Masing-Masing</li>
        </ol>

        <!-- Link tujuan upload akan dimasukkan dari tombol Upload -->
        <input type="hidden" id="uploadLink">
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <a id="btnLanjutUpload" href="#" class="btn btn-primary">Lanjut Upload</a>
      </div>

    </div>
  </div>
</div>

<script>
function showPeringatan(linkTujuan) {
    // Simpan link halaman upload
    document.getElementById('btnLanjutUpload').setAttribute('href', linkTujuan);
    // Tampilkan popup
    $('#popupPeringatan').modal('show');
}
</script>


<div id="page-wrapper">
    <div id="page-inner">
        <h2>Sertifikat Akreditasi Sekolah</h2>
        <hr>

        <div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="info">
                        <th width="5%">No.</th>
                        <th>ID</th>
                        <th>Nama Lengkap</th>
                        <th>Rekomendasi</th>
                        <th width="10%">Aksi</th>
                    </tr>
                </thead>

            <?php 
                $query = mysqli_query($kon,"SELECT * FROM tb_formulir3 WHERE username='$_SESSION[username]'");
                $i = 1;

                while($a = mysqli_fetch_array($query)){
            ?>

                <tr>
                    <td><?= $i ?></td>
                    <td><?= $a['username'] ?></td>
                    <td><?= $a['nama_lengkap'] ?></td>

                    <td>
                        <?php if($a['sertifikat_akreditasi'] == null){ ?>
                            <a class="btn btn-sm btn-danger"><b>Belum Lengkap</b></a>
                        <?php } else { ?>
                            <a href="surat/<?= $a['sertifikat_akreditasi'] ?>" 
                               class="btn btn-sm btn-success" target="_blank">
                               <b>Sudah Lengkap</b>
                            </a>
                        <?php } ?>
                    </td>

                    <td>
                        <!-- Tombol Upload yang memicu popup -->
                        <a onclick="showPeringatan('07_edituploadakreditasi.php?id_formulir=<?= $a['id_formulir'] ?>')" 
                           class="btn btn-info" style="cursor:pointer;">
                           <b>Upload</b>
                        </a>
                    </td>
                </tr>

            <?php 
                $i++;
                } 
            ?>

            </table>

            <!-- CATATAN BIASA DI BAWAH TABEL -->
            <table>
                <tr>
                    <td>
                        <b>Catatan</b><br>
                        1. Klik Tombol Semester Untuk Melengkapi Data<br>
                        2. Catatan Untuk Akre Sekolah Akre Sekolah Bisa Diminta Ke Sekolah Masing-Masing<br>
                    </td>
                </tr>
            </table>

        </div>
    </div>
</div>
