<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StokController extends Controller {
    public function index_stok() {
        $stok_barang = DB::table('stok_barang')->paginate(10);
        // DIUBAH: ditambahkan 'stok_barang.' di depan nama view
        return view('index_stokbarang', ['stok_barang' => $stok_barang]);
    }

    public function tambah_stokbarang() {
        // DIUBAH: ditambahkan 'stok_barang.' di depan nama view
        return view('tambah_stokbarang');
    }
    // tambah nanti aja

    public function store_stokbarang(Request $request) {
        DB::table('stok_barang')->insert([
            'kodebarang'  => $request->kodebarang,
            'stok_awal' => $request->stok_awal,
            'terjual'  => $request->terjual
        ]);
        return redirect('/stokbarang');
    }

    public function update_stokbarang(Request $request) {
        DB::table('stok_barang')->where('kodebarang', $request->id)->update([
            'stok_awal' => $request->stok_awal,
            'terjual'  => $request->terjual
        ]);
        return redirect('/stokbarang');
    }


}
