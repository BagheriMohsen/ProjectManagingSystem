@extends('Master.layout')

@section('title')
    {{"New Request"}}
@endsection

@php

    // path option
    $path = [
            'name'          =>  'New Request',
            'is_modal'      =>  True,
            'btn_href'      =>  ''
    ];
@endphp

@section("styles")
    <link rel="stylesheet" href="{{ asset("panel/color_picker/la_color_picker.min.css") }}">
@endsection


@section("scripts")
    <script src="{{ asset("panel/color_picker/la_color_picker.min.js") }}"></script>
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

    @include("Messages.errors")
    @include("Messages.message")


    <div class="row row-sm">
        <div class="col-sm-12 col-xl-12">
           
            
            <form id="project_request_create" action="{{route("projects.store_request_project")}}" method="POST">
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
                                    <input value="{{ old("title") }}" name="title" class="form-control" type="text" placeholder="Project Title">
                                </div>
                                <div class="col-xl-6 col-sm-12">
                                    <label>Project Subject</label>
                                    <input value="{{ old("subject") }}" name="subject" class="form-control" type="text" placeholder="Project Subject">
                                </div>
                            </div>
                        </div>
                         <div class="card mg-b-20 p20">
                            <div class="row row-sm">
                               
                                <div class="col-xl-4 col-sm-12 ">
                                    <label>Starting Date</label>
                                    <input value="{{ old("start_date") }}" name="start_date" class="form-control fc-datepicker" id="datepicker2">
                                </div>
    
                                <div class="col-xl-4 col-sm-12 ">
                                    <label>DeadLine Date</label>
                                    <input value="{{ old("dead_date") }}" name="dead_date" class="form-control fc-datepicker" id="datepicker3">
                                </div>

                                <div class="col-xl-4 col-sm-12">
                                    <label>Priority</label>
                                    <select name="priority" class="form-control">
                                        <option @if(old("priority") == "low" ) selected @endif value="low" class="text-warning">Low</option>
                                        <option @if(old("priority") == "normal" ) selected @endif value="normal" class="text-primary">Normal</option>
                                        <option @if(old("priority") == "high" ) selected @endif value="high" class="text-danger">High</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                            </div>
                            <div class="col-sm-12 col-xl-6">
                        <div class="card mg-b-20 p20">
                            <div class="row row-sm">
                                <div class="col-xl-6 col-sm-12">
                                    <label>Applicant unit</label>
                                    <input class="form-control" type="text"
                                     value="{{ $user->unit->name }}" disabled>
                                </div>
                                <div class="col-xl-6 col-sm-12">
                                    <label>Operating unit</label>
                                    <select name="operating_unit_id" class="form-control">
                                        <option value="{{ null }}" >---</option>
                                        @foreach($units as $unit)
                                            <option 
                                            @if( old("operating_unit_id") == $unit->id )
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
                                <div class="col-xl-4 col-sm-12">
                                    <label>Color</label>
                                    <input value="{{ old('color') }}" name="color" type="color" class="form-control">
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
                                        <textarea name="desc" class="form-control textarea" id="editor">{{ old("desc") }}</textarea>
                                    </div>
                                </div>
                            </div>	
                            </div>	
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

