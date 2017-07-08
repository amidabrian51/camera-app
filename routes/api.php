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

Route::get('cameras', 'CameraController@index');
Route::get('cameras/{camera}', 'CameraController@show');
Route::post('cameras','CameraController@store');
Route::put('cameras/{camera}', 'CameraController@update');
Route::delete('cameras/{camera}', 'CameraController@delete');
