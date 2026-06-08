<!-- Menghubungkan dengan view template -->
@extends('template')

@section('title', 'Data Keranjang')
@section('konten')
    <center>
        <br />
        <br />

        <table class="table table-striped table-hover">
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per item</th>
                <th>Total</th>
                <th>Action</th>

            </tr>
            @foreach ($keranjang as $k)
                <tr>
                    <td>{{ $k->ID }}</td>
                    <td>{{ $k->kodebarang }}</td>
                    <td>{{ $k->jumlah }}</td>
                    <td>Rp {{ number_format($k->harga, 0, ',', '.') }}</td>
                    <td>Rp {{ number_format($k->harga * $k->jumlah, 0, ',', '.') }}</td>
                    <td>
                        <a href="/keranjangbeli/{{ $k->ID }}" class="btn btn-warning">Beli</a>
                        |
                        <a href="/keranjangbatal/{{ $k->ID }}" class="btn btn-danger">Batal</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </center>

@endsection
