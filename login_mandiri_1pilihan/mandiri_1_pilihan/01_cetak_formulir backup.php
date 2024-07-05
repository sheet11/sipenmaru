<?php
	include "session.php";
?>

<?php
	include"../config/koneksi.php";
	include("bar128.php");
	include("library.php");
	include("fucnt_tgl.php");
	
		
	$query=mysqli_query($kon,"select * from tb_formulir4 where username='$_SESSION[username]' ");
	$a=mysqli_fetch_array($query);
	$tanggal = tgl_indo($a['tanggal_lahir']);
  $tanggalujian = tgl_indo($a['tanggal_ujian']);
?>
<html>
	<body>

		  <table width="100%" border="0"  align="center">
		  <tr>
			<td width="101" height="102"><img src="../assets/img_kop/logo-kemenkes.png" width="150" height="100"/></td>
			<td width="601" align="center"><strong><h4>Seleksi Penerimaan Mahasiswa Baru (SIPENMARU)</br>PENDIDIKAN TENAGA KESEHATAN <br>Poltekkes Kemenkes Bengkulu Tahun 2024/2025</h4></strong></td>
			<td width="109" align="center"><img src="../assets/img_kop/logo.png" width="100" height="100"/></td>
		  </tr>
		  <tr>
			<td colspan="3"><hr></hr></td>
		  </tr>
		</table>

        <table >
          <tr>
              <td rowspan=18 width=164 valign="top"><a href="../assets/img/<?php echo $a['nama_foto'];?>" class="fancy">
              <img src="../assets/img/<?php echo $a['nama_foto'];?>" alt="" width=150 height=175 border="0" /></td>
          </tr>

          <tr>
            <td valign="top">Jalur</td>
            <td valign="top">:</td>
            <td><?php echo $a['level']; ?></td>
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
            <td valign="top">Tanggal Ujian</td>
            <td valign="top">:</td>
            <td><?php echo "$tanggalujian" ?></td>
          </tr>

          <tr>
            <td valign="top">Tempat Ujian</td>
            <td valign="top">:</td>
            <td><?php echo $a['tempat_ujian']; ?></td>
          </tr>

          <tr>
            <td valign="top">Ruang Ujian</td>
            <td valign="top">:</td>
            <td><?php echo $a['ruang_ujian']; ?></td>
          </tr>

          <tr>
            <td valign="top">Sesi Ujian</td>
            <td valign="top">:</td>
            <td><?php echo $a['sesi_ujian']; ?></td>
          </tr>

          <tr>
            <td colspan="4"><?php echo bar128 (stripslashes($a['username'])); ?></td>
          </tr>

</table>
  
<table width="100%" border="0" align="center">
   
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