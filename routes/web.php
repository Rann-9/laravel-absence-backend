<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;

Route::get('/', function () {
    return view('pages.auth.login');
});

Route::get('/home', function () {
    $userCount = User::count();
    return view('pages.dashboard', compact('userCount'));
})->middleware('auth');

Route::resource('user', UserController::class);

Route::resource('company', CompanyController::class);

// Route::get('/login', function () {
//     return view('pages.auth.login');
// });

// Route::get('/register', function () {
//     return view('pages.auth.register');
// });
