<?php
    include "01_nav.php";
    error_reporting(0); 
    require_once("../config/koneksi.php");

    // Fungsi pembantu untuk menghitung jumlah berdasarkan kondisi
    // Menggunakan COUNT(*) lebih cepat dari pada mysqli_num_rows
    function getCount($kon, $kondisi) {
        $query = mysqli_query($kon, "SELECT COUNT(*) as total FROM tb_formulir4 WHERE $kondisi");
        if($query) {
            $data = mysqli_fetch_assoc($query);
            return $data['total'];
        }
        return 0;
    }

    // Daftar Program Studi (mudah untuk ditambah/diubah ke depannya)
    $keterangan_list = [
        "Dalam Kota Bengkulu",
        "Luar Kota Bengkulu",
        "Luar Provinsi Bengkulu"
    ];
?>

<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">  
            <div class="row">
                <div class="col-md-12">  
                    <h5>Keterangan Asal Sekolah</h5>
                </div>
            </div>              
            <table class="table table-bordered">
                <tr style="text-align:center">
                    <th rowspan="2" width="2%">No</th>
                    <th rowspan="2">Keterangan Asal Sekolah</th>
                    <th colspan="2">Pendaftar</th>
                </tr>
                <tr style="text-align:center">
                    <th>Dalam Kota Bengkulu</th>
                    <th>Luar Kota Bengkulu</th>
                    <th>Luar Provinsi Bengkulu</th>
                </tr>

                <!-- Baris Pendaftar -->
                <tr>
                    <td>-</td>
                    <td><b>Pendaftar</b></td>
                    <td><b><?php echo getCount($kon, "(status='Sudah Membayar' OR status='Terdaftar') AND asal_sekolah = 'Dalam Kota Bengkulu' AND tahun_pendaftaran='2026'"); ?></b></td>
                    <td><b><?php echo getCount($kon, "(status='Sudah Membayar' OR status='Terdaftar') AND asal_sekolah = 'Luar Kota Bengkulu' AND tahun_pendaftaran='2026'"); ?></b></td>
                    <td><b><?php echo getCount($kon, "(status='Sudah Membayar' OR status='Terdaftar') AND asal_sekolah = 'Luar Provinsi Bengkulu' AND tahun_pendaftaran='2026'"); ?></b></td>
                </tr>

                <!-- Baris untuk masing-masing Program Studi -->
                <?php 
                $no = 1;
                foreach ($keterangan_list as $keterangan): 
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $keterangan   ; ?></td>
                    <td><?php echo getCount($kon, "asal_sekolah='$keterangan' AND tahun_pendaftaran='2026'"); ?></td>
                    <td><?php echo getCount($kon, "asal_sekolah='$keterangan' AND tahun_pendaftaran='2026'"); ?></td>
                    <td><?php echo getCount($kon, "asal_sekolah='$keterangan' AND tahun_pendaftaran='2026'"); ?></td>   
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </section>
</aside>
