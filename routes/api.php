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

Route::group(['prefix' => 'v1', 'namespace' => 'Api'], function () {
    /**
     * Authentication routes for user
     */
    Route::post('user/login', 'AuthenticationController@loginUser');
    Route::post('user/register', 'AuthenticationController@registerUser');

    /**
     * Authentication routes for the owner.
     */
    Route::post('owner/login','AuthenticationController@loginOwner');
    Route::post('owner/register','AuthenticationController@registerOwner');


    /**
     * Athentication routes for the rider.
     */
    Route::post('rider/login','AuthenticationController@loginRider');
    Route::post('rider/register','AuthenticationController@registerRider');

});

