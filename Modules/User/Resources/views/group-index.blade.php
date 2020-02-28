@extends('Master.layout')

@section('title')
    {{"Group"}}
@endsection

<!-- 
    path 
-->
@section('path')
    @php 
        $path = [
            'name'          =>  'Groups',
            'btn_content'   =>  'New Group',
            'is_modal'      =>  True,
            'btn_href'      =>  '',
            'modal_name'    =>  'newgroup'
        ]
    @endphp
    @include('Master.path')
@endsection

<!-- 
    Modal for store data
-->
@section('create_modal')
    @php 
        $text_editor = [
            'route_name'    =>  'users.groups.store',
            'image'         =>  False,
            'file'          =>  False,
            'desc'          =>  False,
            'tags'          =>  true,
            'tags_item'     =>  array(),
            'title'         =>  False
        ]
    @endphp
    @include('Master.Modal.create-groups')
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
                            <h6 class="mg-b-0 tx-14 tx-white tx-normal">Groups List</h6>
                            </div>
                            <div class="card-body bd bd-t-0 rounded-bottom-0 table-responsive-sm">
                                <table class="table table-hover table-striped table-bordered  tx-center">
                                    <thead>
                                        <th>Row</th>
                                        <th>Group Name</th>
                                        <th>Users</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($groups as $group)
                                            <tr>
                                                <td>1</td>
                                                <td>{{ $group->name }}</td>
                                                <td>Active</td>
                                                <td>
                                                    <a class="mg-l-10 tx-18 tx-primary" href="" title="Send Message"><i class="icon ion-chatbubble-working"></i></a>
                                                    <a class="mg-l-10 tx-18 tx-info" href="" title="Edit"><i class="icon ion-gear-a"></i></a>
                                                    <a class="mg-l-10 tx-18 tx-danger" href="" title="Delete"><i class="icon ion-close"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer bd bd-t-0 d-flex justify-content-between">
                                <ul>
                                    {!! $groups->render() !!}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-sm-12 col-xl-12">
            <div class="br-pagetitle">
                <i class="icon ion-ios-person-outline"></i>
                <div>
                <h4>Edit profile</h4>
                {{-- <p class="mg-b-0">Edit firstname and lastname</p> --}}
                </div>
            </div>
            <br>
            
            <form id="" action="" method="POST">
                @csrf
                <div class="addproject-wr">
                    <div class="row row-sm mp0">
                        <div class="col-12 col-sm-6">
                            <div id="addproject-wizard1" class="mg-b-20">
                                <h5>User Info</h5>
                                <section class="border1ccc p20 mg-b-20">
                                    <div class="row row-sm">
                                        <div class="col-sm-12">
                                            <div class="card mg-b-20 p20">
                                                <div class="row row-sm">
                                                    <div class="col-12 form-group">
                                                        <label>FirstName</label>
                                                        <input class="form-control" type="text" placeholder="">
                                                    </div>
                                                    <div class="col-12 form-group">
                                                        <label>LastName</label>
                                                        <input class="form-control" type="text" placeholder="">
                                                    </div>
                                                    <div class="col-12 text-center">
                                                        <button type="submit" class="btn btn-secondary px-3 py-2">
                                                            save
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>

               
            
            </form>
            
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-sm-12 col-xl-12">
            <div class="br-pagetitle">
                <i class="icon ion-ios-locked-outline"></i>
                <div>
                <h4>Change password</h4>
                {{-- <p class="mg-b-0">Be careful with your password</p> --}}
                </div>
            </div>
            <br>
            
            <form id="" action="" method="POST">
                @csrf
                <div class="addproject-wr">
                    <div class="row row-sm mp0">
                        <div class="col-12 col-sm-6">
                            <div id="addproject-wizard1" class="mg-b-20">
                                <h5>Please insert your old and new password</h5>
                                <section class="border1ccc p20 mg-b-20">
                                    <div class="row row-sm">
                                        <div class="col-sm-12">
                                            <div class="card mg-b-20 p20">
                                                <div class="row row-sm">
                                                    <div class="col-12 form-group">
                                                        <label>Old password</label>
                                                        <input type="password" class="form-control" type="text" placeholder="">
                                                    </div>
                                                    <div class="col-12 form-group">
                                                        <label>New password</label>
                                                        <input type="password" class="form-control" type="text" placeholder="">
                                                    </div>
                                                    <div class="col-12 form-group">
                                                        <label>Confirm new password</label>
                                                        <input type="password" class="form-control" type="text" placeholder="">
                                                    </div>
                                                    <div class="col-12 text-center">
                                                        <button type="submit" class="btn btn-secondary px-3 py-2">
                                                            save
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>

               
            
            </form>
            
        </div>
    </div>







@endsection


@section("scripts")
<script>

    $(document).ready(function() {
      $("#grouptags").select2({
        dropdownParent: $("#newgroup")
      });
    });
    
</script>
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