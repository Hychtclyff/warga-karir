<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WargaController;
use App\Models\Warga;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/', function () {
    return view('home', ["data" => Warga::all()]);
})->name('home');
Route::get('/search', [WargaController::class, 'search'])->name('search');

Route::get('/create', function () {
    return view('form');
})->name('form');
Route::get('/edit/{id}', function ($id) {
    return view('form', ['row' => Warga::findOrFail($id)]);
})->name('form.edit');

Route::post('/create', [WargaController::class, 'store'])->name('warga.store');
Route::patch('/edit/{id}', [WargaController::class, 'update'])->name('warga.update');
Route::delete('/delete/{id}', [WargaController::class, 'destroy'])->name('warga.destroy');


Route::post('/login', [LoginController::class, 'authenticate'])->name('login.store');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
