<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

//Accessing the home page redirects to the login page
Route::get('/', function () {
    return redirect()->route('login');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/bins','BinsController@index')->name('bins');
Route::get('/bins/{id}','BinsController@show');
Route::get('/bins/{id}/edit','BinsController@edit');

Route::get('/tricycles','TricyclesController@index')->name('tricycles');
Route::get('/binOwners','BinOwnersController@index')->name('binOwners');
//Route::get()
