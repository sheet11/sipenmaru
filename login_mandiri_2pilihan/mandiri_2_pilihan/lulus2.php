<?php
include "session.php";
?>

<?php
include "../config/koneksi.php";
include("bar128.php");
include("library.php");
include("fucnt_tgl.php");


$query = mysqli_query($kon, "select * from tb_formulir4 where username='$_SESSION[username]' ");
$a = mysqli_fetch_array($query);
$tanggal = tgl_indo($a['tanggal_lahir']);
date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
// echo date('h:i:s a'); // menampilkan jam sekarang
// echo date('l, d-m-Y  H:i:s'); //kombinasi jam dan tanggal

if ($a['status_lulus_tahap2'] == "Lulus") {
?>
  <html>

  <body>

    <table width="100%" border="0" align="center">
      <tr>
        <td><img src="../assets/img_kop/logobaru.png" width="100%" /></td>

      </tr>
    </table>

    <table align="center">
      <!--<tr>-->
      <!--    <td rowspan=18 width=164 valign="top"><a href="../assets/img/<?php echo $a['nama_foto']; ?>" class="fancy">-->
      <!--    <img src="../assets/img/<?php echo $a['nama_foto']; ?>" alt="" width=150 height=175 border="0" /></td>-->
      <!--</tr>-->
      <br>
      <br>

      <tr>
        <td valign="top">Jalur</td>
        <td valign="top">:</td>
        <td>MANDIRI 2 PILIHAN</td>
      </tr>

      <tr>
        <td valign="top" width="200">ID/Nomor Kartu Ujian</td>
        <td valign="top">:</td>
        <td><?php echo $a['username']; ?></td>
      </tr>

      <tr>
        <td valign="top">Nama</td>
        <td valign="top">:</td>
        <td><?php echo $a['nama_lengkap']; ?></td>
      </tr>

      <tr>
        <td valign="top">Prodi lulus</td>
        <td valign="top">:</td>
        <td><?php echo $a['prodi_lulus']; ?></td>
      </tr>

      <tr>
        <td colspan="4"><?php echo bar128(stripslashes($a['username'])); ?></td>
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
          <h1>LULUS SPMB MANDIRI TAHAP II</h1>
        </td>
      </tr>
    </table>

<div class=WordSection1>

<p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-justify:
inter-ideograph;line-height:150%'><span lang=IN style='font-size:11.0pt;
line-height:150%;font-family:"Arial",sans-serif;mso-ansi-language:IN'>Peserta
yang dinyatakan LULUS Seleksi Penerimaan Mahasiswa Baru (SPMB) Tahap II Jalur Mandiri
diwajibkan untuk melakukan <b style='mso-bidi-font-weight:normal'>REGISTRASI:<o:p></o:p></b></span></p>

<p class=MsoListParagraphCxSpFirst style='margin-top:0cm;margin-right:0cm;
margin-bottom:6.0pt;margin-left:39.25pt;mso-add-space:auto;text-align:justify;
text-justify:inter-ideograph;text-indent:-18.0pt;line-height:150%;mso-list:
l1 level1 lfo20'><![if !supportLists]><span lang=IN style='font-size:11.0pt;
line-height:150%;font-family:Wingdings;mso-fareast-font-family:Wingdings;
mso-bidi-font-family:Wingdings;mso-ansi-language:IN'><span style='mso-list:
Ignore'>v<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:11.0pt;
line-height:150%;font-family:"Arial",sans-serif'>PEMBAYARAN </span></b><span
lang=IN style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>pada tanggal <b style='mso-bidi-font-weight:normal'>30
Juni s.d 02 Juli</b></span><b><span lang=EN-US style='font-size:11.0pt;
line-height:150%;font-family:"Arial",sans-serif'> 202</span></b><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:11.0pt;
line-height:150%;font-family:"Arial",sans-serif'>5 (<span class=SpellE>boleh</span>
<span class=SpellE>dilakukan</span> via transfer)</span></b><span lang=IN
style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'><o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:6.0pt;margin-left:39.25pt;mso-add-space:auto;text-align:justify;
text-justify:inter-ideograph;text-indent:-18.0pt;line-height:150%;mso-list:
l1 level1 lfo20'><![if !supportLists]><span lang=IN style='font-size:11.0pt;
line-height:150%;font-family:Wingdings;mso-fareast-font-family:Wingdings;
mso-bidi-font-family:Wingdings;mso-ansi-language:IN'><span style='mso-list:
Ignore'>v<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:11.0pt;
line-height:150%;font-family:"Arial",sans-serif'>PENGUMPULAN BERKAS</span></b><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:11.0pt;
line-height:150%;font-family:"Arial",sans-serif;mso-ansi-language:IN'> </span></b><span
lang=IN style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>pada tanggal <b style='mso-bidi-font-weight:normal'>30
Juni s.d 02 Juli</b></span><b><span lang=EN-US style='font-size:11.0pt;
line-height:150%;font-family:"Arial",sans-serif'> 202</span></b><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:11.0pt;
line-height:150%;font-family:"Arial",sans-serif'>5<span style='mso-bidi-font-weight:
bold'> </span></span></b><span lang=IN style='font-size:11.0pt;line-height:
150%;font-family:"Arial",sans-serif;mso-ansi-language:IN'>dapat </span><span
class=SpellE><span lang=EN-US style='font-size:11.0pt;line-height:150%;
font-family:"Arial",sans-serif'>diserahkan</span></span><span lang=EN-US
style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif'> <span
class=SpellE>langsung</span>/<span class=SpellE>dikirimkan</span><b
style='mso-bidi-font-weight:normal'> </b>via Pos/JNE/JNT/Travel</span><span
lang=IN style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>, pukul 08.00-1</span><span lang=EN-US style='font-size:
11.0pt;line-height:150%;font-family:"Arial",sans-serif'>5</span><span lang=IN
style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>.00 WIB</span><span lang=EN-US style='font-size:11.0pt;
line-height:150%;font-family:"Arial",sans-serif'> pada <span class=SpellE>alamat</span>
</span><b style='mso-bidi-font-weight:normal'><span lang=IN style='font-size:
11.0pt;line-height:150%;font-family:"Arial",sans-serif;mso-ansi-language:IN'>Direktorat
Lantai I Gedung A</span></b><b style='mso-bidi-font-weight:normal'><span
lang=EN-US style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif'>l</span></b><b
style='mso-bidi-font-weight:normal'><span lang=IN style='font-size:11.0pt;
line-height:150%;font-family:"Arial",sans-serif;mso-ansi-language:IN'>-Zahrawi
Jalan Indragiri Nomor 03 Padang Harapan Bengkulu</span></b><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:11.0pt;line-height:150%;font-family:
"Arial",sans-serif'> (<span class=SpellE>untuk</span> <span class=SpellE>konfirmasi</span>
<span class=SpellE>pengiriman</span> <span class=SpellE>berkas</span> <span
class=SpellE>dapat</span> <span class=SpellE>menghubungi</span> <span
class=SpellE>Whatsapp</span> (WA) Admin<span style='color:red'> </span>SPMB <span
class=SpellE>Poltekkes</span> Bengkulu/081370216550).</span></b><span lang=IN
style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'><o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:21.3pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-21.3pt;
line-height:150%;mso-list:l9 level1 lfo3'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span lang=IN style='font-size:11.0pt;
line-height:150%;font-family:"Arial",sans-serif;mso-fareast-font-family:Arial;
mso-ansi-language:IN'><span style='mso-list:Ignore'>A.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><b style='mso-bidi-font-weight:normal'><span
lang=IN style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>Persyaratan Administrasi Keuangan <o:p></o:p></span></b></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:39.3pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-18.0pt;
line-height:150%;mso-list:l4 level1 lfo4'><![if !supportLists]><span lang=IN
style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN'><span style='mso-list:Ignore'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
lang=IN style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>Pembayaran Biaya Pendidikan Uang Kuliah Tunggal (UKT)
yang jumlahnya sesuai dengan</span><span lang=IN style='font-size:11.0pt;
line-height:150%;font-family:"Arial",sans-serif'> </span><span lang=IN
style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>Program Studi melalui <b><span style='color:black;
mso-themecolor:text1'>Rekening Bank MUAMALAT No. Rekening 4320666666 an. RPL
016 BLU POLTEKKESUNTUK OPS </span></b><span style='color:black;mso-themecolor:
text1'>atau<b> Rekening Bank Syariah Indonesia (BSI) No. Rekening 7632153001
an. RPL 016 BLU POLTEKKES BKL UTK OPS P</b></span></span><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:11.0pt;line-height:150%;font-family:
"Arial",sans-serif'>.<span style='color:red'> </span></span></b><span lang=IN
style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>(</span><span class=SpellE><span lang=EN-US
style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif'>dapat</span></span><span
lang=EN-US style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif'>
<span class=SpellE>diakses</span> <span class=SpellE>melalui</span> link </span><span
lang=EN-US><a href="https://bit.ly/Ukt_poltekkes">https://bit.ly/Ukt_poltekkes</a>).</span><span
lang=IN style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
color:red;mso-ansi-language:IN'><o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:39.3pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-18.0pt;
line-height:150%;mso-list:l4 level1 lfo4'><![if !supportLists]><span lang=IN
style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN'><span style='mso-list:Ignore'>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
lang=IN style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>Pembayaran Biaya Seragam </span><span lang=EN-US
style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif'>dan
Alat Kesehatan </span><span lang=IN style='font-size:11.0pt;line-height:150%;
font-family:"Arial",sans-serif;mso-ansi-language:IN'>yang jumlahnya sesuai
dengan Program Studi melalui <b style='mso-bidi-font-weight:normal'>Bank
Syariah Indonesia (BSI) Cabang Bengkulu No. Rekening <span
style='mso-spacerun:yes'>�</span>7282483372 an. KPN POLTEKKES KEMENKES BKL.</b></span><b
style='mso-bidi-font-weight:normal'><span lang=IN style='font-size:11.0pt;
line-height:150%;font-family:"Arial",sans-serif'> </span></b><span lang=IN
style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>(</span><span class=SpellE><span lang=EN-US
style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif'>dapat</span></span><span
lang=EN-US style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif'>
<span class=SpellE>diakses</span> <span class=SpellE>melalui</span> link<span
style='color:red'> </span></span><span lang=EN-US><a
href="https://bit.ly/biaya_seragam">https://bit.ly/biaya_seragam</a></span><span
lang=EN-US style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif'>)</span><span
lang=EN-US>.</span><span lang=IN style='font-size:11.0pt;line-height:150%;
font-family:"Arial",sans-serif;color:red;mso-ansi-language:IN'><o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:39.3pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-18.0pt;
line-height:150%;mso-list:l4 level1 lfo4'><![if !supportLists]><span lang=IN
style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN'><span style='mso-list:Ignore'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
lang=IN style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>Pembayaran Sumbangan Sukarela Pembangunan Masjid
Tarbiyatush Shihhah melalui Rekening<span style='color:red'> </span><b>Bank
Muamalat Indonesia No. Rekening 4310049394</b> atau <b style='mso-bidi-font-weight:
normal'>Bank Syariah Indonesia (BSI) Cabang Bengkulu No. Rekening 4362324040
an. MASJID TARBIYATUSH SHIHHAH. </b><o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:39.3pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-18.0pt;
line-height:150%;mso-list:l4 level1 lfo4'><![if !supportLists]><span lang=IN
style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN'><span style='mso-list:Ignore'>4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
lang=IN style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>Pembayaran Iuran Kegiatan Organisasi Mahasiswa Poltekkes
Kemenkes Bengkulu dengan rincian Diploma Tiga sebesar <b>Rp 300.000,</b>- (tiga
ratus ribu rupiah), Sarjana Terapan Gizi dan Dietetika/ Promosi Kesehatan sebesar
<b>Rp 400.000</b>,- (empat ratus ribu rupiah), Sarjana Terapan + Pendidikan
Profesi Ners dan Sarjana Terapan+ Pendidikan Profesi Bidan sebesar <b>Rp
500.000</b>,- (lima ratus ribu rupiah), RPL Sarjana Terapan Keperawatan/RPL
Sarjana Terapan Kebidanan dan RPL Profesi Ners/RPL Profesi Bidan sebesar <b>Rp 100.000</b>,-
(seratus ribu rupiah) dana<span style='mso-spacerun:yes'>� </span>dibayarkan 1
kali selama menempuh pendidikan melalui <b style='mso-bidi-font-weight:normal'>Bank
Tabungan Negara (BTN) No. Rekening 00037-01-50-050725-4 an. ORMAWA POLTEKKES
KEMENKES BENGKULU.</b><span style='color:red'><o:p></o:p></span></span></p>

<p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
6.0pt;margin-left:39.1pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-17.85pt;line-height:150%;mso-list:l4 level1 lfo4'><![if !supportLists]><span
lang=IN style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN'><span style='mso-list:Ignore'>5.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><b
style='mso-bidi-font-weight:normal'><span lang=IN style='font-size:11.0pt;
line-height:150%;font-family:"Arial",sans-serif;mso-ansi-language:IN'>UANG YANG
TELAH DISETOR TIDAK DAPAT DITARIK/DIKEMBALIKAN.</span></b><span lang=IN
style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'><o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:21.3pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-21.3pt;
line-height:150%;mso-list:l9 level1 lfo3'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span lang=IN style='font-size:11.0pt;
line-height:150%;font-family:"Arial",sans-serif;mso-fareast-font-family:Arial;
mso-ansi-language:IN'><span style='mso-list:Ignore'>B.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><b style='mso-bidi-font-weight:normal'><span
lang=IN style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>Persyaratan Administrasi<o:p></o:p></span></b></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:39.3pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-18.0pt;
line-height:150%;mso-list:l13 level1 lfo5'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span lang=IN style='font-size:11.0pt;
line-height:150%;font-family:"Arial",sans-serif;mso-fareast-font-family:Arial;
mso-ansi-language:IN'><span style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><span class=SpellE><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:11.0pt;line-height:150%;font-family:
"Arial",sans-serif'>Kelengkapan</span></b></span><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:11.0pt;line-height:150%;font-family:
"Arial",sans-serif'> <span class=SpellE>Administrasi</span> <span class=SpellE>Meliputi</span>:</span></b><span
lang=IN style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'><o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:2.0cm;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-14.15pt;
line-height:150%;mso-list:l18 level1 lfo7'><![if !supportLists]><span lang=IN
style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN'><span style='mso-list:Ignore'>a.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
lang=IN style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>Bukti Kelulusan Tahap II SPMB </span><span lang=EN-US
style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif'>Jalur </span><span
lang=IN style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>Mandiri</span><span lang=EN-US style='font-size:11.0pt;
line-height:150%;font-family:"Arial",sans-serif'> <span class=SpellE>sebanyak</span></span><span
lang=IN style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'> 1 lembar.<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:2.0cm;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-14.15pt;
line-height:150%;mso-list:l18 level1 lfo7'><![if !supportLists]><span lang=IN
style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN'><span style='mso-list:Ignore'>b.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><i
style='mso-bidi-font-style:normal'><span lang=EN-US style='font-size:11.0pt;
line-height:150%;font-family:"Arial",sans-serif'>Foto Copy </span></i><span
class=SpellE><span lang=EN-US style='font-size:11.0pt;line-height:150%;
font-family:"Arial",sans-serif;mso-bidi-font-style:italic'>Legalisir</span></span><span
lang=EN-US style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-bidi-font-style:italic'> Ijazah <span class=SpellE>atau</span> Asli Surat <span
class=SpellE>Keterangan</span> Lulus <span class=SpellE>dari</span> <span
class=SpellE>Kepala</span> <span class=SpellE>Sekolah</span> <span
class=SpellE>Sebanyak</span> 1 Lembar.</span><span lang=IN style='font-size:
11.0pt;line-height:150%;font-family:"Arial",sans-serif;mso-ansi-language:IN'><o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:39.3pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-18.0pt;
line-height:150%;mso-list:l13 level1 lfo5'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span lang=IN style='font-size:11.0pt;
line-height:150%;font-family:"Arial",sans-serif;mso-fareast-font-family:Arial;
mso-ansi-language:IN'><span style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><b style='mso-bidi-font-weight:normal'><span
lang=IN style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>Bukti Setor Asli meliputi:</span></b><span lang=IN
style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'><o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:2.0cm;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-14.15pt;
line-height:150%;mso-list:l16 level1 lfo8'><![if !supportLists]><span lang=IN
style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN'><span style='mso-list:Ignore'>a.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
lang=IN style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>Uang Kuliah Tunggal (UKT)<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:2.0cm;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-14.15pt;
line-height:150%;mso-list:l16 level1 lfo8'><![if !supportLists]><span lang=IN
style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN'><span style='mso-list:Ignore'>b.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
lang=IN style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>Uang Seragam</span><span lang=EN-US style='font-size:
11.0pt;line-height:150%;font-family:"Arial",sans-serif'> dan Alat Kesehatan</span><span
lang=IN style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'><o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:2.0cm;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-14.15pt;
line-height:150%;mso-list:l16 level1 lfo8'><![if !supportLists]><span lang=IN
style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN'><span style='mso-list:Ignore'>c.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
lang=IN style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>Uang Pembangunan Masjid<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:2.0cm;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-14.15pt;
line-height:150%;mso-list:l16 level1 lfo8'><![if !supportLists]><span lang=IN
style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN'><span style='mso-list:Ignore'>d.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
lang=IN style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>Uang Iuran Kegiatan Organisasi Mahasiswa<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:39.3pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-18.0pt;
line-height:150%;mso-list:l13 level1 lfo5'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span lang=IN style='font-size:11.0pt;
line-height:150%;font-family:"Arial",sans-serif;mso-fareast-font-family:Arial;
mso-ansi-language:IN'><span style='mso-list:Ignore'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><b style='mso-bidi-font-weight:normal'><span
lang=IN style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>Surat Pernyataan Tidak menuntut Pengembalian Dana
Pendidikan </span></b><span lang=IN style='font-size:11.0pt;line-height:150%;
font-family:"Arial",sans-serif;mso-ansi-language:IN'>ditandatangani Calon
Mahasiswa Baru dan diketahui oleh Orang Tua di atas Materai 10.000</span><span
lang=IN style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif'>
</span><span lang=IN style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>(</span><span class=SpellE><span lang=EN-US
style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif'>dapat</span></span><span
lang=EN-US style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif'>
<span class=SpellE>diakses</span> <span class=SpellE>melalui</span> link</span><span
lang=EN-US style='font-family:"Arial",sans-serif'>:</span><span lang=IN
style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
color:red;mso-ansi-language:IN'><o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:39.3pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;line-height:150%'><span
lang=EN-US><a href="https://bit.ly/surat_tidak_menuntut_pengembalian_dana">https://bit.ly/surat_tidak_menuntut_pengembalian_dana</a></span><span
lang=EN-US style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif'>).</span><span
lang=IN style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
color:red;mso-ansi-language:IN'><o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:39.3pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-18.0pt;
line-height:150%;mso-list:l13 level1 lfo5'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span lang=IN style='font-size:11.0pt;
line-height:150%;font-family:"Arial",sans-serif;mso-fareast-font-family:Arial;
mso-ansi-language:IN'><span style='mso-list:Ignore'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><b style='mso-bidi-font-weight:normal'><span
lang=IN style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>Calon Mahasiswa Baru (Kecuali Mahasiswa RPL) wajib
menjadi Peserta BPJS dan memindahkan kepesertaan ke Fasilitas Kesehatan
(Faskes) Klinik Hygea Poltekkes Kemenkes Bengkul</span></b><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:11.0pt;line-height:150%;font-family:
"Arial",sans-serif'>u </span></b><span lang=IN style='font-size:11.0pt;
line-height:150%;font-family:"Arial",sans-serif;mso-ansi-language:IN'>(</span><span
class=SpellE><span lang=EN-US style='font-size:11.0pt;line-height:150%;
font-family:"Arial",sans-serif'>dengan</span></span><span lang=EN-US
style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif'> <span
class=SpellE>mengumpulkan</span> <span class=SpellE><i style='mso-bidi-font-style:
normal'>foto</i></span><i style='mso-bidi-font-style:normal'> copy</i> Kartu <span
class=SpellE>Kepesertaan</span> BPJS). Bagi yang <span class=SpellE>belum</span>
<span class=SpellE>pernah</span> <span class=SpellE>menjadi</span> <span
class=SpellE>peserta</span> BPJS <span class=SpellE>wajib</span> <span
class=SpellE>membawa</span> <span class=SpellE><i>foto</i></span><i> copy</i>
KTP, Kartu <span class=SpellE>Keluarga</span> (KK) dan <span class=SpellE>Buku</span>
Tabungan.</span><span lang=IN style='font-size:11.0pt;line-height:150%;
font-family:"Arial",sans-serif;mso-ansi-language:IN'><o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:39.3pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-18.0pt;
line-height:150%;mso-list:l13 level1 lfo5'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span lang=IN style='font-size:11.0pt;
line-height:150%;font-family:"Arial",sans-serif;mso-fareast-font-family:Arial;
mso-ansi-language:IN'><span style='mso-list:Ignore'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><b style='mso-bidi-font-weight:normal'><span
lang=IN style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>Semua Berkas Persyaratan Administrasi dimasukkan dalam
map </span></b><span class=SpellE><b style='mso-bidi-font-weight:normal'><span
lang=EN-US style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif'>kertas</span></b></span><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:11.0pt;
line-height:150%;font-family:"Arial",sans-serif'> <span class=SpellE>bertulang</span>
</span></b><b style='mso-bidi-font-weight:normal'><span lang=IN
style='font-size:11.0pt;line-height:150%;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>dengan ketentuan <o:p></o:p></span></b></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='margin-left:39.3pt;border-collapse:collapse;border:none;mso-border-alt:
 solid black .5pt;mso-border-themecolor:text1;mso-yfti-tbllook:1184;mso-padding-alt:
 0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=68 valign=top style='width:51.15pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle align=center style='margin-left:0cm;
  mso-add-space:auto;text-align:center;line-height:115%'><b style='mso-bidi-font-weight:
  normal'><span lang=IN style='font-size:11.0pt;line-height:115%;font-family:
  "Arial",sans-serif;mso-ansi-language:IN'>NO<o:p></o:p></span></b></p>
  </td>
  <td width=326 valign=top style='width:244.25pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;border-left:none;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle align=center style='margin-left:0cm;
  mso-add-space:auto;text-align:center;line-height:115%'><b style='mso-bidi-font-weight:
  normal'><span lang=IN style='font-size:11.0pt;line-height:115%;font-family:
  "Arial",sans-serif;mso-ansi-language:IN'>JURUSAN/PRODI<o:p></o:p></span></b></p>
  </td>
  <td width=185 valign=top style='width:138.5pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;border-left:none;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraphCxSpLast align=center style='margin-left:0cm;
  mso-add-space:auto;text-align:center;line-height:115%'><b style='mso-bidi-font-weight:
  normal'><span lang=IN style='font-size:11.0pt;line-height:115%;font-family:
  "Arial",sans-serif;mso-ansi-language:IN'>WARNA MAP<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=68 valign=top style='width:51.15pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraphCxSpFirst align=center style='margin-left:0cm;
  mso-add-space:auto;text-align:center;line-height:115%'><span lang=IN
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif;
  mso-ansi-language:IN'>1<o:p></o:p></span></p>
  </td>
  <td width=326 valign=top style='width:244.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:
  auto;line-height:115%'><span lang=IN style='font-size:11.0pt;line-height:
  115%;font-family:"Arial",sans-serif;mso-ansi-language:IN'>KEPERAWATAN<o:p></o:p></span></p>
  </td>
  <td width=185 valign=top style='width:138.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraphCxSpLast align=center style='margin-left:0cm;
  mso-add-space:auto;text-align:center;line-height:115%'><span lang=IN
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif;
  mso-ansi-language:IN'>COKLAT<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=68 valign=top style='width:51.15pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraphCxSpFirst align=center style='margin-left:0cm;
  mso-add-space:auto;text-align:center;line-height:115%'><span lang=IN
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif;
  mso-ansi-language:IN'>2<o:p></o:p></span></p>
  </td>
  <td width=326 valign=top style='width:244.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:
  auto;line-height:115%'><span lang=IN style='font-size:11.0pt;line-height:
  115%;font-family:"Arial",sans-serif;mso-ansi-language:IN'>KEBIDANAN<o:p></o:p></span></p>
  </td>
  <td width=185 valign=top style='width:138.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraphCxSpLast align=center style='margin-left:0cm;
  mso-add-space:auto;text-align:center;line-height:115%'><span lang=IN
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif;
  mso-ansi-language:IN'>BIRU MUDA<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td width=68 valign=top style='width:51.15pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraphCxSpFirst align=center style='margin-left:0cm;
  mso-add-space:auto;text-align:center;line-height:115%'><span lang=IN
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif;
  mso-ansi-language:IN'>3<o:p></o:p></span></p>
  </td>
  <td width=326 valign=top style='width:244.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:
  auto;line-height:115%'><span lang=IN style='font-size:11.0pt;line-height:
  115%;font-family:"Arial",sans-serif;mso-ansi-language:IN'>GIZI<o:p></o:p></span></p>
  </td>
  <td width=185 valign=top style='width:138.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraphCxSpLast align=center style='margin-left:0cm;
  mso-add-space:auto;text-align:center;line-height:115%'><span lang=IN
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif;
  mso-ansi-language:IN'>HIJAU TUA<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4'>
  <td width=68 valign=top style='width:51.15pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraphCxSpFirst align=center style='margin-left:0cm;
  mso-add-space:auto;text-align:center;line-height:115%'><span lang=IN
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif;
  mso-ansi-language:IN'>4<o:p></o:p></span></p>
  </td>
  <td width=326 valign=top style='width:244.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:
  auto;line-height:115%'><span lang=IN style='font-size:11.0pt;line-height:
  115%;font-family:"Arial",sans-serif;mso-ansi-language:IN'>TEKNOLOGI
  LABORATORIUM MEDIS<o:p></o:p></span></p>
  </td>
  <td width=185 valign=top style='width:138.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraphCxSpLast align=center style='margin-left:0cm;
  mso-add-space:auto;text-align:center;line-height:115%'><span lang=IN
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif;
  mso-ansi-language:IN'>KUNING<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5'>
  <td width=68 valign=top style='width:51.15pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraphCxSpFirst align=center style='margin-left:0cm;
  mso-add-space:auto;text-align:center;line-height:115%'><span lang=IN
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif;
  mso-ansi-language:IN'>5<o:p></o:p></span></p>
  </td>
  <td width=326 valign=top style='width:244.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:
  auto;line-height:115%'><span lang=IN style='font-size:11.0pt;line-height:
  115%;font-family:"Arial",sans-serif;mso-ansi-language:IN'>FARMASI<o:p></o:p></span></p>
  </td>
  <td width=185 valign=top style='width:138.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraphCxSpLast align=center style='margin-left:0cm;
  mso-add-space:auto;text-align:center;line-height:115%'><span lang=IN
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif;
  mso-ansi-language:IN'>HIJAU MUDA<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6'>
  <td width=68 valign=top style='width:51.15pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraphCxSpFirst align=center style='margin-left:0cm;
  mso-add-space:auto;text-align:center;line-height:115%'><span lang=IN
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif;
  mso-ansi-language:IN'>6<o:p></o:p></span></p>
  </td>
  <td width=326 valign=top style='width:244.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:
  auto;line-height:115%'><span lang=IN style='font-size:11.0pt;line-height:
  115%;font-family:"Arial",sans-serif;mso-ansi-language:IN'>KESEHATAN
  LINGKUNGAN<o:p></o:p></span></p>
  </td>
  <td width=185 valign=top style='width:138.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraphCxSpLast align=center style='margin-left:0cm;
  mso-add-space:auto;text-align:center;line-height:115%'><span lang=IN
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif;
  mso-ansi-language:IN'>BIRU TUA<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;mso-yfti-lastrow:yes'>
  <td width=68 valign=top style='width:51.15pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraphCxSpFirst align=center style='margin-left:0cm;
  mso-add-space:auto;text-align:center;line-height:115%'><span lang=IN
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif;
  mso-ansi-language:IN'>7<o:p></o:p></span></p>
  </td>
  <td width=326 valign=top style='width:244.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:
  auto;line-height:115%'><span lang=IN style='font-size:11.0pt;line-height:
  115%;font-family:"Arial",sans-serif;mso-ansi-language:IN'>PROMOSI KESEHATAN<o:p></o:p></span></p>
  </td>
  <td width=185 valign=top style='width:138.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraphCxSpLast align=center style='margin-left:0cm;
  mso-add-space:auto;text-align:center;line-height:115%'><span lang=EN-US
  style='font-size:11.0pt;line-height:115%;font-family:"Arial",sans-serif'>MERAH
  MUDA<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='text-align:justify;text-justify:inter-ideograph;
line-height:150%'><span lang=IN style='font-size:11.0pt;line-height:150%;
font-family:"Arial",sans-serif;color:#EE0000;mso-ansi-language:IN'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-left:35.45pt;text-align:justify;text-justify:
inter-ideograph;line-height:150%'><span lang=IN style='font-size:11.0pt;
line-height:150%;font-family:"Arial",sans-serif;color:red;mso-ansi-language:
IN'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='margin-top:0cm;margin-right:9.6pt;
margin-bottom:0cm;margin-left:42.55pt;margin-bottom:.0001pt;text-align:center'><span
lang=IN style='font-size:11.0pt;font-family:"Arial",sans-serif;mso-ansi-language:
IN;mso-bidi-font-weight:bold'>BILA SAMPAI TANGGAL </span><b style='mso-bidi-font-weight:
normal'><span lang=IN style='font-size:11.0pt;font-family:"Arial",sans-serif;
mso-ansi-language:IN'>02 JULI </span></b><b style='mso-bidi-font-weight:normal'><span
lang=EN-US style='font-size:11.0pt;font-family:"Arial",sans-serif'>2025</span></b><span
lang=IN style='font-size:11.0pt;font-family:"Arial",sans-serif;mso-ansi-language:
IN;mso-bidi-font-weight:bold'> BELUM MELAKSANAKAN REGISTRASI</span><span
lang=EN-US style='font-size:11.0pt;font-family:"Arial",sans-serif;mso-bidi-font-weight:
bold'> DAN PENGUMPULAN BERKAS</span><span lang=IN style='font-size:11.0pt;
font-family:"Arial",sans-serif;mso-ansi-language:IN;mso-bidi-font-weight:bold'>,
MAKA PESERTA DIANGGAP </span><b style='mso-bidi-font-weight:normal'><span
lang=IN style='font-size:11.0pt;font-family:"Arial",sans-serif;mso-ansi-language:
IN'>MENGUNDURKAN DIRI</span></b><span lang=EN-US style='font-size:11.0pt;
font-family:"Arial",sans-serif;mso-bidi-font-weight:bold'>.<o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
style='font-size:11.0pt;font-family:"Arial",sans-serif;color:red'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='font-size:11.0pt;font-family:"Arial",sans-serif;
color:red'><o:p>&nbsp;</o:p></span></p>

</div>

  </body>

  </html>
  <script>
    window.print();
  </script>
<?php } elseif ($a['status_lulus'] == 'Tidak Lulus' || $a['status_lulus'] == null) {
     header("Location: ../index.php");
    exit();
}elseif ($a['status_lulus_tahap2'] == null || $a['status_lulus_tahap2'] == 'Tidak Lulus') {
  echo "<br><br><br><h1 style= text-align:center >Maaf Anda Belum Lulus SPMB Mandiri tahap II </a> </h1><br><a href='../index.php'>Kembali </a>";
} else {
  header("location:../index.php");
}
?>