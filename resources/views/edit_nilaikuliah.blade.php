@extends('template')

@section('title', 'Edit Data Nilai Kuliah')

@section('konten')

<a href="/nilaikuliah" class="btn btn-secondary mb-4">
    Kembali
</a>

@foreach($nilaikuliah as $n)

<div class="card">
    <div class="card-header">
        Form Edit Data Nilai Kuliah
    </div>
    <div class="card-body">
        <form action="/nilaikuliah/update" method="post">
            {{ csrf_field() }}

            <input type="hidden" name="id" value="{{ $n->ID }}">

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">NRP</label>
                <div class="col-sm-10">
                    <input type="text" name="NRP"
                        class="form-control" required
                        value="{{ $n->NRP }}">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Nilai Angka</label>
                <div class="col-sm-10">
                    <input type="number" name="NilaiAngka"
                        class="form-control" required
                        value="{{ $n->NilaiAngka }}">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">SKS</label>
                <div class="col-sm-10">
                    <input type="number" name="SKS"
                        class="form-control" required
                        value="{{ $n->SKS }}">
                </div>
            </div>

            <div class="row">
                <div class="offset-sm-2 col-sm-10">
                    <input type="submit" value="Simpan Data"
                        class="btn btn-primary">
                </div>
            </div>

        </form>
    </div>
</div>

@endforeach

@endsection
