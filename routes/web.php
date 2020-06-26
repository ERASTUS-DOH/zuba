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

/**
 * Defined Routes for the Bins
 */
Route::get('/bins','BinsController@index')->name('bins');
Route::get('/bins/create','BinsController@create')->name('createBin');
Route::get('/bins/{id}','BinsController@sample');
Route::get('/bins/{id}/edit','BinsController@edit');
Route::post('/bins/store','BinsController@store');

/**
 * Defined Routes for the owners of the Bin
 */
Route::get('/binOwners','OwnerController@index')->name('Owners');
Route::get('/binOwners/create','OwnerController@create')->name('createBinOwner');
Route::get('/binOwners/{id}','OwnerController@show')->name('showOwner');
Route::post('/binOwners/store','OwnerController@store')->name('createOwner');

/**
 * Define Routes for the Tricycle riders.
 */

Route::get('/riders','RidersController@index');


/**
 * Defined Routes for the Tricycles.
 */
Route::get('/tricycles','TricyclesController@index');
//Route::get()
