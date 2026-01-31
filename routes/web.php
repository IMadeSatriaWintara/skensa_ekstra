<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// Route Admin Dashboard
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

// Route default untuk testing
Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});
