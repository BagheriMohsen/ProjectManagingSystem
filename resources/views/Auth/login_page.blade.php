<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <title>
      {{"Login Page"}}
    </title>

    <!-- vendor css -->
    @include("Master.styles")
  </head>

  <body>

<div class="row no-gutters flex-row-reverse ht-100v">
		
  <div class="col-md-6 bg-br-primary d-flex align-items-center justify-content-center bg-login-1"></div>
  <div class="col-md-6 bg-gray-200 d-flex align-items-center justify-content-center">
    <div class="login-wrapper wd-250 wd-xl-250 mg-y-30">
      <center>
      <div class="tx-center">
      <img src="{{ asset("panel/img/1542logo-2.png") }}" class="tx-center" width="100%" height="auto" style="text-align:center">
      </div>
      </center>
    <form class="form" action="{{ route("login_check") }}" method="post">
      @csrf
      <div class="form-group">

        <input type="text" class="form-control login-mobilenumber1"
         name="phone_number" placeholder="Mobile Number" autocomplete="off">
          {{-- error --}}
          @error('phone_number')
            <div class="text-danger">{{ $message }}</div>
          @enderror
          {{-- end error --}}

          
        <input type="password" class="form-control login-mobilenumber1"
         name="password" placeholder="Password" autocomplete="off">
          {{-- error --}}
          @error('password')
            <div class="text-danger">{{ $message }}</div>
          @enderror
          {{-- end error --}}


      </div>
    
      
      <button type="submit" class="btn btn-info btn-block">Login</button>
      </form>
      {{-- <div class="mg-t-60 tx-center">No account yet? <a href="" class="tx-info" data-toggle="modal" data-target="#regnumber">Register Your Mobile</a></div> --}}
    </div>
  </div>

</div>

<div id="regnumber" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Register</h6>
        </div>
        <div class="modal-body pd-20">
          <div class="form-group">
            <div class="input-group wd-sm-400 wd-lg-600">
              <span class="input-group-addon bg-gray-100 p10">Mobile Number:</span>
              <input type="text" class="form-control" placeholder="Mobile Number">
            </div><!-- input-group -->
          </div><!-- form-group -->
        </div><!-- modal-body -->
        <div class="modal-footer">
          <button type="button" class="btn btn-info mg-l-10">Send</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->

@include("Master.scripts")
</body>
</html>