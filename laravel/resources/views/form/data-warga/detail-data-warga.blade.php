@extends('templates.detail')
@php
    use Carbon\Carbon;
    Carbon::setLocale('id');
@endphp

@section('detail-content')
    <div class="input-box">
        <label for="nik" class="details">NIK</label>
        <p id="nik">{{ $warga->nik }}</p>
    </div>
    <div class="input-box">
        <label for="nama" class="details">Nama Lengkap</label>
        <p id="nama">{{ $warga->nama }}</p>
    </div>
    <div class="input-box">
        <label for="rt" class="details">RT</label>
        <p id="rt">{{ $warga->rt->nama_rt }}</p>
    </div>
    <div class="input-box">
        <label for="rw" class="details">RW</label>
        <p id="rw">{{ $warga->rw }}</p>
    </div>
    <div class="input-box">
        <label for="jenis_kelamin" class="details">Jenis Kelamin</label>
        <p id="jenis_kelamin">{{ $warga->jenis_kelamin }}</p>
    </div>
    <div class="input-box">
        <label for="golongan_darah" class="details">Golongan Darah</label>
        <p id="golongan_darah">{{ $warga->golongan_darah }}</p>
    </div>
    <div class="input-box">
        <label for="tempat_lahir" class="details">Tempat Lahir</label>
        <p id="tempat_lahir">{{ $warga->tempat_lahir }}</p>
    </div>
    <div class="input-box">
        <label for="tanggal_lahir" class="details">Tanggal Lahir</label>
        <p id="tanggal_lahir">{{ Carbon::parse($warga->tanggal_lahir)->translatedFormat('j F Y') }}</p>
    </div>
    <div class="input-box">
        <label for="alamat_ktp" class="details">Alamat KTP</label>
        <p id="alamat_ktp">{{ $warga->alamat_ktp }}</p>
    </div>
    <div class="input-box">
        <label for="alamat_domisili" class="details">Alamat Domisili</label>
        <p id="alamat_domisili">{{ $warga->alamat_domisili }}</p>
    </div>
    <div class="input-box">
        <label for="no_hp" class="details">No. HP</label>
        <p id="no_hp">{{ $warga->no_hp }}</p>
    </div>
    <div class="input-box">
        <label for="agama" class="details">Agama</label>
        <p id="agama">{{ $warga->agama }}</p>
    </div>
    <div class="input-box">
        <label for="pekerjaan" class="details">Pekerjaan</label>
        <p id="pekerjaan">{{ $warga->pekerjaan }}</p>
    </div>
    <div class="input-box">
        <label for="status_kawin" class="details">Status Kawin</label>
        <p id="status_kawin">{{ $warga->status_kawin }}</p>
    </div>
    <div class="input-box">
        <label for="gambar_ktp" class="details">Gambar KTP</label>
        <img id="gambar_ktp" src="{{ asset('assets/imgs/ktp/' . $warga->gambar_ktp) }}" alt="Gambar KTP" style="width: 150px; height: 150px;">
    </div>
    <div class="input-box">
        <label for="status_warga" class="details">Status Warga</label>
        <p id="status_warga">{{ $warga->status_warga }}</p>
    </div>
    <div class="input-box">
        <label for="tanggal_aktif" class="details">Data Update</label>
        <p id="tanggal_aktif">{{ Carbon::parse($warga->updated_at)->translatedFormat('j F Y') }}</p>
    </div>
    <div class="input-box">
        <label for="catatan_status" class="details">Catatan Status</label>
        <p id="catatan_status">{{ $warga->catatan_status }}</p>
    </div>
@endsection
