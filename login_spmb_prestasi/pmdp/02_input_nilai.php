<?php
include "01_nav.php";
include "../assets/js/date.php";
error_reporting(0);
?>

<!-- PERINGATAN -->
<div id="modalPeringatan" style="
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.8);
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
">
    <div style="
        background: white;
        padding: 30px;
        border-radius: 10px;
        max-width: 600px;
        width: 90%;
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    ">
        <h3 style="color: #d9534f; margin-top: 0;">
            <i class="fa fa-exclamation-triangle"></i> Perhatian Penting!
        </h3>
        <hr>
        <div style="text-align: left; line-height: 1.8; font-size: 14px;">
            <p><strong>Sebelum mengisi form nilai, harap perhatikan hal-hal berikut:</strong></p>
            <ol>
                <li>Bila Nilai Skala 1-4 Di Konversikan Ke Skala 1-100</li>
                <li>Untuk Nilai Semester <strong>Kurikulum 13(K13)</strong> harus dikonversi ke nilai tunggal</li>
                <li>Jika tidak memiliki nilai pada matakuliah yang tertera silahkan di isi dengan angka <strong>" 0 "</strong></li>
                <li>Cek kembali agar tidak ada duplikasi semester</li>
				<li><strong>Raport Asli dibawa</strong> pada saat mengumpulkan berkas</li>
                <li><strong>Periksa kembali</strong> semua nilai sebelum menekan tombol Simpan</li>
            </ol>
            <!-- <p style="color: #d9534f; font-weight: bold; margin-top: 15px;">
                <i class="fa fa-info-circle"></i> 
                Nilai 0 (nol) hanya boleh digunakan untuk mata pelajaran yang TIDAK ADA di rapor Anda!
            </p> -->
        </div>
        <hr>
        <div style="text-align: center;">
            <button onclick="tutupModal()" class="btn btn-success btn-lg">
                <i class="fa fa-check"></i> Saya Mengerti, Lanjutkan
            </button>
        </div>
    </div>
</div>

<div id="page-wrapper" style="opacity: 0.3; pointer-events: none;">
	<div class="container-fluid" style="margin:30px;">
		<form method="post" action="" enctype="multipart/form-data">
			<table width="100%" class="table table-bordered">
				<tr>
					<td colspan="4" class="success"><b>
							<h5>Tambah Data Nilai
						</b></h5>
					</td>
				</tr>
				<tr>
					<td>Semester</td>
					<td colspan="2"><select name="semester" type="select" class="form-control" required="yes">
							<option value="">-- Silahkan Dipilih --</option>
							<option value="1">1</option>
							<option value="2">2 </option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select></td>
				</tr>

				<tr>
					<td width="25%">&nbsp;</td>
					<td>Pengetahuan</td>
					<!-- <td>Keterampilan</td> -->
				</tr>

				<tr>
					<td>Pendidikan Agama</td>
					<td><input type="number" name="peng_agama" required="yes" class="form-control nilai60" min="0" max="100" required></td>
					<!-- <td><input type="number" name="prak_agama" required="yes" class="form-control nilai60" min="0" max="100" required></td> -->
				</tr>

				<tr>
					<td>Kewarganegaraan</td>
					<td><input type="number" name="peng_kewarganegaraan" required="yes" class="form-control nilai60" min="0" max="100" required> </td>
					<!-- <td><input type="number" name="prak_kewarganegaraan" required="yes" class="form-control nilai60" min="0" max="100" required> </td> -->
				</tr>

				<tr>
					<td>Bahasa Indonesia</td>
					<td><input type="number" name="peng_bahasa_indonesia" required="yes" class="form-control nilai60" min="0" max="100" required> </td>
					<!-- <td><input type="number" name="prak_bahasa_indonesia" required="yes" class="form-control nilai60" min="0" max="100" required> </td> -->
				</tr>

				<tr>
					<td>Bahasa Inggris</td>
					<td><input type="number" name="peng_bahasa_inggris" required="yes" class="form-control nilai60" min="0" max="100" required> </td>
					<!-- <td><input type="number" name="prak_bahasa_inggris" required="yes" class="form-control nilai60" min="0" max="100" required> </td> -->
				</tr>

				<tr>
					<td>Matematika Wajib</td>
					<td><input type="number" name="peng_matematika" required="yes" class="form-control nilai60" min="0" max="100" required> </td>
					<!-- <td><input type="number" name="prak_matematika" required="yes" class="form-control nilai60" min="0" max="100" required> </td> -->
				</tr>

				<tr>
					<td>Fisika</td>
					<td><input type="number" name="peng_fisika" required="yes" class="form-control nilai60" min="0" max="100" required> </td>
					<!-- <td><input type="number" name="prak_fisika" required="yes" class="form-control nilai60" min="0" max="100" required> </td> -->
				</tr>

				<tr>
					<td>Biologi</td>
					<td><input type="number" name="peng_biologi" required="yes" class="form-control nilai60" min="0" max="100" required> </td>
					<!-- <td><input type="number" name="prak_biologi" required="yes" class="form-control nilai60" min="0" max="100" required> </td> -->
				</tr>

				<tr>
					<td>Kimia</td>
					<td><input type="number" name="peng_kimia" required="yes" class="form-control nilai60" min="0" max="100" required> </td>
					<!-- <td><input type="number" name="prak_kimia" required="yes" class="form-control nilai60" min="0" max="100" required> </td> -->
				</tr>

				<tr>
					<td>Sejarah</td>
					<td><input type="number" name="peng_sejarah" required="yes" class="form-control nilai60" min="0" max="100" required> </td>
					<!-- <td><input type="number" name="prak_sejarah" required="yes" class="form-control nilai60" min="0" max="100" required> </td> -->
				</tr>

				<tr>
					<td>Geografi</td>
					<td><input type="number" name="peng_geografi" required="yes" class="form-control nilai60" min="0" max="100" required> </td>
					<!-- <td><input type="number" name="prak_geografi" required="yes" class="form-control nilai60" min="0" max="100" required> </td> -->
				</tr>

				<tr>
					<td>Ekonomi</td>
					<td><input type="number" name="peng_ekonomi" required="yes" class="form-control nilai60" min="0" max="100" required> </td>
					<!-- <td><input type="number" name="prak_ekonomi" required="yes" class="form-control nilai60" min="0" max="100" required> </td> -->
				</tr>

				<tr>
					<td>Sosiologi</td>
					<td><input type="number" name="peng_sosiologi" required="yes" class="form-control nilai60" min="0" max="100" required> </td>
					<!-- <td><input type="number" name="prak_sosiologi" required="yes" class="form-control nilai60" min="0" max="100" required> </td> -->
				</tr>

				<tr>
					<td>Seni Budaya</td>
					<td><input type="number" name="peng_senibudaya" required="yes" class="form-control nilai60" min="0" max="100" required> </td>
					<!-- <td><input type="number" name="prak_senibudaya" required="yes" class="form-control nilai60" min="0" max="100" required> </td> -->
				</tr>

				<tr>
					<td>Pendidikan Jasmani</td>
					<td><input type="number" name="peng_pend_jasmani" required="yes" class="form-control nilai60" min="0" max="100" required> </td>
					<!-- <td><input type="number" name="prak_pend_jasmani" required="yes" class="form-control nilai60" min="0" max="100" required> </td> -->
				</tr>

				<tr>
					<td>Teknologi Informasi</td>
					<td><input type="number" name="peng_teknologi_informasi" required="yes" class="form-control nilai60" min="0" max="100" required> </td>
					<!-- <td><input type="number" name="prak_teknologi_informasi" required="yes" class="form-control nilai60" min="0" max="100" required> </td> -->
				</tr>

				<tr>
					<td>Keterampilan / Bhs Asing</td>
					<td><input type="number" name="peng_keterampilan" required="yes" class="form-control nilai60" min="0" max="100" required> </td>
					<!-- <td><input type="number" name="prak_keterampilan" required="yes" class="form-control nilai60" min="0" max="100" required> </td> -->
				</tr>

				<tr>
					<td>Muatan Lokal</td>
					<td><input type="number" name="peng_mulok" required="yes" class="form-control nilai60" min="0" max="100" required> </td>
					<!-- <td><input type="number" name="prak_mulok" required="yes" class="form-control nilai60" min="0" max="100" required> </td> -->
				</tr>

				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="submit" value="Simpan" class="btn btn-danger">
						<!-- <input type="reset" name="submit" value="Hapus" class="btn btn-success"> -->
					</td>
				</tr>

			</table>
		</form>

	</div>
</div>

<?php
include "../config/koneksi.php";

if (isset($_POST['submit'])) {
	$query = mysqli_query($kon, "insert into tb_nilai(semester, peng_agama, peng_kewarganegaraan, peng_bahasa_indonesia, peng_bahasa_inggris, peng_matematika, peng_fisika, peng_biologi, peng_kimia, peng_sejarah, peng_geografi, peng_ekonomi, peng_sosiologi, peng_senibudaya, peng_pend_jasmani, peng_teknologi_informasi, peng_keterampilan, peng_mulok, prak_agama, prak_kewarganegaraan, prak_bahasa_indonesia, prak_bahasa_inggris, prak_matematika, prak_fisika, prak_biologi, prak_kimia, prak_sejarah, prak_geografi, prak_ekonomi, prak_sosiologi, prak_senibudaya, prak_pend_jasmani, prak_teknologi_informasi, prak_keterampilan, prak_mulok, username)
									values('$_POST[semester]','$_POST[peng_agama]','$_POST[peng_kewarganegaraan]','$_POST[peng_bahasa_indonesia]','$_POST[peng_bahasa_inggris]','$_POST[peng_matematika]','$_POST[peng_fisika]','$_POST[peng_biologi]','$_POST[peng_kimia]','$_POST[peng_sejarah]','$_POST[peng_geografi]','$_POST[peng_ekonomi]','$_POST[peng_sosiologi]','$_POST[peng_senibudaya]','$_POST[peng_pend_jasmani]','$_POST[peng_teknologi_informasi]','$_POST[peng_keterampilan]','$_POST[peng_mulok]','$_POST[prak_agama]','$_POST[prak_kewarganegaraan]','$_POST[prak_bahasa_indonesia]','$_POST[prak_bahasa_inggris]','$_POST[prak_matematika]','$_POST[prak_fisika]','$_POST[prak_biologi]','$_POST[prak_kimia]','$_POST[prak_sejarah]','$_POST[prak_geografi]','$_POST[prak_ekonomi]','$_POST[prak_sosiologi]','$_POST[prak_senibudaya]','$_POST[prak_pend_jasmani]','$_POST[prak_teknologi_informasi]','$_POST[prak_keterampilan]','$_POST[prak_mulok]','$_SESSION[username]')");
	if ($query) {
		echo "<script>alert('Data Berhasil di Simpan');window.location='02_lihat_nilai.php'</script>";
	} else {
		echo "<script>alert('Data Gagal di Simpan');window.location='02_lihat_nilai.php'</script>";
	}
}
?>

<script>
// Fungsi untuk menutup modal
function tutupModal() {
    const modal = document.getElementById('modalPeringatan');
    const pageWrapper = document.getElementById('page-wrapper');
    
    // Sembunyikan modal dengan animasi
    modal.style.transition = 'opacity 0.3s ease';
    modal.style.opacity = '0';
    
    setTimeout(function() {
        modal.style.display = 'none';
        
        // Aktifkan form
        pageWrapper.style.opacity = '1';
        pageWrapper.style.pointerEvents = 'auto';
    }, 300);
}

// Validasi nilai input
const nilaiInputs = document.querySelectorAll('input.nilai60');

nilaiInputs.forEach(function(input) {
    input.addEventListener('input', function() {
        const str = this.value; // nilai dalam bentuk string
        const val = parseFloat(str); // nilai dalam bentuk angka

        // Jika kosong, jangan beri error dulu
        if (str === '') {
            this.setCustomValidity('');
            return;
        }

        // 00, 000, dst: tidak boleh
        if (/^0{2,}$/.test(str)) {
            this.setCustomValidity('Format tidak valid. Gunakan 0 (satu digit) jika mata pelajaran tidak ada di rapor.');
            this.reportValidity();
            return;
        }

        // 0 (satu digit) diperbolehkan
        if (str === '0') {
            this.setCustomValidity('');
            return;
        }

        // 1–59 tidak boleh
        if (!isNaN(val) && val < 60) {
            this.setCustomValidity('Nilai tidak boleh di bawah 60, kecuali 0 jika mata pelajaran tidak ada di rapor.');
            this.reportValidity();
        } else {
            // 60 ke atas aman
            this.setCustomValidity('');
        }
    });
});
</script>

</body>

</html>