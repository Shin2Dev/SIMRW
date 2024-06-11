<style>
    button {
        text-align: center;
        margin-top: 20px;
        padding: 10px 20px;
        font-size: 16px;
        color: #fff;
        background-color: #007bff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>

<table>
    <caption style="padding: 20px 0; font-weight: bold; text-align: left;">Data Warga Yang Telah Diajukan</caption>
    <thead>
        <tr>
            <th>NIK</th>
            <th>Nama Lengkap</th>
            <th>Pekerjaan</th>
            <th>Penghasilan Bulanan</th>
            <th>Usia</th>
            <th>Pendidikan</th>
            <th>Luas Bangunan</th>
            <th>Jenis Lantai</th>
            <th>Jenis Dinding</th>
            <th>Kendaraan</th>
            <th>Sumber Penerangan</th>
            <th>Status Kepemilikan Rumah</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($calon_penerima_bansos as $calon)
        <tr>
            <td>{{ $calon->warga->nik }}</td>
            <td>{{ $calon->warga->nama }}</td>
            <td>{{ $calon->pekerjaan }}</td>
            <td>{{ $calon->penghasilan_bulanan }}</td>
            <td>{{ $calon->usia }}</td>
            <td>{{ $calon->pendidikan }}</td>
            <td>{{ $calon->luas_bangunan }}</td>
            <td>{{ $calon->jenis_lantai }}</td>
            <td>{{ $calon->jenis_dinding }}</td>
            <td>{{ $calon->kendaraan }}</td>
            <td>{{ $calon->sumber_penerangan }}</td>
            <td>{{ $calon->status_kepemilikan_rumah }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<table>
    <caption style="padding: 20px 0; font-weight: bold; text-align: left;">Konversi Bobot</caption>
    <thead>
        <tr>
            <th>Nama Lengkap</th>
            @foreach ($kriteria_bansos as $kriteria)
                <th>{{ $kriteria->kode_kriteria }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>

        @php $nilai_calon = array(); @endphp
        @foreach ($calon_penerima_bansos as $calon)
            {{-- Arrau Dua Dimensi --}}
            @php $nilai_calon[$calon->warga->nama] = array(); @endphp
            @foreach ($sub_kriteria_bansos as $sub_kriteria)
                @if (in_array($sub_kriteria->nama_sub_kriteria, [$calon->pekerjaan, $calon->penghasilan_bulanan, $calon->usia, $calon->pendidikan, $calon->luas_bangunan, $calon->jenis_lantai, $calon->jenis_dinding, $calon->kendaraan, $calon->sumber_penerangan, $calon->status_kepemilikan_rumah]))
                    @php $nilai_calon[$calon->warga->nama][] = $sub_kriteria->nilai_sub_kriteria; @endphp
                @endif
            @endforeach
    
            {{-- Menampilkan Data --}}
            <tr>
                <td>{{ $calon->warga->nama }}</td>
                @foreach ($nilai_calon[$calon->warga->nama] as $nilai)
                    <td>{{ $nilai }}</td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>

<table>
    <caption style="padding: 20px 0; font-weight: bold; text-align: left;">Normalisasi Matrik</caption>
    <thead>
        <tr>
            <th>Nama Lengkap</th>
            @foreach ($kriteria_bansos as $kriteria)
                <th>{{ $kriteria->kode_kriteria }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @php $normalisasi = array(); @endphp
        @foreach ($calon_penerima_bansos as $calon)
            @php $normalisasi[$calon->warga->nama] = array(); 
            
            // Normalisasi
            $normalisasi[$calon->warga->nama][] = $nilai_calon[$calon->warga->nama][0] / max(array_column($nilai_calon, 0));
            $normalisasi[$calon->warga->nama][] = min(array_column($nilai_calon, 1)) / $nilai_calon[$calon->warga->nama][1];
            $normalisasi[$calon->warga->nama][] = $nilai_calon[$calon->warga->nama][2] / max(array_column($nilai_calon, 2));
            $normalisasi[$calon->warga->nama][] = $nilai_calon[$calon->warga->nama][3] / max(array_column($nilai_calon, 3));
            $normalisasi[$calon->warga->nama][] = min(array_column($nilai_calon, 4)) / $nilai_calon[$calon->warga->nama][4];
            $normalisasi[$calon->warga->nama][] = $nilai_calon[$calon->warga->nama][5] / max(array_column($nilai_calon, 5));
            $normalisasi[$calon->warga->nama][] = $nilai_calon[$calon->warga->nama][6] / max(array_column($nilai_calon, 6));
            $normalisasi[$calon->warga->nama][] = $nilai_calon[$calon->warga->nama][7] / max(array_column($nilai_calon, 7));
            $normalisasi[$calon->warga->nama][] = $nilai_calon[$calon->warga->nama][8] / max(array_column($nilai_calon, 8));
            $normalisasi[$calon->warga->nama][] = $nilai_calon[$calon->warga->nama][9] / max(array_column($nilai_calon, 9));
            @endphp
            
            <tr>
                <td>{{ $calon->warga->nama }}</td>
                @foreach ($normalisasi[$calon->warga->nama] as $nilai)
                    <td>{{ $nilai }}</td>
                @endforeach
            </tr>
        @endforeach
        <tr>
            <td>Total</td>
            @for ($i = 0; $i <= 9; $i++)
                <td>{{ array_sum(array_column($normalisasi, $i)) }}</td>
            @endfor
        </tr>
    </tbody>
</table>

<table>
    <caption style="padding: 20px 0; font-weight: bold; text-align: left;">Penentuan Rata-rata Kinerja</caption>
    <tbody>
        <tr>
            <td>N</td>
            @php $rata_rata_kinerja = array(); @endphp
            @for ($i = 0; $i <= 9; $i++)
                @php $rata_rata_kinerja[] = array_sum(array_column($normalisasi, $i)) / count($normalisasi); @endphp
            @endfor
            @foreach ($rata_rata_kinerja as $nilai)
                <td>{{ $nilai }}</td>
            @endforeach
        </tr>
    </tbody>
</table>

<table>
    <caption style="padding: 20px 0; font-weight: bold; text-align: left;">Penentuan Nilai Variasi Preferensi</caption>
    <thead>
        <tr>
            <th>Nama Lengkap</th>
            @foreach ($kriteria_bansos as $kriteria)
                <th>{{ $kriteria->kode_kriteria }}</th>
            @endforeach
        </tr>
    </thead>
    @php $variasi_preferensi = array(); @endphp
    @foreach ($calon_penerima_bansos as $calon)
        @php $variasi_preferensi[$calon->warga->nama] = array(); @endphp

        @for ($i = 0; $i <= 9; $i++)
            @php $variasi_preferensi[$calon->warga->nama][] = pow(($normalisasi[$calon->warga->nama][$i] - $rata_rata_kinerja[$i]), 2); @endphp
        @endfor

        <tr>
            <td>{{ $calon->warga->nama }}</td>
            @foreach ($variasi_preferensi[$calon->warga->nama] as $nilai)
                <td>{{ $nilai }}</td>
            @endforeach
        </tr>
    @endforeach
    <tr>
        <td>Total</td>
        @php $total_variasi_preferensi = array(); @endphp
        @for ($i = 0; $i <= 9; $i++)
            @php $total_variasi_preferensi[] = array_sum(array_column($variasi_preferensi, $i)); @endphp
        @endfor
        @foreach ($total_variasi_preferensi as $nilai)
            <td>{{ $nilai }}</td>
        @endforeach
    </tr>
</table>

<table>
    <caption style="padding: 20px 0; font-weight: bold; text-align: left;">Penentuan Deviasi (Penyimpangan) Nilai Preferensi</caption>
    <tbody>
        <tr>
            <td>Deviasi Nilai Preferensi</td>
            @php
                $deviasi_nilai_preferensi = array();
                for ($i = 0; $i <= 9; $i++) {
                    $deviasi_nilai_preferensi[] = (1 - $total_variasi_preferensi[$i]);
                }
            @endphp
            @foreach ($deviasi_nilai_preferensi as $nilai)
                <td>{{ $nilai }}</td>
            @endforeach
        </tr>
    </tbody>
</table>

<table>
    <caption style="padding: 20px 0; font-weight: bold; text-align: left;">Jumlah Deviasi (Penyimpangan) Nilai Preferensi</caption>
    <tbody>
        <tr>
            <td>Jumlah</td>
            <td>{{ array_sum($deviasi_nilai_preferensi) }}</td>
        </tr>
    </tbody>
</table>

<table>
    <caption style="padding: 20px 0; font-weight: bold; text-align: left;">Penentuan Bobot Kriteria</caption>
    <tbody>
        <tr>
            <td>Wj</td>
            @php
                $bobot_kriteria = array();
                for ($i = 0; $i <= 9; $i++) {
                    $bobot_kriteria[] = $deviasi_nilai_preferensi[$i] / array_sum($deviasi_nilai_preferensi);
                }
            @endphp
            @foreach ($bobot_kriteria as $nilai)
                <td>{{ $nilai }}</td>
            @endforeach
        </tr>
    </tbody>
</table>

{{-- PENENTUAN NILAI PSI --}}
<table>
    <caption style="padding: 20px 0; font-weight: bold; text-align: left;">Penentuan Nilai PSI</caption>
    <thead>
        <tr>
            <th>Nama Lengkap</th>
            @foreach ($kriteria_bansos as $kriteria)
                <th>{{ $kriteria->kode_kriteria }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @php $normalisasi_matriks = array(); @endphp
        @foreach ($calon_penerima_bansos as $calon)
            @php
                $normalisasi_matriks[$calon->warga->nama] = array();
                for ($i = 0; $i <= 9; $i++) {
                    $normalisasi_matriks[$calon->warga->nama][] = $normalisasi[$calon->warga->nama][$i] * $bobot_kriteria[$i];
                }
            @endphp

        <tr>
            <td>{{ $calon->warga->nama }}</td>
            @foreach ($normalisasi_matriks[$calon->warga->nama] as $nilai)
                <td>{{ $nilai }}</td>
            @endforeach
        </tr>
        @endforeach
    </tbody>
</table>

{{-- PERANKINGAN --}}
<table>
    <caption style="padding: 20px 0; font-weight: bold; text-align: left;">Perankingan</caption>
    <thead>
        <tr>
            <th>Nama Lengkap</th>
            <th>Nilai PSI</th>
            <th>Ranking</th>
        </tr>
    </thead>
    <tbody>
        @php
        // Hitung nilai PSI untuk setiap calon
        $nilai_psi = [];
        foreach ($calon_penerima_bansos as $calon) {
            $nilai_psi[$calon->warga->nama] = array_sum($normalisasi_matriks[$calon->warga->nama]);
        }

        // Urutkan nilai PSI secara menurun dan pertahankan indeksnya
        arsort($nilai_psi);

        // Tetapkan peringkat berdasarkan urutan nilai PSI
        $ranking = array_flip(array_keys($nilai_psi));
        @endphp

        {{-- PERULANGAN TABEL --}}
        @foreach ($calon_penerima_bansos as $calon)
        <tr>
            <td>{{ $calon->warga->nama }}</td>
            <td>{{ array_sum($normalisasi_matriks[$calon->warga->nama]) }}</td>
            <td>{{ $ranking[$calon->warga->nama] + 1 }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

{{-- PERANKINGAN --}}
<form action="{{ route('penentuan_bansos', ['role' => $role]) }}" method="POST">
    @csrf
    <table>
        <caption style="padding: 20px 0; font-weight: bold; text-align: left;">Perankingan Final</caption>
        <thead>
            <tr>
                <th>Nama Lengkap</th>
                <th>Ranking</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            {{-- PERULANGAN TABEL --}}
            @foreach ($ranking as $nama => $peringkat)
            <tr>
                <td>{{ $nama }}</td>
                <td>{{ $peringkat + 1 }}</td>
                <td>
                    <input type="checkbox" name="aksi[]" value="{{ $nama }}" @if($ranking[$nama] <= 9) checked @endif>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menyimpan data?')">
        <ion-icon name="save-outline"></ion-icon> Simpan Data
    </button>
</form>
