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
    <h1 style="text-align: start; margin-top: 10px; margin-left: 30px;">Home > Data Warga</h1>

    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Daftar Warga</h1>
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
                        <th> Nama Lengkap </th>
                        <th> NIK </th>
                        <th> Tempat Tgl Lahir </th>
                        <th> Jenis Kelamin </th>
                        <th> Agama </th>
                        <th> Alamat </th>
                        <th> No.HP </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 1 </td>
                        <td> Chamillatul Luqiana </td>
                        <td> 010220256976 </td>
                        <td> Malang, 17 Desember 2004 </td>
                        <td> Perempuan </td>
                        <td> Islam </td>
                        <td> Malang </td>
                        <td> 081234786547 </td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> Tyase Nisa'an </td>
                        <td> 010220256977 </td>
                        <td> Malang, 12 Juni 2004 </td>
                        <td> Perempuan </td>
                        <td> Islam </td>
                        <td> Malang </td>
                        <td> 081234787887 </td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> Alifia Bilqi F </td>
                        <td> 010220256985 </td>
                        <td> Malang, 1 Mei 2004 </td>
                        <td> Perempuan </td>
                        <td> Islam </td>
                        <td> Malang </td>
                        <td> 081266686547 </td>
                    </tr>

                </tbody>
            </table>
        </section>
    </main>
@endsection
