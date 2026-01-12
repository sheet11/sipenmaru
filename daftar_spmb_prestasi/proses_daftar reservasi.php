<?php
// proses_daftar.php
// File untuk memproses data pendaftaran SPMB Jalur Prestasi

// Jangan set header JSON karena perlu handle AJAX dengan redirect
session_start();
try {
    // Koneksi ke database
    require_once('koneksi.php');

    // Validasi input
    $required_fields = array(
        'nama_sekolah',
        'akreditasi',
        'asal_sekolah',
        'program_studi',
        'nama_lengkap',
        'jenis_kelamin',
        'agama',
        'tempat_lahir',
        'tanggal_lahir',
        'berat_badan',
        'tinggi_badan',
        'golongan_darah',
        'nik',
        'nama_orang_tua',
        'pekerjaan_orang_tua',
        'nama_orang_tua_ibu',
        'pekerjaan_orang_tua_ibu',
        'penghasilan_orang_tua',
        'asal',
        'alamat_rumah',
        'daerah_asal',
        'email',
        'no_hp',
    );

    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            throw new Exception("Field $field tidak boleh kosong");
        }
    }

    if (strlen($_POST['nik']) !== 16 || !ctype_digit($_POST['nik'])) {
        throw new Exception('NIK harus 16 digit angka');
    }

    // Proses upload file pas_foto
    $foto_path = '';
    if (isset($_FILES['pas_foto']) && $_FILES['pas_foto']['error'] == 0) {
        $upload_dir = '../login_spmb_prestasi/assets/img/';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true);
        }

        $file_name = basename($_FILES['pas_foto']['name']);
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        $allowed_ext = array('jpg', 'jpeg', 'png');

        if (!in_array(strtolower($file_ext), $allowed_ext)) {
            throw new Exception('Format file tidak diizinkan. Hanya JPG, PNG');
        }

        if ($_FILES['pas_foto']['size'] > 1048576) { // 1 MB
            throw new Exception('Ukuran file tidak boleh lebih dari 1 MB');
        }

        $new_file_name = date('Y-m-d-His') . '-' . $file_name;
        $upload_path = $upload_dir . $new_file_name;

        if (move_uploaded_file($_FILES['pas_foto']['tmp_name'], $upload_path)) {
            $foto_path = $new_file_name;
            // Simpan nama file sementara di session agar bisa dipulihkan jika submit gagal
            if (session_status() !== PHP_SESSION_ACTIVE) session_start();
            $_SESSION['form_uploaded_photo'] = $foto_path;
        } else {
            throw new Exception('Gagal upload file');
        }
    } else {
        throw new Exception('File pas_foto wajib diupload');
    }

    // Sanitasi input
    $keterangan_sekolah = mysqli_real_escape_string($kon, $_POST['keterangan_sekolah']);
    $nama_sekolah = mysqli_real_escape_string($kon, $_POST['nama_sekolah']);
    $akreditasi = mysqli_real_escape_string($kon, $_POST['akreditasi']);
    $asal_sekolah = mysqli_real_escape_string($kon, $_POST['asal_sekolah']);
    $tahun_lulus = mysqli_real_escape_string($kon, $_POST['tahun_lulus']);
    $smk_jenis = isset($_POST['smk_jenis']) ? mysqli_real_escape_string($kon, $_POST['smk_jenis']) : '';
    $jurusan_sekolah = isset($_POST['jurusan_sekolah']) ? mysqli_real_escape_string($kon, $_POST['jurusan_sekolah']) : $jurusan_sekolah;
    $program_studi = isset($_POST['program_studi']) ? mysqli_real_escape_string($kon, $_POST['program_studi']) : '';

    $nama_lengkap = mysqli_real_escape_string($kon, $_POST['nama_lengkap']);
    $jenis_kelamin = mysqli_real_escape_string($kon, $_POST['jenis_kelamin']);
    $agama = mysqli_real_escape_string($kon, $_POST['agama']);
    $tempat_lahir = mysqli_real_escape_string($kon, $_POST['tempat_lahir']);
    $tanggal_lahir = mysqli_real_escape_string($kon, $_POST['tanggal_lahir']);
    $berat_badan = (int)$_POST['berat_badan'];
    $tinggi_badan = (int)$_POST['tinggi_badan'];
    $golongan_darah = mysqli_real_escape_string($kon, $_POST['golongan_darah']);
    $nik = mysqli_real_escape_string($kon, $_POST['nik']);
    $nama_orang_tua = mysqli_real_escape_string($kon, $_POST['nama_orang_tua']);
    $pekerjaan_orang_tua = mysqli_real_escape_string($kon, $_POST['pekerjaan_orang_tua']);
    $nama_orang_tua_ibu = mysqli_real_escape_string($kon, $_POST['nama_orang_tua_ibu']);
    $pekerjaan_orang_tua_ibu = mysqli_real_escape_string($kon, $_POST['pekerjaan_orang_tua_ibu']);
    $penghasilan_orang_tua = mysqli_real_escape_string($kon, $_POST['penghasilan_orang_tua']);
    $kartu_bpjs = mysqli_real_escape_string($kon, $_POST['kartu_bpjs']);

    $asal = mysqli_real_escape_string($kon, $_POST['asal']);
    $alamat_rumah = isset($_POST['alamat_rumah']) ? mysqli_real_escape_string($kon, $_POST['alamat_rumah']) : '';
    $daerah_asal = isset($_POST['daerah_asal']) ? mysqli_real_escape_string($kon, $_POST['daerah_asal']) : '';

    // Gabungkan alamat dari dropdown lokasi
    $alamat = '';
    if ($asal == 'dalam') {
        $kab_bkl = mysqli_real_escape_string($kon, $_POST['kab_bkl']);
        $kec_bkl = mysqli_real_escape_string($kon, $_POST['kec_bkl']);
        $alamat = $kab_bkl . ', ' . $kec_bkl . ' - Bengkulu';
    } else if ($asal == 'luar') {
        $prov_luar = mysqli_real_escape_string($kon, $_POST['prov_luar']);
        $kab_luar = mysqli_real_escape_string($kon, $_POST['kab_luar']);
        $kec_luar = mysqli_real_escape_string($kon, $_POST['kec_luar']);
        $alamat = $kec_luar . ', ' . $kab_luar . ', ' . $prov_luar;
    }

    $email = isset($_POST['email']) ? mysqli_real_escape_string($kon, $_POST['email']) : '';
    $no_hp = isset($_POST['no_hp']) ? mysqli_real_escape_string($kon, $_POST['no_hp']) : '';

    // alamat detail: gunakan 'alamat' jika ada, otherwise gunakan 'alamat_rumah'
    if (isset($_POST['alamat']) && $_POST['alamat'] !== '') {
        $alamat_detail = mysqli_real_escape_string($kon, $_POST['alamat']);
    } else {
        $alamat_detail = $alamat_rumah;
    }

    if (strlen($nik) !== 16 || !ctype_digit($nik)) {
        throw new Exception('NIK harus 16 digit angka');
    }

    // Ambil username & token dari POST
    $is_new = !empty($_POST['username']);
    $username = isset($_POST['username']) ? mysqli_real_escape_string($kon, $_POST['username']) : null;
    $reservation_token = isset($_POST['reservation_token']) ? $_POST['reservation_token'] : null;
    $posted_id = isset($_POST['id']) ? (int)$_POST['id'] : null;

    if ($is_new) {
        // Jika ada reservation_token, gunakan alur token-safe (recommended)
        if ($reservation_token) {
            mysqli_begin_transaction($kon, MYSQLI_TRANS_START_READ_WRITE);
            try {
                // Ambil reservasi dan kunci baris reservasi
                $res_stmt = mysqli_prepare($kon, "SELECT id, id_formulir, status, expires_at FROM tb_form_reservation WHERE reservation_token = ? FOR UPDATE");
                mysqli_stmt_bind_param($res_stmt, "s", $reservation_token);
                mysqli_stmt_execute($res_stmt);
                $res_result = mysqli_stmt_get_result($res_stmt);
                if (!$res_result || mysqli_num_rows($res_result) == 0) {
                    throw new Exception('Reservasi token tidak ditemukan atau tidak valid');
                }
                $reservation_data = mysqli_fetch_assoc($res_result);
                $now = date('Y-m-d H:i:s');
                if ($reservation_data['status'] !== 'active') {
                    throw new Exception('Reservasi tidak aktif');
                }
                if ($reservation_data['expires_at'] < $now) {
                    // tandai expired
                    $upd = mysqli_prepare($kon, "UPDATE tb_form_reservation SET status='expired' WHERE id = ?");
                    if ($upd) { mysqli_stmt_bind_param($upd, "i", $reservation_data['id']); mysqli_stmt_execute($upd); }
                    throw new Exception('Reservasi telah kadaluarsa. Silakan refresh halaman untuk mendapatkan username baru.');
                }

                $id_formulir = (int)$reservation_data['id_formulir'];

                // Lock formulir terkait
                $form_stmt = mysqli_prepare($kon, "SELECT id_formulir, status, username FROM tb_formulir3 WHERE id_formulir = ? FOR UPDATE");
                mysqli_stmt_bind_param($form_stmt, "i", $id_formulir);
                mysqli_stmt_execute($form_stmt);
                $form_result = mysqli_stmt_get_result($form_stmt);
                if (!$form_result || mysqli_num_rows($form_result) == 0) {
                    throw new Exception('Formulir tidak ditemukan');
                }
                $form = mysqli_fetch_assoc($form_result);
                if ($form['status'] !== 'Belum Lengkap') {
                    throw new Exception('Formulir sudah dipakai');
                }

                // Siapkan update berdasarkan id_formulir
                $update_sql = "UPDATE tb_formulir3 SET
                    nama_lengkap = ?,
                    pilihan_prodi = ?,
                    alamat = ?,
                    jenis_kelamin = ?,
                    agama = ?,
                    no_hp = ?,
                    keterangan_sekolah = ?,
                    tahun_lulus = ?,
                    tempat_lahir = ?,
                    tanggal_lahir = ?,
                    berat_badan = ?,
                    tinggi_badan = ?,
                    golongan_darah = ?,
                    nik = ?,
                    nama_orang_tua = ?,
                    nama_orang_tua_ibu = ?,
                    pekerjaan_orang_tua = ?,
                    penghasilan_orang_tua = ?,
                    pekerjaan_orang_tua_ibu = ?,
                    kartu_bpjs = ?,
                    nama_sekolah = ?,
                    akreditasi = ?,
                    asal_sekolah = ?,
                    jurusan_sekolah = ?,
                    smk_jenis = ?,
                    daerah_asal = ?,
                    nama_foto = ?,
                    email = ?,
                    tanggal_daftar = NOW(),
                    status = 'Terdaftar'
                    WHERE id_formulir = ? AND status = 'Belum Lengkap'";

                $stmt2 = mysqli_prepare($kon, $update_sql);
                if (!$stmt2) {
                    throw new Exception('Gagal menyiapkan query update: ' . mysqli_error($kon));
                }

                $types = 'ssssssssssii' . str_repeat('s', 16) . 'i';

                mysqli_stmt_bind_param($stmt2, $types,
                    $nama_lengkap,
                    $program_studi,
                    $alamat_detail,
                    $jenis_kelamin,
                    $agama,
                    $no_hp,
                    $keterangan_sekolah,
                    $tahun_lulus,
                    $tempat_lahir,
                    $tanggal_lahir,
                    $berat_badan,
                    $tinggi_badan,
                    $golongan_darah,
                    $nik,
                    $nama_orang_tua,
                    $nama_orang_tua_ibu,
                    $pekerjaan_orang_tua,
                    $penghasilan_orang_tua,
                    $pekerjaan_orang_tua_ibu,
                    $kartu_bpjs,
                    $nama_sekolah,
                    $akreditasi,
                    $asal_sekolah,
                    $jurusan_sekolah,
                    $smk_jenis,
                    $daerah_asal,
                    $foto_path,
                    $email,
                    $id_formulir
                );

                if (!mysqli_stmt_execute($stmt2) || mysqli_stmt_affected_rows($stmt2) == 0) {
                    mysqli_rollback($kon);
                    throw new Exception('Gagal menyimpan data: kemungkinan data sudah diupdate oleh proses lain. Silakan refresh dan coba lagi.');
                }

                // tandai reservasi 'used'
                $mark_stmt = mysqli_prepare($kon, "UPDATE tb_form_reservation SET status='used' WHERE id = ?");
                if ($mark_stmt) { mysqli_stmt_bind_param($mark_stmt, "i", $reservation_data['id']); mysqli_stmt_execute($mark_stmt); }

                mysqli_commit($kon);
                echo 'sukses.php?id=' . $form['username'];
                exit();

            } catch (Exception $e) {
                mysqli_rollback($kon);
                throw $e;
            }
        } else {
            // Fallback: tidak ada token — lakukan update aman berdasarkan username
            mysqli_begin_transaction($kon, MYSQLI_TRANS_START_READ_WRITE);
            try {
                $stmt = mysqli_prepare($kon, "SELECT id_formulir, status FROM tb_formulir3 WHERE username = ? FOR UPDATE");
                mysqli_stmt_bind_param($stmt, "s", $username);
                mysqli_stmt_execute($stmt);
                $cek_result = mysqli_stmt_get_result($stmt);

                if (!$cek_result || mysqli_num_rows($cek_result) == 0) {
                    throw new Exception('Username tidak ditemukan di database');
                }

                $user_data = mysqli_fetch_assoc($cek_result);
                if ($user_data['status'] !== 'Belum Lengkap') {
                    mysqli_rollback($kon);
                    throw new Exception('ID sudah terpakai. Silakan refresh dahulu.');
                }

                $update_sql = "UPDATE tb_formulir3 SET
                    nama_lengkap = ?,
                    pilihan_prodi = ?,
                    alamat = ?,
                    jenis_kelamin = ?,
                    agama = ?,
                    no_hp = ?,
                    keterangan_sekolah = ?,
                    tahun_lulus = ?,
                    tempat_lahir = ?,
                    tanggal_lahir = ?,
                    berat_badan = ?,
                    tinggi_badan = ?,
                    golongan_darah = ?,
                    nik = ?,
                    nama_orang_tua = ?,
                    nama_orang_tua_ibu = ?,
                    pekerjaan_orang_tua = ?,
                    penghasilan_orang_tua = ?,
                    pekerjaan_orang_tua_ibu = ?,
                    kartu_bpjs = ?,
                    nama_sekolah = ?,
                    akreditasi = ?,
                    asal_sekolah = ?,
                    jurusan_sekolah = ?,
                    smk_jenis = ?,
                    daerah_asal = ?,
                    nama_foto = ?,
                    email = ?,
                    tanggal_daftar = NOW(),
                    status = 'Terdaftar'
                    WHERE username = ? AND status = 'Belum Lengkap'";

                $stmt2 = mysqli_prepare($kon, $update_sql);
                if (!$stmt2) {
                    throw new Exception('Gagal menyiapkan query update: ' . mysqli_error($kon));
                }

                $types = 'ssssssssssii' . str_repeat('s', 16) . 's';

                mysqli_stmt_bind_param($stmt2, $types,
                    $nama_lengkap,
                    $program_studi,
                    $alamat_detail,
                    $jenis_kelamin,
                    $agama,
                    $no_hp,
                    $keterangan_sekolah,
                    $tahun_lulus,
                    $tempat_lahir,
                    $tanggal_lahir,
                    $berat_badan,
                    $tinggi_badan,
                    $golongan_darah,
                    $nik,
                    $nama_orang_tua,
                    $nama_orang_tua_ibu,
                    $pekerjaan_orang_tua,
                    $penghasilan_orang_tua,
                    $pekerjaan_orang_tua_ibu,
                    $kartu_bpjs,
                    $nama_sekolah,
                    $akreditasi,
                    $asal_sekolah,
                    $jurusan_sekolah,
                    $smk_jenis,
                    $daerah_asal,
                    $foto_path,
                    $email,
                    $username
                );

                if (!mysqli_stmt_execute($stmt2) || mysqli_stmt_affected_rows($stmt2) == 0) {
                    mysqli_rollback($kon);
                    throw new Exception('Gagal menyimpan data: kemungkinan username sudah diambil atau data tidak valid. Silakan refresh dan coba lagi.');
                }

                mysqli_commit($kon);
                echo 'sukses.php?id=' . $username;
                exit();
            } catch (Exception $e) {
                mysqli_rollback($kon);
                throw $e;
            }
        }
    }
} catch (Exception $e) {
    http_response_code(400);
    // Return error message sebagai plain text untuk AJAX
    echo 'ERROR: ' . $e->getMessage();
    exit();
}
