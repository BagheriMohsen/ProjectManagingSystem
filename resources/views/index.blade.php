@extends('Master.layout')

@section('title')
    {{"Dashboard"}}
@endsection

@php

    // path option
    $path = [
            'is_modal'      =>  False,
            'btn_href'      =>  ''
    ];

@endphp



<!-- 
    path 
-->
@section('path')
    @include('Master.path')
@endsection





@section('content')

<div class="row row-sm">
    <div class="col-sm-6 col-xl-3">
        <div class="bg-royal rounded overflow-hidden h-140">
      <div class="pd-x-20 pd-t-20 pd-b-20 d-flex align-items-center">
        <i class="ion ion-calendar tx-60 lh-0 tx-white op-7"></i>
        <div class="mg-l-20">
          <p class="tx-12 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Today</p>
            <h3 id="geodate2" class="tx-roboto tx-white-8">
                <script>
                var d = new Date();
                document.getElementById("geodate2").innerHTML = d.getFullYear() + "/" + (d.getMonth() + 1) + "/" + d.getDate();
                </script>
            </h3>
            <span id="hijridate" class="tx-14 tx-roboto tx-white-8">
                <script>
                document.getElementById("hijridate").innerHTML = new Intl.DateTimeFormat('ar-IQ-u-ca-islamic', {day: 'numeric', month: 'long',year : 'numeric'}).format(Date.now());
                </script>
            </span><br>
        </div>
      </div>
    </div>
    </div>
    <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
        <div class="bg-teal rounded overflow-hidden h-140">
      <div class="pd-x-20 pd-t-20 pd-b-20 d-flex align-items-center">
        <i class="ion ion-ios-gear tx-60 lh-0 tx-white op-7"></i>
        <div class="mg-l-20">
          <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Projects Status</p>
            <hr style="margin-top:10px; margin-bottom:7px;">
            <h5 class="tx-roboto tx-white-8">
                Active Projects: 2
            </h5>
            <hr style="margin-top:10px; margin-bottom:7px;">
            <h5 class="tx-roboto tx-white-8">
                Active Process: 3
            </h5>
        </div>
      </div>
    </div>
    </div>
    <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
        <div class=" rounded overflow-hidden h-140 bg-warning">
      <div class="pd-x-20 pd-t-20 pd-b-20 d-flex align-items-center">
        <i class="ion ion-ios-bell tx-60 lh-0 tx-white op-7"></i>
        <div class="mg-l-20">
          <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Inbox</p>
            <hr style="margin-top:10px; margin-bottom:7px;">
            <h5 class="tx-roboto tx-white-8">
                2  -  New Message
            </h5>
            <hr style="margin-top:10px; margin-bottom:7px;">
            <h5 class="tx-roboto tx-white-8">
                0  - New Notice
            </h5>
        </div>
      </div>
    </div>
    </div>
    <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
        <div id="block-time-income" class="bg-grandeur rounded overflow-hidden h-140">
      <div class="pd-x-20 pd-t-20 pd-b-20 d-flex align-items-center">
        <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
        <div class="mg-l-20">
          <p class="tx-12 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Register Enter</p>
            <a onclick="timeincome()" class="btn btn-light mb7">Register Enter Time</a>
            <br>
            <h4 id="show_time_1" class="tx-roboto tx-white-8">
                <script language="JavaScript">
                    function show_time_1(){
                     d=new Date();
                     H=d.getHours();H=(H<10)?"0"+H:H;
                     i=d.getMinutes();i=(i<10)?"0"+i:i;
                     s=d.getSeconds();s=(s<10)?"0"+s:s;
                     document.getElementById('show_time_1').innerHTML=H+" : "+i+" : "+s;
                     setTimeout("show_time_1()",1000);/* 1 sec */
                    } show_time_1();
                </script>
            </h4>
        </div>
      </div>
    </div>
        <div id="block-time-outcome" class="bg-danger rounded overflow-hidden h-140 hidden">
      <div class="pd-x-20 pd-t-20 pd-b-20 d-flex align-items-center">
        <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
        <div class="mg-l-20">
          <p class="tx-12 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Register Exit</p>
            <a onclick="timeoutcome()" class="btn btn-light mb7">Register Exit Time</a>
            <br>
            <h4 class="tx-roboto tx-white-8" id="show_time_5">
                <script language="JavaScript">
                    function show_time_5(){
                     d=new Date();
                     H=d.getHours();H=(H<10)?"0"+H:H;
                     i=d.getMinutes();i=(i<10)?"0"+i:i;
                     s=d.getSeconds();s=(s<10)?"0"+s:s;
                     document.getElementById('show_time_5').innerHTML=H+" : "+i+" : "+s;
                     setTimeout("show_time_5()",1000);/* 1 sec */
                    } show_time_5();
                </script>
            </h4>
        </div>
      </div>
    </div>
    </div>
</div>
<div class="row row-sm mg-t-20 mg-b-20">
    <div class="col-sm-6 col-xl-4">
        <div class="card mg-b-20">
        <img class="card-img-top img-fluid" src="{{asset('panel/img/img16.jpg')}}" alt="Image">
            <div class="card-body">
            <p class="card-text">Happy Eid al-Fitr.</p>
            </div>
        </div>
        <div class="card bd-0 shadow-base">
            <div class="justify-content-between pd-25">
                <div class="tx-12">
                    <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Today's Events</h6>
                    <table class="table mp0">
                        <tr>
                            <td>
                                <p id="geodate3"></p>
                            </td>
                        </tr>
                    </table>
                    <script>
                        document.getElementById("geodate3").innerHTML = d.getFullYear() + "/" + (d.getMonth() + 1) + "/" + d.getDate();
                    </script>
                </div>
                <div class="tx-10">
                    <table class="table table-striped table-hover mp0 tx-black">
                        <thead>
                            <th colspan="2">
                            Historical and cultural events of today
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>-</td>
                                <td>
                                    Item-1
                                </td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>
                                    Item-2</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>
                                    Item-3</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>
                                    Item-4</td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>-</td>
                                <td>
                                    Item-5</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>
                                    Item-6</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>
                                    Item-7</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>
                                    Item-8</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-8">
        <div class="row row-sm">
            <div class="col-sm-12 col-xl-12">
                <div class="alert alert-solid alert-warning pd-y-20" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="d-flex align-items-center justify-content-start">
                    <i class="icon ion-ios-information  alert-icon tx-52 mg-r-20"></i>
                    <div>
                    <h5 class="mg-b-2 tx-">Pay Attention</h5>
                    <p class="mg-b-0 tx-gray tx-18">
                        Dear Colleague; Please complete your employment file.
                    </p>
                    </div>
                    </div><!-- d-flex -->
                </div><!-- alert -->
            </div>
        </div>
        <div class="row row-sm">
            <div class="col-sm-6 col-xl-6">
                <div class="card card-body card-dashboard-1542events1 bd-0 pd-25 bg-primary tx-12 mg-b-20">
                    <div class="d-xs-flex justify-content-between align-items-center tx-white mg-b-20">
                    <h6 class="tx-13 tx-uppercase tx-semibold tx-spacing-1 mg-b-0">TechnoFast Events</h6>
                    <span class="tx-12 tx-uppercase">in Our Company</span>
                    </div>
                    <p class="tx-sm tx-white tx-medium mg-b-0">The site of Medina restaurant site: 5days</p><hr>
                    <p class="tx-sm tx-white tx-medium mg-b-0">Alghadir Mobile App: 9days</p><hr>
                    <p class="tx-sm tx-white tx-medium mg-b-0">albahs design catalog: 11days</p><hr>
                    <p class="tx-sm tx-white tx-medium mg-b-0">albayan register domain: 24days</p><hr>
                    <p class="tx-sm tx-white tx-medium mg-b-0">Taregh Hotel website: 37days</p>
                </div>
                <div class="card bd-0 mg-b-20">
                    <div class="card-header bg-danger tx-white">
                        Incomplete Projects
                    </div>
                    <div class="card-body bd bd-t-0 rounded-bottom tx-12">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Title</th>
                                <th>Deadline</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="">
                                            Alavi School Network
                                        </a>
                                    </td>
                                    <td>
                                        10 days
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="">
                                            iraqsite.com
                                        </a>
                                    </td>
                                    <td>
                                        28 days
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
            <div class="col-sm-6 col-xl-6">
                <div class="card card-body bd-0 pd-25 tx-12 mg-b-20">
                    <div class="d-xs-flex justify-content-between align-items-center mg-b-20">
                    <h6 class="tx-13 tx-uppercase tx-semibold tx-spacing-1 mg-b-0">Todo List</h6>
                    <span class="tx-12 tx-uppercase">Private</span>
                    </div>
                    <table class="table table-hover table-striped">
                        <tr>
                            <td>
                                <label class="ckbox mp0">
                                    <input type="checkbox">
                                    <span>Contact Mr.Foad</span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="ckbox mp0">
                                    <input type="checkbox">
                                    <span>Buy fruit</span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="ckbox mp0">
                                    <input type="checkbox">
                                    <span>Repair Car</span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="ckbox mp0">
                                    <input type="checkbox">
                                    <span>Meeting with the director of the Hajj Organization</span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="ckbox mp0">
                                    <input type="checkbox">
                                    <span>Contact Ahmad</span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="todo-list" class="btn btn-sm btn-teal btn-block" >View All</a>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="card card-body bd-0 pd-25 tx-12 mg-b-20">
                    <div class="d-xs-flex justify-content-between align-items-center mg-b-20">
                    <h6 class="tx-13 tx-uppercase tx-semibold tx-spacing-1 mg-b-0">Notes</h6>
                    <span class="tx-12 tx-uppercase">Private</span>
                    </div>
                    <ul class="list-group list-group-striped mp0">
                        <li class="list-group-item rounded-top-0">
                            <a href="">
                            <p class="mg-b-0">
                            <i class="fa fa-circle tx-info mg-r-8"></i>
                            <strong class="tx-inverse tx-medium">Introduction to English</strong>
                            </p>
                            </a>
                        </li>
                        <li class="list-group-item rounded-top-0">
                            <a href="">
                            <p class="mg-b-0">
                            <i class="fa fa-circle tx-info mg-r-8"></i>
                            <strong class="tx-inverse tx-medium">Abstract of quran</strong>
                            </p>
                            </a>
                        </li>
                        <li class="list-group-item rounded-top-0">
                            <a href="">
                            <p class="mg-b-0">
                            <i class="fa fa-circle tx-info mg-r-8"></i>
                            <strong class="tx-inverse tx-medium">Note-1</strong>
                            </p>
                            </a>
                        </li>
                        <li class="list-group-item rounded-top-0">
                            <a href="">
                            <p class="mg-b-0">
                            <i class="fa fa-circle tx-info mg-r-8"></i>
                            <strong class="tx-inverse tx-medium">website Host info</strong>
                            </p>
                            </a>
                        </li>
                        <li class="list-group-item rounded-top-0">
                            <a href="">
                            <p class="mg-b-0">
                            <i class="fa fa-circle tx-info mg-r-8"></i>
                            <strong class="tx-inverse tx-medium">Nice latin Message</strong>
                            </p>
                            </a>
                        </li>
                        <li>
                            <a href="notes" class="btn btn-sm btn-teal btn-block mg-t-10" >View All</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection