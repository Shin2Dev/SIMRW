<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <h1>Daftar Akun</h1>
        <div class="divider">
            <div class="line"></div>
            <p>SIMRW</p>
            <div class="line"></div>
        </div>

        <form>
            <label for="email">Email:</label>
            <div class="custome-input">
                <input type="text" name="nama" placeholder="Masukkan Nama Lengkap" autocomplete="off">
                <i class='bx bx-at'></i>
            </div>
            <div class="custome-input">
                <input type="text" name="nik" placeholder="Masukkan NIK" autocomplete="off">
                <i class='bx bx-at'></i>
            </div>
            <div class="custome-input">
                <input type="email" name="email" placeholder="Masukkan Username" autocomplete="off">
                <i class='bx bx-at'></i>
            </div>
            <label for="password">Password:</label>
            <div class="custome-input">
                <input type="password" name="password" placeholder="Masukkan Password">
                <i class='bx bx-lock-alt'></i>
            </div>
            <button class="login">Register</button>
            <div class="links">
                <a href="/login">Sudah Memiliki Akun?</a>
            </div>
        </form>

    </div>

</body>

</html>
