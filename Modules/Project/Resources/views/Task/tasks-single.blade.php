@extends('Master.layout')

@section('title')
    {{"Task"}}
@endsection

@php 
    $path = [
        'name'          =>  'Project',
        'btn_content'   =>  "New Project",
        'is_modal'      =>  False,
        'btn_href'      =>  "projects.create"
    ];
@endphp
<!-- 
    path 
-->
@section('path')
    @include('Master.path')
@endsection



<!-- 
    Main Content
-->
@section('content')

<div class="row row-sm">
    <div class="col-sm-12 col-xl-8">
    <div class="row row-sm">
    <div class="col-sm-12 col-xl-8">
        <div class="card p15 mg-b-20">
            <div class="br-pagetitle">
                <i class="icon ion-flash"></i>
                <div>
                <h4>Setting up the documentation</h4>
                    <p class="mg-b-0">Parent Project: <a href="project-single" ><span class="tx-info"></span>Altareq Hotel Website</a></p>
                </div>
            </div>
        </div>
        <div class="card p15 mg-b-20">
            <div class="progress bg-light mg-b-5 mg-t-5 ht-25">
                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated wd-100p" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
            </div>
        </div>
        <div class="card table-wr-br mg-b-20">
            <table class="table mg-0 tx-center tx-12">
                <tr>
                    <td class="bg-danger tx-white">
                        Deadline: June 30
                    </td>
                    <td>
                        Start Date: June 27
                    </td>
                    <td>
                        Complate Date: June 29
                    </td>
                </tr>
            </table>	
        </div>
        
        <div class="card mg-b-20">
            <div class="card-header p5">
                Process Description
            </div>
            <div class="card-body p20">
                Process Details...
            </div>					
        </div>
        
        <div class="card mg-b-20">
            <div class="card-header bg-info tx-white p5">
                Actions
            </div>
            <div class="card-body p20">
                
                <div id="accordion2" class="accordion accordion-head-colored accordion-info mg-b-20" role="tablist" aria-multiselectable="true">
                    <div class="card">
        <div class="card-header" role="tab" id="headingTwo">
          <h6 class="mg-b-0">
            <a data-toggle="collapse" data-parent="#accordion2" href="#neweventform"
            aria-expanded="true" aria-controls="neweventform" class="tx-gray-800 transition">
              + New action
            </a>
          </h6>
        </div><!-- card-header -->

        <div id="neweventform" class="collapse" role="tabpanel" aria-labelledby="neweventform">
          <div class="card-body rounded-bottom pd-20">
            <div>
                <form class="form">
                    <input class="form-control mg-b-10" type="text" placeholder="title">
                    <textarea class="form-control mg-b-10 textarea" name="textbody" placeholder="Summary"></textarea>
                    <input type="file" name="file-1[]" id="file-1" class="inputfile mg-t-10"
data-multiple-caption="{count} files selected" multiple>
                    <label for="file-1" class="tx-white bg-info">
                    <i class="icon ion-ios-upload-outline tx-24"></i>
                    <span>Attachments...</span>
                    </label>
                    <input class="btn btn-block btn-info mg-b-10" value="Save">
                </form>  
            </div>
          </div>
        </div>
        </div>
                </div>
                
                <div class="card mg-b-20">
                    <div class="card-header bg-primary tx-white">
                        Content cheking...
                    </div>
                    <div class="card-body mp0">
                        <table class="table tx-12">
                            <thead class="bg-light">
                                <th>
                                    <span class="tx-11 font-normal">Hisam aljasem</span>
                                    <span class="tx-11 font-normal f-left">June 30 - 11:20</span>
                                </th>
                            </thead>
                            <tr>
                                <td>
                                    Action Summary...
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <a href="">
                                    <i class="icon ion-document non-i"></i><i class="mg-l-5 non-i">Attachments</i>
                                </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card mg-b-20">
                    <div class="card-header bg-primary tx-white">
                        Action title
                    </div>
                    <div class="card-body mp0">
                        <table class="table tx-12">
                            <thead class="bg-light">
                                <th>
                                    <span class="tx-11 font-normal">Executor</span>
                                    <span class="tx-11 font-normal f-left">date</span>
                                </th>
                            </thead>
                            <tr>
                                <td>
                                    Action Summary...
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <a href="">
                                    <i class="icon ion-document non-i"></i><i class="mg-l-5 non-i">Attachments</i>
                                </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                
                
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-xl-4">
        <div class="card mg-b-20">
            <div class="card-header p5">
                OPERATOR
            </div>
            <div class="card-body">
            <div class="row">
                <li class="media d-block d-sm-flex">
                  <img class="d-flex mg-r-10 mg-l-10 wd-80 rounded-circle" src="img/user-blank2.png">
                  <div class="media-body align-self-center mg-t-20 mg-sm-t-0">
                    <h6 class="tx-inverse mg-b-10">mahdi Hashem</h6>
                    <p>Programming Unit</p>
                  </div>
                </li>
            </div>
            </div>
        </div>
        <div class="card p15 mg-b-20">
            <a class="btn btn-block btn-light active" href="">PERCENT: 35 %</a>
        </div>
        <div class="card p15 mg-b-20">
            <a class="btn btn-block btn-success tx-white" href="">Status: Complated</a>
        </div>
    </div>
    </div>
    </div>
    
    <div class="col-sm-12 col-xl-4">
        
        <div id="accordion" class="accordion accordion-head-colored accordion-info mg-b-20" role="tablist" aria-multiselectable="true">
        <div class="card">
        <div class="card-header" role="tab" id="headingOne">
          <h6 class="mg-b-0">
            <a data-toggle="collapse" data-parent="#accordion" href="#newinlinenote"
            aria-expanded="true" aria-controls="newinlinenote" class="tx-gray-800 transition">
              + New Note
            </a>
          </h6>
        </div><!-- card-header -->

        <div id="newinlinenote" class="collapse" role="tabpanel" aria-labelledby="newinlinenote">
          <div class="card-block pd-20">
            <div>
                <form class="form">
                    <input class="form-control mg-b-10" type="text" placeholder="title">
                    <textarea class="form-control mg-b-10 textarea" name="textbody2" placeholder="Note body"></textarea>
                    <input type="file" name="file-1[]" id="file-1" class="inputfile"
data-multiple-caption="{count} files selected" multiple>
                    <label for="file-1" class="tx-white bg-info">
                      <i class="icon ion-ios-upload-outline tx-24"></i>
                      <span>Browse File...</span>
                    </label>
                    <input class="btn btn-block btn-info mg-b-10" value="Send">
                </form>  
            </div>
          </div>
        </div>
        </div>
        </div>
        
        <div class="card mg-b-20">
            <div class="card-header p5">
                Process Note
            </div>
            <div class="card-body">
                <div class="card bg-light mg-b-20">
                    <div class="card-body mp0">
                        <table class="table tx-12">
                            <thead>
                                <th>
                                    <span class="tx-11 font-normal">sadigh ahmad</span>
                                    <span class="tx-11 font-normal f-left">June 28 - 02:07</span>
                                </th>
                            </thead>
                            <tr>
                                <td>
                                body
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card bg-light mg-b-20">
                    <div class="card-body mp0">
                        <table class="table tx-12">
                            <thead>
                                <th>
                                    <span class="tx-11 font-normal">majed Karim</span>
                                    <span class="tx-11 font-normal f-left">June 27 - 20:44</span>
                                </th>
                            </thead>
                            <tr>
                                <td>
                                body
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <a href="">
                                    <i class="icon ion-document non-i"></i><i class="mg-l-5 non-i">Attachments</i>
                                </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
