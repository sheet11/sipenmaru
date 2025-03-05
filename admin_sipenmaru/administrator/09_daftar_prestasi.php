<?php
// Cek koneksi
include "../config/koneksi.php";
if ($kon->connect_error) {
    die("Koneksi gagal: " . $kon->connect_error);
}

// Query untuk mengambil data
$sql = "SELECT * from tb_prestasi WHERE username BETWEEN '25100001' AND '25103500' ORDER BY username";

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

foreach ($data as $username => $prestasi_list) {
    echo "<h3>Username: $username</h3>";
    echo "<ul>";
    foreach ($prestasi_list as $prestasi) {
        echo "<li>";
        echo "{$prestasi['nama_prestasi']} - {$prestasi['keterangan_juara']} ({$prestasi['tingkat_kejuaraan']}), ";
        echo "Prestasi: {$prestasi['tanggal_prestasi']}, Entri: {$prestasi['tanggal_entri_prestasi']}, ";
        echo "Bukti: <a href='https://sipenmaru-polkeslu.cloud/login_spmb_prestasi/pmdp/prestasi/{$prestasi['bukti']}' target='_blank'>Bukti</a>";
        echo "</li>";
    }
    echo "</ul>";
}
