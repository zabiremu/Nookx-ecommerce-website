<?php

use App\Http\Controllers\backend\AdminProfileController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\frontend\HomePageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// backend controller start

// dashboard controller
Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'create')->name('dashboard');
})->middleware(['auth', 'verified']);

// profile controller start
Route::controller(AdminProfileController::class)->group(function () {

    // update profile
    Route::get('/create/profile', 'create')->name('create.profile');
    Route::post('/update/profile/{id}', 'update')->name('update.profile');

    // update password
    Route::get('/edit/password/', 'editPassword')->name('edit.password');
    Route::put('/update/password/{id}', 'updatePassword')->name('update.password');

})->middleware(['auth', 'verified']);
// profile controller end

// backend controller end

// frontend controller start

// Home Page Controller Start
Route::controller(HomePageController::class)->group(function () {
    Route::get('/', 'create')->name('home.create');
});
// Home Page Controller End

// fortend controller end

require __DIR__ . '/auth.php';
