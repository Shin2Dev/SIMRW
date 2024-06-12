@extends('templates.sidebar')
@section('main-content')
    @include('templates.headers')
    @include('templates.toast')

    <h2 class="nav">
        <a href="{{ route('dashboard', ['role' => $role]) }}">Home</a> &gt; Data RT
    </h2>

    <main class="table">
        <section class="table__header">
            {{-- @if ($role == 'rt')
                <a href="{{ route('tambah_warga', ['role' => $role]) }}" class="btn-add">+ Tambah Data Warga</a>
            @else --}}
                <div></div>
            {{-- @endif --}}

            {{-- <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="assets/imgs/search.png" alt="Search Icon">
            </div> --}}
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th>NIK</th>
                        <th>Nama Lengkap</th>
                        <th>Jabatan</th>
                        <th>RT</th>
                        <th>Periode</th>
                        {{-- <th>Aksi</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_rt as $rt)
                    <tr>
                        <td>{{ $rt->warga->nik }}</td>
                        <td>{{ $rt->warga->nama }}</td>
                        <td>{{ $rt->jabatan->nama_jabatan }}</td>
                        <td>{{ $rt->rt->nama_rt }}</td>
                        <td>{{ $rt->periode }}</td>
                        {{-- <td> --}}
                            {{-- <a href="{{ route('detail_warga', ['role' => $role, 'id' => $rt->id]) }}" class="btn-detail">
                                <ion-icon name="eye-outline"></ion-icon>&nbsp; Detail Data
                            </a> --}}
                            {{-- <a href="{{ route('edit_warga', ['role' => $role, 'id' => $rt->id]) }}" class="btn-edit">
                                <ion-icon name="create-outline"></ion-icon>&nbsp; Edit Data
                            </a> --}}
                                {{-- <a href="{{ route('ganti_status_warga', ['role' => $role, 'id' => $warga->id]) }}" class="btn-ganti">
                                    <ion-icon name="swap-horizontal-outline"></ion-icon>&nbsp; Ganti Status
                                </a> --}}
                        {{-- </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

        {{-- PAGINATION --}}
        {{-- <div class="pagination">
            {{ $wargas->appends(['role' => $role])->links('vendor.pagination.default') }}
        </div> --}}
    </main>
@endsection
