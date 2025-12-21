<?php 
    include "01_nav.php";
    error_reporting(0);
    include "../config/koneksi.php"; 

    // Ambil data user (satu baris)
    $data = mysqli_fetch_array(mysqli_query($kon, 
        "SELECT * FROM tb_formulir3 WHERE username='$_SESSION[username]'"
    ));
?>

<div id="page-wrapper">
    <div id="page-inner">
        <h2>Selamat Datang</h2>   
        <h5>Di Halaman Seleksi Informasi Pendaftaran Mahasiswa Baru Online</h5>
        <hr>

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

            <tbody>
                <tr>
                    <td>1</td>
                    <td><?= $data['username'] ?></td>
                    <td><?= $data['nama_lengkap'] ?></td>

                    <td>
                        <?php if($data['rekomendasi_sekolah'] == null){ ?>
                            <span class="btn btn-sm btn-danger"><b>Belum Lengkap</b></span>
                        <?php } else { ?>
                            <a href="surat/<?= $data['rekomendasi_sekolah'] ?>" 
                               target="_blank" 
                               class="btn btn-sm btn-success">
                               Sudah Lengkap
                            </a>
                        <?php } ?>
                    </td>

                    <td>
                        <a href="06_edituploadrekomendasi.php?id_formulir=<?= $data['id_formulir'] ?>" 
                           class="btn btn-info">
                           <b>Upload</b>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>

        <table>
            <tr>
                <td>
                    <b>Catatan:</b><br>
                    1. Klik Tombol Upload Untuk Melengkapi Data<br>
                    2. Gunakan Contoh Surat atau Format Surat Dari Sekolah<br><br>

                    <!-- TOMBOL DOWNLOAD DI SINI -->
                        <a href="contoh_surat_rekomendasi_sekola/FORMAT SURAT REKOMENDASI KEPALA SEKOLAH.docx" 
                           download 
                           class="btn btn-primary">
                            Download Surat Rekomendasi Sekolah
                        </a>
                    <?php ?>
                </td>
            </tr>
        </table>

    </div>
</div>
