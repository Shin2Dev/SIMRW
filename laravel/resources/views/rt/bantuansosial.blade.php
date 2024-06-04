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
    <h1 style="text-align: start; margin-top: 10px; margin-left: 30px;">Home > Bantuan Sosial</h1>
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Daftar Warga Penerima Bansos</h1>
            <h3><a href="{{ url('/ajukanbansos') }}" class="aksi32">+ Ajukan</a> </h3>
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
                        <th> Nama </th>
                        <th> Pekerjaan </th>
                        <th> Penghasilan </th>
                        <th> Usia </th>
                        <th> Pendidikan </th>
                        <th> Lantai </th>
                        <th> Tembok </th>
                        <th> Lua Bangunan </th>
                        <th> Kendaraan </th>
                        <th> Sumber Penerangan </th>
                        <th> Status Rumah </th>
                        <th> Aksi </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 1 </td>
                        <td> Aminah </td>
                        <td> Tidak Bekerja/ pengangguran </td>
                        <td> > 3.000.000 </td>
                        <td> 26 - 35 tahun </td>
                        <td> SMA </td>
                        <td> Tanah </td>
                        <td> Kayu </td>
                        <td> < 8 m2 </td>
                        <td> Sepeda </td>
                        <td> PLN Non Subsidi </td>
                        <td> Milik orang tua </td>
                        <td>
                            <div class="aks"><a href="{{ url('/editbantuansosial') }}" class="aksi">Edit</a>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td> 1 </td>
                        <td> Aminah </td>
                        <td> Tidak Bekerja/ pengangguran </td>
                        <td> > 3.000.000 </td>
                        <td> 26 - 35 tahun </td>
                        <td> SMA </td>
                        <td> Tanah </td>
                        <td> Kayu </td>
                        <td> < 8 m2 </td>
                        <td> Sepeda </td>
                        <td> PLN Non Subsidi </td>
                        <td> Milik orang tua </td>
                        <td>
                            <div class="aks"><a href="{{ url('/editbantuansosial') }}" class="aksi">Edit</a>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td> 1 </td>
                        <td> Aminah </td>
                        <td> Tidak Bekerja/ pengangguran </td>
                        <td> > 3.000.000 </td>
                        <td> 26 - 35 tahun </td>
                        <td> SMA </td>
                        <td> Tanah </td>
                        <td> Kayu </td>
                        <td> < 8 m2 </td>
                        <td> Sepeda </td>
                        <td> PLN Non Subsidi </td>
                        <td> Milik orang tua </td>
                        <td>
                            <div class="aks"><a href="{{ url('/editbantuansosial') }}" class="aksi">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
@endsection
