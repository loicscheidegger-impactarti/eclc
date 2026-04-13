<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;

Route::view('/', 'home')->name('home');



Route::get('/inscription', function () {
    return view('inscription');
})->name('inscription');

Route::post('/inscription', [InscriptionController::class, 'send'])->name('inscription.send');
