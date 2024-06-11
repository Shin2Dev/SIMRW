@extends('templates.form')
@section('form-content')

{{-- PERBAIKAN --}}
<div class="input-box">
    <label for="jenis_surat" class="details">Jenis Surat</label>
    <select id="jenis_surat" name="jenis_surat"  required>
        <option value="" disabled selected>Pilih Jenis Surat</option>
        @foreach ($jenis_surats as $jenis)
            <option value="{{ $jenis->nama_jenis_surat }}">{{ $jenis->nama_jenis_surat }}</option>
        @endforeach
    </select>
</div>
<div class="input-box">
    <label for="nik" class="details">NIK</label>
    <input type="text" id="nik" name="nik" value="{{ $warga->nik }}" readonly>
</div>
<div class="input-box">
    <label for="nama" class="details">Nama Lengkap</label>
    <input type="text" id="nama" name="nama" value="{{ $warga->nama }}" readonly>
</div>
<div class="input-box">
    <label for="tempat_lahir" class="details">Tempat Lahir</label>
    <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ $warga->tempat_lahir }}" readonly>
</div>
<div class="input-box">
    <label for="tanggal_lahir" class="details">Tanggal Lahir</label>
    <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ $warga->tanggal_lahir }}" readonly>
</div>
<div class="input-box">
    <label class="details" style="font-weight: bold">Agama</label>
    <input type="text" readonly value="{{ $warga->agama }}">
</div>
<div class="input-box">
    <label class="details" style="font-weight: bold">Status Perkawinan</label>
    <input type="text" readonly value="{{ $warga->status_kawin }}">
</div>
<div class="input-box">
    <label for="alamat" class="details">Alamat Domisili</label>
    <input type="text" id="alamat" name="alamat" value="{{ $warga->alamat_domisili }}" readonly>
</div>
<div class="input-box">
    <label for="keperluan" class="details">Keperluan Surat</label>
    <textarea id="keperluan" name="keperluan" required autocomplete="off"></textarea>
</div>
@endsection
