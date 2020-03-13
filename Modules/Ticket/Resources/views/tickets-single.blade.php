@extends('Master.layout')

@section('title')
    {{$ticket->title}}
@endsection

@php

    // path option
    $path = [
            'name'          =>  $ticket->title,
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
    | Tickets
    |--------------------------------------------------------------------------
    *!-->
    <div class="row row-sm">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-dark text-light-1">
                    <h5 class="mb-0">
                        {{ $ticket->title }}
                    </h5>
                    <small>
                        Sent by: 
                    </small>
                    <span class="tx-14">
                        {{ "You" }}
                        at 
                        {{ $ticket->created_at }}
                    </span>

                    <span style="float:right">
                        {{ "Ticket Number : " }}
                         
                        {{ $ticket->tracking_code }}
                    </span>

                </div>
                <div class="card-body tx-14 tx-gray-700">
                    {!! $ticket->desc !!}
                </div>

                @if( !is_null($ticket->attach) )
                    <span class="mx-3">
                        <a class="text-dark" href="http://">
                            Attachment
                        </a>
                    </span>
                @endif

            </div>


        </div>

        

    </div>


     <!--
    |--------------------------------------------------------------------------
    | Ticket Replies
    |--------------------------------------------------------------------------
    *!-->
    @php 
        $user = auth()->user();
    @endphp
    @foreach( $ticket->replies as $reply )
        <div class="row row-sm mt-3">
            <div class="col-12">
                <div class="card">
                    @if( $reply->user_id == $user->id )
                    <div class="card-header bg-dark text-light-1">
                        <small>
                            Sent by: 
                        </small>
                        <span class="tx-14">
                            {{ "You" }}
                            at 
                            {{ $reply->created_at }}
                        </span>
                    </div>
                    @else   
                        <div class="card-header bg-info text-light-1">
                            <small>
                                Sent by: 
                            </small>
                            <span class="tx-14">
                                {{ $reply->receiver->first_name." ".$reply->receiver->last_name }}
                                at 
                                {{ $reply->created_at }}
                            </span>
                        </div>
                    @endif
                    <div class="card-body tx-14 tx-gray-700">
                        {!! $reply->desc !!}
                    </div>

                    @if( !is_null($reply->attach) )
                        <span class="mx-3">
                            <a class="text-dark" href="http://">
                                Attachment
                            </a>
                        </span>
                    @endif

                </div>


            </div>

        </div>
    @endforeach

    




    <form class="mt-4 mb-5 bg-light pt-3 pb-3" action="{{ route("ticket_replies.store") }}" method="POST">
        @csrf
        <div class="ticket-reply-box">
            <div class="col-xl-12">
                <div class="form-group">
                    <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
                    <input type="hidden" name="receiver_id" value="{{ $ticket->receiver_id }}">
                    <label class="form-control-label">Description<span class="tx-danger">*</span></label>
                    <textarea class="form-control textarea" name="desc" id="textbody" placeholder="Description">{{old("desc")}}</textarea>
                </div>
            </div>


            <div class="row mp0">
                <div class="col-xl-12">
                    <div class="form-group">
                        <input type="file" name="attach" id="file" class="inputfile"
                        data-multiple-caption="{count} files selected" multiple>
                        <label for="file" class="tx-white bg-warning">
                            <i class="icon ion-ios-upload-outline tx-24"></i>
                            <span>Attach</span>
                        </label>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-sm btn-outline-success">
                Reply
            </button>
        </div>
    </form>

  
    



@endsection
