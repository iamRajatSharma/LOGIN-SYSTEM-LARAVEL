<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'doLogin'])->name('doLogin');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'doRegisteration'])->name('doRegister');
Route::get('/logout', [AuthController::class, 'logout'])->name('doLogout');
Route::get('/welcome', [AuthController::class, 'welcome'])->name('welcome');