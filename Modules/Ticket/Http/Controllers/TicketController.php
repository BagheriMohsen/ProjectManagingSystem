<?php

namespace Modules\Ticket\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Ticket\Entities\Ticket;

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

        return view('ticket::tickets-index',compact(
            "tickets",
            "users"
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
}
