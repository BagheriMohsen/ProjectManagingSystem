@extends('Master.layout')

@section('title')
    {{"Projects"}}
@endsection
@php 
    $path = [
        'name'          =>  'Projects',
        'btn_content'   =>  "New Project",
        'is_modal'      =>  False,
        'route_name'    =>  "projects.create"
    ];
    $user = auth()->user();
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
<div class="row row-sm">
			
    <div class="col-xs-12 col-xl-12">
    
    <div class="card mg-b-20">
    <div class="card-header bg-info tx-white">
        Active Projects
    </div>
    <div class="card-body rounded-bottom table-wr-br">

    @foreach( $active_projects as $project )

    <table class="table tx-12">
        <tr class="tx-16">
            @if( $project->user_id == $user->id || $project->operating_unit_id == $user->id || $project->applicant_unit == $user->id )
                <a href="{{ route("projects.edit",$project->id) }}" class="btn btn-sm btn-primary">
                    Edit Project
                </a>
            @endif
            <td colspan="4">
                <a href="{{ route("projects.show",$project->slug) }}">
                <i style="color:{{ $project->color }}" class="fas fa-stop"></i>
                Project title: {{ $project->title }}
                </a>
                <div class="progress mg-b-5 mg-t-5 ht-15">
                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">35%</div>
                </div>
                

            </td>
            <td class="bg-light">
                Priority: 
                @if($project->priority == "low")
                    <span class="text-warning">{{ $project->priority }}</span>
                @elseif($project->priority == "normal")
                    <span class="text-primary">{{ $project->priority }}</span>
                @else 
                    <span class="text-danger">{{ $project->priority }}</span>
                @endif
            </td>
        </tr>
        <tr>
            <td>
                Applicant: 
                <span class="text-dark">
                    {{ $project->applicant_unit->name }}
                </span>
            </td>
            <td>
                Operating unit: 
                <span class="text-dark">
                    {{ $project->Operating_unit->name }}
                </span>
            </td>
            <td>
                Request date: 
                <span class="text-dark">
                    {{ $project->created_at }}
                </span>
            </td>
            <td>
                Start date: 
                <span class="text-dark">
                    {{ $project->start_date  }}
                </span>
            </td>
            <td class="btn btn-info text-light">
                Status: 
                {{ "In Progress" }}
            </td>
        </tr>
    </table>
   
    @endforeach

    </div>
    </div>
    
    <div class="card mg-b-20">
    <div class="card-header bg-primary tx-white">
        Complated Projects
    </div>
    <div class="card-body rounded-bottom table-wr-br">
        @foreach( $complete_projects as $project )

        <table class="table tx-12">
            <tr class="tx-16">
                <td colspan="4">
                    <a href="{{ route("projects.show",$project->slug) }}">
                    <i style="color:{{ $project->color }}" class="fas fa-stop"></i>
                    Project title: {{ $project->title }}
                    </a>
                    <div class="progress mg-b-5 mg-t-5 ht-15">
                        <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">35%</div>
                    </div>
                </td>
                <td class="bg-light">
                    Priority: 
                    @if($project->priority == "low")
                        <span class="text-warning">{{ $project->priority }}</span>
                    @elseif($project->priority == "normal")
                        <span class="text-primary">{{ $project->priority }}</span>
                    @else 
                        <span class="text-danger">{{ $project->priority }}</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    Applicant: 
                    <span class="text-dark">
                        {{ $project->applicant_unit->name }}
                    </span>
                </td>
                <td>
                    Operating unit: 
                    <span class="text-dark">
                        {{ $project->Operating_unit->name }}
                    </span>
                </td>
                <td>
                    Request date: 
                    <span class="text-dark">
                        {{ $project->created_at }}
                    </span>
                </td>
                <td>
                    Start date: 
                    <span class="text-dark">
                        {{ $project->start_date  }}
                    </span>
                </td>
                <td class="btn btn-primary text-light">
                    Status: 
                    {{ "Complete" }}
                </td>
            </tr>
        </table>
       
        @endforeach
    </div>
    </div>
    
    <div class="card mg-b-20">
    <div class="card-header bg-dark tx-white">
        Closed Projects
    </div>
    <div class="card-body rounded-bottom table-wr-br">
        @foreach( $close_projects as $project )

        <table class="table tx-12">
            <tr class="tx-16">
                <td colspan="4">
                    <a href="{{ route("projects.show",$project->slug) }}">
                    <i style="color:{{ $project->color }}" class="fas fa-stop"></i>
                    Project title: {{ $project->title }}
                    </a>
                    <div class="progress mg-b-5 mg-t-5 ht-15">
                        <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">35%</div>
                    </div>
                </td>
                <td class="bg-light">
                    Priority: 
                    @if($project->priority == "low")
                        <span class="text-warning">{{ $project->priority }}</span>
                    @elseif($project->priority == "normal")
                        <span class="text-primary">{{ $project->priority }}</span>
                    @else 
                        <span class="text-danger">{{ $project->priority }}</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    Applicant: 
                    <span class="text-dark">
                        {{ $project->applicant_unit->name }}
                    </span>
                </td>
                <td>
                    Operating unit: 
                    <span class="text-dark">
                        {{ $project->Operating_unit->name }}
                    </span>
                </td>
                <td>
                    Request date: 
                    <span class="text-dark">
                        {{ $project->created_at }}
                    </span>
                </td>
                <td>
                    Start date: 
                    <span class="text-dark">
                        {{ $project->start_date  }}
                    </span>
                </td>
                <td class="btn btn-dark text-light">
                    Status: 
                    {{ "Close" }}
                </td>
            </tr>
        </table>
       
        @endforeach
    </div>
    </div>
    
    </div>
    
</div>
@endsection
