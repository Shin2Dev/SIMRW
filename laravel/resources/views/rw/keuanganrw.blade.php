@extends('rw.index')
@section('main')
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
<h1 style="text-align: start; margin-top: 10px; margin-left: 30px;">Home > Keuangan</h1>

<main class="table" id="customers_table">
    <section class="table__header">
        <h1>Data Keuangan</h1>
        <div class="input-group">
            <input type="search" placeholder="Search Data...">
            <img src="assets/imgs/search.png" alt="">
        </div>
    </section>
    <section class="table__body">
        <table>
            <thead>
                <tr>
                    <th> No </th>
                    <th> Tanggal </th>
                    <th> Deskripsi </th>
                    <th> Masuk </th>
                    <th> Keluar </th>
                    <th> Saldo </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> 1 </td>
                    <td> 01 Mei 2024 </td>
                    <td> Iuran Kas</td>
                    <td> Rp 700.000 </td>
                    <td> Rp. - </td>
                    <td> Rp 700.000 </td>
                </tr>
                <tr>
                    <td> 2 </td>
                    <td> 02 Mei 2024 </td>
                    <td> Iuran Sampah </td>
                    <td> Rp 300.000 </td>
                    <td> Rp. - </td>
                    <td> Rp 1.00.000 </td>
                </tr>
                <tr>
                    <td> 3 </td>
                    <td> 04 Mei 2024 </td>
                    <td> Konsumsi Kerja Bakti </td>
                    <td> - </td>
                    <td> Rp 200.000 </td>
                    <td> Rp 800.000 </td>
                </tr>

            </tbody>
        </table>
    </section>
</main>
@endsection
