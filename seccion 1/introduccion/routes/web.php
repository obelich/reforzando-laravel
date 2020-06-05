<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function() {
//    echo "<a href='" . route('contactos') . "'>Contactos<br />";
//    echo "<a href='" . route('contactos') . "'>Contactos<br />";
//    echo "<a href='" . route('contactos') . "'>Contactos<br />";
//});
//
//
//Route::get('/contactos', function() {
//    return "Hola desde la pagina de contacto";
//});
//
//
//
//Route::get('saludo/{nombre?}', function($nombre = 'Invitado') {
//    return 'Hola saludos ' .  $nombre;
//});
//
//Route::get('/contactanos', function() {
//    return "Hola desde la pagina de contacto";
//})->name('contactos');


//Retornar una vista blade

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/portfolio', 'portfolio')->name('portfolio');
Route::view('/contact', 'contact')->name('contact');

//Route::get('/', function() {
//    $nombre = "Obelich";
//    return view('home')->with('nombre', $nombre);
//    //Diferentes formas
//    //Forma 2
////    return view('home')->with(['nombre'=> $nombre]);
//    //Forma 3
////    return view('home', ['nombre'=> $nombre]);
//    //Forma 4
////    return view('home', compact('nombre'));
//
//})->name('home');
