@extends('templates.templates')
@section('main')
    {{-- CSS  --}}
    <link rel="stylesheet" href="{{ asset('assets/css/templates/sidebar.css') }}">
    <!-- =============== NAVIGASI ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                {{-- SIMRW --}}
                <li>
                    <div class="main-titles">
                        <div class="toggle-title">
                            <h2 class="title">SIMRW</h2>
                        </div>
                        <div class="sidebars-close">
                            <span class="close-icon"><i data-feather="x"></i></span>
                        </div>
                    </div>
                </li>

                <hr>

                {{-- DASHBOARD --}}
                <li>
                    <a href="{{ route('dashboard', ['role' => $role]) }}">
                        <span class="icon">
                            <ion-icon name="grid"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                {{-- PROFILE --}}
                <li>
                    <a href="{{ route('profil', ['role' => $role]) }}">
                        <span class="icon">
                            <ion-icon name="people-circle-outline"></ion-icon>
                        </span>
                        <span class="title">Profil</span>
                    </a>
                </li>

            {{-- DATA WARGA --}}
            @if ($role != 'warga')
                @if ($role == 'rw')
                {{-- DATA Dropdown Jika Role nya RW --}}
                {{-- PERBAIKAN --}}
                <li>
                    <a href="{{ route('data_warga', ['role' => $role]) }}">
                        <span class="icon">
                            <ion-icon name="people-circle-outline"></ion-icon>
                        </span>
                        <span class="title">Data Warga</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('data_keluarga', ['role' => $role]) }}">
                        <span class="icon">
                            <ion-icon name="people-circle-outline"></ion-icon>
                        </span>
                        <span class="title">Data Keluarga</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('data_rt', ['role' => $role]) }}">
                        <span class="icon">
                            <ion-icon name="people-circle-outline"></ion-icon>
                        </span>
                    <span class="title">Data RT</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('data_rw', ['role' => $role]) }}">
                        <span class="icon">
                            <ion-icon name="people-circle-outline"></ion-icon>
                        </span>
                        <span class="title">Data RW</span>
                    </a>
                </li>         
                @else
                {{-- JIKA UNTUK RT AJA --}}
                <li>
                    <a href="{{ route('data_warga', ['role' => $role]) }}">
                        <span class="icon">
                            <ion-icon name="people-circle-outline"></ion-icon>
                        </span>
                        <span class="title">Data Warga</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('data_keluarga', ['role' => $role]) }}">
                        <span class="icon">
                            <ion-icon name="people-circle-outline"></ion-icon>
                        </span>
                        <span class="title">Data Keluarga</span>
                    </a>
                </li>
                @endif
            @endif

                {{-- SURAT --}}
                <li>
                    <a href="{{ route('surat', ['role' => $role]) }}">
                        <span class="icon">
                            <ion-icon name="mail-outline"></ion-icon>
                        </span>
                        <span class="title">Surat</span>
                    </a>
                </li>

                {{-- BANTUAN SOSIAL --}}
                <li>
                    <a href="{{ route('bantuan_sosial', ['role' => $role]) }}">
                        <span class="icon">
                            <img src="{{ asset('assets/imgs/bantuanicon.png') }}" alt="" style="margin-bottom: 3px">
                        </span>
                        <span class="title">Bantuan Sosial</span>
                    </a>
                </li>

                {{-- KEUANGAN --}}
                <li>
                    <a href="{{ route('keuangan', ['role' => $role]) }}">
                        <span class="icon">
                            <ion-icon name="logo-usd"></ion-icon>
                        </span>
                        <span class="title">Keuangan</span>
                    </a>
                </li>

                {{-- INFORMASI KEGIATAN --}}
                <li>
                    <a href="{{ route('info', ['role' => $role]) }}">
                        <span class="icon">
                            <ion-icon name="list"></ion-icon>
                        </span>
                        <span class="title">Informasi Kegiatan</span>
                    </a>
                </li>

                {{-- LOGOUT --}}
                <li>
                    <a href="{{ route('logout') }}">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Logout</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= MAIN CONTENT SIDEBAR ==================== -->
        <div class="main">
            @yield('main-content')
        </div>
    </div>

    <!-- =========== js =========  -->
    <script src="{{ asset('assets/js/sidebar.js') }}"></script>

    <!-- ====== link icon online ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Icons -->
    <script>
        feather.replace();
    </script>
@endsection
