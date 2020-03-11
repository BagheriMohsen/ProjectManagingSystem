<?php

namespace Modules\Project\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Carbon\Carbon;

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

        // calculated percent
        $percent = $task->sub_tasks->where("is_done",True)->sum("percent"); 

        return view('project::Task.tasks-index',compact(
            "task",
            "percent"
        
        ));
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
        
        
        // calculated percent
            $task = ProjectTask::findOrFail($req->project_task_id);

            $percent = $task->sub_tasks->sum("percent");
            $percent += $req->percent;

            if( $percent > 100 ) {
                return redirect()->back()
                ->with("error","your percent for this task is over of 100%");
            } 
        // end

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
    public function modify_subtask(Request $req, $subtask_id) {

        
        $subTask = ProjectSubTask::findOrFail($subtask_id);
        
        if( isset($req->check) ){
            $subTask->update([
                "is_done"   => True
            ]);

        // calculated percent
            $task = $subTask->task;
            
            $percent = $task->sub_tasks->sum("percent");

            // if percent is 100 percent save complete date
            if( $percent >= 100 ) {
                $task->update([
                    'is_done'       =>  True,
                    'complete_date' =>  Carbon::now()
                ]);
            } 
        // end

        }else{
            $subTask->update([
                "time_passes"   =>$req->time
            ]);
        }

        return response()->json("done");

    }
}
