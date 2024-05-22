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
                        <span class="details">NIK</span>
                        <input type="text" placeholder="" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Alamat</span>
                        <input type="text" placeholder="" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Tgl Lahir</span>
                        <input type="text" placeholder="" required>
                    </div>
                    <div class="input-box">
                        <span class="details">No. HP</span>
                        <input type="text" placeholder="" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Jenis Kelamin</span>
                        <input type="text" placeholder="" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Status</span>
                        <input type="text" placeholder="" required>
                    </div>
                </div>

                <div class="button">
                    <button class="tom1" type="submit">Edit</button>
                    <button class="tom2" type="submit">Back</button>
                </div>
            </form>
        </div>
    </div>
@endsection
