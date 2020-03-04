@extends('Master.layout')

@section('title')
    {{"Edit Project"}}
@endsection

@php

    // path option
    $path = [
        'name'          =>  'New Project',
        'is_modal'      =>  True,
        'btn_href'      =>  ''
    ];

    // page_title option
    $page_title = [
        "title"     =>  "Edit Project",
        "sub_title" =>  "Techno Fast",
        "icon"      =>  '<i class="icon ion-ios-gear-outline"></i>'
    ]
@endphp

<!-- 
    Page Title 
-->
@section("page_title")
    @include("Master.page_title")
@endsection
<!-- 
    path 
-->
@section('path')
    @include('Master.path')
@endsection




<!-- 
    Main Content
-->
@section('content')
    <div class="row row-sm">
        <div class="col-sm-12 col-xl-12">
            
            
            <form id="project_create" action="{{route("projects.update",$project->id)}}" method="POST">
                @csrf
                @method("put")
            <div class="addproject-wr">
                <div class="row row-sm mp0">
                    <div class="col-xs-12 col-xl-12">
                    <div id="addproject-wizard1" class="mg-b-20">
                        <h5>Project Info</h5>
                        
                        <section class="border1ccc p20 mg-b-20">
                        <div class="row row-sm">
                            <div class="col-sm-12 col-xl-6">
                                <div class="card mg-b-20 p20">
                            <div class="row row-sm">
                                <div class="col-xl-6 col-sm-12">
                                    <label>Project Title</label>
                                    <input value="{{ $project->title }}" name="title" class="form-control" type="text" placeholder="Project Title">
                                </div>
                                <div class="col-xl-6 col-sm-12">
                                    <label>Project Subject</label>
                                    <input value="{{ $project->subject }}" name="subject" class="form-control" type="text" placeholder="Project Subject">
                                </div>
                            </div>
                        </div>
                                <div class="card mg-b-20 p20">
                            <div class="row row-sm">
                                <div class="col-xl-6 col-sm-12">
                                    <label>Project Manager</label>
                                    <select name="manager_id" class="form-control">
                                        @foreach( $users as $user )
                                            <option 
                                            @if( $project->manager_id == $user->id)
                                                selected
                                            @endif
                                            value="{{ $user->id }}" >
                                                {{ $user->first_name." ".$user->last_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-xl-6 col-sm-12">
                                    <label>Estimated Time:</label>
                                    <input value="{{ $project->estimated_time }}" name="estimated_time" class="form-control fc-datepicker" id="datepicker2">
                                </div>
                            </div>
                        </div>
                            </div>
                            <div class="col-sm-12 col-xl-6">
                        <div class="card mg-b-20 p20">
                            <div class="row row-sm">
                                <div class="col-xl-6 col-sm-12">
                                    <label>Applicant unit</label>
                                    <input value="{{ $project->applicant_unit->name }}" class="form-control" type="text" value="Network Unit" disabled>
                                </div>
                                <div class="col-xl-6 col-sm-12">
                                    <label>Operating unit</label>
                                    <select name="operating_unit_id" class="form-control">
                                        @foreach( $units as $unit )
                                            <option 
                                            @if($project->operating_unit_id == $unit->id)
                                                selected
                                            @endif
                                            value="{{ $unit->id }}" >
                                                {{ $unit->name }}
                                            </option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mg-b-20 p20">
                            <div class="row row-sm">
                                <div class="col-xl-6 col-sm-12">
                                    <label>Priority</label>
                                    <select name="priority" class="form-control">
                                        <option 
                                            @if($project->priority == "low")
                                                selected 
                                            @endif
                                        value="low" >
                                          Low
                                        </option>

                                        <option 
                                        @if($project->priority == "normal") 
                                            selected 
                                        @endif  
                                        value="normal">
                                            Normal
                                        </option>
                                        
                                        <option 
                                            @if($project->priority == "high")
                                                selected
                                            @endif
                                        value="high">
                                                High
                                        </option>
                                    </select>
                                </div>
                                <div class="col-xl-6 col-sm-12">
                                    <label>Supervisor</label>
                                    <select class="form-control">
                                        @foreach( $users as $user )
                                            <option 
                                            @if( $project->supervisor_id == $user->id)
                                                selected
                                            @endif
                                            value="{{ $user->id }}" >
                                                {{ $user->first_name." ".$user->last_name }}
                                            </option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                        </div>
                        <div class="row row-sm">
                            <div class="col-xl-12 col-sm-12">
                            <div class="card mg-b-20 p20">
                                <div class="row row-sm">
                                    <div class="col-xl-12 col-sm-12">
                                        <label>ِDescription...</label>
                                        <textarea class="form-control textarea" id="editor">{!! $project->desc !!}</textarea>
                                    </div>
                                </div>
                            </div>	
                            </div>	
                        </div>
                        </section>
                        <h5>Processes...</h5>
                        <section class="border1ccc p20 mg-b-20">
                            <div id="mrgroupwr">
                            <div class="mr-group">
                                <div class="card p20">
                                
                                <div class="row row-sm">
                                    <div class="col-xs-12 col-xl-6">
                                        
                                        <div class="row row-sm mg-b-10">
                                                <div class="col-sm-12 col-xl-6">
                                                    <label>title</label>
                                                    <input name="task_title" type="text" class="form-control" placeholder="Proccess title">
                                                </div>
                                                <div class="col-sm-12 col-xl-6">
                                                    <label>operator</label>
                                                    <select name="operator_id" class="form-control">
                                                        @foreach($users as $user )
                                                            <option  value="{{ $user->id }}" >
                                                                {{ $user->first_name." ".$user->last_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            
                                        <div class="row row-sm">
                                                <div class="col-sm-12 col-xl-4">
                                                    <label>Percent of the project</label>
                                                    <input type="number" class="form-control project_percent" placeholder="Percent">
                                                </div>
                                                <div class="col-sm-12 col-xl-4">
                                                    <label>Deadline</label>
                                                    <input class="form-control fc-datepicker" id="datepicker3">
                                                </div>
                                                <div class="col-sm-12 col-xl-4">
                                                    <label>Priority</label>
                                                    <select class="form-control">
                                                        <option>Normal</option>
                                                        <option>High</option>
                                                        <option>low</option>
                                                    </select>
                                                </div>
                                            </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-xl-6">
                                        <div class="row row-sm">
                                            <div class="col-sm-12">
                                                <label>Description</label>
                                                <textarea name="textbody" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                            </div>
                                <a class="btnRemove"></a>
                                
                            </div>
                            </div>
                            <a class="addrow-link" id="btnAdd" href="#"></a>
                            </div>
                        </section>
                    </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success mt-3 mb-3">
                save
            </button>
            
            </form>
            
        </div>
    </div>
@endsection

