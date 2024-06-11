<table>
    <thead>
        <tr>
            <th>Kode Kriteria</th>
            <th>Nama Kriteria</th>
            <th>Atribut</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kriteria_bansos as $kriteria)
        <tr>
            <td>{{ $kriteria->kode_kriteria }}</td>
            <td>{{ $kriteria->nama_kriteria }}</td>
            <td>{{ $kriteria->atribut }}</td>
        </tr>
        @endforeach
    </tbody>
</table>


