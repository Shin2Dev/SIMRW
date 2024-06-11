@extends('templates.templates')
@section('main')
@php
    use Carbon\Carbon;
    Carbon::setLocale('id');
@endphp
    <header class="kop-surat">
        <!-- <img src="logo-institusi.png" alt="Logo Institusi"> -->
        <h2>RUKUN TETANGGA - {{ $surat->warga->rt->nama_rt }}</h2>
        <h2>RUKUN WARGA - {{ $surat->warga->rw }}</h2>
        <address>Tegalgondo Gondang, Kec. Karangploso</address>
    </header>
    <hr />
    <section class="isi-surat">
        <div class="judul-surat">
            <h3>{{ $surat->jenis_surat->nama_jenis_surat }}</h3>
            <p>Nomor: {{ $surat->nomor_surat }}</p>
        </div>
        
        <div class="isi">
            <p>
                Yang bertanda tangan dibawah ini Ketua RT. {{ $surat->warga->rt->nama_rt }} RW. {{ $surat->warga->rw }}
                Tegalgondo Gondang, Kec. Karangploso, menerangkan bahwa:
            </p>
            <ul>
                <li>Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $surat->warga->nama }}</li>
                <li>NIK &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $surat->warga->nik }}</li>
                <li>Jenis Kelamin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $surat->warga->jenis_kelamin }}</li>
                <li>Tempat, tgl lahir &nbsp;&nbsp;&nbsp;&nbsp;: {{ $surat->warga->tempat_lahir }}, {{ Carbon::parse($surat->warga->tanggal_lahir)->translatedFormat('j F Y') }}</li>
                <li>Agama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $surat->warga->agama }}</li>
                <li>Status perkawinan : {{ $surat->warga->status_kawin }}</li>
                <li>Pekerjaan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $surat->warga->pekerjaan }}</li>
                <li>Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $surat->warga->alamat_domisili }}</li>
            </ul>
            @if ($surat->jenis_surat->nama_jenis_surat == "Surat Keterangan Domisili")
                <p>Benar-benar berdomisili di alamat tersebut dan telah tinggal di wilayah RT {{ $surat->warga->rt->nama_rt }} RW {{ $surat->warga->rw}} Tegalgondo Gondang, Kec. Karangploso sejak {{ Carbon::parse($surat->warga->created_at)->translatedFormat('j F Y') }}.</p>
            @else
                <p>Benar-benar mempunyai usaha di wilayah RT {{ $surat->warga->rt->nama_rt }} RW {{ $surat->warga->rw}} Tegalgondo Gondang, Kec. Karangploso.</p>
            @endif
        </div>
        <div class="penutup">
            <p>Demikian {{ $surat->jenis_surat->nama_jenis_surat }} ini dibuat untuk dapat digunakan sebagaimana mestinya. Terima kasih</p>
        </div>
    </section>
    <footer class="ttd-surat">
        <p>Malang, {{ Carbon::parse($surat->created_at)->translatedFormat('j F Y') }}</p>
        <p>Hormat kami,</p>
        <p>{{ $surat->ketua_rt->warga->nama }}</p>
    </footer>

    <script>
        window.print({ headers: false, footers: false });
    </script>
@endsection

