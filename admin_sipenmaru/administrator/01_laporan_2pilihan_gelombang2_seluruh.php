<?php
include "01_nav.php";
require_once("../config/koneksi.php");
error_reporting(0);

// List of all prodi
// Fetch prodi from tb_prodi where aktif = 2
$prodis = [];
$result = mysqli_query($kon, "SELECT nama_prodi FROM tb_prodi WHERE aktif = 2");
while ($row = mysqli_fetch_assoc($result)) {
    $prodis[] = $row['nama_prodi'];
}

// Helper function
function get_count($where)
{
    global $kon;
    $sql = "SELECT COUNT(*) as jumlah FROM tb_formulir4 WHERE $where";
    $res = mysqli_query($kon, $sql);
    $row = mysqli_fetch_assoc($res);
    return $row['jumlah'];
}
?>

<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">
            <div class="row">
                <div class="col-md-12">
                    <h2>Laporan 2 Pilihan Keseluruhan</h2>
                    <h5>Welcome <?php echo $_SESSION['nama_lengkap']; ?></h5>
                </div>
            </div>
            <hr />

            <table class="table table-bordered">
                <tr>
                    <td colspan="3"><b>Jumlah Pendaftar</b></td>
                </tr>
                <tr>
                    <td>Jumlah Pendaftar</td>
                    <td>:</td>
                    <td><?php echo get_count("status IN ('Sudah Membayar', 'Terdaftar')"); ?></td>
                </tr>

                <tr>
                    <td colspan="3"><b>Jumlah Pendaftar Sebagai pilihan Prodi 1</b></td>
                </tr>
                <?php foreach ($prodis as $prodi): ?>
                    <tr>
                        <td>Jumlah Pendaftar Prodi <?php echo $prodi; ?></td>
                        <td>:</td>
                        <td><?php echo get_count("pilihan_prodi='$prodi' AND status IN ('Sudah Membayar', 'Terdaftar')"); ?></td>
                    </tr>
                <?php endforeach; ?>

                <tr>
                    <td colspan="3"><b>Jumlah Pendaftar Sebagai pilihan Prodi 2</b></td>
                </tr>
                <?php foreach ($prodis as $prodi): ?>
                    <tr>
                        <td>Jumlah Pendaftar Prodi <?php echo $prodi; ?></td>
                        <td>:</td>
                        <td><?php echo get_count("pilihan_prodi2='$prodi' AND status IN ('Sudah Membayar', 'Terdaftar')"); ?></td>
                    </tr>
                <?php endforeach; ?>

                <tr>
                    <td colspan="3"><b>Jumlah Pendaftar yang memilih prodi sama</b></td>
                </tr>
                <?php foreach ($prodis as $prodi): ?>
                    <tr>
                        <td>Jumlah Pendaftar Prodi <?php echo $prodi; ?></td>
                        <td>:</td>
                        <td><?php echo get_count("pilihan_prodi='$prodi' AND pilihan_prodi2='$prodi' AND status IN ('Sudah Membayar', 'Terdaftar')"); ?></td>
                    </tr>
                <?php endforeach; ?>

                <tr>
                    <td colspan="3"><strong>Jenis Kelamin</strong></td>
                </tr>
                <tr>
                    <td>Laki-Laki</td>
                    <td>:</td>
                    <td><?php echo get_count("jenis_kelamin='Laki-Laki' AND status IN ('Sudah Membayar', 'Terdaftar')"); ?></td>
                </tr>
                <?php foreach ($prodis as $prodi): ?>
                    <tr>
                        <td>Jenis Kelamin Laki-laki Prodi <?php echo $prodi; ?></td>
                        <td>:</td>
                        <td><?php echo get_count("pilihan_prodi='$prodi' AND jenis_kelamin='Laki-Laki' AND status IN ('Sudah Membayar', 'Terdaftar')"); ?></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td>Perempuan</td>
                    <td>:</td>
                    <td><?php echo get_count("jenis_kelamin='Perempuan' AND status IN ('Sudah Membayar', 'Terdaftar')"); ?></td>
                </tr>
                <?php foreach ($prodis as $prodi): ?>
                    <tr>
                        <td>Jenis Kelamin Perempuan Prodi <?php echo $prodi; ?></td>
                        <td>:</td>
                        <td><?php echo get_count("pilihan_prodi='$prodi' AND jenis_kelamin='Perempuan' AND status IN ('Sudah Membayar', 'Terdaftar')"); ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </section>
</aside>