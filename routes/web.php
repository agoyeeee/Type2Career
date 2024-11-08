<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('/landing/landing');
})->name('landing');

Route::get('/test', function () {
    return view('/landing/test');
})->name('test');

Route::get('/career', function () {
    return view('/landing/career');
})->name('career');

Route::get('/about', function () {
    return view('/landing/about');
})->name('about');

Route::get('/quiz', function () {
    return view('/landing/quiz');
})->name('quiz');

Route::get('/hasil', function () {
    return view('/landing/hasil');
})->name('hasil');

// Routes yang memerlukan autentikasi
Route::middleware(['auth'])->group(function () {
    // Route untuk Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route untuk Admin
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Question Routes
    Route::get('/question', [QuestionController::class, 'index'])->name('question.index');
    Route::post('/question', [QuestionController::class, 'store'])->name('question.store');
    Route::put('/question/{question}', [QuestionController::class, 'update'])->name('question.update');
    Route::delete('/question/{question}', [QuestionController::class, 'destroy'])->name('question.destroy');

    // Job Routes
    Route::get('/job', [JobController::class, 'index'])->name('job.index');
    Route::post('/job', [JobController::class, 'store'])->name('job.store');
    Route::put('/job/{job}', [JobController::class, 'update'])->name('job.update');
    Route::delete('/job/{job}', [JobController::class, 'destroy'])->name('job.destroy');

        // Route untuk manajemen Jobs (khusus admin)
        Route::resource('jobs', JobController::class)->except(['show']);
    });
});

require __DIR__.'/auth.php';
