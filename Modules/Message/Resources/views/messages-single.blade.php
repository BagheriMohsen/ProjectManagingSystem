@extends('Master.layout')

@section('title')
    {{"Ticket"}}
@endsection

@php

    // path option
    $path = [
            'name'          =>  'Ticket',
    ];

    // page_title option
    $page_title = [
        "title"     =>  "Ticket",
        "sub_title" =>  "Techno Fast",
        "icon"      =>  '<i class="menu-item-icon icon ion-ios-email-outline"></i>'
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
    Main Content
-->
@section('content')
 
    @include('Messages.errors')
    @include('Messages.message')

    <!--
    |--------------------------------------------------------------------------
    | Message single page
    |--------------------------------------------------------------------------
    *!-->
    <div class="row row-sm">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-dark text-light d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                        <span class="tx-12">Subject:</span>
                        About work
                    </h5>
                    <small class="">
                       Ticekt No: <strong class="tx-12">31212 </strong>
                    </small>
                </div>
                <div class="card-body tx-14 tx-gray-700">
                    <div class="ticket-item col-12 col-lg-8">
                        <div class="ticket-item-header">
                            <div class="tx-gray-600">
                                <small>From</small> <strong>Morteza:</strong>
                            </div>
                            <small>
                                Sent at 22 june 2021
                            </small>
                        </div>
                        <p class="mb-0 mt-1 tx-gray-900">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem consequatur cupiditate eveniet incidunt iste officiis modi praesentium cumque labore in blanditiis natus id culpa rerum voluptate, nesciunt maxime aliquid. Ab.
                        </p>
                        <small class="float-right">14:30</small>
                    </div>

                    <div class="ticket-item reply col-12 col-lg-8">
                        <div class="ticket-item-header">
                            <div class="tx-gray-600">
                                <small>From</small> <strong>Morteza:</strong>
                            </div>
                            <small>
                                Sent at 22 june 2021
                            </small>
                        </div>
                        <p class="mb-0 mt-1 tx-gray-900">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem consequatur cupiditate eveniet incidunt iste officiis modi praesentium cumque labore in blanditiis natus id culpa rerum voluptate, nesciunt maxime aliquid. Ab.
                        </p>
                        <small class="float-right">14:30</small>
                    </div>
                </div>
                <div class="card-footer">
                    <form action="">
                        <div class="ticket-reply-box">
                            <textarea name="ticekt-reply" class="form-control"></textarea>
                            <button class="btn btn-sm btn-outline-success">Reply</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  
   

   
    



@endsection
