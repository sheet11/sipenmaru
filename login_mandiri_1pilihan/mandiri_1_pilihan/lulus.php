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
            <h1>LULUS TAHAP I</h1>
        </td>
    </tr>
</table>
<br>

<p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:3.85pt;margin-right:7.8pt;margin-bottom:.0001pt;margin-left:1.3pt;text-align:center;'><strong><span style='font-size:19px;font-family:"Arial",sans-serif;'>PENGUMUMAN</span></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:7.75pt;margin-bottom:.0001pt;margin-left:1.3pt;text-align:center;'><strong><span style='font-size:19px;font-family:"Arial",sans-serif;'>PELAKSANAAN&nbsp;UJI&nbsp;KESEHATAN&nbsp;(UKES)&nbsp;DAN&nbsp;WAWANCARA&nbsp;</span></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:7.75pt;margin-bottom:.0001pt;margin-left:1.3pt;text-align:center;'><strong><span style='font-size:19px;font-family:"Arial",sans-serif;'>SELEKSI PENERIMAAN MAHASISWA BARU (SPMB) MANDIRI</span></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.05pt;margin-right:86.5pt;margin-bottom:.0001pt;margin-left:79.8pt;text-align:center;'><strong><span style='font-size:19px;font-family:"Arial",sans-serif;'>POLTEKKES&nbsp;KEMENKES&nbsp;BENGKULU TAHUN AKADEMIK 2025/2026</span></strong></p>
<p style='margin:0cm;font-size:16px;font-family:"Arial",sans-serif;font-weight:bold;'><span style="font-size:19px;">&nbsp;</span></p>
<p style='margin:0cm;font-size:16px;font-family:"Arial",sans-serif;font-weight:bold;margin-top:.45pt;'><span style="font-size:19px;">&nbsp;</span></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:12.45pt;margin-bottom:.0001pt;margin-left:5.2pt;text-align:justify;line-height:115%;'><strong><span style='font-size:16px;line-height:115%;font-family:"Arial",sans-serif;'>Peserta </span></strong><span style="font-size:16px;line-height:115%;">yang dinyatakan&nbsp;</span><strong><span style='font-size:16px;line-height:115%;font-family:"Arial",sans-serif;'>LULUS </span></strong><span style="font-size:16px;line-height:115%;">pada&nbsp;</span><strong><span style='font-size:16px;line-height:115%;font-family:"Arial",sans-serif;'>Hasil Seleksi CBT SPMB Mandiri </span></strong><span style="font-size:16px;line-height:115%;">Poltekkes Kemenkes Bengkulu yang diumumkan pada tanggal&nbsp;</span><strong><span style='font-size:16px;line-height:115%;font-family:"Arial",sans-serif;'>20 Juni 2025 </span></strong><span style="font-size:16px;line-height:115%;">melalui link &nbsp;</span><a href="https://link.poltekkesbengkulu.ac.id/spmb/">https://link.poltekkesbengkulu.ac.id/spmb/</a><span style="font-size:16px;line-height:115%;">&nbsp;diwajibkan mengikuti tahapan sebagai berikut:</span></p>
<div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
    <ol style="margin-bottom:0cm;list-style-type: decimal;margin-left: 11.399999999999999px;">
        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><span style="line-height:115%;font-size:16px;">Uji Kesehatan dan Wawancara&nbsp;</span></strong><span style='line-height:115%;font-family:"Arial MT",sans-serif;font-size:16px;'>(</span><span style="line-height:115%;font-size:16px;">Wajib</span><strong><span style="line-height:115%;font-size:16px;">&nbsp;</span></strong><span style='line-height:115%;font-family:"Arial MT",sans-serif;font-size:16px;'>didampingi Orang Tua Kecuali Mahasiswa RPL) dilaksanakan pada tanggal&nbsp;</span><strong><span style="line-height:115%;font-size:16px;">23-25 Juni 2025&nbsp;</span></strong><span style='line-height:115%;font-family:"Arial MT",sans-serif;font-size:16px;'>di&nbsp;</span><strong><span style="line-height:115%;font-size:16px;">Klinik Hygea Poltekkes Kemenkes Bengkulu&nbsp;</span></strong><span style='line-height:115%;font-family:"Arial MT",sans-serif;font-size:16px;'>Jl. Indragiri No. 03 Padang Harapan Bengkulu&nbsp;</span><strong><span style="line-height:115%;font-size:16px;">(kehadiran peserta sesuai Jadwal yang telah ditentukan).</span></strong></li>
    </ol>
</div>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:21.4pt;text-align:left;text-indent:0cm;font-size:15px;font-family:"Arial",sans-serif;'><span style='font-size:16px;font-family:"Arial MT",sans-serif;'>&nbsp;</span></p>
<ol start="2" style="list-style-type: decimal;">
    <li><span style='font-family:"Arial MT",sans-serif;font-size:16px;'>Membawa&nbsp;kelengkapan&nbsp;sebagai&nbsp;berikut&nbsp;;</span>
        <ol style="list-style-type: lower-alpha;">
            <li><strong><span style="font-size:16px;">Bukti&nbsp;Kelulusan&nbsp;Seleksi&nbsp;CBT SPMB Mandiri</span></strong></li>
            <li><strong><span style="line-height:115%;font-size:16px;">Biaya uji kesehatan&nbsp;</span></strong><span style='line-height:115%;font-family:"Arial MT",sans-serif;font-size:16px;'>sebesar&nbsp;</span><strong><span style="line-height:115%;font-size:16px;">Rp. 150.000,- (Seratus Lima Puluh Ribu Rupiah)&nbsp;</span></strong><span style='line-height:115%;font-family:"Arial MT",sans-serif;font-size:16px;'>dapat disetor ke Teller atau ditransfer melalui <strong>Bank Syariah Indonesia (BSI)</strong> dengan No Rekening <strong>7632153001</strong> atas nama RPL 016 BLU POLTEKKES UNTUK OPS .</span></li>
            <li><strong><span style="line-height:115%;font-size:16px;">Bagi peserta yang akan melakukan pembayaran biaya uji kesehatan secara tunai, dapat difasilitasi oleh Teller&nbsp;</span></strong><strong><span style='line-height:115%;font-family:"Arial MT",sans-serif;font-size:16px;'>Bank Syariah Indonesi (BSI)</span></strong><span style='line-height:115%;font-family:"Arial MT",sans-serif;font-size:16px;'>&nbsp;</span><strong><span style="line-height:115%;font-size:16px;">pada lokasi Uji Kesehatan (Klinik Hygea Poltekkes Kemenkes Bengkulu).</span></strong></li>
            <li><strong><span style="line-height:115%;font-size:16px;">Membawa pas foto ukuran 3x4 (1 Lembar)</span></strong></li>
        </ol>
    </li>
</ol>
<p style='margin:0cm;font-size:16px;font-family:"Arial",sans-serif;font-weight:bold;margin-top:2.0pt;'>&nbsp;</p>
<div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
    <ol start="3" style="margin-bottom:0cm;list-style-type: decimal;">
        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='line-height:115%;font-family:"Arial MT",sans-serif;font-size:16px;'>Peserta yang mengikuti Uji Kesehatan diwajibkan mengenakan pakaian sopan dan rapi (baju atasan kemeja kancing depan dan bawahan rok atau celana bahan) dan menggunakan sepatu tertutup.</span></li>
    </ol>
</div>
<p style='margin-top:0cm;margin-right:13.15pt;margin-bottom:0cm;margin-left:21.4pt;text-align:left;text-indent:0cm;font-size:15px;font-family:"Arial",sans-serif;line-height:115%;'><span style='font-size:16px;line-height:115%;font-family:"Arial MT",sans-serif;'>&nbsp;</span></p>
<div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
    <ol start="4" style="margin-bottom:0cm;list-style-type: decimal;">
        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="line-height:115%;font-size:16px;">Apabila sampai dengan tanggal&nbsp;</span><strong><span style="line-height:115%;font-size:16px;">25 Juni 2025&nbsp;</span></strong><span style="line-height:115%;font-size:16px;">calon mahasiswa<strong>&nbsp;</strong>tidak mengikuti Uji Kesehatan dan Wawancara maka peserta dinyatakan&nbsp;</span><strong><u><span style="line-height:115%;font-size:16px;">GUGUR</span></u></strong><strong><span style="line-height:115%;font-size:16px;">.</span></strong></li>
    </ol>
</div>
<p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:2.15pt;'><span style="font-size:16px;">&nbsp;</span></p>
<p style='margin-top:0cm;margin-right:13.0pt;margin-bottom:.0001pt;margin-left:44.5pt;text-align:justify;text-indent:0cm;font-size:15px;font-family:"Arial",sans-serif;line-height:115%;'><strong><span style="font-size:16px;line-height:115%;">&nbsp;</span></strong></p>
<p><strong><span style='font-size:16px;line-height:115%;font-family:"Arial",sans-serif;'><br>&nbsp;</span></strong></p>
<p style='margin:0cm;font-size:16px;font-family:"Arial",sans-serif;font-weight:bold;margin-top:0cm;margin-right:18.0pt;margin-bottom:.0001pt;margin-left:16.05pt;text-align:center;line-height:115%;'>JADWAL&nbsp;PELAKSANAAN&nbsp;UJI&nbsp;KESEHATAN&nbsp;DAN&nbsp;WAWANCARA&nbsp;SELEKSI PENERIMAAN MAHASISWA BARU (SPMB) MANDIRI&nbsp;</p>
<p style='margin:0cm;font-size:16px;font-family:"Arial",sans-serif;font-weight:bold;margin-top:0cm;margin-right:18.0pt;margin-bottom:.0001pt;margin-left:16.05pt;text-align:center;line-height:115%;'>POLITEKNIK KESEHATAN KEMENTERIAN KESEHATAN BENGKULU</p>
<p style='margin:0cm;font-size:16px;font-family:"Arial",sans-serif;font-weight:bold;margin-top:0cm;margin-right:18.0pt;margin-bottom:.0001pt;margin-left:16.85pt;text-align:center;line-height:13.6pt;'>TAHUN&nbsp;AKADEMIK 2025/2026</p>
<p style='margin:0cm;font-size:16px;font-family:"Arial",sans-serif;font-weight:bold;margin-top:5.45pt;'><span style="font-size:13px;">&nbsp;</span></p>
<table style="margin-left: 6.85pt;border-collapse: collapse;border: none;width: 1134px;">
    <tbody>
        <tr>
            <td style="width: 23.9pt;border: 1pt solid windowtext;padding: 0cm;height: 16.75pt;vertical-align: top;">
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:2.95pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:.35pt;'><strong><span style='font-family:"Arial",sans-serif;'>NO</span></strong></p>
            </td>
            <td style="width: 139.1pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm;height: 16.75pt;vertical-align: top;">
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:2.95pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.8pt;'><strong><span style='font-family:"Arial",sans-serif;'>HARI/TANGGAL</span></strong></p>
            </td>
            <td style="width: 16cm;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm;height: 16.75pt;vertical-align: top;">
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:2.95pt;margin-right:  0cm;margin-bottom:.0001pt;margin-left:2.2pt;text-align:  center;'><strong><span style='font-family:"Arial",sans-serif;'>PROGRAM STUDI</span></strong></p>
            </td>
            <td style="width: 233.9pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm;height: 16.75pt;vertical-align: top;">
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:2.95pt;margin-right:  0cm;margin-bottom:.0001pt;margin-left:.4pt;text-align:center;'><strong><span style='font-family:"Arial",sans-serif;'>WAKTU DAN LOKASI</span></strong></p>
            </td>
        </tr>
        <tr>
            <td rowspan="6" style="width: 23.9pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm;height: 15.1pt;vertical-align: top;">
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:center;'>1</p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:6.5pt;text-align:center;'><strong><span style='font-family:"Arial",sans-serif;'>&nbsp;</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:.8pt;text-align:center;'><span style="font-size:1px;">&nbsp;</span></p>
            </td>
            <td rowspan="6" style="width: 139.1pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 15.1pt;vertical-align: top;">
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>SENIN/23 JUNI 2025</p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><span style='font-family:"Arial",sans-serif;'>&nbsp;</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.15pt;'><strong><span style='font-family:"Arial",sans-serif;'>&nbsp;</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:5.8pt;'><span style="font-size:1px;">&nbsp;</span></p>
            </td>
            <td style="width: 16cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 15.1pt;vertical-align: top;">
                <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                    <ol style="margin-bottom:0cm;list-style-type: decimal;margin-left: 14.2px;">
                        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Arial",sans-serif;'>Program Studi Keperawatan Bengkulu Program Diploma Tiga</span></li>
                    </ol>
                </div>
            </td>
            <td rowspan="6" style="width: 233.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 15.1pt;vertical-align: top;">
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><strong><span style="font-size:16px;">&nbsp;</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><strong><span style="font-size:16px;">UJI KESEHATAN</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><span style="font-size:16px;">08.00 - 12.00 WIB</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><strong><span style="font-size:16px;">KLINIK HYGEA</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><strong><span style="font-size:16px;">&nbsp;</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><strong><span style="font-size:16px;">&nbsp;</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><strong><span style="font-size:16px;">WAWANCARA</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><span style="font-size:16px;">13.00 &ndash; 15.00 WIB</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><strong><span style="font-size:16px;">JURUSAN MASING-MASING</span></strong></p>
            </td>
        </tr>
        <tr>
            <td style="width: 16cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 15.1pt;vertical-align: top;">
                <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                    <ol start="2" style="margin-bottom:0cm;list-style-type: decimal;margin-left: 14.2px;">
                        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Arial",sans-serif;'>Program Studi Keperawatan Curup Program Diploma Tiga</span></li>
                    </ol>
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 16cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 16.4pt;vertical-align: top;">
                <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                    <ol start="3" style="margin-bottom:0cm;list-style-type: decimal;margin-left: 14.2px;">
                        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Arial",sans-serif;'>Program Studi Keperawatan dan Pendidikan Profesi Ners Program Sarjana Terapan (Kelas Reguler)</span></li>
                    </ol>
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 16cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 16.4pt;vertical-align: top;">
                <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                    <ol start="4" style="margin-bottom:0cm;list-style-type: decimal;margin-left: 14.2px;">
                        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Arial",sans-serif;'>Program Studi Keperawatan dan Pendidikan Profesi Ners Program Sarjana Terapan (Kelas Internasional)</span></li>
                    </ol>
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 16cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 16.3pt;vertical-align: top;">
                <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                    <ol start="5" style="margin-bottom:0cm;list-style-type: decimal;margin-left: 14.2px;">
                        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Arial",sans-serif;'>Program Studi Gizi dan Dietetika Sarjana Terapan</span></li>
                    </ol>
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 16cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 24.4pt;vertical-align: top;">
                <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                    <ol start="6" style="margin-bottom:0cm;list-style-type: decimal;margin-left: 14.2px;">
                        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Arial",sans-serif;'>Program Studi Gizi Program Diploma Tiga</span></li>
                    </ol>
                </div>
            </td>
        </tr>
        <tr>
            <td rowspan="10" style="width: 23.9pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm;height: 16.4pt;vertical-align: top;">
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.1pt;text-align:center;'><strong><span style='font-family:"Arial",sans-serif;'>&nbsp;</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:.8pt;text-align:center;'>2</p>
            </td>
            <td rowspan="10" style="width: 139.1pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 16.4pt;vertical-align: top;">
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><span style='font-family:"Arial",sans-serif;'>&nbsp;</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.2pt;'>SELASA/24 JUNI 2025</p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:5.8pt;'>&nbsp;</p>
            </td>
            <td style="width: 16cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 16.4pt;vertical-align: top;">
                <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                    <ol style="margin-bottom:0cm;list-style-type: decimal;margin-left: 13.55px;">
                        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Arial",sans-serif;'>Program Studi Kebidanan dan Pendidikan Profesi Bidan Program Sarjana Terapan</span></li>
                    </ol>
                </div>
            </td>
            <td rowspan="10" style="width: 233.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 16.4pt;vertical-align: top;">
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><strong><span style="font-size:16px;">&nbsp;</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><strong><span style="font-size:16px;">&nbsp;</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><strong><span style="font-size:16px;">UJI KESEHATAN</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><span style="font-size:16px;">08.00 - 12.00 WIB</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><strong><span style="font-size:16px;">KLINIK HYGEA</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><strong><span style="font-size:16px;">&nbsp;</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><strong><span style="font-size:16px;">&nbsp;</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><strong><span style="font-size:16px;">WAWANCARA</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><span style="font-size:16px;">13.00 &ndash; 15.00 WIB</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><strong><span style="font-size:16px;">JURUSAN MASING-MASING</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><strong><span style="font-size:16px;">&nbsp;</span></strong></p>
            </td>
        </tr>
        <tr>
            <td style="width: 16cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 16.3pt;vertical-align: top;">
                <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                    <ol start="2" style="margin-bottom:0cm;list-style-type: decimal;margin-left: 13.55px;">
                        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Arial",sans-serif;'>Program Studi Kebidanan Bengkulu Program Diploma Tiga</span></li>
                    </ol>
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 16cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 16.2pt;vertical-align: top;">
                <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                    <ol start="3" style="margin-bottom:0cm;list-style-type: decimal;margin-left: 13.55px;">
                        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Arial",sans-serif;'>Program Studi Kebidanan Curup Program Diploma Tiga</span></li>
                    </ol>
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 16cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 13.35pt;vertical-align: top;">
                <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                    <ol start="4" style="margin-bottom:0cm;list-style-type: decimal;margin-left: 13.55px;">
                        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Arial",sans-serif;'>Program Studi Teknologi Laboratorium Medis Program Diploma Tiga</span></li>
                    </ol>
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 16cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 15.1pt;vertical-align: top;">
                <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                    <ol start="5" style="margin-bottom:0cm;list-style-type: decimal;margin-left: 13.55px;">
                        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Arial",sans-serif;'>Program Studi Farmasi Program Diploma Tiga</span></li>
                    </ol>
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 16cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 15.1pt;vertical-align: top;">
                <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                    <ol start="6" style="margin-bottom:0cm;list-style-type: decimal;margin-left: 13.55px;">
                        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Arial",sans-serif;'>Program Studi Sanitasi Program Diploma Tiga</span></li>
                    </ol>
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 16cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 15.5pt;vertical-align: top;">
                <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                    <ol start="7" style="margin-bottom:0cm;list-style-type: decimal;margin-left: 13.55px;">
                        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Arial",sans-serif;'>Program Studi Promosi Kesehatan Program Sarjana Terapan</span></li>
                    </ol>
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 16cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 26.55pt;vertical-align: top;">
                <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                    <ol start="8" style="margin-bottom:0cm;list-style-type: decimal;margin-left: 13.55px;">
                        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Arial",sans-serif;'>Program Studi Keperawatan dan Pendidikan Profesi Ners Program Sarjana Terapan (RPL)</span></li>
                    </ol>
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 16cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 18.4pt;vertical-align: top;">
                <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                    <ol start="9" style="margin-bottom:0cm;list-style-type: decimal;margin-left: 13.55px;">
                        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Arial",sans-serif;'>Program Studi Profesi Ners Program Profesi (Ganjil)</span></li>
                    </ol>
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 16cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 19.5pt;vertical-align: top;">
                <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                    <ol start="10" style="margin-bottom:0cm;list-style-type: decimal;margin-left: 13.55px;">
                        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Arial",sans-serif;'>Program Studi Profesi Ners Program Profesi (Genap)</span></li>
                    </ol>
                </div>
            </td>
        </tr>
        <tr>
            <td rowspan="6" style="width: 23.9pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm;height: 15.1pt;vertical-align: top;">
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:center;'>3</p>
            </td>
            <td rowspan="6" style="width: 139.1pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 15.1pt;vertical-align: top;">
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>RABU/25 JUNI 2025</p>
            </td>
            <td style="width: 16cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 15.1pt;vertical-align: top;">
                <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                    <ol style="margin-bottom:0cm;list-style-type: decimal;margin-left: 11px;">
                        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Arial",sans-serif;'>RPL Gizi dan Dietetika Sarjana Terapan</span></li>
                    </ol>
                </div>
            </td>
            <td rowspan="6" style="width: 233.9pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 15.1pt;vertical-align: top;">
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><strong><span style="font-size:16px;">UJI KESEHATAN</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><span style="font-size:16px;">08.00 - 12.00 WIB</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><strong><span style="font-size:16px;">KLINIK HYGEA</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><strong><span style="font-size:16px;">&nbsp;</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><strong><span style="font-size:16px;">&nbsp;</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><strong><span style="font-size:16px;">WAWANCARA</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><span style="font-size:16px;">13.00 &ndash; 15.00 WIB</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:78.3pt;text-indent:-49.6pt;'><strong><span style="font-size:16px;">JURUSAN MASING-MASING</span></strong></p>
            </td>
        </tr>
        <tr>
            <td style="width: 16cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 15.1pt;vertical-align: top;">
                <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                    <ol start="2" style="margin-bottom:0cm;list-style-type: decimal;margin-left: 11px;">
                        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Arial",sans-serif;'>Program Studi Kebidanan Program Sarjana Terapan (RPL) Bengkulu</span></li>
                    </ol>
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 16cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 15.1pt;vertical-align: top;">
                <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                    <ol start="3" style="margin-bottom:0cm;list-style-type: decimal;margin-left: 11px;">
                        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Arial",sans-serif;'>Program Studi Profesi Bidan Program Bidan Kelas Bengkulu</span></li>
                    </ol>
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 16cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 15.1pt;vertical-align: top;">
                <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                    <ol start="4" style="margin-bottom:0cm;list-style-type: decimal;margin-left: 11px;">
                        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Arial",sans-serif;'>Program Studi Profesi Bidan Program Bidan Kelas Bengkulu (GENAP Khusus Kelas Pegawai)</span></li>
                    </ol>
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 16cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 15.1pt;vertical-align: top;">
                <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                    <ol start="5" style="margin-bottom:0cm;list-style-type: decimal;margin-left: 11px;">
                        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Arial",sans-serif;'>RPL Sarjana Terapan Kebidanan (Khusus TPMB)</span></li>
                    </ol>
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 16cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm;height: 15.1pt;vertical-align: top;">
                <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                    <ol start="6" style="margin-bottom:0cm;list-style-type: decimal;margin-left: 11px;">
                        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Arial",sans-serif;'>RPL Profesi Bidan (Khusus TPMB)</span></li>
                    </ol>
                </div>
            </td>
        </tr>
    </tbody>
</table>
<p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><strong>&nbsp;</strong></p>
</body>
</html>
<script>
  window.print();
</script>
<?php } elseif ($a['status_lulus'] == null || $a['status_lulus'] == "Tidak Lulus") { 
echo "<br><br><br><h1>Maaf Anda Belum Lulus SPMB Mandiri tahap 1</h1><br><a href='index.php'>Kembali </a>";
 }else{
echo "<br><br><br><h1>Maaf Anda Belum Lulus SPMB Mandiri tahap 1</h1><br><a href='index.php'>Kembali </a>";
 }
 ?>

<style>
h1 {text-align: center;}
p {text-align: center;}
div {text-align: center;}
</style>
