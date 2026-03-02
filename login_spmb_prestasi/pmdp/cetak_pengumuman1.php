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

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 15 (filtered)">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:"Arial MT";}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin:0cm;
	text-autospace:none;
	font-size:11.0pt;
	font-family:"Arial MT",sans-serif;}
p.MsoTitle, li.MsoTitle, div.MsoTitle
	{margin-top:3.55pt;
	margin-right:.85pt;
	margin-bottom:0cm;
	margin-left:0cm;
	text-align:center;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;
	font-weight:bold;
	text-decoration:underline;}
p.MsoBodyText, li.MsoBodyText, div.MsoBodyText
	{margin:0cm;
	text-autospace:none;
	font-size:11.5pt;
	font-family:"Arial MT",sans-serif;}
a:link, span.MsoHyperlink
	{color:blue;
	text-decoration:underline;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:26.4pt;
	text-indent:-21.3pt;
	text-autospace:none;
	font-size:11.0pt;
	font-family:"Arial MT",sans-serif;}
.MsoChpDefault
	{font-family:"Calibri",sans-serif;}
.MsoPapDefault
	{text-autospace:none;}
@page WordSection1
	{size:612.5pt 936.5pt;
	margin:67.0pt 65.0pt 14.0pt 80.0pt;}
div.WordSection1
	{page:WordSection1;}
@page WordSection2
	{size:936.5pt 612.5pt;
	margin:3.0pt 69.0pt 0cm 65.0pt;}
div.WordSection2
	{page:WordSection2;}
 /* List Definitions */
 ol
	{margin-bottom:0cm;}
ul
	{margin-bottom:0cm;}
-->
</style>

</head>

<body lang=EN-ID link=blue vlink=purple >

<div class=WordSection1>

<p class=MsoTitle><span lang=id style='letter-spacing:-.1pt'>PENGUMUMAN</span></p>

<p class=MsoTitle><span lang=id style='text-decoration:none'>&nbsp;</span></p>

<p class=MsoBodyText style='margin-top:1.45pt'><b><span lang=id
style='font-family:"Arial",sans-serif'>&nbsp;</span></b></p>

<p class=MsoNormal style='text-align:justify'><b><span lang=IN
style='font-size:12.0pt;font-family:"Arial",sans-serif'>Peserta yang dinyatakan
LULUS Seleksi Administrasi SPMB Jalur Prestasi </span></b><b><span lang=id
style='font-size:12.0pt;font-family:"Arial",sans-serif'>Tahap I </span></b><b><span
lang=IN style='font-size:12.0pt;font-family:"Arial",sans-serif'>diwajibkan
mengikuti tahapan :</span></b></p>

<p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
12.0pt;margin-left:21.3pt;text-align:justify;line-height:115%;text-autospace:
ideograph-numeric ideograph-other'><span lang=IN style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN style='font-size:12.0pt;line-height:115%;
font-family:"Arial",sans-serif'>Peserta </span><b><span lang=IN
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>WAJIB</span></b><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>
</span><b><span lang=IN style='font-size:12.0pt;line-height:115%;font-family:
"Arial",sans-serif'>melaksanakan</span></b><span lang=IN style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif'> </span><b><span lang=IN
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>Uji
Kesehatan</span></b><span lang=IN style='font-size:12.0pt;line-height:115%;
font-family:"Arial",sans-serif'> di Rumah Sakit Pemerintah dengan pemeriksaan
sesuai Form Uji Kesehatan (terlampir) </span></p>

<p class=MsoListParagraph style='margin-left:21.3pt;text-align:justify;
text-indent:0cm;line-height:115%;text-autospace:ideograph-numeric ideograph-other'><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>&nbsp;</span></p>

<p class=MsoListParagraph style='margin-left:21.3pt;text-align:justify;
line-height:115%;text-autospace:ideograph-numeric ideograph-other'><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>Pelaksanaan
wawancara, verifikasi berkas dan uji prestasi/bakat akan dilaksanakan di
Poltekkes Kemenkes Bengkulu Gedung Auditorium Jl. Indragiri No.03 Padang
Harapan Bengkulu pada tanggal 10-12 Maret 2026</span></p>

<p class=MsoListParagraph style='margin-left:21.3pt;text-align:justify;
text-indent:0cm;line-height:115%;text-autospace:ideograph-numeric ideograph-other'><b><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>&nbsp;</span></b></p>

<p class=MsoListParagraph style='margin-left:21.3pt;text-align:justify;
line-height:115%;text-autospace:ideograph-numeric ideograph-other'><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=id style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>Pada
saat pelaksanaan kegiatan point (2) dua, peserta wajib membawa berkas yang akan
dikumpulkan meliputi :</span></p>

<p class=MsoListParagraph style='margin-left:35.45pt;text-align:justify;
text-indent:-14.15pt;line-height:115%;text-autospace:ideograph-numeric ideograph-other'><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>a.<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=IN
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>Form
Uji Kesehatan yang telah ditandatangani oleh Kepala Rumah Sakit Pemerintah
(tanda tangan dan stampel basah)</span></p>

<p class=MsoListParagraph style='margin-left:35.45pt;text-align:justify;
text-indent:-14.15pt;line-height:115%;text-autospace:ideograph-numeric ideograph-other'><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>b.<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=id
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>Kartu
Nomor Pendaftaran SPMB Jalur Prestasi</span></p>

<p class=MsoListParagraph style='margin-left:35.45pt;text-align:justify;
text-indent:-14.15pt;line-height:115%;text-autospace:ideograph-numeric ideograph-other'><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>c.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span><span lang=id
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>Bukti
cetak nilai raport semester I-V dari aplikasi SPMB Jalur Prestasi</span></p>

<p class=MsoListParagraph style='margin-left:35.45pt;text-align:justify;
text-indent:-14.15pt;line-height:115%;text-autospace:ideograph-numeric ideograph-other'><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>d.<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=id
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>Raport
asli semester I-V</span></p>

<p class=MsoListParagraph style='margin-left:35.45pt;text-align:justify;
text-indent:-14.15pt;line-height:115%;text-autospace:ideograph-numeric ideograph-other'><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>e.<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=id
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>Fotocopy
Akreditasi Sekolah </span></p>

<p class=MsoListParagraph style='margin-left:35.45pt;text-align:justify;
text-indent:-14.15pt;line-height:115%;text-autospace:ideograph-numeric ideograph-other'><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>f.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
lang=id style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>Sertifikat/Piagam
Penghargaan asli dan fotocopy</span></p>

<p class=MsoListParagraph style='margin-left:35.45pt;text-align:justify;
text-indent:-14.15pt;line-height:115%;text-autospace:ideograph-numeric ideograph-other'><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>g.<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span lang=id
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>Membawa
Pas foto warna ukuran 3x4 sebanyak 1 lembar </span></p>

<p class=MsoListParagraph style='margin-left:35.45pt;text-align:justify;
text-indent:0cm;line-height:115%;text-autospace:ideograph-numeric ideograph-other'><b><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>&nbsp;</span></b></p>

<p class=MsoListParagraph style='margin-left:21.3pt;text-align:justify;
line-height:115%;text-autospace:ideograph-numeric ideograph-other'><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><b><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>Wawancara
WAJIB</span></b><b><span lang=IN style='font-size:12.0pt;line-height:115%;
font-family:"Arial",sans-serif'> </span></b><span lang=IN style='font-size:
12.0pt;line-height:115%;font-family:"Arial",sans-serif'>dihadiri oleh calon
mahasiswa yang</span><span lang=IN style='font-size:12.0pt;line-height:115%;
font-family:"Arial",sans-serif'> </span><span lang=IN style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif'>didampingi oleh</span><span
lang=id style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>
salah <b>satu </b></span><b><span lang=IN style='font-size:12.0pt;line-height:
115%;font-family:"Arial",sans-serif'>Orang Tua/Wali</span></b><b><span lang=id
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>. </span></b></p>

<p class=MsoListParagraph style='margin-left:21.3pt;text-align:justify;
text-indent:0cm;line-height:115%;text-autospace:ideograph-numeric ideograph-other'><b><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>&nbsp;</span></b></p>

<p class=MsoListParagraph style='margin-left:21.3pt;text-align:justify;
line-height:115%;text-autospace:ideograph-numeric ideograph-other'><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>5.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>Apabila
sampai dengan tanggal </span><b><span lang=id style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif'>12 Maret 2026 </span></b><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>calon
mahasiswa<b> tidak </b></span><b><span lang=id style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif'>mengikuti tahapan Uji
Kesehatan, Wawancara, Verifikasi Berkas serta Uji Prestasi dan Bakat </span></b><b><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>maka
peserta dinyatakan <u>GUGUR</u>.</span></b></p>

<p class=MsoListParagraph style='margin-left:21.3pt;text-align:justify;
text-indent:0cm;line-height:115%;text-autospace:ideograph-numeric ideograph-other'><span
lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>&nbsp;</span></p>

<p class=MsoListParagraph style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:21.3pt;margin-bottom:.0001pt;text-align:justify;line-height:
115%;text-autospace:ideograph-numeric ideograph-other'><span lang=IN
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>6.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><b><span
lang=id style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>Pengumumuman
KELULUSAN </span></b><span lang=id style='font-size:12.0pt;line-height:115%;
font-family:"Arial",sans-serif'>dapat dilihat di website </span><span lang=id><a
href="https://bit.ly/pengumuman_Tahap_2">bit.ly/pengumuman_Tahap_2</a></span><span
lang=id style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif;
color:#EE0000'> </span><span lang=id style='font-size:12.0pt;line-height:115%;
font-family:"Arial",sans-serif'>pada tanggal</span><b><span lang=id
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'> 17
Maret 2026.</span></b></p>

<p class=MsoNormal style='margin-right:5.75pt;text-align:justify;line-height:
115%'><span lang=IN style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>Bagi
peserta yang <b>TIDAK LULUS</b></span><b><span lang=IN style='font-size:12.0pt;
line-height:115%;font-family:"Arial",sans-serif'> </span></b><b><span lang=IN
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>melalui
Jalur SPMB Prestasi</span></b><span lang=IN style='font-size:12.0pt;line-height:
115%;font-family:"Arial",sans-serif'> dapat mengikuti </span><b><span lang=id
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>SPMB�
Bersama</span></b><span lang=IN style='font-size:12.0pt;line-height:115%;
font-family:"Arial",sans-serif'> melalui <b>website</b> : </span><span lang=id><a
href="https://spmb-polkeslu.cloud/"><b><span style='font-size:12.0pt;
line-height:115%;color:windowtext'>https://spmb-polkeslu.cloud/</span></b></a>
(Klik Menu Pendaftaran,</span><span lang=id style='font-size:12.0pt;line-height:
115%;font-family:"Arial",sans-serif'> Pilih SPMB Bersama)<span
style='color:#EE0000'> </span>atau </span><b><span lang=id style='font-size:
12.0pt;line-height:115%'>https://spmb-poltekkes.kemkes.go.id/</span></b><span
lang=id style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>
yang dimulai tanggal </span></p>

<p class=MsoNormal style='margin-right:5.75pt;text-align:justify;line-height:
115%'><b><span lang=id style='font-size:12.0pt;line-height:115%;font-family:
"Arial",sans-serif'>23 Februari 2026 - April 2026</span></b><span lang=id
style='font-size:12.0pt;line-height:115%;font-family:"Arial",sans-serif'>
(dibuka 24 jam).</span></p>

</div>

<div class=WordSection2>

<p class=MsoBodyText><span lang=id>&nbsp;</span></p>

<p class=MsoBodyText><span lang=id>&nbsp;</span></p>

<p class=MsoBodyText><span lang=id>&nbsp;</span></p>

<p class=MsoBodyText><span lang=id>&nbsp;</span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=1049
 style='width:786.75pt;margin-left:5.4pt;border-collapse:collapse;border:none'>
 <tr style='height:18.95pt'>
  <td width=1049 nowrap colspan=7 valign=bottom style='width:786.75pt;
  border:none;padding:0cm 5.4pt 0cm 5.4pt;height:18.95pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span lang=id
  style='font-family:"Arial",sans-serif'>JADWAL PELAKSANAAN </span></b><b><span
  lang=id style='font-family:"Arial",sans-serif'>WAWANCARA, VERIFIKASI BERKAS,
  PRESTASI DAN BAKAT</span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><b><span lang=id
  style='font-family:"Arial",sans-serif'>SELEKSI PENERIMAAN MAHASISWA BARU
  (SPMB) JALUR PRESTASI </span></b></p>
  </td>
 </tr>
 <tr style='height:6.55pt'>
  <td width=1049 nowrap colspan=7 valign=bottom style='width:786.75pt;
  border:none;padding:0cm 5.4pt 0cm 5.4pt;height:6.55pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span lang=id
  style='font-family:"Arial",sans-serif'>POLITEKNIK KESEHATAN BENGKULU</span></b></p>
  </td>
 </tr>
 <tr style='height:18.95pt'>
  <td width=1049 nowrap colspan=7 valign=bottom style='width:786.75pt;
  border:none;border-bottom:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:8.0pt;text-align:center'><b><span
  lang=id style='font-family:"Arial",sans-serif'>TAHUN AKADEMIK 2026/2027</span></b></p>
  </td>
 </tr>
 <tr style='height:21.4pt'>
  <td width=36 nowrap style='width:27.3pt;border:solid windowtext 1.0pt;
  border-top:none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:21.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span lang=id
  style='font-family:"Arial",sans-serif;color:black'>NO</span></b></p>
  </td>
  <td width=127 nowrap style='width:95.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:21.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span lang=id
  style='font-family:"Arial",sans-serif;color:black'>HARI/TANGGAL</span></b></p>
  </td>
  <td width=548 nowrap style='width:410.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:21.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span lang=id
  style='font-family:"Arial",sans-serif;color:black'>PROGRAM STUDI (PRODI)</span></b></p>
  </td>
  <td width=149 nowrap style='width:111.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:21.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span lang=id
  style='font-family:"Arial",sans-serif;color:black'>WAKTU</span></b></p>
  </td>
  <td width=189 nowrap colspan=3 style='width:5.0cm;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:21.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span lang=id
  style='font-family:"Arial",sans-serif;color:black'>TEMPAT</span></b></p>
  </td>
 </tr>
 <tr style='height:48.6pt'>
  <td width=36 nowrap style='width:27.3pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:48.6pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=id
  style='font-family:"Arial",sans-serif'>1</span></p>
  </td>
  <td width=127 nowrap style='width:95.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:48.6pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=id
  style='font-family:"Arial",sans-serif'>Selasa/</span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=id
  style='font-family:"Arial",sans-serif'>10 Maret 2026</span></p>
  </td>
  <td width=548 style='width:410.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:48.6pt'>
  <p class=MsoListParagraph style='margin-left:14.15pt;text-indent:-14.15pt;
  text-autospace:ideograph-numeric ideograph-other'><span lang=id
  style='font-family:"Arial",sans-serif'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
  </span></span><span lang=id style='font-family:"Arial",sans-serif'>PRODI
  SARJANA TERAPAN KEPERAWATAN DAN PROFESI NERS </span></p>
  <p class=MsoListParagraph style='margin-left:14.15pt;text-indent:-14.15pt;
  text-autospace:ideograph-numeric ideograph-other'><span lang=id
  style='font-family:"Arial",sans-serif'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
  </span></span><span lang=id style='font-family:"Arial",sans-serif'>PRODI
  SARJANA TERAPAN KEPERAWATAN DAN PROFESI NERS KELAS INTERNASIONAL (KI)</span></p>
  <p class=MsoListParagraph style='margin-left:14.15pt;text-indent:-14.15pt;
  text-autospace:ideograph-numeric ideograph-other'><span lang=id
  style='font-family:"Arial",sans-serif'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
  </span></span><span lang=id style='font-family:"Arial",sans-serif'>PRODI
  DIPLOMA III KEPERAWATAN BENGKULU</span></p>
  <p class=MsoListParagraph style='margin-left:14.15pt;text-indent:-14.15pt;
  text-autospace:ideograph-numeric ideograph-other'><span lang=id
  style='font-family:"Arial",sans-serif'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
  </span></span><span lang=id style='font-family:"Arial",sans-serif'>PRODI
  DIPLOMA III KEPERAWATAN CURUP</span></p>
  <p class=MsoListParagraph style='margin-left:14.15pt;text-indent:-14.15pt;
  text-autospace:ideograph-numeric ideograph-other'><span lang=id
  style='font-family:"Arial",sans-serif'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
  </span></span><span lang=id style='font-family:"Arial",sans-serif'>PRODI
  DIPLOMA III SANITASI</span></p>
  <p class=MsoListParagraph style='margin-left:14.15pt;text-indent:0cm;
  text-autospace:ideograph-numeric ideograph-other'><span lang=id
  style='font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=149 nowrap style='width:111.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:48.6pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span lang=id
  style='font-family:"Arial",sans-serif'>Verifikasi Berkas dan Wawancara</span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=id
  style='font-family:"Arial",sans-serif'>08.00 s.d 14.00 WIB</span></p>
  <p class=MsoNormal><span lang=id style='font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=189 nowrap colspan=3 rowspan=3 style='width:5.0cm;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:48.6pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=id
  style='font-family:"Arial",sans-serif'>AUDITORIUM POLTEKKES BENGKULU</span></p>
  </td>
 </tr>
 <tr style='height:55.0pt'>
  <td width=36 style='width:27.3pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:55.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=id
  style='font-family:"Arial",sans-serif'>2</span></p>
  </td>
  <td width=127 style='width:95.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:55.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=id
  style='font-family:"Arial",sans-serif'>Rabu/</span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=id
  style='font-family:"Arial",sans-serif'>11 Maret 2026</span></p>
  </td>
  <td width=548 style='width:410.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:55.0pt'>
  <p class=MsoListParagraph style='margin-left:18.0pt;text-indent:-18.0pt;
  text-autospace:ideograph-numeric ideograph-other'><span lang=id
  style='font-family:"Arial",sans-serif'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span lang=id style='font-family:"Arial",sans-serif'>PRODI
  SARJANA TERAPAN KEBIDANAN &amp; PENDIDIKAN PROFESI BIDAN� </span></p>
  <p class=MsoListParagraph style='margin-left:18.0pt;text-indent:-18.0pt;
  text-autospace:ideograph-numeric ideograph-other'><span lang=id
  style='font-family:"Arial",sans-serif'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span lang=id style='font-family:"Arial",sans-serif'>PRODI
  DIPLOMA III KEBIDANAN BENGKULU</span></p>
  <p class=MsoListParagraph style='margin-left:18.0pt;text-indent:-18.0pt;
  text-autospace:ideograph-numeric ideograph-other'><span lang=id
  style='font-family:"Arial",sans-serif'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span lang=id style='font-family:"Arial",sans-serif'>PRODI
  DIPLOMA III KEBIDANAN CURUP</span></p>
  <p class=MsoListParagraph style='margin-left:18.0pt;text-indent:-18.0pt;
  text-autospace:ideograph-numeric ideograph-other'><span lang=id
  style='font-family:"Arial",sans-serif'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span lang=id style='font-family:"Arial",sans-serif'>PRODI
  SARJANA TERAPAN PROMOSI KESEHATAN</span></p>
  <p class=MsoListParagraph style='margin-left:36.0pt;text-indent:0cm;
  text-autospace:ideograph-numeric ideograph-other'><span lang=id
  style='font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=149 nowrap style='width:111.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:55.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span lang=id
  style='font-family:"Arial",sans-serif'>Verifikasi Berkas dan Wawancara</span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=id
  style='font-family:"Arial",sans-serif'>08.00 s.d 14.00 WIB</span></p>
  <p class=MsoNormal><span lang=id style='font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:48.7pt'>
  <td width=36 style='width:27.3pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:48.7pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=id
  style='font-family:"Arial",sans-serif'>3</span></p>
  </td>
  <td width=127 style='width:95.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:48.7pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=id
  style='font-family:"Arial",sans-serif'>Kamis/</span></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=id
  style='font-family:"Arial",sans-serif'>12 Maret 2026</span></p>
  </td>
  <td width=548 style='width:410.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:48.7pt'>
  <p class=MsoListParagraph style='margin-left:18.0pt;text-indent:-18.0pt;
  text-autospace:ideograph-numeric ideograph-other'><span lang=id
  style='font-family:"Arial",sans-serif'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span lang=id style='font-family:"Arial",sans-serif'>PRODI
  DIPLOMA III TEKNOLOGI LABORATORIUM MEDIS </span></p>
  <p class=MsoListParagraph style='margin-left:18.0pt;text-indent:-18.0pt;
  text-autospace:ideograph-numeric ideograph-other'><span lang=id
  style='font-family:"Arial",sans-serif'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span lang=id style='font-family:"Arial",sans-serif'>PRODI
  DIPLOMA III FARMASI</span></p>
  <p class=MsoListParagraph style='margin-left:18.0pt;text-indent:-18.0pt;
  text-autospace:ideograph-numeric ideograph-other'><span lang=id
  style='font-family:"Arial",sans-serif'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span lang=id style='font-family:"Arial",sans-serif'>PRODI
  SARJANA TERAPAN GIZI DAN DIETETIKA</span></p>
  <p class=MsoListParagraph style='margin-left:18.0pt;text-indent:-18.0pt;
  text-autospace:ideograph-numeric ideograph-other'><span lang=id
  style='font-family:"Arial",sans-serif'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span lang=id style='font-family:"Arial",sans-serif'>PRODI
  DIPLOMA III GIZI</span></p>
  <p class=MsoListParagraph style='margin-left:18.0pt;text-indent:0cm;
  text-autospace:ideograph-numeric ideograph-other'><span lang=id
  style='font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=149 nowrap style='width:111.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:48.7pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span lang=id
  style='font-family:"Arial",sans-serif'>Verifikasi Berkas dan Wawancara</span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><span lang=id
  style='font-family:"Arial",sans-serif'>08.00 s.d 14.00 WIB</span></p>
  <p class=MsoNormal><span lang=id style='font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:15.0pt'>
  <td width=163 nowrap colspan=2 valign=bottom style='width:122.45pt;
  border:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal style='text-indent:24.45pt'><span lang=id
  style='font-family:"Arial",sans-serif'>&nbsp;</span></p>
  <p class=MsoNormal style='text-indent:24.45pt'><span lang=id
  style='font-family:"Arial",sans-serif'>Catatan :</span></p>
  </td>
  <td width=548 nowrap valign=bottom style='width:410.8pt;border:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal><span lang=id style='font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=149 nowrap valign=bottom style='width:111.75pt;border:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal><span lang=id style='font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=16 nowrap valign=bottom style='width:11.8pt;border:none;padding:
  0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal><span lang=id style='font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=161 nowrap valign=bottom style='width:120.5pt;border:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal><span lang=id style='font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td style='border:none;padding:0cm 0cm 0cm 0cm' width=13><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='height:15.0pt'>
  <td width=36 nowrap valign=top style='width:27.3pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.0pt'>
  <p class=MsoNormal align=right style='text-align:right'><span lang=id
  style='font-family:"Arial",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=1013 nowrap colspan=6 valign=bottom style='width:759.45pt;
  border:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoListParagraph style='margin-left:18.0pt;text-indent:-18.0pt;
  text-autospace:ideograph-numeric ideograph-other'><span lang=id
  style='font-family:"Arial",sans-serif'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span lang=id style='font-family:"Arial",sans-serif'>Peserta
  berpakaian sopan (celana berbahan dasar, kemeja berkancing depan) </span></p>
  <p class=MsoListParagraph style='margin-left:18.0pt;text-indent:-18.0pt;
  text-autospace:ideograph-numeric ideograph-other'><span lang=id
  style='font-family:"Arial",sans-serif'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span lang=id style='font-family:"Arial",sans-serif'>Memakai
  sepatu dan rambut rapi (untuk yang laki-laki dan perempuan yang tidak
  mengenakan hijab)</span></p>
  <p class=MsoListParagraph style='margin-left:18.0pt;text-indent:-18.0pt;
  text-autospace:ideograph-numeric ideograph-other'><span lang=id
  style='font-family:"Arial",sans-serif'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span lang=id style='font-family:"Arial",sans-serif'>Peserta
  hadir sesuai dengan jadwal yang telah ditentukan </span></p>
  <p class=MsoListParagraph style='margin-left:18.0pt;text-indent:-18.0pt;
  text-autospace:ideograph-numeric ideograph-other'><span lang=id
  style='font-family:"Arial",sans-serif'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span lang=id style='font-family:"Arial",sans-serif'>Informasi
  selanjutnya akan diumumkan pada website <u>http://</u></span><span lang=id><a
  href="http://www.poltekkesbengkulu.ac.id"><span lang=IN style='font-family:
  "Arial",sans-serif;color:windowtext'>www.poltekkesbengkulu.ac.id</span></a></span></p>
  </td>
 </tr>
</table>

<p class=MsoBodyText style='margin-top:1.5pt'><span lang=id>&nbsp;</span></p>

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