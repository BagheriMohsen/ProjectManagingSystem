@extends('Master.layout')

@section('title')
    {{ $project->title }}
@endsection
@php

    // path option
    $path = [
            'name'          =>  $project->title,
            'is_modal'      =>  False,
            'btn_href'      =>  ''
    ];

    // page_title option
    $page_title = [
        "title"     =>  "Time Line",
        "sub_title" =>  "Techno Fast",
        "icon"      =>  '<i class="menu-item-icon icon ion-coffee"></i>'
    ]
@endphp

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

    @include("Messages.message")
    @include("Messages.errors")
    @include("Messages.error")


<div class="row row-sm">
    <div class="col-sm-12 col-xl-8">
    <div class="row row-sm">
    <div class="col-sm-12 col-xl-8">
        <div class="card p15 mg-b-20">
            <div class="br-pagetitle">
                <i class="icon ion-ios-gear-outline mx-4"></i>
                <div>
                <h4>
                    {{ $project->title }}
                </h4>
                <p class="mg-b-0">Techno Fast</p>
                </div>
            </div>
                <div class="tx-center mg-b-4 mg-t-4 tx-13">
                    Subject: {{ $project->subject }}
                </div>
        </div>
    </div>
    <div class="col-sm-12 col-xl-4">
        <div class="card mg-b-20">
            <div class="card-header p5">
                project manager
            </div>
            <div class="card-body">
            <div class="row">
                <li class="media d-block d-sm-flex">
                    @if(is_null($project->manager->avatar))
                        <img src="{{ Avatar::create($project->manager->first_name." ".$project->manager->last_name)->toBase64() }}"
                        class="d-flex mg-r-10 mg-l-10 wd-80 rounded-circle" >
                    @else 
                        <img src="/storage/{{ $project->manager->avatar }}"
                        class="d-flex mg-r-10 mg-l-10 wd-80 rounded-circle"  >
                    @endif
                  <div class="media-body align-self-center mg-t-20 mg-sm-t-0">
                    <h6 class="tx-inverse mg-b-10">
                        {{ $project->manager->first_name." ".$project->manager->last_name}}
                    </h6>
                    <p>Programming Unit</p>
                  </div>
                </li>
            </div>
            </div>
        </div>
    </div>
    </div>
    <div class="row row-sm">
        <div class="col-sm-12">
        <div class="row row-sm mg-b-20">
            <div class="col-sm-12 col-xl-8">
                <div class="card p15 min-h-63">
                <div class="progress bg-light mg-b-5 mg-t-5 ht-20">
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
                    progress-bar-striped progress-bar-animated wd-{{ $percent }}p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                    {{ $percent }}
                    %
                </div>
                </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-4">
                <div class="card p15 min-h-63">
                    <a class="btn btn-block btn-sm btn-warning " href="">
                        Status: {{ $project->status }}
                    </a>
                </div>
            </div>
            
        </div>
        
        <div class="card mg-b-20 table-wr-br">
            <table class="table mg-0 tx-center tx-12">
                <tr>
                    <td>
                        Request date: {{ $project->req_date }}
                    </td>
                    <td class="bg-danger tx-white">
                        Deadline: {{ $project->dead_date }}
                    </td>
                    <td>
                        Start date: {{ $project->start_date }}
                    </td>
                    <td>
                        Complate Date: {{ $project->complete_date }}
                    </td>
                </tr>
            </table>	
        </div>
        
        <div class="card mg-b-20">
            <div class="card-header p5">
                Project Description
            </div>
            <div class="card-body p20">
                {!! $project->desc !!}
            </div>					
        </div>
        
        <div class="card mg-b-20">
            <div class="card-header p5">
                Processes
            </div>
            <div class="card-body p20 table-wr-br">
                <table class="table table-hover table-striped tx-12 tx-center">
                    <thead>
                        <th>
                            row
                        </th>
                        <th>
                            title
                        </th>
                        <th>
                            operator
                        </th>
                        <th>
                            Estimated Time
                        </th>
                        <th>
                            Percent of the project
                        </th>
                        <th>
                            Priority
                        </th>
                        <td>
                            Status
                        </td>
                    </thead>
                    <tbody>
                        @foreach($project->tasks as $task)

                        <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    <a href="{{ route("projects.subtask_index",
                                    ["project_slug"=>$project->slug,"task_slug"=>$task->slug]) }}">
                                        {{ $task->title }}
                                    </a>
                                </td>
                                <td>
                                    {{ $task->operator->first_name." ".$task->operator->last_name }}
                                </td>
                                <td>
                                    @php 
                                    $time = explode(".",$task->estimated_time);
                                    if( isset($time[1]) ){
                                        $hh = $time[0];
                                        $mm = $time[1];
                                    }else{
                                        $hh = 00;
                                        $mm = 00;
                                    }
                                    @endphp
                                    {{ $hh ." : ". $mm }}
                                </td>
                                <td>
                                    
                                    {{ $task->percent }} %
                                </td>
                                <td>
                                    @if($task->priority == "low")
                                        <span class="text-warning">{{ "Low" }}</span>
                                    @elseif($task->priority == "normal")
                                        <span class="text-primary">{{ "Normal" }}</span>
                                    @else 
                                        <span class="text-danger">{{ "High" }}</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route("projects.subtask_index",["project_slug"=>$project->slug,"task_slug"=>$task->slug]) }}" 
                                        @if( !$task->is_done )
                                            class="btn btn-sm btn-primary col-sm-12">
                                            {{ "In Progress" }}
                                        @elseif( $task->is_done )
                                                class="btn btn-sm btn-success col-sm-12">
                                            {{ "Complete" }}
                                        @endif
                                    </a>
                                    
                                </td>
                            </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card mg-b-20 table-wr-br">
            <table class="table mg-0 tx-center">
                <tr>
                    <td class="bg-dark tx-white">Observers</td>
                    <td>
                        {{ $project->manager->first_name." ".$project->manager->last_name  }}
                    </td>
                    <td>
                        {{ $project->supervisor->first_name." ".$project->supervisor->last_name }}
                    </td>
                </tr>
            </table>	
        </div>
        </div>	
    </div>
    </div>
    <div class="col-sm-12 col-xl-4">
        <div class="card mg-b-20">
            <div class="card-header p5">
                Information
            </div>
            <div class="card-body">
            <div class="row">
                <ul class="w100">
                    <li>
                        Applicant: {{ $project->applicant_unit->name }}
                    </li>
                    <li>
                        Operating unit: {{ $project->Operating_unit->name }}
                    </li>
                    <li>
                        Priority: 
                        @if($project->priority == "low")
                            <span class="text-warning">{{ "Low" }}</span>
                        @elseif($project->priority == "normal")
                            <span class="text-primary">{{ "Normal" }}</span>
                        @else 
                            <span class="text-danger">{{ "High" }}</span>
                        @endif
                    </li>
                    <li>
                        Estimated Time: 
                        {{ $project->tasks->sum("estimated_time") }}
                    </li>
                </ul>
            </div>
            </div>
        </div>
        
        <div id="accordion" class="accordion accordion-head-colored accordion-info mg-b-20" role="tablist" aria-multiselectable="true">
        <div class="card">
        <div class="card-header" role="tab" id="headingOne">
          <h6 class="mg-b-0">
            <a data-toggle="collapse" data-parent="#accordion" href="#newinlinenote"
            aria-expanded="true" aria-controls="newinlinenote" class="tx-gray-800 transition">
              + New Action
            </a>
          </h6>
        </div><!-- card-header -->

        <div id="newinlinenote" class="collapse" role="tabpanel" aria-labelledby="newinlinenote">
          <div class="card-block pd-20">
            <div>

                <form action="{{ route("projectActions.store") }}" 
                method="POST" class="form" enctype="multipart/form-data" >
                    @csrf
                    <input name="user_id"    value="{{ auth()->user()->id }}"  class="form-control mg-b-10" type="hidden" >
                    <input name="project_id" value="{{ $project->id }}"     class="form-control mg-b-10" type="hidden" >
                    <textarea name="desc" class="form-control mg-b-10 textarea" placeholder="body"></textarea>
                    <input type="file" name="attach" id="file-1" class="inputfile"
                    data-multiple-caption="{count} files selected" multiple>
                    <label for="file-1" class="tx-white bg-info">
                      <i class="icon ion-ios-upload-outline tx-24"></i>
                      <span>Select File...</span>
                    </label>
                    <button type="submit" class="btn btn-block btn-info mg-b-10" >
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
                Project's Actions
            </div>
                <div class="card-body">
                    @foreach( $project->project_actions as $action )
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
</div>
@endsection




@section('scripts')
    <script>
      $(function(){

        'use strict';

        $( '.inputfile' ).each( function()
        {
          var $input	 = $( this ),
            $label	 = $input.next( 'label' ),
            labelVal = $label.html();

          $input.on( 'change', function( e )
          {
            var fileName = '';

            if( this.files && this.files.length > 1 )
              fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
            else if( e.target.value )
              fileName = e.target.value.split( '\\' ).pop();

            if( fileName )
              $label.find( 'span' ).html( fileName );
            else
              $label.html( labelVal );
          });

          // Firefox bug fix
          $input
          .on( 'focus', function(){ $input.addClass( 'has-focus' ); })
          .on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
        });

      });
    </script>
@endsection