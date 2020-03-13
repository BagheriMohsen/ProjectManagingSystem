<?php

namespace Modules\Ticket\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Storage;

use Modules\Ticket\Entities\Ticket;
use Modules\Ticket\Entities\TicketReplies;

class TicketReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('ticket::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('ticket::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $req)
    {
        $req->validate([
            "desc"  =>  "required"
        ]);

        $data = $req->all();
      
        $data["user_id"]    =  auth()->user()->id;
        
        // if attach file is exists 
        if( $req->hasFile("attach") ) {
            $data["attach"] = Storage::disk("public")
            ->put("TicketRepliesFiles",$req->File("attach"));
        }

        TicketReplies::create($data);

        return redirect()->back()
        ->with("message","its sended!");
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('ticket::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('ticket::edit');
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
}
