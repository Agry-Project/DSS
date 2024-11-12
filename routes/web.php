<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Home page route
Route::get('/', [PageController::class, 'home'])->name('home');

// About Us page route
Route::get('/Login', [PageController::class, 'Login'])->name('Login');
Route::get('register', [PageController::class, 'register'])->name('register');
Route::get('buyer', [PageController::class, 'buyer'])->name('buyer');
