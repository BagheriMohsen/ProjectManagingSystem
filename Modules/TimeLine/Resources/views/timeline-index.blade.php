@extends('Master.layout')

@section('title')
    {{"Time Line"}}
@endsection

<!-- 
    path 
-->
@section('path')
    @php 
        $path = [
            'name'          =>  'TimeLine',
            'btn_content'   =>  'New Discuss',
            'is_modal'      =>  True,
            'btn_href'      =>  ''
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
            'image'         =>  True,
            'file'          =>  False,
            'desc'          =>  True,
            'tags'          =>  True,
            'tags_item'     =>  array(),
            'title'         =>  True
        ]
    @endphp
    @include('Master.Modal.create-modal')
@endsection


<!-- 
    Main Content
-->
@section('content')
 
    @include('Messages.errors')
    @include('Messages.message')


<div class="row row-sm">
    <div class="card-columns">
        @foreach($time_lines as $time_line)
            <div class="card">
                
                <img class="card-img-top img-fluid" src="{{asset('panel/img/img17.jpg')}}" alt="Image">
                <div class="card-body">
                    <p class="card-text">
                        <li class="media d-block d-sm-flex">
                            <img class="d-flex mg-r-20 wd-60 rounded-circle" src="{{asset('panel/img/user-3ajjad.png')}}" alt="Image">
                            <div class="media-body align-self-center mg-t-20 mg-sm-t-0 tx-11">
                            <a href="">
                                <h6 class="tx-inverse mg-b-10">
                                    {{$time_line->title}}
                                </h6>
                            </a>
                                {!! Str::limit($time_line->desc, 20) !!}

                                <a href="">
                                    More...
                                </a>
                            </div>
                        </li>
                    </p>
                </div>
                <div class="card-footer">
                    @foreach($time_line->tags as $tag)
                        <a href="#">
                            #{{$tag->name}}
                        </a>
                    @endforeach

                    @if(auth()->check())
                        @if($time_line->user_id == auth()->user()->id)
                            <a href="{{route('timeline.destroy',$time_line->id)}}"
                                style="float:right;" class="text-danger" >
                                    <i class="far fa-trash-alt"></i>
                            </a>
                        @endif
                    @endif

                </div>
            </div>
        @endforeach
    </div>
    <div class="ht-60 bd-0 d-flex align-items-center justify-content-center mg-b-20">
        <ul class="pagination pagination-basic pagination-circle mg-b-0">
            {!! $time_lines->render() !!}
        </ul>
    </div>
</div>




@endsection
