<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/sobre-mi', function () {
    return view('sobre-mi');
})->name('sobre-mi');

Route::get('/proyectos', function () {
    return view('proyectos');
})->name('proyectos');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::post('/contacto', [ContactoController::class, 'enviar'])
    ->middleware('throttle:5,1')
    ->name('contacto.enviar');