@extends('template')
@section('title', 'Data Pegawai')
@section('konten')

<a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>
	<p>Cari Data Pegawai :</p>
	<form action="/pegawai/cari" method="GET" class="form-inline">
        <div class="form-group">
		<input type="text" name="cari" placeholder="Cari Pegawai .."  class="form-control">
		<input type="submit" value="CARI" class="btn btn-dark mt-2">
        </div>
	</form>

<table class="table table-striped table-hover">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>

            <td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>


            <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning btn-sm">Edit</a>

				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger btn-sm">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $pegawai->links() }} <!-- untuk menampilkan pagination -->
@endsection
