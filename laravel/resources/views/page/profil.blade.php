@extends('templates.sidebar')
@section('main-content')
@php
    use Carbon\Carbon;
    Carbon::setLocale('id');
@endphp
    @include('templates.headers')
    @include('templates.toast')

    <section class="container2">
        <header class="title">
            <h1>{{ $title }}</h1>
        </header>

        <article class="content">
            <section class="user-details">
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
                    <p id="tanggal_lahir">{{ Carbon::parse($warga->tanggal_lahir)->translatedFormat('d F Y') }}</p>
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
            </section>
        </article>

        {{-- Tombol Ganti Password --}}
        <div class="button">
            {{-- <a href="#" class="btn"><ion-icon name="create-outline"></ion-icon> Perubahan Data</a> --}}
            <a href="{{ route('ubah_password_index', ['role' => $role]) }}" class="btn"><ion-icon name="lock-closed-outline"></ion-icon> Ganti Password</a>
        </div>
    </section>
@endsection
