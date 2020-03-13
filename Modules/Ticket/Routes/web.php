<?php

/*
|--------------------------------------------------------------------------
| TicketController Routes
|--------------------------------------------------------------------------
*/

Route::group(["middleware"=>"auth","prefix"=>"tickets/","as"=>"tickets."],function() {
   Route::get("{ticket_slug}/","TicketController@ticket_single")->name("single");
});

Route::middleware("auth")->resource("tickets","TicketController");

/*
|--------------------------------------------------------------------------
| ReplyController Routes
|--------------------------------------------------------------------------
*/

Route::group(["middleware"=>"auth","prefix"=>"ticket-replies/","as"=>"ticket_replies."],function() {
   //
});

Route::middleware("auth")->resource("ticket_replies","TicketReplyController");