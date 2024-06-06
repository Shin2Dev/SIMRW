@extends('templates.sidebar')

@section('main-content')
    @include('templates.headers')
    @include('templates.toast')

    <h2 class="nav">
        <a href="{{ route('dashboard', ['role' => $role]) }}">Home</a> &gt; Bantuan Sosial
    </h2>

    <main class="table" id="customers_table">
        @if ($role == 'rt')
        <section class="table__header">
            <a href="{{ route('ajukan_bansos', ['role' => $role]) }}" class="btn-add">+ Ajukan Bantuan Sosial</a>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="assets/imgs/search.png" alt="Search Icon">
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Pekerjaan</th>
                        <th>Penghasilan</th>
                        <th>Usia</th>
                        <th>Pendidikan</th>
                        <th>Lantai</th>
                        <th>Tembok</th>
                        <th>Luas Bangunan</th>
                        <th>Kendaraan</th>
                        <th>Sumber Penerangan</th>
                        <th>Status Rumah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Aminah</td>
                        <td>Tidak Bekerja/ pengangguran</td>
                        <td>> 3.000.000</td>
                        <td>26 - 35 tahun</td>
                        <td>SMA</td>
                        <td>Tanah</td>
                        <td>Kayu</td>
                        <td>< 8 m2</td>
                        <td>Sepeda</td>
                        <td>PLN Non Subsidi</td>
                        <td>Milik orang tua</td>
                        <td>
                            <a href="{{ route('edit_bansos_index', ['role' => $role, 'id' => 1]) }}" class="btn-edit">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
        @endif
    </main>
@endsection
