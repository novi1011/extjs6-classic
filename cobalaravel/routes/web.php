<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');

});

// Route::get('/kode', function() {
// 	return view('home');

// Route::get('/novi', 'BlogController@utama');

Route::get('/code', 'BlogController@index');
// function() {
// 	return view('home');

Route::get('/code/create', 'BlogController@create');
Route::post('/code', 'BlogController@store')->name('store_blog');

Route::get('/code/{id}', 'BlogController@show');

Route::get('/code/{id}/edit', 'BlogController@edit');
Route::put('/code/{id}', 'BlogController@update')->name('update_blog');
Route::delete('/code/{id}', 'BlogController@destroy')->name('delete_blog');

// });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
