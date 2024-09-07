<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('beranda');
})->name('beranda');


Route::get('/beranda', function () {
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

Route::get('/makanan', function () {
    return view('makanan');
})->name('makanan');

Route::get('/minuman', function () {
    return view('minuman');
})->name('minuman');

Route::get('/konveksi', function () {
    return view('konveksi');
})->name('konveksi');


// Proses login
Route::post('/login', [LoginController::class, 'login'])->name('loginsubmit');

// Proses logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('homeadmin/makananadmin', function () {
    return view('auth.makananadmin');
})->middleware('auth')->name('makananadmin');

Route::get('homeadmin/desaadmin', function () {
    return view('auth.desaadmin');
})->middleware('auth')->name('desaadmin');

Route::get('homeadmin/minumanadmin', function () {
    return view('auth.minumanadmin');
})->middleware('auth')->name('minumanadmin');

Route::get('homeadmin/konveksiadmin', function () {
    return view('auth.konveksiadmin');
})->middleware('auth')->name('konveksiadmin');

Route::get('homeadmin/tentangKamiadmin', function () {
    return view('auth.tentangKamiadmin');
})->middleware('auth')->name('tentangKamiadmin');

Route::get('homeadmin/postingan', function () {
    return view('auth.postingan');
})->middleware('auth')->name('postingan');

Route::get('homeadmin/formumkm', function () {
    return view('auth.formumkm');
})->middleware('auth')->name('formumkm');

Route::get('homeadmin/tambahProduk', function () {
    return view('auth.tambahProduk');
})->middleware('auth')->name('tambahProduk');

Route::get('homeadmin/beritaUtamaadmin', function () {
    return view('auth.beritaUtamaadmin');
})->middleware('auth')->name('beritaUtamaadmin');

Route::get('/homeadmin', function () {
    return view('auth.homeadmin');
})->middleware('auth')->name('homeadmin');
