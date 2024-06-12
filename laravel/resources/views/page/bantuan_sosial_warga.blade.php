<section class="table__header">
    <div>
        @if(count($calon_penerima_bansos->where('penerima_bansos', true)) > 0)
            @foreach($calon_penerima_bansos as $calon)
                @if ($calon->penerima_bansos)
                    <h3>Selamat, anda berhak mendapatkan bansos</h3>
                    @break
                @else
                    <h3>Mohon maaf, anda tidak berhak mendapatkan bansos</h3>
                    @break
                @endif
            @endforeach
        @else
            <h3>Tidak ada data penerima data bansos</h3>
        @endif
    </div>
</section>
<section class="table__body" id="table-body">
    <caption>Tabel Penerima Bansos</caption>
    <table>
        <thead>
            <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>Pendidikan</th>
                <th>Usia</th>
            </tr>
        </thead>
        <tbody id="table-data">
            @if(count($calon_penerima_bansos->where('penerima_bansos', true)) > 0)
                @foreach ($calon_penerima_bansos->where('penerima_bansos', true) as $calon)
                    <tr>
                        <td>{{ $calon->warga->nik }}</td>
                        <td>{{ $calon->warga->nama }}</td>
                        <td>{{ $calon->pendidikan }}</td>
                        <td>{{ $calon->usia }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5" align="center">Data tidak ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
</section>