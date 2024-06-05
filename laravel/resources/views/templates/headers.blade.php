            {{-- CSS HEADER --}}
            <link rel="stylesheet" href="{{ asset('assets/css/templates/header.css') }}">
            
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="judul">
                    <h1>{{ strtoupper($role) }}</h1>
                </div>
                <div class="user">
                    {{-- <img src="{{ asset('path/to/user/image.jpg') }}" alt="User Image"> --}}
                </div>
            </div>
