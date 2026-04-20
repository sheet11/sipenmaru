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

    <table width="100%" border="0" align="center">
        <tr>
            <td><img src="../assets/img_app/logobaru.png" width="100%" /></td>

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
            <td valign="top">Prodi</td>
            <td valign="top">:</td>
            <td><?php echo $a['pilihan_prodi']; ?></td>
        </tr>
        <tr>
            <td valign="top">Tanggal Cetak</td>
            <td valign="top">:</td>
            <td><?php echo $a['cetak2']; ?></td>
        </tr>

        <tr>
            <td colspan="4"><?php echo bar128 (stripslashes($a['username'])); ?></td>
        </tr>

        <!--  <tr>-->
        <!--  <td colspan="4"><?php echo date('l, d-m-Y  H:i:s'); ?></td>-->
        <!--</tr>-->
    </table>
    <?php if($a['status_pmdp_2'] == "Lulus") { ?>
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
                <h1>LULUS SPMB TAHAP II</h1>
            </td>
        </tr>
    </table>
    <!--<div style="break-after:page"></div>-->

    <table width="100%" border="0" align="center">


        <p class="MsoNormal" style="margin-bottom:6.0pt;text-align:justify;text-justify:
inter-ideograph;line-height:150%"><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">Peserta
                yang dinyatakan LULUS Seleksi Penerimaan Mahasiswa Baru (SPMB) Tahap II Jalur Prestasi
                diwajibkan untuk melakukan <b style="mso-bidi-font-weight:normal">REGISTRASI</b></span><b
                style="mso-bidi-font-weight:normal"><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif"> (PEMBAYARAN DAN PENGUMPULAN
                    BERKAS)</span></b><b style="mso-bidi-font-weight:normal"><span lang="EN-US" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN"> </span></b><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">pada
                tanggal <b>31</b><b style="mso-bidi-font-weight:normal"> Maret s.d 2 April</b></span><b><span
                    lang="EN-US" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">
                    2026 </span></b><span lang="IN" style="font-size:11.0pt;line-height:150%;
font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">dengan melengkapi
                persyaratan administrasi sebagai berikut:<o:p></o:p></span></p>

        <p class="MsoListParagraph" style="margin-left:21.3pt;mso-add-space:auto;
text-align:justify;text-justify:inter-ideograph;text-indent:-21.3pt;line-height:
150%;mso-list:l1 level1 lfo1">
            <!--[if !supportLists]--><b style="mso-bidi-font-weight:
normal"><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:
&quot;Arial&quot;,sans-serif;mso-fareast-font-family:Arial;mso-ansi-language:IN"><span style="mso-list:Ignore">A.<span
                            style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span></span></span></b>
            <!--[endif]--><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">Persyaratan Administrasi Keuangan <o:p></o:p></span></b></p>

        <p class="MsoListParagraphCxSpLast" style="margin-left:39.3pt;mso-add-space:auto;
text-align:justify;text-justify:inter-ideograph;text-indent:-18.0pt;line-height:
150%;mso-list:l0 level1 lfo2">
            <!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN"><span style="mso-list:Ignore">1.<span
                        style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span>
            <!--[endif]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">Pembayaran Biaya Pendidikan Uang Kuliah Tunggal (UKT)
                yang jumlahnya sesuai dengan</span><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif"> </span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">Program Studi melalui <b><span style="color:black;
mso-themecolor:text1">Rekening Bank MANDIRI No. Rekening 1790063215300 an. RPL
                        016 BLU POLTEKKES BKL UTK OPS P</span></b>(</span><span lang="EN-US"
                style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">dapat
                diakses melalui link </span><span lang="EN-US"><a
                    href="https://spmb-polkeslu.cloud/wp-content/uploads/2026/03/POLA-TARIF-UKT-2026.pdf"><span style="font-size:11.0pt;line-height:
150%;font-family:&quot;Arial&quot;,sans-serif;color:#">http://bit.ly/ukt-mahasiswa</span></a></span><span lang="IN"
                style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">)</span><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif">.</span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
color:red;mso-ansi-language:IN">
                <o:p></o:p>
            </span></p>

        <p class="MsoListParagraph" style="margin-top:0cm;margin-right:0cm;margin-bottom:
6.0pt;margin-left:39.1pt;text-align:justify;text-justify:inter-ideograph;
text-indent:-17.85pt;line-height:150%;mso-list:l0 level1 lfo2">
            <!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN"><span style="mso-list:Ignore">2.<span
                        style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span>
            <!--[endif]--><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">UANG YANG
                    TELAH DISETOR TIDAK DAPAT DITARIK/DIKEMBALIKAN.</span></b><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">
                <o:p></o:p>
            </span></p>

        <p class="MsoListParagraphCxSpLast" style="margin-left:21.3pt;mso-add-space:auto;
text-align:justify;text-justify:inter-ideograph;text-indent:-21.3pt;line-height:
150%;mso-list:l1 level1 lfo1">
            <!--[if !supportLists]--><b style="mso-bidi-font-weight:
normal"><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:
&quot;Arial&quot;,sans-serif;mso-fareast-font-family:Arial;mso-ansi-language:IN"><span style="mso-list:Ignore">B.<span
                            style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span></span></span></b>
            <!--[endif]--><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">Persyaratan Administrasi<o:p></o:p></span></b></p>

        <p class="MsoListParagraphCxSpLast" style="margin-left:39.3pt;mso-add-space:auto;
text-align:justify;text-justify:inter-ideograph;text-indent:-18.0pt;line-height:
150%;mso-list:l2 level1 lfo3">
            <!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN"><span style="mso-list:Ignore">1.<span
                        style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span>
            <!--[endif]--><b style="mso-bidi-font-weight:normal"><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif">Kelengkapan Administrasi
                    Meliputi:</span></b><span lang="IN" style="font-size:11.0pt;line-height:150%;
font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">
                <o:p></o:p>
            </span></p>

        <p class="MsoListParagraphCxSpLast" style="margin-left:2.0cm;mso-add-space:auto;
text-align:justify;text-justify:inter-ideograph;text-indent:-14.15pt;
line-height:150%;mso-list:l3 level1 lfo4">
            <!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN"><span style="mso-list:Ignore">a.<span
                        style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp; </span></span></span>
            <!--[endif]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">Bukti Kelulusan Tahap II SPMB </span><span lang="EN-US"
                style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">Jalur </span><span
                lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">Prestasi</span><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif"> sebanyak</span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN"> 1 lembar.<o:p></o:p></span></p>

        <p class="MsoListParagraphCxSpLast" style="margin-left:2.0cm;mso-add-space:auto;
text-align:justify;text-justify:inter-ideograph;text-indent:-14.15pt;
line-height:150%;mso-list:l3 level1 lfo4">
            <!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN"><span style="mso-list:Ignore">b.<span
                        style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp; </span></span></span>
            <!--[endif]--><span lang="EN-US"
                style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">Bukti
                Cetak Input Nilai Raport sebanyak </span><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">1 lembar.<o:p></o:p></span></p>

        <p class="MsoListParagraphCxSpLast" style="margin-left:2.0cm;mso-add-space:auto;
text-align:justify;text-justify:inter-ideograph;text-indent:-14.15pt;
line-height:150%;mso-list:l3 level1 lfo4">
            <!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN"><span style="mso-list:Ignore">c.<span
                        style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp; </span></span></span>
            <!--[endif]--><i style="mso-bidi-font-style:normal"><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif">Foto Copy</span></i><span lang="EN-US"
                style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">
                Raport Legalisir </span><span lang="IN" style="font-size:11.0pt;line-height:150%;
font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">(</span><span lang="EN-US"
                style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">Semester
            </span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">1</span><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif">-</span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">5)</span><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif"> sebanyak </span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">1 </span><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif">rangkap.</span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">
                <o:p></o:p>
            </span></p>

        <p class="MsoListParagraphCxSpLast" style="margin-left:2.0cm;mso-add-space:auto;
text-align:justify;text-justify:inter-ideograph;text-indent:-14.15pt;
line-height:150%;mso-list:l3 level1 lfo4">
            <!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN"><span style="mso-list:Ignore">d.<span
                        style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp; </span></span></span>
            <!--[endif]--><i style="mso-bidi-font-style:normal"><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif">Foto Copy</span></i><span lang="EN-US"
                style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">
                Sertifikat atau Piagam Penghargaan Prestasi.</span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">
                <o:p></o:p>
            </span></p>

        <p class="MsoListParagraphCxSpLast" style="margin-left:2.0cm;mso-add-space:auto;
text-align:justify;text-justify:inter-ideograph;text-indent:-14.15pt;
line-height:150%;mso-list:l3 level1 lfo4">
            <!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN"><span style="mso-list:Ignore">e.<span
                        style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp; </span></span></span>
            <!--[endif]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">Bukti Setor Uang Kuliah Tunggal (UKT)<o:p></o:p></span></p>

        <p class="MsoListParagraphCxSpLast" style="margin-left:39.3pt;mso-add-space:auto;
text-align:justify;text-justify:inter-ideograph;text-indent:-18.0pt;line-height:
150%;mso-list:l2 level1 lfo3">
            <!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN"><span style="mso-list:Ignore">2.<span
                        style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span>
            <!--[endif]--><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">Surat
                    Pernyataan Tidak menuntut Pengembalian Dana Pendidikan </span></b><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">ditandatangani Calon Mahasiswa Baru dan diketahui oleh
                Orang Tua di atas Materai 10.000</span><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif"> </span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">(</span><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif">dapat diakses melalui link</span><span lang="EN-US"
                style="font-family:&quot;Arial&quot;,sans-serif"> </span><span lang="EN-US"><a
                    href="https://spmb-polkeslu.cloud/wp-content/uploads/2026/03/Surat-Pernyataan-Tidak-Menuntut-Pengembalian-Dana.pdf"><span
                        style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
color:#">http://bit.ly/surat-pernyataan-tidak-menuntut-pengembalian-dana</span></a></span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
color:#;mso-ansi-language:IN">)</span><span lang="EN-US" style="font-size:
11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">.</span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
color:red;mso-ansi-language:IN">
                <o:p></o:p>
            </span></p>

        <p class="MsoListParagraphCxSpLast" style="margin-left:39.3pt;mso-add-space:auto;
text-align:justify;text-justify:inter-ideograph;text-indent:-18.0pt;line-height:
150%;mso-list:l2 level1 lfo3">
            <!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN"><span style="mso-list:Ignore">3.<span
                        style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span>
            <!--[endif]--><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">Calon
                    Mahasiswa Baru wajib menjadi Peserta BPJS dan memindahkan kepesertaan ke
                    Fasilitas Kesehatan (Faskes) Klinik Hygea Poltekkes Kemenkes Bengkul</span></b><b
                style="mso-bidi-font-weight:normal"><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif">u </span></b><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">(</span><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif">dengan mengumpulkan <i
                    style="mso-bidi-font-style:normal">foto copy</i> Kartu Kepesertaan BPJS).</span><span lang="IN"
                style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">
                <o:p></o:p>
            </span></p>

        <p class="MsoListParagraphCxSpLast" style="margin-left:39.3pt;mso-add-space:auto;
text-align:justify;text-justify:inter-ideograph;text-indent:-18.0pt;line-height:
150%;mso-list:l2 level1 lfo3">
            <!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN"><span style="mso-list:Ignore">4.<span
                        style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span>
            <!--[endif]--><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">Semua
                    Berkas Persyaratan Administrasi dimasukkan dalam map </span></b><b
                style="mso-bidi-font-weight:normal"><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif">kertas bertulang </span></b><b
                style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">dengan
                    ketentuan <o:p></o:p></span></b></p>

        <table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="margin-left:39.3pt;border-collapse:collapse;border:none;mso-border-alt:
 solid black .5pt;mso-border-themecolor:text1;mso-yfti-tbllook:1184;mso-padding-alt:
 0cm 5.4pt 0cm 5.4pt">
            <tbody>
                <tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes">
                    <td width="68" valign="top" style="width:51.15pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
                        <p class="MsoListParagraphCxSpLast" align="center" style="margin-left:0cm;
  mso-add-space:auto;text-align:center;line-height:115%"><b style="mso-bidi-font-weight:
  normal"><span lang="IN" style="font-size:11.0pt;line-height:115%;font-family:
  &quot;Arial&quot;,sans-serif;mso-ansi-language:IN">NO<o:p></o:p></span></b></p>
                    </td>
                    <td width="326" valign="top" style="width:244.25pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;border-left:none;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
                        <p class="MsoListParagraph" align="center" style="margin-left:0cm;mso-add-space:
  auto;text-align:center;line-height:115%"><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif;
  mso-ansi-language:IN">JURUSAN/PRODI<o:p></o:p></span></b></p>
                    </td>
                    <td width="185" valign="top" style="width:138.5pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;border-left:none;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
                        <p class="MsoListParagraph" align="center" style="margin-left:0cm;mso-add-space:
  auto;text-align:center;line-height:115%"><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif;
  mso-ansi-language:IN">WARNA MAP<o:p></o:p></span></b></p>
                    </td>
                </tr>
                <tr style="mso-yfti-irow:1">
                    <td width="68" valign="top" style="width:51.15pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
                        <p class="MsoListParagraph" align="center" style="margin-left:0cm;mso-add-space:
  auto;text-align:center;line-height:115%"><span lang="IN" style="font-size:11.0pt;
  line-height:115%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">1<o:p></o:p></span></p>
                    </td>
                    <td width="326" valign="top" style="width:244.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
                        <p class="MsoListParagraph" style="margin-left:0cm;mso-add-space:auto;
  line-height:115%"><span lang="IN" style="font-size:11.0pt;line-height:115%;
  font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">KEPERAWATAN<o:p></o:p></span></p>
                    </td>
                    <td width="185" valign="top" style="width:138.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
                        <p class="MsoListParagraph" align="center" style="margin-left:0cm;mso-add-space:
  auto;text-align:center;line-height:115%"><span lang="IN" style="font-size:11.0pt;
  line-height:115%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">COKLAT<o:p></o:p></span></p>
                    </td>
                </tr>
                <tr style="mso-yfti-irow:2">
                    <td width="68" valign="top" style="width:51.15pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
                        <p class="MsoListParagraph" align="center" style="margin-left:0cm;mso-add-space:
  auto;text-align:center;line-height:115%"><span lang="IN" style="font-size:11.0pt;
  line-height:115%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">2<o:p></o:p></span></p>
                    </td>
                    <td width="326" valign="top" style="width:244.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
                        <p class="MsoListParagraph" style="margin-left:0cm;mso-add-space:auto;
  line-height:115%"><span lang="IN" style="font-size:11.0pt;line-height:115%;
  font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">KEBIDANAN<o:p></o:p></span></p>
                    </td>
                    <td width="185" valign="top" style="width:138.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
                        <p class="MsoListParagraph" align="center" style="margin-left:0cm;mso-add-space:
  auto;text-align:center;line-height:115%"><span lang="IN" style="font-size:11.0pt;
  line-height:115%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">BIRU
                                MUDA<o:p></o:p></span></p>
                    </td>
                </tr>
                <tr style="mso-yfti-irow:3">
                    <td width="68" valign="top" style="width:51.15pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
                        <p class="MsoListParagraph" align="center" style="margin-left:0cm;mso-add-space:
  auto;text-align:center;line-height:115%"><span lang="IN" style="font-size:11.0pt;
  line-height:115%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">3<o:p></o:p></span></p>
                    </td>
                    <td width="326" valign="top" style="width:244.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
                        <p class="MsoListParagraph" style="margin-left:0cm;mso-add-space:auto;
  line-height:115%"><span lang="IN" style="font-size:11.0pt;line-height:115%;
  font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">GIZI<o:p></o:p></span></p>
                    </td>
                    <td width="185" valign="top" style="width:138.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
                        <p class="MsoListParagraph" align="center" style="margin-left:0cm;mso-add-space:
  auto;text-align:center;line-height:115%"><span lang="IN" style="font-size:11.0pt;
  line-height:115%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">HIJAU
                                TUA<o:p></o:p></span></p>
                    </td>
                </tr>
                <tr style="mso-yfti-irow:4">
                    <td width="68" valign="top" style="width:51.15pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
                        <p class="MsoListParagraph" align="center" style="margin-left:0cm;mso-add-space:
  auto;text-align:center;line-height:115%"><span lang="IN" style="font-size:11.0pt;
  line-height:115%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">4<o:p></o:p></span></p>
                    </td>
                    <td width="326" valign="top" style="width:244.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
                        <p class="MsoListParagraph" style="margin-left:0cm;mso-add-space:auto;
  line-height:115%"><span lang="IN" style="font-size:11.0pt;line-height:115%;
  font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">TEKNOLOGI LABORATORIUM
                                MEDIS<o:p></o:p></span></p>
                    </td>
                    <td width="185" valign="top" style="width:138.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
                        <p class="MsoListParagraph" align="center" style="margin-left:0cm;mso-add-space:
  auto;text-align:center;line-height:115%"><span lang="IN" style="font-size:11.0pt;
  line-height:115%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">KUNING<o:p></o:p></span></p>
                    </td>
                </tr>
                <tr style="mso-yfti-irow:5">
                    <td width="68" valign="top" style="width:51.15pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
                        <p class="MsoListParagraph" align="center" style="margin-left:0cm;mso-add-space:
  auto;text-align:center;line-height:115%"><span lang="IN" style="font-size:11.0pt;
  line-height:115%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">5<o:p></o:p></span></p>
                    </td>
                    <td width="326" valign="top" style="width:244.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
                        <p class="MsoListParagraph" style="margin-left:0cm;mso-add-space:auto;
  line-height:115%"><span lang="IN" style="font-size:11.0pt;line-height:115%;
  font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">FARMASI<o:p></o:p></span></p>
                    </td>
                    <td width="185" valign="top" style="width:138.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
                        <p class="MsoListParagraph" align="center" style="margin-left:0cm;mso-add-space:
  auto;text-align:center;line-height:115%"><span lang="IN" style="font-size:11.0pt;
  line-height:115%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">HIJAU
                                MUDA<o:p></o:p></span></p>
                    </td>
                </tr>
                <tr style="mso-yfti-irow:6">
                    <td width="68" valign="top" style="width:51.15pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
                        <p class="MsoListParagraph" align="center" style="margin-left:0cm;mso-add-space:
  auto;text-align:center;line-height:115%"><span lang="IN" style="font-size:11.0pt;
  line-height:115%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">6<o:p></o:p></span></p>
                    </td>
                    <td width="326" valign="top" style="width:244.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
                        <p class="MsoListParagraph" style="margin-left:0cm;mso-add-space:auto;
  line-height:115%"><span lang="IN" style="font-size:11.0pt;line-height:115%;
  font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">KESEHATAN LINGKUNGAN<o:p></o:p></span></p>
                    </td>
                    <td width="185" valign="top" style="width:138.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
                        <p class="MsoListParagraph" align="center" style="margin-left:0cm;mso-add-space:
  auto;text-align:center;line-height:115%"><span lang="IN" style="font-size:11.0pt;
  line-height:115%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">BIRU
                                TUA<o:p></o:p></span></p>
                    </td>
                </tr>
                <tr style="mso-yfti-irow:7;mso-yfti-lastrow:yes">
                    <td width="68" valign="top" style="width:51.15pt;border:solid black 1.0pt;
  mso-border-themecolor:text1;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-top-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
                        <p class="MsoListParagraph" align="center" style="margin-left:0cm;mso-add-space:
  auto;text-align:center;line-height:115%"><span lang="IN" style="font-size:11.0pt;
  line-height:115%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">7<o:p></o:p></span></p>
                    </td>
                    <td width="326" valign="top" style="width:244.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
                        <p class="MsoListParagraph" style="margin-left:0cm;mso-add-space:auto;
  line-height:115%"><span lang="IN" style="font-size:11.0pt;line-height:115%;
  font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">PROMOSI KESEHATAN<o:p></o:p></span></p>
                    </td>
                    <td width="185" valign="top" style="width:138.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;mso-border-bottom-themecolor:text1;
  border-right:solid black 1.0pt;mso-border-right-themecolor:text1;mso-border-top-alt:
  solid black .5pt;mso-border-top-themecolor:text1;mso-border-left-alt:solid black .5pt;
  mso-border-left-themecolor:text1;mso-border-alt:solid black .5pt;mso-border-themecolor:
  text1;padding:0cm 5.4pt 0cm 5.4pt">
                        <p class="MsoListParagraph" align="center" style="margin-left:0cm;mso-add-space:
  auto;text-align:center;line-height:115%"><span lang="EN-US" style="font-size:
  11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">MERAH MUDA<o:p></o:p></span></p>
                    </td>
                </tr>
            </tbody>
        </table>

        <p class="MsoNormal" style="line-height:150%"><span lang="IN" style="font-size:
11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;color:red;mso-ansi-language:
IN">
                <o:p>&nbsp;</o:p>
            </span></p>

        <p class="MsoListParagraph" style="margin-left:39.3pt;mso-add-space:auto;
text-align:justify;text-justify:inter-ideograph;text-indent:-18.0pt;line-height:
150%;mso-list:l2 level1 lfo3">
            <!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN"><span style="mso-list:Ignore">5.<span
                        style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span>
            <!--[endif]--><span lang="EN-US" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-bidi-font-weight:bold">Bagi Calon Mahasiswa yang akan mengajukan Beasiswa
                Mahasiswa dari Keluarga Berpenghasilan Rendah </span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN;mso-bidi-font-weight:bold">(</span><span lang="EN-US" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-bidi-font-weight:bold">MBR</span><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN;
mso-bidi-font-weight:bold">)</span><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-bidi-font-weight:bold">,
                berkas diterima paling lama </span><b style="mso-bidi-font-weight:normal"><span lang="EN-US"
                    style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">Senin,
                </span></b><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">13</span></b><b style="mso-bidi-font-weight:normal"><span lang="IN"
                    style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">
                </span></b><b style="mso-bidi-font-weight:normal"><span lang="EN-US"
                    style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">April
                    2026</span></b><span lang="EN-US" style="font-size:11.0pt;line-height:150%;
font-family:&quot;Arial&quot;,sans-serif;mso-bidi-font-weight:bold"> </span><b
                style="mso-bidi-font-weight:normal"><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif">pukul </span></b><b
                style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">1</span></b><b
                style="mso-bidi-font-weight:normal"><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif">4</span></b><b style="mso-bidi-font-weight:normal"><span
                    lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">.00 WIB</span></b><span lang="EN-US"
                style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-bidi-font-weight:bold"> dengan melampirkan dokumen berikut:</span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
color:#EE0000;mso-ansi-language:IN;mso-bidi-font-weight:bold">
                <o:p></o:p>
            </span></p>

        <p class="MsoListParagraphCxSpLast" style="margin-left:54.0pt;mso-add-space:auto;
text-align:justify;text-justify:inter-ideograph;text-indent:-13.5pt;line-height:
150%;mso-list:l2 level2 lfo3">
            <!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN;mso-bidi-font-weight:bold"><span style="mso-list:Ignore">a.<span
                        style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
                    </span></span></span>
            <!--[endif]--><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-bidi-font-weight:bold">Surat
                usulan beasiswa yang ditujukan ke Direktur Poltekkes Kemenkes Bengkulu</span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
color:#EE0000;mso-ansi-language:IN;mso-bidi-font-weight:bold">
                <o:p></o:p>
            </span></p>

        <p class="MsoListParagraphCxSpLast" style="margin-left:54.0pt;mso-add-space:auto;
text-align:justify;text-justify:inter-ideograph;text-indent:-13.5pt;line-height:
150%;mso-list:l2 level2 lfo3">
            <!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN;mso-bidi-font-weight:bold"><span style="mso-list:Ignore">b.<span
                        style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
                    </span></span></span>
            <!--[endif]--><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-bidi-font-weight:bold">Surat
                Keterangan Tidak Mampu dari Kelurahan/Desa</span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
color:#EE0000;mso-ansi-language:IN;mso-bidi-font-weight:bold">
                <o:p></o:p>
            </span></p>

        <p class="MsoListParagraphCxSpLast" style="margin-left:54.0pt;mso-add-space:auto;
text-align:justify;text-justify:inter-ideograph;text-indent:-13.5pt;line-height:
150%;mso-list:l2 level2 lfo3">
            <!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN;mso-bidi-font-weight:bold"><span style="mso-list:Ignore">c.<span
                        style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
                    </span></span></span>
            <!--[endif]--><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-bidi-font-weight:bold">Foto
                Copy KTP (peserta dan orangtua)</span><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;color:#EE0000;mso-ansi-language:
IN;mso-bidi-font-weight:bold">
                <o:p></o:p>
            </span></p>

        <p class="MsoListParagraphCxSpLast" style="margin-left:54.0pt;mso-add-space:auto;
text-align:justify;text-justify:inter-ideograph;text-indent:-13.5pt;line-height:
150%;mso-list:l2 level2 lfo3">
            <!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN;mso-bidi-font-weight:bold"><span style="mso-list:Ignore">d.<span
                        style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
                    </span></span></span>
            <!--[endif]--><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-bidi-font-weight:bold">Foto
                Copy Kartu Keluarga</span><span lang="IN" style="font-size:11.0pt;line-height:
150%;font-family:&quot;Arial&quot;,sans-serif;color:#EE0000;mso-ansi-language:IN;
mso-bidi-font-weight:bold">
                <o:p></o:p>
            </span></p>

        <p class="MsoListParagraphCxSpLast" style="margin-left:54.0pt;mso-add-space:auto;
text-align:justify;text-justify:inter-ideograph;text-indent:-13.5pt;line-height:
150%;mso-list:l2 level2 lfo3">
            <!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN;mso-bidi-font-weight:bold"><span style="mso-list:Ignore">e.<span
                        style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
                    </span></span></span>
            <!--[endif]--><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-bidi-font-weight:bold">Foto
                Rumah dari segala sisi berukuran </span><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN;
mso-bidi-font-weight:bold">3</span><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-bidi-font-weight:bold">R
                (tampak depan, samping kiri, samping kanan, belakang dan ruangan bagian dalam)</span><span lang="IN"
                style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
color:#EE0000;mso-ansi-language:IN;mso-bidi-font-weight:bold">
                <o:p></o:p>
            </span></p>

        <p class="MsoListParagraphCxSpLast" style="margin-left:54.0pt;mso-add-space:auto;
text-align:justify;text-justify:inter-ideograph;text-indent:-13.5pt;line-height:
150%;mso-list:l2 level2 lfo3">
            <!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN;mso-bidi-font-weight:bold"><span style="mso-list:Ignore">f.<span
                        style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;
                    </span></span></span>
            <!--[endif]--><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-bidi-font-weight:bold">Bukti
                Pemakaian Listrik </span><span lang="IN" style="font-size:11.0pt;line-height:
150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN;mso-bidi-font-weight:
bold">3</span><span lang="EN-US" style="font-size:11.0pt;line-height:150%;
font-family:&quot;Arial&quot;,sans-serif;mso-bidi-font-weight:bold"> Bulan </span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
color:#EE0000;mso-ansi-language:IN;mso-bidi-font-weight:bold">
                <o:p></o:p>
            </span></p>

        <p class="MsoListParagraphCxSpLast" style="margin-left:54.0pt;mso-add-space:auto;
text-align:justify;text-justify:inter-ideograph;text-indent:-13.5pt;line-height:
150%;mso-list:l2 level2 lfo3">
            <!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN;mso-bidi-font-weight:bold"><span style="mso-list:Ignore">g.<span
                        style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
                    </span></span></span>
            <!--[endif]--><span lang="EN-US" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-bidi-font-weight:bold">Denah
                Lokasi Rumah</span><span lang="IN" style="font-size:11.0pt;line-height:150%;
font-family:&quot;Arial&quot;,sans-serif;color:#EE0000;mso-ansi-language:IN;mso-bidi-font-weight:
bold">
                <o:p></o:p>
            </span></p>

        <p class="MsoListParagraphCxSpLast" style="margin-left:54.0pt;mso-add-space:auto;
text-align:justify;text-justify:inter-ideograph;text-indent:-13.5pt;line-height:
150%;mso-list:l2 level2 lfo3">
            <!--[if !supportLists]--><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:Arial;mso-ansi-language:IN;mso-bidi-font-weight:bold"><span style="mso-list:Ignore">h.<span
                        style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
                    </span></span></span>
            <!--[endif]--><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN;
mso-bidi-font-weight:bold">Dokumen pengajuan beasiswa MBR disatukan dalam
                bentuk file PDF (Scan Pdf) di upload di link berikut :<span style="color:#EE0000">
                    <o:p></o:p>
                </span></span></p>

        <p class="MsoNormal" style="margin-left:54.0pt;text-align:justify;text-justify:
inter-ideograph;line-height:150%"><span lang="EN-US"><a
                    href="https://bit.ly/BerkasPengajuan_BeasiswaMBR_PoltekkesBengkulu_Tahun2026"><span lang="IN"
                        style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN;mso-bidi-font-weight:bold">https://bit.ly/BerkasPengajuan_BeasiswaMBR_PoltekkesBengkulu_Tahun2026</span></a></span><span lang="EN-US" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN;mso-bidi-font-weight:bold"> </span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN;mso-bidi-font-weight:bold">file di upload sesuai dengan
                jurusan dan program studi dengan format nama file : </span><b style="mso-bidi-font-weight:
normal"><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:
&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">Nama_Programstudi, contoh : Natasya_D3Farmasi</span></b><span
                lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN;mso-bidi-font-weight:bold"> serta </span><b style="mso-bidi-font-weight:normal"><span lang="IN"
                    style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">file asli
                    diserahkan ke Poltekkes Kemenkes Bengkulu.</span></b><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN;mso-bidi-font-weight:bold"> </span><span lang="EN-US" style="mso-bidi-font-weight:bold">
                <o:p></o:p>
            </span></p>

        <p class="MsoNormal" style="text-align:justify;text-justify:inter-ideograph;
line-height:150%"><span lang="EN-US" style="mso-bidi-font-weight:bold">
                <o:p>&nbsp;</o:p>
            </span></p>

        <p class="MsoNormal" style="margin-left:42.55pt;text-align:justify;text-justify:
inter-ideograph;line-height:150%"><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">Seluruh persyaratan
                dapat </span><span lang="EN-US" style="font-size:11.0pt;line-height:150%;
font-family:&quot;Arial&quot;,sans-serif">diserahkan langsung/dikirimkan<b style="mso-bidi-font-weight:normal"> </b>via
                Pos/JNE/JNT/Travel </span><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">pada hari kerja pukul 08.00-1</span><span lang="EN-US"
                style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">5</span><span
                lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">.00 WIB</span><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif"> </span><span lang="EN-US"
                style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif">dengan
                alamat </span><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;
mso-ansi-language:IN">Direktorat Lantai I Gedung A</span></b><b style="mso-bidi-font-weight:normal"><span lang="EN-US"
                    style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif">l</span></b><b style="mso-bidi-font-weight:normal"><span
                    lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">-Zahrawi
                    Jalan Indragiri Nomor 03 Padang Harapan Bengkulu</span></b><b style="mso-bidi-font-weight:
normal"><span lang="EN-US" style="font-size:11.0pt;line-height:150%;font-family:
&quot;Arial&quot;,sans-serif"> (untuk konfirmasi pengiriman berkas dapat menghubungi
                    Whatsapp (WA) Admin<span style="color:red"> </span>SPMB Poltekkes Bengkulu/081370216550).<o:p></o:p>
                </span></b></p>

        <p class="MsoNormal" style="margin-left:35.45pt;text-align:justify;text-justify:
inter-ideograph;line-height:150%"><span lang="IN" style="font-size:11.0pt;
line-height:150%;font-family:&quot;Arial&quot;,sans-serif;color:red;mso-ansi-language:
IN">
                <o:p>&nbsp;</o:p>
            </span></p>

        <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:9.6pt;
margin-bottom:0cm;margin-left:42.55pt;margin-bottom:.0001pt;text-align:center"><b
                style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;
font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">BILA SAMPAI TANGGAL 2</span></b><b><span lang="IN"
                    style="font-size:11.0pt;font-family:&quot;Arial&quot;,sans-serif"> </span></b><b><span lang="EN-US"
                    style="font-size:11.0pt;font-family:&quot;Arial&quot;,sans-serif">APRIL 2026</span></b><b
                style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;
font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN"> BELUM MELAKSANAKAN
                    REGISTRASI</span></b><b style="mso-bidi-font-weight:normal"><span lang="EN-US"
                    style="font-size:11.0pt;font-family:&quot;Arial&quot;,sans-serif"> DAN PENGUMPULAN
                    BERKAS</span></b><b style="mso-bidi-font-weight:normal"><span lang="IN" style="font-size:11.0pt;
font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:IN">, MAKA PESERTA DIANGGAP
                    MENGUNDURKAN DIRI</span></b><b style="mso-bidi-font-weight:normal"><span lang="EN-US"
                    style="font-size:11.0pt;font-family:&quot;Arial&quot;,sans-serif">.</span></b><span lang="EN-US"
                style="font-size:11.0pt;font-family:&quot;Arial&quot;,sans-serif">
                <o:p></o:p>
            </span></p>

        <p class="MsoNormal"><span lang="EN-US" style="font-size:11.0pt;font-family:&quot;Arial&quot;,sans-serif;
color:red">
                <o:p>&nbsp;</o:p>
            </span></p>

        <p class="MsoNormal"><span lang="EN-US" style="font-size:11.0pt;font-family:&quot;Arial&quot;,sans-serif;
color:red">
                <o:p>&nbsp;</o:p>
            </span></p>
</body>

</html>
<script>
    window.print();
</script>
<style>
    h1 {
        text-align: center;
    }

    p {
        text-align: center;
    }

    div {
        text-align: center;
    }
</style>

<?php } elseif ($a['status_pmdp_2'] == "Tidak Lulus") { ?>
<br>
<br>
<table align="center">
    <tr>
        <td>
            <h3 align="center">Maaf anda dinyatakan:</h3>
        </td>
    </tr>
    <tr>
        <td>
            <h1>Belum Lulus, Silahkan mencoba jalur SPMB Bersama di sini <a
                    href="https://spmb-poltekkes.kemkes.go.id/">https://spmb-poltekkes.kemkes.go.id/</a></h1>
        </td>
    </tr>
</table>
<?php } ?>