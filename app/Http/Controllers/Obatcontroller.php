<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObatController extends Controller {
    public function indexObat() {
        $obat = DB::table('obat')->paginate(10);
        // DIUBAH: ditambahkan 'obat.' di depan nama view
        return view('index_obat', ['obat' => $obat]);
    }

    public function tambah_obat() {
        // DIUBAH: ditambahkan 'obat.' di depan nama view
        return view('tambah_obat');
    }

    public function store_obat(Request $request) {
        DB::table('obat')->insert([
            'merkobat'  => $request->merkobat,
            'stockobat' => $request->stockobat,
            'tersedia'  => $request->tersedia
        ]);
        return redirect('/obat');
    }

    public function edit_obat($id) {
        $obat = DB::table('obat')->where('kodeobat', $id)->get();
        // DIUBAH: ditambahkan 'obat.' di depan nama view
        return view('edit_obat', ['obat' => $obat]);
    }

    public function update_obat(Request $request) {
        DB::table('obat')->where('kodeobat', $request->id)->update([
            'merkobat'  => $request->merkobat,
            'stockobat' => $request->stockobat,
            'tersedia'  => $request->tersedia
        ]);
        return redirect('/obat');
    }

    public function hapus_obat($id) {
        DB::table('obat')->where('kodeobat', $id)->delete();
        return redirect('/obat');
        }

    public function cari_obat(Request $request) {
        $cari = $request->cari;
        $obat = DB::table('obat')
            ->where('merkobat', 'like', "%" . $cari . "%")
            ->paginate();

        // DIUBAH: ditambahkan 'obat.' di depan nama view
        return view('index_obat', ['obat' => $obat]);
        }
}
