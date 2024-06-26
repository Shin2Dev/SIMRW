@extends('templates.sidebar')
@section('main-content')

@php
    use Carbon\Carbon;
    Carbon::setLocale('id');
@endphp

    @include('templates.headers')
    @include('templates.toast')

            {{-- NAVIGASI --}}
            <h2 class="nav">
                <a href="{{ route('dashboard', ['role' => $role]) }}">Home</a> &gt; Informasi
            </h2>

            <section class="table__header">
                @if ($role == 'rt')
                    <a href="{{ route('tambah_info', ['role' => $role]) }}" class="tambah_info">+ Tambah Info</a>
                @else
                    <div></div>
                @endif
                
                {{-- FILTER DATA --}}
                {{-- <div class="input-group">
                    <select id="filter" onchange="filterData()">
                        <option value="all">Semua Kategori</option>
                        @foreach ($kategoriInfos as $kategoriInfo)
                            <option value="{{ $kategoriInfo->nama_kategori }}">{{ $kategoriInfo->nama_kategori_info }}</option>
                        @endforeach
                    </select>
                </div> --}}
            </section>

            <section class="cards">
                @if ($infos->count() > 0)
                    @foreach ($infos as $info)
                        @if ($role != 'rt' && $info->status_info != 'Publik')
                            @continue
                        @endif
                        <article class="cardinfo" data-type="{{ $info->kategori_info->nama_kategori_info }}">
                            <figure class="jud">
                                <img src="assets/imgs/info/{{ $info->gambar_info }}" alt="{{ $info->judul_info }}">
                            </figure>
                            <section class="cont">
                                <div class="info-details">
                                    <span class="kategori">{{ $info->kategori_info->nama_kategori_info }}</span>

                                    @if ($role == 'rt')
                                        <span class="status">{{ $info->status_info }}</span>
                                    @endif
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
                                <div class="aksi-buttons">
                                    <a href="javascript:void(0);" class="buttons detail-info" onclick="openModal('{{ $role }}', {{ $info->id }})">
                                        <ion-icon name="information-circle-outline"></ion-icon>&nbsp; Detail
                                    </a>
                                    @if ($role == 'rt')
                                        <a href="{{ route('edit_info_index', ['role' => $role, 'id' => $info->id]) }}" class="buttons edit">
                                            <ion-icon name="create-outline"></ion-icon>&nbsp; Edit
                                        </a>
                                        <a href="javascript:void(0);" class="buttons hapus" onclick="confirmDelete({{ $info->id }})">
                                            <ion-icon name="trash-outline"></ion-icon>&nbsp; Hapus
                                        </a>
                                        <form 
                                            id="deleteForm-{{ $info->id }}" 
                                            method="POST" 
                                            action="{{ route('hapus_info', ['id' => $info->id, 'role' => $role]) }}" 
                                            style="display: none;"
                                        >
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    @endif
                                </div>
                            </section>
                        </article>
                    @endforeach
                @else
                    <p>Tidak ada data.</p>
                @endif
            </section>
                
            {{-- PAGINATION --}}
            <div class="pagination">
                {{ $infos->appends(['role' => $role])->links('vendor.pagination.default') }}
            </div>

            <script>
                // function filterData() {
                //     var filter = document.getElementById("filter").value;
                //     var rows = document.querySelectorAll(".cardinfo");

                //     rows.forEach(row => {
                //         if (filter === "all") {
                //             row.style.display = "";
                //         } else {
                //             if (row.getAttribute("data-type") === filter) {
                //                 row.style.display = "";
                //             } else {
                //                 row.style.display = "none";
                //             }
                //         }
                //     });
                // }

                function confirmDelete(id) {
                    if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                        document.getElementById('deleteForm-' + id).submit();
                    }
                }
            </script>
    @include('templates.info-popup')
@endsection
