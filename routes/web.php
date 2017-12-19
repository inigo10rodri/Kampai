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

/*
 * Email verification route
 */
Route::get('/verify/{token}', 'Auth\RegisterController@verify');

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
Route::get('/acceder', function () {
    return view('auth.acceder');
});

Route::post('/acceder', function () {
    return view('auth.acceder');
});

Route::post('/bebcomsel', function () {
    return view('bebcomsel');
});


/*
 *  Admin simple
 *
 */
Route::get('/admin', function(){
    return view('admin.home');
})->middleware('admin');

Route::get('/bar', function(){
    return view('bar.home');
})->middleware('bar');

/*Route:: get('/barUser',function(){
    return view('bar.home');
});
Route::post('/barUser','UsuBarController@anadirUsuBar');

Route:: get('/usuBarRegister',function(){
    return view('auth.usuBarRegister');
});*/

Route::get('/loginBar', function () {
    return view('auth.login');
});
Route::get('sidebar',function(){
    return view('sidebar');
});

