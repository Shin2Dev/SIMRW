@extends('rt.indexrt')
@section('main')
    <link rel="stylesheet" href="assets/css/bantuansosial.css">
    <div class="topbar" style="background-color: #B0C4DE">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        <div class="judul">
            <h1>RT</h1>
        </div>
        <div class="user">
        </div>
    </div>
    <h1 style="text-align: start; margin-top: 10px; margin-left: 30px;">Home > Bantuan Sosial</h1>
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Ajukan Bantuan Sosial</h1>
        </section>
        <div class="input-box-1">
            <p style="margin: 0;">Jumlah Mahasiswa: </p>
            <div class="custom-select-2">
                <select>
                    <option value="" disabled selected>Choose</option>
                    <option value="0">1</option>
                    <option value="1">2</option>
                    <option value="2">3</option>
                    <option value="3">4</option>
                    <option value="4">5</option>
                    <option value="5">6</option>
                    <option value="6">7</option>
                    <option value="7">8</option>
                    <option value="8">9</option>
                    <option value="9">10</option>
                </select>
            </div>
            <div class="button-submit">Submit</div>
        </div>
        <div class ="input-box-1">
            <span class="details3">Calon Penerima Bansos 1</span>  
        </div>
        <div class="input-box-2">
            <span class="details2">Nama</span>
            <input type="text" placeholder="" required>
        </div>
        <div class ="input-box-2">
            <span class="details2">Pekerjaan</span>
            <div class="custom-select">
                <select>
                    <option value="" disabled selected>Pilih Pekerjaan</option>
                    <option value="0">Pegawai swasta/negri</option>
                    <option value="1">Pengusaha/pedagang</option>
                    <option value="2">Petani/buruh/karyawan</option>
                    <option value="3">Tidak bekerja/pengangguran</option>
                </select>
            </div>
        </div>
        <div class ="input-box-2">
            <span class="details2">Penghasilan Perbulan</span>
            <div class="custom-select">
                <select>
                    <option value="" disabled selected>Pilih Penghasilan Perbulan</option>
                    <option value="0">>3.000.000</option>
                    <option value="1">1.500.000 - 3.000.000</option>
                    <option value="2">500.000 - 1.500.000</option>
                    <option value="3"> <.500.000 </option>
                </select>
            </div>
        </div>
        <div class ="input-box-2">
            <span class="details2">Usia</span>
            <div class="custom-select">
                <select>
                    <option value="" disabled selected>Pilih Usia</option>
                    <option value="0"> <.25 tahun</option>
                    <option value="1">26 - 35 tahun</option>
                    <option value="2">36 - 45 tahun</option>
                    <option value="3"> >46 tahun </option>
                </select>
            </div>
        </div>
        <div class ="input-box-2">
            <span class="details2">Pendidikan</span>
            <div class="custom-select">
                <select>
                    <option value="" disabled selected>Pilih Pendidikan</option>
                    <option value="0">Perguruan Tinggi</option>
                    <option value="1">SMA</option>
                    <option value="2">SMP</option>
                    <option value="3">SD</option>
                </select>
            </div>
        </div>
        <div class ="input-box-2">
            <span class="details2">Luas Lantai Bangunan</span>
            <div class="custom-select">
                <select>
                    <option value="" disabled selected>Pilih Luas Lantai Bangunan</option>
                    <option value="0">Di atas 8 m2</option>
                    <option value="1">DI bawah 8 m2</option>
                </select>
            </div>
        </div>
        <div class ="input-box-2">
            <span class="details2">Jenis Lantai</span>
            <div class="custom-select">
                <select>
                    <option value="" disabled selected>Pilih Jenis Lantai</option>
                    <option value="0">Keramik</option>
                    <option value="1">Plester/semen</option>
                    <option value="2">Tanah</option>
                </select>
            </div>
        </div>
        <div class ="input-box-2">
            <span class="details2">Jenis Dinding</span>
            <div class="custom-select">
                <select>
                    <option value="" disabled selected>Pilih Jenis Dinding</option>
                    <option value="0">Tembok</option>
                    <option value="1">Kayu</option>
                    <option value="2">Bambu</option>
                </select>
            </div>
        </div>
        <div class ="input-box-2">
            <span class="details2">Jenis Kendaraan</span>
            <div class="custom-select">
                <select>
                    <option value="" disabled selected>Pilih Jenis Kendaraan</option>
                    <option value="0">Mobil</option>
                    <option value="1">Motor</option>
                    <option value="2">Sepeda</option>
                    <option value="2">Tidak Punya</option>
                </select>
            </div>
        </div>
        <div class ="input-box-2">
            <span class="details2">Sumber Penerangan</span>
            <div class="custom-select">
                <select>
                    <option value="" disabled selected>Pilih Jenis Sumber Penerangan</option>
                    <option value="0">PLN Subsidi</option>
                    <option value="1">PLN Non Subsidi</option>
                    <option value="2">Tidak Punya</option>
                </select>
            </div>
        </div>
        <div class ="input-box-2">
            <span class="details2">Status Rumah</span>
            <div class="custom-select">
                <select>
                    <option value="" disabled selected>Pilih Status Rumah</option>
                    <option value="0">Milik sendiri</option>
                    <option value="1">Milik orang tua</option>
                    <option value="2">Kontrak/ sewa</option>
                    <option value="2">Bebas sewa</option>
                </select>
            </div>
        </div>
    </main>
@endsection
