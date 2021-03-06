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

Route::get('hello', 'App\Http\Controllers\HelloController@index')
    ->middleware(\App\Http\Middleware\HelloMidleware::class);
Route::post('hello', 'App\Http\Controllers\HelloController@post');
Route::get('hello/add', 'App\Http\Controllers\HelloController@add');
Route::post('hello/add', 'App\Http\Controllers\HelloController@create');
Route::get('hello/edit', 'App\Http\Controllers\HelloController@edit');
Route::post('hello/edit', 'App\Http\Controllers\HelloController@update');
Route::get('hello/show', 'App\Http\Controllers\HelloController@show');
Route::get('person', 'App\Http\Controllers\PersonController@index')
    ->middleware('auth');
Route::get('person/find', 'App\Http\Controllers\PersonController@find');
Route::post('person/find', 'App\Http\Controllers\PersonController@search');

Route::get('person/add', 'App\Http\Controllers\PersonController@add');
Route::post('person/add', 'App\Http\Controllers\PersonController@create');

Route::get('person/edit', 'App\Http\Controllers\PersonController@edit');
Route::post('person/edit', 'App\Http\Controllers\PersonController@update');

Route::get('person/delete', 'App\Http\Controllers\PersonController@remove');

Route::get('board','App\Http\Controllers\BoardController@index');
Route::get('board/add','App\Http\Controllers\BoardController@add');
Route::post('board/add','App\Http\Controllers\BoardController@create');

Route::get('hello/session', 'App\Http\Controllers\HelloController@sesGet');
Route::post('hello/session', 'App\Http\Controllers\HelloController@sesPut');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
