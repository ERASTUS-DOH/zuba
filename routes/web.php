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
Route::get('/bins/{id}','BinsController@show');
Route::get('/bins/{id}/edit','BinsController@edit');
Route::post('/bins/store','BinsController@store');
Route::get('bins/assign/{id}', 'BinsController@assignBin');
Route::post('bins/assign/save', 'BinsController@saveAssignation')->name('saveAssignation');
Route::get('bins/de_assign/{id}','BinsController@de_assign')->name('de_assignation');
Route::delete('/bins/delete{id}','BinsController@destroy')->name('deleteBin');


/**
 * Defined Routes for the owners of the Bin
 */
Route::get('/binOwners','OwnerController@index')->name('Owners');
Route::get('/binOwners/create','OwnerController@create')->name('createBinOwner');
Route::get('/binOwners/{id}','OwnerController@show')->name('showOwner');
Route::get('/binOwners/{id}/edit','OwnerController@edit')->name('editOwner');
Route::put('/binOwners/{id}','OwnerController@update')->name('updateOwner');
Route::post('/binOwners/store','OwnerController@store')->name('createOwner');
Route::delete('/binOwners/{id}','OwnerController@destroy')->name('deleteOwner');


/**
 * Define Routes for the Tricycle riders.
 */

Route::get('/riders','RidersController@index')->name('riders');
Route::get('/riders/create','RidersController@create')->name('createRider');
Route::get('/riders/{id}','RidersController@show')->name('showRider');
Route::get('/riders/{id}/edit','RidersController@edit')->name('editRider');
Route::put('/riders/{id}','RidersController@update')->name('updateRider');
Route::post('/riders/store','RidersController@store')->name('storeRider');
Route::delete('/riders/{id}','RidersController@destroy')->name('deleteRider');


/**
 * Defined Routes for the Tricycles.
 */

Route::get('/tricycles','TricyclesController@index')->name('cycles');
Route::get('/tricycles/create','TricyclesController@create')->name('createCycle');
Route::get('/tricycles/{id}','TricyclesController@show');
Route::get('/tricycles/{id}/edit','TricyclesController@edit');
Route::put('/tricycles/{id}','TricyclesController@update')->name('updateCycle');
Route::post('/tricycles/store','TricyclesController@store')->name('storeCycle');
Route::delete('/tricycles/{id}','TricyclesController@destroy');
//Route::get()


/**
 * Defined Routes for the Settings action.
 */

Route::get('/settings','SettingsController@index')->name('settings');
Route::get('/settings/assignBin','SettingsController@assignBin')->name('assignBin');
//Route::post('/settings/saveAssignation','SettingsController@saveAssignation')->name('saveAssigned');
