            <link rel="stylesheet" href="{{ asset('assets/css/templates/toast.css') }}">

            <div id="toast-container" class="toast-container">
                {{-- PESAN SUKSES --}}
                @if(session('success'))
                    <div class="toast toast-success">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- PESAN ERROR --}}
                @if(session('error'))
                    <div class="toast toast-error">
                        {{ session('error') }}
                    </div>
                @endif

                {{-- PESAN INFORMASI --}}
                @if(session('info'))
                    <div class="toast toast-info">
                        {{ session('info') }}
                    </div>
                @endif

                {{-- PESAN PERINGATAN --}}
                @if(session('warning'))
                    <div class="toast toast-warning">
                        {{ session('warning') }}
                    </div>
                @endif
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const toasts = document.querySelectorAll('.toast');
                    toasts.forEach(toast => {
                        toast.style.display = 'block';
                        setTimeout(() => {
                            toast.style.opacity = '0';
                            toast.querySelector('::after').style.width = '0';
                        }, 3000); // Toast akan hilang setelah 3 detik
                    });
                });
            </script>