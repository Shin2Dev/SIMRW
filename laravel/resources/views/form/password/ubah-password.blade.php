@extends('templates.form')
@section('form-content')
@include('templates.toast')
<div class="input-box">
    <label for="password_lama" class="details">Password Lama <span style="color: red;">*</span></label>
    <input type="password" id="password_lama" name="password_lama" required autocomplete="off">
</div>
<div class="input-box">
    <label for="password_baru" class="details">Password Baru <span style="color: red;">*</span></label>
    <input type="password" id="password_baru" name="password_baru" required autocomplete="off">
</div>

@endsection