<?php

namespace Modules\Ticket\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Storage;

use Modules\Ticket\Entities\Ticket;
use Modules\Project\Entities\Project;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {

        $user = auth()->user();

        $users = "App\User"::latest()->get();
        $tickets = Ticket::where([
            ["user_id","=",$user->id],
            ["unit_id","=",$user->unit_id]
        ])->paginate(10);
        
        $projects = Project::where("operating_unit_id",$user->unit_id)
        ->latest()->get();

        return view('ticket::tickets-index',compact(
            "tickets",
            "users",
            "projects"
        ));
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
            "receiver_id"   =>  "required",
            "title"         =>  "required",
            "desc"          =>  "required"
        ]);

        $data = $req->all();

        $user = auth()->user();

        $data["user_id"]        =  $user->id;
        $data["unit_id"]        =  $user->unit_id;
        $data["tracking_code"]  =  uniqid();

        // if attach file is exists 
        if( $req->hasFile("attach") ) {
            $data["attach"] = Storage::disk("public")
            ->put("TicketFiles",$req->File("attach"));
        }

        Ticket::create($data);

        return redirect()->route("tickets.index")
        ->with("message","ticket is sended!");
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

    /*
    |--------------------------------------------------------------------------
    | Ticket Single
    |--------------------------------------------------------------------------
    */
    public function ticket_single($ticket_slug) {

        $ticket = Ticket::where("slug",$ticket_slug)->firstOrFail();

        return view("ticket::tickets-single",compact(
            "ticket"
        ));

    }

}
