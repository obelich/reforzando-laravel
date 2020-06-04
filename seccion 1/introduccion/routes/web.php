<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    echo "<a href='" . route('contactos') . "'>Contactos<br />";
    echo "<a href='" . route('contactos') . "'>Contactos<br />";
    echo "<a href='" . route('contactos') . "'>Contactos<br />";
});


Route::get('/contactos', function() {
    return "Hola desde la pagina de contacto";
});



Route::get('saludo/{nombre?}', function($nombre = 'Invitado') {
    return 'Hola saludos ' .  $nombre;
});

Route::get('/contactanos', function() {
    return "Hola desde la pagina de contacto";
})->name('contactos');
