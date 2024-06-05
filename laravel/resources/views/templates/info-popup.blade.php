            {{-- CSS --}}
            <link rel="stylesheet" href="{{ asset('assets/css/templates/info-popup.css') }}">

            <!-- Modal Box ItemDetail Start -->
            <div class="modal" id="item-detail">
                <div class="modal-container">
                    <span class="close-icon" onclick="closeModal()"><i data-feather="x"></i></span>
                    <div class="modal-content">
                        <h1>{{ strtoupper('Detail Informasi') }}</h1>
                        <img id="info-gambar" src="" alt="Detail Informasi">
                        <div class="product-content">
                            <h3 id="info-judul"></h3>
                            <hr />
                            <p id="info-deskripsi"></p>
                            <ul>
                                <li>Tanggal: <span id="info-tanggal"></span></li>
                                <li>Tempat: <span id="info-tempat"></span></li>
                                <li>Kategori: <span id="info-kategori"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Box ItemDetail End -->

            <!-- Menyertakan file JavaScript -->
            <script src="{{ asset('assets/js/infoPopup.js') }}"></script>

