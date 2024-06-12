@extends('templates.templates')
@php
    use Carbon\Carbon;
    Carbon::setLocale('id');
@endphp

@section('main')
    <!-- Link to animate.min.css -->
    {{-- <link rel="stylesheet" href="assets/css/animate.min.css"> --}}
    <!-- Link to bootstrap.min.css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Link to font-awesome.min.css -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Navigation Bar -->
    <nav class="navbar navbar-default navbar-fixed-top templatemo-nav" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- Navbar toggle button for mobile view -->
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <!-- Navbar brand/logo -->
                {{-- <a href="#" class="navbar-brand">
                    <img src="assets/imgs/logo.png" alt="Logo">
                </a> --}}
            </div>
            <div class="collapse navbar-collapse">
                <!-- Navbar links -->
                <ul class="nav navbar-nav navbar-right text-uppercase">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#feature">Features</a></li>
                    <li><a href="#aboutus">About Us</a></li>
                    <li><a href="#informasi">Informasi</a></li>
                    <li><a href="#login">Login</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Home Section -->
    <section id="home">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <!-- Main heading -->
                <h1 class="display-4"><span>Sistem Informasi</span><br><span>Rukun Warga</span></h1>
                <!-- Description paragraph -->
                <p>
                    Sistem Informasi Rukun Warga (SIMRW) adalah sebuah aplikasi berbasis web yang dirancang untuk membantu pengurus
                    RW dan RT dalam mengelola data dan informasi di wilayah RW 01, serta memfasilitasi komunikasi antara warga, pengurus RW dan RT.
                </p>
                {{-- <a href="#" class="btn btn-info btn-lg tombol">Login</a> --}}
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="feature">
        <div class="container">
            <div class="row">
                <!-- Feature: Data Warga -->
                <div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
                    <i class="fa fa-user"></i>
                    <h3 class="text-uppercase">Data Warga</h3>
                    <p>Menu 'Data Warga' menampilkan pengelolaan dan dokumentasi informasi tentang penduduk di wilayah Rukun Warga.</p>
                </div>

                <!-- Feature: Surat -->
                <div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
                    <i class="fa fa-envelope-o"></i>
                    <h3 class="text-uppercase">Surat</h3>
                    <p>Menu 'Surat' digunakan oleh warga untuk mengajukan surat yang dibutuhkan kepada ketua RT di wilayah Rukun Warga.</p>
                </div>

                <!-- Feature: Bantuan Sosial -->
                <div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
                    <i class="fa fa-hand-o-up"></i>
                    <h3 class="text-uppercase">Bantuan Sosial</h3>
                    <p>Menu 'Bantuan Sosial' warga yang layak diberikan bantuan sosial oleh pemerintah di wilayah Rukun Warga.</p>
                </div>
            </div>

            <div class="row">
                <!-- Feature: Keuangan -->
                <div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
                    <i class="fa fa-money"></i>
                    <h3 class="text-uppercase">Keuangan</h3>
                    <p>Menu 'Keuangan' menampilkan pengelolaan keuangan oleh RT wilayah Rukun Warga.</p>
                </div>

                <!-- Feature: Informasi Kegiatan -->
                <div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
                    <i class="fa fa-calendar-o"></i>
                    <h3 class="text-uppercase">Informasi Kegiatan</h3>
                    <p>Menu 'Informasi Kegiatan' menampilkan informasi kegiatan yang akan dilaksanakan di wilayah Rukun Warga.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="aboutus">
        <div class="container">
            <div class="row">
                <!-- About Us Image -->
                <div class="col-md-6 wow fadeInRight" data-wow-delay="0.6s">
                    <img src="assets/imgs/home-bg.jpg" class="img-responsive img-rounded" alt="feature img">
                </div>
                <!-- About Us Text -->
                <div class="col-md-6 wow fadeInLeft" data-wow-delay="0.6s">
                    <h2 class="text-uppercase">ABOUT US</h2>
                    <p>Sistem Informasi Rukun Warga (SIMRW) adalah sebuah aplikasi berbasis web yang dirancang untuk membantu pengurus
                        RW dan RT dalam mengelola data dan informasi di wilayah RW 01, serta memfasilitasi komunikasi antara warga, pengurus RW dan RT.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Informasi Section -->
    <section id="informasi">
        <div class="container">
            <div class="row">
                <!-- Informasi Heading -->
                <div class="col-md-12 wow bounceIn">
                    <h2 class="text-uppercase">Informasi Kegiatan</h2>
                </div>
                <!-- Informasi Item -->
                @foreach ($infos as $info)
                <div class="col-md-4 wow fadeIn" data-wow-delay="0.6s">
                    <div class="pricing text-uppercase">
                        <div class="pricing-title">
                            <img src="assets/imgs/info/{{ $info->gambar_info }}" alt="pricing img" class="pricing-image">
                        </div>
                        <ul style="padding-bottom: 50px;">
                            <li><b>{{ $info->judul_info }}</b></li>
                            <li>{{ $info->deskripsi_info}}</li>
                            <li>Tanggal: {{ Carbon::parse($info->tanggal_info)->translatedFormat('d F Y') }}</li>
                            <li>Tempat: {{ $info->tempat_info }}</li>
                        </ul>
                        {{-- <button class="btn btn-primary text-uppercase">Detail</button> --}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Login Section -->
    <section id="login">
        <div class="container">
            <div class="row">
                <!-- Login Text -->
                <div class="col-md-6 wow fadeInLeft" data-wow-delay="0.6s">
                    <h2 class="text-uppercase">Login</h2>
                    <p>Silahkan login untuk melanjutkan</p>
                    <a href="{{ route('login') }}" class="btn btn-primary text-uppercase">Login</a>
                </div>
                <!-- Login Image -->
                <div class="col-md-6 wow fadeInRight" data-wow-delay="0.6s">
                    <img src="assets/imgs/gambarlogin.jpg" class="img-responsive img-rounded" alt="feature img">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <!-- Contact Information -->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <h2 class="text-uppercase">Contact Us</h2>
                        <p>Untuk informasi lebih lanjut anda bisa mengakses melalui kontak di bawah ini,
                            Kami selalu siap membantu Anda dengan segala pertanyaan atau kebutuhan yang mungkin
                            Anda miliki. Jangan ragu untuk menghubungi kami melalui salah satu kontak berikut:</p>
                        <address>
                            <p><i class="fa fa-map-marker"></i>Tegalgondo Gondang, Kec. Karangploso</p>
                            <p><i class="fa fa-phone"></i>081230875757</p>
                            <p><i class="fa fa-envelope-o"></i>rwsatutegalgondo@gmail.com</p>
                        </address>
                    </div>
                    <!-- Contact Form Placeholder -->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="contact-form">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <div class="row">
                <p>Copyright © <span>Sistem Informasi Rukun Warga</span></p>
            </div>
        </div>
    </footer>

    <!-- jQuery Script -->
    {{-- <script src="assets/js/jquery.js"></script> --}}
    <!-- Bootstrap Script -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- WOW.js Script -->
    {{-- <script src="assets/js/wow.min.js"></script> --}}
    <!-- Single Page Nav Script -->
    {{-- <script src="assets/js/jquery.singlePageNav.min.js"></script> --}}
@endsection
