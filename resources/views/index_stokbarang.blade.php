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

                    <td>{{ $row->kodebarang ?? $row->kode_barang ?? '' }}</td>
                    <td>{{ $stokAwal = $row->stok_awal ?? $row->stokawal ?? 0 }}</td>
                    <td>{{ $terjual = $row->terjual ?? 0 }}</td>

                    {{-- Hitung Stok Akhir --}}
                    <td>{{ $stokAwal - $terjual }}</td>

                    {{-- Hitung Persentase --}}
                    <td>
                        @if ($stokAwal > 0)
                            {{ number_format((($stokAwal - $terjual) / $stokAwal) * 100, 2) }}%
                        @else
                            0%
                        @endif
                    </td>


                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Belum ada data stok barang.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection
