@extends('template')
@section('title', 'Tambah Data Stok Barang')
@section('konten')

    <a href="/stokbarang" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Stok Barang
        </div>
        <div class="card-body">
            <form action="/stokbarang/store" method="post" onsubmit="return validasiForm()">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="merksepeda" class="col-sm-2 col-form-label">Merk stok barang</label>
                    <div class="col-sm-10">
                        <input type="text" name="merksepeda" id="merksepeda" class="form-control" maxlength="30"
                            placeholder="Maksimal 30 karakter. Contoh: Erigo">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stocksepeda" class="col-sm-2 col-form-label">Stok Stok Barang</label>
                    <div class="col-sm-10">
                        <input type="number" name="stocksepeda" id="stocksepeda" class="form-control"
                            placeholder="Contoh: 50">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="terjual" class="col-sm-2 col-form-label">terjual</label>
                    <div class="col-sm-10">
                        <div class="row mb-3">
    <label for="stok_awal" class="col-sm-2 col-form-label">Stok Awal</label>
    <div class="col-sm-10">
        <input type="number" name="stok_awal" id="stok_awal" class="form-control" placeholder="Masukkan jumlah stok awal" required min="0">
    </div>
</div>

<div class="row mb-3">
    <label for="terjual" class="col-sm-2 col-form-label">Jumlah Terjual</label>
    <div class="col-sm-10">
        <input type="number" name="terjual" id="terjual" class="form-control" placeholder="Masukkan jumlah yang sudah terjual" required min="0">
    </div>
</div>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function validasiForm() {
            let merk = document.getElementById('kodebarang').value.trim();
            let stok = document.getElementById('stok_awal').value.trim();
            let tersedia = document.getElementById('terjual').value;

            if (merk === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Kode barang wajib diisi",
                    icon: "error"
                });
                return false;
            }
            if (merk.length > 30) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "kode barang maksimal 30 karakter",
                    icon: "error"
                });
                return false;
            }
            if (stok === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Stok awal wajib diisi",
                    icon: "error"
                });
                return false;
            }
            if (tersedia === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Status terjual wajib diisi",
                    icon: "error"
                });
                return false;
            }
            return true;
        }
    </script>
@endsection
