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
            <h3><a href="{{ url('/tambahwarga') }}" class="aksi33" style="background-color: blue">+ Tambah</a></h3>
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
                        <th> Tempat Lahir </th>
                        <th> Tanggal Lahir </th>
                        <th> Jenis Kelamin </th>
                        <th> Alamat </th>
                        <th> No.HP </th>
                        <th> Kawin </th>
                        <th> Status </th>
                        <th> Aksi </th>
                    </tr>
                </thead>
                <tbody>
                    
                    {{-- BACKEND --}}
                    @foreach ($warga as $war)
                    <tr>
                        <td>{{ $war -> id }}</td>
                        <td>{{ $war -> nama }}</td>
                        <td>{{ $war -> nik }}</td>
                        <td>{{ $war -> tempat_lahir }}</td>
                        <td>{{ $war -> tanggal_lahir }}</td>
                        <td>{{ $war -> jenis_kelamin }}</td>
                        <td>{{ $war -> alamat }}</td>
                        <td>{{ $war -> no_hp }}</td>
                        <td>{{ $war -> status_kawin = $war -> status_kawin == true ? "Sudah Menikah" : "Belum Menikah"  }}</td>
                        <td>{{ $war -> status_warga = $war -> status_warga == true ? "Aktif" : "Tidak Aktif"}}</td>
                        <td> 
                            <a href="{{ url('/gantistatus/' . $war -> id) }}" class="aksi34">Ganti</a>
                            <div class="aks"><a href="{{ url('/editwarga/' . $war -> id) }}" class="aksidet" style="background-color: orange; z-index: 0">Edit</a></div>
                            <div class="aks"><a href="{{ url('/detailstatus/' . $war -> id) }}" class="aksidet" style="z-index: 0">Detail</a></div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </section>
    </main>
@endsection
