<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/personaje', 'App\Http\Controllers\PersonajeController@index');
Route::post('/personaje', 'App\Http\Controllers\PersonajeController@store');
Route::put('/personaje/{id}', 'App\Http\Controllers\PersonajeController@update');
Route::delete('/personaje/{id}', 'App\Http\Controllers\PersonajeController@destroy');
Route::get('/personaje/{id}', 'App\Http\Controllers\PersonajeController@read1');

