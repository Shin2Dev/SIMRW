@extends('templates.sidebar')

@section('main-content')
    @include('templates.headers')

    <div class="container2">
        <header class="title">
            <h1>{{ $title }}</h1>
        </header>
        <main class="content">
            <article>
                <section class="user-details">
                    @yield('detail-content')
                </section>
                <div class="button">
                    <a href="{{ route($pages, ['role' => $role]) }}" class="btn-back">Kembali</a>
                </div>
            </article>
        </main>
    </div>
@endsection

