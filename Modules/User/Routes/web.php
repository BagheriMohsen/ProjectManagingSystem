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
    Route::get("edit/{user_id}","UserController@edit")->name("edit");
    Route::post("store/","UserController@store")->name("store");


    /*
    |--------------------------------------------------------------------------
    | User Unit Route
    |--------------------------------------------------------------------------
    */
    Route::group(["prefix"=>"unit/","as"=>"units."],function(){
        Route::get("","UnitController@index")->name("index");
        Route::post("store/","UnitController@store")->name("store");
        Route::get("destroy/{unit_id}","UnitController@destroy")->name("destroy");
    });


    /*
    |--------------------------------------------------------------------------
    | User Group Route
    |--------------------------------------------------------------------------
    */
    Route::group(["prefix"=>"group/","as"=>"groups."],function(){
        Route::get("","GroupController@index")->name("index");
        Route::post("store/","GroupController@store")->name("store");
    });
    



});



