@extends('Master.layout')

@section('title')
    {{"Notes"}}
@endsection

@php

    // path option
    $path = [
            'name'          =>  'Notes',
            'btn_content'   =>  'New Note',
            'is_modal'      =>  True,
            'modal_name'    =>  'new_notes'
    ];

    // page_title option
    $page_title = [
        "title"     =>  "Notes",
        "sub_title" =>  "Private",
        "icon"      =>  '<i class="icon ion-ios-paper-outline"></i>'
    ]
@endphp


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
    Modal for store data
-->
@section('create_modal')
    @include('Master.Modal.create-notes')
@endsection


<!-- 
    Main Content
-->
@section('content')
 
    @include('Messages.errors')
    @include('Messages.message')


    <div class="row row-sm">
        <div class="col-sm-12 col-xl-12">
            <div class="timesheet-wr">
                <div class="row row-sm">
                    @foreach($notes as $note)
                        <div class="col-sm-6 col-xl-4">
                            <div class="card bd-0 mg-b-20">
                                <div class="card-header bg-gray-2 tx-black tx-12 pd-y-5">
                                    {{ $note->title }}

                                    <a href="{{route('notes.destroy',$note->id)}}"
                                        style="float:right;" class="text-danger" >
                                            <i class="far fa-trash-alt"></i>
                                    </a>
                                </div>
                                <div class="card-body bd bd-t-0 rounded-bottom tx-12">
                                    {!! $note->desc !!}
                                </div>
                                <div class="card-footer bg-gray pd-y-5">
                                    <a href="" class="btn btn-sm btn-light active" >Read More</a>

                                    
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>




@endsection
