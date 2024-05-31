<?php

use Illuminate\Support\Facades\Route;
$servicios= [/*
    ['titulo' => 'Servicio 01'],
    ['titulo' => 'Servicio 02'],
    ['titulo' => 'Servicio 03'],
    ['titulo' => 'Servicio 04'],
    ['titulo' => 'Servicio 05'],*/
    ];
    Route::view('/', 'home')->name('home');
Route::view('nosotros', 'nosotros')->name('nosotros');
Route::get('servicios', 'App\Http\Controllers\Servicios2Controller@index')->name('servicios');
Route::view('contacto', 'contacto')->name('conatcto');
Route::resource('servicios','App\Http\Controllers\Servicios2Controller')->except('index','show');
