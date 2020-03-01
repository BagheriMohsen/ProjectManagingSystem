@extends('Master.layout')

@section('title')
    {{"users"}}
@endsection


@section("scripts")
    <script src="{{ asset("panel/javascript/todo.js") }}"></script>
@endsection
<!-- 
    path 
-->
@section('path')
    @php 
        $path = [
            'name'          =>  'Users',
            'is_modal'      =>  True,

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
                <div class="row row-sm bg-gray mg-b-10">
                    <div class="col-md-3">
                    <form id="todo-create" action="{{ route("todolist.store") }}" >
                        @csrf
                            <div class="form-row">
                                <div class="input-group">
                                    <input name="desc" type="text" class="form-control" placeholder="+ New">
                                    <div class="input-group-append">
                                      <button class="btn btn-warning" type="submit"><i class="fa fa-chevron-right pd-r-3 pd-l-3"></i></button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row row-sm bg-white">
                        <div class="col-md-7">
                        <div class="card card-body bd-0 pd-25 tx-12 ">
                            <table class="table table-hover table-bordered">
                                @foreach($todo_lists as $todo_list)
                                    <tr>
                                        <td>
                                            <label class="ckbox mp0">
                                                <input type="checkbox">
                                                <span>
                                                    {{ $todo_list->desc }}
                                                </span>
                                            </label>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







@endsection


