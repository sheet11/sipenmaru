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

  <table width="100%" border="0" align="center">
    <tr>
      <td><img src="../assets/img_kop/logobaru.png" width="100%" /></td>

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
        <h1>LULUS SPMB TAHAP I</h1>
      </td>
    </tr>
  </table>
  <br>
</body>

</html>
<hr>
<div style="width:90%; margin:auto; font-family:Arial, sans-serif; font-size:14px; line-height:1.6;">

  <h2 style="text-align:center;">PENGUMUMAN</h2>

  <p align="justify">
    Peserta yang dinyatakan <b>LULUS Seleksi Penerimaan Mahasiswa Baru (SPMB) Jalur Mandiri Tahap I</b>
    diwajibkan mengikuti tahapan Uji Kesehatan dan Wawancara dengan ketentuan sebagai berikut :
  </p>

  <h3>I. UJI KESEHATAN</h3>

  <ol>
    <li>Peserta WAJIB melaksanakan Uji Kesehatan mulai tanggal <b>15, 17, 18 dan 19 Juni 2026</b> di Rumah Sakit
      Bhayangkara Jl. Veteran No.2, Ps. Jitra, Kec. Tlk. Segara Kota Bengkulu (jadwal terlampir).</li>

    <li>Pada saat pelaksanaan kegiatan Uji Kesehatan, peserta wajib membawa berkas yang meliputi :
      <ol type="a">
        <li>Bukti Kelulusan Tahap 1 di print (1 lembar).</li>
        <li>Bukti Pembayaran Uji Kesehatan sebesar <b>Rp 295.000</b> (dua ratus sembilan puluh lima ribu rupiah) yang
          ditransfer ke Rekening Bank Mandiri : <b>1790063215300</b> a.n. <b>RPL 016 BLU POLTEKKES BKL UTK OPS P</b>,
          bukti pembayaran harus dicetak/print (1 lembar).</li>
        <li>Kartu Tanda Pengenal (KTP) asli dan Fotokopi KTP sebanyak 1 lembar.</li>
        <li>Pas Foto warna ukuran 3x4 sebanyak 1 lembar.</li>
      </ol>
    </li>
  </ol>

  <h3>II. WAWANCARA</h3>

  <ol>
    <li>Pelaksanaan wawancara akan dilaksanakan pada tanggal <b>15, 17, 18 dan 19 Juni 2026</b> di Poltekkes Kemenkes
      Bengkulu Jl. Indragiri No.03 Padang Harapan Bengkulu (jadwal terlampir).</li>

    <li>Wawancara WAJIB dihadiri oleh calon mahasiswa yang didampingi oleh salah satu Orang Tua/Wali.</li>
  </ol>

  <h3>III.</h3>
  <p>
    Peserta wajib melaksanakan <b>UJI KESEHATAN</b> dan <b>WAWANCARA</b> sesuai jadwal dan lokasi kelulusan yang telah
    ditentukan.
  </p>

  <h3>IV.</h3>
  <p>
    Apabila sampai dengan tanggal yang ditentukan pada Point I (satu) dan Point II (dua) calon mahasiswa tidak mengikuti
    tahapan Uji Kesehatan dan Wawancara maka peserta dinyatakan <b>GUGUR</b>.
  </p>

  <br>

  <h3 style="text-align:center;">JADWAL PELAKSANAAN UJI KESEHATAN</h3>
  <h4 style="text-align:center;">SELEKSI PENERIMAAN MAHASISWA BARU (SPMB) JALUR MANDIRI<br>
    POLTEKKES KEMENKES BENGKULU<br>
    TAHUN AKADEMIK 2026/2027</h4>

  <table border="1" cellspacing="0" cellpadding="5" width="100%">
    <tr>
      <th>No</th>
      <th>Hari/Tanggal</th>
      <th>Program Studi</th>
      <th>Waktu</th>
      <th>Tempat</th>
    </tr>

    <tr>
      <td rowspan="3">1</td>
      <td rowspan="3">Senin<br>15 Juni 2026</td>
      <td>• Sarjana Terapan Promosi Kesehatan<br>• Diploma III Sanitasi</td>
      <td>08.00 - 10.00 WIB</td>
      <td rowspan="12">RS. Bhayangkara<br>Jl. Veteran No.2, Ps. Jitra, Kec. Tlk. Segara Kota Bengkulu</td>
    </tr>
    <tr>
      <td>• Diploma III Gizi</td>
      <td>10.00 - 12.00 WIB</td>
    </tr>
    <tr>
      <td>• Gizi dan Dietetika Sarjana Terapan Kelas RPL<br>• Sarjana Terapan Gizi dan Dietetika</td>
      <td>12.00 - 14.00 WIB</td>
    </tr>

    <tr>
      <td rowspan="3">2</td>
      <td rowspan="3">Rabu<br>17 Juni 2026</td>
      <td>• Diploma III Teknologi Laboratorium Medis</td>
      <td>08.00 - 10.00 WIB</td>
    </tr>
    <tr>
      <td>• Diploma III Farmasi</td>
      <td>10.00 - 12.00 WIB</td>
    </tr>
    <tr>
      <td>• Diploma III Keperawatan Curup<br>• Diploma III Kebidanan Curup</td>
      <td>12.00 - 14.00 WIB</td>
    </tr>

    <tr>
      <td rowspan="3">3</td>
      <td rowspan="3">Kamis<br>18 Juni 2026</td>
      <td>• Sarjana Terapan Kebidanan & Pendidikan Profesi Bidan</td>
      <td>08.00 - 10.00 WIB</td>
    </tr>
    <tr>
      <td>• Diploma III Kebidanan Bengkulu</td>
      <td>10.00 - 12.00 WIB</td>
    </tr>
    <tr>
      <td>• Kebidanan Sarjana Terapan (RPL)<br>• Pendidikan Profesi Bidan</td>
      <td>12.00 - 14.00 WIB</td>
    </tr>

    <tr>
      <td rowspan="3">4</td>
      <td rowspan="3">Jumat<br>19 Juni 2026</td>
      <td>• Sarjana Terapan Keperawatan dan Profesi Ners KI</td>
      <td>08.00 - 10.00 WIB</td>
    </tr>
    <tr>
      <td>• Diploma III Keperawatan Bengkulu</td>
      <td>10.00 - 12.00 WIB</td>
    </tr>
    <tr>
      <td>• Keperawatan Sarjana Terapan (RPL)<br>• Pendidikan Profesi Ners</td>
      <td>12.00 - 14.00 WIB</td>
    </tr>
  </table>

  <br>

  <b>Catatan :</b>
  <ol>
    <li>Peserta memakai pakaian yang sopan dan rapi.</li>
    <li>Memakai sepatu dan rambut rapi (untuk yang laki-laki dan perempuan yang tidak mengenakan hijab).</li>
    <li>Peserta hadir sesuai dengan jadwal yang telah ditentukan.</li>
    <li>Peserta membawa bukti kelulusan Tahap 1 yang dicetak sebanyak 1 lembar.</li>
    <li>Peserta membawa bukti pembayaran yang dicetak sebanyak 1 lembar.</li>
    <li>Peserta membawa KTP asli dan fotokopi KTP sebanyak 1 lembar.</li>
    <li>Peserta membawa pas foto ukuran 3x4 latar belakang merah sebanyak 1 lembar.</li>
  </ol>

  <br>

  <h3 style="text-align:center;">JADWAL PELAKSANAAN WAWANCARA</h3>
  <h4 style="text-align:center;">SELEKSI PENERIMAAN MAHASISWA BARU (SPMB) JALUR MANDIRI<br>
    POLTEKKES KEMENKES BENGKULU<br>
    TAHUN AKADEMIK 2026/2027</h4>

  <table border="1" cellspacing="0" cellpadding="5" width="100%">
    <tr>
      <th>No</th>
      <th>Hari/Tanggal</th>
      <th>Program Studi</th>
      <th>Waktu</th>
      <th>Tempat</th>
    </tr>

    <tr>
      <td rowspan="3">1</td>
      <td rowspan="3">Senin<br>15 Juni 2026</td>
      <td>• Diploma III Gizi</td>
      <td>08.00 - 09.00 WIB</td>
      <td rowspan="12">Jurusan Masing-masing<br>Jl. Indragiri No.03 Padang Harapan Bengkulu</td>
    </tr>
    <tr>
      <td>• Gizi dan Dietetika Sarjana Terapan Kelas RPL<br>• Sarjana Terapan Gizi dan Dietetika</td>
      <td>10.00 - 11.00 WIB</td>
    </tr>
    <tr>
      <td>• Sarjana Terapan Promosi Kesehatan<br>• Diploma III Sanitasi</td>
      <td>13.00 - 14.00 WIB</td>
    </tr>

    <tr>
      <td rowspan="3">2</td>
      <td rowspan="3">Rabu<br>17 Juni 2026</td>
      <td>• Diploma III Farmasi</td>
      <td>08.00 - 09.00 WIB</td>
    </tr>
    <tr>
      <td>• Diploma III Keperawatan Curup<br>• Diploma III Kebidanan Curup</td>
      <td>10.00 - 11.00 WIB</td>
    </tr>
    <tr>
      <td>• Diploma III Teknologi Laboratorium Medis</td>
      <td>13.00 - 14.00 WIB</td>
    </tr>

    <tr>
      <td rowspan="3">3</td>
      <td rowspan="3">Kamis<br>18 Juni 2026</td>
      <td>• Diploma III Kebidanan Bengkulu</td>
      <td>08.00 - 09.00 WIB</td>
    </tr>
    <tr>
      <td>• Kebidanan Sarjana Terapan (RPL)<br>• Pendidikan Profesi Bidan</td>
      <td>10.00 - 11.00 WIB</td>
    </tr>
    <tr>
      <td>• Sarjana Terapan Kebidanan & Pendidikan Profesi Bidan</td>
      <td>13.00 - 14.00 WIB</td>
    </tr>

    <tr>
      <td rowspan="3">4</td>
      <td rowspan="3">Jumat<br>19 Juni 2026</td>
      <td>• Diploma III Keperawatan Bengkulu</td>
      <td>08.00 - 09.00 WIB</td>
    </tr>
    <tr>
      <td>• Keperawatan Sarjana Terapan (RPL)<br>• Pendidikan Profesi Ners</td>
      <td>10.00 - 11.00 WIB</td>
    </tr>
    <tr>
      <td>• Sarjana Terapan Keperawatan dan Profesi Ners KI</td>
      <td>13.30 - 14.30 WIB</td>
    </tr>

  </table>

  <br>

  <ol>
    <li>Peserta memakai pakaian yang sopan dan rapi.</li>
    <li>Memakai sepatu dan rambut rapi (untuk yang laki-laki dan perempuan yang tidak mengenakan hijab).</li>
    <li>Peserta hadir sesuai dengan jadwal yang telah ditentukan.</li>
  </ol>

</div>
<div style="page-break-before: always;"></div>
<script>
  window.print();
</script>
<?php } elseif ($a['status_lulus'] == null || $a['status_lulus'] == "Tidak Lulus") { 
echo "<br><br><br><h1>Maaf Anda Belum Lulus SIMAMI, silahkan coba lagi di periode selanjutnya</h1><br><a href='index.php'>Kembali </a>";
 }else{
echo "<br><br><br><h1>Maaf Anda Belum Lulus, silahkan coba lagi di periode selanjutnya</h1><br><a href='index.php'>Kembali </a>";
 }
 ?>