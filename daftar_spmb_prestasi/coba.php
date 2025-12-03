<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dropdown Asal Daerah</title>
  <style>
    label { display:block; margin-top:8px; }
  </style>
</head>
<body>
  <h3>Asal Daerah</h3>

  <!-- 1. Asal daerah: dalam / luar Bengkulu -->
  <label for="asal">Asal daerah</label>
  <select id="asal" name="asal">
    <option value="">-- Pilih Asal Daerah --</option>
    <option value="dalam">Dalam Provinsi Bengkulu</option>
    <option value="luar">Luar Provinsi Bengkulu</option>
  </select>

  <!-- 2a. Jika DALAM Bengkulu -->
  <div id="group-dalam" style="display:none; margin-top:10px;">
    <label for="kab_bkl">Kab/Kota (Provinsi Bengkulu)</label>
    <select id="kab_bkl" name="kab_bkl">
      <option value="">-- Pilih Kab/Kota --</option>
    </select>

    <label for="kec_bkl">Kecamatan</label>
    <select id="kec_bkl" name="kec_bkl">
      <option value="">-- Pilih Kecamatan --</option>
    </select>
  </div>

  <!-- 2b. Jika LUAR Bengkulu -->
  <div id="group-luar" style="display:none; margin-top:10px;">
    <label for="prov_luar">Provinsi (di luar Bengkulu)</label>
    <select id="prov_luar" name="prov_luar">
      <option value="">-- Pilih Provinsi --</option>
    </select>

    <label for="kab_luar">Kab/Kota</label>
    <select id="kab_luar" name="kab_luar" disabled>
      <option value="">-- Pilih Kab/Kota --</option>
    </select>

    <label for="kec_luar">Kecamatan</label>
    <select id="kec_luar" name="kec_luar" disabled>
      <option value="">-- Pilih Kecamatan --</option>
    </select>
  </div>

  <script>
    // KONFIG: kalau masih kena CORS, ganti BASE_URL ke endpoint backend Anda
    const BASE_URL = 'https://wilayah.id/api';

    const ASAL_DALAM = 'dalam';
    const ASAL_LUAR  = 'luar';
    const BENGKULU_CODE = '17'; // dari /provinces.json

    const asalSelect     = document.getElementById('asal');

    const groupDalam     = document.getElementById('group-dalam');
    const kabBklSelect   = document.getElementById('kab_bkl');
    const kecBklSelect   = document.getElementById('kec_bkl');

    const groupLuar      = document.getElementById('group-luar');
    const provLuarSelect = document.getElementById('prov_luar');
    const kabLuarSelect  = document.getElementById('kab_luar');
    const kecLuarSelect  = document.getElementById('kec_luar');

    // Helper: kosongkan dropdown & isi opsi default
    function resetSelect(select, placeholder = '-- Pilih --') {
      select.innerHTML = '';
      const opt = document.createElement('option');
      opt.value = '';
      opt.textContent = placeholder;
      select.appendChild(opt);
    }

    // Helper: fetch JSON dari API
    function fetchJson(url) {
      return fetch(url).then(res => {
        if (!res.ok) throw new Error('HTTP error ' + res.status);
        return res.json();
      });
    }

    // 1. Event ketika asal daerah diubah
    asalSelect.addEventListener('change', () => {
      const value = asalSelect.value;

      if (value === ASAL_DALAM) {
        groupDalam.style.display = 'block';
        groupLuar.style.display  = 'none';

        // Load kab/kota di Bengkulu
        loadKabupatenBengkulu();
      } else if (value === ASAL_LUAR) {
        groupDalam.style.display = 'none';
        groupLuar.style.display  = 'block';

        // Load provinsi luar Bengkulu
        loadProvincesLuarBengkulu();
      } else {
        groupDalam.style.display = 'none';
        groupLuar.style.display  = 'none';
      }
    });

    // 2a. Dalam Bengkulu: kab/kota
    function loadKabupatenBengkulu() {
      resetSelect(kabBklSelect, '-- Pilih Kab/Kota --');
      resetSelect(kecBklSelect, '-- Pilih Kecamatan --');

      fetchJson(`${BASE_URL}/regencies/${BENGKULU_CODE}.json`)
        .then(json => {
          json.data.forEach(reg => {
            const opt = document.createElement('option');
            opt.value = reg.code;   // contoh: "17.01"
            opt.textContent = reg.name;
            kabBklSelect.appendChild(opt);
          });
        })
        .catch(err => {
          console.error(err);
        });
    }

    kabBklSelect.addEventListener('change', () => {
      const regencyCode = kabBklSelect.value;
      resetSelect(kecBklSelect, '-- Pilih Kecamatan --');

      if (!regencyCode) return;

      fetchJson(`${BASE_URL}/districts/${regencyCode}.json`)
        .then(json => {
          json.data.forEach(dist => {
            const opt = document.createElement('option');
            opt.value = dist.code;   // contoh: "17.01.01"
            opt.textContent = dist.name;
            kecBklSelect.appendChild(opt);
          });
        })
        .catch(err => {
          console.error(err);
        });
    });

    // 2b. Luar Bengkulu: provinsi
    function loadProvincesLuarBengkulu() {
      resetSelect(provLuarSelect, '-- Pilih Provinsi --');
      resetSelect(kabLuarSelect, '-- Pilih Kab/Kota --');
      resetSelect(kecLuarSelect, '-- Pilih Kecamatan --');
      kabLuarSelect.disabled = true;
      kecLuarSelect.disabled = true;

      fetchJson(`${BASE_URL}/provinces.json`)
        .then(json => {
          json.data
            .filter(p => p.code !== BENGKULU_CODE) // exclude Bengkulu
            .forEach(prov => {
              const opt = document.createElement('option');
              opt.value = prov.code;   // contoh: "32"
              opt.textContent = prov.name;
              provLuarSelect.appendChild(opt);
            });
        })
        .catch(err => {
          console.error(err);
        });
    }

    // Event: provinsi luar dipilih → load kab/kota
    provLuarSelect.addEventListener('change', () => {
      const provCode = provLuarSelect.value;
      resetSelect(kabLuarSelect, '-- Pilih Kab/Kota --');
      resetSelect(kecLuarSelect, '-- Pilih Kecamatan --');
      kabLuarSelect.disabled = true;
      kecLuarSelect.disabled = true;

      if (!provCode) return;

      fetchJson(`${BASE_URL}/regencies/${provCode}.json`)
        .then(json => {
          json.data.forEach(reg => {
            const opt = document.createElement('option');
            opt.value = reg.code; // contoh: "32.01"
            opt.textContent = reg.name;
            kabLuarSelect.appendChild(opt);
          });
          kabLuarSelect.disabled = false;
        })
        .catch(err => {
          console.error(err);
        });
    });

    // Event: kab/kota luar dipilih → load kecamatan
    kabLuarSelect.addEventListener('change', () => {
      const regencyCode = kabLuarSelect.value;
      resetSelect(kecLuarSelect, '-- Pilih Kecamatan --');
      kecLuarSelect.disabled = true;

      if (!regencyCode) return;

      fetchJson(`${BASE_URL}/districts/${regencyCode}.json`)
        .then(json => {
          json.data.forEach(dist => {
            const opt = document.createElement('option');
            opt.value = dist.code;
            opt.textContent = dist.name;
            kecLuarSelect.appendChild(opt);
          });
          kecLuarSelect.disabled = false;
        })
        .catch(err => {
          console.error(err);
        });
    });

  </script>
</body>
</html>
