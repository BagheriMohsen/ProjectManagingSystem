@extends('Master.layout')

@section('title')
    {{"users"}}
@endsection


@php

    // path option
    $path = [
            'name'          =>  'Users',
            'btn_content'   =>  'New User',
            'is_modal'      =>  True,
            'btn_href'      =>  '',
            'modal_name'    =>  'newuser'
    ];

    // page_title option
    $page_title = [
        "title"     =>  "Users",
        "sub_title" =>  "Techno Fast",
        "icon"      =>  '<i class="icon ion-person-stalker"></i>'
    ]
@endphp

<!-- 
    Page Title 
-->
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
    @include('Master.Modal.create-users')
@endsection


<!-- 
    Main Content
-->
@section('content')
 
    @include('Messages.errors')
    @include('Messages.message')


       
    <div class="row row-sm">
        <div class="col-sm-12 col-xl-12">
            <div class="timesheet-wr">
                <div class="row">
                    <div class="col-xs-12 col-xl-12">
                    <div class="card bd-0 mg-b-20">
                        <div class="card-header bg-side-panel bd-0 d-flex align-items-center justify-content-between">
                        <h6 class="mg-b-0 tx-14 tx-white tx-normal">Users List</h6>
                        </div>
                        <div class="card-body bd bd-t-0 rounded-bottom-0 table-responsive-sm">
                            <table class="table table-hover table-striped table-bordered  tx-center">
                                <thead>
                                    <th>Row</th>
                                    <th>Name</th>
                                    <th>Unit</th>
                                    <th>Username</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>1</td>
                                        <td> {{ $user->first_name." ".$user->last_name }} </td>
                                        <td>
                                            @php 
                                                $role_name = $user->getRoleNames()->first();
                                            @endphp
                                            @if($role_name == "admin")
                                                {{"All of them"}}
                                            @elseif(is_null($user->unit_id)) 
                                                {{"---"}}
                                            @else
                                                {{ $user->unit->name }}
                                            @endif
                                        </td>
                                        <td>{{ $user->phone_number }}</td>
                                        <td>
                                            @if($user->is_active)
                                                <i class="fas fa-check text-green hvr-grow"></i>
                                            @else 
                                                <i class="fas fa-times text-danger hvr-grow"></i>
                                            @endif
                                        </td>
                                        <td>
                                            <a class="mg-l-10 tx-18 px-1 tx-success hvr-grow" href="" title="Send Message">
                                                {{-- <img class="icon" src="{{ asset("panel/icon/send.svg") }}" alt=""> --}}
                                                <i class="fas fa-paper-plane"></i>
                                            </a>
                                            <a class="mg-l-10 tx-18 px-1 tx-info hvr-grow" href="{{ route("users.edit",$user->id) }}" title="Edit">
                                                {{-- <img class="icon" src="{{ asset("panel/icon/edit.svg") }}" alt=""> --}}
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            @if(!$role_name == "admin")
                                                <a class="mg-l-10 tx-18 px-1 tx-danger hvr-grow" href="" title="Delete">
                                                    <i class="fas fa-trash"></i>
                                                    {{-- <img class="icon" src="{{ asset("panel/icon/delete.png") }}" alt=""> --}}
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                        <div class="card-footer bd bd-t-0 d-flex justify-content-between">
                            <ul>
                                {!! $users->render() !!}
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







@endsection


@section("scripts")
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