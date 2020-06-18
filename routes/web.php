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

Auth::routes();
Route::resource('/project','ProjectController');
// Route::get('/home', 'ProjectController@index')->name('home');
// Route::get('/create','ProjectController@create');
// Route::post('/store','ProjectController@store');
// Route::get('/project/{id}','ProjectController@show');