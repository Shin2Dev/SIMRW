@extends('templates.form')

@section('form-content')
    <div class="input-box">
        <label for="rt" class="details">RT <span style="color: red;">*</span></label>
        <input type="number" id="rt" name="rt" value="{{ $warga->rt->nama_rt }}" readonly>
    </div>
    <div class="input-box">
        <label for="judul_info" class="details">Judul</label>
        <input type="text" id="judul_info" name="judul_info" required autocomplete="off">
    </div>
    <div class="input-box">
        <label for="id_kategori_info" class="details">Kategori</label>
        <select id="id_kategori_info" name="id_kategori_info" required>
            <option value="" disabled selected>Pilih Kategori</option>
            @foreach ($kategoriInfos as $kategoriInfo)
                <option value="{{ $kategoriInfo->id }}">{{ $kategoriInfo->nama_kategori_info }}</option>
            @endforeach
        </select>
    </div>
    <div class="input-box">
        <label for="status_info" class="details">Status</label>
        <select id="status_info" name="status_info" required>
            <option value="" disabled selected>Pilih Status</option>
            <option value="Publik">Publik</option>
            <option value="Draf">Draf</option>
        </select>
    </div>
    <div class="input-box">
        <label for="tanggal_info" class="details">Tanggal</label>
        <input type="date" id="tanggal_info" name="tanggal_info" required autocomplete="off">
    </div>
    <div class="input-box">
        <label for="tempat_info" class="details">Tempat</label>
        <input type="text" id="tempat_info" name="tempat_info" required autocomplete="off">
    </div>
    <div class="input-box">
        <label for="deskripsi_info" class="details">Deskripsi</label>
        <textarea id="deskripsi_info" name="deskripsi_info" required></textarea>
    </div>
    <div class="input-box">
        <label for="gambar_info" class="details">Gambar</label>
        <input type="file" id="gambar_info" name="gambar_info" accept="image/jpeg, image/png" required onchange="previewImage(event)">
        <small>Ukuran maksimal: 2MB. Format yang diperbolehkan: jpg, jpeg, png.</small>
        <small id="file-size-alert" style="color: red; display: none;">Ukuran file terlalu besar. Maksimal 2MB.</small>
    </div>
    <div class="input-box">
        <label for="preview" class="details">Preview Foto Informasi Kegiatan</label>
        <img id="preview" src="#" style="width: 150px; height: 150px; margin-top: 10px; background-color: black;">
    </div>
    
    <script>
        function previewImage(event) {
            var file = event.target.files[0];
            var alertElement = document.getElementById('file-size-alert');
            var output = document.getElementById('preview');
            
            if (file.size > 2 * 1024 * 1024) { // 2MB in bytes
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