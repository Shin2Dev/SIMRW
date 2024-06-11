<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="SIMRW, Sistem Informasi, Polinema, Teknik Informatika, Pemrograman">
    <meta name="description" content="Sistem Informasi Rukun Warga (SIMRW) adalah sebuah aplikasi berbasis web 
    yang dirancang untuk membantu pengurus RW dan RT dalam mengelola data dan informasi di wilayah RW 01, serta 
    memfasilitasi komunikasi antara warga, pengurus RW dan RT.">

    {{-- Font Google API --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- Icon Library --}}
    <script src="https://unpkg.com/feather-icons"></script>
    {{-- jQuery JavaScript --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    {{-- CSS and Title --}}

    <base href="http://klp7.dhanifudin.com">
    <link rel="shortcut icon" href="assets/imgs/header.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/templates/root.css">
    <link rel="stylesheet" href="assets/css/{{ $dir }}/{{ $css }}.css">
    <title>{{ $title }}</title>
</head>

{{-- MAIN TEMPLATES --}}
<body>
    @yield('main')
</body>

</html>
