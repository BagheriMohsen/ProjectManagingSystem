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

Route::middleware('auth:api')->get('user/', function (Request $req) {
    return $req->user();
});
//auth route
Route::post('register/','Auth\Api\AuthController@register');
Route::post('login/','Auth\Api\AuthController@login');

