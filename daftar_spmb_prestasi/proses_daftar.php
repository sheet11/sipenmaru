<?php
// proses_daftar.php
// File untuk memproses data pendaftaran SPMB Jalur Prestasi

// Jangan set header JSON karena perlu handle AJAX dengan redirect
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
        'penghasilan_orang_tua',
        'kartu_bpjs',
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


    // Ambil username dari POST (jika ada). Jika tidak ada, akan dibuat record baru (insert)
    $is_new = $_POST['username'];
    $username = mysqli_real_escape_string($kon, $_POST['username']);

    if ($is_new) {
        // Cek apakah username ada di database
        $cek_query = "SELECT * FROM tb_formulir3 WHERE username = '$username'";
        $cek_result = mysqli_query($kon, $cek_query);

        if (mysqli_num_rows($cek_result) == 0) {
            throw new Exception('Username tidak ditemukan di database');
        }

        $user_data = mysqli_fetch_array($cek_result);

        // Jika data sudah lengkap, alihkan ke pilih username
        if (!empty($user_data['nama_foto']) && !empty($user_data['nama_lengkap']) && !empty($user_data['tempat_lahir']) && !empty($user_data['nik'])) {
            session_start();
            $_SESSION['form_data'] = $_POST;
            $_SESSION['foto_path'] = $foto_path;
            $_SESSION['username_taken'] = $username;
            header('Location: pilih_username.php?taken=' . $username);
            exit();
        }

        // Update data
        $query = "UPDATE tb_formulir3 SET
            nama_lengkap = '$nama_lengkap',
            pilihan_prodi = '$program_studi',
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
            jurusan_sekolah = '$jurusan_sekolah',
            smk_jenis = '$smk_jenis',
            daerah_asal = '$daerah_asal',
            nama_foto = '$foto_path',
            email = '$email',
            tanggal_daftar = NOW(),
            status = 'Terdaftar'
            WHERE username = '$username'";

        if (mysqli_query($kon, $query)) {
            echo 'sukses.php?id=' . $username;
            exit();
        } else {
            throw new Exception('Gagal menyimpan data: ' . mysqli_error($kon));
        }
    }
} catch (Exception $e) {
    http_response_code(400);
    // Return error message sebagai plain text untuk AJAX
    echo 'ERROR: ' . $e->getMessage();
    exit();
}
