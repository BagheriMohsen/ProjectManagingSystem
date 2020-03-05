@extends('Master.layout')

@section('title')
    {{"New Project"}}
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
        "title"     =>  "New Project",
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
    path 
-->
@section('path')
    @include('Master.path')
@endsection

@section("styles")
    <link rel="stylesheet" href="{{ asset("panel/color_picker/la_color_picker.min.css") }}">
@endsection


@section("scripts")
    <script src="{{ asset("panel/color_picker/la_color_picker.min.js") }}"></script>
@endsection


<!-- 
    Main Content
-->
@section('content')
    <div class="row row-sm">
        <div class="col-sm-12 col-xl-12">
            
            
        <form id="project_create" action="{{route("projects.store")}}" method="POST">
                @csrf

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
                                    <input name="title" class="form-control" type="text" placeholder="Project Title">
                                </div>
                                <div class="col-xl-6 col-sm-12">
                                    <label>Project Subject</label>
                                    <input name="subject" class="form-control" type="text" placeholder="Project Subject">
                                </div>
                            </div>
                        </div>
                                <div class="card mg-b-20 p20">
                            <div class="row row-sm">
                                <div class="col-xl-4 col-sm-12">
                                    <label>Project Manager</label>
                                    <select name="manager_id" class="form-control" >
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}">
                                                {{ $user->first_name." ".$user->last_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-xl-4 col-sm-12 ">
                                    <label>Starting Date</label>
                                    <input value="{{ old("start_date") }}" name="start_date" class="form-control fc-datepicker" id="datepicker2">
                                </div>

                                <div class="col-xl-4 col-sm-12 ">
                                    <label>DeadLine Date</label>
                                    <input value="{{ old("dead_date") }}" name="dead_date" class="form-control fc-datepicker" id="datepicker3">
                                </div>
                                

                                
                            </div>
                        </div>
                            </div>
                            <div class="col-sm-12 col-xl-6">
                        <div class="card mg-b-20 p20">
                            <div class="row row-sm">
                                <div class="col-xl-6 col-sm-12">
                                    <label>Applicant unit</label>
                                    <input value="{{ auth()->user()->unit->name }}" name="applicant_unit_id" class="form-control" type="text"  disabled>
                                </div>
                                <div class="col-xl-6 col-sm-12">
                                    <label>Operating unit</label>
                                    <select class="form-control" name="operating_unit_id">
                                        @foreach( $units as $unit )
                                            <option value="{{ $unit->id }}" >
                                                {{ $unit->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mg-b-20 p20">
                            <div class="row row-sm">
                                <div class="col-xl-4 col-sm-12">
                                    <label>Color</label>
                                    <input value="{{ old('color') }}" name="color" type="color" class="form-control">
                                   
                                </div>
                                <div class="col-xl-3 col-sm-12">
                                    <label>Priority</label>
                                    <select class="form-control" name="priority">
                                        <option value="low" >low</option>
                                        <option value="normal" >Normal</option>
                                        <option value="high" >High</option>
                                    </select>
                                </div>
                                <div class="col-xl-5 col-sm-12">
                                    <label>Supervisor</label>
                                    <select class="form-control" name="supervisor_id">
                                        @foreach( $users as $user )
                                            <option value="{{ $user->id }}" >
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
                                        <textarea name="desc" class="form-control textarea" id="editor"></textarea>
                                    </div>
                                </div>
                            </div>	
                            </div>	
                        </div>
                        </section>
                        <h5>Tasks</h5>
                        <section class="border1ccc p20 mg-b-20">
                            <div id="mrgroupwr">
                            <div class="mr-group">
                                <div class="card p20">
                                
                                <div class="row row-sm">
                                    <div class="col-xs-12 col-xl-6">
                                        
                                        <div class="row row-sm mg-b-10">
                                                <div class="col-sm-12 col-xl-4">
                                                    <small>Title</small>
                                                    <input name="task_title" type="text" class="form-control" placeholder="Proccess title">
                                                </div>
                                                <div class="col-sm-12 col-xl-4">
                                                    <small>Operator</small>
                                                    <select name="task_operator_id" class="form-control">
                                                        @foreach( $users as $user )
                                                        <option value="{{ $user->id }}">
                                                                {{ $user->first_name." ".$user->last_name }}
                                                            </option>
                                                        @endforeach
                                                      
                                                    </select>
                                                </div>

                                                <div class="col-xl-4 col-sm-12">
                                                    <small>Color</small>
                                                    <input value="{{ old('task_color') }}" name="task_color" type="color" class="form-control" >
                                                </div>

                                            </div>
                                            
                                        <div class="row row-sm mt-3">
                                            <div class="col-sm-12 col-xl-4">
                                                <small>Project percent</small>
                                                <input name="task_percent" type="number" class="form-control project_percent" placeholder="Percent">
                                            </div>
                                            <div class="col-sm-12 col-xl-4">
                                                <small>Estimated Time</small>
                                                <br/>
                                                <div class="timepicker-box">
                                                    <input class="timepicker" type="text" name="task_hour" placeholder="HH" style="height:41px">:
                                                    <input class="timepicker" type="text" name="task_min" placeholder="MM" style="height:41px">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-xl-4">
                                                <small>Priority</small>
                                                <select name="task_priority" class="form-control">
                                                    <option value="low">low</option>
                                                    <option value="normal">Normal</option>
                                                    <option value="high">High</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row row-sm mt-3">
                                            <div class="col-sm-12 col-xl-4">
                                                <small>Reminder time</small>
                                                <input name="reminder_time" type="time" class="form-control" placeholder="">
                                            </div>
                                            <div class="col-sm-12 col-xl-4">
                                                <small>Reminder type</small>
                                                <select name="reminder_type" class="form-control">
                                                    <option value="daily">daily</option>
                                                    <option value="weekly">daily</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-xl-6">
                                        <div class="row row-sm">
                                            <div class="col-sm-12">
                                                <small>Description</small>
                                                <textarea  name="task_desc" rows="9" class="form-control"></textarea>
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

            <div class="form-check">
                <input name="is_private" type="checkbox" class="form-check-input" id="private-project-checkbox">
                <label class="form-check-label" for="private-project-checkbox">Do you want this project to be private?</label>
            </div>
            <button type="submit" class="btn btn-success mt-3 mb-3">
                save
            </button>
            
        </form>
            
        </div>
    </div>
@endsection

