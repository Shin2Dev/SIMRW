@extends('templates.form')

@section('form-content')
    <div class="input-box">
        <label for="tanggal" class="details">Tanggal</label>
        <input type="date" id="tanggal" name="tanggal" value="{{ date('Y-m-d') }}" required autocomplete="off" readonly>
    </div>
    <div class="input-box">
        <label for="deskripsi" class="details">Deskripsi</label>
        <input type="text" id="deskripsi" name="deskripsi" required autocomplete="off">
    </div>
    <div class="input-box">
        <label for="jenis" class="details">Jenis</label>
        <select id="jenis" name="jenis" required>
            <option value="" disabled selected>Pilih Jenis Keuangan</option>
            <option value="Pemasukan">Pemasukan</option>
            <option value="Pengeluaran">Pengeluaran</option>
        </select>
    </div>
    <div class="input-box">
        <label for="jumlah" class="details">Jumlah</label>
        <input type="text" id="jumlah" name="jumlah" required autocomplete="off" onblur="updateSaldo(this)">
    </div>
    <div class="input-box">
        <label for="saldo" class="details">Saldo</label>
        <input type="text" id="saldo" name="saldo" value="Rp. {{ number_format($lastKeuangan->saldo, 0, ',', '.') }}" required autocomplete="off" readonly>
    </div>

    <script>
        let initialSaldo = document.getElementById('saldo').value.replace(/[^,\d]/g, '');

        function formatRupiah(value) {
            let numberString = value.replace(/[^,\d]/g, '').toString();
            let split = numberString.split(',');
            let sisa = split[0].length % 3;
            let rupiah = split[0].substr(0, sisa);
            let ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                let separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return 'Rp. ' + rupiah;
        }

        function updateSaldo(input) {
            let jumlah = input.value.replace(/[^,\d]/g, '');
            let saldoElement = document.getElementById('saldo');
            let jenis = document.getElementById('jenis').value;

            if (jenis === '' || isNaN(jumlah) || jumlah === '') {
                alert('Silakan pilih jenis keuangan dan masukkan jumlah yang valid.');
                input.value = '';
                saldoElement.value = formatRupiah(initialSaldo);
                return;
            }

            let newSaldo;
            if (jenis === 'Pengeluaran') {
                newSaldo = parseInt(initialSaldo) - parseInt(jumlah);
            } else {
                newSaldo = parseInt(initialSaldo) + parseInt(jumlah);
            }

            input.value = formatRupiah(jumlah);
            saldoElement.value = formatRupiah(newSaldo.toString());
        }
    </script>
@endsection
