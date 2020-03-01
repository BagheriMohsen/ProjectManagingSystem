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

Route::group(["middleware"=>"auth",'prefix'=>'timeline/','as'=>'timeline.'],function() {

    Route::get('', 'TimeLineController@index')->name('index');
    Route::post('store', 'TimeLineController@store')->name('store');
    Route::get('destroy/{id}', 'TimeLineController@destroy')->name('destroy');
    Route::get('{slug}/',"TimeLineController@show")->name("show");

    // Comments
    Route::post("send-comment/{timeline_id}","TimeLineController@send_comment")->name("send_comment");
});

Route::group(["middleware"=>"auth",'prefix'=>'timeline-comment/','as'=>'timeline_comment.'],function() {
   
    Route::post("send-comment/{timeline_id}","TimeLineCommentController@send_comment")->name("send_comment");
});
