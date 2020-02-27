@extends('Master.layout')

@section('title')
    {{"user edit"}}
@endsection

<!-- 
    path 
-->
@section('path')
    @php 
        $path = [
            'name'          =>  'User edit',
        ]
    @endphp
    @include('Master.path')
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
                        <div class="card-header bg-success bd-0 d-flex align-items-center justify-content-between">
                        <h6 class="mg-b-0 tx-14 tx-white tx-normal">User Edit</h6>
                        </div>
                        <div class="card-body bd bd-t-0 rounded-bottom-0 table-responsive-sm">
                            <form action="" method="post">
                                @csrf
                                <div class="row row-sm">
                                    <div class="col-sm-12 col-xl-6">
                                        <label>First Name</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="col-sm-12 col-xl-6">
                                        <label>Last Name</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="row row-sm">
                                    <div class="col-sm-12 col-xl-6">
                                        <label>Unit</label>
                                        <select class="form-control">
                                            <option>Management Unit</option>
                                            <option>Network Unit</option>
                                            <option>Programming Unit</option>
                                            <option>Support Unit</option>
                                            <option>Research Unit</option>
                                            <option>Finance Unit</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-xl-6">
                                        <label>Job title</label>
                                        <select class="form-control">
                                            <option>Manager</option>
                                            <option selected>Staff</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row row-sm">
                                    <div class="col-sm-12 col-xl-6">
                                        <label>E-Mail</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="col-sm-12 col-xl-6">
                                        <label>Mobile Number</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="row row-sm">
                                    <div class="col-sm-12 col-xl-6">
                                        <label>Username</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="col-sm-12 col-xl-6">
                                        <label>Verfication Code</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="row row-sm">
                                    <div class="col-sm-12 col-xl-6 mg-t-20">
                                        <input type="file" name="file-1[]" id="file-1" class="inputfile"
                                        data-multiple-caption="{count} files selected" multiple>
                                        <label for="file-1" class="tx-white bg-warning">
                                            <i class="icon ion-ios-upload-outline tx-24"></i>
                                            <span>Photo</span>
                                        </label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer bd bd-t-0 d-flex justify-content-center">
                            <a class="btn btn-success active" disabled>Submit</a>
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