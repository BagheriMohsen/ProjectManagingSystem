<?php

namespace Modules\Project\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Carbon\Carbon;

use Modules\Project\Entities\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('project::Project.project-index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('project::Project.project-create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $req)
    {
        dd($req);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show()
    {
        return view('project::Project.project-single');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit(Project $project)
    {
        $user = auth()->user();

        $units = "Modules\User\Entities\Unit"::latest()->get();
        $users = "App\User"::where("unit_id",$user->unit_id)
        ->latest()->get();

        return view('project::Project.project-edit',compact(
            "project",
            "units",
            "users"
        ));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $req, Project $project)
    {

        dd($req->all());
        $project->update($data);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
    }

    /*
    |--------------------------------------------------------------------------
    | Request Project
    |--------------------------------------------------------------------------
    */
    public function request_project() {

        $user = auth()->user();
        
        $units = "Modules\User\Entities\Unit"::latest()->get();

        return view("project::Project.request-project",compact(
            "user",
            "units"
        ));
        
    }

    /*
    |--------------------------------------------------------------------------
    | Store Request Project
    |--------------------------------------------------------------------------
    */
    public function store_request_project(Request $req) {

        $data = $req->validate([
            "title"             =>  "required | unique:projects",
            "subject"           =>  "required",
            "color"             =>  "required",
            "desc"              =>  "required",
            "priority"          =>  "required",
            "operating_unit_id" =>  "required",
            'estimated_time'    =>  'required'
        ]);

        $estimated_time = Carbon::parse($data["estimated_time"]);
      
        $data["req_date"]           = Carbon::now();  
        $data["estimated_time"]     = $estimated_time;
        $data["applicant_unit_id"]  = auth()->user()->unit->id;
        

        Project::create($data);

        return redirect()->back()
        ->with("message","your project request is sended!");

      
    }

    /*
    |--------------------------------------------------------------------------
    | Request Project List
    |--------------------------------------------------------------------------
    */
    public function request_project_list() {

        $user = auth()->user();
        
        $projects = Project::where([
            ["operating_unit_id","=",$user->unit->id],
            ["is_verify","=",False]
        ])
        ->latest()->get();

        return view("project::Project.unverified-project-list",compact(
            "user",
            "projects"
        ));

    }



}
