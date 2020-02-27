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

Route::group(["middleware"=>"auth","prefix"=>"users/","as"=>"users."],function(){
    Route::get("","UserController@index")->name("index");
    Route::get("edit/","UserController@edit")->name("edit");

    /*
    |--------------------------------------------------------------------------
    | User Unit Route
    |--------------------------------------------------------------------------
    */
    Route::group(["prefix"=>"unit/","as"=>"unit."],function(){
        Route::get("","UnitController@index")->name("index");
    });


    /*
    |--------------------------------------------------------------------------
    | User Group Route
    |--------------------------------------------------------------------------
    */
    Route::group(["prefix"=>"group/","as"=>"group."],function(){
        Route::get("","GroupController@index")->name("index");
    });
    



});



