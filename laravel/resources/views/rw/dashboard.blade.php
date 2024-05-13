@extends('rw.index')
@section('main')
    <div class="topbar" style="background-color: #B0C4DE">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        <div class="judul">
            <h1>RW</h1>
        </div>
        <div class="user">
        </div>
    </div>
    <h1 style="text-align: center; margin-top: 10px;">Sistem Informasi Rukun Warga 01</h1>

    <main class="table" id="customers_table">
        <div class="plate">
            Berita Terkini
        </div>
        <section class="table__body1">

            <div class="card">
                <div class="jud">Kerja Bakti Rutinan
                    <img src="assets/imgs/cardd.png" alt="">
                </div>

                <div class="cont">
                    Diberitahukan kepada seluruh warga RW 01 akan diakan Kerja Bakti Rutinan. Kegiatan Kerja Bakti rutinan warga akan dilaksanakan pada:<br>
                    Tanggal: 12 Mei 2024<br>
                    Tempat: Halaman depan kantor desa
                    <a href="" class="aksi101">Detail</a>
                </div>

            </div>
            <div class="card">
                <div class="jud">Kerja Bakti Rutinan
                    <img src="assets/imgs/cardd.png" alt="">
                </div>

                <div class="cont">
                    Diberitahukan kepada seluruh warga RW 01 akan diakan Kerja Bakti Rutinan. Kegiatan Kerja Bakti rutinan warga akan dilaksanakan pada:<br>
                    Tanggal: 10 April 2024<br>
                    Tempat: Area makam
                    <a href="" class="aksi101">Detail</a>
                </div>
            </div>
        </section>

        <div class="plate2">
            Laporan Keuangan
        </div>
        <section class="table__body2">

            <table>
                <thead>
                    <tr>
                        <th> No </th>
                        <th> Tanggal </th>
                        <th> Deskripsi </th>
                        <th> Masuk </th>
                        <th> Keluar </th>
                        <th> Saldo </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 1 </td>
                        <td> 01 Mei 2022 </td>
                        <td> Iuran Kas </td>
                        <td> Rp 700.000 </td>
                        <td> - </td>
                        <td> Rp 700.000 </td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> 02 Mei 2024 </td>
                        <td> Iuran Sampah </td>
                        <td> Rp 300.000 </td>
                        <td> - </td>
                        <td> Rp 1.000.000 </td>

                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> 04 Mei 2024 </td>
                        <td> Konsumsi Kerja Bakti </td>
                        <td> - </td>
                        <td> Rp 200.000 </td>
                        <td> Rp 800.000 </td>
                    </tr>
                </tbody>
            </table>
        </section>

        </section>
    </main>

    <!-- Modal Box ItemDetail Start -->
    <div class="modal4" id="item-detail4">
        <div class="modal-container4">
            <a href="#" class="close-icon"><i data-feather="x"></i></a>
            <div class="modal-content4">
                <h1>Detail Informasi</h1>
                <img src="assets/imgs/cardd.png" alt="produk 1">
                <div class="product-content4">
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

    <script src="assets/js/dasbo.js"></script>
@endsection
