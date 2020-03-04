@extends('Master.layout')

@section('title')
    {{"Unverified Project"}}
@endsection
@php 
    $path = [
        'name'          =>  'Project',
        'is_modal'      =>  False,
    ];
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
    <div class="card-header bg-side-panel tx-white">
        Waiting For Verify
    </div>
    <div class="card-body rounded-bottom table-wr-br">
       
        
    @foreach( $projects as $project )

    <table class="table tx-12">
        <tr class="tx-16">
            <td colspan="4">
                <a href="{{ route('projects.edit',$project->id) }}">
                    <i style="color:{{ $project->color }}" class="fas fa-stop"></i>
                    Project title: 
                    {{ $project->title }}
                </a>
                <div class="progress mg-b-5 mg-t-5 ht-15">
                    <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated wd-0p" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
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
                Applicant: {{ $project->applicant_unit->name }}
            </td>
            <td>
                Operating unit: {{ $project->Operating_unit->name }}
            </td>
            <td>
                Request date: {{ $project->created_at }}
            </td>
            <td>
                Start date: {{ "None" }}
            </td>
            <td class="bg-light">
                Status: 
                <span class="text-secondary">
                    {{ $project->status }}
                </span>
            </td>
        </tr>
    </table>

    @endforeach

    </div>
    </div>
    
   
    
    
    
    </div>
    
</div>
@endsection
