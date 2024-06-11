@extends('templates.detail')
@section('detail-content')
@php
    use Carbon\Carbon;
    Carbon::setLocale('id');
@endphp
    <div class="input-box">
        <label class="details" style="font-weight: bold">Nama Lengkap</label>
        <p>{{ $surat->warga->nama }}</p>
    </div>
    <div class="input-box">
        <label class="details" style="font-weight: bold">NIK</label>
        <p>{{ $surat->warga->nik }}</p>
    </div>
    <div class="input-box">
        <label class="details" style="font-weight: bold">Jenis Kelamin</label>
        <p>{{ $surat->warga->jenis_kelamin }}</p>
    </div>
    <div class="input-box">
        <label class="details" style="font-weight: bold">Tempat, Tgl Lahir</label>
        <p>{{ $surat->warga->tempat_lahir }}, {{ Carbon::parse($surat->warga->tanggal_lahir)->translatedFormat('j F Y') }}</p>
    </div>
    <div class="input-box">
        <label class="details" style="font-weight: bold">Agama</label>
        <p>{{ $surat->warga->agama }}</p>
    </div>
    <div class="input-box">
        <label class="details" style="font-weight: bold">Status Perkawinan</label>
        <p>{{ $surat->warga->status_kawin }}</p>
    </div>
    <div class="input-box">
        <label class="details" style="font-weight: bold">Alamat Domisili</label>
        <p>{{ $surat->warga->alamat_domisili }}</p>
    </div>
    <div class="input-box">
        <label class="details" style="font-weight: bold">Jenis Surat</label>
        <p>{{ $surat->jenis_surat->nama_jenis_surat }}</p>
    </div>
    <div class="input-box">
        <label class="details" style="font-weight: bold">Keperluan Surat</label>
        <p>{{ $surat->keperluan_surat }}</p>
    </div>
    <div class="input-box">
        <label class="details" style="font-weight: bold">Status Surat</label>
        <p>{{ $surat->status_surat }}</p>
    </div>
    <div class="input-box">
        <label class="details" style="font-weight: bold">Nomor Surat</label>
        <p>{{ $surat->nomor_surat ? $surat->nomor_surat : '-' }}</p>
    </div>
@endsection
