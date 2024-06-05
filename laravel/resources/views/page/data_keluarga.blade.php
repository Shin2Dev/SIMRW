@extends('templates.sidebar')
@section('main-content')

    @include('templates.headers')
    <h2 class="nav">
        <a href="{{ route('dashboard', ['role' => $role]) }}">Home</a> &gt; Data Keluarga
    </h2>

    <main class="table">
        <section class="table__header">
            @if ($role == 'rt')
                <a href="{{ route('tambah_keluarga', ['role' => $role]) }}" class="btn-add">+ Tambah Data Keluarga</a>
            @else
                <div></div>
            @endif

            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="assets/imgs/search.png" alt="Search Icon">
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th>Nomor KK</th>
                        <th>Jumlah Anggota</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                {{-- <tbody>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>NIK</td>
                        <td>Jenis Kelamin</td>
                        <td>
                            <a href="{{ route('detail_warga') }}" class="btn-detail">
                                <ion-icon name="eye-outline"></ion-icon>&nbsp; Detail Data
                            </a>
                            @if ($role == 'rt')
                                <a href="{{ route('edit_warga') }}" class="btn-edit">
                                    <ion-icon name="create-outline"></ion-icon>&nbsp; Edit Data
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody> --}}
            </table>
        </section>
    </main>
@endsection
