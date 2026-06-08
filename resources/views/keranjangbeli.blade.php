<!-- Menghubungkan dengan view template master -->
@extends('template')

@section('title', 'Beli Barang')
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <center>
        <br />
        <br />

        <div class="card">
            <div class="card-header">
                Form beli barang
            </div>

            <div class="card-body">
                <form action="/keranjangstore" method="post">
                    {{ csrf_field() }}

                    <div class="row mb-3">
                        <label for="kode" class="col-sm-2 col-form-label">Kode Barang</label>
                        <div class="col-sm-10">
                            <input type="text" name="kode" id="kode" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-10">
                            <input type="text" name="jumlah" id="jumlah" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="number" name="harga" id="harga" class="form-control" required>
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
        <br />
        <br />
        <a href="/keranjangbelanja" class="btn btn-info"> Kembali</a>
    </center>
@endsection
