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
            <form action="{{ route('ubah_pass') }}" method="POST" class="login-form">
                @csrf

                <div class="form-group">
                    <label for="password_baru">Password Baru</label>
                    <div class="custom-input">
                        <input type="password" id="password_baru" name="password_baru" placeholder="Masukkan Password Baru" required autocomplete="off">
                        <i class='bx bx-lock'></i>
                    </div>
                </div>

                <div class="form-group">
                    <label for="ulangi_password_baru">Ulangi Password Baru</label>
                    <div class="custom-input">                        
                        <input type="password" id="ulangi_password_baru" name="ulangi_password_baru" placeholder="Ulangi Password Baru" required autocomplete="off">
                        <i class='bx bx-lock'></i>
                    </div>
                </div>

                <button class="login" type="submit">Ubah Password</button>
            </form>
        </main>
    </div>
@endsection
