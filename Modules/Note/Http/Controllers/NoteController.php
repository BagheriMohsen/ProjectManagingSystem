<?php

namespace Modules\Note\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Note\Entities\Note;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;

        $notes = Note::where("user_id",$user_id)->latest()->paginate(12);

        return view('note::notes-index',compact("notes"));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('note::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $req)
    {

        $data = $req->validate([
            "title" =>  "required | unique:notes",
            "desc"  =>  "required"
        ]);

        $data["user_id"]    =   auth()->user()->id;
        Note::create($data);
        
        return redirect()->back()
        ->with("message","note created!");

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('note::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('note::edit');
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
        Note::destroy($id);

        return redirect()->back()
        ->with("message","note is deleted!");
    }
}
