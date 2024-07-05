<?php
  include "session.php";
  include"../config/koneksi.php";
  include("bar128.php");
  include("library.php");
  include("fucnt_tgl.php");
  
    
  $query=mysqli_query($kon,"select * from tb_formulir5 where username='$_SESSION[username]' ");
   $a=mysqli_fetch_array($query);
  $tanggal = tgl_indo($a['tanggal_lahir']);
?>
<html>
  <body>
        <table align="center" border="1" width="100%">
          <tr>
              <td rowspan=13 width=164 valign="top"><a href="../assets/img/<?php echo $a['nama_foto'];?>" class="fancy">
              <img src="../assets/img/<?php echo $a['nama_foto'];?>" alt="" width=150 height=175 border="0" /></td>
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
            <td><?php echo $a['tanggal_lahir']; ?></td>
          </tr>
          <tr>
            <td valign="top">Pilihan Prodi 1</td><td valign="top">:</td>
            <td><?php echo $a['pilihan_prodi']; ?></td>
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

</table>
  
