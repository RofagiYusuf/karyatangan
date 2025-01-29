<?php

use App\Http\Controllers\FreeUserController;
use App\Http\Middleware\LevelMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PegawaiController;

Route::get('/', [FreeUserController::class, 'index']);

Route::view('/login', 'login');

Route::middleware([LevelMiddleware::class . ':owner'])->group(function () {
    Route::view('/Beranda-Owner', 'owner.index');
    Route::view('/Daftar-Produk', 'owner.dataproduk');
    
    Route::get('/pegawai', [PegawaiController::class, 'index'])->name('tampil_pegawai');
    Route::get('/tambah-pegawai', [PegawaiController::class, 'create'])->name('tambah_pegawai');
    Route::post('/pegawai-submit', [PegawaiController::class, 'store'])->name('store_pegawai');
    Route::get('/edit-pegawai/{id}', [PegawaiController::class, 'edit'])->name('edit_pegawai');
    Route::put('/update-pegawai/{id}', [PegawaiController::class, 'update'])->name('update_pegawai');
});

Route::middleware([LevelMiddleware::class . ':admin'])->group(function () {
    Route::delete('/delete-pegawai/{id}', [PegawaiController::class, 'delete'])->name('delete_pegawai');    
    
});

Route::post('/login-attempt', [UserController::class, 'login'])->name('login');
Route::post('/logout-attempt', [UserController::class, 'logout'])->name('logout');