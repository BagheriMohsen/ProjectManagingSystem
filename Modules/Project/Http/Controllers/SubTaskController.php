<?php

namespace Modules\Project\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Project\Entities\ProjectTask;
use Modules\Project\Entities\ProjectSubTask;

class SubTaskController extends Controller
{
   /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index($slug)
    {
        $task = ProjectTask::where("slug",$slug)->firstOrFail();

        return view('project::Task.tasks-index',compact("task"));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('project::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $req,$task_id)
    {
        $data = $req->all();

        $data["user_id"]            =   auth()->user()->id;
        $data["project_task_id"]    =   $task_id;

        ProjectSubTask::create($data);

        return response()->json("sub task is created!");
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('project::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit(ProjectSubTask $projectSubTask)
    {
        return response()->json($projectSubTask);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $req, ProjectSubTask $projectSubTask)
    {
        $data = $req->all();

        $projectSubTask->update($data);

        return response()->json("sub task updated !");
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        ProjectSubTask::destroy($id);

        return response()->json("sub task deleted !");
    }
}
