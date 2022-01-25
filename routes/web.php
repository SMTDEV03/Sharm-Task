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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('create', 'InsertData');
Route::post('insertation', 'App\Http\Controllers\UserController@insertdata');
Route::get('display', 'App\Http\Controllers\UserController@display');
Route::get('edit/{id}', 'App\Http\Controllers\UserController@editdata');
Route::post('edit','App\Http\Controllers\UserController@updateRecord');
Route::get('delete/{id}','App\Http\Controllers\UserController@delete');