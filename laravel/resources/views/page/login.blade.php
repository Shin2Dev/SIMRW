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
            <form action="{{ route('login') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="username">Username (NIK / NIP)</label>
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

            <div class="forgot-password">
                <a href="#">Lupa Password?</a>
            </div>

            <div class="back-to-home">
                <a href="{{ route('landing') }}">Kembali ke Halaman Utama</a>
            </div>
        </main>
    </div>
@endsection
