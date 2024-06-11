@extends('templates.sidebar')

@section('main-content')
    @include('templates.headers')

    <div class="container2">
        <header class="title">
            <h1>{{ $title }}</h1>
        </header>
        <main class="content">
            @if ($id)
                <form action="{{ route($route, ['role' => $role, 'id' => $id]) }}" method="POST" enctype="multipart/form-data">
                @else
                <form action="{{ route($route, ['role' => $role]) }}" method="POST" enctype="multipart/form-data">
            @endif
                @csrf
                <section class="user-details">
                    @yield('form-content')
                </section>
                <div class="button">
                    @if ($route == 'verifikasi')
                        <button type="submit" name="status" value="Disetujui" onclick="return confirm('Apakah Anda yakin ingin surat ini disetujui?')">Verifikasi</button>
                        <button type="submit" name="status" value="Ditolak" style="background: red" onclick="return confirm('Apakah Anda yakin ingin surat ini ditolak?')">Tolak</button>
                        <a href="{{ route($pages, ['role' => $role]) }}" class="btn-back">Kembali</a>
                    @else
                        <button type="submit">Submit</button>
                        <a href="{{ route($pages, ['role' => $role]) }}" class="btn-back">Kembali</a>
                    @endif
                </div>
            </form>
        </main>
    </div>
@endsection

