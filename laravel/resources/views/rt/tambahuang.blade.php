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
            <p>Tambah Keuangan</p>
        </div>
        <div class="content">
            <form action="#">
                <div class="user-details">
                    <div class="input-box2">
                        <span class="details">Tanggal</span>
                        <input type="date" placeholder="" required>
                    </div>

                    <div class="input-box2">
                        <span class="details">Deskripsi</span>
                        <input type="text" placeholder="" required>
                    </div>
                    <div class="input-box2">
                        <span class="details">Jenis</span>
                        <div class="custom-select">
                            <select>
                                <option value="0">Pilih Jenis Keuangan:</option>
                                <option value="1">Pemasukan</option>
                                <option value="2">Pengeluaran</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-box2">
                        <span class="details">Jumlah</span>
                        <input type="text" style="height: 50px;" placeholder="" required>
                    </div>
                </div>

                <div class="button">
                    <button class="tom1" type="submit">Submit</button>

            </form>
        </div>
    </div>
@endsection
