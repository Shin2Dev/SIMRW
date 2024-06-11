@extends('templates.form')
@section('form-content')

<div class="input-box">
    <label class="details">Jumlah Warga</label>
    <input type="number" id="jumlah-warga" name="jumlah-warga" required autocomplete="off" oninput="generateForms()">
</div>

{{-- GAP --}}
<div class="input-box"></div>

<section class="forms" id="bansos-forms"></section>

<style>
    .suggestions {
        position: relative;
        z-index: 2;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .suggestion-item {
        background: white;
        border: 1px solid #ccc;
        padding: 10px;
        cursor: pointer;
    }

    .suggestion-item:hover {
        background: #f0f0f0;
    }
</style>
<script>
    function generateForms() {
        const jumlahWarga = document.getElementById('jumlah-warga').value;
        const formsContainer = document.getElementById('bansos-forms');
        formsContainer.innerHTML = '';

        for (let i = 1; i <= jumlahWarga; i++) {
            const form = document.createElement('div');
            form.className = 'dropdown-forms';
            form.innerHTML = `
            <hr />
            <h3>Calon Penerima Bansos ke-${i}</h3>
            <div class="user-details">
                <div class="input-box">
                    <label class="details" for="nik-${i}">NIK</label>
                    <input type="text" id="nik-${i}" name="data[${i}][nik]" required autocomplete="off" readonly>
                </div>
                <div class="input-box">
                    <label class="details" for="nama-${i}">Nama Lengkap</label>
                    <input type="text" id="nama-${i}" name="data[${i}][nama]" required autocomplete="off" oninput="fetchNama(${i})">
                    <div id="nama-suggestions-${i}" class="suggestions"></div>
                </div>
                <div class="input-box">
                    <label class="details" for="pekerjaan-${i}">Pekerjaan</label>
                    <select id="pekerjaan-${i}" name="data[${i}][pekerjaan]" required>
                        <option value="" disabled selected>Pilih Pekerjaan</option>
                        <option value="Pegawai Swasta / Negeri">Pegawai Swasta / Negeri</option>
                        <option value="Pengusaha / Pedagang">Pengusaha / Pedagang</option>
                        <option value="Petani / Buruh / Karyawan">Petani / Buruh / Karyawan</option>
                        <option value="Tidak Bekerja / Pengangguran">Tidak Bekerja / Pengangguran</option>
                    </select>
                </div>
                <div class="input-box">
                    <label class="details" for="penghasilan-${i}">Penghasilan Perbulan</label>
                    <select id="penghasilan-${i}" name="data[${i}][penghasilan]" required>
                        <option value="" disabled selected>Pilih Penghasilan Perbulan</option>
                        <option value="> Rp. 3.000.000">> Rp. 3.000.000</option>
                        <option value="Rp. 1.500.000 - Rp. 3.000.000">Rp. 1.500.000 - Rp. 3.000.000</option>
                        <option value="Rp. 500.000 - Rp. 1.500.000">Rp. 500.000 - Rp. 1.500.000</option>
                        <option value="< Rp. 500.000">< Rp. 500.000</option>
                    </select>
                </div>
                <div class="input-box">
                    <label class="details" for="usia-${i}">Usia</label>
                    <select id="usia-${i}" name="data[${i}][usia]" required>
                        <option value="" disabled selected>Pilih Usia</option>
                        <option value="< 25 Tahun">< 25 Tahun</option>
                        <option value="26 - 35 Tahun">26 - 35 Tahun</option>
                        <option value="36 - 45 Tahun">36 - 45 Tahun</option>
                        <option value="> 46 Tahun">> 46 Tahun</option>
                    </select>
                </div>
                <div class="input-box">
                    <label class="details" for="pendidikan-${i}">Pendidikan</label>
                    <select id="pendidikan-${i}" name="data[${i}][pendidikan]" required>
                        <option value="" disabled selected>Pilih Pendidikan</option>
                        <option value="Perguruan Tinggi">Perguruan Tinggi</option>
                        <option value="SMA">SMA</option>
                        <option value="SMP">SMP</option>
                        <option value="SD">SD</option>
                    </select>
                </div>
                <div class="input-box">
                    <label class="details" for="jenis_lantai-${i}">Jenis Lantai</label>
                    <select id="jenis_lantai-${i}" name="data[${i}][jenis_lantai]" required>
                        <option value="" disabled selected>Pilih Jenis Lantai</option>
                        <option value="Keramik">Keramik</option>
                        <option value="Plester / Semen">Plester / Semen</option>
                        <option value="Tanah">Tanah</option>
                    </select>
                </div>
                <div class="input-box">
                    <label class="details" for="jenis_dinding-${i}">Jenis Dinding</label>
                    <select id="jenis_dinding-${i}" name="data[${i}][jenis_dinding]" required>
                        <option value="" disabled selected>Pilih Jenis Dinding</option>
                        <option value="Tembok">Tembok</option>
                        <option value="Kayu">Kayu</option>
                        <option value="Bambu">Bambu</option>
                    </select>
                </div>
                <div class="input-box">
                    <label class="details" for="luas_lantai-${i}">Luas Bangunan</label>
                    <select id="luas_lantai-${i}" name="data[${i}][luas_lantai]" required>
                        <option value="" disabled selected>Pilih Luas Lantai Bangunan</option>
                        <option value="Di atas 8 m2">Di atas 8 m2</option>
                        <option value="Di bawah 8 m2">Di bawah 8 m2</option>
                    </select>
                </div>
                <div class="input-box">
                    <label class="details" for="jenis_kendaraan-${i}">Jenis Kendaraan</label>
                    <select id="jenis_kendaraan-${i}" name="data[${i}][jenis_kendaraan]" required>
                        <option value="" disabled selected>Pilih Jenis Kendaraan</option>
                        <option value="Mobil">Mobil</option>
                        <option value="Motor">Motor</option>
                        <option value="Sepeda">Sepeda</option>
                        <option value="Tidak Punya Kendaraan">Tidak Punya Kendaraan</option>
                    </select>
                </div>
                <div class="input-box">
                    <label class="details" for="sumber_penerangan-${i}">Sumber Penerangan</label>
                    <select id="sumber_penerangan-${i}" name="data[${i}][sumber_penerangan]" required>
                        <option value="" disabled selected>Pilih Sumber Penerangan</option>
                        <option value="PLN Subsidi">PLN Subsidi</option>
                        <option value="PLN Non Subsidi">PLN Non Subsidi</option>
                        <option value="Tidak Punya Penerangan">Tidak Punya Penerangan</option>
                    </select>
                </div>
                <div class="input-box">
                    <label class="details" for="status_rumah-${i}">Status Rumah</label>
                    <select id="status_rumah-${i}" name="data[${i}][status_rumah]" required>
                        <option value="" disabled selected>Pilih Status Rumah</option>
                        <option value="Milik Sendiri">Milik Sendiri</option>
                        <option value="Milik Orang Tua">Milik Orang Tua</option>
                        <option value="Kontrak / Sewa">Kontrak / Sewa</option>
                        <option value="Bebas Sewa">Bebas Sewa</option>
                    </select>
                </div>
            </div>
            `;
            formsContainer.appendChild(form);
        }
    }

    function fetchNama(index) {
        const namaInput = document.getElementById(`nama-${index}`);
        const suggestionsContainer = document.getElementById(`nama-suggestions-${index}`);
        const nikInput = document.getElementById(`nik-${index}`);

        if (namaInput.value.length > 0) {
            fetch(`{{ route('tampil_warga_rt', ['role' => $role]) }}?query=${namaInput.value}`)
                .then(response => response.json())
                .then(data => {
                    suggestionsContainer.innerHTML = '';
                    if (data.length > 0) {
                        data.forEach(item => {
                            const suggestion = document.createElement('div');
                            suggestion.className = 'suggestion-item';
                            suggestion.textContent = item.nama;
                            suggestion.onclick = () => {
                                namaInput.value = item.nama;
                                nikInput.value = item.nik;
                                suggestionsContainer.innerHTML = '';
                            };
                            suggestionsContainer.appendChild(suggestion);
                        });
                    } else {
                        const noResult = document.createElement('div');
                        noResult.className = 'suggestion-item';
                        noResult.textContent = 'No results found';
                        suggestionsContainer.appendChild(noResult);
                    }
                });
        } else {
            suggestionsContainer.innerHTML = '';
        }
    }
</script>
@endsection
