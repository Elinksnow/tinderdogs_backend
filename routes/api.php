<?php

use App\Http\Controllers\PerroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InteraccionController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(PerroController::class)->group(function(){
    Route::get('/perros', 'index');
    Route::post('/perro', 'store');
    Route::get('/perro/{id}', 'show');
    Route::put('/perro/{id}', 'update');
    Route::delete('/perro/{id}', 'destroy');
});

Route::controller(InteraccionController::class)->group(function(){
    Route::get('/interacciones', 'index');
    Route::post('/interaccion', 'store');
    Route::get('/interaccion/{id}', 'show');
    Route::put('/interaccion/{id}', 'update');
    Route::delete('/interaccion/{id}', 'destroy');
});
