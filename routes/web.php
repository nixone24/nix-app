<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\User\UserController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/medecin', [HomeController::class, 'medecin'])->name('medecin');

Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::match(['get', 'post'], '/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
