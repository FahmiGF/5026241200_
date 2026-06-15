@extends('template')
@section('title', 'Tambah Data Stok Barang')
@section('konten')

    <a href="/eas" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Stok Barang
        </div>
        <div class="card-body">
            <form action="/stokbarang/store" method="post" onsubmit="return validasiForm()">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="kodebarang" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                        <input type="text" name="kodebarang" id="kodebarang" class="form-control" maxlength="10"
                            placeholder="Contoh: BRG001" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stokawal" class="col-sm-2 col-form-label">Stok Awal</label>
                    <div class="col-sm-10">
                        <input type="number" name="stokawal" id="stokawal" class="form-control"
                            placeholder="Contoh: 100" min="0" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="terjual" class="col-sm-2 col-form-label">Terjual</label>
                    <div class="col-sm-10">
                        <input type="number" name="terjual" id="terjual" class="form-control"
                            placeholder="Contoh: 25" min="0" required>
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function validasiForm() {
            let kodebarang = document.getElementById('kodebarang').value.trim();
            let stokawal = document.getElementById('stokawal').value;
            let terjual = document.getElementById('terjual').value;
            let intStokAwal = parseInt(stokawal);
            let intTerjual = parseInt(terjual);

            if (kodebarang === '')
            {
                Swal.fire(
                    {
                    title: "Kesalahan Input Data!",
                    text: "Kode barang wajib diisi",
                    icon: "error"
                });
                return false;
            }
            if (kodebarang.length > 10)
            {
                Swal.fire(
                    {
                    title: "Kesalahan Input Data!",
                    text: "Kode barang maksimal hanya boleh 10 karakter",
                    icon: "error"
                });
                return false;
            }
            if (intTerjual > intStokAwal)
            {
                Swal.fire({
                    title: "Kesalahan Validasi!",
                    text: "Jumlah Terjual tidak boleh lebih besar dari Stok Awal!",
                    icon: "error"
                });
                return false;
            }
            return true;
        }
    </script>
@endsection
