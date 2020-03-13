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
                    <table class="table table-striped table-ticket table-responsive-md btn-table tx-gray-600 text-center">
                        <thead>
                          <tr>
                            <th>Ticket No</th>
                            <th>Project</th>
                            <th>Subject</th>
                            <th>Status</th>
                            <th>Last Update</th>
                          </tr>
                        </thead>
                        
                        <tbody>
                            @foreach( $tickets as $ticket )
                                <tr>
                                    <td scope="row">
                                        <a href="{{ route("tickets.single",$ticket->slug) }}" class="ticket-No">
                                            #{{ $ticket->tracking_code }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route("tickets.single",$ticket->slug) }}" class="ticket-No">
                                            {{ $ticket->project->title }}
                                        </a>
                                    </td>
                                    <td>
                                        {{ $ticket->title }}
                                    </td>
                                    <td>
                                        @if( $ticket->is_close )
                                            {{"closed"}}
                                        @else 
                                            {{"In Progress..."}}
                                        @endif
                                    </td>
                                    <td>
                                        {{ $ticket->updated_at }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        
                        </table>
                </div>
            </div>
        </div>
    </div>

  
    



@endsection
