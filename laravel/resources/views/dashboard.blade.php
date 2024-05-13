@extends('index')
@section('main')
<div class="topbar" style="background-color: #B0C4DE">
    <div class="toggle">
        <ion-icon name="menu-outline"></ion-icon>
    </div>

    <div class="search">
        <label>
            <input type="text" placeholder="Search here">
            <ion-icon name="search-outline"></ion-icon>
        </label>
    </div>

    <div class="user">
        <img src="assets/imgs/customer01.jpg" alt="">
    </div>
</div>
<h1 style="text-align: center; margin-top: 10px;">Sistem Informasi Rukun Warga 01</h1>

@endsection
