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
    

    if( $task->operator_id == auth()->user()->id ) {
        $path = [
            'name'          =>  $task->title,
            'btn_content'   =>  'New subtask',
            'is_modal'      =>  true,
            'btn_href'      =>  "",
            'modal_name'    =>  'newsubtask'

        ];
    }else{
        $path = [
            'name'          =>  $task->title,
            'is_modal'      =>  False,
            'btn_href'      =>  "",
            'modal_name'    =>  'newsubtask'
        ];
    }  

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

@include("Messages.errors")
@include("Messages.message")



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

                <div class="progress-bar
                @if( $percent <= 40 )
                    bg-danger
                @elseif( $percent <= 70 ) 
                    bg-warning
                @elseif( $percent < 100 ) 
                    bg-info
                @else 
                    bg-success
                @endif
                 
                 progress-bar-striped progress-bar-animated wd-{{ $percent }}p" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    {{ $percent }}
                    %
                </div>
                
            </div>
        </div>
        <div class="card table-wr-br mg-b-20">
            <table class="table mg-0 tx-center tx-12">
                <tr>
                    <td class="bg-danger tx-white">
                        Your legal time: {{ $task->estimated_time }}
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

        {{-- sub task list --}}
        
        <div id="#sub_task" class="row row-sm">
            <div id="taskList" class="col-12">
                <div class="card mg-b-20">
                    <div class="card-header bg-info tx-white p5">
                        Tasks 
                    </div>
                    <div class="card-body p20">
                        @foreach( $task->sub_tasks as $sub_task )
                            <div class="accordion mt-3" id="accordionExample">
                                <div class="task-header"
                                 style="border-left:4px solid {{ $sub_task->color }}">
                                    <div class="d-flex align-items-center">
                                        <div class="form-check d-flex pl-0">
                                            <form class="checkSubTask"
                                             action="{{ route('projects.subTasks.modify_subtask',$sub_task->id) }} ">
                                        <input @if( $sub_task->is_done ) checked disabled @endif type="checkbox" class="form-check-input" id="todoCheckbox{{ $sub_task->id }}">
                                                <label class="form-check-label" for="todoCheckbox{{ $sub_task->id }}"></label>
                                            </form>
                                        </div>
                                        <span data-toggle="collapse" data-target="#taskCollapse{{ $sub_task->id }}" style="cursor:pointer">
                                            {{ $sub_task->title }}
                                        </span>
                                    </div>
                                    <div>
                                        Priority {{ $sub_task->priority }}
                                    </div>
                                </div>
                                @if( $task->operator_id == auth()->user()->id )
                                    <div id="taskCollapse{{ $sub_task->id }}" class="task-body collapse"
                                         style="border-left:4px solid {{ $sub_task->color }}" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="d-flex justify-content-between">
                                            <form class="addLog" action="{{route('projects.subTasks.modify_subtask',$sub_task->id)}}">
                                                <button type="submit" class="btn btn-sm btn-outline-info">Add log</button>
                                                <div class="timepicker-box">
                                                    <input class="subtask-id" type="hidden" value="{{ $sub_task->id }}">
                                                    <input class="hours-subtask timepicker" type="text" placeholder="HH">:
                                                    <input class="minutes-subtask timepicker" type="text" placeholder="MM">
                                                </div>
                                                <div class="pl-2 mt-2">
                                                    Overall time spend on Task : 
                                                    @php 
                                                        $time = explode(".",$sub_task->time_passes);
                                                      
                                                        if( isset($time[1]) ){
                                                            $hh = $time[0];
                                                            $mm = $time[1];
                                                        }else{
                                                            $hh = 00;
                                                            $mm = 00;
                                                        }
                                                        
                                                        
                                                    @endphp
                                                    {{ $hh ." : ". $mm }}
                                                </div>
                                            </form>
                                            <div class="timer">
                                                <button class="startTimer btn btn-sm btn-outline-info">Start timer</button>
                                                <div class="p-2 bg-info timer-control text-white" style="display:none">
                                                    <span class="timerText text-right text-white px-3">00:00:00</span>
                                                    <a href="javascript:void(0)" class="pauseTimer text-white px-1">
                                                        <i class="fas fa-pause"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" class="resumeTimer text-white px-1" style="display:none">
                                                        <i class="fas fa-play"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" class="stopTimer text-white px-1">
                                                        <i class="fas fa-stop"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- end sub task list --}}
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
                        <img src="{{ Avatar::create($task->operator->first_name." ".$task->operator->last_name)->toBase64() }}"
                         class="d-flex mg-r-10 mg-l-10 wd-80 rounded-circle" alt="">
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
            <a class="btn btn-block btn-light active" href="">PERCENT: {{ $task->percent }} %</a>
        </div>
        <div class="card p15 mg-b-20">
            @if( $task->is_done )
                <a class="btn btn-block btn-success tx-white" href="">
                    Status: {{ "Complete" }}
                </a>
            @else 
                <a class="btn btn-block btn-success tx-white" href="">
                    Status: {{ "In Progress" }}
                </a>
            @endif
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
                
                <form action="{{ route("taskActions.store") }}" method="POST" class="form" enctype="multipart/form-data">
                    @csrf
                    <input name="user_id"         value="{{ auth()->user()->id }}" class="form-control mg-b-10" type="hidden">
                    <input name="project_task_id" value="{{ $task->id }}" class="form-control mg-b-10" type="hidden">
                    <textarea class="form-control mg-b-10 textarea" name="desc" placeholder="Note body"></textarea>
                    <input type="file" name="attach" id="file-1" class="inputfile"
                    data-multiple-caption="{count} files selected" multiple>
                    <label for="file-1" class="tx-white bg-info">
                      <i class="icon ion-ios-upload-outline tx-24"></i>
                      <span>Browse File...</span>
                    </label>
                    <button type="submit" class="btn btn-block btn-info mg-b-10">
                        Send
                    </button>
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
                @foreach( $task->task_actions as $action)

                    <div class="card bg-light mg-b-20">
                        <div class="card-body mp0">
                            <table class="table tx-12">
                                <thead>
                                    <th>
                                        
                                        <span class="tx-11 font-normal">
                                            {{ $action->user->first_name." ".$action->user->last_name }}
                                        </span>
                                        <span class="tx-11 font-normal f-right">
                                            {{ $action->created_at }}
                                        </span>
                                        
                                    </th>
                                </thead>
                                <tr>
                                    <td>
                                        {!! $action->desc !!}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    @if( !is_null($action->attach) )
                                        <a href="{{ route("projectActions.file_download",$action->id) }}">
                                            <i class="icon ion-document non-i"></i><i class="mg-l-5 non-i">
                                                Attachment
                                            </i>
                                        </a>
                                    @endif
                                    

                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                @endforeach
                
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
