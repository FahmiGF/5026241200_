<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SepedaController extends Controller {
    public function indexSepeda() {
        $sepeda = DB::table('sepeda')->paginate(10);
        // DIUBAH: ditambahkan 'sepeda.' di depan nama view
        return view('index_sepeda', ['sepeda' => $sepeda]);
    }

    public function tambah_sepeda() {
        // DIUBAH: ditambahkan 'sepeda.' di depan nama view
        return view('tambah_sepeda');
    }

    public function store_sepeda(Request $request) {
        DB::table('sepeda')->insert([
            'merksepeda'  => $request->merksepeda,
            'stocksepeda' => $request->stocksepeda,
            'tersedia'  => $request->tersedia
        ]);
        return redirect('/sepeda');
    }

    public function edit_sepeda($id) {
        $sepeda = DB::table('sepeda')->where('kodesepeda', $id)->get();
        // DIUBAH: ditambahkan 'sepeda.' di depan nama view
        return view('edit_sepeda', ['sepeda' => $sepeda]);
    }

    public function update_sepeda(Request $request) {
        DB::table('sepeda')->where('kodesepeda', $request->id)->update([
            'merksepeda'  => $request->merksepeda,
            'stocksepeda' => $request->stocksepeda,
            'tersedia'  => $request->tersedia
        ]);
        return redirect('/sepeda');
    }

    public function hapus_sepeda($id) {
        DB::table('sepeda')->where('kodesepeda', $id)->delete();
        return redirect('/sepeda');
        }

    public function cari_sepeda(Request $request) {
        $cari = $request->cari;
        $sepeda = DB::table('sepeda')
            ->where('merksepeda', 'like', "%" . $cari . "%")
            ->paginate();

        // DIUBAH: ditambahkan 'sepeda.' di depan nama view
        return view('index_sepeda', ['sepeda' => $sepeda]);
        }
}
