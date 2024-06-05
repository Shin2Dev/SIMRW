@extends('rw.index')
@section('main')
    <link rel="stylesheet" href="assets/css/bantuansosial.css">
    <div class="topbar" style="background-color: #B0C4DE">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        <div class="judul">
            <h1>RW</h1>
        </div>
        <div class="user">
        </div>
    </div>
    <h1 style="text-align: start; margin-top: 10px; margin-left: 30px;">Home > Bantuan Sosial</h1>
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Sistem Pendukung Keputusan</h1>
        </section>
        <div class ="input-box-4">
            <a href="{{ url('/bantuansosialrw') }}" class="details4">Kriteria</a> 
            <a href="{{ url('/bansos_subkriteria') }}" class="details4">Sub-Kriteria</a>
            <a href="{{ url('/bansos_normalisasi') }}" class="details4">Normalisasi</a>
            <a href="{{ url('/bansos_perhitungan') }}" class="details4">Perhitungan</a>
            <a href="{{ url('/bansos_perankingan') }}" class="details4">Perankingan</a>
        </div>
        <div class ="input-box-1">
            <span class="details3">Hasil Akhir Perankingan</span>  
        </div>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Rank </th>
                        <th> Alternatif </th>
                        <th> Nilai </th>
                        <th> Aksi </th>
                    </tr>
                </thead>
            </table>
        </section>
@endsection
