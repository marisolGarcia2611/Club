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
    return view('auth.login');
});

Route::group(['middleware' => 'prevent-back-history'],function(){
    Auth::routes();
    Route::get('/back', function () {return back();});

    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/Crud', 'App\Http\Controllers\MenuController@index')->name('getIndex');
    Route::get('/Crud/Insertar', 'App\Http\Controllers\MenuController@getInsertar')->name('getInsertar');
    Route::get('/Crud/Editar', 'App\Http\Controllers\MenuController@getEditar')->name('getEditar');

    // Ruta sistemas panel de control---------------------------------------------------------------------------------------------
    Route::get('/Panel', 'App\Http\Controllers\SistemasController@index')->name('panel');
    Route::get('/Permisos', 'App\Http\Controllers\SistemasController@indexPermisos')->name('permisos');
    Route::get('/Acciones', 'App\Http\Controllers\SistemasController@indexAcciones')->name('acciones');
    Route::post('/AsignarPermiso', 'App\Http\Controllers\SistemasController@asignarPermiso')->name('asignarPermiso');

    
    // Ruta resgistro de usuarios--------------------------------------------------------------------------------------------------
    Route::get('/Registro', 'App\Http\Controllers\SistemasController@IndexRegister')->name('registro');
    Route::post('/Registro/Crear', 'App\Http\Controllers\SistemasController@createUser')->name('createUser');

});