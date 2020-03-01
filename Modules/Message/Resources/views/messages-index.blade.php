@extends('Master.layout')

@section('title')
    {{"Messages"}}
@endsection

@php

    // text_editor option
    $text_editor = [
        'route_name'    =>  'notes.store',
        'image'         =>  False,
        'file'          =>  False,
        'desc'          =>  True,
        'tags'          =>  False,
        'tags_item'     =>  array(),
        'title'         =>  True,
        "contact"       =>  True
    ];

    // path option
    $path = [
            'name'          =>  'Messages',
            'btn_content'   =>  'New Message',
            'is_modal'      =>  True,
            'btn_href'      =>  ''
    ];

    // page_title option
    $page_title = [
        "title"     =>  "Messages",
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
    @include('Master.Modal.create-modal')
@endsection


<!-- 
    Main Content
-->
@section('content')
 
    @include('Messages.errors')
    @include('Messages.message')


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
                        
                        <div class="br-mailbox-list-item unread active">
                            <div class="d-flex justify-content-between">
                            <div>
                                <p class="tx-12 tx-info">
                                    Sajjad Rafie
                                </p>
                            </div>
                            <span class="tx-12">10 Hours Ago</span>
                            </div><!-- d-flex -->
                            <h6 class="tx-14 mg-b-10 tx-gray-800">Whiteboard Request</h6>
                            <p class="tx-12 tx-gray-600 mg-b-5">Hi, Please provide a whiteboard for... </p>
                        </div>
                        <div class="br-mailbox-list-item unread">
                            <div class="d-flex justify-content-between">
                            <div>
                                <p class="tx-12 tx-info">
                                    Name
                                </p>
                            </div>
                            <span class="tx-12">Sent time</span>
                            </div><!-- d-flex -->
                            <h6 class="tx-14 mg-b-10 tx-gray-800">Message Title</h6>
                            <p class="tx-12 tx-gray-600 mg-b-5">Message summary...</p>
                        </div>
                        <div class="br-mailbox-list-item">
                            <div class="d-flex justify-content-between">
                            <div>
                                <p class="tx-12 tx-info">
                                    Name
                                </p>
                            </div>
                            <span class="tx-12">Sent time</span>
                            </div><!-- d-flex -->
                            <h6 class="tx-14 mg-b-10 tx-gray-800">Message Title</h6>
                            <p class="tx-12 tx-gray-600 mg-b-5">Message summary...</p>
                        </div>
                        <div class="br-mailbox-list-item unread">
                            <div class="d-flex justify-content-between">
                            <div>
                                <p class="tx-12 tx-info">
                                    Name
                                </p>
                            </div>
                            <span class="tx-12">Sent time</span>
                            </div><!-- d-flex -->
                            <h6 class="tx-14 mg-b-10 tx-gray-800">Message Title</h6>
                            <p class="tx-12 tx-gray-600 mg-b-5">Message summary...</p>
                        </div>
                        <div class="br-mailbox-list-item">
                            <div class="d-flex justify-content-between">
                            <div>
                                <p class="tx-12 tx-info">
                                    Name
                                </p>
                            </div>
                            <span class="tx-12">Sent time</span>
                            </div><!-- d-flex -->
                            <h6 class="tx-14 mg-b-10 tx-gray-800">Message Title</h6>
                            <p class="tx-12 tx-gray-600 mg-b-5">Message summary...</p>
                        </div>
                        <div class="br-mailbox-list-item">
                            <div class="d-flex justify-content-between">
                            <div>
                                <p class="tx-12 tx-info">
                                    Name
                                </p>
                            </div>
                            <span class="tx-12">Sent time</span>
                            </div><!-- d-flex -->
                            <h6 class="tx-14 mg-b-10 tx-gray-800">Message Title</h6>
                            <p class="tx-12 tx-gray-600 mg-b-5">Message summary...</p>
                        </div>
                        <div class="br-mailbox-list-item">
                            <div class="d-flex justify-content-between">
                            <div>
                                <p class="tx-12 tx-info">
                                    Name
                                </p>
                            </div>
                            <span class="tx-12">Sent time</span>
                            </div><!-- d-flex -->
                            <h6 class="tx-14 mg-b-10 tx-gray-800">Message Title</h6>
                            <p class="tx-12 tx-gray-600 mg-b-5">Message summary...</p>
                        </div>
                        <div class="br-mailbox-list-item">
                            <div class="d-flex justify-content-between">
                            <div>
                                <p class="tx-12 tx-info">
                                    Name
                                </p>
                            </div>
                            <span class="tx-12">Sent time</span>
                            </div><!-- d-flex -->
                            <h6 class="tx-14 mg-b-10 tx-gray-800">Message Title</h6>
                            <p class="tx-12 tx-gray-600 mg-b-5">Message summary...</p>
                        </div>
                        <div class="br-mailbox-list-item">
                            <div class="d-flex justify-content-between">
                            <div>
                                <p class="tx-12 tx-info">
                                    Name
                                </p>
                            </div>
                            <span class="tx-12">Sent time</span>
                            </div><!-- d-flex -->
                            <h6 class="tx-14 mg-b-10 tx-gray-800">Message Title</h6>
                            <p class="tx-12 tx-gray-600 mg-b-5">Message summary...</p>
                        </div>
                        
                    </div>
                </div>
                <div class="tab-pane" id="sent">
                    
                    <div class="br-mailbox-list-body">
                        
                        <div class="br-mailbox-list-item">
                            <h6 class="tx-14 mg-b-10 tx-gray-800">Message title</h6>
                            <p class="tx-12 tx-gray-600 mg-b-5">Posted to: Recipient Name :: Post Time</p>
                        </div>
                        <div class="br-mailbox-list-item">
                            <h6 class="tx-14 mg-b-10 tx-gray-800">Message title</h6>
                            <p class="tx-12 tx-gray-600 mg-b-5">Posted to: Recipient Name :: Post Time</p>
                        </div>
                        <div class="br-mailbox-list-item">
                            <h6 class="tx-14 mg-b-10 tx-gray-800">Message title</h6>
                            <p class="tx-12 tx-gray-600 mg-b-5">Posted to: Recipient Name :: Post Time</p>
                        </div>
                        <div class="br-mailbox-list-item">
                            <h6 class="tx-14 mg-b-10 tx-gray-800">Message title</h6>
                            <p class="tx-12 tx-gray-600 mg-b-5">Posted to: Recipient Name :: Post Time</p>
                        </div>
                        <div class="br-mailbox-list-item">
                            <h6 class="tx-14 mg-b-10 tx-gray-800">Message title</h6>
                            <p class="tx-12 tx-gray-600 mg-b-5">Posted to: Recipient Name :: Post Time</p>
                        </div>
                        <div class="br-mailbox-list-item">
                            <h6 class="tx-14 mg-b-10 tx-gray-800">Message title</h6>
                            <p class="tx-12 tx-gray-600 mg-b-5">Posted to: Recipient Name :: Post Time</p>
                        </div>
                        <div class="br-mailbox-list-item">
                            <h6 class="tx-14 mg-b-10 tx-gray-800">Message title</h6>
                            <p class="tx-12 tx-gray-600 mg-b-5">Posted to: Recipient Name :: Post Time</p>
                        </div>
                        <div class="br-mailbox-list-item">
                            <h6 class="tx-14 mg-b-10 tx-gray-800">Message title</h6>
                            <p class="tx-12 tx-gray-600 mg-b-5">Posted to: Recipient Name :: Post Time</p>
                        </div>
                        <div class="br-mailbox-list-item">
                            <h6 class="tx-14 mg-b-10 tx-gray-800">Message title</h6>
                            <p class="tx-12 tx-gray-600 mg-b-5">Posted to: Recipient Name :: Post Time</p>
                        </div>
                        <div class="br-mailbox-list-item">
                            <h6 class="tx-14 mg-b-10 tx-gray-800">Message title</h6>
                            <p class="tx-12 tx-gray-600 mg-b-5">Posted to: Recipient Name :: Post Time</p>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>



@endsection
