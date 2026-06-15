<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Tahun</th>
            <th>Kategori</th>
            <th>Ketersediaan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
       @foreach ($buku as $item)
                <tr>
                    <td>{{ $item->tahun }}</td>
                    <td>{{ $item->kategori }}</td>
                    <td>{{ $item->ketersediaan }}</td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="{{ route('edit_buku', $item->id) }}">Edit</a>

                        <!-- Tombol Pinjam (Hanya muncul jika tersedia) -->
                        @if ($item->ketersediaan == 'Tersedia')
                            <form action="{{ route('sedang_dipinjam', $item->id) }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit">Pinjam</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
    </tbody>
</table>
