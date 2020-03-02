@extends('Master.layout')

@section('title')
    {{"user edit"}}
@endsection

<!-- 
    Main Content
-->
@section('content')
 
    @include('Messages.errors')
    @include('Messages.message')

       
    <div class="row row-sm ">
        <div class="col-sm-12 col-xl-12 mx-auto">
            <div class="br-pagetitle">
                <i class="icon ion-ios-person-outline"></i>
                <div>
                <h4>Edit profile</h4>
                {{-- <p class="mg-b-0">Edit firstname and lastname</p> --}}
                </div>
            </div>
            <br>
            
            <form id="" action="{{ route("users.update_profile",$user->id) }}" method="POST" class="mx-auto">
                @csrf
                <div class="addproject-wr">
                    <div class="row row-sm mp0">
                        <div class="col-12 col-sm-6">
                            <div id="addproject-wizard1" class="mg-b-20">
                                <h5>User Info</h5>
                                <section class="border1ccc p20 mg-b-20">
                                    <div class="row row-sm">
                                        <div class="col-sm-12">
                                            <div class="card mg-b-20 p20">
                                                <div class="row row-sm">
                                                    <div class="col-12 form-group">
                                                        <label>FirstName</label>
                                                        <input value="{{ $user->first_name }}" name="first_name" class="form-control" type="text" placeholder="">
                                                    </div>
                                                    <div class="col-12 form-group">
                                                        <label>LastName</label>
                                                        <input value="{{ $user->last_name }}" name="last_name" class="form-control" type="text" placeholder="">
                                                    </div>
                                                    <div class="col-12 text-center">
                                                        <button type="submit" class="btn btn-secondary px-3 py-2">
                                                            save
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>

               
            
            </form>
            
        </div>
    </div>







@endsection

