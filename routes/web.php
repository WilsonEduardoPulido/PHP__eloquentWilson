<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuario;

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
    return view('welcome')->name('users.salir');
});


Route::get('/users','App\Http\Controllers\UsuarioController@index')->name('users.index');

Route::get('/users/crear','App\Http\Controllers\UsuarioController@create')->name('users.crear');

Route::post('/users/crear','App\Http\Controllers\UsuarioController@store')->name('users.store');


Route::get('/users/{id}/edit','App\Http\Controllers\UsuarioController@edit')->name('users.edit');

Route::resource('users','App\Http\Controllers\UsuarioController');
Route::get('/users/crear','App\Http\Controllers\UsuarioController@create')->name('users.crear');
Route::get('/users/{id}/index','App\Http\Controllers\UsuarioController@destroy')->name('users.destroy');

