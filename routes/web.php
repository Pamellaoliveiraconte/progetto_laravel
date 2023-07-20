<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chi-siamo', function () {
    return view('chi-siamo');
});

Route::get('/cosa-facciamo', function () {
    return view('cosa-facciamo');
});

Route::get('/contattaci', function () {
    return view('contattaci');
});

Route::get('/servizi', function () {
    return view('servizi');
});


