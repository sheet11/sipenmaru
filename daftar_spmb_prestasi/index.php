<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SPMB Jalur Prestasi</title>
  <!-- CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
  <link rel="stylesheet" href="wizard.css">
</head>

<body style="text-align: center;">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <form action="" method="post" class="f1">
          <h3>Pendaftaran SPMB Jalur Prestasi</h3>
          <p>Poltekkes Kemenkes Bengkulu</p>
          <div class="f1-steps">
            <div class="f1-progress">
              <div class="f1-progress-line" data-now-value="20" data-number-of-steps="5" style="width: 20%;"></div>
            </div>
            <div class="f1-step active">
              <div class="f1-step-icon"><i class="fa fa-graduation-cap"></i></div>
              <p>Program Studi</p>
            </div>
            <div class="f1-step">
              <div class="f1-step-icon"><i class="fa fa-user"></i></div>
              <p>Biodata</p>
            </div>
            <div class="f1-step">
              <div class="f1-step-icon"><i class="fa fa-home"></i></div>
              <p>Alamat</p>
            </div>
            <div class="f1-step">
              <div class="f1-step-icon"><i class="fa fa-key"></i></div>
              <p>Akun</p>
            </div>
            <div class="f1-step">
              <div class="f1-step-icon"><i class="fa fa-address-book"></i></div>
              <p>Sosial</p>
            </div>
          </div>
          <!-- step 1: Program Studi -->
          <fieldset>
            <h4>Pilih Program Studi</h4>
            <div class="form-group">
              <label>Nama Sekolah</label>
              <input type="text" name="nama_sekolah" placeholder="Masukan nama Sekolah" class="form-control" autocomplete="off">
            </div>
            <div class="form-group">
              <label>Akreditasi Sekolah</label>
              <select name="akreditasi_sekolah" class="form-control">
                <option value="">-- Pilih Akreditasi Sekolah --</option>
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="c">C</option>
                <option value="lainnya">Lainnya</option>
              </select>
            </div>
            <div class="form-group">
              <label>Asal Sekolah</label>
              <select id="asal_sekolah" name="asal_sekolah" class="form-control">
                <option value="">-- Pilih Asal Sekolah --</option>
                <option value="sma">SMA</option>
                <option value="smk">SMK</option>
              </select>
            </div>
            <div class="form-group" id="smk-jenis-group" style="display:none;">
              <label>Jenis SMK</label>
              <select id="smk_jenis" name="smk_jenis" class="form-control">
                <option value="">-- Pilih Jenis SMK --</option>
                <option value="smk_kesehatan">SMK Kesehatan</option>
                <option value="smk_farmasi">SMK Farmasi</option>
                <option value="smk_kimia">SMK Kimia</option>
                <option value="smk_analis">Sekolah Menengah Analis Kesehatan</option>
                <option value="smk_teknik">SMK Teknik / Teknik Industri</option>
                <option value="smk_tataboga">SMK Tataboga</option>
                <option value="smk_pariwisata">SMK Pariwisata</option>
                <option value="smk_pertanian">SMK Pertanian</option>
                <option value="smk_semua">SMK (Semua Jurusan / Lainnya)</option>
              </select>
            </div>
            <div class="form-group">
              <label>Program Studi</label>
              <select id="program_studi" name="program_studi" class="form-control">
                <option value="">-- Pilih Program Studi --</option>
              </select>
            </div>
            <div class="f1-buttons">
              <button type="button" class="btn btn-primary btn-next">Selanjutnya <i class="fa fa-arrow-right"></i></button>
            </div>
          </fieldset>
          <!-- step 2: Biodata -->
          <fieldset>
            <h4>Identitas Pribadi</h4>
            <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" name="nama_awal" placeholder="Nama Lengkap" class="form-control">
            </div>
            <div class="form-group">
              <label>Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-control">
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label>Agama</label>
              <select name="agama" id="" class="form-control">
                <option value="">-- Pilih Agama --</option>
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="katolik">Katolik</option>
                <option value="hindu">Hindu</option>
                <option value="budha">Budha</option>
                <option value="konghucu">Konghucu</option>
              </select>
            </div>
            <div class="form-group">
              <label>Tempat Lahir</label>
              <input type="text" name="nama_awal" placeholder="Input Tempat Lahir" class="form-control">
            </div>
            <div class="form-group">
              <label>Tanggal Lahir</label>
              <input type="text" name="tgl_lahir" placeholder="Input Tanggal Lahir" class="form-control">
            </div>
            <div class="form-group">
              <label>Berat Badan</label>
              <input type="text" name="berat_badan" placeholder="Input Berat Badan" class="form-control">
            </div>
            <div class="form-group">
              <label>Tinggi Badan</label>
              <input type="text" name="tinggi_badan" placeholder="Input Tinggi Badan" class="form-control">
            </div>
            <div class="form-group">
              <label>Golongan Darah</label>
              <input type="text" name="gol_darah" placeholder="Input Golongan darah" class="form-control">
            </div>
            <div class="form-group">
              <label>NIK</label>
              <input type="text" name="nik" placeholder="Input NIK" class="form-control">
            </div>
            <div class="form-group">
              <label>Tentang Kamu</label>
              <textarea name="tentang_kamu" placeholder="Input Tentang Kamu" class="form-control"></textarea>
            </div>
            <div class="f1-buttons">
              <button type="button" class="btn btn-warning btn-previous"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
              <button type="button" class="btn btn-primary btn-next">Selanjutnya <i class="fa fa-arrow-right"></i></button>
            </div>
          </fieldset>
          <!-- step 3: Alamat -->
          <fieldset>
            <!-- 1. Asal daerah: dalam / luar Bengkulu -->
            <div class="form-group">
              <label for="asal">Asal daerah</label>
              <select id="asal" name="asal" class="form-control">
                <option value="">-- Pilih Asal Daerah --</option>
                <option value="dalam">Dalam Provinsi Bengkulu</option>
                <option value="luar">Luar Provinsi Bengkulu</option>
              </select>
            </div>

            <!-- 2a. Jika DALAM Bengkulu -->
            <div id="group-dalam" class="group" style="display:none;">
              <h4>Alamat dalam Provinsi Bengkulu</h4>

              <div class="form-group">
                <label for="kab_bkl">Kabupaten / Kota</label>
                <select id="kab_bkl" name="kab_bkl" class="form-control">
                  <option value="">-- Pilih Kab/Kota --</option>
                </select>
              </div>

              <div class="form-group">
                <label for="kec_bkl">Kecamatan</label>
                <select id="kec_bkl" name="kec_bkl" class="form-control">
                  <option value="">-- Pilih Kecamatan --</option>
                </select>
              </div>
            </div>

            <!-- 2b. Jika LUAR Bengkulu -->
            <div id="group-luar" class="group" style="display:none;">
              <h4>Alamat di Luar Provinsi Bengkulu</h4>

              <div class="form-group">
                <label for="prov_luar">Provinsi</label>
                <select id="prov_luar" name="prov_luar" class="form-control">
                  <option value="">-- Pilih Provinsi --</option>
                </select>
              </div>

              <div class="form-group">
                <label for="kab_luar">Kabupaten / Kota</label>
                <select id="kab_luar" name="kab_luar" class="form-control" disabled>
                  <option value="">-- Pilih Kab/Kota --</option>
                </select>
              </div>

              <div class="form-group">
                <label for="kec_luar">Kecamatan</label>
                <select id="kec_luar" name="kec_luar" class="form-control" disabled>
                  <option value="">-- Pilih Kecamatan --</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label>Tempat Lahir</label>
              <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control">
            </div>
            <div class="form-group">
              <label>Alamat Rumah</label>
              <input type="text" name="alamat_rumah" placeholder="Alamat Rumah" class="form-control">
            </div>
            <div class="f1-buttons">
              <button type="button" class="btn btn-warning btn-previous"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
              <button type="button" class="btn btn-primary btn-next">Selanjutnya <i class="fa fa-arrow-right"></i></button>
            </div>
          </fieldset>
          <!-- step 4: Akun -->
          <fieldset>
            <h4>Buat Akun</h4>
            <div class="form-group">
              <label>Email</label>
              <input type="text" name="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" placeholder="Password" class="form-control">
            </div>
            <div class="form-group">
              <label>Ulangi password</label>
              <input type="password" name="ulangi_password" placeholder="Ulangi password" class="form-control">
            </div>
            <div class="f1-buttons">
              <button type="button" class="btn btn-warning btn-previous"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
              <button type="button" class="btn btn-primary btn-next">Selanjutnya <i class="fa fa-arrow-right"></i></button>
            </div>
          </fieldset>
          <!-- step 5: Sosial -->
          <fieldset>
            <h4>Sosial Media</h4>
            <div class="form-group">
              <label>Facebook</label>
              <input type="text" name="facebook" placeholder="Facebook" class="form-control">
            </div>
            <div class="form-group">
              <label>Twitter</label>
              <input type="text" name="twitter" placeholder="Twitter" class="form-control">
            </div>
            <div class="form-group">
              <label>Google plus</label>
              <input type="text" name="google_plus" placeholder="Google plus" class="form-control">
            </div>
            <div class="f1-buttons">
              <button type="button" class="btn btn-warning btn-previous"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
              <button type="submit" class="btn btn-primary btn-submit"><i class="fa fa-save"></i> Submit</button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <!-- Javascript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="wizard.js"></script>
  <script>
    // ========================================
    // PROGRAM STUDI SELECTION LOGIC
    // ========================================
    const asalSekolahSelect = document.getElementById('asal_sekolah');
    const smkJenisGroup = document.getElementById('smk-jenis-group');
    const smkJenisSelect = document.getElementById('smk_jenis');
    const programStudiSelect = document.getElementById('program_studi');

    // Daftar program studi berdasarkan jenis sekolah / jurusan SMK
    const programStudiList = {
      // SMA: umumnya bisa memilih program non-kejuruan tertentu (biarkan semua tersedia)
      sma: [
        { value: 'Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners(Kelas Internasional)', text: 'Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners(Kelas Internasional)' },
        { value: 'Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners', text: 'Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners' },
        { value: 'Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan', text: 'Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' },
        { value: 'Sarjana Terapan promosi Kesehatan', text: 'Sarjana Terapan Promosi Kesehatan (Promkes)' },
        { value: 'Sarjana Terapan Gizi', text: 'Sarjana Terapan Gizi' },
        { value: 'D3 Keperawatan Bengkulu', text: 'D3 Keperawatan Bengkulu' },
        { value: 'D3 kebidanan Bengkulu', text: 'D3 Kebidanan Bengkulu' },
        { value: 'D3 keperawatan Curup', text: 'D3 Keperawatan Curup' },
        { value: 'D3 kebidanan Curup', text: 'D3 Kebidanan Curup' },
        { value: 'D3 Farmasi', text: 'D3 Farmasi' },
        { value: 'D3 Teknologi Laboratorium Medis', text: 'D3 Teknologi Laboratorium Medis (TLM)' },
        { value: 'D3 Sanitasi', text: 'D3 Sanitasi' },
        { value: 'D3 Gizi', text: 'D3 Gizi' }
      ],

      // SMK Kesehatan: akses penuh ke program kesehatan
      smk_kesehatan: [
        { value: 'Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners(Kelas Internasional)', text: 'Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners(Kelas Internasional)' },
        { value: 'Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners', text: 'Sarjana Terapan Keperawatan dan Pendidikan Profesi Ners' },
        { value: 'Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan', text: 'Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan' },
        { value: 'Sarjana Terapan promosi Kesehatan', text: 'Sarjana Terapan Promosi Kesehatan (Promkes)' },
        { value: 'Sarjana Terapan Gizi', text: 'Sarjana Terapan Gizi' },
        { value: 'D3 keperawatan Curup', text: 'D3 Keperawatan Curup' },
        { value: 'D3 kebidanan Curup', text: 'D3 Kebidanan Curup' },
        { value: 'D3 Keperawatan Bengkulu', text: 'D3 Keperawatan Bengkulu' },
        { value: 'D3 kebidanan Bengkulu', text: 'D3 Kebidanan Bengkulu' },
        { value: 'D3 Farmasi', text: 'D3 Farmasi' },
        { value: 'D3 Teknologi Laboratorium Medis', text: 'D3 Teknologi Laboratorium Medis (TLM)' },
        { value: 'D3 Sanitasi', text: 'D3 Sanitasi' },
        { value: 'D3 Gizi', text: 'D3 Gizi' }
      ],

      // SMK Farmasi: khusus Farmasi (sesuai tabel)
      smk_farmasi: [
        { value: 'D3 Farmasi', text: 'D3 Farmasi' }
      ],

      // SMK Kimia: cocok untuk TLM dan Kesling
      smk_kimia: [
        { value: 'D3 Teknologi Laboratorium Medis', text: 'D3 Teknologi Laboratorium Medis (TLM)' },
        { value: 'D3 Sanitasi', text: 'D3 Sanitasi' }
      ],

      // Sekolah Menengah Analis Kesehatan: pilihan TLM / analis
      smk_analis: [
        { value: 'D3 Teknologi Laboratorium Medis', text: 'D3 Teknologi Laboratorium Medis (TLM)' }
      ],

      // SMK Teknik / Teknik Industri: beberapa program teknis seperti TLM atau Kesling
      smk_teknik: [
        { value: 'D3 Teknologi Laboratorium Medis', text: 'D3 Teknologi Laboratorium Medis (TLM)' },
        { value: 'D3 Sanitasi', text: 'D3 Sanitasi' }
      ],

      // SMK Tataboga / Pariwisata / Pertanian: cocok untuk Gizi
      smk_tataboga: [
        { value: 'Sarjana Terapan Gizi', text: 'Sarjana Terapan Gizi' },
        { value: 'D3 Gizi', text: 'D3 Gizi' }
      ],
      smk_pariwisata: [
        { value: 'Sarjana Terapan Gizi', text: 'Sarjana Terapan Gizi' },
        { value: 'D3 Gizi', text: 'D3 Gizi' }
      ],
      smk_pertanian: [
        { value: 'Sarjana Terapan Gizi', text: 'Sarjana Terapan Gizi' },
        { value: 'D3 Gizi', text: 'D3 Gizi' }
      ],

      // SMK semua jurusan / lainnya: paling fleksibel — set beberapa program yang umum
      smk_semua: [
        { value: 'Sarjana Terapan promosi Kesehatan', text: 'Sarjana Terapan Promosi Kesehatan (Promkes)' },
        { value: 'D3 Gizi', text: 'D3 Gizi' },
        { value: 'D3 Sanitasi', text: 'D3 Sanitasi' },
        { value: 'D3 Teknologi Laboratorium Medis', text: 'D3 Teknologi Laboratorium Medis (TLM)' }
      ],

      // Fallback untuk SMK jenis lain
      smk_lainnya: [
        { value: 'D3 Teknologi Laboratorium Medis', text: 'D3 Teknologi Laboratorium Medis (TLM)' },
        { value: 'Sarjana Terapan promosi Kesehatan', text: 'Sarjana Terapan Promosi Kesehatan (Promkes)' },
        { value: 'D3 Sanitasi', text: 'D3 Sanitasi' },
        { value: 'D3 Gizi', text: 'D3 Gizi' }
      ]
    };

    // Helper untuk update program studi options
    function updateProgramStudi(programList) {
      programStudiSelect.innerHTML = '';
      const defaultOpt = document.createElement('option');
      defaultOpt.value = '';
      defaultOpt.textContent = '-- Pilih Program Studi --';
      programStudiSelect.appendChild(defaultOpt);

      if (programList) {
        programList.forEach(prog => {
          const opt = document.createElement('option');
          opt.value = prog.value;
          opt.textContent = prog.text;
          programStudiSelect.appendChild(opt);
        });
      }
    }

    // Event listener untuk asal sekolah
    asalSekolahSelect.addEventListener('change', function() {
      const selectedValue = this.value;
      smkJenisSelect.value = '';

      if (selectedValue === 'sma') {
        smkJenisGroup.style.display = 'none';
        updateProgramStudi(programStudiList.sma);
      } else if (selectedValue === 'smk') {
        smkJenisGroup.style.display = 'block';
        updateProgramStudi(null);
      } else {
        smkJenisGroup.style.display = 'none';
        updateProgramStudi(null);
      }
    });

    // Event listener untuk jenis SMK — gunakan mapping yang sudah didefinisikan di programStudiList
    smkJenisSelect.addEventListener('change', function() {
      const selectedValue = this.value;
      const list = programStudiList[selectedValue] || null;
      updateProgramStudi(list);
    });
    //batas pilih prodi
    // ========================================

    const API_URL = '../proxy_province.php'; // path ke PHP proxy
    const BENGKULU_CODE = '17'; // kode provinsi Bengkulu (di data wilayah.id)

    // Element form
    const asalSelect = document.getElementById('asal');

    const groupDalam = document.getElementById('group-dalam');
    const kabBklSelect = document.getElementById('kab_bkl');
    const kecBklSelect = document.getElementById('kec_bkl');

    const groupLuar = document.getElementById('group-luar');
    const provLuarSelect = document.getElementById('prov_luar');
    const kabLuarSelect = document.getElementById('kab_luar');
    const kecLuarSelect = document.getElementById('kec_luar');

    // Helper: kosongkan dropdown & isi opsi default
    function resetSelect(select, placeholder) {
      select.innerHTML = '';
      const opt = document.createElement('option');
      opt.value = '';
      opt.textContent = placeholder || '-- Pilih --';
      select.appendChild(opt);
    }

    // Helper: fetch JSON dari proxy wilayah.php
    function fetchWilayah(params) {
      const url = API_URL + '?' + new URLSearchParams(params).toString();
      return fetch(url).then(res => {
        if (!res.ok) {
          throw new Error('HTTP ' + res.status);
        }
        return res.json();
      });
    }

    // Event: asal daerah diubah
    asalSelect.addEventListener('change', () => {
      const value = asalSelect.value;

      if (value === 'dalam') {
        groupDalam.style.display = 'block';
        groupLuar.style.display = 'none';

        loadKabupatenBengkulu();
      } else if (value === 'luar') {
        groupDalam.style.display = 'none';
        groupLuar.style.display = 'block';

        loadProvincesLuarBengkulu();
      } else {
        groupDalam.style.display = 'none';
        groupLuar.style.display = 'none';
      }
    });

    // ======================
    // D A L A M  B E N G K U L U
    // ======================

    function loadKabupatenBengkulu() {
      resetSelect(kabBklSelect, '-- Pilih Kab/Kota --');
      resetSelect(kecBklSelect, '-- Pilih Kecamatan --');

      fetchWilayah({
          type: 'regencies',
          code: BENGKULU_CODE
        })
        .then(json => {
          if (!json.data) return;
          json.data.forEach(reg => {
            const opt = document.createElement('option');
            opt.value = reg.code; // misal "17.01"
            opt.textContent = reg.name;
            kabBklSelect.appendChild(opt);
          });
        })
        .catch(err => {
          console.error('Error load kabupaten Bengkulu:', err);
        });
    }

    kabBklSelect.addEventListener('change', () => {
      const regencyCode = kabBklSelect.value;
      resetSelect(kecBklSelect, '-- Pilih Kecamatan --');

      if (!regencyCode) return;

      fetchWilayah({
          type: 'districts',
          code: regencyCode
        })
        .then(json => {
          if (!json.data) return;
          json.data.forEach(dist => {
            const opt = document.createElement('option');
            opt.value = dist.code; // misal "17.01.01"
            opt.textContent = dist.name;
            kecBklSelect.appendChild(opt);
          });
        })
        .catch(err => {
          console.error('Error load kecamatan Bengkulu:', err);
        });
    });

    // ======================
    // L U A R  B E N G K U L U
    // ======================

    function loadProvincesLuarBengkulu() {
      resetSelect(provLuarSelect, '-- Pilih Provinsi --');
      resetSelect(kabLuarSelect, '-- Pilih Kab/Kota --');
      resetSelect(kecLuarSelect, '-- Pilih Kecamatan --');
      kabLuarSelect.disabled = true;
      kecLuarSelect.disabled = true;

      fetchWilayah({
          type: 'provinces'
        })
        .then(json => {
          if (!json.data) return;

          json.data
            .filter(p => p.code !== BENGKULU_CODE) // exclude Bengkulu
            .forEach(prov => {
              const opt = document.createElement('option');
              opt.value = prov.code; // misal "32"
              opt.textContent = prov.name;
              provLuarSelect.appendChild(opt);
            });
        })
        .catch(err => {
          console.error('Error load provinsi luar Bengkulu:', err);
        });
    }

    // Provinsi luar dipilih → load kab/kota
    provLuarSelect.addEventListener('change', () => {
      const provCode = provLuarSelect.value;
      resetSelect(kabLuarSelect, '-- Pilih Kab/Kota --');
      resetSelect(kecLuarSelect, '-- Pilih Kecamatan --');
      kabLuarSelect.disabled = true;
      kecLuarSelect.disabled = true;

      if (!provCode) return;

      fetchWilayah({
          type: 'regencies',
          code: provCode
        })
        .then(json => {
          if (!json.data) return;
          json.data.forEach(reg => {
            const opt = document.createElement('option');
            opt.value = reg.code; // misal "32.01"
            opt.textContent = reg.name;
            kabLuarSelect.appendChild(opt);
          });
          kabLuarSelect.disabled = false;
        })
        .catch(err => {
          console.error('Error load kabupaten luar:', err);
        });
    });

    // Kab/kota luar dipilih → load kecamatan
    kabLuarSelect.addEventListener('change', () => {
      const regencyCode = kabLuarSelect.value;
      resetSelect(kecLuarSelect, '-- Pilih Kecamatan --');
      kecLuarSelect.disabled = true;

      if (!regencyCode) return;

      fetchWilayah({
          type: 'districts',
          code: regencyCode
        })
        .then(json => {
          if (!json.data) return;
          json.data.forEach(dist => {
            const opt = document.createElement('option');
            opt.value = dist.code;
            opt.textContent = dist.name;
            kecLuarSelect.appendChild(opt);
          });
          kecLuarSelect.disabled = false;
        })
        .catch(err => {
          console.error('Error load kecamatan luar:', err);
        });
    });
  </script>
</body>

</html>