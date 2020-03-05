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
                                    <label>Project Category</label>
                                    <input name="category" class="form-control" type="text" placeholder="Project Category">
                                </div>
                            </div>
                        </div>
                                <div class="card mg-b-20 p20">
                            <div class="row row-sm">
                                <div class="col-xl-6 col-sm-12">
                                    <label>Project Manager</label>
                                    <select class="form-control" name="project_manager">
                                        <option>Hussain Fatemi</option>
                                        <option>Sajjad Rafie</option>
                                        <option>Amir Taha</option>
                                        <option>ibrahim khalil</option>
                                        <option>Ali Fatemi</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 col-sm-12">
                                    <label>Date</label>
                                    <br/>
                                    <div class="timepicker-box">
                                        <input class="timepicker" name="hours" type="text" placeholder="HH" style="height:41px">:
                                        <input class="timepicker" name="minutes" type="text" placeholder="MM" style="height:41px">
                                    </div>
                                </div>
                            </div>
                        </div>
                            </div>
                            <div class="col-sm-12 col-xl-6">
                        <div class="card mg-b-20 p20">
                            <div class="row row-sm">
                                <div class="col-xl-6 col-sm-12">
                                    <label>Applicant unit</label>
                                    <input name="applicant_unit" class="form-control" type="text" value="Network Unit" disabled>
                                </div>
                                <div class="col-xl-6 col-sm-12">
                                    <label>Operating unit</label>
                                    <select class="form-control" name="operating_unit">
                                        <option>Management Unit</option>
                                        <option>Network Unit</option>
                                        <option>Programming Unit</option>
                                        <option>Support Unit</option>
                                        <option>Research Unit</option>
                                        <option>Finance Unit</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mg-b-20 p20">
                            <div class="row row-sm">
                                <div class="col-xl-6 col-sm-12">
                                    <label>Priority</label>
                                    <select class="form-control" name="priority">
                                        <option>Normal</option>
                                        <option>High</option>
                                        <option>low</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 col-sm-12">
                                    <label>Supervisor</label>
                                    <select class="form-control" name="supervisor">
                                        <option>Ali Fatemi</option>
                                        <option>Amir Taha</option>
                                        <option>Hussain Fatemi</option>
                                        <option>Sajjad Rafie</option>
                                        <option>ibrahim khalil</option>
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
                                                    <input name="process_title" type="text" class="form-control" placeholder="Proccess title">
                                                </div>
                                                <div class="col-sm-12 col-xl-6">
                                                    <label>operator</label>
                                                    <select name="process_operator" class="form-control">
                                                        <option>Ali Fatemi</option>
                                                        <option>Amir Taha</option>
                                                        <option>Hussain Fatemi</option>
                                                        <option>Sajjad Rafie</option>
                                                        <option>ibrahim khalil</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                        <div class="row row-sm">
                                                <div class="col-sm-12 col-xl-4">
                                                    <label>Percent of the project</label>
                                                    <input name="process_percent" type="number" class="form-control project_percent" placeholder="Percent">
                                                </div>
                                                <div class="col-sm-12 col-xl-4 addLog">
                                                    <label>Deadline</label>
                                                    <br/>
                                                    <div class="timepicker-box">
                                                        <input class="timepicker" type="text" name="process_hours" placeholder="HH" style="height:41px">:
                                                        <input class="timepicker" type="text" name="process_minutes" placeholder="MM" style="height:41px">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-xl-4">
                                                    <label>Priority</label>
                                                    <select name="process_priority" class="form-control">
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
                                                <textarea  name="process_desc" rows="5" class="form-control"></textarea>
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

