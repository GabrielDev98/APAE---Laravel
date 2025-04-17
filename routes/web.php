<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('login');
});

Route::get('/Main', function () {
    return view('Main');
});

Route::get('/registro', function () {
    return view('registro'); // Assumindo que você criará uma view chamada 'registro'
});

Route::post('/salva-conta', [SeuController::class, 'salvarConta'])->name('salva-conta');


//Route::get('/registro', [RegisterController::class, 'showRegistrationForm'])->name('register');
//Route::post('/registro', [RegisterController::class, 'register'])->name('salva-conta');