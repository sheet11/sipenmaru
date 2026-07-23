<?php
    include "01_nav.php";
    error_reporting(0); 
    require_once("../config/koneksi.php");

    // Fungsi pembantu untuk menghitung jumlah berdasarkan kondisi
    function getCount($kon, $kondisi) {
        $query = mysqli_query($kon, "SELECT COUNT(*) as total FROM tb_formulir5 WHERE $kondisi");
        if($query) {
            $data = mysqli_fetch_assoc($query);
            return $data['total'];
        }
        return 0;
    }

    // Ambil list prodi dari tb_prodi dengan aktif = 3
    $prodi_list = [];
    $query_prodi = mysqli_query($kon, "SELECT nama_prodi FROM tb_prodi WHERE aktif='3' ORDER BY id_prodi ASC");
    if ($query_prodi) {
        while ($row_prodi = mysqli_fetch_assoc($query_prodi)) {
            $prodi_list[] = $row_prodi['nama_prodi'];
        }
    }
?>

<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">  
            <div class="row">
                <div class="col-md-12">  
                    <h5>Jenis Sekolah Asal</h5>
                </div>
            </div>              
            <table class="table table-bordered">
                <tr style="text-align:center">
                    <th rowspan="2" width="2%">No</th>
                    <th rowspan="2">Program Studi</th>
                    <th colspan="4">Asal Sekolah</th>
                    <th colspan="2">Jenis Kelamin</th>
                </tr>
                <tr style="text-align:center">
                    <th>SMA/MA</th>
                    <th>SMK/MAK</th>
                    <th>D3</th>
                    <th>D4</th>
                    <th>Laki-Laki</th>
                    <th>Perempuan</th>
                </tr>

                <!-- Baris Pendaftar -->
                <tr>
                    <td>-</td>
                    <td><b>Pendaftar</b></td>
                    <td><b><?php echo getCount($kon, "(status='Sudah Membayar' OR status='Terdaftar') AND (asal_sekolah='sma' OR asal_sekolah='SMA/MA')"); ?></b></td>
                    <td><b><?php echo getCount($kon, "(status='Sudah Membayar' OR status='Terdaftar') AND (asal_sekolah='smk' OR asal_sekolah='SMK/MAK')"); ?></b></td>
                    <td><b><?php echo getCount($kon, "(status='Sudah Membayar' OR status='Terdaftar') AND asal_sekolah='D3'"); ?></b></td>
                    <td><b><?php echo getCount($kon, "(status='Sudah Membayar' OR status='Terdaftar') AND asal_sekolah='D4'"); ?></b></td>
                    <td><b><?php echo getCount($kon, "(status='Sudah Membayar' OR status='Terdaftar') AND jenis_kelamin='Laki-Laki'"); ?></b></td>
                    <td><b><?php echo getCount($kon, "(status='Sudah Membayar' OR status='Terdaftar') AND jenis_kelamin='Perempuan'"); ?></b></td>
                </tr>

                <!-- Baris untuk masing-masing Program Studi -->
                <?php 
                $no = 1;
                foreach ($prodi_list as $prodi): 
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $prodi; ?></td>
                    <td><?php echo getCount($kon, "pilihan_prodi='$prodi' AND (asal_sekolah='sma' OR asal_sekolah='SMA/MA')"); ?></td>
                    <td><?php echo getCount($kon, "pilihan_prodi='$prodi' AND (asal_sekolah='smk' OR asal_sekolah='SMK/MAK')"); ?></td>
                    <td><?php echo getCount($kon, "pilihan_prodi='$prodi' AND asal_sekolah='D3'"); ?></td>
                    <td><?php echo getCount($kon, "pilihan_prodi='$prodi' AND asal_sekolah='D4'"); ?></td>
                    <td><?php echo getCount($kon, "pilihan_prodi='$prodi' AND jenis_kelamin='Laki-Laki'"); ?></td>
                    <td><?php echo getCount($kon, "pilihan_prodi='$prodi' AND jenis_kelamin='Perempuan'"); ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </section>
</aside>