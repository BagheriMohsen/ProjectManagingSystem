<?php

namespace Modules\Message\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Storage;

use Modules\Message\Entities\Message;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $user = auth()->user();
        $users = "App\User"::where("unit_id",$user->unit_id)->get();

        $inbox_items = Message::where("receiver_id",$user->id)
        ->latest("updated_at")->paginate(15);

        $sentbox_items = Message::where("sender_id",$user->id)
        ->latest("updated_at")->paginate(15);

        return view('message::messages-index',compact(
            "users",
            "inbox_items",
            "sentbox_items"
        ));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('message::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $req)
    {
        $req->validate([
            "title"         =>  "required",
            "desc"          =>  "required",
            "receiver_id"   =>  "required",
        ],[
            "receiver_id.required"  =>  "please select someone to send message"
        ]);

        $data = $req->all();
        $data["sender_id"]    =   auth()->user()->id;

        if( $req->hasFile("attach") ) {
            $data["attach"] =   Storage::disk("public")
                ->put("MessagesFiles",$req->File("attach"));
        }

        Message::create($data);

        return redirect()->back()
        ->with("message","your message is sent!");

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('message::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('message::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


    /*
    |--------------------------------------------------------------------------
    | Inbox single page
    |--------------------------------------------------------------------------
    */
    public function inbox_single($message_slug) {

        $message = Message::where("slug",$message_slug)->firstOrFail();

        return view("message::inbox-single",compact(
            "message"
        ));

    }

    /*
    |--------------------------------------------------------------------------
    | Sentbox single page
    |--------------------------------------------------------------------------
    */
    public function sent_single($message_slug) {

        $message = Message::where("slug",$message_slug)->firstOrFail();

        return view("message::sentbox-single",compact(
            "message"
        ));

    }

}
