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

//Route::get('/', function () {           primera ruta con la q trabajaba, devuelve el Welcome blade
//  return view('welcome');
//});


// Route::get('/categorias', 'CategoriasController@index'); ruta para probar devolver una vista a traves de un controler


Route::get('/', 'HomeController@index')->name('inicio');     //el nombre es el q quiera.
Route::get('/post', 'HomeController@post')->name('post'); 
Auth::routes();

Route: