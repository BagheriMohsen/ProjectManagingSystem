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
    <div class="card col-12">
        <img class="card-img-top img-fluid" src="/storage/{{ $time_line->image }}" alt="Image">
        <div class="card-header">
            <p class="card-text">
                <li class="media d-block d-sm-flex">
              
                    @php 
                        $first_name = $time_line->user->first_name;
                        $last_name  = $time_line->user->last_name;
                    @endphp
                    @if(is_null($time_line->user->avatar))
                        <img class="d-flex mg-r-20 wd-60 rounded-circle" 
                        src="{{ Avatar::create($first_name." ".$last_name)->toBase64() }}"
                        alt="Image" />
                    @else 
                        <img class="d-flex mg-r-20 wd-60 rounded-circle" 
                        src="/storage/{{ $time_line->user->avatar }}"
                        alt="Image" />
                    @endif
                    
                    
                    
                    <div class="media-body align-self-center mg-t-20 mg-sm-t-0 tx-11">
                    <a href="">
                        <h6 class="tx-inverse mg-b-10">
                            {{ $time_line->title }}
                        </h6>
                    </a>
                        Written by 
                        {{ $first_name." ".$last_name }}
                        in 
                        {{ $time_line->created_at }}
                    </div>
                </li>
            </p>
        </div>
        <div class="card-body">
            <h5 class="card-title">
                {{ $time_line->title }}
            </h3>
            <div class="card-text">
                {!! $time_line->desc !!}
            </div>
        </div>
        <div class="card-footer">
            @foreach($time_line->tags as $tag)
                <a href="#">
                    #{{$tag->name}}
                </a>
            @endforeach

        </div>
    </div>
</div>
<div class="row row-sm mt-4">
    <div class="col-12 mt-3">
        <div class="mx-auto" style="max-width:750px">
            <div class="mb-2">
                <h5 class="text-secondary mb-0"><i class="fas fa-pen pr-2 fa-2x" style="width: .8em;"></i> Write your comment:</h5>
            </div>
            <div class="pt-0">
                <form action="{{ route("timeline_comment.send_comment",$time_line->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <textarea name="message" class="form-control" style="height:150px" required></textarea>
                        <button class="btn btn-green btn-sm" type="submit">
                            send
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row row-sm">
    <div class="col-md-12">
        <div class="blog-comment mt-4">
            <h3 class="text-secondary mb-3">Comments</h3>
            <hr/>
            <ul class="comments">
                
                @foreach( $comments as $comment  )
                <li class="clearfix">
                    @if(is_null($comment->user->avatar))
                        <img 
                        src="{{ Avatar::create($comment->user->first_name." ".$comment->user->last_name)->toBase64() }}"
                         class="avatar" alt="">
                    @else 
                        <img 
                        src="/storage/{{ $comment->user->avatar }}"
                        class="avatar" alt="">
                    @endif
                    
                    <div class="post-comments">
                        <p class="meta">
                            {{ $comment->created_at }}
                            <a href="#">
                                {{ $comment->user->first_name." ".$comment->user->last_name }}     
                            </a> says : 
                            <a class="float-right" href="#" 
                                data-toggle="modal" data-target="#basicExampleModal">
                                <i class="fas fa-reply fa-2x pr-2"></i>
                                <small>Reply</small>
                            </a>
                        </p>
                        <p>
                            {{ $comment->message }}
                        </p>
                    </div>
                    
                    <ul class="comments">
                        <li class="clearfix">
                            <img src="https://bootdey.com/img/Content/user_3.jpg" class="avatar" alt="">
                            <div class="post-comments">
                                <p class="meta">Dec 20, 2014 <a href="#">JohnDoe</a> says : <a href="#"><a class="float-right"><i class="fas fa-reply fa-2x pr-2"></i><small>Reply</small></a></i></p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Etiam a sapien odio, sit amet
                                </p>
                            </div>
                        </li>
                        <li class="clearfix">
                            <img src="https://bootdey.com/img/Content/user_3.jpg" class="avatar" alt="">
                            <div class="post-comments">
                                <p class="meta">Dec 20, 2014 <a href="#">JohnDoe</a> says : <a href="#"><a class="float-right"><i class="fas fa-reply fa-2x pr-2"></i><small>Reply</small></a></i></p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Etiam a sapien odio, sit amet
                                </p>
                            </div>
                        </li>
                    </ul>

                </li>
                @endforeach
                
            </ul>
        </div>
    </div>
</div>



<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-md modal-notify modal-dark" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="tx-16 mg-b-0 tx-uppercase tx-inverse text-white">Your reply:</h6>
      </div>
      <div class="modal-body">
          <form action="#" method="">
            <div class="form-group">
                <textarea class="form-control" style="height:100px"></textarea>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-sm btn-light-green">send</button>
      </div>
    </div>
  </div>
</div>










@endsection
