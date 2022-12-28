<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/perros', 'PerroController@index');
Route::get('/perros/create', 'PerroController@create');
Route::post('/perros', 'PerroController@store');
Route::get('/perros/{id}', 'PerroController@show');
Route::get('/perros/{id}/edit', 'PerroController@edit');
Route::put('/perros/{id}', 'PerroController@update');
Route::patch('/perros/{id}', 'PerroController@update');
Route::delete('/perros/{id}', 'PerroController@destroy');
