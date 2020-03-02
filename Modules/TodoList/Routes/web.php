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
Route::group(["middleware"=>"auth","prefix"=>"todolist/","as"=>"todolist."], function() {
    Route::get("","TodoListController@index")->name("index");
    Route::post("store/","TodoListController@store")->name("store");
    Route::post("update/{todo_id}","TodoListController@update")->name("update");
    Route::get("delete/{todo_id}","TodoListController@destroy")->name("delete");
    
    Route::get("Work-left-over/","TodoListController@Work_left_over")->name("Work_left_over");
    Route::get("Work-is-done/","TodoListController@Work_is_done")->name("Work_is_done");

});
