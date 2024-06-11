@foreach ($kriteria_bansos as $kriteria)
<table>
        <caption style="padding: 20px 0; font-weight: bold; text-align: left;">{{$kriteria->kode_kriteria}} : {{$kriteria->nama_kriteria}}</caption>
        <thead>
            <tr>
                <th>{{$kriteria->nama_kriteria}}</th>
                <th>Kategori</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sub_kriteria_bansos as $sub_kriteria)
                @if ($sub_kriteria->kriteria->id == $kriteria->id)
                <tr>
                    <td>{{ $sub_kriteria->nama_sub_kriteria }}</td>
                    <td>{{ $sub_kriteria->kategori_sub_kriteria }}</td>
                    <td>{{ $sub_kriteria->nilai_sub_kriteria }}</td>
                </tr>
                @endif
            @endforeach
        </tbody>
    </table>
 @endforeach