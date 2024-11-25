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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::view('/control-registro','control-registro')->name('control-registro');
    Route::view('/crear-usuario','crear-usuario')->name('crear-usuario');
    Route::view('/eventos','eventos')->name('eventos');
    Route::view('/fondos','fondos')->name('fondos');
    Route::view('/franelas','franelas')->name('franelas');
    Route::view('/registrar','registrar')->name('registrar');
    Route::view('/tasa-dolar','tasa-dolar')->name('tasa-dolar');

});
