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
                    <option value="" disabled>Bulan</option>
                    @foreach (['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'] as $month)
                        <option value="{{ $month }}">{{ $month }}</option>
                    @endforeach
                    @if ($role == 'rw')
                        <option value="" disabled>RT</option>
                        @foreach ($rt as $rt)
                            <option value="{{ $rt->id }}">{{ $rt->nama_rt }}</option>
                        @endforeach
                    @endif
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
                        @if ($role == 'rw')
                        <th>RT</th>
                        @endif
                        @if ($role == 'rt')
                        <th>Aksi</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @if(count($keuangan) > 0)
                        @foreach ($keuangan as $item)
                            <tr data-type="{{ Carbon::parse($item->tanggal_keuangan)->translatedFormat('F') }}" data-rt="{{ $item->id_rt }}">
                                <td>{{ Carbon::parse($item->tanggal_keuangan)->translatedFormat('d F Y') }}</td>
                                <td>{{ $item->deskripsi_keuangan }}</td>
                                <td>{{ $item->jenis_keuangan == 'Pemasukan' ? 'Rp. ' . number_format($item->jumlah_keuangan, 0, ',', '.') : 'Rp. -' }}</td>
                                <td>{{ $item->jenis_keuangan == 'Pengeluaran' ? 'Rp. ' . number_format($item->jumlah_keuangan, 0, ',', '.') : 'Rp. -' }}</td>
                                <td>Rp. {{ number_format($item->saldo, 0, ',', '.') }}</td>
                                @if ($role == 'rw')
                                <td>{{ $item->rt->nama_rt }}</td>
                                @endif
                                @if ($role == 'rt')
                                <td>
                                    <a href="javascript:void(0);" class="buttons hapus" onclick="confirmDelete({{ $item->id }})">
                                        <ion-icon name="trash-outline"></ion-icon>&nbsp; Hapus
                                    </a>
                                    <form 
                                        id="deleteForm-{{ $item->id }}" 
                                        method="POST" 
                                        action="{{ route('hapus_uang', ['id' => $item->id, 'role' => $role]) }}" 
                                        style="display: none;"
                                    >
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" style="text-align: center;">Tidak ada laporan keuangan</td>
                        </tr>
                    @endif
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
                if (filter === "all" || row.getAttribute("data-type") === filter || row.getAttribute("data-rt") === filter) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });

            // Tambahkan teks jika tidak ada dalam pemfilteran
            // if (document.querySelectorAll("#keuanganTable tbody tr[style='display: none;']").length === rows.length) {
            //     document.querySelector("#keuanganTable tbody").innerHTML = "<tr><td colspan='6' style='text-align: center;'>Tidak ada laporan keuangan dalam Bulan ini</td></tr>";
            // }
        }

        function confirmDelete(id) {
            if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                document.getElementById('deleteForm-' + id).submit();
            }
        }
    </script>
@endsection

