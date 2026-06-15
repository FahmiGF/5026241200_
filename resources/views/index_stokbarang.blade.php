@extends('template')
@section('title', 'Data Stok_Barang')
@section('konten')

    <h2>Data Stok Barang</h2>

    <a href="/stokbarang/tambah" class="btn btn-primary">Tambah Data</a>

    <br><br>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Stok Awal</th>
                <th>Terjual</th>
                <th>Stok Akhir</th>
                <th>Persentase Penjualan</th>
            </tr>
        </thead>
        <tbody>
            @forelse($stok_barang as $row)
                <tr>
                    <td>{{ $row->kodebarang }}</td>
                    <td>{{ $row->stokawal }}</td>
                    <td>{{ $row->terjual }}</td>

                    {{-- Perhitungan Stok Akhir = Stok Awal - Terjual --}}
                    <td>{{ $row->stokawal - $row->terjual }}</td>

                    {{-- Perhitungan Persentase Penjualan = Stok Akhir / Stok Awal x 100% --}}
                    <td>
                        @if ($row->stokawal > 0)
                            {{ number_format((($row->stokawal - $row->terjual) / $row->stokawal) * 100, 2) }}%
                        @else
                            0%
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada data stok barang.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Link Pagination jika dibutuhkan --}}
    <div class="d-flex justify-content-center">
        {{ $stok_barang->links() }}
    </div>

@endsection
