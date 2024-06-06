@extends('templates.form')

@section('form-content')
    <div class="input-box">
        <label for="id_rt" class="details">RT <span style="color: red;">*</span></label>
        <input type="number" id="id_rt" name="id_rt" value="1" readonly>
    </div>
    <div class="input-box">
        <label for="judul" class="details">Judul</label>
        <input type="text" id="judul" name="judul" required autocomplete="off">
    </div>
    <div class="input-box">
        <label for="kategori" class="details">Kategori</label>
        <select id="kategori" name="kategori" required>
            <option value="" disabled selected>Pilih Kategori</option>
            @foreach ($kategoriInfos as $kategoriInfo)
                <option value="{{ $kategoriInfo->id }}">{{ $kategoriInfo->nama_kategori }}</option>
            @endforeach
        </select>
    </div>
    <div class="input-box">
        <label for="status" class="details">Status</label>
        <select id="status" name="status" required>
            <option value="" disabled selected>Pilih Status</option>
            <option value="Publik">Publik</option>
            <option value="Draf">Draf</option>
        </select>
    </div>
    <div class="input-box">
        <label for="tanggal" class="details">Tanggal</label>
        <input type="date" id="tanggal" name="tanggal" required autocomplete="off">
    </div>
    <div class="input-box">
        <label for="tempat" class="details">Tempat</label>
        <input type="text" id="tempat" name="tempat" required autocomplete="off">
    </div>
    <div class="input-box">
        <label for="deskripsi" class="details">Deskripsi</label>
        <textarea id="deskripsi" name="deskripsi" required></textarea>
    </div>
    <div class="input-box">
        <label for="gambar" class="details">Gambar</label>
        <input type="file" id="gambar" name="gambar" accept="image/jpeg, image/png" required onchange="previewImage(event)">
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