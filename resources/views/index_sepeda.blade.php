@extends('template')
@section('title', 'Data Sepeda')
@section('konten')

    <h2>Data Sepeda</h2>

    <form action="/sepeda/cari" method="GET" style="margin-bottom: 15px;">
        <input type="text" name="cari" placeholder="Cari merk sepeda..." value="{{ request()->get('cari') }}" style="padding: 5px; width: 250px;">
        <button type="submit" class="btn btn-secondary">Cari</button>
    </form>

    <a href="/sepeda/tambah" class="btn btn-primary">Tambah Sepeda Baru</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Sepeda</th>
            <th>Merk Sepeda</th>
            <th>Stok Sepeda</th>
            <th>Tersedia</th>
            <th>Aksi</th>
        </tr>

        @forelse($sepeda as $row)
            <tr>
                <td>{{ $row->kodesepeda }}</td>
                <td>{{ $row->merksepeda }}</td>
                <td>{{ $row->stocksepeda }}</td>
                <td>
                    @if($row->tersedia == 'Y')
                        <span class="badge bg-success">Tersedia (Y)</span>
                    @else
                        <span class="badge bg-danger">Habis (N)</span>
                    @endif
                </td>
                <td>
                    <a href="/sepeda/edit/{{ $row->kodesepeda }}" class="btn btn-warning">Edit</a>

                    <form action="/sepeda/hapus/{{ $row->kodesepeda }}" method="GET" style="display:inline;"
                          onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data sepeda.</td>
            </tr>
        @endforelse
    </table>

    <div class="d-flex justify-content-center mt-3">
        {{ $sepeda->links() }}
    </div>
@endsection
