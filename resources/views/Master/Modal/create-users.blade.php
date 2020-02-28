<div id="newuser" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add New User</h6>
        </div>
        <div class="modal-body pd-20">
            
        <form action="{{ route($text_editor["route_name"]) }}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="row row-sm">
                    <div class="col-sm-12 col-xl-6">
                        <label>First Name</label>
                        <input value="{{ old("first_name") }}" class="form-control" name="first_name" type="text">
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <label>Last Name</label>
                        <input value="{{ old("last_name") }}" class="form-control" name="last_name" type="text">
                    </div>
                </div>
                  <div class="row row-sm">
                    <div class="col-sm-12 col-xl-6">
                        <label>Unit</label>
                        <select name="unit" class="form-control">
                          @foreach( $units as $unit )
                            <option
                             @if( old("unit") == $unit->id )
                              selected
                             @endif
                            value="{{ $unit->id }}"
                            >{{ $unit->name }}</option>
                          @endforeach
                        </select>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <label>Job title</label>
                        <select name="job_title" class="form-control">
                            <option>Manager</option>
                            <option selected>Staff</option>
                        </select>
                    </div>
                </div>
                  
                  <div class="row row-sm">
                    <div class="col-sm-12 col-xl-6">
                        <label>Phone Number</label>
                        <input value="{{ old("phone_number") }}" class="form-control" type="text" name="phone_number">
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <label>Password</label>
                        <input  class="form-control" type="password" name="password">
                    </div>
                    <div class="col-sm-12 col-xl-6">
                      <label>Password Confirm</label>
                      <input class="form-control" type="password" name="password_confirm">
                    </div>
                </div>
                  <div class="row row-sm">
                    <div class="col-sm-12 col-xl-6 mg-t-20">
                      <input type="file" name="avatar" id="file-1" class="inputfile"
              data-multiple-caption="{count} files selected" multiple>
                          <label for="file-1" class="tx-white bg-warning">
                            <i class="icon ion-ios-upload-outline tx-24"></i>
                            <span>Avatar</span>
                          </label>
                    </div>
                  </div>

           


        </div><!-- modal-body -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-success btn-sm mg-l-10">Add User</button>
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
        </div>

      </form>

      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->