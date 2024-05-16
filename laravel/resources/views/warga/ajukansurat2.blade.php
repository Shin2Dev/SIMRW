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
                    <div class="input-box2">
                        <span class="details">Alamat</span>
                        <input type="text" style="height: 180px;" placeholder="" required>
                    </div>
                    <div class="input-box2">
                        <span class="details">Tujuan</span>
                        <input type="text" style="height: 160px;" placeholder="" required>
                    </div>
                </div>

                <div class="button">
                    <a href="{{ url('/ajukansurat') }}" class="butt2">Back</a>
                    <button class="tom3" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
