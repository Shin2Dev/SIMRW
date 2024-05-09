@extends('rt.indexrt')
@section('main')
    <link rel="stylesheet" href="assets/css/info.css">
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
    <h1 style="text-align: start; margin-top: 10px; margin-left: 30px;">Home > Informasi Kegiatan</h1>

    <h3><a href="{{ url('/tambahinfo') }}" class="aksi41">+ Tambah</a> </h3>

    <div class="cardinfo">
        <div class="jud">Kerja Bakti Rutinan
            <img src="assets/imgs/cardd.png" alt="">
        </div>

        <div class="cont">
                Diberitahukan kepada seluruh warga RW 01 akan diakan Kerja Bakti Rutinan. Kegiatan Kerja Bakti rutinan warga akan dilaksanakan pada:<br>
                Tanggal: 12 Mei 2024<br>
                Tempat: Halaman depan kantor desa
            <a href="" class="aksi10">Detail</a>
        </div>

    </div>

    <div class="cardinfo2">
        <div class="jud">Kerja Bakti Rutinan
            <img src="assets/imgs/cardd.png" alt="">
        </div>

        <div class="cont">
            Diberitahukan kepada seluruh warga RW 01 akan diakan Kerja Bakti Rutinan. Kegiatan Kerja Bakti rutinan warga akan dilaksanakan pada:<br>
            Tanggal: 10 April 2024<br>
            Tempat: Area makam 
            <a href="" class="aksi10">Detail</a>
        </div>

    </div>

    <div class="cardinfo3">
        <div class="jud">Kerja Bakti Rutinan
            <img src="assets/imgs/cardd.png" alt="">
        </div>

        <div class="cont">
            Diberitahukan kepada seluruh warga RW 01 akan diakan Kerja Bakti Rutinan. Kegiatan Kerja Bakti rutinan warga akan dilaksanakan pada:<br>
            Tanggal: 10 April 2024<br>
            Tempat: Area makam   
            <a href="" class="aksi10">Detail</a>
        </div>

    </div>

    <div class="cardinfo4">
        <div class="jud">Kerja Bakti Rutinan
            <img src="assets/imgs/cardd.png" alt="">
        </div>

        <div class="cont">
            Diberitahukan kepada seluruh warga RW 01 akan diakan Kerja Bakti Rutinan. Kegiatan Kerja Bakti rutinan warga akan dilaksanakan pada:<br>
            Tanggal: 12 Mei 2024<br>
            Tempat: Halaman depan kantor desa
            <a href="" class="aksi10">Detail</a>
        </div>

    </div>




    <!-- Modal Box ItemDetail Start -->
    <div class="modal2" id="item-detail2">
        <div class="modal-container2">
            <a href="#" class="close-icon"><i data-feather="x"></i></a>
            <div class="modal-content2">
                <h1>Detail Informasi</h1>
                <img src="assets/imgs/cardd.png" alt="produk 1">
                <div class="product-content2">
                    <p>Diberitahukan kepada seluruh warga RW 01 bahwa akan diadakan Kerja Bakti Rutinan. Kegiatan Kerja Bakti rutinan warga akan dilaksanakan pada <br>

                        Tanggal: 12 Mei 2024 <br>
                        Tempat : Halaman depan kantor desa <br>
                        Waktu  : 08.00 WIB <br>
                        
                        Mohon partisipasi aktif dari seluruh warga untuk turut serta dalam kegiatan ini guna menjaga kebersihan dan keindahan lingkungan kita bersama. Terima kasih atas perhatian dan kerjasamanya.</p>

                    {{-- <a href="#">Kembali</a> --}}

                </div>
            </div>
        </div>
    </div>
    <!-- Modal Box ItemDetail End -->

    <script src="assets/js/info.js"></script>
@endsection
