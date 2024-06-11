@extends('templates.detail')
@section('detail-content')
    <div class="input-box">
        <label for="nik" class="details">NIK</label>
        <p id="nik">{{ $calons->warga->nik }}</p>
    </div>
    <div class="input-box">
        <label for="nama" class="details">Nama Lengkap</label>
        <p id="nama">{{ $calons->warga->nama }}</p>
    </div>
    <div class="input-box">
        <label for="pekerjaan" class="details">Pekerjaan</label>
        <p id="pekerjaan">{{ $calons->pekerjaan }}</p>
    </div>
    <div class="input-box">
        <label for="penghasilan" class="details">Penghasilan Bulanan</label>
        <p id="penghasilan">{{ $calons->penghasilan_bulanan }}</p>
    </div>
    <div class="input-box">
        <label for="usia" class="details">Usia</label>
        <p id="usia">{{ $calons->usia }}</p>
    </div>
    <div class="input-box">
        <label for="pendidikan" class="details">Pendidikan</label>
        <p id="pendidikan">{{ $calons->pendidikan }}</p>
    </div>
    <div class="input-box">
        <label for="jenis_lantai" class="details">Jenis Lantai Rumah</label>
        <p id="jenis_lantai">{{ $calons->jenis_lantai }}</p>
    </div>
    <div class="input-box">
        <label for="jenis_dinding" class="details">Jenis Dinding Rumah</label>
        <p id="jenis_dinding">{{ $calons->jenis_dinding }}</p>
    </div>
    <div class="input-box">
        <label for="luas_bangunan" class="details">Luas Bangunan Rumah</label>
        <p id="luas_bangunan">{{ $calons->luas_bangunan }}</p>
    </div>
    <div class="input-box">
        <label for="jenis_kendaraan" class="details">Jenis Kendaraan</label>
        <p id="jenis_kendaraan">{{ $calons->kendaraan }}</p>
    </div>
    <div class="input-box">
        <label for="sumber_penerangan" class="details">Sumber Penerangan</label>
        <p id="sumber_penerangan">{{ $calons->sumber_penerangan }}</p>
    </div>
    <div class="input-box">
        <label for="status_rumah" class="details">Status Kepemilikan Rumah</label>
        <p id="status_rumah">{{ $calons->status_kepemilikan_rumah }}</p>
    </div>
@endsection
