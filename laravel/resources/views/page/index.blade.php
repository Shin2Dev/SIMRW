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
        <h2 class="text-center">Sistem Informasi Rukun Warga 01</h2>
    </header>

    {{-- Dashboard Content --}}
    <main class="table">
        <section class="plate">
            <h3>Berita Terkini</h3>
        </section>
        
        <section class="table__body1">
            @foreach ($infos as $info)
                <article class="card">
                    <figure class="jud">
                        <img src="assets/imgs/info/{{ $info->gambar }}" alt="{{ $info->judul }}">
                    </figure>
                    <div class="cont">
                        <div class="info-details">
                            <span class="kategori">{{ $info->kategori_info->nama_kategori }}</span>
                        </div>
                        <h4>{{ $info->judul }}</h4>
                        <hr />
                        <p>{{ $info->deskripsi }}</p>
                        <hr />
                        <ul>
                            <li>Tanggal: {{ Carbon::parse($info->tanggal)->translatedFormat('d F Y') }}</li>
                            <li>Tempat: {{ $info->tempat }}</li>
                        </ul>
                        <a href="javascript:void(0);" class="buttons detail-info" onclick="openModal({{ $info->id }})">
                            <ion-icon name="information-circle-outline"></ion-icon>&nbsp; Detail
                        </a>
                    </div>
                </article>
            @endforeach
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
                    </tr>
                </thead>
                <tbody>
                    @foreach ($keuangan as $uang)
                    <tr>
                        <td>{{ Carbon::parse($uang->tanggal)->translatedFormat('d F Y') }}</td>
                        <td>{{ $uang->deskripsi }}</td>
                        <td>{{ $uang->jenis == 'Pemasukan' ? 'Rp. ' . number_format($uang->jumlah, 0, ',', '.') : 'Rp. -' }}</td>
                        <td>{{ $uang->jenis == 'Pengeluaran' ? 'Rp. ' . number_format($uang->jumlah, 0, ',', '.') : 'Rp. -' }}</td>
                        <td>Rp. {{ number_format($uang->saldo, 0, ',', '.') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

        <section class="plate">
            <h3>Grafik Data</h3>
        </section>

        <section class="table__body3">
            {{-- GRAFIIIIIKKKK --}}
            <div class="chart">
                <canvas id="myChart"></canvas>
            </div>
        </section>
    </main>

    @include('templates.info-popup')
@endsection
