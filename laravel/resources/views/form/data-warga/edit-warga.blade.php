@extends('templates.form')

@section('form-content')
    <div class="input-box">
        <label for="nik" class="details">NIK</label>
        <input type="text" id="nik" name="nik" value="{{ old('nik', $warga->nik) }}" required autocomplete="off">
    </div>
    <div class="input-box">
        <label for="nama" class="details">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" value="{{ old('nama', $warga->nama) }}" required autocomplete="off">
    </div>
    <div class="input-box">
        <label for="id_rt" class="details">RT</label>
        <input type="number" id="id_rt" name="id_rt" value="{{ old('rt', $warga->rt) }}" readonly>
    </div>
    <div class="input-box">
        <label for="rw" class="details">RW</label>
        <input type="text" id="rw" name="rw" value="{{ old('rw', $warga->rw) }}" readonly>
    </div>
    <div class="input-box">
        <label for="jenis_kelamin" class="details">Jenis Kelamin</label>
        <select id="jenis_kelamin" name="jenis_kelamin" required>
            <option value="" disabled {{ old('jenis_kelamin') ? '' : 'selected' }}>Pilih Jenis Kelamin</option>
            <option value="Laki-laki" {{ old('jenis_kelamin', $warga->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
            <option value="Perempuan" {{ old('jenis_kelamin', $warga->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
        </select>
    </div>
    <div class="input-box">
        <label for="golongan_darah" class="details">Golongan Darah</label>
        <select id="golongan_darah" name="golongan_darah" required>
            <option value="" disabled {{ old('golongan_darah') ? '' : 'selected' }}>Pilih Golongan Darah</option>
            <option value="A" {{ old('golongan_darah', $warga->golongan_darah) == 'A' ? 'selected' : '' }}>A</option>
            <option value="B" {{ old('golongan_darah', $warga->golongan_darah) == 'B' ? 'selected' : '' }}>B</option>
            <option value="AB" {{ old('golongan_darah', $warga->golongan_darah) == 'AB' ? 'selected' : '' }}>AB</option>
            <option value="O" {{ old('golongan_darah', $warga->golongan_darah) == 'O' ? 'selected' : '' }}>O</option>
        </select>
    </div>
    <div class="input-box">
        <label for="tempat_lahir" class="details">Tempat Lahir</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir', $warga->tempat_lahir) }}" required autocomplete="off">
    </div>
    <div class="input-box">
        <label for="tanggal_lahir" class="details">Tanggal Lahir</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir', $warga->tanggal_lahir) }}" required autocomplete="off">
    </div>
    <div class="input-box">
        <label for="alamat_ktp" class="details">Alamat KTP</label>
        <input type="text" id="alamat_ktp" name="alamat_ktp" value="{{ old('alamat_ktp', $warga->alamat_ktp) }}" required autocomplete="off">
    </div>
    <div class="input-box">
        <label for="alamat_domisili" class="details">Alamat Domisili</label>
        <input type="text" id="alamat_domisili" name="alamat_domisili" value="{{ old('alamat_domisili', $warga->alamat_domisili) }}" required autocomplete="off">
    </div>
    <div class="input-box">
        <label for="no_hp" class="details">No. HP</label>
        <input type="tel" id="no_hp" name="no_hp" value="{{ old('no_hp', $warga->no_hp) }}" required autocomplete="off">
    </div>
    <div class="input-box">
        <label for="agama" class="details">Agama</label>
        <select id="agama" name="agama" required>
            <option value="" disabled {{ old('agama') ? '' : 'selected' }}>Pilih Agama</option>
            <option value="Islam" {{ old('agama', $warga->agama) == 'Islam' ? 'selected' : '' }}>Islam</option>
            <option value="Kristen" {{ old('agama', $warga->agama) == 'Kristen' ? 'selected' : '' }}>Kristen</option>
            <option value="Katolik" {{ old('agama', $warga->agama) == 'Katolik' ? 'selected' : '' }}>Katolik</option>
            <option value="Hindu" {{ old('agama', $warga->agama) == 'Hindu' ? 'selected' : '' }}>Hindu</option>
            <option value="Buddha" {{ old('agama', $warga->agama) == 'Buddha' ? 'selected' : '' }}>Buddha</option>
            <option value="Konghucu" {{ old('agama', $warga->agama) == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
        </select>
    </div>
    <div class="input-box">
        <label for="pekerjaan" class="details">Pekerjaan</label>
        <input type="text" id="pekerjaan" name="pekerjaan" value="{{ old('pekerjaan', $warga->pekerjaan) }}" required autocomplete="off">
    </div>
    <div class="input-box">
        <label for="status_kawin" class="details">Status Kawin</label>
        <select id="status_kawin" name="status_kawin" required>
            <option value="" disabled {{ old('status_kawin') ? '' : 'selected' }}>Pilih Status Kawin</option>
            <option value="Belum Kawin" {{ old('status_kawin', $warga->status_kawin) == 'Belum Kawin' ? 'selected' : '' }}>Belum Kawin</option>
            <option value="Kawin" {{ old('status_kawin', $warga->status_kawin) == 'Kawin' ? 'selected' : '' }}>Kawin</option>
            <option value="Cerai Hidup" {{ old('status_kawin', $warga->status_kawin) == 'Cerai Hidup' ? 'selected' : '' }}>Cerai Hidup</option>
            <option value="Cerai Mati" {{ old('status_kawin', $warga->status_kawin) == 'Cerai Mati' ? 'selected' : '' }}>Cerai Mati</option>
        </select>
    </div>
    <div class="input-box">
        <label for="upload_ktp" class="details">Upload KTP</label>
        <input type="file" id="upload_ktp" name="upload_ktp" accept="image/jpeg, image/png" onchange="previewImage(event)">
        <small>Ukuran maksimal: 1MB. Format yang diperbolehkan: jpg, jpeg, png.</small>
        <small id="file-size-alert" style="color: red; display: none;">Ukuran file terlalu besar. Maksimal 1MB.</small>
    </div>
    <div class="input-box">
        <label for="preview_ktp" class="details">Preview KTP</label>
        <img id="preview_ktp" src="{{ asset('assets/imgs/ktp/' . $warga->gambar_ktp) }}" style="width: 150px; height: 150px; margin-top: 10px; background-color: black;">
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
