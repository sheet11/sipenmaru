<?php
// Cek koneksi
include "../config/koneksi.php";
if ($kon->connect_error) {
    die("Koneksi gagal: " . $kon->connect_error);
}

// Query untuk mengambil data
$sql = "SELECT 
    f.username,
    f.nama_lengkap,
    f.pilihan_prodi,
    p.nama,
    p.ket,
    p.tingkat,
    p.tgl,
    p.bukti_n
    p.entri+
FROM tb_formulir3 f
JOIN tb_prestasi p ON f.username = p.username
WHERE f.username BETWEEN '25100001' AND '25103500'
ORDER BY f.username;";
//$sql = "SELECT * from tb_prestasi WHERE username BETWEEN '25100001' AND '25103500' ORDER BY username";

$result = $kon->query($sql);

// Simpan hasil ke dalam array
$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $username = $row['username'];

        // Konversi tingkat kejuaraan ke dalam bentuk teks
        switch ($row['tingkat']) {
            case '1': $row['tingkat'] = "Internasional"; break;
            case '2': $row['tingkat'] = "Nasional"; break;
            case '3': $row['tingkat'] = "Regional"; break;
            case '4': $row['tingkat'] = "Provinsi"; break;
            case '5': $row['tingkat'] = "Kabupaten"; break;
            case '6': $row['tingkat'] = "Sekolah"; break;
            case 'Tingkat Pr': $row['tingkat'] = "Tidak ada tingkat"; break;
            default: $row['tingkat'] = "Tidak ada"; break;
        }

        // Jika username belum ada di array, buatkan tempatnya
        if (!isset($data[$username])) {
            $data[$username] = [];
        }

        // Tambahkan prestasi ke dalam array username terkait
        $data[$username][] = [
            'nama_prestasi' => $row['nama'],
            'keterangan_juara' => $row['ket'],
            'tingkat_kejuaraan' => $row['tingkat'],
            'tanggal_prestasi' => $row['tgl'],
            'tanggal_entri_prestasi' => $row['entri'],
            'bukti' => $row['bukti_n']
        ];
    }
} else {
    echo "Tidak ada data.";
}

$kon->close();

echo "<table border='1'>
    <tr>
        <th>Username</th>
        <th>Nama Prestasi</th>
        <th>Keterangan Juara</th>
        <th>Tingkat Kejuaraan</th>
        <th>Tanggal Prestasi</th>
        <th>Tanggal Entri Prestasi</th>
        <th>Bukti</th>
    </tr>";

foreach ($data as $username => $prestasi_list) {
    foreach ($prestasi_list as $prestasi) {
    echo "<tr>";
    echo "<td>$username</td>";
    echo "<td>{$prestasi['nama_prestasi']}</td>";
    echo "<td>{$prestasi['keterangan_juara']}</td>";
    echo "<td>{$prestasi['tingkat_kejuaraan']}</td>";
    echo "<td>{$prestasi['tanggal_prestasi']}</td>";
    echo "<td>{$prestasi['tanggal_entri_prestasi']}</td>";
    echo "<td><a href='https://sipenmaru-polkeslu.cloud/login_spmb_prestasi/pmdp/prestasi/{$prestasi['bukti']}' target='_blank'></a><img src='https://sipenmaru-polkeslu.cloud/login_spmb_prestasi/pmdp/prestasi/{$prestasi['bukti']}' alt='Bukti' width='100'></td>";
    echo "</tr>";
    }
}

echo "</table>";
