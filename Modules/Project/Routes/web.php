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

Route::group(["middleware"=>"auth",'prefix'=>'projects/','as'=>'projects.'],function(){
    Route::get('', 'ProjectController@index')->name('index');
    Route::get('create/', 'ProjectController@create')->name('create');
    Route::post('store/', 'ProjectController@store')->name('store');
    Route::get('show/', 'ProjectController@show')->name('show');

    // Request Project
    Route::get("request-project/","ProjectController@request_project")->name("request_project");
    Route::post("store-request-project/","ProjectController@store_request_project")->name("store_request_project");
    Route::get("request-project-list/","ProjectController@request_project_list")->name("request_project_list");

});


Route::group(["middleware"=>"auth",'prefix'=>'tasks/','as'=>'tasks.'],function(){
    Route::get('',function() {
        return view("project::Task.tasks-single");
    });


});
