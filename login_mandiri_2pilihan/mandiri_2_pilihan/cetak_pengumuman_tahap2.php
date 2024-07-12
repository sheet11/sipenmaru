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
    
    if($a['status_kelulusan_2'] == "Lulus") {
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
            <h1>LULUS SIMAMI GELOMBANG II TAHAP II</h1>
        </td>
    </tr>
</table>
<p style="text-align: center;line-height: 1.5;"><strong><u>INFORMASI PERSYARATAN REGISTRASI SIMAMI &nbsp;GELOMBANG II TAHAP II POLTEKKES KEMENKES BENGKULU TAHUN AKADEMIK 2024/2025</u></strong></p>
<p style="text-align: justify;line-height: 1.5;">Peserta yang dinyatakan LULUS Sipenmaru Tahap II (Uji Kesehatan dan Wawancara) Jalur Seleksi &nbsp;Mandiri (SIMAMI) Gelombang II diwajibkan untuk melakukan <strong>REGISTRASI</strong><strong> (PEMBAYARAN DAN PENGUMPULAN BERKAS)</strong> pada tanggal <strong>11 - 12 Juli 2024 </strong>dengan melengkapi persyaratan administrasi sebagai berikut :</p>
<ol style="list-style-type: upper-alpha;line-height: 1.5;">
<li><strong>Persyaratan Administrasi Keuangan </strong>
<ol>
<li style="text-align: justify;">Pembayaran Biaya Pendidikan Uang Kuliah Tunggal (UKT) yang jumlahnya sesuai dengan Program Studi melalui <strong>Rekening Bank MUAMALAT No. Rekening 4320666666 an. RPL 016 BLU POLTEKKES UNTUK OPS </strong>(dapat diakses melalui link <a href="http://bit.ly/UKT_Mahasiswa">http://bit.ly/UKT_Mahasiswa</a>). Pembayaran difasilitasi di Kampus A Poltekkes Kemenkes Bengkulu.</li>
<li style="text-align: justify;">Pembayaran Biaya Seragam dan Alat Kesehatan yang jumlahnya sesuai dengan Program Studi melalui <strong>Bank Syariah Indonesia (BSI) Cabang Bengkulu No. Rekening 7776655830 an. KPN POLITEKNIK KESEHATAN.</strong> (dapat diakses melalui link <a href="http://bit.ly/biaya_seragam_dan_alatkes">http://bit.ly/biaya_seragam_dan_alatkes</a>).</li>
<li style="text-align: justify;">Pembayaran Sumbangan Sukarela Pembangunan Masjid Tarbiyatush Shihhah melalui Rekening <strong>Bank Syariah Indonesia (BSI) Cabang Bengkulu No. Rekening 4362324040 an. MASJID TARBIYATUSH SHIHHAH. </strong></li>
<li style="text-align: justify;">Pembayaran Iuran Kegiatan Organisasi Mahasiswa Poltekkes Kemenkes Bengkulu sebesar <strong>Rp 300.000,</strong>- (tiga ratus ribu rupiah) dan dana dibayarkan 1 kali selama menempuh pendidikan melalui <strong>Bank Tabungan Negara (BTN) No. Rekening 00037-01-50-050725-4 an. ORMAWA POLTEKKES KEMENKES BENGKULU.</strong></li>
<li><strong>UANG YANG TELAH DISETOR TIDAK DAPAT DITARIK/DIKEMBALIKAN.</strong></li>
</ol>
</li>
<li><strong>Persyaratan Administrasi</strong>
<ol>
<li style="text-align: justify;">Bukti Kelulusan Tahap II (Uji Kesehatan dan Wawancara) Sipenmaru Mandiri (SIMAMI) Gelombang II sebanyak 1 lembar.</li>
<li><em>Foto Copy </em>Legalisir Ijazah atau Asli Surat Keterangan Lulus dari Kepala Sekolah sebanyak 1 Lembar.</li>
<li>Bukti Setor Asli meliputi:
<ol style="list-style-type: lower-alpha;">
<li>Uang Kuliah Tunggal (UKT)</li>
<li>Uang Seragam dan Alat Kesehatan</li>
<li>Uang Pengembangan Masjid</li>
<li>Uang Iuran Kegiatan Organisasi Mahasiswa</li>
</ol>
</li>
<li style="text-align: justify;"><strong>Surat Pernyataan Tidak menuntut Pengembalian Dana Pendidikan </strong>ditandatangani Calon Mahasiswa Baru dan diketahui oleh Orang Tua di atas Materai 10.000 (dapat diakses melalui link <a href="http://bit.ly/surat_pernyataan_tidak_pengembalianDana">http://bit.ly/surat_pernyataan_tidak_pengembalianDana</a>).</li>
<li style="text-align: justify;"><strong>Calon Mahasiswa Baru wajib menjadi Peserta BPJS dan memindahkan kepesertaan ke Fasilitas Kesehatan (Faskes) Klinik Hygea Poltekkes Kemenkes Bengkulu </strong>(dengan mengumpulkan <em>foto copy</em> Kartu Kepesertaan BPJS).</li>
</ol>
</li>
</ol>
<p>&nbsp;&nbsp;</p>
<p style="text-align: justify;line-height: 1.5;">Persyaratan diserahkan langsung pada hari Kamis - Jum&rsquo;at, tanggal 11 - 12 Juli 2024 dari pukul 08.00 - 16.00 WIB di Kampus A Gedung Al-Zahrawi Poltekkes Kemenkes Bengkulu, Jalan Indragiri Nomor 03 Padang Harapan Bengkulu<em> (informasi lebih lanjut dapat menghubungi Admin Poltekkes Kemenkes Bengkulu, No HP 081367950069).</em></p>
<p>&nbsp;</p>
<p style="text-align: center;"><strong>BILA SAMPAI </strong><strong>DENGAN </strong><strong>TANGGAL </strong><strong>12</strong><strong> JULI</strong><strong> 202</strong><strong>4</strong><strong> BELUM MELAKSANAKAN REGISTRASI</strong><strong> DAN PENGUMPULAN BERKAS</strong><strong>, </strong></p>
<p style="text-align: center;"><strong><u>MAKA PESERTA DIANGGAP MENGUNDURKAN DIRI</u></strong><strong><u>.</u></strong></p>
</body>
</html>
<script>
  window.print();
</script>
<?php } elseif ($a['status_kelulusan_2'] == 'Tidak Lulus' || $a['status_kelulusan_2'] == null) { 
echo "<br><br><br><h1>Maaf Anda Belum Lulus LULUS SIMAMI GELOMBANG II TAHAP II<br><br>Silakan Coba Tahun Depan...</h1><br><a href='index.php'>Kembali </a>";
 }else{
 header("location:../index.php");
 }
 ?>

<style>
h1 {text-align: center;}
p {text-align: center;}
div {text-align: center;}
</style>
