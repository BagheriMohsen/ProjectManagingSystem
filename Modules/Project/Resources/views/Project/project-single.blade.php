@extends('Master.layout')

@section('title')
    {{"Project single"}}
@endsection
@php

    // path option
    $path = [
            'name'          =>  'Project',
            'is_modal'      =>  False,
            'btn_href'      =>  ''
    ];

    // page_title option
    $page_title = [
        "title"     =>  "Time Line",
        "sub_title" =>  "Techno Fast",
        "icon"      =>  '<i class="menu-item-icon icon ion-coffee"></i>'
    ]
@endphp

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
<div class="row row-sm">
    <div class="col-sm-12 col-xl-8">
    <div class="row row-sm">
    <div class="col-sm-12 col-xl-8">
        <div class="card p15 mg-b-20">
            <div class="br-pagetitle">
                <i class="icon ion-ios-gear-outline"></i>
                <div>
                <h4>Altareq Hotel Website</h4>
                <p class="mg-b-0">Techno Fast</p>
                </div>
            </div>
                <div class="tx-center mg-b-4 mg-t-4 tx-13">
                    Category: Web Design
                </div>
        </div>
    </div>
    <div class="col-sm-12 col-xl-4">
        <div class="card mg-b-20">
            <div class="card-header p5">
                project manager
            </div>
            <div class="card-body">
            <div class="row">
                <li class="media d-block d-sm-flex">
                  <img class="d-flex mg-r-10 mg-l-10 wd-80 rounded-circle" src="img/user-hashemi.png">
                  <div class="media-body align-self-center mg-t-20 mg-sm-t-0">
                    <h6 class="tx-inverse mg-b-10">Seyed Ali Alavi</h6>
                    <p>Programming Unit</p>
                  </div>
                </li>
            </div>
            </div>
        </div>
    </div>
    </div>
    <div class="row row-sm">
        <div class="col-sm-12">
        <div class="row row-sm mg-b-20">
            <div class="col-sm-12 col-xl-8">
                <div class="card p15 min-h-63">
                <div class="progress bg-light mg-b-5 mg-t-5 ht-20">
                    <div class="progress-bar bg-info progress-bar-striped progress-bar-animated wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">35%</div>
                </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-4">
                <div class="card p15 min-h-63">
                    <a class="btn btn-block bg-grandeur tx-white btn-sm" href="">Status: In Progress</a>
                </div>
            </div>
            
        </div>
        
        <div class="card mg-b-20 table-wr-br">
            <table class="table mg-0 tx-center tx-12">
                <tr>
                    <td>
                        Request date: June 25
                    </td>
                    <td class="bg-danger tx-white">
                        Deadline: July 11
                    </td>
                    <td>
                        Start date: June 28
                    </td>
                    <td>
                        Complate Date: -
                    </td>
                </tr>
            </table>	
        </div>
        
        <div class="card mg-b-20">
            <div class="card-header p5">
                Project Summary
            </div>
            <div class="card-body p20">
                project description...
            </div>					
        </div>
        
        <div class="card mg-b-20">
            <div class="card-header p5">
                Processes
            </div>
            <div class="card-body p20 table-wr-br">
                <table class="table table-hover table-striped tx-12 tx-center">
                    <thead>
                        <th>
                            row
                        </th>
                        <th>
                            title
                        </th>
                        <th>
                            operator
                        </th>
                        <th>
                            Deadline
                        </th>
                        <th>
                            Percent of the project
                        </th>
                        <th>
                            Priority
                        </th>
                        <td>
                            Status
                        </td>
                    </thead>
                    <tbody>
                        <tr>
                        <td>
                            1
                        </td>
                        <td>
                            <a href="task-single">
                                Setting up the documentation
                            </a>
                        </td>
                        <td>
                            mahdi Hashem
                        </td>
                        <td>
                            June 30
                        </td>
                        <td>
                            35 %
                        </td>
                        <td>
                            High
                        </td>
                        <td>
                            <button class="btn btn-sm btn-success">
                                Complated
                            </button>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            2
                        </td>
                        <td>
                            <a href="task-single">
                                Design Sketch
                            </a>
                        </td>
                        <td>
                            Hisam aljasem
                        </td>
                        <td>
                            July 02
                        </td>
                        <td>
                            10 %
                        </td>
                        <td>
                            Normal
                        </td>
                        <td>
                            <button class="btn btn-sm btn-warning">
                                In Progress 
                            </button>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            3
                        </td>
                        <td>
                            <a href="task-single">
                            Design Psd Template
                            </a>
                        </td>
                        <td>
                            Sajjad Rafie 
                        </td>
                        <td>
                            July 07
                        </td>
                        <td>
                            10 %
                        </td>
                        <td>
                            High
                        </td>
                        <td>
                            <button class="btn btn-sm btn-warning">
                                In Progress 
                            </button>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            4
                        </td>
                        <td>
                            <a href="task-single">
                            Define Database
                            </a>
                        </td>
                        <td>
                            sadigh ahmad
                        </td>
                        <td>
                            July 07
                        </td>
                        <td>
                            15 %
                        </td>
                        <td>
                            High
                        </td>
                        <td>
                            <button class="btn btn-sm btn-light">
                                incomplete
                            </button>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            5
                        </td>
                        <td>
                            <a href="task-single">
                            Backend Programming 
                            </a>
                        </td>
                        <td>
                            Sajjad Rafie
                        </td>
                        <td>
                            July 08
                        </td>
                        <td>
                            10 %
                        </td>
                        <td>
                            High
                        </td>
                        <td>
                            <button class="btn btn-sm btn-light">
                                incomplete
                            </button>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            6
                        </td>
                        <td>
                            <a href="task-single">
                            Frontend Programming
                            </a>
                        </td>
                        <td>
                            Salah salman
                        </td>
                        <td>
                            July 09
                        </td>
                        <td>
                            20 %
                        </td>
                        <td>
                            High
                        </td>
                        <td>
                            <button class="btn btn-sm btn-light">
                                incomplete
                            </button>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card mg-b-20 table-wr-br">
            <table class="table mg-0 tx-center">
                <tr>
                    <td class="bg-dark tx-white">Observers</td>
                    <td>Hussain Fatemi</td>
                    <td>Taha muhammad</td>
                </tr>
            </table>	
        </div>
        </div>	
    </div>
    </div>
    <div class="col-sm-12 col-xl-4">
        <div class="card mg-b-20">
            <div class="card-header p5">
                Information
            </div>
            <div class="card-body">
            <div class="row">
                <ul class="w100">
                    <li>
                        Applicant: Management unit
                    </li>
                    <li>
                        Operating unit: Programming Unit
                    </li>
                    <li>
                        Priority: High
                    </li>
                </ul>
            </div>
            </div>
        </div>
        
        <div id="accordion" class="accordion accordion-head-colored accordion-info mg-b-20" role="tablist" aria-multiselectable="true">
        <div class="card">
        <div class="card-header" role="tab" id="headingOne">
          <h6 class="mg-b-0">
            <a data-toggle="collapse" data-parent="#accordion" href="#newinlinenote"
            aria-expanded="true" aria-controls="newinlinenote" class="tx-gray-800 transition">
              + New Note
            </a>
          </h6>
        </div><!-- card-header -->

        <div id="newinlinenote" class="collapse" role="tabpanel" aria-labelledby="newinlinenote">
          <div class="card-block pd-20">
            <div>
                <form class="form">
                    <input class="form-control mg-b-10" type="text" placeholder="title">
                    <textarea name="textbody" class="form-control mg-b-10 textarea" placeholder="body"></textarea>
                    <input type="file" name="file-1[]" id="file-1" class="inputfile"
data-multiple-caption="{count} files selected" multiple>
                    <label for="file-1" class="tx-white bg-info">
                      <i class="icon ion-ios-upload-outline tx-24"></i>
                      <span>Select File...</span>
                    </label>
                    <input class="btn btn-block btn-info mg-b-10" value="Send">
                </form>  
            </div>
          </div>
        </div>
        </div>
        </div>
        
        <div class="card mg-b-20">
            <div class="card-header p5">
                Project's Notes
            </div>
            <div class="card-body">
                <div class="card bg-light mg-b-20">
                    <div class="card-body mp0">
                        <table class="table tx-12">
                            <thead>
                                <th>
                                    <span class="tx-11 font-normal">Sajjad Rafie</span>
                                    <span class="tx-11 font-normal f-right">july 1 - 13:20</span>
                                </th>
                            </thead>
                            <tr>
                                <td>
                                body
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <a href="">
                                    <i class="icon ion-document non-i"></i><i class="mg-l-5 non-i">Attachments...</i>
                                </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card bg-light mg-b-20">
                    <div class="card-body mp0">
                        <table class="table tx-12">
                            <thead>
                                <th>
                                    <span class="tx-11 font-normal">Ali Fatemi </span>
                                    <span class="tx-11 font-normal f-right">july 4 - 07:59</span>
                                </th>
                            </thead>
                            <tr>
                                <td>
                                body
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <a href="">
                                    <i class="icon ion-document non-i"></i><i class="mg-l-5 non-i">Attachments...</i>
                                </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card bg-light mg-b-20">
                    <div class="card-body mp0">
                        <table class="table tx-12">
                            <thead>
                                <th>
                                    <span class="tx-11 font-normal">Hussain Fatemi</span>
                                    <span class="tx-11 font-normal f-right">july 4 - 10:00</span>
                                </th>
                            </thead>
                            <tr>
                                <td>
                                body
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <a href="">
                                    <i class="icon ion-document non-i"></i><i class="mg-l-5 non-i">Attachments...</i>
                                </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card bg-light mg-b-20">
                    <div class="card-body mp0">
                        <table class="table tx-12">
                            <thead>
                                <th>
                                    <span class="tx-11 font-normal">Amir Hasib</span>
                                    <span class="tx-11 font-normal f-right">july 09 - 21:48</span>
                                </th>
                            </thead>
                            <tr>
                                <td>
                                body
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <a href="">
                                    <i class="icon ion-document non-i"></i><i class="mg-l-5 non-i">Attachments...</i>
                                </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




@section('scripts')
    <script>
      $(function(){

        'use strict';

        $( '.inputfile' ).each( function()
        {
          var $input	 = $( this ),
            $label	 = $input.next( 'label' ),
            labelVal = $label.html();

          $input.on( 'change', function( e )
          {
            var fileName = '';

            if( this.files && this.files.length > 1 )
              fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
            else if( e.target.value )
              fileName = e.target.value.split( '\\' ).pop();

            if( fileName )
              $label.find( 'span' ).html( fileName );
            else
              $label.html( labelVal );
          });

          // Firefox bug fix
          $input
          .on( 'focus', function(){ $input.addClass( 'has-focus' ); })
          .on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
        });

      });
    </script>
@endsection