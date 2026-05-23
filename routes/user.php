<?php

use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\UserDashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');

    // Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
//    Route::resource('profile', ProfileController::class)->only(['edit', 'update', 'destroy']);
});

Route::prefix('profile')->name('profile.')->group(function () {
    Route::get('edit', [ProfileController::class, 'edit'])->name('edit');
    Route::put('update', [ProfileController::class, 'update'])->name('update');
    Route::delete('destroy', [ProfileController::class, 'destroy'])->name('destroy');
});

