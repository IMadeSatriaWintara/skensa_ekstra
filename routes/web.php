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
    // FITUR BERSAMA ADMIN EKSTRA + SUPERADMIN
    Route::get('/kategori', [AdminController::class, 'kategoriIndex'])->name('kategori.index');
    Route::get('/kategori/create', [AdminController::class, 'kategoriCreate'])->name('kategori.create');
    Route::post('/kategori', [AdminController::class, 'kategoriStore'])->name('kategori.store');
    
    // DASHBOARD PENGELOLA EKSTRA - Hanya untuk role admin_ekstra (layout pengelola_ekstra)
    Route::middleware(['role:admin_ekstra'])->group(function () {
        Route::get('/dashboard-pengelola', [AdminController::class, 'dashboard'])->name('dashboard-pengelola');
        Route::get('/galeri', [AdminController::class, 'galeriIndex'])->name('galeri.index');
        Route::get('/galeri/create', [AdminController::class, 'galeriCreate'])->name('galeri.create');
        Route::post('/galeri', [AdminController::class, 'galeriStore'])->name('galeri.store');
        Route::get('/galeri/{id}/edit', [AdminController::class, 'galeriEdit'])->name('galeri.edit');
        Route::put('/galeri/{id}', [AdminController::class, 'galeriUpdate'])->name('galeri.update');
        Route::delete('/galeri/{id}', [AdminController::class, 'galeriDestroy'])->name('galeri.destroy');
        Route::get('/ekstra', [AdminController::class, 'ekstraIndex'])->name('ekstra.index');
        Route::get('/ekstra/create', [AdminController::class, 'ekstraCreate'])->name('ekstra.create');
        Route::post('/ekstra', [AdminController::class, 'ekstraStore'])->name('ekstra.store');
        Route::get('/ekstra/{id}/edit', [AdminController::class, 'ekstraEdit'])->name('ekstra.edit');
        Route::put('/ekstra/{id}', [AdminController::class, 'ekstraUpdate'])->name('ekstra.update');
        Route::delete('/ekstra/{id}', [AdminController::class, 'ekstraDestroy'])->name('ekstra.destroy');
        Route::get('/prestasi-admin', [AdminController::class, 'prestasiIndex'])->name('prestasi.index');
        Route::get('/prestasi-admin/create', [AdminController::class, 'prestasiCreate'])->name('prestasi.create');
        Route::post('/prestasi-admin', [AdminController::class, 'prestasiStore'])->name('prestasi.store');
        Route::get('/prestasi-admin/{id}/edit', [AdminController::class, 'prestasiEdit'])->name('prestasi.edit');
        Route::put('/prestasi-admin/{id}', [AdminController::class, 'prestasiUpdate'])->name('prestasi.update');
        Route::delete('/prestasi-admin/{id}', [AdminController::class, 'prestasiDestroy'])->name('prestasi.destroy');
    });
    
    // DASHBOARD SUPER ADMIN - Hanya untuk role admin_siekstra (layout admin)
    Route::middleware(['role:admin_siekstra'])->group(function () {
        Route::get('/dashboard-superadmin', [AdminController::class, 'backoffice'])->name('dashboard-superadmin');
    });
    
    // ADMIN SIEKSTRA - Hanya untuk role admin_siekstra (Super Admin)
    Route::middleware(['role:admin_siekstra'])->group(function () {
        Route::get('/category', [AdminController::class, 'categoryBeritaIndex'])->name('category.index');
        Route::get('/category/create', [AdminController::class, 'categoryBeritaCreate'])->name('category.create');
        Route::post('/category', [AdminController::class, 'categoryBeritaStore'])->name('category.store');
        Route::get('/category/{id}/edit', [AdminController::class, 'categoryBeritaEdit'])->name('category.edit');
        Route::put('/category/{id}', [AdminController::class, 'categoryBeritaUpdate'])->name('category.update');
        Route::delete('/category/{id}', [AdminController::class, 'categoryBeritaDestroy'])->name('category.destroy');

        Route::get('/newss', [AdminController::class, 'beritaIndex'])->name('newss.index');
        Route::get('/newss/create', [AdminController::class, 'beritaCreate'])->name('newss.create');
        Route::post('/newss', [AdminController::class, 'beritaStore'])->name('newss.store');
        Route::get('/newss/{id}/edit', [AdminController::class, 'beritaEdit'])->name('newss.edit');
        Route::put('/newss/{id}', [AdminController::class, 'beritaUpdate'])->name('newss.update');
        Route::delete('/newss/{id}', [AdminController::class, 'beritaDestroy'])->name('newss.destroy');

        Route::get('/prestasi-superadmin', [AdminController::class, 'prestasiSuperadminIndex'])->name('prestasi.superadmin.index');
        Route::get('/prestasi-superadmin/create', [AdminController::class, 'prestasiSuperadminCreate'])->name('prestasi.superadmin.create');
        Route::post('/prestasi-superadmin', [AdminController::class, 'prestasiSuperadminStore'])->name('prestasi.superadmin.store');
        Route::get('/prestasi-superadmin/{id}/edit', [AdminController::class, 'prestasiSuperadminEdit'])->name('prestasi.superadmin.edit');
        Route::put('/prestasi-superadmin/{id}', [AdminController::class, 'prestasiSuperadminUpdate'])->name('prestasi.superadmin.update');
        Route::delete('/prestasi-superadmin/{id}', [AdminController::class, 'prestasiSuperadminDestroy'])->name('prestasi.superadmin.destroy');
        Route::get('/kategori/{id}/edit', [AdminController::class, 'kategoriEdit'])->name('kategori.edit');
        Route::put('/kategori/{id}', [AdminController::class, 'kategoriUpdate'])->name('kategori.update');
        Route::delete('/kategori/{id}', [AdminController::class, 'kategoriDestroy'])->name('kategori.destroy');

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
