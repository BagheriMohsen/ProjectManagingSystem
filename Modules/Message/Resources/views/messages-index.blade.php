@extends('Master.layout')

@section('title')
    {{"Message"}}
@endsection

@php

    // path option
    $path = [
            'name'          =>  'Message',
            'btn_content'   =>  'New Message',
            'is_modal'      =>  True,
            'modal_name'    =>  'new_messages'
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
    Modal for store data
-->
@section('create_modal')
    @include('message::Modals.create-messages')
@endsection


<!-- 
    Main Content
-->
@section('content')
 
    @include('Messages.errors')
    @include('Messages.message')

  
    
    

    <!--
    |--------------------------------------------------------------------------
    | Message list
    |--------------------------------------------------------------------------
    !-->
    <div class="row row-sm">
        <div class="message-wr col-xs-12 col-xl-12">
            <div class="card mg-b-20">
            <div class="card-header bg-dark">
              <ul class="nav nav-tabs nav-tabs-for-dark card-header-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="#inbox" data-toggle="tab">Inbox</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#sent" data-toggle="tab">Sent</a>
                </li>
              </ul>
            </div>
            <div class="card-body color-gray-lighter">
              <div class="tab-content">


                <div class="tab-pane active" id="inbox">
                    <div class="br-mailbox-list-body">
                    @foreach( $inbox_items as $inbox_item )
                    
                        <div class="br-mailbox-list-item 
                        @if($inbox_item->is_unread)
                            unread active
                        @endif 
                        ">
                            <div class="d-flex justify-content-between">
                            <div>
                                <a href="{{ route("messages.inbox_single",$inbox_item->slug) }}">
                                    <p class="tx-12 tx-info">
                                        From: 
                                        {{ $inbox_item->sender->first_name." ".$inbox_item->sender->last_name }}
                                    </p>
                                </a>
                            </div>
                            <span class="tx-12">
                                {{ $inbox_item->updated_at }}
                            </span>
                            </div><!-- d-flex -->
                            <h6 class="tx-14 mg-b-10 tx-gray-800">
                                <a class="text-dark" href="{{ route("messages.inbox_single",$inbox_item->slug) }}">
                                    {{ $inbox_item->title }}
                                </a>
                            </h6>
                            <p class="tx-12 text-dark mg-b-5">
                                {!! Str::limit($inbox_item->desc, 30) !!}
                            </p>
                        </div>
                   
                    @endforeach
                        
                        
                    </div>
                </div>


                <div class="tab-pane" id="sent">
                    
                    <div class="br-mailbox-list-body">
                        @foreach( $sentbox_items as $sentbox_item )
                            <a href="{{ route("messages.sent_single",$sentbox_item->slug) }}">
                                <div class="br-mailbox-list-item">
                                    <h6 class="tx-14 mg-b-10 tx-gray-800">
                                        {{ $sentbox_item->title }}
                                    </h6>
                                    <p class="tx-12 tx-gray-600 mg-b-5">Posted to: 
                                        {{ $sentbox_item->receiver->first_name." ". $sentbox_item->receiver->last_name }}
                                        :: 
                                        {{ $sentbox_item->updated_at }}
                                    </p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>


              </div>
            </div>
          </div>

        </div>
    </div>
    



@endsection
