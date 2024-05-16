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
            <p>Ajukan Surat</p>
        </div>
        <div class="content">
            <form action="#">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Nama Lengkap</span>
                        <input type="text" placeholder="" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Agama</span>
                        <input type="text" placeholder="" required>
                    </div>
                    <div class="input-box">
                        <span class="details">No KTP</span>
                        <input type="text" placeholder="" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Pekerjaan</span>
                        <input type="text" placeholder="" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Tempat Tgl Lahir</span>
                        <input type="text" placeholder="" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Status</span>
                        <input type="text" placeholder="" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Jenis Kelamin</span>
                        <input type="text" placeholder="" required>
                    </div>
                </div>

                <div class="button2">
    <a href="{{ url('/ajukansurat2') }}" class="butt">Next</a>
                </div>
            </form>
        </div>
    </div>
@endsection
