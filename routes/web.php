<?php

use Illuminate\Support\Facades\Route;
/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'ControllerPrueba@index')->name('prueba.index');
Route::get('/ejemplo', 'ControllerPrueba@index')->name('prueba.ejemplo');
Route::get('/ejemplo1', 'ControllerPrueba@ejemplo1')->name('prueba.ejemplo1');
Route::get('/ejemplo3', 'ControllerPrueba@ejemplo3')->name('prueba.ejemplo3');
Route::post('/ejemplo3_res', 'ControllerPrueba@ejemplo3_res')->name('prueba.ejemplo3_res');