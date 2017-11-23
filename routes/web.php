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



/*
Map route
*/
Route::get('/map', function(){
    return view('map.map');
  });

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
Route::get('/bebcomsel', function () {
    return view('bebcomsel');
});

Route::post('/bebcomsel', function () {
    return view('bebcomsel');

});
Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');
    Route::get('/password/reset', 'AuthAdmin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'AuthAdmin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'AuthAdmin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'AuthAdmin\ResetPasswordController@reset');
});