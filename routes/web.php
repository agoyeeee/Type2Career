<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminDashboardController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', function () {
    return view('/landing/landing');
})->name('landing');

// Authentication Routes
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login');
    Route::post('/logout', 'logout')->name('logout');
});

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
});

// Authentication Routes (from Laravel Breeze or Fortify)
require __DIR__ . '/auth.php';
