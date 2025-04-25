<?php
	include "session.php";
?>

<?php
	include"../config/koneksi.php";
	include("bar128.php");
	include("library.php");
	include("fucnt_tgl.php");
	
		
	$query=mysqli_query($kon,"select * from tb_formulir3 where username='$_SESSION[username]' ");
	$a=mysqli_fetch_array($query);
	$tanggal = tgl_indo($a['tanggal_lahir']);
    date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
    // echo date('h:i:s a'); // menampilkan jam sekarang
    // echo date('l, d-m-Y  H:i:s'); //kombinasi jam dan tanggal
?>
<html>
	<body>

		  <table width="100%" border="0"  align="center">
		  <tr>
			<td><img src="../assets/img_app/logobaru.png" width="100%"/></td>

		  </tr>
		</table>

        <table align="center">
          <!--<tr>-->
          <!--    <td rowspan=18 width=164 valign="top"><a href="../assets/img/<?php echo $a['nama_foto'];?>" class="fancy">-->
          <!--    <img src="../assets/img/<?php echo $a['nama_foto'];?>" alt="" width=150 height=175 border="0" /></td>-->
          <!--</tr>-->

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
<?php if($a['status_pmdp'] == "Lulus") {?>
<table align="center">
    <tr>
        <td>
            <h3 align="center">Selamat anda dinyatakan:</h3>
        </td>
    </tr>
    <tr>
        <td>
            <h1>LULUS SPMB Prestasi TAHAP I</h1>
        </td>
    </tr>
</table>

<table width="100%" border="0" align="center">

<h2 style="text-align: center;"><strong><u>PENGUMUMAN</u></strong></h2>
<p></p>
<h3>Peserta yang dinyatakan LULUS Seleksi Administrasi SPMB Jalur Prestasi Tahap I diwajibkan mengikuti tahapan :</h3>
<ol>
<li><strong>Verifikasi Berkas, Wawancara, Uji Kesehatan, Prestasi dan Bakat </strong>dilaksanakan pada tanggal <strong>10 s.d 14 Maret 2025. <em>(jadwal terlampir)</em></strong></li>
</ol>
<ol start="2">
<li>Berkas yang dikumpulkan meliputi :
<ol>
<li>Kartu Nomor Pendaftaran SPMB Jalur Prestasi</li>
<li>Bukti cetak nilai raport semester I-V dari aplikasi SPMB Jalur Prestasi</li>
<li>Raport asli semester I-V</li>
<li>Fotocopy Akreditasi Sekolah</li>
<li>Sertifikat/Piagam Penghargaan asli dan fotocopy</li>
<li>Foto Ukuran 3x4 1 (satu) buah</li>
</ol>
</li>
<li><strong>Tempat pelaksanaan di Auditorium Poltekkes Bengkulu.</strong></li>
</ol>
<ol start="4">
<li><strong>Biaya uji kesehatan </strong>sebesar <strong> 150.000,- (Seratus Lima Puluh Ribu Rupiah) </strong>dapat di setor ke <strong>Bank Mandiri dengan Nomor Rekening 1790063215300 Atas Nama RPL 016 POLTEKKES BKL UTK OPS P</strong>. (dapat disetor secara online atau di Auditorium Poltekkes Bengkulu).</li>
</ol>
<ol start="5">
<li><strong>Wawancara WAJIB </strong>dihadiri oleh calon mahasiswa yang didampingi oleh salah <strong>satu Orang Tua/Wali.</strong></li>
</ol>
<ol start="6">
<li>Apabila sampai dengan tanggal <strong>14 Maret 2025 </strong>calon mahasiswa <strong>tidak mengikuti Verifikasi Berkas, Wawancara, Uji Kesehatan, Prestasi dan Bakat maka peserta dinyatakan <u>GUGUR</u>.</strong></li>
</ol>
<ol start="7">
<li><strong>Pengumumuman</strong><strong> KELULUSAN&nbsp;</strong>dapat dilihat di website <a href="https://bit.ly/Kelulusan_Tahap2">https://bit.ly/Kelulusan_Tahap2</a> pada tanggal <strong>20 Maret 2025.</strong></li>
</ol>
<p>Bagi peserta yang <strong>TIDAK LULUS melalui jalur SPMB Prestasi </strong>dapat mengikuti <strong>SPMB Bersama </strong>melalui <strong>website </strong>: <a href="https://bit.ly/polkeslu">https://bit.ly/polkeslu</a> atau <a href="https://bit.ly/SPMB_bersama">https://bit.ly/SPMB_bersama</a> yang dimulai tanggal <strong>03 Maret 2025 </strong>(dibuka 24 jam).</p>
<div class="page-break">
<div>
    <p align="center">
        <strong>
            JADWAL PELAKSANAAN UJI KESEHATAN, WAWANCARA, VERIFIKASI BERKAS,
            PRESTASI  DAN BAKAT SELEKSI PENERIMAAN  MAHASISWA BARU (SPMB) JALUR
            PRESTASI
        </strong>
    </p>
    <p align="center">
        <strong></strong>
    </p>
    <table border="1" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td width="36" valign="top">
                    <p align="center">
                        <strong>NO</strong> <strong></strong>
                    </p>
                </td>
                <td width="127" valign="top">
                    <p>
                        <strong>HARI/TANGGAL</strong> <strong></strong>
                    </p>
                </td>
                <td width="447" valign="top">
                    <p>
                        <strong>PROGRAM STUDI    (PRODI)</strong>
                        <strong>
                        </strong>
                    </p>
                </td>
                <td width="250" valign="top">
                    <p align="center">
                        <strong>WAKTU</strong> <strong></strong>
                    </p>
                </td>
                <td width="189" valign="top">
                    <p align="center">
                        <strong>TEMPAT</strong> <strong></strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="36" valign="top">
                    <p>
                        <strong></strong>
                    </p>
                    <p align="center">
                        1
                    </p>
                </td>
                <td width="127" valign="top">
                    <p>
                        <strong></strong>
                    </p>
                    <p align="center">
                        Senin/
                    </p>
                    <p align="center">
                        10 Maret    2025
                    </p>
                </td>
                <td width="447" valign="top">
                    <p>
                        1.      PRODI DIPLOMA III KEPERAWATAN BENGKULU
                    </p>
                    <p>
                        2.      PRODI DIPLOMA III KEPERAWATAN CURUP
                    </p>
                    <p>
                        3.   PRODI DIPLOMA III SANITASI
                    </p>
                </td>
                <td width="250" valign="top">
                    <p>
                        <strong>Uji Kesehatan</strong>
                    </p>
                    <p>
                        08.00 s.d 10.00    WIB
                    </p>
                    <p>
                        <strong>Verifikasi Berkas    dan Wawancara</strong>
                    </p>
                    <p>
                        10.30 s.d 14.00 WIB
                    </p>
                </td>
                <td width="189" rowspan="5" valign="top">
                    <p>
                        <strong></strong>
                    </p>
                    <p>
                        <strong></strong>
                    </p>
                    <p>
                        <strong></strong>
                    </p>
                    <p>
                        <strong></strong>
                    </p>
                    <p>
                        <strong></strong>
                    </p>
                    <p>
                        <strong></strong>
                    </p>
                    <p>
                        <strong></strong>
                    </p>
                    <p>
                        <strong></strong>
                    </p>
                    <p>
                        <strong></strong>
                    </p>
                    <p>
                        AUDITORIUM POLTEKKES BENGKULU
                    </p>
                </td>
            </tr>
            <tr>
                <td width="36" valign="top">
                    <p>
                        <strong></strong>
                    </p>
                    <p align="center">
                        2
                    </p>
                </td>
                <td width="127" valign="top">
                    <p>
                        <strong></strong>
                    </p>
                    <p align="center">
                        Selasa/
                    </p>
                    <p align="center">
                        11 Maret 2025
                    </p>
                </td>
                <td width="447" valign="top">
                    <p>
                        1.      PRODI SARJANA TERAPAN PROMOSI KESEHATAN
                    </p>
                    <p>
                        2.      PRODI DIPLOMA III TEKNOLOGI LABORATORIUM MEDIS
                    </p>
                    <p>
                        3.      PRODI SARJANA TERAPAN KEPERAWATAN DAN PROFESI
                        NERS KELAS INTERNASIONAL (KI)
                    </p>
                </td>
                <td width="250" valign="top">
                    <p>
                        <strong>Uji Kesehatan</strong>
                    </p>
                    <p>
                        08.00    s.d 10.00 WIB
                    </p>
                    <p>
                        <strong>Verifikasi Berkas dan Wawancara</strong>
                    </p>
                    <p>
                        10.30    s.d 14.00 WIB
                    </p>
                </td>
            </tr>
            <tr>
                <td width="36" valign="top">
                    <p>
                        <strong></strong>
                    </p>
                    <p align="center">
                        3
                    </p>
                </td>
                <td width="127" valign="top">
                    <p>
                        <strong></strong>
                    </p>
                    <p>
                        Rabu/ 12 Maret 2025
                    </p>
                </td>
                <td width="447" valign="top">
                    <p>
                        <strong></strong>
                    </p>
                    <p>
                        1.      PRODI DIPLOMA III FARMASI
                    </p>
                    <p>
                        2.      PRODI SARJANA TERAPAN GIZI    DAN DIETETIKA
                    </p>
                </td>
                <td width="250" valign="top">
                    <p>
                        <strong>Uji Kesehatan</strong>
                    </p>
                    <p>
                        08.00 s.d 10.00 WIB
                    </p>
                    <p>
                        <strong>Verifikasi Berkas dan Wawancara</strong>
                    </p>
                    <p>
                        10.30 s.d 14.00    WIB
                    </p>
                </td>
            </tr>
            <tr>
                <td width="36" valign="top">
                    <p>
                        <strong></strong>
                    </p>
                    <p align="center">
                        4
                    </p>
                </td>
                <td width="127" valign="top">
                    <p>
                        <strong></strong>
                    </p>
                    <p align="center">
                        Kamis/
                    </p>
                    <p align="center">
                        13 Maret 2025
                    </p>
                </td>
                <td width="447" valign="top">
                    <p>
                        1.      PRODI DIPLOMA III GIZI
                    </p>
                    <p>
                        2.      PRODI SARJANA TERAPAN KEBIDANAN &amp; PENDIDIKAN
                        PROFESI BIDAN
                    </p>
                </td>
                <td width="250" valign="top">
                    <p>
                        <strong>Uji Kesehatan</strong>
                    </p>
                    <p>
                        08.00    s.d 10.00 WIB
                    </p>
                    <p>
                        <strong>Verifikasi Berkas dan Wawancara</strong>
                    </p>
                    <p>
                        10.30 s.d 14.00    WIB
                    </p>
                </td>
            </tr>
            <tr>
                <td width="36" valign="top">
                    <p>
                        <strong></strong>
                    </p>
                    <p align="center">
                        5
                    </p>
                </td>
                <td width="127" valign="top">
                    <p>
                        <strong></strong>
                    </p>
                    <p align="center">
                        Jum’at/
                    </p>
                    <p align="center">
                        14 Maret 2025
                    </p>
                </td>
                <td width="447" valign="top">
                    <p>
                        1.      PRODI DIPLOMA III KEBIDANAN CURUP
                    </p>
                    <p>
                        2.   PRODI DIPLOMA III KEBIDANAN BENGKULU
                    </p>
                    <p>
                        3.      PRODI SARJANA TERAPAN KEPERAWATAN DAN PROFESI
                        NERS
                    </p>
                </td>
                <td width="250" valign="top">
                    <p>
                        <strong>Uji Kesehatan</strong>
                    </p>
                    <p>
                        08.00 s.d 10.00    WIB
                    </p>
                    <p>
                        <strong>Verifikasi    Berkas dan Wawancara</strong>
                    </p>
                    <p>
                        10.30 s.d 14.00 WIB
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<br clear="all"/>

    Catatan : <br>

    1.      Peserta berpakaian sopan (celana  berbahan dasar, kemeja berkancing
    depan)<br>

    2.      Memakai sepatu dan rambut  rapi (untuk yang laki-laki dan perempuan
    yang tidak mengenakan hijab)<br>

    3.     Peserta hadir sesuai  dengan jadwal yang telah ditentukan<br>

    4.     Informasi selanjutnya akan diumumkan pada website <u>http://</u>
    <a href="http://www.poltekkesbengkulu.ac.id/">
        www.poltekkesbengkulu.ac.id
    </a>

</div>
</body>
</html>
<script>
  window.print();
</script>
<style>
h1 {text-align: center;}
p {text-align: center;}
div {text-align: center;}
.page-break {
    page-break-before: always; /* Untuk browser lama */
    break-before: page; /* Untuk browser modern */
}

</style>

<?php } elseif ($a['status_pmdp'] == "Tidak Lulus" || $a['status_pmdp'] == "") { ?>
<table align="center">
    <tr>
        <td>
            <!--<h3>&emsp;&emsp;Selamat anda dinyatakan:</h3>-->
        </td>
    </tr>
    <tr>
        <td>
            <h1>Maaf Anda dinyatakan Belum lulus</h1>
            <p align="center">Silahkan mencoba SPMB Jalur Bersama di link ini <a href="https://spmb-poltekkes.kemkes.go.id/" class="btn btn-md btn-success"> SPMB Bersama</a></p>
        </td>
    </tr>
</table>
<?php }else { ?>
    <a href="index.php" class="btn btn-md btn-success">Kembali</a>
<?php } ?>
<div style="break-after:page"></div>