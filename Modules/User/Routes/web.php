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
    
    Route::get("change-unit/{unit_id}","UserController@change_unitID")->name("change_unitID");
    
    /** user edit own profile */
    Route::get("edit-profile/{user_id}","UserController@edit_profile")->name("edit_profile");
    Route::post("update-profile/{user_id}","UserController@update_profile")->name("update_profile");

    Route::get("change-password-page/","UserController@change_pass_page")->name("change_pass_page");
    Route::post("change-password/","UserController@change_pass")->name("change_pass");

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

Route::middleware("auth")->resource("users", "UserController");



