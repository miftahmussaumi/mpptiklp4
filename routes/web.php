<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\AkunController;


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
    return view('dashboard');
});

Route::get('/divisi', [DivisiController::class, 'index'])->name('divisi');
Route::get('/create-divisi', [DivisiController::class, 'create'])->name('create-kelas');

Route::get('/list-akun', [AkunController::class, 'index'])->name('list-akun');
Route::get('/list-akun/{id}/detail1', [AkunController::class, 'show1'])->name('detail-akun1');
Route::get('/list-akun/{id}/detail2', [AkunController::class, 'show2'])->name('detail-akun2');
Route::get('/create-akun', [AkunController::class, 'create'])->name('create-akun');
