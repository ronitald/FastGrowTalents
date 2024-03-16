<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostulationsController;

// ROUTE MAIN
Route::get('/', function () {
    return view('welcome');
});

// ROUTES AUTH
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// ROUTES RESOURCES
Route::resource('/company', CompanyController::class);
Route::resource('/offer', OfferController::class);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Route::get('/admin', [AdminController::class, 'index']); 

Route::post('/aplication/{user}/{offer}', [PostulationsController::class, 'store'])->name('candidate.postulation');
