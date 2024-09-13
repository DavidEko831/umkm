<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Upload;
use App\Http\Controllers\ViewPaginate;
use App\Http\Controllers\DeleteProduk;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;

Route::get('/umkm/create', [Upload::class, 'create'])->name('umkm.create');
Route::post('/umkm/store', [Upload::class, 'store'])->name('umkm.store');

Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');

Route::get('/', function () {
    return view('beranda');
})->name('beranda');


Route::get('/tentangKami', function () {
    return view('tentangKami');
})->name('tentangKami');

Route::get('/desa', function () {
    return view('desa');
})->name('desa');

Route::get('/beritaUtama', function () {
    return view('beritaUtama');
})->name('beritaUtama');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/makanan', [KategoriController::class, 'makanan'])->name('makanan');


Route::get('/minuman', [KategoriController::class, 'minuman'])->name('minuman');


Route::get('/konveksi', [KategoriController::class, 'konveksi'])->name('konveksi');




// Proses login
Route::post('/login', [LoginController::class, 'login'])->name('loginsubmit');

// Proses logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('homeadmin/makananadmin', [KategoriController::class, 'makananadmin'])->middleware('auth')->name('auth.makananadmin');


Route::get('homeadmin/desaadmin', function () {
    return view('auth.desaadmin');
})->middleware('auth')->name('desaadmin');

Route::get('homeadmin/minumanadmin', [KategoriController::class, 'minumanadmin'])->middleware('auth')->name('auth.minumanadmin');


Route::get('homeadmin/konveksiadmin', [KategoriController::class, 'konveksiadmin'])->middleware('auth')->name('auth.konveksiadmin');


Route::get('homeadmin/tentangKamiadmin', function () {
    return view('auth.tentangKamiadmin');
})->middleware('auth')->name('tentangKamiadmin');

Route::get('homeadmin/postingan', function () {
    return view('auth.postingan');
})->middleware('auth')->name('postingan');

Route::get('homeadmin/umkm', [ProdukController::class, 'index'])->middleware('auth')->name('umkm');

Route::get('homeadmin/editproduk', [ProdukController::class, 'update'])->middleware('auth')->name('editproduk');

Route::get('homeadmin/umkm/delete/{id_umkm}', [ProdukController::class, 'destroy'])
    ->middleware('auth')
    ->name('umkm.delete');

    Route::get('homeadmin/umkm/edit/{id_umkm}', [ProdukController::class, 'edit'])
    ->middleware('auth')
    ->name('umkm.edit');

    Route::put('homeadmin/umkm/update/{id_umkm}', [ProdukController::class, 'update'])->name('umkm.update');




    Route::get('homeadmin/tambahProduk', [Upload::class, 'create'])
    ->middleware('auth')
    ->name('homeadmin.tambahProduk');

Route::get('homeadmin/beritaUtamaadmin', function () {
    return view('auth.beritaUtamaadmin');
})->middleware('auth')->name('beritaUtamaadmin');

Route::get('/homeadmin', function () {
    return view('auth.homeadmin');
})->middleware('auth')->name('homeadmin');
