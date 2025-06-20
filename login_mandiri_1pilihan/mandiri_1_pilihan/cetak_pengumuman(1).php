<?php
include "session.php";
?>

<?php
include "../config/koneksi.php";
include("bar128.php");
include("library.php");
include("fucnt_tgl.php");


$query = mysqli_query($kon, "select * from tb_formulir5 where username='$_SESSION[username]' ");
$a = mysqli_fetch_array($query);
$tanggal = tgl_indo($a['tanggal_lahir']);
date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
// echo date('h:i:s a'); // menampilkan jam sekarang
// echo date('l, d-m-Y  H:i:s'); //kombinasi jam dan tanggal
if ($a['status_lulus'] == "Lulus") {
?>
  <?php ?>
  <html>

  <body>

    <table width="100%" border="0" align="center">
      <tr>
        <td><img src="../assets/img_app/logobaru.png" width="100%" /></td>

      </tr>
    </table>

    <table align="center">
      <!--<tr>-->
      <!--    <td rowspan=18 width=164 valign="top"><a href="../assets/img/<?php echo $a['nama_foto']; ?>" class="fancy">-->
      <!--    <img src="../assets/img/<?php echo $a['nama_foto']; ?>" alt="" width=150 height=175 border="0" /></td>-->
      <!--</tr>-->

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
          <h3>&emsp;&emsp;Selamat anda dinyatakan:</h3>
        </td>
      </tr>
      <tr>
        <td>
          <h1>LULUS PMDP TAHAP II</h1>
        </td>
      </tr>
    </table>
    <div style="break-after:page"></div>

    <table width="100%" border="0" align="center">


      <h2 style="text-align:center;">PENGUMUMAN</h2>
      <h3 style="text-align:center;">PELAKSANAAN UJI KESEHATAN (UKES) DAN WAWANCARA</h3>
      <h3 style="text-align:center;">SELEKSI PENERIMAAN MAHASISWA BARU (SPMB) MANDIRI</h3>
      <h3 style="text-align:center;">POLTEKKES KEMENKES BENGKULU TAHUN AKADEMIK 2025/2026</h3>

      <p>Peserta yang dinyatakan LULUS pada Hasil Seleksi CBT SPMB Mandiri Poltekkes Kemenkes Bengkulu yang diumumkan pada tanggal 20 Juni 2025 melalui link
        <a href="https://link.poltekkesbengkulu.ac.id/spmb/">https://link.poltekkesbengkulu.ac.id/spmb/</a> diwajibkan mengikuti tahapan sebagai berikut:
      </p>

      <ul>
        <li>
          Uji Kesehatan dan Wawancara (Wajib didampingi Orang Tua Kecuali Mahasiswa RPL) dilaksanakan pada tanggal 23-25 Juni 2025 di Klinik Hygea Poltekkes Kemenkes Bengkulu Jl. Indragiri No. 03 Padang Harapan Bengkulu (kehadiran peserta sesuai Jadwal yang telah ditentukan).
        </li>

        <li>
          Membawa kelengkapan sebagai berikut :
          <ul>
            <li>Bukti Kelulusan Seleksi CBT SPMB Mandiri</li>
            <li>
              Biaya uji kesehatan sebesar Rp. 150.000,- (Seratus Lima Puluh Ribu Rupiah) dapat disetor ke Teller atau ditransfer melalui Bank Syariah Indonesia (BSI) dengan No Rekening 7632153001 atas nama RPL 016 BLU POLTEKKES UNTUK OPS .
            </li>
            <li>
              Bagi peserta yang akan melakukan pembayaran biaya uji kesehatan secara tunai, dapat difasilitasi oleh Teller Bank Syariah Indonesi (BSI) pada lokasi Uji Kesehatan (Klinik Hygea Poltekkes Kemenkes Bengkulu).
            </li>
            <li>Membawa pas foto ukuran 3x4 (1 Lembar)</li>
          </ul>
        </li>

        <li>
          Peserta yang mengikuti Uji Kesehatan diwajibkan mengenakan pakaian sopan dan rapi (baju atasan kemeja kancing depan dan bawahan rok atau celana bahan) dan menggunakan sepatu tertutup.
        </li>

        <li>
          Apabila sampai dengan tanggal 25 Juni 2025 calon mahasiswa tidak mengikuti Uji Kesehatan dan Wawancara maka peserta dinyatakan GUGUR.
        </li>
      </ul>

      <h3 style="text-align:center;">JADWAL PELAKSANAAN UJI KESEHATAN DAN WAWANCARA SELEKSI PENERIMAAN MAHASISWA BARU (SPMB) MANDIRI</h3>
      <h3 style="text-align:center;">POLITEKNIK KESEHATAN KEMENTERIAN KESEHATAN BENGKULU</h3>
      <h3 style="text-align:center;">TAHUN AKADEMIK 2025/2026</h3>

      <table border="1" cellpadding="8" cellspacing="0" style="width:100%; border-collapse:collapse;">
        <thead>
          <tr>
            <th>NO</th>
            <th>HARI/TANGGAL</th>
            <th>PROGRAM STUDI</th>
            <th>WAKTU DAN LOKASI</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td rowspan="6">1</td>
            <td rowspan="6">SENIN/23 JUNI 2025</td>
            <td>Program Studi Keperawatan Bengkulu Program Diploma Tiga</td>
            <td>
              <strong>UJI KESEHATAN</strong><br>
              08.00 - 12.00 WIB<br>
              KLINIK HYGEA<br><br>
              <strong>WAWANCARA</strong><br>
              13.00 – 15.00 WIB<br>
              JURUSAN MASING-MASING
            </td>
          </tr>
          <tr>
            <td>Program Studi Keperawatan Curup Program Diploma Tiga</td>
            <td></td>
          </tr>
          <tr>
            <td>Program Studi Keperawatan dan Pendidikan Profesi Ners Program Sarjana Terapan (Kelas Reguler)</td>
            <td></td>
          </tr>
          <tr>
            <td>Program Studi Keperawatan dan Pendidikan Profesi Ners Program Sarjana Terapan (Kelas Internasional)</td>
            <td></td>
          </tr>
          <tr>
            <td>Program Studi Gizi dan Dietetika Sarjana Terapan</td>
            <td></td>
          </tr>
          <tr>
            <td>Program Studi Gizi Program Diploma Tiga</td>
            <td></td>
          </tr>

          <tr>
            <td rowspan="10">2</td>
            <td rowspan="10">SELASA/24 JUNI 2025</td>
            <td>Program Studi Kebidanan dan Pendidikan Profesi Bidan Program Sarjana Terapan</td>
            <td>
              <strong>UJI KESEHATAN</strong><br>
              08.00 - 12.00 WIB<br>
              KLINIK HYGEA<br><br>
              <strong>WAWANCARA</strong><br>
              13.00 – 15.00 WIB<br>
              JURUSAN MASING-MASING
            </td>
          </tr>
          <tr>
            <td>Program Studi Kebidanan Bengkulu Program Diploma Tiga</td>
            <td></td>
          </tr>
          <tr>
            <td>Program Studi Kebidanan Curup Program Diploma Tiga</td>
            <td></td>
          </tr>
          <tr>
            <td>Program Studi Teknologi Laboratorium Medis Program Diploma Tiga</td>
            <td></td>
          </tr>
          <tr>
            <td>Program Studi Farmasi Program Diploma Tiga</td>
            <td></td>
          </tr>
          <tr>
            <td>Program Studi Sanitasi Program Diploma Tiga</td>
            <td></td>
          </tr>
          <tr>
            <td>Program Studi Promosi Kesehatan Program Sarjana Terapan</td>
            <td></td>
          </tr>
          <tr>
            <td>Program Studi Keperawatan dan Pendidikan Profesi Ners Program Sarjana Terapan (RPL)</td>
            <td></td>
          </tr>
          <tr>
            <td>Program Studi Profesi Ners Program Profesi (Ganjil)</td>
            <td></td>
          </tr>
          <tr>
            <td>Program Studi Profesi Ners Program Profesi (Genap)</td>
            <td></td>
          </tr>

          <tr>
            <td rowspan="6">3</td>
            <td rowspan="6">RABU/25 JUNI 2025</td>
            <td>RPL Gizi dan Dietetika Sarjana Terapan</td>
            <td>
              <strong>UJI KESEHATAN</strong><br>
              08.00 - 12.00 WIB<br>
              KLINIK HYGEA<br><br>
              <strong>WAWANCARA</strong><br>
              13.00 – 15.00 WIB<br>
              JURUSAN MASING-MASING
            </td>
          </tr>
          <tr>
            <td>Program Studi Kebidanan Program Sarjana Terapan (RPL) Bengkulu</td>
            <td></td>
          </tr>
          <tr>
            <td>Program Studi Profesi Bidan Program Bidan Kelas Bengkulu</td>
            <td></td>
          </tr>
          <tr>
            <td>Program Studi Profesi Bidan Program Bidan Kelas Bengkulu (GENAP Khusus Kelas Pegawai)</td>
            <td></td>
          </tr>
          <tr>
            <td>RPL Sarjana Terapan Kebidanan (Khusus TPMB)</td>
            <td></td>
          </tr>
          <tr>
            <td>RPL Profesi Bidan (Khusus TPMB)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
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

<?php } elseif ($a['status_pmdp'] == "TIDAK LULUS") {
  header("location:pmdp/index.php");
} ?>