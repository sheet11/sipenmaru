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
            <h1>LULUS SPMB MANDIRI TAHAP II</h1>
        </td>
    </tr>
</table>
<h3 style="text-align: center;"><u>Pengumuman</u></h3>
<table width="100%" border="0" cellpadding="5" cellspacing="0" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">
    <tr>
        <td>
            <p align="justify">
                Peserta yang dinyatakan <b>LULUS Seleksi Penerimaan Mahasiswa Baru (SPMB) Tahap II (Tahap Akhir) Jalur Mandiri</b>
                diwajibkan untuk melakukan <b>REGISTRASI (PEMBAYARAN DAN PENGUMPULAN BERKAS)</b>
                pada tanggal <b>25, 26 dan 29 Juni 2026 pukul 08.00 s.d 15.00 WIB</b>
                dengan melengkapi persyaratan administrasi sebagai berikut:
            </p>

            <h3>A. Persyaratan Administrasi Keuangan</h3>

            <ol>
                <li>
                    Pembayaran Biaya Pendidikan Uang Kuliah Tunggal (UKT) yang jumlahnya sesuai
                    dengan Program Studi melalui Rekening Bank MANDIRI
                    <b>No. Rekening 1790063215300</b>
                    a.n. <b>RPL 016 BLU POLTEKKES BKL UTK OPS P</b>.
                    <br><br>

                    Peserta yang akan melakukan pembayaran UKT secara Tunai, dapat difasilitasi
                    Teller Bank Mandiri pada saat Registrasi
                    (Lokasi Poltekkes Kemenkes Bengkulu).
                    <br><br>

                    Daftar UKT dapat diakses melalui:
                    <br>
                    https://spmb-polkeslu.cloud/wp-content/uploads/2026/03/POLA-TARIF-UKT-2026.pdf
                </li>

                <li>
                    <b>UANG YANG TELAH DISETOR TIDAK DAPAT DITARIK / DIKEMBALIKAN.</b>
                </li>
            </ol>

            <h3>B. Persyaratan Administrasi</h3>

            <ol>
                <li>
                    Kelengkapan Administrasi Meliputi:
                    <ol type="a">
                        <li>Bukti Kelulusan Tahap II SPMB Jalur Mandiri sebanyak 1 lembar.</li>
                        <li>Foto Copy Legalisir Ijazah atau Asli Surat Keterangan Lulus dari Kepala Sekolah sebanyak 1 lembar.</li>
                        <li>Foto Copy Legalisir Ijazah dan Transkrip Nilai untuk mahasiswa RPL dan Profesi sebanyak 1 lembar.</li>
                        <li>Bukti Setor Uang Kuliah Tunggal (UKT).</li>
                    </ol>
                </li>

                <li>
                    Surat Pernyataan Tidak Menuntut Pengembalian Dana Pendidikan ditandatangani
                    Calon Mahasiswa Baru dan diketahui oleh Orang Tua di atas Materai Rp10.000.
                    <br>
                    Link:
                    https://spmb-polkeslu.cloud/wp-content/uploads/2026/03/Surat-Pernyataan-Tidak-Menuntut-Pengembalian-Dana.pdf
                </li>

                <li>
                    Calon Mahasiswa Baru wajib menjadi Peserta BPJS dan memindahkan
                    kepesertaan ke Fasilitas Kesehatan (Faskes)
                    <b>Klinik Hygea Poltekkes Kemenkes Bengkulu</b>
                    dengan mengumpulkan fotokopi Kartu Kepesertaan BPJS.
                </li>

                <li>
                    Semua Berkas Persyaratan Administrasi dimasukkan dalam map kertas bertulang
                    dengan ketentuan:
                </li>
            </ol>

            <table border="1" width="100%" cellpadding="4" cellspacing="0">
                <tr bgcolor="#dddddd">
                    <th width="10%">No</th>
                    <th>Jurusan / Prodi</th>
                    <th width="25%">Warna Map</th>
                </tr>
                <tr>
                    <td align="center">1</td>
                    <td>KEPERAWATAN</td>
                    <td>COKLAT</td>
                </tr>
                <tr>
                    <td align="center">2</td>
                    <td>KEBIDANAN</td>
                    <td>BIRU MUDA</td>
                </tr>
                <tr>
                    <td align="center">3</td>
                    <td>GIZI</td>
                    <td>HIJAU TUA</td>
                </tr>
                <tr>
                    <td align="center">4</td>
                    <td>TEKNOLOGI LABORATORIUM MEDIS</td>
                    <td>KUNING</td>
                </tr>
                <tr>
                    <td align="center">5</td>
                    <td>FARMASI</td>
                    <td>HIJAU MUDA</td>
                </tr>
                <tr>
                    <td align="center">6</td>
                    <td>KESEHATAN LINGKUNGAN</td>
                    <td>BIRU TUA</td>
                </tr>
                <tr>
                    <td align="center">7</td>
                    <td>PROMOSI KESEHATAN</td>
                    <td>MERAH MUDA</td>
                </tr>
            </table>

            <br>

            <p align="justify">
                Seluruh persyaratan diserahkan langsung pada saat registrasi tanggal
                <b>25, 26 dan 29 Juni 2026 pukul 08.00 s.d 15.00 WIB</b>
                dengan alamat:
            </p>

            <p align="center">
                <b>
                    Poltekkes Kemenkes Bengkulu<br>
                    Gedung Auditorium<br>
                    Jl. Indragiri No. 03 Padang Harapan Bengkulu
                </b>
            </p>

            <p align="justify">
                Untuk informasi lebih lanjut dapat menghubungi admin:
                <b>081370216550</b>.
            </p>

            <p align="center" style="font-size:14px;">
                <b>
                    BILA SAMPAI TANGGAL 29 JUNI 2026 BELUM MELAKSANAKAN REGISTRASI
                    DAN PENGUMPULAN BERKAS, MAKA PESERTA DIANGGAP MENGUNDURKAN DIRI.
                </b>
            </p>
        </td>
    </tr>
</table>
</body>
</html>
<script>
  window.print();
</script>
<?php } elseif ($a['status_lulus_2'] == null || $a['status_lulus_2'] == "Tidak Lulus") { 
echo "<br><br><br><h1 style= text-align:center >MAAF, ANDA BELUM LULUS PADA SPMB JALUR MANDIRI<br>Ucapan terima kasih yang sebesar-besarnya kami sampaikan atas kepercayaan dan partisipasi peserta yang telah mendaftar serta mengikuti seluruh rangkaian seleksi Penerimaan Mahasiswa Baru (SPMB) Jalur Mandiri.</a> </h1><br><a href='../index.php'>Kembali </a>";
 }else{
echo "<br><br><br><h1 style= text-align:center >MAAF, ANDA BELUM LULUS PADA SPMB JALUR MANDIRI<br>Ucapan terima kasih yang sebesar-besarnya kami sampaikan atas kepercayaan dan partisipasi peserta yang telah mendaftar serta mengikuti seluruh rangkaian seleksi Penerimaan Mahasiswa Baru (SPMB) Jalur Mandiri.</a> </h1><br><a href='../index.php'>Kembali </a>";
 }
 ?>

<style>
h1 {text-align: center;}
p {text-align: center;}
div {text-align: center;}
</style>
