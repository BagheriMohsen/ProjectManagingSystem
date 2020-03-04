<?php

/*
|--------------------------------------------------------------------------
| Project Routes
|--------------------------------------------------------------------------
*/
Route::group(["middleware"=>"auth",'prefix'=>'projects/','as'=>'projects.'],function(){
    // Request Project
    Route::get("request-project/","ProjectController@request_project")->name("request_project");
    Route::post("store-request-project/","ProjectController@store_request_project")->name("store_request_project");
    Route::get("request-project-list/","ProjectController@request_project_list")->name("request_project_list");

});
Route::middleware("auth")->resource("projects","ProjectController");



/*
|--------------------------------------------------------------------------
| Task Routes
|--------------------------------------------------------------------------
*/
Route::group(["middleware"=>"auth",'prefix'=>'tasks/','as'=>'tasks.'],function() {
    //
});
Route::middleware("auth")->resource("tasks","TaskController");

