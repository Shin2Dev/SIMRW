@extends('warga.indexwarga')
@section('main')
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
        <p>Detail Status</p>
    </div>
    <div class="content">
        <form action="#">
            <div class="user-details">
                <div class="input-box">
                    <span class="details" style="font-weight: bold">Status</span>
                    <p>Pindah</p>
                </div>
                <div class="input-box">
                    <span class="details"style="font-weight: bold">Tanggal Lapor</span>
                    <p>20/10/2024</p>
                </div>
                <div class="input-box">
                    <span class="details" style="font-weight: bold">Catatan Peristiwa</span>
                    <p>Warga pindah di kota Madiun untuk keperluan pekerjaan</p>

                </div>
            </div>
        </form>
    </div>
</div>
@endsection
