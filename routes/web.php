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
    return view('welcome');
});

Route::get('/geles', function () {
    return view('geles');
});

Route::get('/mascaras', function () {
    return view('mascaras');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ruta para los usuarios
Route::resource('/usuarios', 'UserController');

//ruta para los roles
Route::resource('/group', 'RoleController');

//ruta para las categorias
Route::resource('/categorie', 'CategoryController');

//ruta para los productos
Route::resource('/product', 'ProductController');
