<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AccountController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// FRONTEND
Route::get('/', function () {
    return view('FRONTEND.home');
});
Route::get('/berita', function () {
    return view('FRONTEND.berita');
});
Route::get('/detailberita', function () {
    return view('FRONTEND.detailberita');
});
Route::get('/prestasi', function () {
    return view('FRONTEND.prestasi');
});
Route::get('/tentang', function () {
    return view('FRONTEND.tentang');
});
Route::view('/kategori-prestasi', 'FRONTEND.detailkategori');
Route::view('/detail-prestasi', 'FRONTEND.detailprestasi');





Route::get('/login', function () {
    return view('BACKEND.login');
});

// SUPER ADMIN //
Route::get('/backoffice', [AdminController::class, 'backoffice'])->name('backoffice');
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

// ACCOUNT //
// ADMIN EKSTRA //
Route::get('/akun', [AccountController::class, 'akun'])->name('akun');
Route::get('/addakun', [AccountController::class, 'addakun'])->name('addakun');
Route::post('/insertadmin', [AccountController::class, 'insertadmin'])->name('insertadmin');
Route::get('/tampilkanakun/{id}', [AccountController::class, 'tampilkanakun'])->name('tampilkanakun');
Route::post('/updateakun/{id}', [AccountController::class, 'updateakun'])->name('updateakun');

// SUPER ADMIN //
