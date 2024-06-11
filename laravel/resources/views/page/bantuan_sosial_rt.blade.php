<section class="table__header">
    <a href="{{ route('ajukan_bansos', ['role' => $role]) }}" class="btn-add">+ Ajukan Bantuan Sosial</a>
    <div class="input-group">
        <input type="search" id="search" placeholder="Cari Data Bansos">
        <img src="assets/imgs/search.png" alt="Search Icon">
    </div>
</section>
<section class="table__body" id="table-body">
    <table>
        <thead>
            <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>Pendidikan</th>
                <th>Usia</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="table-data">
            @if(count($calon_penerima_bansos) > 0)
                @foreach ($calon_penerima_bansos as $calon)
                    <tr>
                        <td>{{ $calon->warga->nik }}</td>
                        <td>{{ $calon->warga->nama }}</td>
                        <td>{{ $calon->pendidikan }}</td>
                        <td>{{ $calon->usia }}</td>
                        <td>
                            <a href="{{ route('edit_bansos', ['role' => $role, 'id' => $calon->id]) }}" class="btn-edit">
                                <ion-icon name="create-outline"></ion-icon>&nbsp; Edit Data
                            </a>
                            <a href="{{ route('detail_bansos', ['role' => $role, 'id' => $calon->id]) }}" class="btn-detail">
                                <ion-icon name="eye-outline"></ion-icon>&nbsp; Detail Data
                            </a>
                        </td>
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

{{-- PAGINATION --}}
<div class="pagination" id="pagination">
    {{ $calon_penerima_bansos->appends(['role' => $role])->links('vendor.pagination.default') }}
</div>

<script>
    $(document).ready(function() {
        $('#search').on('keyup', function() {
            var query = $(this).val();
            $.ajax({
                type: 'GET',
                // PERBAIKAN
                url: '{{ route('tampil_warga_rt', ['role' => $role]) }}',
                data: { query: query },
                success: function(data) {
                    if (data.length > 0) {
                        $('#table-data').html('');
                        $.each(data, function(index, calon) {
                            $('#table-data').append('<tr>' +
                                '<td>' + calon.warga.nik + '</td>' +
                                '<td>' + calon.warga.nama + '</td>' +
                                '<td>' + calon.pendidikan + '</td>' +
                                '<td>' + calon.usia + '</td>' +
                                '<td>' +
                                    '<a href="{{ route('edit_bansos_index', ['role' => $role, 'id' => ' + calon.id + ']) }}" class="btn-edit">' +
                                        '<ion-icon name="create-outline"></ion-icon>&nbsp; Edit Data' +
                                    '</a>' +
                                    '<a href="{{ route('detail_bansos', ['role' => $role, 'id' => ' + calon.id + ']) }}" class="btn-detail">' +
                                        '<ion-icon name="eye-outline"></ion-icon>&nbsp; Detail Data' +
                                    '</a>' +
                                '</td>' +
                            '</tr>');
                        });
                        $('#pagination').html('');
                    } else {
                        $('#table-data').html('<tr><td colspan="5" align="center">Data tidak ditemukan</td></tr>');
                        $('#pagination').html('');
                    }
                }
            });
        });
    });
</script>

