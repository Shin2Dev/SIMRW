@extends('templates.form')

@section('form-content')
    <div class="input-box">
        <label for="nik" class="details">NIK <span style="color: red;">*</span></label>
        <input type="text" id="nik" name="nik" required autocomplete="off">
    </div>
    <div class="input-box">
        <label for="nama" class="details">Nama Lengkap <span style="color: red;">*</span></label>
        <input type="text" id="nama" name="nama" required autocomplete="off">
    </div>
    <div class="input-box">
        <label for="id_rt" class="details">RT <span style="color: red;">*</span></label>
        <input type="number" id="id_rt" name="id_rt" value="1" readonly>
    </div>
    <div class="input-box">
        <label for="rw" class="details">RW <span style="color: red;">*</span></label>
        <input type="text" id="rw" name="rw" value="001" readonly>
    </div>
    <div class="input-box">
        <label for="jenis_kelamin" class="details">Jenis Kelamin <span style="color: red;">*</span></label>
        <select id="jenis_kelamin" name="jenis_kelamin" required>
            <option value="" disabled selected>Pilih Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>
    <div class="input-box">
        <label for="golongan_darah" class="details">Golongan Darah <span style="color: red;">*</span></label>
        <select id="golongan_darah" name="golongan_darah" required>
            <option value="" disabled selected>Pilih Golongan Darah</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
            <option value="O">O</option>
        </select>
    </div>
    <div class="input-box">
        <label for="tempat_lahir" class="details">Tempat Lahir <span style="color: red;">*</span></label>
        <input type="text" id="tempat_lahir" name="tempat_lahir" required autocomplete="off">
    </div>
    <div class="input-box">
        <label for="tanggal_lahir" class="details">Tanggal Lahir <span style="color: red;">*</span></label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required autocomplete="off">
    </div>
    <div class="input-box">
        <label for="alamat_ktp" class="details">Alamat KTP <span style="color: red;">*</span></label>
        <input type="text" id="alamat_ktp" name="alamat_ktp" required autocomplete="off">
    </div>
    <div class="input-box">
        <label for="alamat_domisili" class="details">Alamat Domisili <span style="color: red;">*</span></label>
        <input type="text" id="alamat_domisili" name="alamat_domisili" required autocomplete="off">
    </div>
    <div class="input-box">
        <label for="no_hp" class="details">No. HP <span style="color: red;">*</span></label>
        <input type="tel" id="no_hp" name="no_hp" required autocomplete="off">
    </div>
    <div class="input-box">
        <label for="agama" class="details">Agama <span style="color: red;">*</span></label>
        <select id="agama" name="agama" required>
            <option value="" disabled selected>Pilih Agama</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
        </select>
    </div>
    <div class="input-box">
        <label for="pekerjaan" class="details">Pekerjaan <span style="color: red;">*</span></label>
        <input type="text" id="pekerjaan" name="pekerjaan" required autocomplete="off">
    </div>
    <div class="input-box">
        <label for="status_kawin" class="details">Status Kawin <span style="color: red;">*</span></label>
        <select id="status_kawin" name="status_kawin" required>
            <option value="" disabled selected>Pilih Status Kawin</option>
            <option value="Belum Kawin">Belum Kawin</option>
            <option value="Kawin">Kawin</option>
            <option value="Cerai Hidup">Cerai Hidup</option>
            <option value="Cerai Mati">Cerai Mati</option>
        </select>
    </div>
    <div class="input-box">
        <label for="upload_ktp" class="details">Upload KTP <span style="color: red;">*</span></label>
        <input type="file" id="upload_ktp" name="upload_ktp" accept="image/jpeg, image/png" required onchange="previewImage(event)">
        <small>Ukuran maksimal: 1MB. Format yang diperbolehkan: jpg, jpeg, png.</small>
        <small id="file-size-alert" style="color: red; display: none;">Ukuran file terlalu besar. Maksimal 1MB.</small>
    </div>
    <div class="input-box">
        <label for="preview_ktp" class="details">Preview KTP</label>
        <img id="preview_ktp" src="#" style="width: 150px; height: 150px; margin-top: 10px; background-color: black;">
    </div>

    <script>
        function previewImage(event) {
            var file = event.target.files[0];
            var alertElement = document.getElementById('file-size-alert');
            var output = document.getElementById('preview_ktp');
            
            if (file.size > 1 * 1024 * 1024) { // 1MB in bytes
                alertElement.style.display = 'block';
                output.src = '#';
                output.style.backgroundColor = 'black';
                return;
            } else {
                alertElement.style.display = 'none';
            }
            
            var reader = new FileReader();
            reader.onload = function(){
                output.src = reader.result;
                output.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    </script>
@endsection
