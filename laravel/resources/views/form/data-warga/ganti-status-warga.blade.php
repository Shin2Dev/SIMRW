@extends('templates.form')
@section('form-content')
<div class="input-box">
    <label for="status_warga" class="details">Status</label>
    <div class="custom-select">
        <select name="status_warga" id="status_warga">
            <option value="" disabled selected>Pilih status warga:</option>
            <option value="Aktif">Aktif</option>
            <option value="Meninggal">Meninggal</option>
            <option value="Pindah">Pindah</option>
            <option value="Hilang">Hilang</option>
        </select>
    </div>
</div>

<div class="input-box">
    <label for="catatan_status" class="details">Catatan Status</label>
    <textarea id="catatan_status" name="catatan_status" required></textarea>
</div>
@endsection

