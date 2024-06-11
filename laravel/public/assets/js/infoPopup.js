// Mendapatkan elemen modal dengan id 'item-detail'
const detailModal = document.querySelector('#item-detail');
const detailContainer = document.querySelector('.modal-container');

const detailButtons = document.querySelectorAll('.detail-info');

// Fungsi untuk membuka modal dengan animasi fade in
function openModal(id) {
    detailModal.classList.add('show');
    detailModal.classList.remove('hide');
    detailContainer.classList.add('show');
    detailContainer.classList.remove('hide');
    detailModal.style.display = 'flex';

    $.ajax({
        url: `http://klp7.dhanifudin.com/tampil_info/${id}`, // Ganti dengan URL endpoint yang sesuai
        method: 'GET',
        success: function(info) {
            document.getElementById('info-judul').innerText = info.judul;
            document.getElementById('info-deskripsi').innerText = info.deskripsi;
            document.getElementById('info-tanggal').innerText = new Date(info.tanggal).toLocaleDateString('id-ID', { day: '2-digit', month: 'long', year: 'numeric' });
            document.getElementById('info-tempat').innerText = info.tempat;
            document.getElementById('info-gambar').src = `assets/imgs/info/${info.gambar}`;
            document.getElementById('info-kategori').innerText = info.kategori;
            document.getElementById('info-status').innerText = info.status;
        },
        error: function() {
            alert('Gagal mengambil data informasi.');
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
