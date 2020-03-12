@extends('Master.layout')

@section('title')
    {{"Team"}}
@endsection

@php 
    $path = [
            'name'          =>  'Teams',
            'btn_content'   =>  'New Team',
            'is_modal'      =>  True,
            'btn_href'      =>  '',
            'modal_name'    =>  'newgroup'
    ];
@endphp

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
    @include('user::Modals.create-teams')
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
                            <h6 class="mg-b-0 tx-14 tx-white tx-normal">Team List</h6>
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
                                                    <a id="item_delete" class="mg-l-10 tx-18 tx-danger" 
                                                        href="{{ route("users.groups.destroy",$group->id) }}" title="Delete">
                                                        <i class="icon ion-close"></i>
                                                    </a>
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
    
   







@endsection


