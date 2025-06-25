<?php
// filepath: c:\xampp\htdocs\sipenmaru\admin_sipenmaru\administrator\download_berkas_prodi.php
include "../config/koneksi.php";
include "session.php";


// Ganti dengan nama prodi yang diinginkan
// Ambil daftar prodi aktif=3 dari tabel tb_prodi
$daftar_prodi = [];
$sql_prodi = mysqli_query($kon, "SELECT nama_prodi FROM tb_prodi WHERE aktif='3'");
while ($row = mysqli_fetch_assoc($sql_prodi)) {
    $daftar_prodi[] = $row['nama_prodi'];
}

// Pilih prodi dari GET, atau default ke prodi pertama jika tidak ada
if (isset($_GET['prodi']) && in_array($_GET['prodi'], $daftar_prodi)) {
    $prodi = $_GET['prodi'];
} else {
    $prodi = isset($daftar_prodi[0]) ? $daftar_prodi[0] : '';
}

// Tampilkan pilihan prodi
echo '<form method="get" style="margin-bottom:10px;">';
echo '<select name="prodi" onchange="this.form.submit()">';
foreach ($daftar_prodi as $p) {
    $selected = ($prodi == $p) ? 'selected' : '';
    echo "<option value=\"".htmlspecialchars($p)."\" $selected>$p</option>";
}
echo '</select>';
echo '</form>';

// Query semua peserta dengan prodi tersebut
$query = mysqli_query($kon, "SELECT id_formulir, username, nama_lengkap, file_1, file_2, file_3, photo1, photo2, photo3 FROM tb_formulir5 WHERE pilihan_prodi='$prodi' and status='Sudah Membayar'");
// Output form only if not downloading
if (!isset($_POST['download_all_file1'])) {
    echo '<form method="post">';
    echo '<button type="submit" name="download_all_file1" class="btn btn-primary">Download Semua File 1 (ZIP)</button>';
    echo '</form>';
}

$folder = "../../login_mandiri_1pilihan/assets/berkas/"; // Move this line above ZIP logic

if (isset($_POST['download_all_file1'])) {
    if (!class_exists('ZipArchive')) {
        die('ZipArchive class is not available. Please enable the zip extension in PHP.');
    }
    $zip = new ZipArchive();
    $zipFile = tempnam(sys_get_temp_dir(), 'file1_') . '.zip';
    if ($zip->open($zipFile, ZipArchive::CREATE) === TRUE) {
        mysqli_data_seek($query, 0); // reset pointer
        $fileAdded = false;
        while ($row = mysqli_fetch_assoc($query)) {
            if (!empty($row['file_1'])) {
                $filePath = $folder . $row['file_1'];
                if (file_exists($filePath)) {
                    $zip->addFile($filePath, basename($row['file_1']));
                    $fileAdded = true;
                }
            }
        }
        $zip->close();
        if ($fileAdded && file_exists($zipFile)) {
            // Clean output buffer to prevent headers already sent
            if (ob_get_length()) ob_end_clean();
            header('Content-Type: application/zip');
            header('Content-Disposition: attachment; filename="semua_file1.zip"');
            header('Content-Length: ' . filesize($zipFile));
            flush();
            readfile($zipFile);
            unlink($zipFile);
            exit;
        } else {
            unlink($zipFile);
            echo "<div style='color:red;'>Tidak ada file yang dapat di-zip.</div>";
        }
    } else {
        echo "<div style='color:red;'>Gagal membuat file ZIP.</div>";
    }
}
if (!isset($_POST['download_all_file2'])) {
    echo '<form method="post" style="margin-top:10px;">';
    echo '<button type="submit" name="download_all_file2" class="btn btn-primary">Download Semua File 2 (ZIP)</button>';
    echo '</form>';
}

if (isset($_POST['download_all_file2'])) {
    if (!class_exists('ZipArchive')) {
        die('ZipArchive class is not available. Please enable the zip extension in PHP.');
    }
    $zip = new ZipArchive();
    $zipFile = tempnam(sys_get_temp_dir(), 'file2_') . '.zip';
    if ($zip->open($zipFile, ZipArchive::CREATE) === TRUE) {
        mysqli_data_seek($query, 0); // reset pointer
        $fileAdded = false;
        while ($row = mysqli_fetch_assoc($query)) {
            if (!empty($row['file_2'])) {
                $filePath = $folder . $row['file_2'];
                if (file_exists($filePath)) {
                    $zip->addFile($filePath, basename($row['file_2']));
                    $fileAdded = true;
                }
            }
        }
        $zip->close();
        if ($fileAdded && file_exists($zipFile)) {
            if (ob_get_length()) ob_end_clean();
            header('Content-Type: application/zip');
            header('Content-Disposition: attachment; filename="semua_file2.zip"');
            header('Content-Length: ' . filesize($zipFile));
            flush();
            readfile($zipFile);
            unlink($zipFile);
            exit;
        } else {
            unlink($zipFile);
            echo "<div style='color:red;'>Tidak ada file yang dapat di-zip.</div>";
        }
    } else {
        echo "<div style='color:red;'>Gagal membuat file ZIP.</div>";
    }
}

if (!isset($_POST['download_all_file3'])) {
    echo '<form method="post" style="margin-top:10px;">';
    echo '<button type="submit" name="download_all_file3" class="btn btn-primary">Download Semua File 3 (ZIP)</button>';
    echo '</form>';
}

if (isset($_POST['download_all_file3'])) {
    if (!class_exists('ZipArchive')) {
        die('ZipArchive class is not available. Please enable the zip extension in PHP.');
    }
    $zip = new ZipArchive();
    $zipFile = tempnam(sys_get_temp_dir(), 'file3_') . '.zip';
    if ($zip->open($zipFile, ZipArchive::CREATE) === TRUE) {
        mysqli_data_seek($query, 0); // reset pointer
        $fileAdded = false;
        while ($row = mysqli_fetch_assoc($query)) {
            if (!empty($row['file_3'])) {
                $filePath = $folder . $row['file_3'];
                if (file_exists($filePath)) {
                    $zip->addFile($filePath, basename($row['file_3']));
                    $fileAdded = true;
                }
            }
        }
        $zip->close();
        if ($fileAdded && file_exists($zipFile)) {
            if (ob_get_length()) ob_end_clean();
            header('Content-Type: application/zip');
            header('Content-Disposition: attachment; filename="semua_file3.zip"');
            header('Content-Length: ' . filesize($zipFile));
            flush();
            readfile($zipFile);
            unlink($zipFile);
            exit;
        } else {
            unlink($zipFile);
            echo "<div style='color:red;'>Tidak ada file yang dapat di-zip.</div>";
        }
    } else {
        echo "<div style='color:red;'>Gagal membuat file ZIP.</div>";
    }
}

if (!isset($_POST['download_all_photo1'])) {
    echo '<form method="post" style="margin-top:10px;">';
    echo '<button type="submit" name="download_all_photo1" class="btn btn-primary">Download Semua Photo 1 (ZIP)</button>';
    echo '</form>';
}

if (isset($_POST['download_all_photo1'])) {
    if (!class_exists('ZipArchive')) {
        die('ZipArchive class is not available. Please enable the zip extension in PHP.');
    }
    $zip = new ZipArchive();
    $zipFile = tempnam(sys_get_temp_dir(), 'photo1_') . '.zip';
    if ($zip->open($zipFile, ZipArchive::CREATE) === TRUE) {
        mysqli_data_seek($query, 0);
        $fileAdded = false;
        while ($row = mysqli_fetch_assoc($query)) {
            if (!empty($row['photo1'])) {
                $filePath = $folder . $row['photo1'];
                if (file_exists($filePath)) {
                    $zip->addFile($filePath, basename($row['photo1']));
                    $fileAdded = true;
                }
            }
        }
        $zip->close();
        if ($fileAdded && file_exists($zipFile)) {
            if (ob_get_length()) ob_end_clean();
            header('Content-Type: application/zip');
            header('Content-Disposition: attachment; filename="semua_photo1.zip"');
            header('Content-Length: ' . filesize($zipFile));
            flush();
            readfile($zipFile);
            unlink($zipFile);
            exit;
        } else {
            unlink($zipFile);
            echo "<div style='color:red;'>Tidak ada file yang dapat di-zip.</div>";
        }
    } else {
        echo "<div style='color:red;'>Gagal membuat file ZIP.</div>";
    }
}

if (!isset($_POST['download_all_photo2'])) {
    echo '<form method="post" style="margin-top:10px;">';
    echo '<button type="submit" name="download_all_photo2" class="btn btn-primary">Download Semua Photo 2 (ZIP)</button>';
    echo '</form>';
}

if (isset($_POST['download_all_photo2'])) {
    if (!class_exists('ZipArchive')) {
        die('ZipArchive class is not available. Please enable the zip extension in PHP.');
    }
    $zip = new ZipArchive();
    $zipFile = tempnam(sys_get_temp_dir(), 'photo2_') . '.zip';
    if ($zip->open($zipFile, ZipArchive::CREATE) === TRUE) {
        mysqli_data_seek($query, 0);
        $fileAdded = false;
        while ($row = mysqli_fetch_assoc($query)) {
            if (!empty($row['photo2'])) {
                $filePath = $folder . $row['photo2'];
                if (file_exists($filePath)) {
                    $zip->addFile($filePath, basename($row['photo2']));
                    $fileAdded = true;
                }
            }
        }
        $zip->close();
        if ($fileAdded && file_exists($zipFile)) {
            if (ob_get_length()) ob_end_clean();
            header('Content-Type: application/zip');
            header('Content-Disposition: attachment; filename="semua_photo2.zip"');
            header('Content-Length: ' . filesize($zipFile));
            flush();
            readfile($zipFile);
            unlink($zipFile);
            exit;
        } else {
            unlink($zipFile);
            echo "<div style='color:red;'>Tidak ada file yang dapat di-zip.</div>";
        }
    } else {
        echo "<div style='color:red;'>Gagal membuat file ZIP.</div>";
    }
}

if (!isset($_POST['download_all_photo3'])) {
    echo '<form method="post" style="margin-top:10px;">';
    echo '<button type="submit" name="download_all_photo3" class="btn btn-primary">Download Semua Photo 3 (ZIP)</button>';
    echo '</form>';
}

if (isset($_POST['download_all_photo3'])) {
    if (!class_exists('ZipArchive')) {
        die('ZipArchive class is not available. Please enable the zip extension in PHP.');
    }
    $zip = new ZipArchive();
    $zipFile = tempnam(sys_get_temp_dir(), 'photo3_') . '.zip';
    if ($zip->open($zipFile, ZipArchive::CREATE) === TRUE) {
        mysqli_data_seek($query, 0);
        $fileAdded = false;
        while ($row = mysqli_fetch_assoc($query)) {
            if (!empty($row['photo3'])) {
                $filePath = $folder . $row['photo3'];
                if (file_exists($filePath)) {
                    $zip->addFile($filePath, basename($row['photo3']));
                    $fileAdded = true;
                }
            }
        }
        $zip->close();
        if ($fileAdded && file_exists($zipFile)) {
            if (ob_get_length()) ob_end_clean();
            header('Content-Type: application/zip');
            header('Content-Disposition: attachment; filename="semua_photo3.zip"');
            header('Content-Length: ' . filesize($zipFile));
            flush();
            readfile($zipFile);
            unlink($zipFile);
            exit;
        } else {
            unlink($zipFile);
            echo "<div style='color:red;'>Tidak ada file yang dapat di-zip.</div>";
        }
    } else {
        echo "<div style='color:red;'>Gagal membuat file ZIP.</div>";
    }
}
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
        <th>No</th>
        <th>Username</th>
        <th>Nama</th>
        <th>File 1</th>
        <th>File 2</th>
        <th>akre</th>
        <th>ijazah</th>    
        <th>transkrip</th>
      </tr>";

$folder = "../../login_mandiri_1pilihan/assets/berkas/";
$no = 1;
while ($data = mysqli_fetch_assoc($query)) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".htmlspecialchars($data['username'])."</td>";
    echo "<td>".htmlspecialchars($data['nama_lengkap'])."</td>";

    // Tombol download file_1
    if (!empty($data['file_1']) && file_exists($folder . $data['file_1'])) {
        echo '<td><a href="'.$folder.$data['file_1'].'" class="btn btn-success" download>Download File 1</a></td>';
    } else {
        echo '<td><span class="btn btn-secondary disabled">Tidak Ada</span></td>';
    }

    // Tombol download file_2
    if (!empty($data['file_2']) && file_exists($folder . $data['file_2'])) {
        echo '<td><a href="'.$folder.$data['file_2'].'" class="btn btn-success" download>Download File 2</a></td>';
    } else {
        echo '<td><span class="btn btn-secondary disabled">Tidak Ada</span></td>';
    }

    // Tombol download file_3
    if (!empty($data['file_3']) && file_exists($folder . $data['file_3'])) {
        echo '<td><a href="'.$folder.$data['file_3'].'" class="btn btn-success" download>Download File 3</a></td>';
    } else {
        echo '<td><span class="btn btn-secondary disabled">Tidak Ada</span></td>';
    }

    // Tombol download photo_1
    if (!empty($data['photo1']) && file_exists($folder . $data['photo1'])) {
        echo '<td><a href="'.$folder.$data['photo1'].'" class="btn btn-info" download>Download Photo 1</a></td>';
    } else {
        echo '<td><span class="btn btn-secondary disabled">Tidak Ada</span></td>';
    }

    // Tombol download photo_2
    if (!empty($data['photo2']) && file_exists($folder . $data['photo2'])) {
        echo '<td><a href="'.$folder.$data['photo2'].'" class="btn btn-info" download>Download Photo 2</a></td>';
    } else {
        echo '<td><span class="btn btn-secondary disabled">Tidak Ada</span></td>';
    }

    // Tombol download photo_3
    if (!empty($data['photo3']) && file_exists($folder . $data['photo3'])) {
        echo '<td><a href="'.$folder.$data['photo3'].'" class="btn btn-info" download>Download Photo 3</a></td>';
    } else {
        echo '<td><span class="btn btn-secondary disabled">Tidak Ada</span></td>';
    }
    
    echo "</tr>";
}
echo "</table>";
?>