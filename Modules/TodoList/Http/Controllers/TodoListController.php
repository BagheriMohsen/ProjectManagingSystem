<?php

namespace Modules\TodoList\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\TodoList\Entities\TodoList;

class TodoListController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {

        $todo_lists         =   TodoList::where("is_done",False)->get();
        $todo_list_archive  =   TodoList::where("is_done",True)->paginate(15);

        return view('todolist::todo-index',compact(
            "todo_lists",
            "todo_list_archive"
        ));

    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('todolist::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $req)
    {
        TodoList::create([
            "user_id"   =>  auth()->user()->id,
            "desc"      =>  $req->desc
        ]);

        return response()->json("item is created !");

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('todolist::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('todolist::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $req, $id)
    {
        $todo_list  =   TodoList::findOrFail($id);

        $todo_list->update([
            "is_done"   =>  True
        ]);
        
        return response()->json("its done!");

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        TodoList::destroy($id);

        return response()->json("item is deleted !");
    }
}
