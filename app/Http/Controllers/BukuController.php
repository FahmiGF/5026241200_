<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index_buku()
    {
        // 1. Ambil data buku dari database
        // Pastikan nama tabel di database Anda benar (contoh: 'buku')
        $buku = DB::table('buku')->get();

        // 2. Ambil tahun sekarang
        $tahunSekarang = intval(date('Y'));

        // 3. Lakukan proses data
        foreach ($buku as $item) {
            // Logika Kategori (Baru jika selisih 5 tahun atau kurang)
            $selisihTahun = $tahunSekarang - $item->tahun;

            if ($selisihTahun <= 5) {
                $item->kategori = 'Baru';
            } else {
                $item->kategori = 'Lama'; // Spasi di awal dihapus
            }

            // Logika Ketersediaan
            if ($item->sedang_dipinjam == true) {
                $item->ketersediaan = 'Tidak Tersedia';
            } else {
                $item->ketersediaan = 'Tersedia'; // Spasi di awal dihapus
            }
        }

        // 4. Kirim data ke view buku.blade.php
        return view('buku', compact('buku', 'tahunSekarang'));
    }
}
