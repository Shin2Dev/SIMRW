@extends('rt.indexrt')
@section('main')
    <link rel="stylesheet" href="assets/css/tambahwarga.css">
    <div class="topbar" style="background-color: #B0C4DE">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        <div class="judul">
            <h1>RT</h1>
        </div>
        <div class="user">
        </div>
    </div>

    <div class="container2">
        <div class="title">
            <p>Edit Data Warga</p>
        </div>

        {{-- @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <div class="content">
            <form action="{{ route('pages.updatewarga', ['id' => $warga -> id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Nama Lengkap</span>
                        <input type="text" name="nama" placeholder="" required value="{{ old('nama' , $warga -> nama) }}">
                    </div>
                    <div class="input-box">
                        <span class="details">NIK</span>
                        <input type="text" name="nik" placeholder="" required value="{{ old('nik' , $warga -> nik) }}">
                    </div>
                    <div class="input-box">
                        <span class="details">Alamat</span>
                        <input type="text" name="alamat" placeholder="" required value="{{ old('alamat' , $warga -> alamat) }}">
                    </div>
                    <div class="input-box">
                        <span class="details">Tgl Lahir</span>
                        <input type="text" name="tanggal_lahir" placeholder="" required value="{{ old('tanggal_lahir' , $warga -> tanggal_lahir) }}">
                    </div>
                    <div class="input-box">
                        <span class="details">No. HP</span>
                        <input type="text" name="no_hp" placeholder="" required value="{{ old('no_hp' , $warga -> no_hp) }}">
                    </div>
                    <div class="input-box">
                        <span class="details">Jenis Kelamin</span>
                        <input type="text" name="jenis_kelamin" placeholder="" required value="{{ old('jenis_kelamin' , $warga -> jenis_kelamin) }}">
                    </div>
                    <div class="input-box">
                        <span class="details">Status Kawin</span>
                        <input type="text" name="status_warga" placeholder="" required value="{{ old('status_warga' , $warga -> status_warga) }}">
                    </div>
                </div>

                <div class="button">
                    <button class="tom1" type="submit">Edit</button>
                    <a class="tom2" href="{{ url('/datawargart') }}" style="padding: 15px 30px; text-decoration: none;">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
