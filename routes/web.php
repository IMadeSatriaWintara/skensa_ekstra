<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\SuperController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;

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
Route::view('/kategori-berita', 'FRONTEND.kategoriberita');
Route::get('/prestasi', function () {
    return view('FRONTEND.prestasi');
});
Route::get('/tentang', function () {
    return view('FRONTEND.tentang');
});
Route::view('/kategori-prestasi', 'FRONTEND.detailkategori');
Route::view('/detail-prestasi', 'FRONTEND.detailprest ashi');

// LOGIN - Tanpa middleware (harus bisa diakses untuk login)
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// BACKEND - Dilindungi dengan role middleware
Route::middleware(['role'])->group(function () {
    
    // DASHBOARD PENGELOLA EKSTRA - Hanya untuk role admin_ekstra (layout pengelola_ekstra)
    Route::middleware(['role:admin_ekstra'])->group(function () {
        Route::get('/dashboard-pengelola', [AdminController::class, 'dashboard'])->name('dashboard-pengelola');
    });
    
    // DASHBOARD SUPER ADMIN - Hanya untuk role admin_siekstra (layout admin)
    Route::middleware(['role:admin_siekstra'])->group(function () {
        Route::get('/dashboard-superadmin', [AdminController::class, 'backoffice'])->name('dashboard-superadmin');
    });
    
    // ADMIN SIEKSTRA - Hanya untuk role admin_siekstra (Super Admin)
    Route::middleware(['role:admin_siekstra'])->group(function () {
        Route::get('/admin_siekstra', [SuperController::class, 'index'])->name('admin_siekstra');
        Route::get('/tambahadmin', [SuperController::class, 'create'])->name('tambahadmin');
        Route::post('/insertadmin_siekstra', [SuperController::class, 'store'])->name('insertadmin_siekstra');
        Route::get('/editadmin/{id}', [SuperController::class, 'edit'])->name('editadmin');
        Route::post('/updateadmin_siekstra/{id}', [SuperController::class, 'update'])->name('updateadmin_siekstra');
        Route::get('/deleteadmin/{id}', [SuperController::class, 'destroy'])->name('deleteadmin');
        
        // ADMIN EKSTRA - Manajemen akun admin_ekstra (di bawah superadmin)
        Route::get('/akun', [AccountController::class, 'akun'])->name('akun');
        Route::get('/addakun', [AccountController::class, 'addakun'])->name('addakun');
        Route::post('/insertadmin', [AccountController::class, 'insertadmin'])->name('insertadmin');
        Route::get('/tampilkanakun/{id}', [AccountController::class, 'tampilkanakun'])->name('tampilkanakun');
        Route::post('/updateakun/{id}', [AccountController::class, 'updateakun'])->name('updateakun');
    });
    
    // PROFILE - Hanya untuk role admin_ekstra (Admin Pengelola Web)
    Route::middleware(['role:admin_ekstra'])->group(function () {
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
        Route::get('/profile/password', [ProfileController::class, 'editPassword'])->name('profile.password');
        Route::post('/profile/password/update', [ProfileController::class, 'updatePassword'])->name('profile.password.update');
    });
});
