<?php

use Illuminate\Support\Facades\Route;

//Agrupo las rutas para que acepten el middleware auth
Route::group(['middleware' => 'auth'], function () {

    Route::get('empleados/index',                     'EmpleadosController@index'         )->name('empleados.index');
    Route::post('empleados/crear',                    'EmpleadosController@crear'         )->name('empleados.crear');
    Route::put('empleados/actualizar/{empleado}',     'EmpleadosController@actualizar'    )->name('empleados.actualizar');
    Route::put('empleados/cambiarEstatus/{empleado}', 'EmpleadosController@cambiarEstatus')->name('empleados.estatus'   );
    Route::delete('empleados/eliminar/{empleado}',    'EmpleadosController@eliminar'      )->name('empleados.eliminar'  );

    Route::post('logout',      'LoginController@logout')->name('logout');
});



Route::get('login',        'LoginController@index')->name('login.index');
Route::post('login/auth',  'LoginController@auth')->name('login.auth');
