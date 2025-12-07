<?php
session_start();
require_once('koneksi.php');

// Ambil username yang sudah terambil
$taken_username = isset($_GET['taken']) ? $_GET['taken'] : '';

// Cek apakah ada form data di session
if (empty($_SESSION['form_data'])) {
    header('Location: index.php');
    exit();
}

// Ambil data form dari session
$form_data = $_SESSION['form_data'];
$foto_path = $_SESSION['foto_path'];

// Query untuk mendapatkan username lain dengan status belum lengkap
$query = "SELECT username, nama_lengkap FROM tb_formulir3 
          WHERE (nama_foto IS NULL OR nama_foto = '') 
          AND (nama_lengkap IS NULL OR nama_lengkap = '')
          AND (tempat_lahir IS NULL OR tempat_lahir = '')
          AND (nik IS NULL OR nik = '')
          ORDER BY username ASC";

$result = mysqli_query($kon, $query);
$available_usernames = array();

if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        $available_usernames[] = $row;
    }
}

// Jika form di-submit untuk memilih username baru
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['new_username'])) {
    $new_username = mysqli_real_escape_string($kon, $_POST['new_username']);

    // Validasi username dipilih dari list
    $valid_username = false;
    foreach ($available_usernames as $u) {
        if ($u['username'] == $new_username) {
            $valid_username = true;
            break;
        }
    }

    if (!$valid_username) {
        $error = 'Username tidak valid atau sudah tidak tersedia';
    } else {
        // Update dengan username baru
        $nama_sekolah = mysqli_real_escape_string($kon, $form_data['nama_sekolah']);
        $akreditasi = mysqli_real_escape_string($kon, $form_data['akreditasi']);
        $asal_sekolah = mysqli_real_escape_string($kon, $form_data['asal_sekolah']);
        $program_studi = mysqli_real_escape_string($kon, $form_data['program_studi']);

        $nama_lengkap = mysqli_real_escape_string($kon, $form_data['nama_lengkap']);
        $jenis_kelamin = mysqli_real_escape_string($kon, $form_data['jenis_kelamin']);
        $agama = mysqli_real_escape_string($kon, $form_data['agama']);
        $tempat_lahir = mysqli_real_escape_string($kon, $form_data['tempat_lahir']);
        $tanggal_lahir = mysqli_real_escape_string($kon, $form_data['tanggal_lahir']);
        $berat_badan = (int)$form_data['berat_badan'];
        $tinggi_badan = (int)$form_data['tinggi_badan'];
        $golongan_darah = mysqli_real_escape_string($kon, $form_data['golongan_darah']);
        $nik = mysqli_real_escape_string($kon, $form_data['nik']);
        $nama_orang_tua = mysqli_real_escape_string($kon, $form_data['nama_orang_tua']);
        $pekerjaan_orang_tua = mysqli_real_escape_string($kon, $form_data['pekerjaan_orang_tua']);
        $penghasilan_orang_tua = mysqli_real_escape_string($kon, $form_data['penghasilan_orang_tua']);
        $kartu_bpjs = mysqli_real_escape_string($kon, $form_data['kartu_bpjs']);

        $asal = mysqli_real_escape_string($kon, $form_data['asal']);
        $alamat_rumah = mysqli_real_escape_string($kon, $form_data['alamat_rumah']);
        $daerah_asal = mysqli_real_escape_string($kon, $form_data['daerah_asal']);

        // Gabungkan alamat dari dropdown lokasi
        $alamat = '';
        if ($asal == 'dalam') {
            $kab_bkl = mysqli_real_escape_string($kon, $form_data['kab_bkl']);
            $kec_bkl = mysqli_real_escape_string($kon, $form_data['kec_bkl']);
            $alamat = $kab_bkl . ', ' . $kec_bkl . ' - Bengkulu';
        } else if ($asal == 'luar') {
            $prov_luar = mysqli_real_escape_string($kon, $form_data['prov_luar']);
            $kab_luar = mysqli_real_escape_string($kon, $form_data['kab_luar']);
            $kec_luar = mysqli_real_escape_string($kon, $form_data['kec_luar']);
            $alamat = $kec_luar . ', ' . $kab_luar . ', ' . $prov_luar;
        }

        $email = mysqli_real_escape_string($kon, $form_data['email']);
        $no_hp = mysqli_real_escape_string($kon, $form_data['no_hp']);
        $alamat_detail = mysqli_real_escape_string($kon, $form_data['alamat']);
        $tentang_kamu = mysqli_real_escape_string($kon, $form_data['tentang_kamu']);

        // Update data ke database tb_formulir3
        $update_query = "UPDATE tb_formulir3 SET
            nama_lengkap = '$nama_lengkap',
            program_studi = '$program_studi',
            alamat = '$alamat_detail',
            jenis_kelamin = '$jenis_kelamin',
            agama = '$agama',
            no_hp = '$no_hp',
            tempat_lahir = '$tempat_lahir',
            tanggal_lahir = '$tanggal_lahir',
            berat_badan = $berat_badan,
            tinggi_badan = $tinggi_badan,
            golongan_darah = '$golongan_darah',
            nik = '$nik',
            nama_orang_tua = '$nama_orang_tua',
            pekerjaan_orang_tua = '$pekerjaan_orang_tua',
            penghasilan_orang_tua = '$penghasilan_orang_tua',
            kartu_bpjs = '$kartu_bpjs',
            nama_sekolah = '$nama_sekolah',
            akreditasi = '$akreditasi',
            asal_sekolah = '$asal_sekolah',
            daerah_asal = '$daerah_asal',
            nama_foto = '$foto_path',
            email = '$email',
            tentang_kamu = '$tentang_kamu',
            updated_at = NOW()
            WHERE username = '$new_username'";

        if (mysqli_query($kon, $update_query)) {
            // Bersihkan session
            unset($_SESSION['form_data']);
            unset($_SESSION['foto_path']);
            unset($_SESSION['username_taken']);

            // Redirect ke sukses.php
            header('Location: sukses.php?id=' . $new_username);
            exit();
        } else {
            $error = 'Gagal menyimpan data: ' . mysqli_error($kon);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pilih Username - SPMB Jalur Prestasi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f5f5;
            padding-top: 20px;
        }

        .container {
            max-width: 600px;
            background-color: white;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .alert {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .username-list {
            max-height: 300px;
            overflow-y: auto;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        .username-option {
            padding: 10px;
            border-bottom: 1px solid #eee;
            cursor: pointer;
        }

        .username-option:hover {
            background-color: #f9f9f9;
        }

        .username-option input[type="radio"] {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2><i class="glyphicon glyphicon-user"></i> Pilih Username Lain</h2>

        <?php if ($taken_username): ?>
            <div class="alert alert-warning">
                <strong>Username <code><?php echo htmlspecialchars($taken_username); ?></code> sudah memiliki data lengkap.</strong>
                <br>Silakan pilih username lain dari daftar di bawah untuk melanjutkan pendaftaran.
            </div>
        <?php endif; ?>

        <?php if (isset($error)): ?>
            <div class="alert alert-danger">
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>

        <?php if (empty($available_usernames)): ?>
            <div class="alert alert-info">
                <strong>Tidak ada username tersedia.</strong>
                <br>Semua username sudah memiliki data lengkap. Silakan hubungi admin untuk membuat akun baru.
            </div>
            <a href="index.php" class="btn btn-default">Kembali</a>
        <?php else: ?>
            <form method="post" class="form">
                <div class="form-group">
                    <label><strong>Pilih Username:</strong></label>
                    <div class="username-list">
                        <?php foreach ($available_usernames as $u): ?>
                            <div class="username-option">
                                <label style="margin-bottom: 0;">
                                    <input type="radio" name="new_username" value="<?php echo htmlspecialchars($u['username']); ?>" required>
                                    <strong><?php echo htmlspecialchars($u['username']); ?></strong>
                                    <?php if (!empty($u['nama_lengkap'])): ?>
                                        - <?php echo htmlspecialchars($u['nama_lengkap']); ?>
                                    <?php endif; ?>
                                </label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                        <i class="glyphicon glyphicon-ok"></i> Lanjutkan dengan Username Ini
                    </button>
                    <a href="index.php" class="btn btn-default btn-block" style="margin-top: 5px;">
                        <i class="glyphicon glyphicon-remove"></i> Kembali
                    </a>
                </div>
            </form>

            <div class="alert alert-info" style="margin-top: 20px;">
                <small><strong>Catatan:</strong> Data formulir Anda akan disimpan dengan username yang dipilih. Semua field yang sudah Anda isi tidak akan hilang.</small>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>