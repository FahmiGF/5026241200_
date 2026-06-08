@extends('template')

@section('title', 'Data Nilai Mahasiswa')

@section('konten')

<a href="/nilaikuliah/tambah" class="btn btn-primary mb-3">
    + Tambah Mahasiswa Baru
</a>

<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($nilaikuliah as $n)
        <tr>
            <td>{{ $n->ID }}</td>
            <td>{{ $n->NRP }}</td>
            <td>{{ $n->NilaiAngka }}</td>
            <td>{{ $n->SKS }}</td>
            <td>{{ $n->nilaihuruf }}</td>
            <td>{{ $n->bobot }}</td>
            <td>
                <a href="/nilaikuliah/edit/{{ $n->ID }}"
                    class="btn btn-warning btn-sm">
                    Edit
                </a>
                <a href="/nilaikuliah/hapus/{{ $n->ID }}"
                    class="btn btn-danger btn-sm">
                    Hapus
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
