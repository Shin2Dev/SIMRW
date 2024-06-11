@extends('templates.sidebar')

@section('main-content')
    @include('templates.headers')
    @include('templates.toast')

    <h2 class="nav">
        <a href="{{ route('dashboard', ['role' => $role]) }}">Home</a> &gt; Bantuan Sosial
    </h2>

    <main class="table" id="customers_table">
        @if ($role == 'rt')
            @include('page.bantuan_sosial_rt')
        @elseif ($role == 'rw')
            @include('page.bantuan_sosial_rw')
        @else
            @include('page.bantuan_sosial_warga')
        @endif
    </main>
@endsection
