@extends('Master.layout')

@section('title')
    {{"change password"}}
@endsection

<!-- 
    Main Content
-->
@section('content')
 
    @include('Messages.errors')
    @include('Messages.error')
    @include('Messages.message')

       
    <div class="row row-sm">
        <div class="col-sm-12 col-xl-12">
            <div class="br-pagetitle">
                <i class="icon ion-ios-locked-outline"></i>
                <div>
                <h4 class="mx-4">Change password</h4>
                {{-- <p class="mg-b-0">Be careful with your password</p> --}}
                </div>
            </div>
            <br>
            
            <form id="" action="{{ route("users.change_pass") }}" method="POST">
                @csrf
                <div class="addproject-wr">
                    <div class="row row-sm mp0">
                        <div class="col-12 col-sm-6">
                            <div id="addproject-wizard1" class="mg-b-20">
                                <h5>Please insert your old and new password</h5>
                                <section class="border1ccc p20 mg-b-20">
                                    <div class="row row-sm">
                                        <div class="col-sm-12">
                                            <div class="card mg-b-20 p20">
                                                <div class="row row-sm">
                                                    <div class="col-12 form-group">
                                                        <label>Old password</label>
                                                        <input name="old_pass" type="password" class="form-control" type="text" placeholder="">
                                                    </div>
                                                    <div class="col-12 form-group">
                                                        <label>New password</label>
                                                        <input name="new_pass" type="password" class="form-control" type="text" placeholder="">
                                                    </div>
                                                    <div class="col-12 form-group">
                                                        <label>Confirm new password</label>
                                                        <input name="pass_confirm" type="password" class="form-control" type="text" placeholder="">
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
            </form>
            
        </div>
    </div>







@endsection

