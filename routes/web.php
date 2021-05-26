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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('empleados','EmpleadosController@index')->name('empleados.index');
    Route::post('empleados.store','EmpleadosController@store')->name('empleados.store');
    Route::get('empleados.show/{id}','EmpleadosController@show')->name('empleados.show');
    Route::put('empleados.edit/{id}','EmpleadosController@edit')->name('empleados.edit');
    Route::get('empleados.detail/{id}','EmpleadosController@detail')->name('empleados.detail');
    Route::get('empleados.status/{id}/{value}','EmpleadosController@status')->name('empleados.status');
    Route::get('empleados.delete/{id}','EmpleadosController@delete')->name('empleados.delete');


});
