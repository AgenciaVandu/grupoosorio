<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name("inicio");

Route::get('/inflables-osorio', function () {
    return view('inflables');
})->name("inflables-osorio");

Route::get('/inflables-osorio-kids', function () {
    return view('inflables-kids');
})->name("inflables-osorio-kids");

Route::get('/obsa-soluciones-publicitarias', function () {
    return view('obsa');
})->name("obsa");
Route::get('/contacto', function () {
    return view('contacto');
})->name("contacto");
