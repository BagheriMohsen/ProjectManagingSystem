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

Route::group(["middleware"=>"auth"], function ()  {
    Route::get("/","HomeController@dashboard")->name("dashboard");
});


/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
Route::get("/login","Auth\Custom\AuthController@login")->name("login");
Route::post("/login-check","Auth\Custom\AuthController@login_check")->name("login_check");
Route::get("/logout","Auth\Custom\AuthController@logout")->name("logout");



