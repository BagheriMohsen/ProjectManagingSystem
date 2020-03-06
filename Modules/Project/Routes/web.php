<?php

/*
|--------------------------------------------------------------------------
| Project Routes
|--------------------------------------------------------------------------
*/
Route::group(["middleware"=>"auth",'prefix'=>'projects/','as'=>'projects.'],function(){
    Route::get("show/{project_slug}/","ProjectController@show")->name("show");
    Route::post("update/{project_id}/","ProjectController@update")->name("update");
    // Request Project
    Route::get("request-project/","ProjectController@request_project")->name("request_project");
    Route::post("store-request-project/","ProjectController@store_request_project")->name("store_request_project");
    Route::get("request-project-list/","ProjectController@request_project_list")->name("request_project_list");

});
Route::middleware("auth")->resource("projects","ProjectController", ["except"=>

    "show",
    "update"
    
]);



/*
|--------------------------------------------------------------------------
| Task Routes
|--------------------------------------------------------------------------
*/
Route::group(["middleware"=>"auth",'prefix'=>'subTasks/','as'=>'subTasks.'],function() {
    Route::get("tasks/{slug}/","SubTaskController@index")->name("index");
    Route::get("store/{sub_task_id}/","SubTaskController@store")->name("store");
    Route::get("all-sub-tasks","SubTaskController@all_subTask")->name("all_subTask");


});

Route::middleware("auth")->resource("subTasks","subTaskController",["except"=>

    "index",
    "store"

]);


