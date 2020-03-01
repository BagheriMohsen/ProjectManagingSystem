<?php

namespace Modules\TimeLine\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\TimeLine\Entities\TimeLineComment;

use Carbon\Carbon;

class TimeLineCommentController extends Controller
{
    
    public function send_comment(Request $req,$time_line_id) {

        $req->validate([
            "message"   =>  "required"
        ]);


        $time_line = TimeLineComment::create([
            "user_id"       =>  auth()->user()->id,
            "time_line_id"  =>  $time_line_id,
            "message"       =>  $req->message,
            "is_confirm"    =>  True,
            "confirm_date"  =>  Carbon::now()
        ]);

        return redirect()->back()
        ->with("message","your comment sended");
    }
}
