@extends('template')
@section('title', 'Data Obat')
@section('konten')

    <h2>Data Obat</h2>

    <form action="/obat/cari" method="GET" style="margin-bottom: 15px;">
        <input type="text" name="cari" placeholder="Cari merk obat..." value="{{ request()->get('cari') }}" style="padding: 5px; width: 250px;">
        <button type="submit" class="btn btn-secondary">Cari</button>
    </form>

    <a href="/obat/tambah" class="btn btn-primary">Tambah Obat Baru</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Obat</th>
            <th>Merk Obat</th>
            <th>Stok Obat</th>
            <th>Tersedia</th>
            <th>Aksi</th>
        </tr>

        @forelse($obat as $row)
            <tr>
                <td>{{ $row->kodeobat }}</td>
                <td>{{ $row->merkobat }}</td>
                <td>{{ $row->stockobat }}</td>
                <td>
                    @if($row->tersedia == 'Y')
                        <span class="badge bg-success">Tersedia (Y)</span>
                    @else
                        <span class="badge bg-danger">Habis (N)</span>
                    @endif
                </td>
                <td>
                    <a href="/obat/edit/{{ $row->kodeobat }}" class="btn btn-warning">Edit</a>

                    <form action="/obat/hapus/{{ $row->kodeobat }}" method="GET" style="display:inline;"
                          onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data obat.</td>
            </tr>
        @endforelse
    </table>

    <div class="d-flex justify-content-center mt-3">
        {{ $obat->links() }}
    </div>
@endsection
