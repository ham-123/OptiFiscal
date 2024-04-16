<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OptifiscalController;



Route::get('/accueil', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [OptifiscalController::class, 'index'])->name('accueil');
Route::get('/a_propos', [OptifiscalController::class, 'about'])->name('about');
Route::get('/services', [OptifiscalController::class, 'services'])->name('services');

Route::get('/contact', [OptifiscalController::class, 'contact'])->name('contact');
Route::post('/contact', [OptifiscalController::class, 'store'])->name('contact.store');


require __DIR__.'/auth.php';
