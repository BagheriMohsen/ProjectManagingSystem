@extends('Master.layout')

@section("styles")
    <link rel="stylesheet" href="{{ asset("panel/color_picker/la_color_picker.min.css") }}">
@endsection

@section("scripts")
{{-- <script src="{{ asset("/js/app.js") }}"></script> --}}
    <script src="{{ asset("panel/color_picker/la_color_picker.min.js") }}"></script>
@endsection

@section('title')
    {{ $task->title }}
@endsection

@php 
    $path = [
        'name'          =>  $task->title,
        'btn_content'   =>  'New subtask',
        'is_modal'      =>  true,
        'btn_href'      =>  "",
        'modal_name'    =>  'newsubtask'

    ];
@endphp
<!-- 
    path 
-->
@section('path')
    @include('Master.path')
@endsection

@section('create_modal')
    @include('Master.Modal.create-subtask')
@endsection

<!-- 
    Main Content
-->
@section('content')


{{-- <div id="app">
    <task-list></task-list>
</div> --}}

<div class="row row-sm">
    <div id="taskList" class="col-12">
        <div class="card mg-b-20">
            <div class="card-header bg-info tx-white p5">
                Tasks 
            </div>
            <div class="card-body p20">
                <div class="accordion mt-3" id="accordionExample">
                    <div class="task-header" style="border-left:4px solid blue">
                        <div class="d-flex align-items-center">
                            <div class="form-check d-flex pl-0">
                                <input type="checkbox" class="form-check-input" id="todoCheckbox">
                                <label class="form-check-label" for="todoCheckbox"></label>
                            </div>
                            <span data-toggle="collapse" data-target="#taskCollapse1" style="cursor:pointer">
                                 Title of Task
                            </span>
                        </div>
                        <div>
                            Priority Low
                        </div>
                    </div>
                    <div id="taskCollapse1" class="task-body collapse" style="border-left:4px solid blue" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="d-flex justify-content-between">
                            <div class="addLog">
                                <button class="btn btn-sm btn-outline-info">Add log</button>
                                <div class="timepicker-box">
                                    <input class="hours-subtask timepicker" type="text" placeholder="HH">:
                                    <input class="minutes-subtask timepicker" type="text" placeholder="MM">
                                </div>
                                <div class="pl-2 mt-2">
                                    Overall time spend on Task : 22:30 
                                </div>
                            </div>
                            <div class="timer">
                                <button class="startTimer btn btn-sm btn-outline-info">Start timer</button>
                                <div class="p-2 bg-info timer-control text-white" style="display:none">
                                    <span class="timerText text-right text-white px-3">00:00:00</span>
                                    <a href="#" class="pauseTimer text-white px-1">
                                        <i class="fas fa-pause"></i>
                                    </a>
                                    <a href="#" class="resumeTimer text-white px-1" style="display:none">
                                        <i class="fas fa-play"></i>
                                    </a>
                                    <a href="#" class="stopTimer text-white px-1">
                                        <i class="fas fa-stop"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row row-sm">
    <div class="col-sm-12 col-xl-8">
    <div class="row row-sm">
    <div class="col-sm-12 col-xl-8">
        <div class="card p15 mg-b-20">
            <div class="br-pagetitle">
                <i class="icon ion-flash mx-4"></i>
                <div>
                <h4>{{ $task->title }}</h4>
                    <p class="mg-b-0">Parent Project: 
                        <a href="project-single" >
                            <span class="tx-info"></span>
                            {{ $task->project->title }}
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="card p15 mg-b-20">
            <div class="progress bg-light mg-b-5 mg-t-5 ht-25">
                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated wd-100p" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
            </div>
        </div>
        <div class="card table-wr-br mg-b-20">
            <table class="table mg-0 tx-center tx-12">
                <tr>
                    <td class="bg-danger tx-white">
                        Deadline: {{ $task->estimated_time }}
                    </td>
                    <td>
                        Start Date: {{ $task->project->start_date }}
                    </td>
                    <td>
                        Complate Date: {{ $task->complete_date }}
                    </td>
                </tr>
            </table>	
        </div>
        
        <div class="card mg-b-20">
            <div class="card-header p5">
                Task Description
            </div>
            <div class="card-body p20">
                {{ $task->desc }}
            </div>					
        </div>
    </div>
    <div class="col-sm-12 col-xl-4">
        <div class="card mg-b-20">
            <div class="card-header p5">
                OPERATOR
            </div>
            <div class="card-body">
            <div class="row">
                <li class="media d-block d-sm-flex">
                    @if(is_null($task->operator->avatar))
                        {{-- <img src="{{ Avatar::create($task->operator->first_name." ".$task->operator->last_name)->toBase64() }}"
                         class="d-flex mg-r-10 mg-l-10 wd-80 rounded-circle" alt=""> --}}
                    @else 
                        <img src="/storage/{{ $task->operator->avatar }}"
                         class="d-flex mg-r-10 mg-l-10 wd-80 rounded-circle" alt="">
                    @endif
                  <div class="media-body align-self-center mg-t-20 mg-sm-t-0">
                    <h6 class="tx-inverse mg-b-10">
                        {{ $task->operator->first_name." ".$task->operator->last_name }}
                    </h6>
                    <p>{{ $task->operator->unit->name }}</p>
                  </div>
                </li>
            </div>
            </div>
        </div>
        <div class="card p15 mg-b-20">
            <a class="btn btn-block btn-light active" href="">PERCENT: 35 %</a>
        </div>
        <div class="card p15 mg-b-20">
            <a class="btn btn-block btn-success tx-white" href="">
                Status: {{ $task->status }}
            </a>
        </div>
    </div>
    </div>
    </div>
    
    <div class="col-sm-12 col-xl-4">
        <div id="accordion" class="accordion accordion-head-colored accordion-info mg-b-20" role="tablist" aria-multiselectable="true">
        <div class="card">
        <div class="card-header" role="tab" id="headingOne">
          <h6 class="mg-b-0">
            <a data-toggle="collapse" data-parent="#accordion" href="#newinlinenote"
            aria-expanded="true" aria-controls="newinlinenote" class="tx-gray-800 transition">
              + New Note
            </a>
          </h6>
        </div><!-- card-header -->

        <div id="newinlinenote" class="collapse" role="tabpanel" aria-labelledby="newinlinenote">
          <div class="card-block pd-20">
            <div>
                <form class="form">
                    <input class="form-control mg-b-10" type="text" placeholder="title">
                    <textarea class="form-control mg-b-10 textarea" name="textbody2" placeholder="Note body"></textarea>
                    <input type="file" name="file-1[]" id="file-1" class="inputfile"
data-multiple-caption="{count} files selected" multiple>
                    <label for="file-1" class="tx-white bg-info">
                      <i class="icon ion-ios-upload-outline tx-24"></i>
                      <span>Browse File...</span>
                    </label>
                    <input class="btn btn-block btn-info mg-b-10" value="Send">
                </form>  
            </div>
          </div>
        </div>
        </div>
        </div>
        
        <div class="card mg-b-20">
            <div class="card-header p5">
               Task Action
            </div>
            <div class="card-body">
                <div class="card bg-light mg-b-20">
                    <div class="card-body mp0">
                        <table class="table tx-12">
                            <thead>
                                <th>
                                    <span class="tx-11 font-normal">sadigh ahmad</span>
                                    <span class="tx-11 font-normal f-left">June 28 - 02:07</span>
                                </th>
                            </thead>
                            <tr>
                                <td>
                                body
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card bg-light mg-b-20">
                    <div class="card-body mp0">
                        <table class="table tx-12">
                            <thead>
                                <th>
                                    <span class="tx-11 font-normal">majed Karim</span>
                                    <span class="tx-11 font-normal f-left">June 27 - 20:44</span>
                                </th>
                            </thead>
                            <tr>
                                <td>
                                body
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <a href="">
                                    <i class="icon ion-document non-i"></i><i class="mg-l-5 non-i">Attachments</i>
                                </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


  {{-- <div class="card mg-b-20">
                    <div class="card-header bg-primary tx-white">
                        Content cheking...
                    </div>
                    <div class="card-body mp0">
                        <table class="table tx-12">
                            <thead class="bg-light">
                                <th>
                                    <span class="tx-11 font-normal">Hisam aljasem</span>
                                    <span class="tx-11 font-normal f-left">June 30 - 11:20</span>
                                </th>
                            </thead>
                            <tr>
                                <td>
                                    Action Summary...
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <a href="">
                                    <i class="icon ion-document non-i"></i><i class="mg-l-5 non-i">Attachments</i>
                                </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div> --}}
                {{-- <div class="card mg-b-20">
                    <div class="card-header bg-primary tx-white">
                        Action title
                    </div>
                    <div class="card-body mp0">
                        <table class="table tx-12">
                            <thead class="bg-light">
                                <th>
                                    <span class="tx-11 font-normal">Executor</span>
                                    <span class="tx-11 font-normal f-left">date</span>
                                </th>
                            </thead>
                            <tr>
                                <td>
                                    Action Summary...
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <a href="">
                                    <i class="icon ion-document non-i"></i><i class="mg-l-5 non-i">Attachments</i>
                                </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div> --}}
