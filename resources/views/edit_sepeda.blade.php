@extends('template')
@section('title', 'Edit Data Sepeda')
@section('konten')

    <h2>Edit Sepeda</h2>

    @foreach($sepeda as $s)
    <form action="/sepeda/update" method="POST" onsubmit="return validasiForm()">
        @csrf
        <input type="hidden" name="id" value="{{ $s->kodesepeda }}">

        <p>
            <label>Kode Sepeda (Auto Number)</label><br>
            <input type="text" value="{{ $s->kodesepeda }}" disabled style="background-color: #eee;">
        </p>

        <p>
            <label>Merk Sepeda</label><br>
            <input type="text" name="merksepeda" id="merksepeda" maxlength="30" value="{{ old('merksepeda', $s->merksepeda) }}">
        </p>

        <p>
            <label>Stok Sepeda</label><br>
            <input type="number" name="stocksepeda" id="stocksepeda" value="{{ old('stocksepeda', $s->stocksepeda) }}">
        </p>

        <p>
            <label>Status Ketersediaan</label><br>
            <select name="tersedia" id="tersedia" style="width: 180px; padding: 3px;">
                <option value="Y" {{ old('tersedia', $s->tersedia) == 'Y' ? 'selected' : '' }}>Tersedia (Y)</option>
                <option value="N" {{ old('tersedia', $s->tersedia) == 'N' ? 'selected' : '' }}>Habis (N)</option>
            </select>
        </p>

        <button type="submit" class="btn btn-warning">Update</button>
        <a href="/sepeda" class="btn btn-secondary">Kembali</a>
    </form>
    @endforeach

    <script>
        function validasiForm() {
            let merk = document.getElementById('merksepeda').value.trim();
            let stok = document.getElementById('stocksepeda').value.trim();
            let tersedia = document.getElementById('tersedia').value;

        }
    </script>
@endsection
