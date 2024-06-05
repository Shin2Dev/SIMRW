@extends('templates.sidebar')
@section('main-content')
    @include('templates.headers')
    @include('templates.toast')

    <h2 class="nav">
        <a href="{{ route('dashboard', ['role' => $role]) }}">Home</a> &gt; Surat
    </h2>
    
    <main class="table">
        <section class="table__header">
            @if ($role == 'warga')
                <a href="{{ route('ajukan_surat', ['role' => $role]) }}" class="ajukan_surat">+ Ajukan Surat</a>
            @else
                <div></div>
            @endif
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="assets/imgs/search.png" alt="Search Icon">
            </div>
        </section>

        {{-- TABEL --}}
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th>Tgl Pengajuan</th>
                        @if ($role != 'warga')
                            <th>Nama Lengkap</th>
                            <th>NIK</th>
                        @endif
                        <th>Jenis Surat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1 April 2024</td>
                        @if ($role != 'warga')
                            <td>Nama Lengkap</td>
                            <td>NIK</td>
                        @endif
                        <td>Jenis Surat</td>
                        <td>Status</td>
                        <td>
                            <div class="aksi">
                                @if ($role == 'warga')
                                    {{-- <a href="{{ route('detail_surat', ['role' => $role, 'id' => $surat->id]) }}" class="detail_button">Detail</a> --}}
                                    <a href="{{ route('detail_surat', ['role' => $role, 'id' => 1]) }}" class="detail_button">Detail</a>
                                    <a href="#" class="print_button">Cetak</a>
                                @else
                                    <a href="{{ route('verifikasi_surat') }}" class="print_button">Verifikasi</a>
                                @endif
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            {{-- PAGINATION LINKS --}}
            <div class="pagination-links">
                {{-- {{ $surats->links() }} --}}
            </div>
        </section>
    </main>
@endsection
