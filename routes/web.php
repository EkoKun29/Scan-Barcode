<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::view('scan/{uuid}', 'scan/show');
Route::get('scan/{uuid}', [App\Http\Controllers\QrCodeController::class, 'scan'])->name('scan.qr');

// Login
Auth::routes();
Route::get('/log-in', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('_login');
Route::post('/log-in-post', [App\Http\Controllers\Auth\LoginController::class, 'posts'])->name('_postlogin');
Route::get('/', function () {
    return view('auth.login');
})->name('login');

//Register
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('_register');
Route::post('/input-register', [App\Http\Controllers\Auth\RegisterController::class, 'store'])->name('_postRegister');

//Logout
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('_logout');

//Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Scan
Route::get('scan/print/{uuid}', [App\Http\Controllers\QrCodeController::class, 'print'])->name('scan.print');
Route::get('scan/{id}/delete', [App\Http\Controllers\QrCodeController::class, 'delete'])->name('scan.delete');
Route::post('scan/download', [App\Http\Controllers\QrCodeController::class, 'download'])->name('scan.download');
Route::get('search', [App\Http\Controllers\QrCodeController::class, 'search'])->name('scan.search');
Route::resource('scan', QrCodeController::class);


