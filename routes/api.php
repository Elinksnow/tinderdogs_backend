<?php

use App\Http\Controllers\PerroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/perros', 'PerroController@index');
Route::post('/perros', 'PerroController@store');
Route::get('/perros/{id}', 'PerroController@show');
Route::put('/perros/{id}', 'PerroController@update');
Route::patch('/perros/{id}', 'PerroController@update');
Route::delete('/perros/{id}', 'PerroController@destroy');

