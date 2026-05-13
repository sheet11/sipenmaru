<?php
    include "01_nav.php";
    error_reporting(0); 
    require_once("../config/koneksi.php");

    // Fungsi pembantu untuk menghitung jumlah berdasarkan kondisi
    // Menggunakan COUNT(*) lebih cepat dari pada mysqli_num_rows
    function getCount($kon, $kondisi) {
        $query = mysqli_query($kon, "SELECT COUNT(*) as total FROM tb_formulir5 WHERE $kondisi");
        if($query) {
            $data = mysqli_fetch_assoc($query);
            return $data['total'];
        }
        return 0;
    }

    // Daftar Program Studi (mudah untuk ditambah/diubah ke depannya)
    $prodi_list = [
        "RPL Sarjana Terapan Gizi",
        "RPL Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners",
        "RPL Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan",
        "Pendidikan Profesi Ners",
        "Pendidikan Profesi Bidan"
    ];
?>

<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">  
            <div class="row">
                <div class="col-md-12">  
                    <h2>Jenis Kelamin</h2>
                </div>
            </div>              
            <table class="table table-bordered">
                <tr style="text-align:center">
                    <th rowspan="2" width="2%">No</th>
                    <th rowspan="2">Program Studi</th>
                    <th colspan="2">Jenis Kelamin</th>
                </tr>
                <tr>
                    <th>Laki-Laki</th>
                    <th>Perempuan</th>
                </tr>

                <!-- Baris Pendaftar -->
                <tr>
                    <td>-</td>
                    <td><b>Pendaftar</b></td>
                    <td><b><?php echo getCount($kon, "(status='Sudah Membayar' OR status='Terdaftar') AND jenis_kelamin='Laki-Laki' AND tahun_pendaftaran='2026'"); ?></b></td>
                    <td><b><?php echo getCount($kon, "(status='Sudah Membayar' OR status='Terdaftar') AND jenis_kelamin='Perempuan' AND tahun_pendaftaran='2026'"); ?></b></td>
                </tr>

                <!-- Baris untuk masing-masing Program Studi -->
                <?php 
                $no = 1;
                foreach ($prodi_list as $prodi): 
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $prodi; ?></td>
                    <td><?php echo getCount($kon, "pilihan_prodi='$prodi' AND jenis_kelamin='Laki-Laki' AND tahun_pendaftaran='2026'"); ?></td>
                    <td><?php echo getCount($kon, "pilihan_prodi='$prodi' AND jenis_kelamin='Perempuan' AND tahun_pendaftaran='2026'"); ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </section>
</aside>
