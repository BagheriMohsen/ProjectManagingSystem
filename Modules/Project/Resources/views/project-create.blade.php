@extends('Master.layout')

@section('title')
    {{"New Project"}}
@endsection

<!-- 
    path 
-->
@section('path')
    @php 
        $path = [
            'name'          =>  'New Project',
            'is_modal'      =>  True,
            'btn_href'      =>  ''
        ]
    @endphp
    @include('Master.path')
@endsection




<!-- 
    Main Content
-->
@section('content')
    <div class="row row-sm">
        <div class="col-sm-12 col-xl-12">
            <div class="br-pagetitle">
                <i class="icon ion-ios-gear-outline"></i>
                <div>
                <h4>+ New Project</h4>
                <p class="mg-b-0">Techno Fast</p>
                </div>
            </div>
            <br>
            
            <form id="project_create" action="{{route("project.store")}}" method="POST">
                @csrf
                
            <div class="addproject-wr">
                <div class="row row-sm mp0">
                    <div class="col-xs-12 col-xl-12">
                    <div id="addproject-wizard1" class="mg-b-20">
                        <h5>Project Info</h5>
                        
                        <section class="border1ccc p20 mg-b-20">
                        <div class="row row-sm">
                            <div class="col-sm-12 col-xl-6">
                                <div class="card mg-b-20 p20">
                            <div class="row row-sm">
                                <div class="col-xl-6 col-sm-12">
                                    <label>Project Title</label>
                                    <input class="form-control" type="text" placeholder="Project Title">
                                </div>
                                <div class="col-xl-6 col-sm-12">
                                    <label>Project Category</label>
                                    <input class="form-control" type="text" placeholder="Project Category">
                                </div>
                            </div>
                        </div>
                                <div class="card mg-b-20 p20">
                            <div class="row row-sm">
                                <div class="col-xl-6 col-sm-12">
                                    <label>Project Manager</label>
                                    <select class="form-control">
                                        <option>Hussain Fatemi</option>
                                        <option>Sajjad Rafie</option>
                                        <option>Amir Taha</option>
                                        <option>ibrahim khalil</option>
                                        <option>Ali Fatemi</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 col-sm-12">
                                    <label>Date</label>
                                    <input class="form-control fc-datepicker" id="datepicker2">
                                </div>
                            </div>
                        </div>
                            </div>
                            <div class="col-sm-12 col-xl-6">
                        <div class="card mg-b-20 p20">
                            <div class="row row-sm">
                                <div class="col-xl-6 col-sm-12">
                                    <label>Applicant unit</label>
                                    <input class="form-control" type="text" value="Network Unit" disabled>
                                </div>
                                <div class="col-xl-6 col-sm-12">
                                    <label>Operating unit</label>
                                    <select class="form-control">
                                        <option>Management Unit</option>
                                        <option>Network Unit</option>
                                        <option>Programming Unit</option>
                                        <option>Support Unit</option>
                                        <option>Research Unit</option>
                                        <option>Finance Unit</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mg-b-20 p20">
                            <div class="row row-sm">
                                <div class="col-xl-6 col-sm-12">
                                    <label>Priority</label>
                                    <select class="form-control">
                                        <option>Normal</option>
                                        <option>High</option>
                                        <option>low</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 col-sm-12">
                                    <label>Supervisor</label>
                                    <select class="form-control">
                                        <option>Ali Fatemi</option>
                                        <option>Amir Taha</option>
                                        <option>Hussain Fatemi</option>
                                        <option>Sajjad Rafie</option>
                                        <option>ibrahim khalil</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                        </div>
                        <div class="row row-sm">
                            <div class="col-xl-12 col-sm-12">
                            <div class="card mg-b-20 p20">
                                <div class="row row-sm">
                                    <div class="col-xl-12 col-sm-12">
                                        <label>ِDescription...</label>
                                        <textarea class="form-control textarea" id="editor"></textarea>
                                    </div>
                                </div>
                            </div>	
                            </div>	
                        </div>
                        </section>
                        <h5>Processes...</h5>
                        <section class="border1ccc p20 mg-b-20">
                            <div id="mrgroupwr">
                            <div class="mr-group">
                                <div class="card p20">
                                
                                <div class="row row-sm">
                                    <div class="col-xs-12 col-xl-6">
                                        
                                        <div class="row row-sm mg-b-10">
                                                <div class="col-sm-12 col-xl-6">
                                                    <label>title</label>
                                                    <input type="text" class="form-control" placeholder="Proccess title">
                                                </div>
                                                <div class="col-sm-12 col-xl-6">
                                                    <label>operator</label>
                                                    <select class="form-control">
                                                        <option>Ali Fatemi</option>
                                                        <option>Amir Taha</option>
                                                        <option>Hussain Fatemi</option>
                                                        <option>Sajjad Rafie</option>
                                                        <option>ibrahim khalil</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                        <div class="row row-sm">
                                                <div class="col-sm-12 col-xl-4">
                                                    <label>Percent of the project</label>
                                                    <input type="number" class="form-control project_percent" placeholder="Percent">
                                                </div>
                                                <div class="col-sm-12 col-xl-4">
                                                    <label>Deadline</label>
                                                    <input class="form-control fc-datepicker" id="datepicker3">
                                                </div>
                                                <div class="col-sm-12 col-xl-4">
                                                    <label>Priority</label>
                                                    <select class="form-control">
                                                        <option>Normal</option>
                                                        <option>High</option>
                                                        <option>low</option>
                                                    </select>
                                                </div>
                                            </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-xl-6">
                                        <div class="row row-sm">
                                            <div class="col-sm-12">
                                                <label>Description</label>
                                                <textarea name="textbody" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                            </div>
                                <a class="btnRemove"></a>
                                
                            </div>
                            </div>
                            <a class="addrow-link" id="btnAdd" href="#"></a>
                            </div>
                        </section>
                    </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success mt-3 mb-3">
                save
            </button>
            
            </form>
            
        </div>
    </div>
@endsection

