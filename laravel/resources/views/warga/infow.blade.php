@extends('warga.indexwarga')
@section('main')
    <link rel="stylesheet" href="assets/css/info.css">
    <div class="topbar" style="background-color: #B0C4DE">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        <div class="judul">
            <h1>WARGA</h1>
        </div>
        <div class="user">
        </div>
    </div>
    <h1 style="text-align: start; margin-top: 10px; margin-left: 30px;">Home > Informasi Kegiatan</h1>

    <div class="cardinfo">
        <div class="jud">Kerja Bakti Rutinan
            <img src="assets/imgs/cardd.png" alt="">
        </div>

        <div class="cont">
            Kerja Bakti Rutinan RW 001 <br>

            Hari/Tanggal: Minggu, 17 Mei 2024 <br>

            Jam: 07:00 - 11:00 WIB <br>

            Lokasi: Jalan Borobudur Agung Tim, RW 001, Kelurahan Mojolangu, Kecamatan Lowokwaru, Kota Malang
            <a href="" class="aksi10">Detail</a>
        </div>

    </div>

    <div class="cardinfo2">
        <div class="jud">Kegiatan Keagamaan
            <img src="assets/imgs/cardd.png" alt="">
        </div>

        <div class="cont">
            Peringatan Isra Mikraj dan Haul Guru Sekumpul di RW 001 <br>

            Hari/Tanggal: Sabtu, 27 Mei 2024 <br>

            Jam: 18:30 - 22:00 WIB <br>

            Lokasi: Masjid Baitul Ihsan, RW 001<br>
            <a href="" class="aksi10">Detail</a>
        </div>

    </div>

    <div class="cardinfo3">
        <div class="jud">Kegiatan Olahraga & Kesehatan
            <img src="assets/imgs/cardd.png" alt="">
        </div>

        <div class="cont">
            Senam Pagi dan Pemeriksaan Kesehatan Gratis di RW 001 <br>

            Hari/Tanggal: Minggu, 28 Mei 2024 <br>

            Jam: 06:00 - 09:00 WIB <br>

            Lokasi: Lapangan RW 001, Kelurahan Mojolangu, Kecamatan Lowokwaru, Kota Malang <br>
            <a href="" class="aksi10">Detail</a>
        </div>

    </div>

    <div class="cardinfo4">
        <div class="jud">Kegiatan Keamanan & Ketertiban
            <img src="assets/imgs/cardd.png" alt="">
        </div>

        <div class="cont">
            Siskamling dan Patroli Keamanan di RW 001 <br>

            Hari/Tanggal: Setiap malam, mulai dari pukul 21:00 - 03:00 WIB <br>

            Lokasi: Jalan-jalan di wilayah RW 001, Kelurahan Mojolangu, Kecamatan Lowokwaru, Kota Malang <br>
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
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores corporis tenetur fugiat. Hic enim,
                        nostrum accusamus dicta consectetur tempore, molestiae numquam natus, ipsam deserunt quisquam. Vero
                        reprehenderit quos tempora eveniet, commodi minus doloremque minima. Vel quasi iure reiciendis rerum
                        eos magni quos doloribus aperiam exercitationem quisquam laboriosam, eaque at eligendi?</p>

                    {{-- <a href="#">Kembali</a> --}}

                </div>
            </div>
        </div>
    </div>
    <!-- Modal Box ItemDetail End -->

    <script src="assets/js/info.js"></script>
@endsection
