@extends('templates.sidebar')
@section('main-content')
    @include('templates.headers')
    @include('templates.toast')

    <h2 class="nav">
        <a href="{{ route('dashboard', ['role' => $role]) }}">Home</a> &gt; Data Warga
    </h2>

    <main class="table">
        <section class="table__header">
            @if ($role == 'rt')
                <a href="{{ route('tambah_warga', ['role' => $role]) }}" class="btn-add">+ Tambah Data Warga</a>
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
                        <th>Nama Lengkap</th>
                        <th>NIK</th>
                        <th>Jenis Kelamin</th>
                        <th>Pekerjaan</th>
                        <th>Status Warga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wargas as $warga)
                    <tr>
                        <td>{{ $warga->nama }}</td>
                        <td>{{ $warga->nik }}</td>
                        <td>{{ $warga->jenis_kelamin }}</td>
                        <td>{{ $warga->pekerjaan }}</td>
                        <td>{{ $warga->status_warga }}</td>
                        <td>
                            <a href="{{ route('detail_warga', ['role' => $role, 'id' => $warga->id]) }}" class="btn-detail">
                                <ion-icon name="eye-outline"></ion-icon>&nbsp; Detail Data
                            </a>
                            @if ($role == 'rt')
                                <a href="{{ route('edit_warga', ['role' => $role, 'id' => $warga->id]) }}" class="btn-edit">
                                    <ion-icon name="create-outline"></ion-icon>&nbsp; Edit Data
                                </a>
                                <a href="{{ route('ganti_status_warga', ['role' => $role, 'id' => $warga->id]) }}" class="btn-ganti">
                                    <ion-icon name="swap-horizontal-outline"></ion-icon>&nbsp; Ganti Status
                                </a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>
@endsection
