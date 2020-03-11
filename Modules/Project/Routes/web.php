<?php

/*
|--------------------------------------------------------------------------
| Project Routes
|--------------------------------------------------------------------------
*/
Route::group(["middleware"=>"auth",'prefix'=>'projects/','as'=>'projects.'],function(){


    Route::get("show/{project_slug}/","ProjectController@show")->name("show");
    Route::post("update/{id}/","ProjectController@update")->name("update_project");
    // Request Project
    Route::get("request-project/","ProjectController@request_project")->name("request_project");
    Route::post("store-request-project/","ProjectController@store_request_project")->name("store_request_project");
    Route::get("request-project-list/","ProjectController@request_project_list")->name("request_project_list");

    
    /*
    |--------------------------------------------------------------------------
    | Task Routes
    |--------------------------------------------------------------------------
    */
    Route::get("{project_slug}/{task_slug}/","SubTaskController@index")->name("subtask_index");
    Route::group(["middleware"=>"auth",'prefix'=>'tasks/','as'=>'subTasks.'],function() {
        
        Route::get("all-sub-tasks","SubTaskController@all_subTask")->name("all_subTask");
        Route::post("modify-tasks/{subtask_id}","SubTaskController@modify_subtask")->name("modify_subtask");
    });
   

    Route::middleware("auth")->resource("subTasks","SubTaskController",["except" =>
        "index",
    ]);






});
Route::middleware("auth")->resource("projects","ProjectController", ["except" =>

    "show",
    "update"
    
]);






/*
|--------------------------------------------------------------------------
| Project Action Routes
|--------------------------------------------------------------------------
*/
Route::group(["middleware"=>"auth",'prefix'=>'projectActions/','as'=>'projectActions.'],function() {
    Route::get("project-file-download/{id}","ProjectActionController@file_download")->name("file_download");
});
Route::middleware("auth")->resource("projectActions","ProjectActionController");

/*
|--------------------------------------------------------------------------
| Project Task Action Routes
|--------------------------------------------------------------------------
*/
Route::group(["middleware"=>"auth",'prefix'=>'taskActions/','as'=>'taskActions.'],function() {
    Route::get("project-file-download/{id}","ProjectTaskActionController@file_download")->name("file_download");
});
Route::middleware("auth")->resource("taskActions","ProjectTaskActionController");




