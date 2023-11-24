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

// Create User
Route::post('/users', 'UserController@store'); 

// Read Users
Route::get('/users', 'UserController@index');
Route::get('/users/{id}', 'UserController@show');

// Update User
Route::put('/users/{id}', 'UserController@update');

// Delete User
Route::delete('/users/{id}', 'UserController@destroy');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
