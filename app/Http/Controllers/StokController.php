<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StokController extends Controller {

    public function index_stok() {
        // Mengambil data sesuai dengan nama tabel di database
        $stok_barang = DB::table('stok_barang')->paginate(10);
        return view('index_stokbarang', ['stok_barang' => $stok_barang]);
    }

    public function tambah_stokbarang() {
        return view('tambah_stokbarang');
    }

    public function store_stokbarang(Request $request) {
        // Validasi Laravel (Opsional tapi baik untuk keamanan)
        $request->validate([
            'kodebarang' => 'required,
            'stokawal'   => 'required,
            'terjual'    => 'required,
        ]);

        // SINKRONKAN: Menggunakan kolom 'stokawal' sesuai database di foto Anda
        DB::table('stok_barang')->insert([
            'kodebarang' => $request->kodebarang,
            'stokawal'   => $request->stokawal,
            'terjual'    => $request->terjual
        ]);

        return redirect('/eas'); // Sesuaikan dengan route halaman utama soal UAS Anda
    }

    public function update_stokbarang(Request $request) {
        DB::table('stok_barang')->where('kodebarang', $request->id)->update([
            'stokawal' => $request->stokawal,
            'terjual'  => $request->terjual
        ]);
        return redirect('/eas');
    }
}
