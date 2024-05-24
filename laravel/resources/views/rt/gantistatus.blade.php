@extends('rt.indexrt')
@section('main')
    <link rel="stylesheet" href="assets/css/tambahwarga.css">
    <div class="topbar" style="background-color: #B0C4DE">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        <div class="judul">
            <h1>RT</h1>
        </div>
        <div class="user">
        </div>
    </div>

    <div class="container2">
        <div class="title">
            <p>Ganti Status</p>
        </div>
        <div class="content">
            <form action="{{ route('pages.gantistatuswarga', ['id' => $warga -> id]) }}" method="POST">
                @csrf

                <div class="input-box2">
                    <span class="details">Yakin ingin mengganti status keaktifan warga ini?</span>
                    <input type="hidden" name="status_warga" value="0">
                </div>


                {{-- <div class="user-details">
                    <div class="input-box2">
                        <input type="hidden" name="id_warga" value="{{ $warga -> id }}">
                        <span class="details">Status</span>
                        <div class="custom-select">
                            <select name="status">
                                <option value="0">Pilih status warga:</option>
                                <option value="Meninggal">Meninggal</option>
                                <option value="Pindah">Pindah</option>
                                <option value="Hilang">Hilang</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-box2">
                        <span class="details">Tanggal Lapor</span>
                        <input type="date" placeholder="" required name="tanggal_lapor">
                    </div>
                    <div class="input-box2">
                        <span class="details">Catatan Peristiwa</span>
                        <input type="text" style="height: 180px;" placeholder="" required name="peristiwa">
                    </div>
                </div> --}}

                <div class="button">
                    <button class="tom1" type="submit">Iya</button>
                    <a class="tom2" href="{{ url('/datawargart') }}" style="padding: 15px 30px; text-decoration: none;">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
