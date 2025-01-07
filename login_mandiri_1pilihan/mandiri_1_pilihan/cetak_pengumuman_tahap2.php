<?php
	include "session.php";
?>

<?php
	include"../config/koneksi.php";
	include("bar128.php");
	include("library.php");
	include("fucnt_tgl.php");
	
		
	$query=mysqli_query($kon,"select * from tb_formulir5 where username='$_SESSION[username]' ");
	$a=mysqli_fetch_array($query);
	$tanggal = tgl_indo($a['tanggal_lahir']);
    date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
    // echo date('h:i:s a'); // menampilkan jam sekarang
    // echo date('l, d-m-Y  H:i:s'); //kombinasi jam dan tanggal
    
    if($a['status_lulus_2'] == "Lulus") {
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
            <td valign="top">Prodi</td>
            <td valign="top">:</td>
            <td><?php echo $a['pilihan_prodi']; ?></td>
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
            <h3 align="center">Selamat anda dinyatakan:</h3>
        </td>
    </tr>
    <tr>
        <td>
            <h1>LULUS SIMAMI TAHAP II</h1>
        </td>
    </tr>
</table>
<br><br><br><br>
<p style="text-align: center;"><strong><u>PENGUMUMAN </u></strong></p>
<p style="text-align: justify;"><strong>&nbsp;</strong></p>
<p style="text-align: justify;"><strong>Peserta </strong><strong>Sipenmaru Program Studi Sarjana Terapan Keperawatan Alih Jenjang dan Pendidikan Profesi Ners/ Profesi Bidan</strong> yang dinyatakan <strong>LULUS </strong><strong>Sipenmaru Mandiri (SIMAMI) </strong>dapat melakukan <strong>REGISTRASI (PEMBAYARAN DAN PENGUMPULAN BERKAS) pada </strong>tanggal <strong>2 s.d 9 JANUARI</strong><strong> 202</strong><strong>5 </strong>dengan melengkapi persyaratan administrasi sebagai berikut:</p>
<p style="text-align: justify;"><strong>A. Persyaratan Administrasi Keuangan </strong></p>
<ol style="text-align: justify;">
<li>Pembayaran Biaya Pendidikan Uang Kuliah Tunggal (UKT) yang jumlahnya sesuai dengan Program Studi melalui <strong>Rekening Bank MUAMALAT No. Rekening 4320666666 an. RPL 016 BLU POLTEKKESUNTUK OPS </strong>atau<strong> Rekening Bank Syariah Indonesia (BSI) No. Rekening 7632153001 an. RPL 016 BLU POLTEKKES BKL UTK OPS P</strong> (dapat diakses melalui link <a href="https://bit.ly/UKT-MAHASISWA">https://bit.ly/UKT-MAHASISWA</a>).</li>
<li>Pembayaran Biaya Seragam yang jumlahnya sesuai dengan penempatan <strong>Kelulusan</strong> Program Studi melalui <strong>Bank Syariah Indonesia (BSI) Cabang Bengkulu No. Rekening 7776655830 an. KPN POLITEKNIK KESEHATAN</strong> (dapat diakses melalui link <a href="https://bit.ly/RINCIAN-SERAGAM">https://bit.ly/RINCIAN-SERAGAM</a>).</li>
<li>Pembayaran Sumbangan Sukarela Pembangunan Masjid Tarbiyatush Shihhah melalui Rekening <strong>Bank Syariah Indonesia (BSI) Cabang Bengkulu No. Rekening 4362324040 an. MASJID TARBIYATUSH SHIHHAH. </strong></li>
<li>Pembayaran Iuran Kegiatan Organisasi Mahasiswa Poltekkes Kemenkes Bengkulu dengan rincian Sarjana Terapan sebesar <strong>Rp 400</strong><strong>.000,-</strong> (Empat Ratus Ribu Rupiah), Pendidikan Profesi Ners dan Profesi Bidan <strong>Rp 500.000,-</strong> (Lima Ratus Ribu Rupiah), dana dibayarkan 1 kali selama menempuh pendidikan melalui <strong>Bank Tabungan Negara (BTN) No. Rekening 00037-01-50-050725-4 an. ORMAWA POLTEKKES KEMENKES BENGKULU.</strong></li>
<li><strong>UANG YANG TELAH DISETOR TIDAK DAPAT DITARIK/DIKEMBALIKAN.</strong></li>
</ol>
<p style="text-align: justify;">&nbsp;B.&nbsp;<strong>Persyaratan Administrasi</strong></p>
<ol style="text-align: justify;">
<li><strong>Bukti Kelulusan </strong><strong>Sipenmaru Mandiri (SIMAMI)</strong> <strong>sebanyak 1 lembar.</strong></li>
<li><strong>Fotocopy Legalisir Ijazah </strong><strong>Sarjana Terapan Kebidanan/Sarjana Keperawatan atau Diploma Tiga Keperawatan.</strong></li>
<li><strong>Bukti Setor Asli</strong><strong>/Transfer/<em>Print Out Mobile Banking</em> </strong><strong>meliputi :</strong></li>
</ol>
<ul style="text-align: justify;">
<li>Uang Kuliah Tunggal (UKT)</li>
<li>Uang Pemesanan Seragam</li>
<li>Uang Pembangunan Masjid</li>
<li>Uang Iuran Kegiatan Organisasi Mahasiswa</li>
</ul>
<ol style="text-align: justify;" start="4">
<li><strong>Surat Pernyataan Tidak menuntut Pengembalian Dana Pendidikan </strong>ditandatangani Calon Mahasiswa Baru dan diketahui oleh Orang Tua/Suami di atas Materai 10.000. (dapat diakses melalui link <a href="https://bit.ly/Surat-Pernyataan-Tidak-Menuntut-Pengembalian">https://bit.ly/Surat-Pernyataan-Tidak-Menuntut-Pengembalian</a>).</li>
<li><strong>Semua Berkas Persyaratan Administrasi dimasukkan dalam map </strong><strong>kertas bertulang, diserahkan langsung/dikirimkan </strong>via Pos/JNE/JNT/Travel sampai dengan&nbsp; <strong>9 Januari 2025 Pukul 16.00 WIB</strong> pada alamat <strong>Direktorat Lantai I Gedung A</strong><strong>l</strong><strong>-Zahrawi Jalan Indragiri Nomor 03 Padang Harapan Bengkulu</strong><strong> (untuk konfirmasi pengiriman berkas dapat menghubungi Whatsapp (WA) Admin Sipenmaru/081367950069).</strong></li>
</ol>
<p style="text-align: justify;"><strong>BILA SAMPAI TANGGAL </strong><strong>9 JANUARI 2025 </strong><strong>BELUM MELAKSANAKAN REGISTRASI</strong><strong>/DAFTAR ULANG</strong><strong>, MAKA PESERTA DIANGGAP <u>MENGUNDURKAN DIRI.</u></strong></p>
<p style="text-align: justify;">&nbsp;C.&nbsp;<strong>Pengenalan Kehidupan Kampus Mahasiswa Baru (PKKMB) Program Studi Sarjana Terapan Keperawatan Alih Jenjang, Profesi Ners, dan Profesi Bidan dilaksanakan secara Online pada Hari Jum&rsquo;at, Tanggal 10 Januari 2025. (Link akan share kemudian)</strong></p>
<p style="text-align: justify;"><strong>&nbsp;</strong></p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><strong>&nbsp;</strong></p>
<p style="text-align: justify;"><strong>&nbsp;</strong></p>
  

</body>
</html>
<script>
  window.print();
</script>
<?php } elseif ($a['status_lulus_2'] == null || $a['status_lulus_2'] == "Tidak Lulus") { 
echo "<br><br><br><h1>Maaf Anda Belum Lulus SIMAMI, silahkan coba lagi di periode selanjutnya</h1><br><a href='index.php'>Kembali </a>";
 }else{
echo "<br><br><br><h1>Maaf Anda Belum Lulus, silahkan coba lagi di periode selanjutnya</h1><br><a href='index.php'>Kembali </a>";
 }
 ?>

<style>
h1 {text-align: center;}
p {text-align: center;}
div {text-align: center;}
</style>
