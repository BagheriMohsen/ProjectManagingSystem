@extends('Master.layout')

@section('title')
    {{"Ticket"}}
@endsection

@php

    // path option
    $path = [
            'name'          =>  'Ticket',
            'btn_content'   =>  'New Ticket',
            'is_modal'      =>  True,
            'modal_name'    =>  'new_tickets'
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
    Modal for store data
-->
@section('create_modal')
    @include('ticket::Modals.create-tickets')
@endsection


<!-- 
    Main Content
-->
@section('content')
 
    @include('Messages.errors')
    @include('Messages.message')

  
    
     <!--
    |--------------------------------------------------------------------------
    | Ticket list
    |--------------------------------------------------------------------------
    *!-->
    <div class="row row-sm">
        <div class="message-wr col-xs-12 col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header bg-dark text-light">
                    Tickets
                </div>
                <div class="card-body">
                    <div class="br-mailbox-list-body">
                        @foreach( $tickets as $ticket )
                        <div class="br-mailbox-list-item unread">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="tx-12 tx-info">
                                        To: 
                                        {{ $ticket->receiver->first_name." ".$ticket->receiver->last_name }}
                                    </p>
                                </div>
                                <span class="tx-12 tx-gray-600">No:
                                    {{ $ticket->tracking_code }}
                                </span>
                            </div>
                            <h6 class="tx-14 mg-b-10 tx-gray-800"><small>Title:</small> 
                                {{ $ticket->title }}
                            </h6>
                            <div class="tx-12 tx-gray-700 mg-b-5">
                                {!! $ticket->desc !!}
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

  
    



@endsection
