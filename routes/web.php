<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminDashboardController; // Menggunakan controller untuk dashboard admin
use App\Http\Middleware\AdminMiddleware; // Mengimpor middleware admin
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('/landing/landing');
})->name('landing');

// Routes yang memerlukan autentikasi
Route::middleware(['auth'])->group(function () {
    // Route untuk Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route untuk user biasa
    Route::get('/jobs', [JobController::class, 'index'])->name('jobs.user');
    Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');

    // Route untuk Admin
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

        // Route untuk manajemen Questions
        Route::get('/questions', [QuestionController::class, 'index'])->name('questions');

        // Route untuk manajemen Jobs (khusus admin)
        Route::resource('jobs', JobController::class)->except(['show']);
    });
});

require __DIR__.'/auth.php';
