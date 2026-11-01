<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

Route::redirect('/', '/libros/crear');

Route::get('/libros/crear', [LibroController::class, 'create'])
    ->name('libros.create');

Route::post('/libros', [LibroController::class, 'register'])
    ->name('libros.register');

Route::get('/libros', [LibroController::class, 'index'])
    ->name('libros.index');

Route::get('/libros/{libro}/editar', [LibroController::class, 'edit'])
    ->name('libros.edit');

Route::put('/libros/{libro}', [LibroController::class, 'update'])
    ->name('libros.update');

Route::delete('/libros/{libro}', [LibroController::class, 'destroy'])
    ->name('libros.destroy');