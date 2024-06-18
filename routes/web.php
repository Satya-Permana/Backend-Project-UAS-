<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});

Route::middleware(['auth', 'role:dosen'])->group(function () {
    Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
});

Route::middleware(['auth', 'role:mahasiswa'])->group(function () {
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
});
