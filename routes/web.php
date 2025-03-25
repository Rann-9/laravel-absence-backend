<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('pages.auth.login');
});

Route::get('/home', function () {
    return view('pages.dashboard');
});

Route::resource('user', UserController::class);

// Route::get('/login', function () {
//     return view('pages.auth.login');
// });

// Route::get('/register', function () {
//     return view('pages.auth.register');
// });
