<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;

Route::get('/', function () {
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

Route::middleware(['auth'])->group(function () {
    Route::resource('noticias', NoticiaController::class);
});

Route::get('/hello', function () {
    return "Olá, mundo do Laravel!";
});

// Retorna uma view
Route::get('/', function () {
    return view('welcome'); // página inicial padrão
});

// Páginas públicas
Route::view('/sobre', 'sobre')->name('sobre');
Route::view('/contato', 'contato')->name('contato');

// Página protegida (precisa login)
Route::view('/home', 'home')->middleware('auth')->name('home')
;
require __DIR__.'/auth.php';
