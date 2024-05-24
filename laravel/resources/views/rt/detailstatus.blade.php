@extends('rt.indexrt')
@section('main')
    {{-- <link rel="stylesheet" href="assets/css/detailgantistatus.css"> --}}
    <link rel="stylesheet" href="assets/css/detailgantistatus.css">
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
            <p>Detail Data Warga</p>
        </div>
        <div class="content">
            <form action="#">
                @csrf

                <div class="user-details">
                    <div class="input-box">
                        <span class="details" style="font-weight: bold">Nama Lengkap</span>
                        <p>{{ $warga -> nama }}</p>
                    </div>
                    <div class="input-box">
                        <span class="details" style="font-weight: bold">NIK</span>
                        <p>{{ $warga -> nik }}</p>
                    </div>
                    <div class="input-box">
                        <span class="details" style="font-weight: bold">Alamat</span>
                        <p>{{ $warga -> alamat }}</p>
                    </div>
                    <div class="input-box">
                        <span class="details" style="font-weight: bold">Tgl Lahir</span>
                        <p>{{ $warga -> tanggal_lahir }}</p>
                    </div>
                    <div class="input-box">
                        <span class="details" style="font-weight: bold">No. Hp</span>
                        <p>{{ $warga -> no_hp }}</p>
                    </div>
                    <div class="input-box">
                        <span class="details" style="font-weight: bold">Jenis Kelamin</span>
                        <p>{{ $warga -> jenis_kelamin }}</p>
                    </div>
                    <div class="input-box">
                        <span class="details" style="font-weight: bold">Status Kawin</span>
                        {{ $warga -> status_kawin = $warga -> status_kawin == true ? "Sudah Menikah" : "Belum Menikah" }}
                    </div>
                </div>
                <div class="user-details">
                    <div class="input-box">
                        <span class="details" style="font-weight: bold">Status</span>
                        <p>{{ $warga -> status_warga = $warga -> status_warga == true ? "Aktif" : "Tidak Aktif"}}</p>
                    </div>
                    @if ( $warga -> status_warga == false)
                        <div class="input-box">
                            <span class="details"style="font-weight: bold">Tanggal Lapor</span>
                            <p>20/10/2024</p>
                        </div>
                        <div class="input-box">
                            <span class="details" style="font-weight: bold">Catatan Peristiwa</span>
                            <p>Warga pindah di kota Madiun untuk keperluan pekerjaan</p>
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection
