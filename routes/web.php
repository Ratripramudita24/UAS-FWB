<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

// Router::get('form/login', function () {
//     return view('auth.login');
// })->name('login');

// Route::post('form/login', function () {
//     // Handle login logic here
// })->name('login.post');
