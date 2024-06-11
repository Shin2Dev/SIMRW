@extends('templates.form')
@section('form-content')
    <div class="input-box">
        <label for="nik" class="details">NIK</label>
        <input type="text" id="nik" name="nik" value="{{ $calons->warga->nik }}" old="{{ $calons->warga->nik }}" required autocomplete="off" readonly></input>
    </div>
    <div class="input-box">
        <label for="nama" class="details">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" value="{{ $calons->warga->nama }}" old="{{ $calons->warga->nama }}" required autocomplete="off" readonly></input>
    </div>
    <div class="input-box">
        <label for="pekerjaan" class="details">Pekerjaan</label>
        <select id="pekerjaan" name="pekerjaan" required>
            <option value="" disabled selected>Pilih Pekerjaan</option>
            <option value="Pegawai Swasta / Negeri" {{ $calons->pekerjaan == 'Pegawai Swasta / Negeri' ? 'selected' : '' }}>Pegawai Swasta / Negeri</option>
            <option value="Pengusaha / Pedagang" {{ $calons->pekerjaan == 'Pengusaha / Pedagang' ? 'selected' : '' }}>Pengusaha / Pedagang</option>
            <option value="Petani / Buruh / Karyawan" {{ $calons->pekerjaan == 'Petani / Buruh / Karyawan' ? 'selected' : '' }}>Petani / Buruh / Karyawan</option>
            <option value="Tidak Bekerja / Pengangguran" {{ $calons->pekerjaan == 'Tidak Bekerja / Pengangguran' ? 'selected' : '' }}>Tidak Bekerja / Pengangguran</option>
        </select>
    </div>
    <div class="input-box">
        <label for="penghasilan" class="details">Penghasilan Bulanan</label>
        <select id="penghasilan" name="penghasilan" required>
            <option value="" disabled selected>Pilih Penghasilan Bulanan</option>
            <option value="> Rp. 3.000.000" {{ $calons->penghasilan_bulanan == '> Rp. 3.000.000' ? 'selected' : '' }}> > Rp. 3.000.000</option>
            <option value="Rp. 1.500.000 - Rp. 3.000.000" {{ $calons->penghasilan_bulanan == 'Rp. 1.500.000 - Rp. 3.000.000' ? 'selected' : '' }}>Rp. 1.500.000 - Rp. 3.000.000</option>
            <option value="Rp. 500.000 - Rp. 1.500.000" {{ $calons->penghasilan_bulanan == 'Rp. 500.000 - Rp. 1.500.000' ? 'selected' : '' }}>Rp. 500.000 - Rp. 1.500.000</option>
            <option value="< Rp. 500.000" {{ $calons->penghasilan_bulanan == '< Rp. 500.000' ? 'selected' : '' }}>< Rp. 500.000</option>
        </select>
    </div>
    <div class="input-box">
        <label for="usia" class="details">Usia</label>
        <select id="usia" name="usia" required>
            <option value="" disabled selected>Pilih Usia</option>
            <option value="< 25 Tahun" {{ $calons->usia == '< 25 Tahun' ? 'selected' : '' }}>< 25 Tahun</option>
            <option value="26 - 35 Tahun" {{ $calons->usia == '26 - 35 Tahun' ? 'selected' : '' }}>26 - 35 Tahun</option>
            <option value="36 - 45 Tahun" {{ $calons->usia == '36 - 45 Tahun' ? 'selected' : '' }}>36 - 45 Tahun</option>
            <option value="> 46 Tahun" {{ $calons->usia == '> 46 Tahun' ? 'selected' : '' }}> > 46 Tahun</option>
        </select>
    </div>
    <div class="input-box">
        <label for="pendidikan" class="details">Pendidikan</label>
        <select id="pendidikan" name="pendidikan" required>
            <option value="" disabled selected>Pilih Pendidikan</option>
            <option value="Perguruan Tinggi" {{ $calons->pendidikan == 'Perguruan Tinggi' ? 'selected' : '' }}>Perguruan Tinggi</option>
            <option value="SMA" {{ $calons->pendidikan == 'SMA' ? 'selected' : '' }}>SMA</option>
            <option value="SMP" {{ $calons->pendidikan == 'SMP' ? 'selected' : '' }}>SMP</option>
            <option value="SD" {{ $calons->pendidikan == 'SD' ? 'selected' : '' }}>SD</option>
        </select>
    </div>
    <div class="input-box">
        <label for="jenis_lantai" class="details">Jenis Lantai Rumah</label>
        <select id="jenis_lantai" name="jenis_lantai" required>
            <option value="" disabled selected>Pilih Jenis Lantai</option>
            <option value="Keramik" {{ $calons->jenis_lantai == 'Keramik' ? 'selected' : '' }}>Keramik</option>
            <option value="Plester / Semen" {{ $calons->jenis_lantai == 'Plester / Semen' ? 'selected' : '' }}>Plester / Semen</option>
            <option value="Tanah" {{ $calons->jenis_lantai == 'Tanah' ? 'selected' : '' }}>Tanah</option>
        </select>
    </div>
    <div class="input-box">
        <label for="jenis_dinding" class="details">Jenis Dinding Rumah</label>
        <select id="jenis_dinding" name="jenis_dinding" required>
            <option value="" disabled selected>Pilih Jenis Dinding</option>
            <option value="Tembok" {{ $calons->jenis_dinding == 'Tembok' ? 'selected' : '' }}>Tembok</option>
            <option value="Kayu" {{ $calons->jenis_dinding == 'Kayu' ? 'selected' : '' }}>Kayu</option>
            <option value="Bambu" {{ $calons->jenis_dinding == 'Bambu' ? 'selected' : '' }}>Bambu</option>
        </select>
    </div>
    <div class="input-box">
        <label for="luas_bangunan" class="details">Luas Bangunan Rumah</label>
        <select id="luas_bangunan" name="luas_bangunan" required>
            <option value="" disabled selected>Pilih Luas Bangunan</option>
            <option value="Di atas 8 m2" {{ $calons->luas_bangunan == 'Di atas 8 m2' ? 'selected' : '' }}>Di atas 8 m2</option>
            <option value="Di bawah 8 m2" {{ $calons->luas_bangunan == 'Di bawah 8 m2' ? 'selected' : '' }}>Di bawah 8 m2</option>
        </select>
    </div>
    <div class="input-box">
        <label for="jenis_kendaraan" class="details">Jenis Kendaraan</label>
        <select id="jenis_kendaraan" name="jenis_kendaraan" required>
            <option value="" disabled selected>Pilih Jenis Kendaraan</option>
            <option value="Mobil" {{ $calons->kendaraan == 'Mobil' ? 'selected' : '' }}>Mobil</option>
            <option value="Motor" {{ $calons->kendaraan == 'Motor' ? 'selected' : '' }}>Motor</option>
            <option value="Sepeda" {{ $calons->kendaraan == 'Sepeda' ? 'selected' : '' }}>Sepeda</option>
            <option value="Tidak Punya Kendaraan" {{ $calons->kendaraan == 'Tidak Punya Kendaraan' ? 'selected' : '' }}>Tidak Punya Kendaraan</option>
        </select>
    </div>
    <div class="input-box">
        <label for="sumber_penerangan" class="details">Sumber Penerangan</label>
        <select id="sumber_penerangan" name="sumber_penerangan" required>
            <option value="" disabled selected>Pilih Sumber Penerangan</option>
            <option value="PLN Subsidi" {{ $calons->sumber_penerangan == 'PLN Subsidi' ? 'selected' : '' }}>PLN Subsidi</option>
            <option value="PLN Non Subsidi" {{ $calons->sumber_penerangan == 'PLN Non Subsidi' ? 'selected' : '' }}>PLN Non Subsidi</option>
            <option value="Tidak Punya Penerangan" {{ $calons->sumber_penerangan == 'Tidak Punya Penerangan' ? 'selected' : '' }}>Tidak Punya Penerangan</option>
        </select>
    </div>
    <div class="input-box">
        <label for="status_rumah" class="details">Status Kepemilikan Rumah</label>
        <select id="status_rumah" name="status_rumah" required>
            <option value="" disabled selected>Pilih Status Rumah</option>
            <option value="Milik Sendiri" {{ $calons->status_kepemilikan_rumah == 'Milik Sendiri' ? 'selected' : '' }}>Milik Sendiri</option>
            <option value="Milik Orang Tua" {{ $calons->status_kepemilikan_rumah == 'Milik Orang Tua' ? 'selected' : '' }}>Milik Orang Tua</option>
            <option value="Kontrak / Sewa" {{ $calons->status_kepemilikan_rumah == 'Kontrak / Sewa' ? 'selected' : '' }}>Kontrak / Sewa</option>
            <option value="Bebas Sewa" {{ $calons->status_kepemilikan_rumah == 'Bebas Sewa' ? 'selected' : '' }}>Bebas Sewa</option>
        </select>
    </div>
@endsection
