<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('AcercaDeMi', function () {
    return view('AcercaDeMi');
})->name('AcercaDeMi');

Route::get('Experiencia', function () {
    return view('Experiencia');
})->name('Experiencia');

Route::get('Favoritos', function () {
    return view('Favoritos');
})->name('Favoritos');

Route::get('logros', function () {
    return view('logros');
})->name('logros');

Route::get('Ocupacion', function () {
    return view('Ocupacion');
})->name('Ocupacion');

<<<<<<< HEAD
Route::get('Ventas', function () {
    return view('Ventas');
})->name('Ventas');
=======
Route::get('Conoce más de mi emprendimiento', function () {
    return view('Conoce más de mi emprendimiento');
})->name('Conoce más de mi emprendimiento');
>>>>>>> 3c649d05625de1ca83a5f0cc439c6d27b36cbf2f
