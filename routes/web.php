<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/sobre-mi', function () {
    return view('sobre-mi');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/proyectos', function () {
    return view('proyectos');
});

