@extends('templates.form')
@section('form-content')   
@php
    use Carbon\Carbon;
    Carbon::setLocale('id');
@endphp
<div class="input-box">
    <label class="details" style="font-weight: bold">Nama Lengkap</label>
    <input type="text" readonly value="{{ $surat->warga->nama }}">
</div>
<div class="input-box">
    <label class="details" style="font-weight: bold">NIK</label>
    <input type="text" readonly value="{{ $surat->warga->nik }}">
</div>
<div class="input-box">
    <label class="details" style="font-weight: bold">Jenis Kelamin</label>
    <input type="text" readonly value="{{ $surat->warga->jenis_kelamin }}">
</div>
<div class="input-box">
    <label class="details" style="font-weight: bold">Tempat, Tgl Lahir</label>
    <input type="text" readonly value="{{ $surat->warga->tempat_lahir }}, {{ Carbon::parse($surat->warga->tanggal_lahir)->translatedFormat('j F Y') }}">
</div>
<div class="input-box">
    <label class="details" style="font-weight: bold">Agama</label>
    <input type="text" readonly value="{{ $surat->warga->agama }}">
</div>
<div class="input-box">
    <label class="details" style="font-weight: bold">Status Perkawinan</label>
    <input type="text" readonly value="{{ $surat->warga->status_kawin }}">
</div>
<div class="input-box">
    <label class="details" style="font-weight: bold">Alamat Domisili</label>
    <input type="text" readonly value="{{ $surat->warga->alamat_domisili }}">
</div>
<div class="input-box">
    <label class="details" style="font-weight: bold">Jenis Surat</label>
    <input type="text" readonly value="{{ $surat->jenis_surat->nama_jenis_surat }}">
</div>
<div class="input-box">
    <label class="details" style="font-weight: bold">Keperluan Surat</label>
    <input type="text" readonly value="{{ $surat->keperluan_surat }}">
</div>
@endsection
