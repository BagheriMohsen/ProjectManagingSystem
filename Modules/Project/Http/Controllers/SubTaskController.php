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
    public function index($project_slug,$task_slug)
    {
        $task = ProjectTask::where("slug",$task_slug)->firstOrFail();

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
    public function store(Request $req)
    {

        $data = $req->all();

        $data["user_id"]   =   auth()->user()->id;
        ProjectSubTask::create($data);

        return redirect()->back()
        ->with("message","your sub task is created!");
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

    /*
    |--------------------------------------------------------------------------
    | All SubTask
    |--------------------------------------------------------------------------
    */
    public function all_subTask(ProjectSubTask $projectSubTask) {

        return response()->json($projectSubTask);

    }

    /*
    |--------------------------------------------------------------------------
    | Store Time Passes Or Check Sub Task for complete
    |--------------------------------------------------------------------------
    */
    public function modify_subtask() {

        //

    }
}
