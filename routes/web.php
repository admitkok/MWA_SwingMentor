<?php

use \App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'welcome'])->name('welcome');
Route::get('posts', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::get('posts/{post:slug}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('users/{id}', [\App\Http\Controllers\UserController::class, 'show'])->name('users.show');
Route::get('mentors', [\App\Http\Controllers\MentorController::class, 'index'])->name('mentors.index');
Route::get('mentors/{id}', [\App\Http\Controllers\MentorController::class, 'show'])->name('mentors.show');



require __DIR__.'/auth.php';

// Authenticated User routes
Route::view('/dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');
Route::prefix('home')->name('home.')->middleware('auth')->group(function () {
    Route::resource('posts', \App\Http\Controllers\Home\PostController::class);
    Route::resource('mentors', \App\Http\Controllers\Home\MentorController::class);
    Route::get('posts/{post}/toggle-publish', [\App\Http\Controllers\Home\PostTogglePublishController::class, 'toggle'])->name('posts.toggle-publish');
    Route::get('mentors', [\App\Http\Controllers\Home\MentorController::class, 'index'])->name('mentors.index');
    Route::get('mentors/{mentor}/toggle-change', [\App\Http\Controllers\Home\MentorToggleChangeController::class, 'toggle'])->name('mentor.toggle-change');
    Route::get('mentors/{id}', [\App\Http\Controllers\Home\MentorController::class, 'show'])->name('mentors.show');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin User routes
Route::name('admin.')->middleware(['auth', 'is.admin'])->group( function() {
    Route::resource('/admin/mentors', \App\Http\Controllers\AdminMentorController::class);
});


