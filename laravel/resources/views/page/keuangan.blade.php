@extends('templates.sidebar')
@section('main-content')
@php
    use Carbon\Carbon;
    Carbon::setLocale('id');
@endphp

    @include('templates.headers')
    @include('templates.toast')

    <h2 class="nav">
        <a href="{{ route('dashboard', ['role' => $role]) }}">Home</a> &gt; Keuangan
    </h2>

    <main class="table">
        <section class="table__header">
            @if ($role == 'rt')
                <a href="{{ route('tambah_uang', ['role' => $role]) }}" class="tambah_uang">+ Tambah Laporan Keuangan</a>
            @else
                <div></div>
            @endif
            <div class="input-group">
                <select id="filter" onchange="filterData()">
                    <option value="all">Semua</option>
                    <option value="pemasukan">Pemasukan</option>
                    <option value="pengeluaran">Pengeluaran</option>
                </select>
            </div>
        </section>
        <section class="table__body">
            <table id="keuanganTable">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Deskripsi</th>
                        <th>Masuk</th>
                        <th>Keluar</th>
                        <th>Saldo</th>
                        @if ($role == 'rt')
                        <th>Aksi</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($keuangan as $item)
                        <tr data-type="{{ strtolower($item->jenis) }}">
                            <td>{{ Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>{{ $item->jenis == 'Pemasukan' ? 'Rp. ' . number_format($item->jumlah, 0, ',', '.') : 'Rp. -' }}</td>
                            <td>{{ $item->jenis == 'Pengeluaran' ? 'Rp. ' . number_format($item->jumlah, 0, ',', '.') : 'Rp. -' }}</td>
                            <td>Rp. {{ number_format($item->saldo, 0, ',', '.') }}</td>
                            @if ($role == 'rt')
                            <td>
                                <a href="javascript:void(0);" class="buttons hapus">
                                    <ion-icon name="trash-outline"></ion-icon>&nbsp; Hapus
                                </a>
                            </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

        {{-- PAGINATION --}}
        <div class="pagination">
            {{ $keuangan->appends(['role' => $role])->links('vendor.pagination.default') }}
        </div>
    </main>

    <script>
        function filterData() {
            var filter = document.getElementById("filter").value;
            var rows = document.querySelectorAll("#keuanganTable tbody tr");

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
