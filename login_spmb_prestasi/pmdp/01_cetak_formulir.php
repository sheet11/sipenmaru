<?php
	include "session.php";
?>

<?php
	include "../config/koneksi.php";
	include("library.php");
	include("fucnt_tgl.php");
	
		
	$query=mysqli_query($kon,"select * from tb_formulir3 where username='$_SESSION[username]' ");
	$a=mysqli_fetch_array($query);
	$tanggal = tgl_indo($a['tanggal_lahir']);
?>
<html>
	<body>

		  <table width="100%" border="0"  align="center">
		  <tr>
			<td><img src="../assets/img_app/logo3.png" width="180" height="100"/></td>
			<td width="601" align="center"><strong><h4>Seleksi Penerimaan Mahasiswa Baru (SPMB) Jalur Prestasi</br>PENDIDIKAN TENAGA KESEHATAN <br>Poltekkes Kemenkes Bengkulu Tahun 2025/2026</h4></strong></td>
		  </tr>
		  <tr>
			<td colspan="3"><hr></hr></td>
		  </tr>
		</table>

        <table >
          <tr>
              <td rowspan=14 width=164 valign="top"><a href="../assets/img/<?php echo $a['nama_foto'];?>" class="fancy">
              <img src="../assets/img/<?php echo $a['nama_foto'];?>" alt="" width=150 height=175 border="0" /></td>
          </tr>

          <tr>
            <td valign="top">Jalur</td>
            <td valign="top">:</td>
            <td>SPMB Prestasi</td>
          </tr>

          <tr>
              <td valign="top"  width="200">ID/Nomor Kartu Ujian</td>
              <td valign="top">:</td>
              <td><?php echo $a['username']; ?></td>
          </tr>

          <tr>
            <td valign="top">Nama</td>
            <td valign="top">:</td>
            <td><?php echo $a['nama_lengkap']; ?></td>
          </tr>

          <tr>
            <td valign="top">Jenis Kelamin</td>
            <td valign="top">:</td>
            <td><?php echo $a['jenis_kelamin']; ?></td>
          </tr>

          <tr>
            <td valign="top">Agama</td>
            <td valign="top">:</td valign="top">
            <td><?php echo $a['agama']; ?></td>
          </tr>

          <tr>
            <td valign="top">No Handphone</td>
            <td valign="top">:</td><td><?php echo $a['no_hp']; ?></td>
          </tr>

          <tr>
            <td valign="top">Tempat Lahir</td>
            <td valign="top">:</td>
            <td><?php echo $a['tempat_lahir']; ?></td>
          </tr>

          <tr>
            <td valign="top">Tanggal Lahir</td>
            <td valign="top">:</td>
            <td><?php echo "$tanggal" ?></td>
          </tr>
          <tr>
            <td valign="top">Pilihan Prodi </td><td valign="top">:</td>
            <td><?php echo $a['pilihan_prodi']; ?></td>
          </tr>

          <tr>
            <td valign="top">Alamat</td>
            <td valign="top">:</td>
            <td><?php echo $a['alamat']; ?></td>
          </tr>

          <tr>
            <td valign="top">Asal Sekolah</td>
            <td valign="top">:</td>
            <td><?php echo $a['asal_sekolah']; ?></td>
          </tr>
          <tr>
            <td valign="top">Daerah Asal</td>
            <td valign="top">:</td>
            <td><?php echo $a['daerah_asal']; ?></td>
          </tr>

          <tr>
            <td colspan="4"></td>
          </tr>

</table>
  
<table width="100%" border="0" align="center">


    <tr>
       <td colspan="3">&nbsp;</td>
    </tr>

    <tr>
       <td colspan="3">&nbsp;</td>
    </tr>

    <tr>
       <td colspan="3">&nbsp;</td>
    </tr>

    <tr>
       <td colspan="3">&nbsp;</td>
    </tr>



    <tr>
       <td colspan="3"><hr></hr></td>
    </tr>
    <tr>
       <td colspan=2>Hal- hal yang Harus diperhatikan</td><td align="center"><strong></strong></td>
    </tr>
  	<tr>
        <td align='justify' valign='top'><strong>1. </strong></td>
        <td align='justify'><strong>Jangan percaya pada pihak manapun yang menawarkan kelulusan dengan memberikan sejumlah uang atau imbalan</strong></td>
   	</tr>

</body>
</html>
<script>
  window.print();
</script>