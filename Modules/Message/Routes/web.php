<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::group(["middleware"=>"auth","prefix"=>"messages/","as"=>"messages."], function() {
    Route::get("inbox/{message_slug}","MessageController@inbox_single")->name("inbox_single");
    Route::get("sentbox/{message_slug}","MessageController@sent_single")->name("sent_single");

});
Route::middleware("auth")->resource("messages","MessageController");


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::group(["middleware"=>"auth","prefix"=>"message-reply/","as"=>"message_reply."], function() {
    Route::post("inbox-store","MessageReplyController@inbox_store")->name("inbox_store");
    Route::post("sent-store","MessageReplyController@sentbox_store")->name("sentbox_store");
    
});
