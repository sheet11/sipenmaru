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
            <h1>LULUS PMDP TAHAP II</h1>
        </td>
    </tr>
</table>
<!--<div style="break-after:page"></div>-->

<table width="100%" border="0" align="center">
   

<p>Peserta yang dinyatakan LULUS Seleksi Penerimaan Mahasiswa Baru (SPMB) Tahap II Jalur Prestasi diwajibkan untuk melakukan <strong>REGISTRASI</strong><strong>&nbsp;(PEMBAYARAN DAN PENGUMPULAN BERKAS)</strong> pada tanggal <strong>8 s.d 14</strong> <strong>April 202</strong><strong>5&nbsp;</strong>dengan melengkapi persyaratan administrasi sebagai berikut:</p>
<strong>A. Persyaratan Administrasi Keuangan&nbsp;</strong>
<ol>
    <li>Pembayaran Biaya Pendidikan Uang Kuliah Tunggal (UKT) yang jumlahnya sesuai dengan Program Studi melalui <strong>Rekening Bank MUAMALAT No. Rekening 4320666666 an. RPL 016 BLU POLTEKKESUNTUK OPS&nbsp;</strong>atau<strong>&nbsp;Rekening Bank Syariah Indonesia (BSI) No. Rekening 7632153001 an. RPL 016 BLU POLTEKKES BKL UTK OPS P</strong><strong>.&nbsp;</strong>(dapat diakses melalui link <a href="http://bit.ly/ukt-mahasiswa">http://bit.ly/ukt-mahasiswa</a>).</li>
    <li>Pembayaran Biaya Seragam dan Alat Kesehatan yang jumlahnya sesuai dengan Program Studi melalui <strong>Bank Syariah Indonesia (BSI) Cabang Bengkulu No. Rekening 7282483372 an. KPN POLTEKKES KEMENKES BKL.</strong> (dapat diakses melalui link <a href="http://bit.ly/biaya-seragam-dan-alat-kesehatan">http://bit.ly/biaya-seragam-dan-alat-kesehatan</a>).</li>
    <li>Pembayaran Sumbangan Sukarela Pembangunan Masjid Tarbiyatush Shihhah melalui Rekening <strong>Bank Muamalat Indonesia No. Rekening 4310049394</strong> atau <strong>Bank Syariah Indonesia (BSI) Cabang Bengkulu No. Rekening 4362324040 an. MASJID TARBIYATUSH SHIHHAH.&nbsp;</strong></li>
    <li>Pembayaran Iuran Kegiatan Organisasi Mahasiswa Poltekkes Kemenkes Bengkulu dengan rincian Diploma Tiga sebesar <strong>Rp 300.000,</strong>- (tiga ratus ribu rupiah) dan Sarjana Terapan Gizi dan Dietetika/ Promosi Kesehatan sebesar <strong>Rp 400.000</strong>,- (empat ratus ribu rupiah), Sarjana Terapan + Pendidikan Profesi Ners dan Profesi Bidan sebesar <strong>Rp 500.000</strong>,- (lima ratus ribu rupiah), dana dibayarkan 1 kali selama menempuh pendidikan melalui <strong>Bank Tabungan Negara (BTN) No. Rekening 00037-01-50-050725-4 an. ORMAWA POLTEKKES KEMENKES BENGKULU.</strong></li>
    <li><strong>UANG YANG TELAH DISETOR TIDAK DAPAT DITARIK/DIKEMBALIKAN.</strong><strong><br></strong></li>
</ol>
<strong>B. Persyaratan Administrasi</strong>
<ul>
    <li><strong>Kelengkapan Administrasi Meliputi:</strong></li>
</ul>
<ol style="list-style-type: lower-alpha;">
    <li>Bukti Kelulusan Tahap II SPMB Jalur Prestasi sebanyak 1 lembar.</li>
    <li>Bukti Cetak Input Nilai Raport sebanyak 1 lembar.</li>
    <li><em>Foto Copy</em> Raport Legalisir (Semester 1-5) sebanyak 1</li>
    <li><em>Foto Copy</em> Sertifikat atau Piagam Penghargaan Prestasi.</li>
</ol>
<ul>
    <li><strong>Bukti Setor Asli meliputi:</strong></li>
</ul>
<ol>
    <li>Uang Kuliah Tunggal (UKT)</li>
    <li>Uang Seragam dan Alat Kesehatan</li>
    <li>Uang Pembangunan Masjid</li>
    <li>Uang Iuran Kegiatan Organisasi Mahasiswa</li>
</ol>
<ul>
    <li><strong>Surat Pernyataan Tidak menuntut Pengembalian Dana Pendidikan&nbsp;</strong>ditandatangani Calon Mahasiswa Baru dan diketahui oleh Orang Tua di atas Materai 10.000 (dapat diakses melalui link <a href="http://bit.ly/surat-pernyataan-tidak-menuntut-pengembalian-dana">http://bit.ly/surat-pernyataan-tidak-menuntut-pengembalian-dana</a>).</li>
    <li><strong>Calon Mahasiswa Baru wajib menjadi Peserta BPJS dan memindahkan kepesertaan ke Fasilitas Kesehatan (Faskes) Klinik Hygea Poltekkes Kemenkes Bengkul</strong><strong>u&nbsp;</strong>(dengan mengumpulkan <em>foto copy</em> Kartu Kepesertaan BPJS).</li>
    <li><strong>Semua Berkas Persyaratan Administrasi dimasukkan dalam map&nbsp;</strong><strong>kertas bertulang&nbsp;</strong><strong>dengan ketentuan&nbsp;</strong></li>
</ul>
<table align="center" border="2">
    <tbody>
        <tr>
            <td style="width: 68px;">
                <p><strong>NO</strong></p>
            </td>
            <td style="width: 326px;">
                <p><strong>JURUSAN/PRODI</strong></p>
            </td>
            <td style="width: 185px;">
                <p><strong>WARNA MAP</strong></p>
            </td>
        </tr>
        <tr>
            <td style="width: 68px;">
                <p>1</p>
            </td>
            <td style="width: 326px;">
                <p>KEPERAWATAN</p>
            </td>
            <td style="width: 185px;">
                <p>COKLAT</p>
            </td>
        </tr>
        <tr>
            <td style="width: 68px;">
                <p>2</p>
            </td>
            <td style="width: 326px;">
                <p>KEBIDANAN</p>
            </td>
            <td style="width: 185px;">
                <p>BIRU MUDA</p>
            </td>
        </tr>
        <tr>
            <td style="width: 68px;">
                <p>3</p>
            </td>
            <td style="width: 326px;">
                <p>GIZI</p>
            </td>
            <td style="width: 185px;">
                <p>HIJAU TUA</p>
            </td>
        </tr>
        <tr>
            <td style="width: 68px;">
                <p>4</p>
            </td>
            <td style="width: 326px;">
                <p>TEKNOLOGI LABORATORIUM MEDIS</p>
            </td>
            <td style="width: 185px;">
                <p>KUNING</p>
            </td>
        </tr>
        <tr>
            <td style="width: 68px;">
                <p>5</p>
            </td>
            <td style="width: 326px;">
                <p>FARMASI</p>
            </td>
            <td style="width: 185px;">
                <p>HIJAU MUDA</p>
            </td>
        </tr>
        <tr>
            <td style="width: 68px;">
                <p>6</p>
            </td>
            <td style="width: 326px;">
                <p>KESEHATAN LINGKUNGAN</p>
            </td>
            <td style="width: 185px;">
                <p>BIRU TUA</p>
            </td>
        </tr>
        <tr>
            <td style="width: 68px;">
                <p>7</p>
            </td>
            <td style="width: 326px;">
                <p>PROMOSI KESEHATAN</p>
            </td>
            <td style="width: 185px;">
                <p>MERAH MUDA</p>
            </td>
        </tr>
    </tbody>
</table>
<p>&nbsp;</p>
<ul>
    <li><strong>Bagi Calon Mahasiswa yang akan mengajukan Beasiswa Mahasiswa dari Keluarga Berpenghasilan Rendah&nbsp;</strong><strong>(</strong><strong>MBR</strong><strong>)</strong><strong>, berkas diterima paling lama Senin,&nbsp;</strong><strong>14</strong><strong>April 2025 pukul&nbsp;</strong><strong>1</strong><strong>4</strong><strong>.00 WIB</strong><strong>&nbsp;dengan melampirkan Surat Keterangan Tidak Mampu dari Kelurahan/Desa, Foto Rumah dari segala sisi berukuran&nbsp;</strong><strong>3</strong><strong>R, Bukti Pemakaian Listrik&nbsp;</strong><strong>3</strong><strong>&nbsp;Bulan, dan Denah Rumah, akan dilakukan Survei oleh Panitia SPMB dan akan diumumkan Penerima Beasiswa MBR pada website :</strong><a href="https://poltekkesbengkulu.ac.id/">https://poltekkesbengkulu.ac.id/</a></li>
</ul>
<p>&nbsp;</p>
<p>Persyaratan dapat diserahkan langsung/dikirimkan via Pos/JNE/JNT/Travel pada hari kerja, Senin-Jumat pukul 08.00-14.00 WIB pada alamat <strong>Direktorat Lantai I Gedung A</strong><strong>l</strong><strong>-Zahrawi Jalan Indragiri Nomor 03 Padang Harapan Bengkulu</strong><strong>&nbsp;(untuk konfirmasi pengiriman berkas dapat menghubungi Whatsapp (WA) Admin SPMB Poltekkes Bengkulu/081370216550).</strong></p>
<p>&nbsp;</p>
<p><strong>BILA SAMPAI TANGGAL 14</strong> <strong>APRIL 2025</strong><strong>&nbsp;BELUM MELAKSANAKAN REGISTRASI</strong><strong>&nbsp;DAN PENGUMPULAN BERKAS</strong><strong>, MAKA PESERTA DIANGGAP MENGUNDURKAN DIRI</strong><strong>.</strong></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
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
            <h1>Belum Lulus, Silahkan mencoba jalur SPMB Bersama di sini <a href="https://spmb-poltekkes.kemkes.go.id/">https://spmb-poltekkes.kemkes.go.id/</a></h1>
        </td>
    </tr>
</table> 
<? } ?>