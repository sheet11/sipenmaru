<?php
include "01_nav.php";
error_reporting(0);
include "../config/koneksi.php";
?>

<div id="page-wrapper">
    <div id="page-inner">
        <h2>Selamat Datang</h2>
        <h5>Di Halaman Sistem Informasi Pendaftaran Mahasiswa Baru Online</h5>
        <div>
            <hr>

            <form method="post" enctype="multipart/form-data" action="04_proses_input_prestasi.php" id="formPrestasi">

                <!-- JENIS PRESTASI -->
                <div class="form-group col-md-6">
                    <label>Jenis Prestasi <span class="text-danger">*</span></label>
                    <select class="form-control" id="prestasi" name="prestasi" onchange="ubahForm()" required>
                        <option value="">-- Pilih --</option>
                        <option value="Prestasi Non Akademik">Prestasi Non Akademik</option>
                        <option value="Prestasi Akademik">Prestasi Akademik</option>
                        <option value="Prestasi Akademik (Juara Kelas)">Prestasi Akademik (Juara Kelas)</option>
                        <option value="Paskibraka">Paskibraka</option>
                        <option value="Tahfiz">Tahfiz</option>
                        <option value="Kemampuan Berbahasa Asing">Kemampuan Berbahasa Asing</option>
                    </select>
                </div>

                <!-- KETERANGAN (default untuk juara) -->
                <div class="form-group col-md-6" id="containerKeterangan">
                    <label>Keterangan <span class="text-danger">*</span></label>
                    <select class="form-control" name="ket" id="ketDefault" required>
                        <option value="">Pilih Juara</option>
                        <option value="Juara 1">Juara 1</option>
                        <option value="Juara 2">Juara 2</option>
                        <option value="Juara 3">Juara 3</option>
                    </select>
                </div>

                <!-- NAMA PRESTASI (hanya Akademik & Non Akademik) -->
                <div class="form-group col-md-6" id="namaPrestasiContainer" style="display:none;">
                    <label>Nama Prestasi <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="nama" id="namaPrestasiInput" placeholder="Contoh: Lomba Matematika">
                </div>

                <!-- TINGKAT PRESTASI -->
                <div class="form-group col-md-6" id="tingkatContainer">
                    <label>Tingkat Prestasi <span class="text-danger">*</span></label>
                    <select class="form-control" name="tingkat" id="tingkatSelect" required>
                        <option value="">Tingkat Prestasi</option>
                        <option value="1">Internasional</option>
                        <option value="2">Nasional</option>
                        <option value="3">Regional</option>
                        <option value="4">Provinsi</option>
                        <option value="5">Kabupaten/Kota</option>
                        <option value="6">Kecamatan</option>
                        <option value="7">Sekolah</option>
                    </select>
                </div>

                <!-- BAHASA ASING: kontainer utama (dinamis) -->
                <div class="form-group col-md-6" id="bahasaContainer" style="display:none;"></div>

                <!-- LEVEL/INPUT BAHASA: muncul setelah pilih bahasa -->
                <div class="form-group col-md-6" id="levelBahasaContainer" style="display:none;"></div>

                <!-- BUKTI -->
                <div class="form-group col-md-6">
                    <label>Bukti Prestasi <span class="text-danger">*</span></label>
                    <input type="file" name="bukti" class="form-control" accept="image/*" required>
                    <small class="text-danger">Ukuran Gambar tidak boleh melebihi 500kb dan Format (.jpg/.png/.jpeg)</small>
                </div>

                <!-- TANGGAL -->
                <div class="form-group col-md-6">
                    <label>Tanggal Sertifikat <span class="text-danger">*</span></label>
                    <input type="date" name="tgl" class="form-control" required>
                </div>

                <!-- TOMBOL (DITENGAHKAN) -->
                <div class="form-group col-md-12 text-center">
                    <button class="btn btn-lg btn-success" name="simpan" type="submit">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                    <button onclick="location.reload();" class="btn btn-lg btn-primary" type="button">
                        Reset
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- SCRIPT DINAMIS -->
<script>
function ubahForm() {
    const prestasi = document.getElementById("prestasi").value;

    const ketContainer = document.getElementById("containerKeterangan");
    const namaContainer = document.getElementById("namaPrestasiContainer");
    const tingkatContainer = document.getElementById("tingkatContainer");
    const bahasaContainer = document.getElementById("bahasaContainer");
    const levelBahasaContainer = document.getElementById("levelBahasaContainer");

    const namaInput = document.getElementById("namaPrestasiInput");
    const tingkatSelect = document.getElementById("tingkatSelect");

    // Reset semua container bahasa
    bahasaContainer.style.display = "none";
    bahasaContainer.innerHTML = "";
    levelBahasaContainer.style.display = "none";
    levelBahasaContainer.innerHTML = "";

    // Default state
    namaContainer.style.display = "none";
    tingkatContainer.style.display = "block";
    tingkatSelect.required = true;
    if (namaInput) namaInput.required = false;

    // PENTING: Reset keterangan container dengan innerHTML kosong dulu
    ketContainer.innerHTML = "";
    ketContainer.style.display = "block";

    // Kemudian isi dengan konten baru
    if (prestasi === "Paskibraka") {
        // Paskibraka: SEMBUNYIKAN keterangan, tampilkan tingkat
        ketContainer.style.display = "none";
        namaContainer.style.display = "none";
        tingkatContainer.style.display = "block";
        tingkatSelect.required = true;
    }
    else if (prestasi === "Tahfiz") {
        // Tahfiz: input Juz
        ketContainer.style.display = "block";
        ketContainer.innerHTML = `
            <label>Juz <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="ket" id="ketJuz" placeholder="Contoh: 1 Juz / 30 Juz" required>
        `;
        namaContainer.style.display = "none";
        tingkatContainer.style.display = "block";
        tingkatSelect.required = true;
    }
    else if (prestasi === "Prestasi Akademik (Juara Kelas)") {
        // Juara Kelas
        ketContainer.style.display = "block";
        ketContainer.innerHTML = `
            <label>Keterangan <span class="text-danger">*</span></label>
            <select class="form-control" name="ket" id="ketJuaraKelas" required>
                <option value="">Pilih Juara</option>
                <option value="Juara 1">Juara 1</option>
                <option value="Juara 2">Juara 2</option>
                <option value="Juara 3">Juara 3</option>
                <option value="Juara Umum">Juara Umum</option>
            </select>
        `;
        namaContainer.style.display = "none";
        tingkatContainer.style.display = "none";
        tingkatSelect.required = false;
    }
    else if (prestasi === "Prestasi Akademik" || prestasi === "Prestasi Non Akademik") {
        // Akademik & Non Akademik
        ketContainer.style.display = "block";
        ketContainer.innerHTML = `
            <label>Keterangan <span class="text-danger">*</span></label>
            <select class="form-control" name="ket" id="ketDefault" required>
                <option value="">Pilih Juara</option>
                <option value="Juara 1">Juara 1</option>
                <option value="Juara 2">Juara 2</option>
                <option value="Juara 3">Juara 3</option>
            </select>
        `;
        namaContainer.style.display = "block";
        tingkatContainer.style.display = "block";
        tingkatSelect.required = true;
        if (namaInput) namaInput.required = true;
    }
    else if (prestasi === "Kemampuan Berbahasa Asing") {
        // Bahasa Asing: SEMBUNYIKAN keterangan default
        ketContainer.style.display = "none";
        namaContainer.style.display = "none";
        tingkatContainer.style.display = "none";
        tingkatSelect.required = false;

        // Tampilkan pilihan bahasa
        bahasaContainer.style.display = "block";
        bahasaContainer.innerHTML = `
            <label>Pilih Bahasa <span class="text-danger">*</span></label>
            <select class="form-control" id="bahasa" name="bahasa" onchange="ubahLevelBahasa()" required>
                <option value="">-- Pilih Bahasa --</option>
                <option value="Inggris">Inggris</option>
                <option value="Jerman">Jerman</option>
                <option value="Jepang">Jepang</option>
            </select>
        `;
    }
    else {
        // Default: tampilkan keterangan juara
        ketContainer.style.display = "block";
        ketContainer.innerHTML = `
            <label>Keterangan <span class="text-danger">*</span></label>
            <select class="form-control" name="ket" id="ketDefault" required>
                <option value="">Pilih Juara</option>
                <option value="Juara 1">Juara 1</option>
                <option value="Juara 2">Juara 2</option>
                <option value="Juara 3">Juara 3</option>
            </select>
        `;
    }
}

function ubahLevelBahasa() {
    const bahasaSel = document.getElementById("bahasa");
    const bahasa = bahasaSel ? bahasaSel.value : "";
    const levelContainer = document.getElementById("levelBahasaContainer");

    // Reset
    levelContainer.style.display = "none";
    levelContainer.innerHTML = "";

    if (!bahasa) return;

    levelContainer.style.display = "block";

    if (bahasa === "Inggris") {
        levelContainer.innerHTML = `
            <label>Nilai TOEFL <span class="text-danger">*</span></label>
            <input type="number" class="form-control" name="ket" placeholder="Masukkan skor TOEFL" required min="0">
            <small class="text-danger">Contoh: 450 untuk KI minimal skor 400</small>
        `;
    }
    else if (bahasa === "Jerman") {
        levelContainer.innerHTML = `
            <label>Level Bahasa Jerman <span class="text-danger">*</span></label>
            <select class="form-control" name="ket" required>
                <option value="">-- Pilih Level --</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="B1">B1</option>
                <option value="B2">B2</option>
                <option value="C1">C1</option>
                <option value="C2">C2</option>
            </select>
        `;
    }
    else if (bahasa === "Jepang") {
        levelContainer.innerHTML = `
            <label>Level Bahasa Jepang <span class="text-danger">*</span></label>
            <select class="form-control" name="ket" required>
                <option value="">-- Pilih Level --</option>
                <option value="N5">N5</option>
                <option value="N4">N4</option>
                <option value="N3">N3</option>
                <option value="N2">N2</option>
                <option value="N1">N1</option>
            </select>
        `;
    }
}

// Jalankan saat load
window.addEventListener('load', function() {
    ubahForm();
});
</script>