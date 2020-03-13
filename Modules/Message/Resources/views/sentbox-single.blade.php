@extends('Master.layout')

@section('title')
    {{ $message->title }}
@endsection

@php

    // path option
    $path = [
            'name'          =>   $message->title ,
    ];

    // page_title option
    $page_title = [
        "title"     =>  "Message",
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
                        <span class="tx-12">Title:</span>
                        {{ $message->title }}
                    </h5>
                    <small class="">
                       {{-- Ticekt No: <strong class="tx-12">31212 </strong> --}}
                    </small>
                </div>

                <div class="card-body tx-14 tx-gray-700">


                    <div class="ticket-item reply col-12 col-lg-8">
                        <div class="ticket-item-header">
                            <div class="tx-gray-600">
                                <small>From</small> <strong>
                                    {{ $message->sender->first_name." ".$message->sender->last_name }}
                                    :</strong>
                            </div>
                            <small>
                                Sent at {{ $message->created_at }}
                            </small>
                        </div>
                        <p class="mb-0 mt-1 tx-gray-900">
                            {!! $message->desc !!}
                        </p>
                        {{-- <small class="float-right">14:30</small> --}}
                    </div>


                    @php 
                        $user = auth()->user();
                    @endphp

                    @foreach( $message->replies as $reply )

                        @if( $reply->receiver_id == $user->id )   
                            <div class="ticket-item reply col-12 col-lg-8">
                                <div class="ticket-item-header">
                                    <div class="tx-gray-600">
                                        <small>From</small> <strong>
                                            {{ $reply->sender->first_name." ".$reply->sender->last_name }}
                                            :</strong>
                                    </div>
                                    <small>
                                        Sent at {{ $reply->created_at }}
                                    </small>
                                </div>
                                <p class="mb-0 mt-1 tx-gray-900">
                                    {!! $reply->desc !!}
                                </p>
                                {{-- <small class="float-right">14:30</small> --}}
                            </div>
                        @else
                            <div class="ticket-item col-12 col-lg-8">
                                <div class="ticket-item-header">
                                    <div class="tx-gray-600">
                                        <small>From</small> <strong>
                                            {{ $reply->sender->first_name." ".$reply->sender->last_name }}
                                            :</strong>
                                    </div>
                                    <small>
                                        Sent at {{ $reply->created_at }}
                                    </small>
                                </div>
                                <p class="mb-0 mt-1 tx-gray-900">
                                    {!! $reply->desc !!}
                                </p>
                                {{-- <small class="float-right">14:30</small> --}}
                            </div>
                        @endif

                    @endforeach

                </div>
                <div class="card-footer">
                    <form action="{{ route("message_reply.sentbox_store") }}" method="POST"
                    enctype="multipart/form-data">
                        @csrf
                        <div class="ticket-reply-box">
                            <div class="form-group">
                                <input type="hidden" name="message_id" value="{{ $message->id }}" >
                                <input type="hidden" name="sender_id" value="{{ $message->sender_id }}" >
                                <label class="form-control-label">Description<span class="tx-danger">*</span></label>
                                <textarea class="form-control textarea" name="desc" id="textbody" placeholder="Description">{{old("desc")}}</textarea>
                            </div>
                            <button type="submit"  class="btn btn-sm btn-outline-success">
                                Reply
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  
   

   
    



@endsection
