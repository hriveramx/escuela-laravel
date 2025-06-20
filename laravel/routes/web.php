<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfertaEducativaController;

Route::get('/', function () {
    return view('home.home');
});

Route::get('oferta-educativa', [OfertaEducativaController::class, 'home']);
Route::get('oferta-educativa/preescolar', [OfertaEducativaController::class, 'preescolar']);

Route::get('contacto', function () {
    return view('contacto.contacto');
});
