@extends('templates.templates')
@section('main')
@include('templates.toast');
    <div class="container">
        <header>
            <h1>Selamat Datang</h1>   
            <div class="divider">
                <div class="line"></div>
                <p>SIMRW</p>
                <div class="line"></div>
            </div>
        </header>

        <main>
            <form action="{{ route('login') }}" method="POST" class="login-form">
                @csrf

                <div class="form-group">
                    <label for="username">Username (NIK)</label>
                    <div class="custom-input">
                        <input type="text" name="username" id="username" placeholder="Masukkan Username" autocomplete="off" required>
                        <i class='bx bx-at'></i>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="custom-input">
                        <input type="password" name="password" id="password" placeholder="Masukkan Password" required>
                        <i class='bx bx-lock'></i>
                    </div>
                </div>

                <button class="login" type="submit">Login</button>
            </form>

            {{-- <form action="{{ route('forgot-password') }}" method="POST"> --}}
            <form method="POST" action="{{ route('forgot_password') }}" class="forgot-password-form" style="display: none;">
                @csrf

                <div class="form-group">
                    <label for="nik">NIK</label>
                    <div class="custom-input">
                        <input type="text" name="nik" id="nik" placeholder="Masukkan NIK" autocomplete="off" required>
                        <i class='bx bx-at'></i>
                    </div>
                </div>

                <button class="login" type="submit">Verifikasi NIK</button>
            </form>

            <div class="forgot-password">
                <a href="javascript:void(0);">Lupa Password?</a>
            </div>

            <div class="login-button back-to-home" style="display: none">
                <a href="javascript:void(0);">Login</a>
            </div>

            <div class="back-to-home">
                <a href="{{ route('landing') }}">Kembali ke Halaman Utama</a>
            </div>
        </main>

        <script>
            document.querySelector('.forgot-password a').addEventListener('click', function(event) {
                event.preventDefault();
                document.querySelector('.forgot-password-form').style.display = 'block';
                document.querySelector('.forgot-password').style.display = 'none';
                document.querySelector('.login-form').style.display = 'none'
                document.querySelector('.login-button').style.display = 'block'
            });

            document.querySelector('.login-button a').addEventListener('click', function(event) {
                event.preventDefault();
                document.querySelector('.forgot-password-form').style.display = 'none';
                document.querySelector('.forgot-password').style.display = 'block';
                document.querySelector('.login-form').style.display = 'block'
                document.querySelector('.login-button').style.display = 'none'
            });
        </script>
    </div>
@endsection
