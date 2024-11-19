<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstitutionController; // Importa el controlador de instituciones


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

require __DIR__.'/auth.php';

// Ruta para mostrar el formulario de creación de instituciones
Route::get('/institutions/create', [InstitutionController::class, 'create'])->name('institutions.create');

// Ruta para procesar y almacenar los datos del formulario de instituciones
Route::post('/institutions', [InstitutionController::class, 'store'])->name('institutions.store');
