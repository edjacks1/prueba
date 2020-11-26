<?php

use Illuminate\Support\Facades\Route;
use App\Modelos\Empleado;
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

Route::get('empleados/index',  'EmpleadosController@index')->name('empleados.index');
Route::post('empleados/create','EmpleadosController@create');
Route::put('empleados/update', 'EmpleadosController@update');

