{{-- PERBAIKAN --}}
<link rel="stylesheet" href="{{ asset('assets/css/templates/hapus-popup.css') }}">

<!-- Pop-up konfirmasi hapus -->
<div class="modal" id="deletePopup">
    <div class="modal-container">
        <span class="close-icon" onclick="closePopup()"><i data-feather="x"></i></span>
        <div class="modal-content">
            <p>Apakah Anda yakin ingin menghapus data ini?</p>
            <form id="deleteForm" method="POST" action="">
                @csrf
                @method('DELETE')
                <button type="submit">Ya</button>
                <button type="button" onclick="closePopup()">Tidak</button>
            </form>
        </div>
    </div>
</div>

<script>
    function confirmDelete(id) {
        const form = document.getElementById('deleteForm');
        form.action = 'SIMRW/laravel/public//hapus_info/' + id;
        document.getElementById('deletePopup').classList.add('show');
    }

    function closePopup() {
        document.getElementById('deletePopup').classList.remove('show');
    }
</script>