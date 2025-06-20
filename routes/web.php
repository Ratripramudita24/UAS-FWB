<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\StafController;
use App\Http\Middleware\AdminMinddleware;
use App\Http\Middleware\GuestMiddleware;
use App\Http\Middleware\MahasiswaMinddleware;
use App\Http\Middleware\StafMiddleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


// Route::post('/logout', [AutentikasiController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function(){
    Route::post('/logout', [AutentikasiController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [AutentikasiController::class, 'dashboard'])->name('dashboard');
});

Route::middleware([GuestMiddleware::class])->group(function(){
    Route::get('/lihatregister', [AutentikasiController::class, 'lihatregister'])->name('lihatregister');
    Route::post('/svregister', [AutentikasiController::class, 'svregister'])->name('svregister');
    Route::get('/login', [AutentikasiController::class, 'login'])->name('login');
    Route::post('/svlogin', [AutentikasiController::class, 'svlogin'])->name('svlogin');
});


Route::middleware([AdminMinddleware::class])->group(function(){
    Route::get('/keolaRuanganAdmin', [AdminController::class, 'lihatRuanganAdmin'])->name('kelolaRuanganAdmin');
    Route::get('/tambahRuangan', [AdminController::class, 'tambahRuangan'])->name('tambahRuangan');
    Route::post('/simpanRuangan', [AdminController::class, 'simpanRuangan'])->name('simpanRuangan');
    Route::get('/editRuangan/{id}', [AdminController::class, 'editRuangan'])->name('editRuangan');
    Route::post('/editRuangan/simpan/{id}', [AdminController::class, 'updateRuangan'])->name('updateRuangan');
    Route::post('/deleteRuangan/simpan/{id}', [AdminController::class, 'deleteRuangan'])->name('deleteRuangan');
    Route::get('/lihatRiwayat', [AdminController::class, 'lihatRiwayat'])->name('lihatRiwayat');
});



Route::middleware([StafMiddleware::class])->group(function(){
    Route::get('/lihatsewaStaf', [StafController::class, 'lihatsewaStaf'])->name('lihatsewaStaf');
    Route::get('/sewa/verifikasi/{id}', [StafController::class, 'verifikasi'])->name('sewa.verifikasi');
    Route::get('/sewa/tolak/{id}', [StafController::class, 'tolak'])->name('sewa.tolak');
});



Route::middleware([MahasiswaMinddleware::class])->group(function(){
    Route::get('/dashboardMahasiswa', [AutentikasiController::class, 'dashboardMahasiswa'])->name('dahsboardMahasiswa');
    Route::get('/lihatSewaRuangan', [MahasiswaController::class, 'lihatRuanganMahasiswa'])->name('lihatRuanganMahasiswa');
    Route::get('/cariPesan/{id}', [MahasiswaController::class, 'cariPesan'])->name('cariPesan');
    Route::post('/mulaiSewa/{id}', [MahasiswaController::class, 'mulaiSewa'])->name('mulaiSewa');
    Route::post('/ruangan/{id}/favorit', [MahasiswaController::class, 'tambahFavorit'])->name('ruangan.favorit');
    Route::get('/favorite', [MahasiswaController::class, 'favoriteView'])->name('favorite.view');
    Route::get('/lihatProfil', [MahasiswaController::class, 'lihatProfil'])->name('lihatProfil');
    Route::get('/lihatfavorit', [MahasiswaController::class, 'lihatfavorit'])->name('lihatfavorit');
    Route::post('/ruangan/{ruangan_id}/favorit', [MahasiswaController::class, 'tambahFavorit'])->name('tambahFavorit');
});












