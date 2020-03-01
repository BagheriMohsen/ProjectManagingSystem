@extends('Master.layout')

@section('title')
    {{"users"}}
@endsection


@section("scripts")
    <script src="{{ asset("panel/javascript/todo.js") }}"></script>
    <script src="{{ asset("/js/app.js") }}"></script>

    <script>
        new Vue({
            el:"#app",
            data(){
                return {
                    message:"hello world!",
                }
            }
        });
    </script>

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

    <div id="app">
        <todo-list></todo-list>
    </div
       
   







@endsection


