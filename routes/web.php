<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/validasi', [AuthController::class, 'loginProses'])->name('validasi');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Contoh halaman yang hanya bisa diakses setelah login
Route::get('/dashboard', function () {
    return view('dashboard'); // Buat file resources/views/dashboard.blade.php
})->middleware('auth');



Route::get('/', function () {
    return view('welcome');
})->middleware('auth')->name('dashboard');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('dashboard');

// Route::get('form/login', function () {
//     return view('auth.login');
// })->name('login')->middleware('guest');

// Route::post('/validasi', function (Request $request) {
//     $request->validate([
//         'email' => 'required',
//         'password' => 'required'
//     ], [
//         'email.required' => 'Email tidak boleh kosong',
//         'password.required' => 'Password tidak boleh kosong'
//     ]);

//     $credentials = $request->only(['email', 'password']);

//     if (Auth::attempt($credentials)) {
//         return view('admin.dashboard');
//     } else {
//         return back()->with([
//             'error' => 'Email atau password invalid'
//         ]);
//     }
// })->name('validasi');


// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/admin', function () {
//         return "mahasiswa";
//     });
// });

// Route::middleware(['auth', 'role:mahasiswa'])->group(function () {

//     Route::get('/mahasiswa', function () {
//         return "mahasiswa";
//     });


// });

// Route::middleware(['auth', 'role:dosen'])->group(function () {

//     Route::get('/dosen', function () {
//         return "mahasiswa";
//     });


// });


// // Router::get('form/login', function () {
// //     return view('auth.login');
// // })->name('login');

// // Route::post('form/login', function () {
// //     // Handle login logic here
// // })->name('login.post');
