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
        <p>Data Diri</p>
    </div>
    <div class="content">
        <form action="#">
            <div class="user-details">
                <div class="input-box">
                    <span class="details" style="font-weight: bold">Nama Lengkap</span>
                    <p>Chamillatul Luqiana Agustin</p>
                </div>
                <div class="input-box">
                    <span class="details"style="font-weight: bold">Agama</span>
                    <p>Islam</p>
                </div>
                <div class="input-box">
                    <span class="details" style="font-weight: bold">No KTP</span>
                    <p>0210667845990</p>

                </div>
                <div class="input-box">
                    <span class="details" style="font-weight: bold">Pekerjaan</span>
                    <p>Pelajar</p>

                </div>
                <div class="input-box">
                    <span class="details" style="font-weight: bold">Tgl Lahir</span>

                    <p>20 Mei 2003</p>

                </div>
                <div class="input-box">
                    <span class="details" style="font-weight: bold">Status</span>
                    <p>Belum Kawin</p>

                </div>
                <div class="input-box">
                    <span class="details" style="font-weight: bold">Jenis Kelamin</span>
                    <p>Perempuan</p>
                </div>
                <div class="input-box">
                    <span class="details" style="font-weight: bold">Alamat</span>
                    <p>Malang</p>

                </div>
                
            </div>
        </form>
    </div>
</div>
@endsection
