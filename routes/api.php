<?php

use Illuminate\Http\Request;

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




Route::group(['prefix' => 'v1', 'namespace' => 'Api'], function () {
    /**
     * Authentication routes for user
     */
    Route::post('user/login', 'AuthenticationController@loginUser');
    Route::post('user/register', 'AuthenticationController@registerUser');

    /**
     * Authentication routes for the Owner
     */
    Route::post('owner/login','AuthenticationController@loginOwner');
    Route::post('owner/register','AuthenticationController@registerOwner');

    /**
     * Authentication routes for the Rider
     */
    Route::post('rider/login','AuthenticationController@loginRider');
    Route::post('rider/register','AuthenticationController@registerRider');
});

Route::prefix('v1')->namespace('Api')->middleware('auth:owner-api')->group(function () {

    /**
     * route for the getting the Bins of the various.
     */
    Route::get('owner/bins', 'BinController@getOwnerBins');
});


Route::prefix('v1')->namespace('Api')->group(function () {

    /**
     * route for getting data from bins
     */
    Route::get('bins/statistics', 'BinController@storeBinStatistics');
});

//fallback route
Route::fallback(function () {
    return response()->json(
        [
            'error' => [
                'code' => 404,
                'message' => "API route does not exist."
            ]
        ],
        404
    );
});
