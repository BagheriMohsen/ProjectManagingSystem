@extends('Master.layout')

@section('title')
    {{"users"}}
@endsection


@section("scripts")
    <script src="{{ asset("/js/app.js") }}"></script>
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

<h2>{{ Auth::user()->id }}</h2>


<!-- 
    Main Content
-->
@section('content')
 
    @include('Messages.errors')
    @include('Messages.message')
   
    <div id="app">
        <todo-list></todo-list>
    </div>
@endsection


