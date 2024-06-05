{{-- PERBAIKAN --}}
@extends('templates.form')
@section('form-content')
    
{{-- PERBAIKAN --}}
<div class="input-box">
    <label class="details">Nomor KK</label>
    <input type="text" id="nomor-kk" name="nomor-kk" required autocomplete="off">
</div>
<div class="input-box">
    <label class="details">Jumlah Anggota Keluarga</label>
    <input type="number" id="jumlah-anggota-keluarga" name="jumlah-anggota-keluarga" required autocomplete="off" oninput="generateForms()">
</div>

<section class="forms" id="keluarga-forms"></section>

<script>
    function generateForms() {
        const jumlahAnggota = document.getElementById('jumlah-anggota-keluarga').value;
        const formsContainer = document.getElementById('keluarga-forms');
        formsContainer.innerHTML = '';

        for (let i = 1; i <= jumlahAnggota; i++) {
            const form = document.createElement('div');
            form.className = 'dropdown-forms';
            form.innerHTML = `
            <hr />
            <h3>Anggota Keluarga ${i}</h3>
            <div class="user-details">
                <div class="input-box">
                    <label class="details" for="nik-${i}">NIK</label>
                    <input type="text" id="nik-${i}" name="nik" required autocomplete="off" oninput="fetchNama(${i})">
                </div>
                <div class="input-box">
                    <label class="details" for="nama-${i}">Nama Lengkap</label>
                    <input type="text" id="nama-${i}" name="nama" required autocomplete="off">
                </div>
                <div class="input-box">
                    <label class="details" for="status_keluarga-${i}">Status Keluarga</label>
                    <input type="text" id="status_keluarga-${i}" name="status_keluarga" required autocomplete="off">
                </div>
            </div>
            `;
            formsContainer.appendChild(form);
        }
    }
</script>

@endsection