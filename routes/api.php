<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerroController;
use App\Http\Controllers\InteraccionController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/perros/random', [PerroController::class, 'GetRandomPerro']);

Route::get('/interacciones/aceptados', [InteraccionController::class, 'aceptados']);
Route::get('/interacciones/rechazados', [InteraccionController::class, 'rechazados']);

Route::resource('perros',PerroController::class);
Route::resource('interacciones',InteraccionController::class);

// Route::get('/perros', 'PerroController@index');
// Route::post('/perros', 'PerroController@store');
// Route::get('/perros/{id}', 'PerroController@show');
// Route::put('/perros/{id}', 'PerroController@update');
// Route::patch('/perros/{id}', 'PerroController@update');
// Route::delete('/perros/{id}', 'PerroController@destroy');

