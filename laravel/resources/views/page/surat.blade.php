@extends('templates.sidebar')
@section('main-content')
@php
    use Carbon\Carbon;
    Carbon::setLocale('id');
@endphp
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
            @if ($role != 'warga')
            <div class="input-group">
                <select id="filter" onchange="filterData()">
                    <option value="all">Semua</option>
                    <option value="disetujui">Disetujui</option>
                    <option value="ditolak">Ditolak</option>
                    <option value="dalam proses">Dalam Proses</option>
                </select>
            </div>
            @endif
        </section>

        {{-- TABEL --}}
        <section class="table__body">
            <table id="suratTable">
                <thead>
                    <tr>
                        <th>Tgl Pengajuan</th>
                        @if ($role != 'warga')
                            <th>Nama Lengkap</th>
                            <th>NIK</th>
                        @endif
                        <th>Jenis Surat</th>
                        <th>Status</th>
                        @if ($role == 'rw')
                        <th>RT</th>
                        @endif
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($surats) > 0)
                        @foreach ($surats as $surat)
                        <tr data-type="{{ strtolower($surat->status_surat) }}">
                            <td>{{ Carbon::parse($surat->created_at)->translatedFormat('d F Y') }}</td>
                            @if ($role != 'warga')
                                <td>{{ $surat->warga->nama }}</td>
                                <td>{{ $surat->warga->nik }}</td>
                            @endif
                            <td>{{ $surat->jenis_surat->nama_jenis_surat }}</td>
                            <td>{{ $surat->status_surat }}</td>
                            @if ($role == 'rw')
                            <td>{{ $surat->rt->nama_rt }}</td>
                            @endif
                            <td>
                                <div class="aksi">
                                    @if ($role == 'warga')
                                        <a href="{{ route('detail_surat', ['role' => $role, 'id' => $surat->id]) }}" class="detail_button">Detail</a>
                                        @if ($surat->status_surat == 'Disetujui')
                                            <a href="javascript:void(0);" onclick="window.open('{{ route('cetak_surat', ['role' => $role, 'id' => $surat->id]) }}', '_blank');" class="print_button">Cetak</a>
                                        @endif
                                    @elseif ($role == 'rt')
                                        @if ($surat->status_surat == 'Dalam Proses')
                                            <a href="{{ route('verifikasi_surat', ['role' => $role, 'id' => $surat->id]) }}" class="print_button">Verifikasi</a>
                                        @else
                                            <a href="{{ route('detail_surat', ['role' => $role, 'id' => $surat->id]) }}" class="detail_button">Detail</a>
                                        @endif
                                    @else
                                    <a href="{{ route('detail_surat', ['role' => $role, 'id' => $surat->id]) }}" class="detail_button">Detail</a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    @else
                    <tr>
                        <td colspan="5">Tidak ada pengajuan surat</td>
                    </tr>
                    @endif
                </tbody>
            </table>

            {{-- PAGINATION LINKS --}}
            <div class="pagination-links">
                {{-- {{ $surats->links() }} --}}
            </div>
        </section>
    </main>

    <script>
        function filterData() {
            var filter = document.getElementById("filter").value;
            var rows = document.querySelectorAll("#suratTable tbody tr");
    
            rows.forEach(row => {
                if (filter === "all") {
                    row.style.display = "";
                } else {
                    if (row.getAttribute("data-type") === filter) {
                        row.style.display = "";
                    } else {
                        row.style.display = "none";
                    }
                }
            });
        }
    </script>
@endsection
