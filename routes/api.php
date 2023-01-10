<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerroController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/perros/random', [PerroController::class, 'GetRandomPerro']);
Route::resource('perros',PerroController::class);

// Route::get('/perros', 'PerroController@index');
// Route::post('/perros', 'PerroController@store');
// Route::get('/perros/{id}', 'PerroController@show');
// Route::put('/perros/{id}', 'PerroController@update');
// Route::patch('/perros/{id}', 'PerroController@update');
// Route::delete('/perros/{id}', 'PerroController@destroy');

