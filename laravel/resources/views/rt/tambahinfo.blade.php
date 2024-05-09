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
            <p>Tambah Informasi</p>
        </div>
        <div class="content">
            <form action="#">
                <div class="user-details">
                    <div class="input-box2">
                        <span class="details">Judul</span>
                        <input type="text" placeholder="" required>
                    </div>

                    <div class="input-box2">
                        <span class="details">Deskripsi</span>
                        <input type="text" placeholder="" required>
                    </div>
                    <div class="input-box2">
                        <span class="details">Waktu</span>
                        <input type="date" style="height: 60px;" placeholder="" required>
                    </div>
                    <div class="input-box2">
                        <span class="details">Tempat</span>
                        <input type="text" style="height: 50px;" placeholder="" required>
                    </div>
                </div>

                <div class="button">
                    <button class="tom1" type="submit">Submit</button>

            </form>
        </div>
    </div>
@endsection
