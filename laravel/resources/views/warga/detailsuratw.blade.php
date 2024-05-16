@extends('warga.indexwarga')
@section('main')
    <link rel="stylesheet" href="assets/css/tambahwarga.css">
    <div class="topbar" style="background-color: #B0C4DE">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        <div class="judul">
            <h1>WARGA</h1>
        </div>
        <div class="user">
        </div>
    </div>

    <div class="container2">
        <div class="title">
            <p>Detail Pengajuan Surat</p>
        </div>
        <div class="content">
            <form action="#">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details" style="font-weight: bold">Nama Lengkap</span>
                        <p>Lorem ipsum</p>
                    </div>
                    <div class="input-box">
                        <span class="details"style="font-weight: bold">Agama</span>
                        <p>Lorem</p>
                    </div>
                    <div class="input-box">
                        <span class="details" style="font-weight: bold">No KTP</span>
                        <p>1234567</p>

                    </div>
                    <div class="input-box">
                        <span class="details" style="font-weight: bold">Pekerjaan</span>
                        <p>Lorem ipsum dolor .</p>

                    </div>
                    <div class="input-box">
                        <span class="details" style="font-weight: bold">Tgl Lahir</span>

                        <p>20 Mei 2003L</p>

                    </div>
                    <div class="input-box">
                        <span class="details" style="font-weight: bold">Status</span>
                        <p>Lorem</p>

                    </div>
                    <div class="input-box">
                        <span class="details" style="font-weight: bold">Jenis Kelamin</span>
                        <p>Lorem</p>
                    </div>
                    <div class="input-box">
                        <span class="details" style="font-weight: bold">Alamat</span>
                        <p>Lorem ipsum dolor .</p>

                    </div>
                    <div class="input-box">
                        <span class="details" style="font-weight: bold">Tujuan</span>
                        <p>Lorem ipsum dolor sit amet.</p>

                    </div>
                </div>

                <div class="button">
                    <a href="{{ url('/surat') }}" class="butt2">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
