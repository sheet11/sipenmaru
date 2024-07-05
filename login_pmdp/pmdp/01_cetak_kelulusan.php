<?php
  include "session.php";
  include"../config/koneksi.php";
  include("bar128.php");

    
  $query=mysqli_query($kon,"select * from tb_formulir3 where username='$_SESSION[username]' ");
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
  text-align:left;line-height:normal'><span style='font-family:"Times New Roman","serif"'><?php echo "$a[status_pmdp]"; ?><o:p></o:p></span></p>
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
<p style='margin:0cm;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman","serif";'><strong><span style='font-family:"Calibri","sans-serif";'>CATATAN :</span></strong></p>
<p style='margin:0cm;margin-bottom:12.0pt;font-size:16px;font-family:"Times New Roman","serif";margin-top:12.0pt;margin-right:0cm;margin-left:0cm;text-align:justify;line-height:115%;'><strong><span style='font-family:"Calibri","sans-serif";'>Peserta yang dinyatakan LULUS Seleksi Administrasi jalur PMDP diwajibkan mengikuti tahapan :</span></strong></p>
<div style='margin:0cm;margin-bottom:.0001pt;font-size:16px;font-family:"Times New Roman","serif";'>
    <ol>
        <li><span class="fr-close-ol"><strong><span style='font-family:"Calibri","sans-serif";'>Pengumpulan Berkas&nbsp;</span></strong><span style='font-family:"Calibri","sans-serif";'>dilaksanakan pada<strong>&nbsp;06-08 April 2022.&nbsp;</strong>Berkas yang dikumpulkan meliputi &nbsp;Kartu Kartu Nomor Pendaftaran PMDP, bukti cetak nilai raport semester I-V, &nbsp;Surat Rekomendasi Kepala Sekolah, &nbsp;Akreditasi Sekolah dan Sertifikat/Piagam Prestasi.</span></span></li>
        <li><strong><span style='font-family:"Calibri","sans-serif";'>Uji</span></strong><strong><span style='font-family:"Calibri","sans-serif";'>&nbsp;Kesehatan&nbsp;</span></strong><span style='font-family:"Calibri","sans-serif";'>dilaksanakan</span><span style='font-family:"Calibri","sans-serif";'>&nbsp;pada tanggal<strong>&nbsp;07-08 April 2022 di Auditorium Poltekkes Kemenkes Bengkulu&nbsp;</strong></span><strong><em><span style=";">(jadwal terlampir)</span></em></strong><strong><em><span style='font-family:"Calibri","sans-serif";'>.</span></em></strong></li>
        <li><strong><span style='font-family:"Calibri","sans-serif";'>Pembayaran biaya tes kesehatan</span></strong><span style='font-family:"Calibri","sans-serif";'>&nbsp;</span><span style='font-family:"Calibri","sans-serif";'>sebesar <strong>Rp. 150.000,- (Seratus Lima Puluh Ribu Rupiah)</strong></span><strong><span style='font-family:"Calibri","sans-serif";'>&nbsp;</span></strong><span style='font-family:"Calibri","sans-serif";'>dengan menyetor di Teller Bank Syariah Indonesia (BSI) bertempat di Poltekkes Kemenkes Bengkulu.</span></li>
        <li><strong><span style='font-family:"Calibri","sans-serif";'>Verifikasi Berkas dan Uji Prestasi &amp; Bakat pada tanggal 11 April 2022 dengan membawa&nbsp;</span></strong><strong><span style='font-family:"Calibri","sans-serif";'>Dokumen&nbsp;</span></strong><strong><span style='font-family:"Calibri","sans-serif";'>sebagai berikut</span></strong><strong><span style='font-family:"Calibri","sans-serif";'>&nbsp;</span></strong><span style='font-family:"Calibri","sans-serif";'>: Raport Asli, Sertifikat/Piagam Asli, Pas Foto Hitam Putih 3x4 1 (satu) buah dan Nomor Pendaftaran Asli</span><span style='font-family:"Calibri","sans-serif";'>.</span></li>
        <li><strong><span style='font-family:"Calibri","sans-serif";'>Jadwal Wawancara Jalur PMDP Pada Hari Sabtu Tanggal 9 April 2022 Pukul 08:00 WIB Di Auditorium Poltekkes Kemenkes Bengkulu Wawancara WAJIB</span></strong><strong><span style='font-family:"Calibri","sans-serif";'>&nbsp;</span></strong><span style='font-family:"Calibri","sans-serif";'>dihadiri oleh calon mahasiswa yang</span><span style=";">&nbsp;</span><span style='font-family:"Calibri","sans-serif";'>didampingi oleh</span><span style='font-family:"Calibri","sans-serif";'>&nbsp;salah <strong>satu&nbsp;</strong></span><strong><span style='font-family:"Calibri","sans-serif";'>Orang Tua/Wali</span></strong><strong><span style='font-family:"Calibri","sans-serif";'>.&nbsp;</span></strong></li>
        <li><span style='font-family:"Calibri","sans-serif";'>Apabila sampai dengan tanggal&nbsp;</span><strong><span style='font-family:"Calibri","sans-serif";'>08 April 2022&nbsp;</span></strong><span style='font-family:"Calibri","sans-serif";'>calon mahasiswa<strong>&nbsp;tidak Melakukan&nbsp;</strong></span><strong><span style='font-family:"Calibri","sans-serif";'>tes kesehatan dan wawancara (verifikasi dokumen)</span></strong><strong><span style='font-family:"Calibri","sans-serif";'>, maka peserta dinyatakan <u>GUGUR</u> sebagai calon mahasiswa.</span></strong></li>
        <li><span style='font-family:"Calibri","sans-serif";'>Bagi peserta <strong>GAKIN</strong></span><strong><span style='font-family:"Calibri","sans-serif";'>&nbsp;</span></strong><span style='font-family:"Calibri","sans-serif";'>akan dilakukan supervisi oleh petugas dan apabila ditemukan kondisi yang tidak termasuk ke dalam kategori berasal dari Keluarga Miskin (G</span><span style='font-family:"Calibri","sans-serif";'>AKIN</span><span style='font-family:"Calibri","sans-serif";'>), maka yang bersangkutan <strong>tidak menerima dana/bantuan&nbsp;</strong>sebagai mahasiswa G</span><span style=";">AKIN</span><span style='font-family:"Calibri","sans-serif";'>.</span></li>
        <li><span style='font-family:"Calibri","sans-serif";'>Bantuan bagi Peserta Keluarga Miskin (Gakin)&nbsp;</span><strong><span style='font-family:"Calibri","sans-serif";'>hanya</span></strong><strong><span style='font-family:"Calibri","sans-serif";'>&nbsp;Pembebasan Uang Kuliah Tunggal (UKT)</span></strong><span style='font-family:"Calibri","sans-serif";'>&nbsp;selama pendidikan (6 Semester untuk D</span><span style='font-family:"Calibri","sans-serif";'>iploma Tiga&nbsp;</span><span style='font-family:"Calibri","sans-serif";'>dan 8 semester untuk Sarjana Terapan)</span><span style='font-family:"Calibri","sans-serif";'>.</span><span style='font-family:"Calibri","sans-serif";'>&nbsp;</span></li>
        <li><span style='font-family:"Calibri","sans-serif";'>Bagi peserta yang <strong>TIDAK LULUS</strong></span><strong><span style='font-family:"Calibri","sans-serif";'>&nbsp;</span></strong><strong><span style='font-family:"Calibri","sans-serif";'>melalui jalur PMDP</span></strong><span style='font-family:"Calibri","sans-serif";'>&nbsp;dapat mengikuti <strong>Seleksi Jalur</strong></span><strong><span style='font-family:"Calibri","sans-serif";'>&nbsp;</span></strong><strong><span style='font-family:"Calibri","sans-serif";'>Sipenmaru Bersama</span></strong><span style='font-family:"Calibri","sans-serif";'>&nbsp;</span><strong><span style=";">(SIMAMA)&nbsp;</span></strong><span style='font-family:"Calibri","sans-serif";'>yang pendaftarannya dilakukan secara <strong><em>On-Line</em></strong> (24 Jam) melalui <strong>website</strong> :&nbsp;</span><a href="http://www.poltekkesbengkulu.ac.id"><span style=";">www.poltekkesbengkulu.ac.id</span></a> <span style='font-family:"Calibri","sans-serif";'>sampai dengan tanggal <strong>21 April 2022.</strong></span></li>
    </ol>
</div>
</body>
</html>
<script>
  window.print();
</script>
