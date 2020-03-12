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
    | Ticket single page
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
     <!--
    |--------------------------------------------------------------------------
    | Message single page
    |--------------------------------------------------------------------------
    *!-->
    <div class="row row-sm">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-dark text-light-1">
                    <h5 class="mb-0">
                        About work
                    </h5>
                    <small>
                        Sent by: 
                    </small>
                    <span class="tx-14">
                        Morteza Mohiuodin at 27 june 2017 , 14:30
                    </span>
                </div>
                <div class="card-body tx-14 tx-gray-700">
                    ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                </div>
            </div>
        </div>
    </div>
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
                            <th>Departement</th>
                            <th>Subject</th>
                            <th>Status</th>
                            <th>Last Update</th>
                          </tr>
                        </thead>
                        
                        <tbody>
                          <tr>
                            <td scope="row">
                                <a href="#" class="ticket-No">
                                    #2131321
                                </a>
                            </td>
                            <td>
                                <a href="#">
                                    Managment
                                </a>
                            </td>
                            <td>
                                <a href="#">
                                    About work
                                </a>
                            </td>
                            <td>
                                <a href="#">
                                    <button class="btn btn-sm btn-outline-success">closed</button>
                                </a>
                            </td>
                            <td>
                                <a href="#">
                                    2020/3/12 (4:20 pm)
                                </a>
                            </td>
                          </tr>
                          <tr>
                            <td scope="row">
                                <a href="#" class="ticket-No">
                                    #2131321
                                </a>
                            </td>
                            <td>
                                <a href="#">
                                    Managment
                                </a>
                            </td>
                            <td>
                                <a href="#">
                                    About work
                                </a>
                            </td>
                            <td>
                                <a href="#">
                                    <button class="btn btn-sm btn-outline-success">closed</button>
                                </a>
                            </td>
                            <td>
                                <a href="#">
                                    2020/3/12 (4:20 pm)
                                </a>
                            </td>
                          </tr>
                          <tr>
                            <td scope="row">
                                <a href="#" class="ticket-No">
                                    #2131321
                                </a>
                            </td>
                            <td>
                                <a href="#">
                                    Managment
                                </a>
                            </td>
                            <td>
                                <a href="#">
                                    About work
                                </a>
                            </td>
                            <td>
                                <a href="#">
                                    <button class="btn btn-sm btn-outline-success">closed</button>
                                </a>
                            </td>
                            <td>
                                <a href="#">
                                    2020/3/12 (4:20 pm)
                                </a>
                            </td>
                          </tr>
                        </tbody>
                        
                        </table>
                </div>
            </div>
        </div>
    </div>

    <!--
    |--------------------------------------------------------------------------
    | Message list
    |--------------------------------------------------------------------------
    *!-->
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
