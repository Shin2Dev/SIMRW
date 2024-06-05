@extends('templates.form')
@section('form-content')

{{-- PERBAIKAN --}}
<div class="input-box">
    <label class="details">Jumlah Warga</label>
    <input type="number" id="jumlah-warga" name="jumlah-warga" required autocomplete="off" oninput="generateForms()">
</div>

{{-- GAP --}}
<div class="input-box"></div>

<section class="forms" id="bansos-forms"></section>

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
                    <input type="text" id="nik-${i}" name="nik-${i}" required autocomplete="off" oninput="fetchNama(${i})">
                </div>
                <div class="input-box">
                    <label class="details" for="nama-${i}">Nama Lengkap</label>
                    <input type="text" id="nama-${i}" name="nama-${i}" required autocomplete="off">
                </div>
                <div class="input-box">
                    <label class="details" for="pekerjaan-${i}">Pekerjaan</label>
                    <select id="pekerjaan-${i}" name="pekerjaan-${i}" required>
                        <option value="" disabled selected>Pilih Pekerjaan</option>
                        <option value="Pegawai swasta/negri">Pegawai swasta/negri</option>
                        <option value="Pengusaha/pedagang">Pengusaha/pedagang</option>
                        <option value="Petani/buruh/karyawan">Petani/buruh/karyawan</option>
                        <option value="Tidak bekerja/pengangguran">Tidak bekerja/pengangguran</option>
                    </select>
                </div>
                <div class="input-box">
                    <label class="details" for="penghasilan-${i}">Penghasilan Perbulan</label>
                    <select id="penghasilan-${i}" name="penghasilan-${i}" required>
                        <option value="" disabled selected>Pilih Penghasilan Perbulan</option>
                        <option value=">3.000.000">>3.000.000</option>
                        <option value="1.500.000 - 3.000.000">1.500.000 - 3.000.000</option>
                        <option value="500.000 - 1.500.000">500.000 - 1.500.000</option>
                        <option value="<500.000"><500.000</option>
                    </select>
                </div>
                <div class="input-box">
                    <label class="details" for="usia-${i}">Usia</label>
                    <select id="usia-${i}" name="usia-${i}" required>
                        <option value="" disabled selected>Pilih Usia</option>
                        <option value="<25 tahun"><25 tahun</option>
                        <option value="26 - 35 tahun">26 - 35 tahun</option>
                        <option value="36 - 45 tahun">36 - 45 tahun</option>
                        <option value=">46 tahun">>46 tahun</option>
                    </select>
                </div>
                <div class="input-box">
                    <label class="details" for="pendidikan-${i}">Pendidikan</label>
                    <select id="pendidikan-${i}" name="pendidikan-${i}" required>
                        <option value="" disabled selected>Pilih Pendidikan</option>
                        <option value="Perguruan Tinggi">Perguruan Tinggi</option>
                        <option value="SMA">SMA</option>
                        <option value="SMP">SMP</option>
                        <option value="SD">SD</option>
                    </select>
                </div>
                <div class="input-box">
                    <label class="details" for="luas_lantai-${i}">Luas Lantai Bangunan</label>
                    <select id="luas_lantai-${i}" name="luas_lantai-${i}" required>
                        <option value="" disabled selected>Pilih Luas Lantai Bangunan</option>
                        <option value="Di atas 8 m2">Di atas 8 m2</option>
                        <option value="Di bawah 8 m2">Di bawah 8 m2</option>
                    </select>
                </div>
                <div class="input-box">
                    <label class="details" for="jenis_lantai-${i}">Jenis Lantai</label>
                    <select id="jenis_lantai-${i}" name="jenis_lantai-${i}" required>
                        <option value="" disabled selected>Pilih Jenis Lantai</option>
                        <option value="Keramik">Keramik</option>
                        <option value="Plester/semen">Plester/semen</option>
                        <option value="Tanah">Tanah</option>
                    </select>
                </div>
                <div class="input-box">
                    <label class="details" for="jenis_dinding-${i}">Jenis Dinding</label>
                    <select id="jenis_dinding-${i}" name="jenis_dinding-${i}" required>
                        <option value="" disabled selected>Pilih Jenis Dinding</option>
                        <option value="Tembok">Tembok</option>
                        <option value="Kayu">Kayu</option>
                        <option value="Bambu">Bambu</option>
                    </select>
                </div>
                <div class="input-box">
                    <label class="details" for="jenis_kendaraan-${i}">Jenis Kendaraan</label>
                    <select id="jenis_kendaraan-${i}" name="jenis_kendaraan-${i}" required>
                        <option value="" disabled selected>Pilih Jenis Kendaraan</option>
                        <option value="Mobil">Mobil</option>
                        <option value="Motor">Motor</option>
                        <option value="Sepeda">Sepeda</option>
                        <option value="Tidak Punya">Tidak Punya</option>
                    </select>
                </div>
                <div class="input-box">
                    <label class="details" for="sumber_penerangan-${i}">Sumber Penerangan</label>
                    <select id="sumber_penerangan-${i}" name="sumber_penerangan-${i}" required>
                        <option value="" disabled selected>Pilih Sumber Penerangan</option>
                        <option value="PLN Subsidi">PLN Subsidi</option>
                        <option value="PLN Non Subsidi">PLN Non Subsidi</option>
                        <option value="Tidak Punya">Tidak Punya</option>
                    </select>
                </div>
                <div class="input-box">
                    <label class="details" for="status_rumah-${i}">Status Rumah</label>
                    <select id="status_rumah-${i}" name="status_rumah-${i}" required>
                        <option value="" disabled selected>Pilih Status Rumah</option>
                        <option value="Milik sendiri">Milik sendiri</option>
                        <option value="Milik orang tua">Milik orang tua</option>
                        <option value="Kontrak/sewa">Kontrak/sewa</option>
                        <option value="Bebas sewa">Bebas sewa</option>
                    </select>
                </div>
            </div>
            `;
            formsContainer.appendChild(form);
        }
    }
</script>
@endsection
