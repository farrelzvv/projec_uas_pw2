<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\PembinaController;
use App\Http\Controllers\KabkotaController;
use App\Http\Controllers\KategoriUmkmController;
use App\Http\Controllers\UmkmController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('index');
})->name('home');

// provinsi
Route::get('/home/provinsi', [ProvinsiController::class, 'index'])->name('provinsi');
Route::get('/home/provinsi/create', [ProvinsiController::class, 'create'])->name('provinsi_create');
Route::post('/home/provinsi/store', [ProvinsiController::class, 'store'])->name('provinsi_store');
Route::get('/home/provinsi/{provinsi}', [ProvinsiController::class, 'show'])->name('provinsi_show');
Route::get('/home/provinsi/{provinsi}/edit', [ProvinsiController::class, 'edit'])->name('provinsi_edit');
Route::put('/home/provinsi/{provinsi}', [ProvinsiController::class, 'update'])->name('provinsi_update');
Route::delete('/home/provinsi/{provinsi}', [ProvinsiController::class, 'destroy'])->name('provinsi_destroy');

// kabupaten kota
Route::get('/home/kabkota', [KabkotaController::class, 'index'])->name('kabkota');
Route::get('/home/kabkota/create', [KabkotaController::class, 'create'])->name('kabkota_create');
Route::post('/home/kabkota/store', [KabkotaController::class, 'store'])->name('kabkota_store');
Route::get('/home/kabkota/{kabkota}', [KabkotaController::class, 'show'])->name('kabkota_show');
Route::get('/home/kabkota/{kabkota}/edit', [KabkotaController::class, 'edit'])->name('kabkota_edit');
Route::put('/home/kabkota/{kabkota}', [KabkotaController::class, 'update'])->name('kabkota_update');
Route::delete('/home/kabkota/{kabkota}', [KabkotaController::class, 'destroy'])->name('kabkota_destroy');

// Pembina
Route::get('/home/pembina', [PembinaController::class, 'index'])->name('pembina');
Route::get('/home/pembina/create', [PembinaController::class, 'create'])->name('pembina_create');
Route::post('/home/pembina/store', [PembinaController::class, 'store'])->name('pembina_store');
Route::get('/home/pembina/{pembina}', [PembinaController::class, 'show'])->name('pembina_show');
Route::get('/home/pembina/{pembina}/edit', [PembinaController::class, 'edit'])->name('pembina_edit');
Route::put('/home/pembina/{pembina}', [PembinaController::class, 'update'])->name('pembina_update');
Route::delete('/home/pembina/{pembina}', [PembinaController::class, 'destroy'])->name('pembina_destroy');

// Kategori umkm
Route::get('/home/kategori_umkm', [KategoriUmkmController::class, 'index'])->name('kategori');
Route::get('/home/kategori_umkm/create', [KategoriUmkmController::class, 'create'])->name('kategori_create');
Route::post('/home/kategori_umkm/store', [KategoriUmkmController::class, 'store'])->name('kategori_store');
Route::get('/home/kategori_umkm/{kategori_umkm}', [KategoriUmkmController::class, 'show'])->name('kategori_show');
Route::get('/home/kategori_umkm/{kategori_umkm}/edit', [KategoriUmkmController::class, 'edit'])->name('kategori_edit');
Route::put('/home/kategori_umkm/{kategori_umkm}', [KategoriUmkmController::class, 'update'])->name('kategori_update');
Route::delete('/home/kategori_umkm/{kategori_umkm}', [KategoriUmkmController::class, 'destroy'])->name('kategori_destroy');

// Umkm
Route::get('/home/umkm', [UmkmController::class, 'index'])->name('umkm');
Route::get('/home/umkm/create', [UmkmController::class, 'create'])->name('umkm_create');
Route::post('/home/umkm/store', [UmkmController::class, 'store'])->name('umkm_store');
Route::get('/home/umkm/{umkm}', [UmkmController::class, 'show'])->name('umkm_show');
Route::get('/home/umkm/{umkm}/edit', [UmkmController::class, 'edit'])->name('umkm_edit');
Route::put('/home/umkm/{umkm}', [UmkmController::class, 'update'])->name('umkm_update');
Route::delete('/home/umkm/{umkm}', [UmkmController::class, 'destroy'])->name('umkm_destroy');

require __DIR__.'/auth.php';
