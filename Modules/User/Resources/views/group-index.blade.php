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
            'route_name'    =>  'timeline.store',
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
                        <div class="card-header bg-success bd-0 d-flex align-items-center justify-content-between">
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
                                    <tr>
                                        <td>1</td>
                                        <td>alifatemi</td>
                                        <td>Active</td>
                                        <td>
                                            <a class="mg-l-10 tx-18 tx-primary" href="" title="Send Message"><i class="icon ion-chatbubble-working"></i></a>
                                            <a class="mg-l-10 tx-18 tx-info" href="" title="Edit"><i class="icon ion-gear-a"></i></a>
                                            <a class="mg-l-10 tx-18 tx-danger" href="" title="Delete"><i class="icon ion-close"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer bd bd-t-0 d-flex justify-content-between">
                            <a class="btn btn-light active btn-sm" disabled>TechnoFast</a>
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