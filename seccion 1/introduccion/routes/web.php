<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return "Hola desde la pagina de inicio";
});

Route::get('/contacto', function() {
    return "Hola desde la pagina de contacto";
});
