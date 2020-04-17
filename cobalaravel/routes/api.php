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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function (Request $request) {
    return "Hello world";
Route::get('/home', 'Controller@hai');
});

Route::get('/cars', 'CarController@index');
Route::post('/cars', 'CarController@store');
Route::put('/cars/{id}', 'CarController@update');
Route::delete('/cars/{id}', 'CarController@destroy');


