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

if ($a['status_lulus_2'] == "Lulus") {
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
          <h3 align="center">Selamat anda dinyatakan:</h3>
        </td>
      </tr>
      <tr>
        <td>
          <h1>LULUS TAHAP II</h1>
        </td>
      </tr>
    </table>

<p>Peserta yang dinyatakan <strong>LULUS</strong> Seleksi Penerimaan Mahasiswa Baru (SPMB) Tahap II Jalur Mandiri diwajibkan untuk melakukan <strong>REGISTRASI</strong>:</p>

<p><strong>PEMBAYARAN</strong> pada tanggal <strong>30 Juni s.d 02 Juli 2025</strong> (boleh dilakukan via transfer)</p>

<p><strong>PENGUMPULAN BERKAS</strong> pada tanggal <strong>30 Juni s.d 02 Juli 2025</strong> dapat diserahkan langsung/dikirimkan via Pos/JNE/JNT/Travel, pukul 08.00–15.00 WIB pada alamat: <br>
Direktorat Lantai I Gedung Al-Zahrawi Jalan Indragiri Nomor 03 Padang Harapan Bengkulu <br>
(untuk konfirmasi pengiriman berkas dapat menghubungi Whatsapp (WA) Admin SPMB Poltekkes Bengkulu/081370216550).</p>

<h2>Persyaratan Administrasi Keuangan</h2>

<ul>
  <li>Pembayaran <strong>Biaya Pendidikan Uang Kuliah Tunggal (UKT)</strong> melalui:
    <ul>
      <li>Bank MUAMALAT No. Rek: 4320666666 a.n. RPL 016 BLU POLTEKKESUNTUK OPS</li>
      <li>Bank Syariah Indonesia (BSI) No. Rek: 7632153001 a.n. RPL 016 BLU POLTEKKES BKL UTK OPS P</li>
    </ul>
    (akses: <a href="https://bit.ly/Ukt_poltekkes">https://bit.ly/Ukt_poltekkes</a>)
  </li>

  <li>Pembayaran <strong>Biaya Seragam dan Alat Kesehatan</strong> melalui:
    <ul>
      <li>BSI Cabang Bengkulu No. Rek: 7282483372 a.n. KPN POLTEKKES KEMENKES BKL</li>
    </ul>
    (akses: <a href="https://bit.ly/biaya_seragam">https://bit.ly/biaya_seragam</a>)
  </li>

  <li>Pembayaran <strong>Sumbangan Sukarela Pembangunan Masjid</strong> melalui:
    <ul>
      <li>Bank Muamalat No. Rek: 4310049394</li>
      <li>BSI No. Rek: 4362324040 a.n. MASJID TARBIYATUSH SHIHHAH</li>
    </ul>
  </li>

  <li>Pembayaran <strong>Iuran Kegiatan Organisasi Mahasiswa</strong>:
    <ul>
      <li>D3: Rp 300.000,-</li>
      <li>Sarjana Terapan Gizi/Promkes: Rp 400.000,-</li>
      <li>S.Tr + Profesi Ners/Bidan: Rp 500.000,-</li>
      <li>RPL S.Tr/Profesi: Rp 100.000,-</li>
    </ul>
    Dibayar 1x ke BTN No. Rek: 00037-01-50-050725-4 a.n. ORMAWA POLTEKKES KEMENKES BENGKULU
  </li>
</ul>

<p class="highlight">UANG YANG TELAH DISETOR TIDAK DAPAT DITARIK/DIKEMBALIKAN.</p>

<h2>Persyaratan Administrasi</h2>

<ul>
  <li>Bukti Kelulusan Tahap II SPMB Jalur Mandiri (1 lembar)</li>
  <li>Foto Copy Legalisir Ijazah/Asli Surat Keterangan Lulus (1 lembar)</li>
  <li>Bukti Setor Asli:
    <ul>
      <li>UKT</li>
      <li>Seragam dan Alat Kesehatan</li>
      <li>Pembangunan Masjid</li>
      <li>Iuran Organisasi</li>
    </ul>
  </li>
  <li>Surat Pernyataan Tidak Menuntut Pengembalian Dana (materai 10.000, ditandatangani calon maba & orang tua) <br>
    (akses: <a href="https://bit.ly/surat_tidak_menuntut_pengembalian_dana">link surat pernyataan</a>)
  </li>
  <li>BPJS:
    <ul>
      <li>Wajib bagi non-RPL</li>
      <li>Harus dipindah ke Faskes Klinik Hygea</li>
      <li>Foto copy kartu BPJS, atau jika belum, KTP, KK, buku tabungan</li>
    </ul>
  </li>
</ul>

<p>Semua berkas dimasukkan dalam map kertas bertulang sesuai jurusan:</p>

<table class="tables">
  <thead>
    <tr>
      <th class="ths">NO</th>
      <th class="ths">JURUSAN/PRODI</th>
      <th class="ths">WARNA MAP</th>
    </tr>
  </thead>
  <tbody>
    <tr><td class="tds">1</td><td class="tds">KEPERAWATAN</td><td class="tds">COKLAT</td></tr>
    <tr><td class="tds">2</td><td class="tds">KEBIDANAN</td><td class="tds">BIRU MUDA</td></tr>
    <tr><td class="tds">3</td><td class="tds">GIZI</td><td class="tds">HIJAU TUA</td></tr>
    <tr><td class="tds">4</td><td class="tds">TEKNOLOGI LABORATORIUM MEDIS</td><td class="tds">KUNING</td></tr>
    <tr><td class="tds">5</td><td class="tds">FARMASI</td><td class="tds">HIJAU MUDA</td></tr>
    <tr><td class="tds">6</td><td class="tds">KESEHATAN LINGKUNGAN</td><td class="tds">BIRU TUA</td></tr>
    <tr><td class="tds">7</td><td class="tds">PROMOSI KESEHATAN</td><td class="tds">MERAH MUDA</td></tr>
  </tbody>
</table>

<p class="highlight">BILA SAMPAI TANGGAL 02 JULI 2025 BELUM MELAKSANAKAN REGISTRASI DAN PENGUMPULAN BERKAS, MAKA PESERTA DIANGGAP MENGUNDURKAN DIRI.</p>

  </body>

  </html>
  <script>
    window.print();
  </script>
<?php } elseif($a['status_lulus'] == null || $a['status_lulus'] == "Tidak Lulus"){
    header("Location: ../index.php");
    exit();

}elseif ($a['status_lulus_2'] == null || $a['status_lulus_2'] == "Tidak Lulus") {
  echo "<br><br><br><h1>Maaf Anda Belum Lulus SPMB Mandiri tahap 1</h1><br><a href='../index.php'>Kembali </a>";
} else {
  echo "<br><br><br><h1>Maaf Anda Belum Lulus SPMB Mandiri tahap 1</h1><br><a href='../index.php'>Kembali </a>";
}
?>

<style>
  h1 {
    text-align: center;
  }

  body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      margin: 40px;
    }
    h1, h2 {
      text-align: center;
    }
    .tables {
      border-collapse: collapse;
      width: 100%;
      margin-top: 20px;
    }
    .tables, .ths, .tds {
      border: 1px solid black;
    }
    .ths, .tds {
      padding: 8px;
      text-align: center;
    }
    .bold {
      font-weight: bold;
    }
    .highlight {
      color: red;
      font-weight: bold;
    }
</style>