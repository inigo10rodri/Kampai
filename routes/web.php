<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/formularios', function () {
    return view('formularios');
});

Route::post('/formularios', function () {
    return view('formularios');
});

Route::post('/comidassel', function () {
    return view('comidassel');
});
Route::get('/comidassel', function () {
    return view('comidassel');
});
Route::get('/bebidassel', function () {
    return view('bebidassel');
});
Route::post('/bebidassel', function () {
    return view('bebidassel');
});