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
        <td>{{ $row->stok_awal }}</td>
        <td>{{ $row->terjual }}</td>

        {{-- Hitung Stok Akhir: Stok Awal - Terjual --}}
        <td>{{ $row->stok_awal - $row->terjual }}</td>

        {{-- Hitung Persentase: (Stok Akhir / Stok Awal) x 100 --}}
        <td>
            @if ($row->stok_awal > 0)
                {{ number_format((($row->stok_awal - $row->terjual) / $row->stok_awal) * 100, 2) }}%
            @else
                0%
            @endif
        </td>

        {{-- Tombol Aksi --}}
        <td>
            <a href="/stokbarang/edit/{{ $row->kodebarang }}" class="btn btn-warning">Edit</a>

            <form action="/stokbarang/hapus/{{ $row->kodebarang }}" method="POST" style="display:inline;"
                onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="6" class="text-center">Belum ada data stok barang.</td>
    </tr>
@endforelse
