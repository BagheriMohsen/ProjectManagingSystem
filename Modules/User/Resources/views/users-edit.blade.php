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
                        <div class="card-header bg-secondary py-3 bd-0 d-flex align-items-center">
                            <i class="icon ion-ios-person-outline text-white"></i>
                            <h6 class="mg-b-0 tx-14 tx-white tx-normal">
                                {{ $user->first_name." ".$user->last_name }}
                            </h6>
                        </div>
                        <div class="card-body bd bd-t-0 rounded-bottom-0 table-responsive-sm">
                            <form action="{{ route("users.update",$user->id) }}" method="post" enctype="multipart/form-data"  >
                                @csrf
                                <div class="row row-sm">
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input name="first_name" value="{{ $user->first_name }}" name="first_name" class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input name="last_name" value="{{ $user->last_name }}" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xl-6 text-center">
                                        @if(is_null($user->avatar))
                                            <img style="width:147px;" src="{{asset('panel/icon/user.svg')}}"
                                            class="rounded-circle mg-t-20 bg-light" style="width:70%; height:auto;">
                                        @else 
                                            <img style="width:147px;" src="storage/{{ $user->avatar }}"
                                            class="rounded-circle mg-t-20" style="width:70%; height:auto;">
                                        @endif
                                    </div>
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="form-group">
                                            <label>Unit</label>
                                            <select name="unit" class="form-control">
                                                @foreach($units as $unit)
                                                    <option value="{{ $unit->id }}"
                                                        @if($unit->id == $user->unit_id)
                                                            selected
                                                        @endif
                                                        >{{ $unit->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input name="phone_number" value="{{ $user->phone_number }}"  class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="form-group">
                                            <label>Job title</label>
                                            <input value="{{ $user->job_title }}" class="form-control" type="text" name="job_title">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input name="password" class="form-control" type="password">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xl-6">
                                        <input id="checkActive" class="form-check-input" @if($user->is_active) checked @endif type="checkbox" name="is_active">
                                        <label class="form-check-label" for="checkActive">User is Active?</label>
                                    </div>
                                    <div class="col-sm-12 col-xl-6">
                                        <input type="file" name="avatar" id="file-1" class="inputfile"
                                        data-multiple-caption="{count} files selected" multiple>
                                        <label for="file-1" class="tx-white bg-warning">
                                        <i class="icon ion-ios-upload-outline tx-24"></i>
                                        <span>Avatar</span>
                                        </label>
                                    </div>
                                    <div class="col-12">
                                        <hr>
                                    </div>
                                    
                                    <div class="col-sm-12 col-xl-6">
                                        <button type="submit" class="btn btn-sm btn-success">
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </form>
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