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
            <span class="details3">Daftar Calon Penerima Bansos</span>  
        </div>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> No </th>
                        <th> Nama </th>
                        <th> Pekerjaan </th>
                        <th> Penghasilan </th>
                        <th> Usia </th>
                        <th> Pendidikan </th>
                        <th> Lantai </th>
                        <th> Tembok </th>
                        <th> Luas Bangunan </th>
                        <th> Kendaraan </th>
                        <th> Sumber Penerangan </th>
                        <th> Status Rumah </th>
                    </tr>
                </thead>
            </table>
        </section>

        <div class ="input-box-1">
            <span class="details3">Kriteria</span>  
        </div>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> No </th>
                        <th> Alternatif </th>
                        <th> C1 </th>
                        <th> C2 </th>
                        <th> C3 </th>
                        <th> C4 </th>
                        <th> C5 </th>
                        <th> C6 </th>
                        <th> C7 </th>
                        <th> C8 </th>
                        <th> C9 </th>
                        <th> C10 </th>
                    </tr>
                </thead>
            </table>
        </section>

        <div class ="input-box-1">
            <span class="details3">Normalisasi</span>  
        </div>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> No </th>
                        <th> Alternatif </th>
                        <th> C1 </th>
                        <th> C2 </th>
                        <th> C3 </th>
                        <th> C4 </th>
                        <th> C5 </th>
                        <th> C6 </th>
                        <th> C7 </th>
                        <th> C8 </th>
                        <th> C9 </th>
                        <th> C10 </th>
                    </tr>
                </thead>
            </table>
        </section>
@endsection
