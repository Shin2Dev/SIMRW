@extends('templates.form')
@section('form-content')

{{-- PERBAIKAN --}}
<div class="input-box">
    <label class="details">Jenis Surat</label>
    <select id="jenis-surat" required>
        <option value="" disabled selected>Pilih Jenis Surat</option>
        <option value="surat1">Surat Pindah</option>
        <option value="surat2">Surat Pengantar</option>
        {{-- <option value="surat3">Surat Keterangan Tidak Mampu</option> --}}
    </select>
</div>

{{-- GAP --}}
<div class="input-box"></div>

{{-- FORM SURAT 1 --}}
<section class="forms" id="form1" style="display: none">
    <div class="user-details">
        <div class="input-box">
            <label for="nik" class="details">NIK</label>
            {{-- <input type="text" id="nik" name="nik" value="{{ $user->nik }}" readonly> --}}
            <input type="text" id="nik" name="nik" value="1234567890" readonly>
        </div>
        <div class="input-box">
            <label for="nama" class="details">Nama Lengkap</label>
            {{-- <input type="text" id="nama" name="nama" value="{{ $user->nama }}" readonly> --}}
            <input type="text" id="nama" name="nama" value="Muhammad" readonly>
        </div>
        <div class="input-box">
            <label for="tempat_lahir" class="details">Tempat Lahir</label>
            {{-- <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ $user->tempat_lahir }}" readonly> --}}
            <input type="text" id="tempat_lahir" name="tempat_lahir" value="Jakarta" readonly>
        </div>
        <div class="input-box">
            <label for="tanggal_lahir" class="details">Tanggal Lahir</label>
            {{-- <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ $user->tanggal_lahir }}" readonly> --}}
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="1999-01-01" readonly>
        </div>
        <div class="input-box">
            <label for="alamat" class="details">Alamat Domisili</label>
            {{-- <input type="text" id="alamat" name="alamat" value="{{ $user->alamat }}" readonly> --}}
            <input type="text" id="alamat" name="alamat" value="Jalan Kuning" readonly>
        </div>
        <div class="input-box">
            <label for="alasan" class="details">Alasan Membuat Surat Ini</label>
            <textarea id="alasan" name="alasan" required autocomplete="off"></textarea>
        </div>
    </div>
</section>

<section class="forms" id="form2" style="display: none">
    <div class="user-details">
        <div class="input-box">
            <label for="nama" class="details">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required autocomplete="off">
        </div>
        <div class="input-box">
            <label for="alamat" class="details">Alamat Domisili</label>
            <input type="text" id="alamat" name="alamat" value="{{ old('alamat') }}" required autocomplete="off">
        </div>
    </div>
</section>


<script>
    document.getElementById('jenis-surat').addEventListener('change', function() {
        let selectedValue = this.value;
        let forms = document.querySelectorAll('.forms');
        forms.forEach(function(f){
            f.style.display = 'none';
        });

        if (selectedValue === 'surat1') {
            document.getElementById('form1').style.display = 'block';
        } else if (selectedValue === 'surat2') {
            document.getElementById('form2').style.display = 'block';
        }
    });
</script>
@endsection
