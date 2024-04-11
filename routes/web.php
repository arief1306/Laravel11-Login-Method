<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});


// Route for login (this route direct to function login in LoginController)
Route::prefix('login')->group(function () {
    Route::get('/', [LoginController::class, 'login'])->name('login');
});


// Route for dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
});
