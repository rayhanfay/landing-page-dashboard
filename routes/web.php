<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SectionController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');
;



Route::get('admin/settings', function () {
    return view('profile');
});



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('sections', SectionController::class);
    Route::get('/admin/settings', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/home/admin/settings', [ProfileController::class, 'update'])->name('profile.update');
    Route::view('/profile_updated', 'profile_updated')->name('profile.updated');
    Route::get('manage', [SectionController::class, 'manage'])->name('sections.manage');
    Route::get('sections/{section}/edit', [SectionController::class, 'edit'])->name('sections.edit');
    Route::get('sections', [SectionController::class, 'manage'])->name('sections.manage');
    Route::put('sections/{section}', [SectionController::class, 'update'])->name('sections.update');
});


