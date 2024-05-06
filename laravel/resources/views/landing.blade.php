<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/landing.css">
    <title>Landing</title>
</head>

<body>

    <nav>
        <a href="#" class="logo">SIMRW</a>
        <div class="links">
        </div>

        <div class="login">
            <a href="{{ url('/login') }}">
                <button class="signup">Login</button>
            </a>
            <a href="{{ url('/register') }}">
                <button>Daftar</button>
            </a>
        </div>

    </nav>

    <header>
        <div class="left">
            <h1>Sistem Informasi <span>Rukun Warga</span></h1>
            <p>Sistem Informasi RW 01 (SIMRW) adalah sebuah aplikasi berbasis web yang dirancang untuk membantu pengurus RW dan RT dalam mengelola data dan informasi di wilayah RW 01, serta memfasilitasi komunikasi antara warga, pengurus RW dan RT. 
            </p>
            <a href="{{ url('/login') }}">
                <i class='bx bx-log-in'></i>
                <span>Login</span>
            </a>
        </div>
        <img src="assets/imgs/header.png">
    </header>

</body>

</html>
