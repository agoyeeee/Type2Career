<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminDashboardController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', function () {
    return view('/landing/landing');
})->name('landing');

// Profile Routes (Authenticated Users)
Route::middleware('auth')->controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'edit')->name('profile.edit');
    Route::patch('/profile', 'update')->name('profile.update');
    Route::delete('/profile', 'destroy')->name('profile.destroy');
});

// User Routes (Role: User)
Route::middleware(['auth', 'role:user'])->group(function () {
    // Static Pages
    Route::view('/test', '/landing/test')->name('test');
    Route::view('/career', '/landing/career')->name('career');
    Route::view('/about', '/landing/about')->name('about');

    // Quiz Routes
    Route::controller(QuizController::class)->group(function () {
        Route::get('/quiz', 'takeQuiz')->name('quiz.take');
        Route::post('/quiz', 'submitQuiz')->name('quiz.submit');
        Route::get('/hasil', 'showQuizResult')->name('quiz.result');
    });
});

// Admin Routes (Role: Admin)
Route::middleware(['auth', 'role:admin'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Question Management
    Route::controller(QuestionController::class)->group(function () {
        Route::get('/question', 'index')->name('question.index');
        Route::post('/question', 'store')->name('question.store');
        Route::put('/question/{question}', 'update')->name('question.update');
        Route::delete('/question/{question}', 'destroy')->name('question.destroy');
    });

    // Job Management
    Route::controller(JobController::class)->group(function () {
        Route::get('/job', 'index')->name('job.index');
        Route::post('/job', 'store')->name('job.store');
        Route::put('/job/{job}', 'update')->name('job.update');
        Route::delete('/job/{job}', 'destroy')->name('job.destroy');
    });

    // User Management (Menambahkan routes untuk CRUD User)
    Route::controller(UserController::class)->group(function () {
        Route::get('/users', 'index')->name('users.index'); // Menampilkan daftar pengguna
    });
});

Auth::routes(['verify'=> true]);

// Authentication Routes (from Laravel Breeze or Fortify)
require __DIR__ . '/auth.php';
