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
                                <li>RT: <span id="info-rt"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Box ItemDetail End -->
            
            <script>
                // Mendapatkan elemen modal dengan id 'item-detail'
                const detailModal = document.querySelector('#item-detail');
                const detailContainer = document.querySelector('.modal-container');

                const detailButtons = document.querySelectorAll('.detail-info');

                // Fungsi untuk membuka modal dengan animasi fade in
                function openModal(role, id) {
                    detailModal.classList.add('show');
                    detailModal.classList.remove('hide');
                    detailContainer.classList.add('show');
                    detailContainer.classList.remove('hide');
                    detailModal.style.display = 'flex';

                    $.ajax({
                        type: 'GET',
                        url: `/SIMRW/laravel/public/${role}/tampil_info/${id}`,
			            // url: `http://klp7.dhanifudin.com/${role}/tampil_info/${id}`
                        dataType: 'json',
                        success: function(info) {
                            document.getElementById('info-judul').innerText = info.judul_info;
                            document.getElementById('info-deskripsi').innerText = info.deskripsi_info;
                            document.getElementById('info-tanggal').innerText = new Date(info.tanggal_info).toLocaleDateString('id-ID', { day: '2-digit', month: 'long', year: 'numeric' });
                            document.getElementById('info-tempat').innerText = info.tempat_info;
                            document.getElementById('info-gambar').src = `assets/imgs/info/${info.gambar_info}`;
                            document.getElementById('info-kategori').innerText = info.kategori;
                            document.getElementById('info-rt').innerText = info.nama_rt;
                        },
                        error: function(xhr, status, error) {
                            alert('Gagal mengambil data informasi. Error: ' + error);
                        }
                    });

                    document.body.style.overflow = 'hidden'; // Mencegah scroll pada body
                }

                // Fungsi untuk menutup modal dengan animasi fade out
                function closeModal() {
                    detailContainer.classList.remove('show');
                    detailContainer.classList.add('hide');
                    detailModal.classList.remove('show');
                    detailModal.classList.add('hide');
                    detailContainer.addEventListener('animationend', () => {
                        detailModal.style.display = 'none';
                        document.body.style.overflow = ''; // Mengembalikan scroll pada body
                    }, { once: true });
                }
            </script>


