<?php

namespace Modules\Message\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Storage;

use Modules\Message\Entities\Message;
use Modules\Message\Entities\MessageReply;


class MessageReplyController extends Controller
{
   
    /*
    |--------------------------------------------------------------------------
    | Inbox Store Reply
    |--------------------------------------------------------------------------
    */
    public function inbox_store(Request $req) {

        $req->validate([
            "desc"  =>  "required"
        ]);

        $data = $req->all();
        $data["sender_id"]  =   auth()->user()->id;

        if( $req->hasFile("attach") ) {
            $data["attach"] =   Storage::disk("public")
                ->put("MessageRepliesFiles",$req->File("attach"));
        }

        MessageReply::create($data);

        return redirect()->back()
        ->with("message","your message is sent!");

    }

    /*
    |--------------------------------------------------------------------------
    | Sent Store Reply
    |--------------------------------------------------------------------------
    */
    public function sentbox_store(Request $req) {

        $req->validate([
            "desc"  =>  "required"
        ]);

        $data = $req->all();
        $data["receiver_id"]  =   auth()->user()->id;

        if( $req->hasFile("attach") ) {
            $data["attach"] =   Storage::disk("public")
                ->put("MessageRepliesFiles",$req->File("attach"));
        }

        MessageReply::create($data);

        return redirect()->back()
        ->with("message","your message is sent!");

    }



}
