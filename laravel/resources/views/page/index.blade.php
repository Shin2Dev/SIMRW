@extends('templates.sidebar')
@section('main-content')
@php
    use Carbon\Carbon;
    Carbon::setLocale('id');
@endphp
    @include('templates.headers')
    @include('templates.toast')

    {{-- Judul SIRW --}}
    <header class="main-title">
        @if ($role == 'rw')
            <h2 class="text-center">Sistem Informasi RW {{ $warga->rw }}</h2>
        @else 
            <h2 class="text-center">Sistem Informasi RT {{ $warga->rt->nama_rt }} RW {{ $warga->rw }}</h2>
        @endif
    </header>

    {{-- Dashboard Content --}}
    <main class="table">
        <section class="plate">
            <h3>Berita Terkini</h3>
        </section>
        
        <section class="table__body1">
            @forelse ($infos as $info)
                <article class="card">
                    <figure class="jud">
                        <img src="assets/imgs/info/{{ $info->gambar_info }}" alt="{{ $info->judul_info }}">
                    </figure>
                    <div class="cont">
                        <div class="info-details">
                            <span class="kategori">{{ $info->kategori_info->nama_kategori_info }}</span>
                        </div>
                        <h4>{{ $info->judul_info }}</h4>
                        <hr />
                        <p>{{ $info->deskripsi_info }}</p>
                        <hr />
                        <ul>
                            <li>Tanggal: {{ Carbon::parse($info->tanggal_info)->translatedFormat('d F Y') }}</li>
                            <li>Tempat: {{ $info->tempat_info }}</li>
                            <li>RT: {{ $info->rt->nama_rt }}</li>
                        </ul>
                        <a href="javascript:void(0);" class="buttons detail-info" onclick="openModal('{{ $role }}', {{ $info->id }})">
                            <ion-icon name="information-circle-outline"></ion-icon>&nbsp; Detail
                        </a>
                    </div>
                </article>
            @empty
                <p style="text-indent: 30px">Tidak ada informasi</p>
            @endforelse
        </section>

        <section class="plate">
            <h3>Laporan Keuangan</h3>
        </section>

        <section class="table__body2">
            <table>
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Deskripsi</th>
                        <th>Masuk</th>
                        <th>Keluar</th>
                        <th>Saldo</th>
                        <th>RT</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($keuangan) > 0)
                        @foreach ($keuangan as $uang)
                            <tr>
                                <td>{{ Carbon::parse($uang->tanggal_keuangan)->translatedFormat('d F Y') }}</td>
                                <td>{{ $uang->deskripsi_keuangan }}</td>
                                <td>{{ $uang->jenis_keuangan == 'Pemasukan' ? 'Rp. ' . number_format($uang->jumlah_keuangan, 0, ',', '.') : 'Rp. -' }}</td>
                                <td>{{ $uang->jenis_keuangan == 'Pengeluaran' ? 'Rp. ' . number_format($uang->jumlah_keuangan, 0, ',', '.') : 'Rp. -' }}</td>
                                <td>Rp. {{ number_format($uang->saldo, 0, ',', '.') }}</td>
                                <td>{{ $uang->rt->nama_rt }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">Tidak ada keuangan</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </section>

        <section class="plate">
            <h3>Grafik Data</h3>
        </section>

        <section class="table__body3" style="display: flex; justify-content: space-between">
            {{-- GRAFIIIIIKKKK --}}
            <div id="chart1"></div>
            <div id="chart2"></div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script>
            var options1 = {
                series: [{
                    data: [{{ $warga->where('id_rt', '001')->count() }}, {{ $warga->where('id_rt', '002')->count() }}, {{ $warga->where('id_rt', '003')->count() }}, {{ $warga->where('id_rt', '004')->count() }}]
                }],
                chart: {
                    type: 'bar',
                    height: 300
                },
                title: {
                    text: 'Warga RT'
                },
                xaxis: {
                    categories: ['RT 001', 'RT 002', 'RT 003', 'RT 004']
                },
                colors: ['#FF69B4', '#33CC33', '#6666FF', '#0099CC'] // changed colors to be different for each bar
            };

            var options2 = {
                series: [{
                    data: [{{ $warga->where('golongan_darah', 'A')->count() }}, {{ $warga->where('golongan_darah', 'B')->count() }}, {{ $warga->where('golongan_darah', 'AB')->count() }}, {{ $warga->where('golongan_darah', 'O')->count() }}]
                }],
                chart: {
                    type: 'bar',
                    height: 300
                },
                title: {
                    text: 'Warga Golongan Darah'
                },
                xaxis: {
                    categories: ['A', 'B', 'AB', 'O']
                },
                colors: ['#FF69B4', '#33CC33', '#6666FF', '#0099CC'] // changed colors to be different for each bar
            };

            var chart1 = new ApexCharts(document.querySelector("#chart1"), options1);
            var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
            chart1.render();
            chart2.render();
        </script>
    </main>

    @include('templates.info-popup')
@endsection
