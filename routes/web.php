<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\RapatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Peserta_orController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Page.homepage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/detail', function () {
    return view('OpRec.DetailPeserta');
});

Route::get('/test', function () {
    return view('Template.test');
});

// HOMEPAGE,LOGIN,DAFTAR
Route::get('/daftar', [LoginController::class, 'daftar'])->name('daftar');
Route::get('/home', [LoginController::class, 'home'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->name('login');

// PESERTA OR
Route::get('/lihat-peserta', [Peserta_orController::class, 'index'])->name('lihat-peserta');
Route::post('/save-peserta', [Peserta_orController::class, 'store'])->name('save-peserta');
Route::get('/detail-peserta/{id}', [Peserta_orController::class, 'show'])->name('detail-peserta');
Route::post('/nilai-peserta/{id}', [Peserta_orController::class, 'update'])->name('nilai-peserta');

// DATA ANGGOTA
Route::get('/list-anggota', [AnggotaController::class, 'index'])->name('list-anggota');
Route::get('/list-anggota/{id}/detail1', [AnggotaController::class, 'show1'])->name('detail-anggota1');
Route::get('/list-anggota/{id}/detail2', [AnggotaController::class, 'show2'])->name('detail-anggota2');
Route::get('/create-anggota', [AnggotaController::class, 'create'])->name('create-anggota');
Route::get('/edit-anggota/{id}', [AnggotaController::class, 'edit'])->name('edit-anggota');
Route::get('/delete-anggota/{id}', [AnggotaController::class, 'destroy'])->name('delete-anggota');
Route::post('/update-anggota/{id}', [AnggotaController::class, 'update'])->name('update-anggota');
Route::post('/anggota/{id}/store', [AnggotaController::class, 'store']);
Route::delete('/anggota/{id}/hapus_anggota', [AnggotaController::class, 'hapus_anggota'])->name('detail.hapus');

// DIVISI
Route::get('/divisi', [DivisiController::class, 'index'])->name('divisi');
Route::get('/create-divisi', [DivisiController::class, 'create'])->name('create-divisi');
Route::post('/save-divisi', [DivisiController::class, 'store'])->name('save-divisi');
Route::get('/delete-divisi/{id}', [DivisiController::class, 'destroy'])->name('delete-divisi');
Route::get('/edit-divisi/{id}', [DivisiController::class, 'edit'])->name('edit-divisi');
Route::post('/update-divisi/{id}', [DivisiController::class, 'update'])->name('update-divisi');

// RAPAT
Route::get('/rapat', [RapatController::class, 'index'])->name('rapat');
Route::get('/create-rapat', [RapatController::class, 'create'])->name('create-rapat');
Route::post('/save-rapat', [RapatController::class, 'store'])->name('save-rapat');
Route::get('/detail-rapat/{id}', [RapatController::class, 'show'])->name('detail-rapat');
Route::get('/delete-rapat/{id}', [RapatController::class, 'destroy'])->name('delete-rapat');
Route::get('/edit-rapat/{id}', [RapatController::class, 'edit'])->name('edit-rapat');
Route::post('/update-rapat/{id}', [RapatController::class, 'update'])->name('update-rapat');

// KEUANGAN 
Route::get('/kas-masuk', [App\Http\Controllers\KeuanganController::class, 'index'])->name('kas-masuk');
Route::get('/kas-keluar', [App\Http\Controllers\KeuanganController::class, 'index1'])->name('kas-keluar');
Route::get('/laporan-kas', [App\Http\Controllers\KeuanganController::class, 'show'])->name('laporan-kas');