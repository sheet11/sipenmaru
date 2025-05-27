<?php
include "01_nav.php";
error_reporting(0);
require_once("../config/koneksi.php");
?>

<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">
            <div class="row">
                <div class="col-md-12">
                    <h2>Laporan 1 Pilihan Jalur Mandiri Keseluruhan</h2>
                    <h5>Welcome <?php echo $_SESSION['nama_lengkap']; ?></h5>
                </div>
            </div>
            <hr />

            <table class="table table-bordered">
                <tr>
                    <td><b>Jumlah Pendaftar</b></td>
                    <td> :</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Jumlah Pendaftar</td>
                    <td> :</td>
                    <td>
                        <?php
                        $query = mysqli_query($kon, "SELECT COUNT(*) as jumlah FROM tb_formulir5 WHERE status IN ('Sudah Membayar', 'Terdaftar')");
                        $jumlah = mysqli_fetch_assoc($query)['jumlah'];
                        echo $jumlah;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"><b>Pilihan Prodi</b></td>
                </tr>
                <?php
                // Ambil daftar prodi aktif=3 dari tb_prodi
                $prodis = [];
                $query_prodi = mysqli_query($kon, "SELECT nama_prodi FROM tb_prodi WHERE aktif='3'");
                while ($row = mysqli_fetch_assoc($query_prodi)) {
                    $prodis[] = $row['nama_prodi'];
                }
                foreach ($prodis as $prodi) {
                    $query = mysqli_query($kon, "SELECT COUNT(*) as jumlah FROM tb_formulir5 WHERE pilihan_prodi='$prodi' AND status IN ('Sudah Membayar', 'Terdaftar')");
                    $jumlah = mysqli_fetch_assoc($query)['jumlah'];
                    echo "<tr>
                        <td>Jumlah Pendaftar Prodi $prodi</td> <td> :</td> <td>$jumlah</td>
                    </tr>";
                }
                ?>
                <tr>
                    <td><b>Jenis Kelamin</b></td>
                    <td> :</td>
                    <td></td>
                </tr>
                <?php
                $genders = ["Laki-Laki", "Perempuan"];
                // Total per gender
                foreach ($genders as $gender) {
                    $query = mysqli_query($kon, "SELECT COUNT(*) as jumlah FROM tb_formulir5 WHERE jenis_kelamin='$gender' AND status IN ('Sudah Membayar', 'Terdaftar')");
                    $jumlah = mysqli_fetch_assoc($query)['jumlah'];
                    echo "<tr>
                        <td>$gender</td> <td> :</td> <td>$jumlah</td>
                    </tr>";
                }
                // Per prodi per gender
                foreach ($genders as $gender) {
                    foreach ($prodis as $prodi) {
                        $query = mysqli_query($kon, "SELECT COUNT(*) as jumlah FROM tb_formulir5 WHERE pilihan_prodi='$prodi' AND jenis_kelamin='$gender' AND status IN ('Sudah Membayar', 'Terdaftar')");
                        $jumlah = mysqli_fetch_assoc($query)['jumlah'];
                        echo "<tr>
                            <td>Jenis Kelamin $gender Prodi $prodi</td> <td> :</td> <td>$jumlah</td>
                        </tr>";
                    }
                }
                ?>
            </table>
        </div>
    </section>
</aside>