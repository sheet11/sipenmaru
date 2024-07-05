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
    
    if($a['status_kelulusan_simami_tahap2'] == "LULUS") {
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
            <h3>&emsp;&emsp;Selamat anda dinyatakan:</h3>
        </td>
    </tr>
    <tr>
        <td>
            <h1>LULUS SIMAMI TAHAP II</h1>
        </td>
    </tr>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<p class="MsoNormal" align="center" style="margin-bottom:6.0pt;text-align:center;
line-height:150%"><b style="mso-bidi-font-weight:normal"><u><span lang="EN-US" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">INFORMASI
PERSYARATAN REGISTRASI SIMAMI POLTEKKES BENGKULU<o:p></o:p></span></u></b></p>

<p class="MsoNormal" style="margin-bottom:6.0pt;text-align:justify;text-justify:
inter-ideograph;line-height:150%"><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">Peserta
yang dinyatakan LULUS Sipenmaru Tahap II Jalur Seleksi </span><span lang="EN-US" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif"><span style="mso-spacerun:yes">&nbsp;</span>Mandiri </span><span lang="IN" style="font-size:
11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">(SIMAM</span><span lang="EN-US" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">I</span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">) diwajibkan untuk melakukan <b style="mso-bidi-font-weight:
normal">REGISTRASI</b></span><b style="mso-bidi-font-weight:normal"><span lang="EN-US" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">
(PEMBAYARAN DAN PENGUMPULAN BERKAS)</span></b><b style="mso-bidi-font-weight:
normal"><span lang="EN-US" style="font-size:11.0pt;line-height:150%;font-family:
&quot;Arial&quot;,sans-serif;mso-ansi-language:IN"> </span></b><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">pada tanggal <b style="mso-bidi-font-weight:normal">5 s.d
8</b></span><b><span lang="IN" style="font-size:11.0pt;line-height:150%;
font-family:&quot;Arial&quot;,sans-serif"> </span></b><b><span lang="EN-US" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">Juli
202</span></b><b style="mso-bidi-font-weight:normal"><span lang="EN-US" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">4<span style="mso-bidi-font-weight:bold"> </span></span></b><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">dengan melengkapi persyaratan administrasi sebagai
berikut :<o:p></o:p></span></p>

<p class="MsoListParagraphCxSpFirst" style="margin-left:21.3pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-21.3pt;
line-height:150%;mso-list:l1 level1 lfo1"><!--[if !supportLists]--><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:Arial;
mso-ansi-language:IN"><span style="mso-list:Ignore">A.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><!--[endif]--><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">Persyaratan Administrasi Keuangan <o:p></o:p></span></b></p>

<p class="MsoListParagraphCxSpMiddle" style="margin-left:39.3pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-18.0pt;
line-height:150%;mso-list:l0 level1 lfo2"><!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;color:black;mso-themecolor:text1;mso-ansi-language:
IN"><span style="mso-list:Ignore">1.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">Pembayaran
Biaya Pendidikan Uang Kuliah Tunggal (UKT) yang jumlahnya sesuai dengan</span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">
</span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">Program Studi melalui <b style="mso-bidi-font-weight:
normal">Rekening Bank MUAMALAT No. Rekening 4320666666 an. RPL 016 BLU POLTEKKES
UNTUK OPS </b>(</span><span lang="EN-US" style="font-size:11.0pt;line-height:
150%;font-family:&quot;Arial&quot;,sans-serif">dapat diakses melalui link</span><span lang="EN-US"> <a href="http://bit.ly/UKT_Mahasiswa"><span style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;color:red">http://bit.ly/UKT_Mahasiswa</span></a></span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
color:red;mso-ansi-language:IN">)</span><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;color:red">.</span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
color:red;mso-ansi-language:IN"><o:p></o:p></span></p>

<p class="MsoListParagraphCxSpMiddle" style="margin-left:39.3pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-18.0pt;
line-height:150%;mso-list:l0 level1 lfo2"><!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;color:black;mso-themecolor:text1;mso-ansi-language:
IN"><span style="mso-list:Ignore">2.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">Pembayaran
Biaya Seragam </span><span lang="EN-US" style="font-size:11.0pt;line-height:150%;
font-family:&quot;Arial&quot;,sans-serif">dan Alat Kesehatan </span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">yang jumlahnya sesuai dengan Program Studi melalui <b style="mso-bidi-font-weight:normal">Bank Syariah Indonesia (BSI) Cabang
Bengkulu No. Rekening 7776655830 an. KPN POLITEKNIK KESEHATAN.</b></span><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif"> </span></b><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">(</span><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif">dapat diakses melalui link </span><span lang="EN-US"><a href="http://bit.ly/biaya_seragam_dan_alatkes"><span style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
color:red">http://bit.ly/biaya_seragam_dan_alatkes</span></a></span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
color:red;mso-ansi-language:IN">)</span><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;color:red">.</span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
color:red;mso-ansi-language:IN"><o:p></o:p></span></p>

<p class="MsoListParagraphCxSpMiddle" style="margin-left:39.3pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-18.0pt;
line-height:150%;mso-list:l0 level1 lfo2"><!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;color:black;mso-themecolor:text1;mso-ansi-language:
IN"><span style="mso-list:Ignore">3.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">Pembayaran
Sumbangan Sukarela Pembangunan Masjid Tarbiyatush Shihhah melalui Rekening <b style="mso-bidi-font-weight:normal">Bank Syariah Indonesia (BSI) Cabang
Bengkulu No. Rekening 4362324040 an. MASJID TARBIYATUSH SHIHHAH. </b><span style="color:red"><o:p></o:p></span></span></p>

<p class="MsoListParagraphCxSpMiddle" style="margin-left:39.3pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-18.0pt;
line-height:150%;mso-list:l0 level1 lfo2"><!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;color:black;mso-themecolor:text1;mso-ansi-language:
IN"><span style="mso-list:Ignore">4.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">Pembayaran
Iuran Kegiatan Organisasi Mahasiswa Poltekkes Kemenkes Bengkulu dengan rincian
Diploma Tiga sebesar <b>Rp 300.000,</b>- (tiga ratus ribu rupiah) dan Sarjana
Terapan sebesar <b>Rp 400.000</b>,- (empat ratus ribu rupiah), Sarjana Terapan
+ Pendidikan Profesi Ners dan Profesi Bidan sebesar <b>Rp 500.000</b>,- (lima
ratus ribu rupiah), dana<span style="mso-spacerun:yes">&nbsp; </span>dibayarkan 1
kali selama menempuh pendidikan melalui <b style="mso-bidi-font-weight:normal">Bank
Tabungan Negara (BTN) No. Rekening 00037-01-50-050725-4 an. ORMAWA POLTEKKES
KEMENKES BENGKULU.</b><o:p></o:p></span></p>

<p class="MsoListParagraph" style="margin-top:0cm;margin-right:0cm;margin-bottom:
6.0pt;margin-left:39.1pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-17.85pt;line-height:150%;mso-list:l0 level1 lfo2"><!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;color:black;mso-themecolor:text1;mso-ansi-language:
IN"><span style="mso-list:Ignore">5.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">UANG YANG TELAH DISETOR TIDAK DAPAT DITARIK/DIKEMBALIKAN.</span></b><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN"><o:p></o:p></span></p>

<p class="MsoListParagraphCxSpMiddle" style="margin-left:21.3pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-21.3pt;
line-height:150%;mso-list:l1 level1 lfo1"><!--[if !supportLists]--><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:Arial;
mso-ansi-language:IN"><span style="mso-list:Ignore">B.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><!--[endif]--><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">Persyaratan Administrasi<o:p></o:p></span></b></p>

<p class="MsoListParagraphCxSpMiddle" style="margin-left:39.3pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-18.0pt;
line-height:150%;mso-list:l2 level1 lfo3"><!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;color:black;mso-themecolor:text1;mso-ansi-language:
IN;mso-bidi-font-weight:bold"><span style="mso-list:Ignore">1.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">Bukti Kelulusan Tahap II Sipenmaru </span><span lang="EN-US" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">Mandiri
(SIMAMI) sebanyak</span><span lang="IN" style="font-size:11.0pt;line-height:150%;
font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN"> 1 lembar.<o:p></o:p></span></p>

<p class="MsoListParagraphCxSpMiddle" style="margin-left:39.3pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-18.0pt;
line-height:150%;mso-list:l2 level1 lfo3"><!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;color:black;mso-themecolor:text1;mso-ansi-language:
IN;mso-bidi-font-weight:bold;mso-bidi-font-style:italic"><span style="mso-list:Ignore">2.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><!--[endif]--><i style="mso-bidi-font-style:normal"><span lang="EN-US" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">Foto
Copy </span></i><span lang="EN-US" style="font-size:11.0pt;line-height:150%;
font-family:&quot;Arial&quot;,sans-serif;mso-bidi-font-style:italic">Legalisir Ijazah
atau Asli Surat Keterangan Lulus dari Kepala Sekolah sebanyak 1 Lembar.</span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN;mso-bidi-font-style:italic"><o:p></o:p></span></p>

<p class="MsoListParagraphCxSpMiddle" style="margin-left:39.3pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-18.0pt;
line-height:150%;mso-list:l2 level1 lfo3"><!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;color:black;mso-themecolor:text1;mso-ansi-language:
IN;mso-bidi-font-weight:bold"><span style="mso-list:Ignore">3.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">Bukti Setor Asli meliputi:<o:p></o:p></span></p>

<p class="MsoListParagraphCxSpMiddle" style="margin-left:2.0cm;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-14.15pt;
line-height:150%;mso-list:l3 level1 lfo4"><!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN"><span style="mso-list:Ignore">a.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">Uang Kuliah Tunggal (UKT)<o:p></o:p></span></p>

<p class="MsoListParagraphCxSpMiddle" style="margin-left:2.0cm;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-14.15pt;
line-height:150%;mso-list:l3 level1 lfo4"><!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN"><span style="mso-list:Ignore">b.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">Uang Seragam</span><span lang="EN-US" style="font-size:
11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif"> dan Alat Kesehatan</span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN"><o:p></o:p></span></p>

<p class="MsoListParagraphCxSpMiddle" style="margin-left:2.0cm;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-14.15pt;
line-height:150%;mso-list:l3 level1 lfo4"><!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN"><span style="mso-list:Ignore">c.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">Uang Pembangunan Masjid<o:p></o:p></span></p>

<p class="MsoListParagraphCxSpMiddle" style="margin-left:2.0cm;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-14.15pt;
line-height:150%;mso-list:l3 level1 lfo4"><!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN"><span style="mso-list:Ignore">d.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">Uang Iuran Kegiatan Organisasi Mahasiswa<o:p></o:p></span></p>

<p class="MsoListParagraphCxSpMiddle" style="margin-left:39.3pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-18.0pt;
line-height:150%;mso-list:l2 level1 lfo3"><!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;color:black;mso-themecolor:text1;mso-ansi-language:
IN;mso-bidi-font-weight:bold"><span style="mso-list:Ignore">4.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">Surat
Pernyataan Tidak menuntut Pengembalian Dana Pendidikan </span></b><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">ditandatangani Calon Mahasiswa Baru dan diketahui oleh
Orang Tua di atas Materai 10.000</span><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif"> </span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">(</span><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif">dapat diakses melalui link</span><span lang="EN-US" style="font-family:&quot;Arial&quot;,sans-serif"> </span><span lang="EN-US"><a href="http://bit.ly/surat_pernyataan_tidak_pengembalianDana"><span style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">http://bit.ly/surat_pernyataan_tidak_pengembalianDana</span></a></span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">)</span><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif">.</span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
color:red;mso-ansi-language:IN"><o:p></o:p></span></p>

<p class="MsoListParagraphCxSpMiddle" style="margin-left:39.3pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-18.0pt;
line-height:150%;mso-list:l2 level1 lfo3"><!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;color:black;mso-themecolor:text1;mso-ansi-language:
IN;mso-bidi-font-weight:bold"><span style="mso-list:Ignore">5.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">Calon
Mahasiswa Baru wajib menjadi Peserta BPJS dan memindahkan kepesertaan ke
Fasilitas Kesehatan (Faskes) Klinik Hygea Poltekkes Kemenkes Bengkul</span></b><b style="mso-bidi-font-weight:normal"><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif">u </span></b><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">(</span><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif">dengan mengumpulkan <i style="mso-bidi-font-style:normal">foto copy</i> Kartu Kepesertaan BPJS</span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN"><o:p></o:p></span></p>
<br><br>
<p class="MsoListParagraphCxSpMiddle" style="margin-left:39.3pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-18.0pt;
line-height:150%;mso-list:l2 level1 lfo3"><!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;color:black;mso-themecolor:text1;mso-ansi-language:
IN;mso-bidi-font-weight:bold"><span style="mso-list:Ignore">6.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">Semua
Berkas Persyaratan Administrasi dimasukkan dalam map </span></b><b style="mso-bidi-font-weight:normal"><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif">kertas bertulang </span></b><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">dengan
ketentuan <o:p></o:p></span></b></p>

<table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="margin-left:47.95pt;border-collapse:collapse;border:none;mso-border-alt:
 solid black .5pt;mso-border-themecolor:text1;mso-yfti-tbllook:1184;mso-padding-alt:
 0cm 5.4pt 0cm 5.4pt">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes">
  <td width="53" valign="top" style="width:39.65pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoListParagraphCxSpMiddle" align="center" style="margin-left:0cm;
  mso-add-space:auto;text-align:center"><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:
  IN">NO<o:p></o:p></span></b></p>
  </td>
  <td width="303" valign="top" style="width:227.15pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;border-left:none;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoListParagraphCxSpMiddle" align="center" style="margin-left:0cm;
  mso-add-space:auto;text-align:center"><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:
  IN">JURUSAN/PRODI<o:p></o:p></span></b></p>
  </td>
  <td width="164" valign="top" style="width:123.0pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;border-left:none;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoListParagraphCxSpLast" align="center" style="margin-left:0cm;
  mso-add-space:auto;text-align:center"><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:
  IN">WARNA MAP<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:1">
  <td width="53" valign="top" style="width:39.65pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoListParagraphCxSpFirst" align="center" style="margin-left:0cm;
  mso-add-space:auto;text-align:center"><span lang="IN" style="font-size:11.0pt;
  font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">1<o:p></o:p></span></p>
  </td>
  <td width="303" valign="top" style="width:227.15pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoListParagraphCxSpMiddle" style="margin-left:0cm;mso-add-space:
  auto"><span lang="IN" style="font-size:11.0pt;font-family:&quot;Arial&quot;,sans-serif;
  mso-ansi-language:IN">KEPERAWATAN<o:p></o:p></span></p>
  </td>
  <td width="164" valign="top" style="width:123.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoListParagraphCxSpLast" align="center" style="margin-left:0cm;
  mso-add-space:auto;text-align:center"><span lang="IN" style="font-size:11.0pt;
  font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">COKLAT<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:2">
  <td width="53" valign="top" style="width:39.65pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoListParagraphCxSpFirst" align="center" style="margin-left:0cm;
  mso-add-space:auto;text-align:center"><span lang="IN" style="font-size:11.0pt;
  font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">2<o:p></o:p></span></p>
  </td>
  <td width="303" valign="top" style="width:227.15pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoListParagraphCxSpMiddle" style="margin-left:0cm;mso-add-space:
  auto"><span lang="IN" style="font-size:11.0pt;font-family:&quot;Arial&quot;,sans-serif;
  mso-ansi-language:IN">KEBIDANAN<o:p></o:p></span></p>
  </td>
  <td width="164" valign="top" style="width:123.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoListParagraphCxSpLast" align="center" style="margin-left:0cm;
  mso-add-space:auto;text-align:center"><span lang="IN" style="font-size:11.0pt;
  font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">BIRU MUDA<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:3">
  <td width="53" valign="top" style="width:39.65pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoListParagraphCxSpFirst" align="center" style="margin-left:0cm;
  mso-add-space:auto;text-align:center"><span lang="IN" style="font-size:11.0pt;
  font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">3<o:p></o:p></span></p>
  </td>
  <td width="303" valign="top" style="width:227.15pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoListParagraphCxSpMiddle" style="margin-left:0cm;mso-add-space:
  auto"><span lang="IN" style="font-size:11.0pt;font-family:&quot;Arial&quot;,sans-serif;
  mso-ansi-language:IN">GIZI<o:p></o:p></span></p>
  </td>
  <td width="164" valign="top" style="width:123.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoListParagraphCxSpLast" align="center" style="margin-left:0cm;
  mso-add-space:auto;text-align:center"><span lang="IN" style="font-size:11.0pt;
  font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">HIJAU TUA<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:4">
  <td width="53" valign="top" style="width:39.65pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoListParagraphCxSpFirst" align="center" style="margin-left:0cm;
  mso-add-space:auto;text-align:center"><span lang="IN" style="font-size:11.0pt;
  font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">4<o:p></o:p></span></p>
  </td>
  <td width="303" valign="top" style="width:227.15pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoListParagraphCxSpMiddle" style="margin-left:0cm;mso-add-space:
  auto"><span lang="IN" style="font-size:11.0pt;font-family:&quot;Arial&quot;,sans-serif;
  mso-ansi-language:IN">TEKNOLOGI LABORATORIUM MEDIS<o:p></o:p></span></p>
  </td>
  <td width="164" valign="top" style="width:123.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoListParagraphCxSpLast" align="center" style="margin-left:0cm;
  mso-add-space:auto;text-align:center"><span lang="IN" style="font-size:11.0pt;
  font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">KUNING<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:5">
  <td width="53" valign="top" style="width:39.65pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoListParagraphCxSpFirst" align="center" style="margin-left:0cm;
  mso-add-space:auto;text-align:center"><span lang="IN" style="font-size:11.0pt;
  font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">5<o:p></o:p></span></p>
  </td>
  <td width="303" valign="top" style="width:227.15pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoListParagraphCxSpMiddle" style="margin-left:0cm;mso-add-space:
  auto"><span lang="IN" style="font-size:11.0pt;font-family:&quot;Arial&quot;,sans-serif;
  mso-ansi-language:IN">FARMASI<o:p></o:p></span></p>
  </td>
  <td width="164" valign="top" style="width:123.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoListParagraphCxSpLast" align="center" style="margin-left:0cm;
  mso-add-space:auto;text-align:center"><span lang="IN" style="font-size:11.0pt;
  font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">HIJAU MUDA<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:6">
  <td width="53" valign="top" style="width:39.65pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoListParagraphCxSpFirst" align="center" style="margin-left:0cm;
  mso-add-space:auto;text-align:center"><span lang="IN" style="font-size:11.0pt;
  font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">6<o:p></o:p></span></p>
  </td>
  <td width="303" valign="top" style="width:227.15pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoListParagraphCxSpMiddle" style="margin-left:0cm;mso-add-space:
  auto"><span lang="IN" style="font-size:11.0pt;font-family:&quot;Arial&quot;,sans-serif;
  mso-ansi-language:IN">KESEHATAN LINGKUNGAN<o:p></o:p></span></p>
  </td>
  <td width="164" valign="top" style="width:123.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoListParagraphCxSpLast" align="center" style="margin-left:0cm;
  mso-add-space:auto;text-align:center"><span lang="IN" style="font-size:11.0pt;
  font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">BIRU TUA<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:7;mso-yfti-lastrow:yes">
  <td width="53" valign="top" style="width:39.65pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoListParagraphCxSpFirst" align="center" style="margin-left:0cm;
  mso-add-space:auto;text-align:center"><span lang="IN" style="font-size:11.0pt;
  font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">7<o:p></o:p></span></p>
  </td>
  <td width="303" valign="top" style="width:227.15pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoListParagraphCxSpMiddle" style="margin-left:0cm;mso-add-space:
  auto"><span lang="IN" style="font-size:11.0pt;font-family:&quot;Arial&quot;,sans-serif;
  mso-ansi-language:IN">PROMOSI KESEHATAN<o:p></o:p></span></p>
  </td>
  <td width="164" valign="top" style="width:123.0pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
  <p class="MsoListParagraphCxSpLast" align="center" style="margin-left:0cm;
  mso-add-space:auto;text-align:center"><span lang="EN-US" style="font-size:11.0pt;
  font-family:&quot;Arial&quot;,sans-serif">MERAH MUDA<o:p></o:p></span></p>
  </td>
 </tr>
</tbody></table>

<p class="MsoListParagraph" align="center" style="margin-left:39.3pt;mso-add-space:
auto;text-align:center;line-height:150%"><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN"><o:p>&nbsp;</o:p></span></p>

<p class="MsoNormal" style="margin-left:35.45pt;text-align:justify;text-justify:
inter-ideograph;line-height:150%"><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">Persyaratan
dapat </span><span lang="EN-US" style="font-size:11.0pt;line-height:150%;
font-family:&quot;Arial&quot;,sans-serif">diserahkan langsung/dikirimkan<b style="mso-bidi-font-weight:normal"> </b>via Pos/JNE/JNT/Travel paling lambat </span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">diterima pada hari senin tanggal 8 Juli 2024 pukul 16.00
WIB</span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:
&quot;Arial&quot;,sans-serif"> </span><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif">pada alamat </span><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">Direktorat
Lantai I Gedung A</span></b><b style="mso-bidi-font-weight:normal"><span lang="EN-US" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">l</span></b><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">-Zahrawi
Jalan Indragiri Nomor 03 Padang Harapan Bengkulu</span></b><b style="mso-bidi-font-weight:
normal"><span lang="EN-US" style="font-size:11.0pt;line-height:150%;font-family:
&quot;Arial&quot;,sans-serif"> (untuk konfirmasi pengiriman berkas dapat menghubungi
Whatsapp (WA) Admin Sipenmaru/082181624064).<o:p></o:p></span></b></p>

<p class="MsoNormal" style="margin-left:35.45pt;text-align:justify;text-justify:
inter-ideograph;line-height:150%"><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN"><o:p>&nbsp;</o:p></span></p>

<p class="MsoListParagraphCxSpFirst" align="center" style="margin-left:35.45pt;
mso-add-space:auto;text-align:center;line-height:150%"><b style="mso-bidi-font-weight:
normal"><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:
&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">BILA SAMPAI TANGGAL 8 JULI</span></b><b><span lang="EN-US" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">
202</span></b><b style="mso-bidi-font-weight:normal"><span lang="EN-US" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">4</span></b><b style="mso-bidi-font-weight:normal"><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN"> </span></b><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">BELUM
MELAKSANAKAN REGISTRASI</span></b><b style="mso-bidi-font-weight:normal"><span lang="EN-US" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">
DAN PENGUMPULAN BERKAS</span></b><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">, </span></b><b style="mso-bidi-font-weight:normal"><span lang="EN-US" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif"><o:p></o:p></span></b></p>

<p class="MsoListParagraphCxSpLast" align="center" style="margin-left:35.45pt;
mso-add-space:auto;text-align:center;line-height:150%"><b style="mso-bidi-font-weight:
normal"><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:
&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">MAKA PESERTA DIANGGAP MENGUNDURKAN
DIRI</span></b><b style="mso-bidi-font-weight:normal"><span lang="EN-US" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">.<o:p></o:p></span></b></p>
  

</body>
</html>
<script>
  window.print();
</script>
<?php } elseif ($a['status_lulus_tahap2'] == null) { 
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
