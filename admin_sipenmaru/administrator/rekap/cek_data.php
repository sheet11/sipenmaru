<!-- <?php include "../../config/koneksi.php" ?> -->
<p>&nbsp;</p>
<h3 align='center'>tabel rekap pendaftar yg sudah membayar</h3>
<table >
    <tbody>
        <tr>
            <td rowspan="3">No.</td>
            <td rowspan="3">Jalur Pendaftaran</td>
            <td rowspan="3">Jumlah Pendaftar</td>
            <td colspan="2">Jenis Kelamin</td>
            <td colspan="2">Asal Sekolah</td>
            <td colspan="2">Status Sekolah</td>
            <td colspan="2">Asal Daerah</td>
            <td colspan="5">Pekerjaan Orang Tua</td>
            <td colspan="8">Pendidikan Orang Tua</td>
            <td colspan="3">Penghasilan Orang Tua&nbsp;</td>
        </tr>
        <tr>
            <td rowspan="2">L</td>
            <td rowspan="2">P</td>
            <td rowspan="2">SMA</td>
            <td rowspan="2">SMK</td>
            <td rowspan="2">Negeri</td>
            <td rowspan="2">Swasta</td>
            <td rowspan="2">Luar kota</td>
            <td rowspan="2">dalam kota</td>
            <td rowspan="2">PNS</td>
            <td rowspan="2">Swasta</td>
            <td rowspan="2">Buruh</td>
            <td rowspan="2">Tani</td>
            <td rowspan="2">Nelayan</td>
            <td colspan="4">Ayah</td>
            <td colspan="4">Ibu</td>
            <td rowspan="2">&lt; 2.700.000</td>
            <td rowspan="2">2.700.000-5.000.000</td>
            <td rowspan="2">&gt;5.000.000</td>
        </tr>
        <tr>
            <td>SD</td>
            <td>SMP</td>
            <td>SMA</td>
            <td>PT</td>
            <td>SD</td>
            <td>SMP</td>
            <td>SMA</td>
            <td>PT</td>
        </tr>
        <tr>
            <td>1</td>
            <td>PMDP</td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Sudah Membayar' ");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Sudah Membayar' AND jenis_kelamin='Laki-Laki'");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Sudah Membayar' AND jenis_kelamin='Perempuan'");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Sudah Membayar' AND asal_sekolah='SMA/MA'");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Sudah Membayar' AND asal_sekolah='SMK/MAK'");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
            <td></td>
            <td></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Sudah Membayar' AND keterangan_sekolah='Luar Kota Bengkulu'");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Sudah Membayar' AND keterangan_sekolah='Dalam Kota Bengkulu'");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Sudah Membayar' AND pekerjaan_orang_tua='PNS'");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Sudah Membayar' AND pekerjaan_orang_tua='Swasta'");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Sudah Membayar' AND pekerjaan_orang_tua='Buruh'");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Sudah Membayar' AND pekerjaan_orang_tua='Wiraswasta'");
                $jumlah1= mysqli_num_rows ($query);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Sudah Membayar' AND pekerjaan_orang_tua='Tani'");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Sudah Membayar' AND pekerjaan_orang_tua='Nelayan'");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Sudah Membayar' AND penghasilan_orang_tua='2000000'");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Sudah Membayar' AND penghasilan_orang_tua='5000000'");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Sudah Membayar' AND penghasilan_orang_tua='5000000'");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td>SIMAMA</td>
            <td>1770</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>3</td>  
            <td>SIMAMI</td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Sudah Membayar' ");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Sudah Membayar' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Sudah Membayar' and jenis_kelamin='Laki-laki' ");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Sudah Membayar' and jenis_kelamin='Laki-laki' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Sudah Membayar' and jenis_kelamin='Perempuan' ");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Sudah Membayar' and jenis_kelamin='Perempuan' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Sudah Membayar' and asal_sekolah='SMA/MA'");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Sudah Membayar' and asal_sekolah='SMA/MA' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Sudah Membayar' and asal_sekolah='SMK/MAK'");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Sudah Membayar' and asal_sekolah='SMK/MAK' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td></td>
            <td></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Sudah Membayar' and keterangan_sekolah='Luar Kota Bengkulu'");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Sudah Membayar' and keterangan_sekolah='Luar Kota Bengkulu' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Sudah Membayar' and keterangan_sekolah='Dalam Kota Bengkulu'");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Sudah Membayar' and keterangan_sekolah='Dalam Kota Bengkulu' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Sudah Membayar' and pekerjaan_orang_tua='PNS/TNI/POLRI'");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Sudah Membayar' and pekerjaan_orang_tua='PNS/TNI/POLRI' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Sudah Membayar' and pekerjaan_orang_tua='Swasta'");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Sudah Membayar' and pekerjaan_orang_tua='Swasta' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Sudah Membayar' and pekerjaan_orang_tua='Swasta'");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query3 = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Sudah Membayar' and pekerjaan_orang_tua='Wiraswasta'");
                $jumlah3= mysqli_num_rows ($query3);?>
                <?php require_once("../../config/koneksi.php");
                $query2 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Sudah Membayar' and pekerjaan_orang_tua='Wiraswasta'");
                $jumlah2= mysqli_num_rows ($query2);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Sudah Membayar' and pekerjaan_orang_tua='Swasta' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1+$jumlah2+$jumlah3; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Sudah Membayar' and pekerjaan_orang_tua='Tani'");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Sudah Membayar' and pekerjaan_orang_tua='Tani' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Sudah Membayar' and pekerjaan_orang_tua='Nelayan'");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Sudah Membayar' and pekerjaan_orang_tua='Nelayan' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Sudah Membayar' and penghasilan_orang_tua='2000000'");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Sudah Membayar' and penghasilan_orang_tua='2000000' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Sudah Membayar' and penghasilan_orang_tua='5000000'");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Sudah Membayar' and penghasilan_orang_tua='5000000' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Sudah Membayar' and penghasilan_orang_tua='7000000'");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Sudah Membayar' and penghasilan_orang_tua='7000000' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
        </tr>
    </tbody>
</table>

<h3 align='center'>tabel rekap pendaftar yg mendaftar</h3>
<table >
    <tbody>
        <tr>
            <td rowspan="3">No.</td>
            <td rowspan="3">Jalur Pendaftaran</td>
            <td rowspan="3">Jumlah Pendaftar</td>
            <td colspan="2">Jenis Kelamin</td>
            <td colspan="2">Asal Sekolah</td>
            <td colspan="2">Status Sekolah</td>
            <td colspan="2">Asal Daerah</td>
            <td colspan="5">Pekerjaan Orang Tua</td>
            <td colspan="8">Pendidikan Orang Tua</td>
            <td colspan="3">Penghasilan Orang Tua&nbsp;</td>
        </tr>
        <tr>
            <td rowspan="2">L</td>
            <td rowspan="2">P</td>
            <td rowspan="2">SMA</td>
            <td rowspan="2">SMK</td>
            <td rowspan="2">Negeri</td>
            <td rowspan="2">Swasta</td>
            <td rowspan="2">Luar kota</td>
            <td rowspan="2">dalam kota</td>
            <td rowspan="2">PNS</td>
            <td rowspan="2">Swasta</td>
            <td rowspan="2">Buruh</td>
            <td rowspan="2">Tani</td>
            <td rowspan="2">Nelayan</td>
            <td colspan="4">Ayah</td>
            <td colspan="4">Ibu</td>
            <td rowspan="2">&lt; 2.700.000</td>
            <td rowspan="2">2.700.000-5.000.000</td>
            <td rowspan="2">&gt;5.000.000</td>
        </tr>
        <tr>
            <td>SD</td>
            <td>SMP</td>
            <td>SMA</td>
            <td>PT</td>
            <td>SD</td>
            <td>SMP</td>
            <td>SMA</td>
            <td>PT</td>
        </tr>
        <tr>
            <td>1</td>
            <td>PMDP</td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Terdaftar' ");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Terdaftar' AND jenis_kelamin='Laki-Laki'");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Terdaftar' AND jenis_kelamin='Perempuan'");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Terdaftar' AND asal_sekolah='SMA/MA'");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Terdaftar' AND asal_sekolah='SMK/MAK'");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
            <td></td>
            <td></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Terdaftar' AND keterangan_sekolah='Luar Kota Bengkulu'");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Terdaftar' AND keterangan_sekolah='Dalam Kota Bengkulu'");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Terdaftar' AND pekerjaan_orang_tua='PNS'");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Terdaftar' AND pekerjaan_orang_tua='Swasta'");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Terdaftar' AND pekerjaan_orang_tua='Buruh'");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Terdaftar' AND pekerjaan_orang_tua='Wiraswasta'");
                $jumlah1= mysqli_num_rows ($query);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Terdaftar' AND pekerjaan_orang_tua='Tani'");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Terdaftar' AND pekerjaan_orang_tua='Nelayan'");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Terdaftar' AND penghasilan_orang_tua='2000000'");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Terdaftar' AND penghasilan_orang_tua='5000000'");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir3 where status='Terdaftar' AND penghasilan_orang_tua='5000000'");
                $jumlah= mysqli_num_rows ($query);?><?php echo $jumlah; ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td>SIMAMA</td>
            <td>1770</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>3</td>  
            <td>SIMAMI</td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Terdaftar' ");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Terdaftar' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Terdaftar' and jenis_kelamin='Laki-laki' ");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Terdaftar' and jenis_kelamin='Laki-laki' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Terdaftar' and jenis_kelamin='Perempuan' ");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Terdaftar' and jenis_kelamin='Perempuan' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Terdaftar' and asal_sekolah='SMA/MA'");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Terdaftar' and asal_sekolah='SMA/MA' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Terdaftar' and asal_sekolah='SMK/MAK'");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Terdaftar' and asal_sekolah='SMK/MAK' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td></td>
            <td></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Terdaftar' and keterangan_sekolah='Luar Kota Bengkulu'");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Terdaftar' and keterangan_sekolah='Luar Kota Bengkulu' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Terdaftar' and keterangan_sekolah='Dalam Kota Bengkulu'");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Terdaftar' and keterangan_sekolah='Dalam Kota Bengkulu' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Terdaftar' and pekerjaan_orang_tua='PNS/TNI/POLRI'");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Terdaftar' and pekerjaan_orang_tua='PNS/TNI/POLRI' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Terdaftar' and pekerjaan_orang_tua='Swasta'");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Terdaftar' and pekerjaan_orang_tua='Swasta' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Terdaftar' and pekerjaan_orang_tua='Swasta'");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query3 = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Terdaftar' and pekerjaan_orang_tua='Wiraswasta'");
                $jumlah3= mysqli_num_rows ($query3);?>
                <?php require_once("../../config/koneksi.php");
                $query2 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Terdaftar' and pekerjaan_orang_tua='Wiraswasta'");
                $jumlah2= mysqli_num_rows ($query2);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Terdaftar' and pekerjaan_orang_tua='Swasta' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1+$jumlah2+$jumlah3; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Terdaftar' and pekerjaan_orang_tua='Tani'");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Terdaftar' and pekerjaan_orang_tua='Tani' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Terdaftar' and pekerjaan_orang_tua='Nelayan'");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Terdaftar' and pekerjaan_orang_tua='Nelayan' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Terdaftar' and penghasilan_orang_tua='2000000'");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Terdaftar' and penghasilan_orang_tua='2000000' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Terdaftar' and penghasilan_orang_tua='5000000'");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Terdaftar' and penghasilan_orang_tua='5000000' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
            <td><?php require_once("../../config/koneksi.php");
                $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Terdaftar' and penghasilan_orang_tua='7000000'");
                $jumlah= mysqli_num_rows ($query);?>
                <?php require_once("../../config/koneksi.php");
                $query1 = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Terdaftar' and penghasilan_orang_tua='7000000' ");
                $jumlah1= mysqli_num_rows ($query1);?>
                <?php echo $jumlah+$jumlah1; ?></td>
        </tr>
    </tbody>
</table>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #aaaa;
  text-align: left;
  padding: 8px;
}


</style>