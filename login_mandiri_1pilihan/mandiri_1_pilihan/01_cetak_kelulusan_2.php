<?php
  include "session.php";
  include"../config/koneksi.php";
  include("bar128.php");

    
  $query=mysqli_query($kon,"select * from tb_formulir4 where username='$_SESSION[username]' ");
   $a=mysqli_fetch_array($query);
?>
<html>
  <body>
      <table width="100%" border="0"  align="center">
      <tr>
      <td width="101" height="102"><img src="../assets/img/logo-kemenkes.png" width="150" height="100"/></td>
      <td width="601" align="center"><strong><h4>Seleksi Penerimaan Mahasiswa Baru (SIPENMARU)</br>PENDIDIKAN TENAGA KESEHATAN <br>Poltekkes Kemenkes Bengkulu Tahun 2022/2023</h4></strong></td>
      <td width="109" align="center"><img src="../assets/img/logo.png" width="100" height="100"/></td>
      </tr>
      <tr>
      <td colspan="3"><hr></hr></td>
      </tr>
    </table>
   <body lang=EN-US style='tab-interval:36.0pt'>
    

<div class=Section1>

<div align=center>



<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0 width=642
 style='width:481.8pt;border-collapse:collapse;border:none;mso-yfti-tbllook:
 1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;mso-border-insideh:none;mso-border-insidev:
 none'>
 <p></p>

 
 <tr style='mso-yfti-irow:4;height:18.9pt'>
  <td width=214 valign=top style='width:160.6pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.9pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Times New Roman","serif"'>ID<span
  class=SpellE></span><span style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><o:p></o:p></span></p>
  </td>
  <td width=21 valign=top style='width:16.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.9pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Times New Roman","serif"'>:<o:p></o:p></span></p>
  </td>
  <td width=407 valign=top style='width:305.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.9pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-family:"Times New Roman","serif"'><o:p><?php echo "$a[username]"; ?></o:p></span></p>
  </td>
 </tr>

 <tr style='mso-yfti-irow:2;height:20.1pt'>
  <td width=214 valign=top style='width:160.6pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:20.1pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><span style='font-family:"Times New Roman","serif"'>Nama Lengkap</span></span><span
  style='font-family:"Times New Roman","serif"'><span style='mso-tab-count:
  1'>&nbsp;&nbsp; </span><o:p></o:p></span></p>
  </td>
  <td width=21 valign=top style='width:16.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:20.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Times New Roman","serif"'>:   <o:p></o:p></span></p>
  </td>
  <td width=407 valign=top style='width:305.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:20.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-family:"Times New Roman","serif"'><?php echo "$a[nama_lengkap]"; ?><o:p></o:p></span></p>
  </td>
 </tr>
 
 <tr style='mso-yfti-irow:2;height:20.1pt'>
  <td width=214 valign=top style='width:160.6pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:20.1pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><span style='font-family:"Times New Roman","serif"'>Program Studi</span></span><span
  style='font-family:"Times New Roman","serif"'><span style='mso-tab-count:
  1'>&nbsp;&nbsp; </span><o:p></o:p></span></p>
  </td>
  <td width=21 valign=top style='width:16.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:20.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Times New Roman","serif"'>:   <o:p></o:p></span></p>
  </td>
  <td width=407 valign=top style='width:305.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:20.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-family:"Times New Roman","serif"'><?php echo "$a[pilihan_prodi]"; ?><o:p></o:p></span></p>
  </td>
 </tr>

  <tr style='mso-yfti-irow:2;height:20.1pt'>
  <td width=214 valign=top style='width:160.6pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:20.1pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><span style='font-family:"Times New Roman","serif"'>Status</span></span><span
  style='font-family:"Times New Roman","serif"'><span style='mso-tab-count:
  1'>&nbsp;&nbsp; </span><o:p></o:p></span></p>
  </td>
  <td width=21 valign=top style='width:16.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:20.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Times New Roman","serif"'>:   <o:p></o:p></span></p>
  </td>
  <td width=407 valign=top style='width:305.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:20.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-family:"Times New Roman","serif"'><?php echo "$a[status_pmdp_2]"; ?><o:p></o:p></span></p>
  </td>
 </tr>

  <tr style='mso-yfti-irow:2;height:20.1pt'>
  <td width=214 valign=top style='width:160.6pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:20.1pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><span style='font-family:"Times New Roman","serif"'><?php echo bar128 (stripslashes($a['username'])); ?></span></span><span
  style='font-family:"Times New Roman","serif"'><span style='mso-tab-count:
  1'>&nbsp;&nbsp; </span><o:p></o:p></span></p>
  </td>
  <td width=21 valign=top style='width:16.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:20.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Times New Roman","serif"'> <o:p></o:p></span></p>
  </td>
  <td width=407 valign=top style='width:305.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:20.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:left;line-height:normal'><span style='font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
 </tr>



 
</table>

</div>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'><strong>CATATAN :</strong></p>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</p>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;line-height:150%;'>Peserta yang dinyatakan LULUS Sipenmaru Tahap II Jalur Penelusuran Minat dan Prestasi (PMDP) diwajibkan untuk melakukan <strong>REGISTRASI&nbsp;</strong>pada tanggal <strong>18-28 April 2022</strong> dengan melengkapi persyaratan administrasi sebagai berikut&nbsp;&nbsp;:</p>
<ol start="1" style="list-style-type: upper-alpha;margin-left:11.3px;">
    <li><strong>Persyaratan Administrasi Keuangan&nbsp;</strong></li>
</ol>
<ol style="list-style-type: decimal;margin-left:29.299999999999997px;">
    <li>Pembayaran Biaya Pendidikan Uang Kuliah Tunggal (UKT) yang jumlahnya sesuai dengan penempatan Program Studi melalui <strong>Rekening Bank Syariah Indonesia (BSI) Cabang Bengkulu No. Rekening 7632153001 an. RPL 016 BLU POLTEKKES BKL UTK OPS P.</strong></li>
    <li>Pembayaran Biaya Seragam yang jumlahnya sesuai dengan penempatan Program Studi melalui <strong>Bank Syariah Indonesia (BSI) Cabang Bengkulu No. Rekening 7776655830 an. KPN POLITEKNIK KESEHATAN.</strong></li>
    <li>Pembayaran Sumbangan Sukarela Pembangunan Masjid Tarbiyatush Shihhah melalui Rekening <strong>Bank Syariah Indonesia (BSI) Cabang Bengkulu No. Rekening 4362324040 an. MASJID TARBIYATUSH SHIHHAH.&nbsp;</strong></li>
    <li>Pembayaran Iuran Kegiatan Organisasi Mahasiswa Poltekkes Kemenkes Bengkulu dengan rincian Diploma Tiga sebesar Rp 300.000 ,- (tiga ratus ribu rupiah) dan Sarjana Terapan sebesar Rp 400.000,- (empat ratus ribu rupiah), Sarjana Terapan + Pendidikan Profesi Ners dan Profesi Bidan sebesar Rp 500.000,- (lima ratus ribu rupiah), dana &nbsp;dibayarkan 1 kali selama menempuh pendidikan melalui <strong>Bank Tabungan Negara (BTN) No. Rekening 00037-01-66-000022-3 an. ORMAWA POLTEKKES KEMENKES BENGKULU.</strong></li>
    <li><strong>UANG YANG TELAH DISETOR TIDAK DAPAT DITARIK/DIKEMBALIKAN.</strong></li>
</ol>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:39.3pt;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;line-height:150%;'>&nbsp;</p>
<ol start="2" style="list-style-type: upper-alpha;margin-left:11.3px;">
    <li><strong>Persyaratan Administrasi</strong></li>
</ol>
<ol style="list-style-type: decimal;margin-left:29.299999999999997px;">
    <li><strong>Nomor Peserta Ujian Asli sebanyak 1 lembar.</strong></li>
    <li><strong>Bukti Kelulusan Tahap II Sipenmaru Penelusuran Minat dan Prestasi (PMDP) sebanyak 1 lembar.</strong></li>
    <li><strong>Fotocopy Legalisir Ijazah atau Asli Surat Rekomendasi dari Kepala Sekolah sebanyak 1 lembar.</strong></li>
    <li><strong>Bukti Setor Asli meliputi&nbsp; &nbsp;&nbsp;:</strong></li>
</ol>
<ul style="list-style-type: undefined;margin-left:53.8px;">
    <li>Uang Kuliah Tunggal (UKT)</li>
    <li>Uang Pemesanan Seragam</li>
    <li>Uang Pembangunan Masjid</li>
    <li>Uang Iuran Kegiatan Organisasi Mahasiswa</li>
</ul>
<ol style="list-style-type: undefined;margin-left:29.299999999999997px;">
    <li><strong>Surat Pernyataan Tidak menuntut Pengembalian Dana Pendidikan&nbsp;</strong>ditandatangani Calon Mahasiswa Baru dan diketahui oleh Orang Tua di atas Materai 10.000.</li>
    <li><strong>Calon Mahasiswa Baru wajib menjadi Peserta BPJS dan memindahkan kepesertaan ke Fasilitas Kesehatan (Faskes) Klinik Hygea Poltekkes Kemenkes Bengkulu.</strong></li>
    <li><strong>Semua Berkas Persyaratan Administrasi dimasukkan dalam map plastik Snelhecter dengan ketentuan&nbsp;</strong></li>
</ol>
<table style="margin-left:39.3pt;border-collapse:collapse;border:none;">
    <tbody>
        <tr>
            <td style="width: 51.15pt;border: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'><strong>NO</strong></p>
            </td>
            <td style="width: 244.25pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'><strong>JURUSAN/PRODI</strong></p>
            </td>
            <td style="width: 138.5pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'><strong>WARNA MAP</strong></p>
            </td>
        </tr>
        <tr>
            <td style="width: 51.15pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'>1</p>
            </td>
            <td style="width: 244.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'>KEPERAWATAN</p>
            </td>
            <td style="width: 138.5pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'>COKLAT</p>
            </td>
        </tr>
        <tr>
            <td style="width: 51.15pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'>2</p>
            </td>
            <td style="width: 244.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'>KEBIDANAN</p>
            </td>
            <td style="width: 138.5pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'>BIRU MUDA</p>
            </td>
        </tr>
        <tr>
            <td style="width: 51.15pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'>3</p>
            </td>
            <td style="width: 244.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'>GIZI</p>
            </td>
            <td style="width: 138.5pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'>HIJAU TUA</p>
            </td>
        </tr>
        <tr>
            <td style="width: 51.15pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'>4</p>
            </td>
            <td style="width: 244.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'>TEKNOLOGI LABORATORIUM MEDIS</p>
            </td>
            <td style="width: 138.5pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'>KUNING</p>
            </td>
        </tr>
        <tr>
            <td style="width: 51.15pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'>5</p>
            </td>
            <td style="width: 244.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'>FARMASI</p>
            </td>
            <td style="width: 138.5pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'>HIJAU MUDA</p>
            </td>
        </tr>
        <tr>
            <td style="width: 51.15pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'>6</p>
            </td>
            <td style="width: 244.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'>KESEHATAN LINGKUNGAN</p>
            </td>
            <td style="width: 138.5pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'>BIRU TUA</p>
            </td>
        </tr>
        <tr>
            <td style="width: 51.15pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'>7</p>
            </td>
            <td style="width: 244.25pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;'>PROMOSI KESEHATAN</p>
            </td>
            <td style="width: 138.5pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'>UNGU</p>
            </td>
        </tr>
    </tbody>
</table>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:39.3pt;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;'>&nbsp;</p>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;margin-left:42.55pt;text-align:justify;line-height:150%;'>Persyaratan dapat diserahkan langsung kepada Panitia Penerimaan Mahasiswa Baru (SIPENMARU) pada hari kerja, Senin-Jumat pukul 08.00-15.00 WIB di <strong>Direktorat Lantai I Gedung Az-Zahrawi Jalan Indragiri Nomor 03 Padang Harapan Bengkulu.</strong></p>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman",serif;margin-left:42.55pt;text-align:justify;line-height:150%;'>&nbsp;</p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:39.3pt;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;line-height:150%;'><strong>BILA SAMPAI TANGGAL 28 APRIL 2022 BELUM MELAKSANAKAN REGISTRASI, MAKA PESERTA DIANGGAP MENGUNDURKAN DIRI.</strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:39.3pt;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;line-height:150%;'><strong>&nbsp;</strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:39.3pt;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;line-height:150%;'><strong>BAGI PESERTA GAKIN AKAN DILAKSANAKAN SUPERVISI OLEH PANITIA PENERIMAAN MAHASISWA BARU (SIPENMARU) DAN AKAN DIUMUMKAN PENERIMA BEASISWA GAKIN PADA WEBSITE&nbsp;</strong><a href="HTTP://POLTEKKESBENGKULU.AC.ID"><strong>HTTP://POLTEKKESBENGKULU.AC.ID</strong></a></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:39.3pt;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;line-height:150%;'><strong>&nbsp;</strong></p>
</body>
</html>
<script>
  window.print();
</script>
