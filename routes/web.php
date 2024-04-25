<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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

