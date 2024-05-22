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
    <h1 style="text-align: start; margin-top: 10px; margin-left: 30px;">Home > Data Warga</h1>

    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Daftar Warga</h1>
            <h3><a href="{{ url('/tambahwarga') }}" class="aksi32">+ Tambah</a> </h3>
            <h3><a href="{{ url('/editwarga') }}" class="aksi33">Edit</a></h3>
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
                        <th> Kawin </th>
                        <th> Status </th>
                        <th> Aksi </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 1 </td>
                        <td> hendra springbed </td>
                        <td> 000000000 </td>
                        <td> 17 Dec 2022 </td>
                        <td> lanang </td>
                        <td> random </td>
                        <td> ngawi </td>
                        <td> 888888888 </td>
                        <td> Belum kawin </td>
                        <td> Pindah </td>
                        <td> <a href="{{ url('/gantistatus') }}" class="aksi34">Ganti</a>
                            <div class="aks"><a href="{{ url('/detailstatus') }}" class="aksidet">Detail</a></div>
                        </td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> hendra springbed </td>
                        <td> 000000000 </td>
                        <td> 17 Dec 2022 </td>
                        <td> lanang </td>
                        <td> random </td>
                        <td> ngawi </td>
                        <td> 888888888 </td>
                        <td> Belum kawin </td>
                        <td> Pindah </td>
                        <td><a href="{{ url('/gantistatus') }}" class="aksi34">Ganti</a>
                            <div class="aks"><a href="{{ url('/detailstatus') }}" class="aksidet">Detail</a></div>
                        </td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> hendra springbed </td>
                        <td> 000000000 </td>
                        <td> 17 Dec 2022 </td>
                        <td> lanang </td>
                        <td> random </td>
                        <td> ngawi </td>
                        <td> 888888888 </td>
                        <td> Belum kawin </td>
                        <td> Pindah </td>
                        <td><a href="{{ url('/gantistatus') }}" class="aksi34">Ganti</a>
                            <div class="aks"><a href="{{ url('/detailstatus') }}" class="aksidet">Detail</a></div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </section>
    </main>
@endsection
