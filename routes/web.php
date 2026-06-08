<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController ;
use App\Http\Controllers\PegawaiDBController ;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\keranjangController;
use App\Http\Controllers\NilaiKuliahController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com<b/>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('dell', function () {
	return view('pertemuan5');
});

Route::get('welcome', function () {
	return view('welcome');
});

Route::get('pert1', function () {
	return view('intro');
});

Route::get('pert2', function () {
	return view('news');
});

Route::get('pert3', function () {
	return view('contoh');
});

Route::get('pert4', function () {
	return view('5026241200');
});

Route::get('pert6', function () {
	return view('tugasafterpertemuan5');  // Linktree
});

Route::get('pert5', function () {
	return view('indexhub'); // Hub untuk ke IG, Linktree dan lain2
});


Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

//crud tabel keranjangbelanja
Route::get('/keranjangbelanja', [keranjangController::class, 'index_keranjang']);
Route::get('/keranjangbeli/{id}', [keranjangController::class, 'beli']);
Route::post('/keranjangstore', [keranjangController::class, 'storeKeranjang']);
Route::get('/keranjangbatal/{id}', [keranjangController::class, 'batal']);

// Memanggil Controller
// Controller Nilai Kuliah

// CRUD
// Route CRUD Nilai Kuliah
Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index']);
Route::get('/nilaikuliah/tambah', [NilaiKuliahController::class, 'tambah']);
Route::post('/nilaikuliah/store', [NilaiKuliahController::class, 'store']);
Route::get('/nilaikuliah/edit/{id}', [NilaiKuliahController::class, 'edit']);
Route::post('/nilaikuliah/update', [NilaiKuliahController::class, 'update']);
Route::get('/nilaikuliah/hapus/{id}', [NilaiKuliahController::class, 'hapus']);


//

// jangan di replace file nya , copy paste kan perintahnya
//use App\Http\Controllers\SiswaController;



//route CRUD siswa
/*Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
*/
