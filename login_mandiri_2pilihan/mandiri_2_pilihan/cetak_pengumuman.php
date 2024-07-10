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
    date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
    // echo date('h:i:s a'); // menampilkan jam sekarang
    // echo date('l, d-m-Y  H:i:s'); //kombinasi jam dan tanggal
    
    if($a['status_lulus'] == "Lulus") {
?>
<html>
	<body>

		  <table width="100%" border="0"  align="center">
		  <tr>
			<td><img src="../assets/img_kop/logobaru.png" width="100%"/></td>

		  </tr>
		</table>

        <table align="center">
          <!--<tr>-->
          <!--    <td rowspan=18 width=164 valign="top"><a href="../assets/img/<?php echo $a['nama_foto'];?>" class="fancy">-->
          <!--    <img src="../assets/img/<?php echo $a['nama_foto'];?>" alt="" width=150 height=175 border="0" /></td>-->
          <!--</tr>-->
        <br>
        <br>

          <tr>
            <td valign="top">Jalur</td>
            <td valign="top">:</td>
            <td>MANDIRI 2 PILIHAN GEL II</td>
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
            <td valign="top">Prodi</td>
            <td valign="top">:</td>
            <td><?php echo $a['prodi_lulus']; ?></td>
          </tr>
          
          <tr>
            <td colspan="4"><?php echo bar128 (stripslashes($a['username'])); ?></td>
          </tr>
          
          <!--  <tr>-->
          <!--  <td colspan="4"><?php echo date('l, d-m-Y  H:i:s'); ?></td>-->
          <!--</tr>-->
</table>
<br>
<br>
<table align="center">
    <tr>
        <td>
            <h3>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Selamat anda dinyatakan:</h3>
        </td>
    </tr>
    <tr>
        <td>
            <h1>LULUS SIMAMI GELOMBANG II TAHAP I</h1>
        </td>
    </tr>
</table>

</body>
</html>


<p style="text-align: center;"><strong><span style="text-decoration: underline;">PENGUMUMAN</span></strong></p>
<p><strong>&nbsp;</strong></p>
<p><strong>&nbsp; &nbsp; &nbsp; &nbsp;Peserta yang&nbsp; dinyatakan LULUS Seleksi Jalur Sipenmaru Mandiri (SIMAMI) Gelombang II Tahap I</strong><strong>&nbsp;diwajibkan mengikuti tahapan :</strong></p>
<ol>
<li><strong>Uji Kesehatan dan Wawancara </strong>dilaksanakan pada hari <strong>Rabu</strong>, tanggal <strong>10 Juli 2024 pukul 08.00 WIB- 12.00 WIB.</strong></li>
</ol>
<ol start="2">
<li>Berkas yang dikumpulkan meliputi :
<ol>
<li>Bukti Kelulusan Tahap I Jalur Sipenmaru Mandiri (SIMAMI) Gelombang II</li>
<li>Bukti Pembayaran Uji Kesehatan Rp 000 (Seratus Lima Puluh Ribu Rupiah)</li>
<li>Foto Hitam Putih 3x4 1 (satu) buah</li>
<li>Membawa Ijazah/Surat Keterangan Lulus (SKL)</li>
</ol>
</li>
</ol>
<ol start="3">
<li>Peserta berpakaian sopan (celana berbahan dasar, kemeja berkancing depan), memakai sepatu dan rambut rapi (untuk yang laki-laki dan perempuan yang tidak mengenakan hijab).</li>
</ol>
<ol start="4">
<li>Tempat pelaksanaan uji kesehatan dan wawancara di Klinik Hygea Poltekkes Kemenkes Bengkulu<em>.</em><strong>Biaya uji kesehatan </strong>sebesar <strong>Rp. 150.000,- (Seratus Lima Puluh Ribu Rupiah) </strong>dapat disetor ke Teller BANK MUAMALAT dengan No Rekening 4320666666 atas nama RPL 016 POLTEKKES UNTUK OPS yang tersedia di Poltekkes Kemenkes Bengkulu.</li>
</ol>
<ol start="5">
<li><strong>Wawancara WAJIB </strong>dihadiri oleh calon mahasiswa yang didampingi oleh salah <strong>satu Orang Tua/Wali.</strong></li>
</ol>
<ol start="6">
<li>Apabila sampai dengan tanggal <strong>10 Juli 2024 </strong>calon mahasiswa <strong>tidak mengikuti Uji Kesehatan dan Wawancara maka Peserta dinyatakan <u>GUGUR</u>.</strong></li>
<li><strong>Pengumuman</strong><strong> KELULUSAN TAHAP II </strong>dapat dilihat di website <a href="https://poltekkesbengkulu.ac.id/">https://poltekkesbengkulu.ac.id/</a> pada tanggal <strong>11 Juli 2024.</strong></li>
</ol>
<script>
  window.print();
</script>
<?php } elseif ($a['status_lulus'] == 'Tidak Lulus') { 
echo "<br><br><br><h1 style= text-align:center >Maaf Anda Belum Lulus SIMAMI tahap I <br><br>Silahkan coba lagi di periode selanjutnya.....</a> </h1><br><a href='index.php'>Kembali </a>";
 }else{
 header("location:../index.php");
 }
 ?>

/*<style>*/
/*h1 {text-align: center;}*/
/*p {text-align: center;}*/
/*div {text-align: center;}*/
/*</style>*/
