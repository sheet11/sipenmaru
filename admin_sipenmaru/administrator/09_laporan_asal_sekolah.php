<?php
    include"01_nav.php";
    error_reporting(0); 
    require_once("../config/koneksi.php");
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
                        <tr style="align:center">
                            <th rowspan="2" width="2%">No</th><th rowspan="2">Program Studi</th><th colspan="3">Asal Sekolah</th>
                        </tr>

                        <tr>
                            <th>SMA/MA/MA</th><th>SMK/MAK/MAK</th><th>Paket C</th>
                        </tr>

                        <?php
                        $prodi_list = [
                            "Pendaftar",
                            "D3 Kebidanan Bengkulu",
                            "D3 Kebidanan Curup",
                            "D3 Keperawatan Bengkulu",
                            "D3 Keperawatan Curup",
                            "D3 Teknologi Laboratorium Medis",
                            "D3 Sanitasi",
                            "D3 Gizi",
                            "D3 Farmasi",
                            "Sarjana Terapan Gizi",
                            "Sarjana Terapan Promosi Kesehatan",
                            "Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners",
                            "Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners (Kelas Internasional)",
                            "Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan"
                        ];

                        $sekolah_list = ["sma", "smk"];
                        $no_prodi = 1;

                        foreach ($prodi_list as $prodi) {
                            $no_tampil = ($prodi === "Pendaftar") ? 1 : $no_prodi++;
                            echo "<tr>";
                            echo "<td>{$no_tampil}</td><td>{$prodi}</td>";

                            foreach ($sekolah_list as $sekolah) {
                                if ($prodi === "Pendaftar") {
                                    $query = mysqli_query($kon,"SELECT * FROM tb_formulir3 where status='Sudah Membayar' and asal_sekolah='{$sekolah}'");
                                } else {
                                    $query = mysqli_query($kon,"SELECT * FROM tb_formulir3 where pilihan_prodi='{$prodi}' and asal_sekolah='{$sekolah}'");
                                }
                                echo "<td>" . mysqli_num_rows($query) . "</td>";
                            }
                            echo "</tr>";
                        }
                        ?>
                    </table>
        </div>   

           