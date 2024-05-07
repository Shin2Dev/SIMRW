@extends('rt.indexrt')
@section('main')
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
    <h1 style="text-align: start; margin-top: 10px; margin-left: 30px;">Home > Surat</h1>

    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Surat</h1>
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
                        <th> Tgl Pengajuan </th>
                        <th> Nama </th>
                        <th> No KTP </th>
                        <th> Status </th>
                        <th> Aksi </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 1 </td>
                        <td> 1 April 2024 </td>
                        <td> Tyase </td>
                        <td> 565656 </td>
                        <td> menunggu </td>
                        <td>
                            <div class="aks"><a href="{{ url('/detailsurat') }}" class="aksi">Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> 11 April 2024 </td>
                        <td> Chamillatul </td>
                        <td> 343434 </td>
                        <td> menunggu </td>
                        <td>
                            <div class="aks"><a href="{{ url('/detailsurat') }}" class="aksi">Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> 4 Mei 2024 </td>
                        <td> Imam </td>
                        <td> 787878 </td>
                        <td> menunggu </td>
                        <td>
                            <div class="aks"><a href="{{ url('/detailsurat') }}" class="aksi">Detail</a>
                        </td>

                    </tr>

                </tbody>
            </table>
        </section>
    </main>
@endsection
