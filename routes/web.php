<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Home\HomeController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/medecin', [HomeController::class, 'medecin'])->name('medecin');

Route::get('/register', [HomeController::class, 'register'])->name('formulaire');
Route::get('/login', [HomeController::class, 'login'])->name('connexion');
