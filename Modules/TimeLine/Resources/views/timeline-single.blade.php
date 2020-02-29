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
            'name'          =>  'TimeLine Single',
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
        <img class="card-img-top img-fluid" src="{{asset('panel/img/img17.jpg')}}" alt="Image">
        <div class="card-header">
            <p class="card-text">
                <li class="media d-block d-sm-flex">
                    <img class="d-flex mg-r-20 wd-60 rounded-circle" src="{{asset('panel/img/user-3ajjad.png')}}" alt="Image">
                    <div class="media-body align-self-center mg-t-20 mg-sm-t-0 tx-11">
                    <a href="">
                        <h6 class="tx-inverse mg-b-10">
                            Title of post
                        </h6>
                    </a>
                        Written by Admin in 20 june 2020
                    </div>
                </li>
            </p>
        </div>
        <div class="card-body">
            <h5 class="card-title">Title of Post</h3>
            <p class="card-text">
                Lorem ipsum dolor sit amet, nec noster inermis ut, apeirian gubergren interpretaris et has. Ad lucilius atomorum intellegat usu, ne cum enim exerci diceret. Audiam verear utroque ea mea. Eruditi elaboraret nec ei, et labore quidam cum.

                Ad perfecto volutpat expetendis has. Malorum prodesset sit ut, adipisci complectitur per an. Animal nonumes dissentiet vel te, est et laudem putent, at sed mucius vivendo reformidans. An sint suscipit has, omnes affert sea cu, diam liber meliore per ad. Pri assum evertitur forensibus ea.
                
                At labore fabellas facilisi mei, audire tamquam rationibus eam ne. Discere detracto lobortis no per, eam congue maiestatis ei. Ei sit brute affert deleniti, doming praesent accusamus ei qui, partem adipisci tacimates no sit. Vis etiam simul ne, eam altera latine dissentiunt ea. His nostrum expetenda reprehendunt ad. Qui in facer augue, dicat epicuri platonem vel at, paulo torquatos honestatis ut mea.
                
                Nisl omittam urbanitas nam te, latine accusamus consetetur an eos, id blandit maluisset sententiae vix. Menandri corrumpit necessitatibus ei sit. Ei justo placerat sea, vim ex erat prima tibique. Sea mollis quaeque suscipiantur ne, atomorum tractatos ea mei.
                
                Salutatus laboramus scribentur id nam. Hinc purto dicunt in vix, mel quem dicant te. Qui solet oratio semper an, odio eleifend ius id, wisi posse mei no. In quot consul vituperata vis. At duo tractatos constituto. Ut essent mediocritatem quo.  
            </p>
        </div>
        <div class="card-footer">
            <a href="#">
                #test
            </a>
            <a href="#">
                #test2
            </a>
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
                <form action="#">
                    <div class="form-group">
                        <textarea class="form-control" style="height:150px"></textarea>
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
                <li class="clearfix">
                    <img src="https://bootdey.com/img/Content/user_1.jpg" class="avatar" alt="">
                    <div class="post-comments">
                        <p class="meta">Dec 18, 2014 <a href="#">JohnDoe</a> says : <a class="float-right" href="#" data-toggle="modal" data-target="#basicExampleModal"><i class="fas fa-reply fa-2x pr-2"></i><small>Reply</small></a></i></p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Etiam a sapien odio, sit amet
                        </p>
                    </div>
                </li>
                <li class="clearfix">
                    <img src="https://bootdey.com/img/Content/user_2.jpg" class="avatar" alt="">
                    <div class="post-comments">
                        <p class="meta">Dec 19, 2014 <a href="#">JohnDoe</a> says : <a href="#"><a class="float-right"><i class="fas fa-reply fa-2x pr-2"></i><small>Reply</small></a></i></p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Etiam a sapien odio, sit amet
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
