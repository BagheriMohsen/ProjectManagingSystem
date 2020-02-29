<div id="newuser" class="modal fade">
    <div class="modal-dialog modal-lg modal-notify modal-dark" role="document">
      <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
          <h6 class="tx-16 mg-b-0 tx-uppercase tx-inverse text-white">Add New User</h6>
        </div>
        <div class="modal-body pd-20 px-4-sm px-4 mx-1">
            
        <form action="{{ route($text_editor["route_name"]) }}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="row row-sm">
                    <div class="col-sm-12 col-xl-6 form-group">
                        <label>First Name</label>
                        <input value="{{ old("first_name") }}" class="form-control" name="first_name" type="text">
                    </div>
                    <div class="col-sm-12 col-xl-6 form-group">
                        <label>Last Name</label>
                        <input value="{{ old("last_name") }}" class="form-control" name="last_name" type="text">
                    </div>
                </div>
                  <div class="row row-sm">
                    <div class="col-sm-12 col-xl-6 form-group">
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
                    <div class="col-sm-12 col-xl-6 form-group">
                        <label>Job title</label>
                        <input value="{{ old("job_title") }}" class="form-control" type="text" name="job_title">
                    </div>
                </div>
                  
                  <div class="row row-sm">
                    <div class="col-sm-12 col-xl-6 form-group">
                        <label>Phone Number</label>
                        <input value="{{ old("phone_number") }}" class="form-control" type="text" name="phone_number">
                    </div>

                    <div class="col-sm-12 col-xl-6 form-group">
                        <label>Password</label>
                        <input  class="form-control" type="password" name="password">
                    </div>
                    <div class="col-sm-12 col-xl-6 form-group">
                      <label>Password Confirm</label>
                      <input class="form-control" type="password" name="password_confirm">
                    </div>
                    <div class="col-sm-12 col-xl-6 pt-1 mt-4">
                      <input type="file" name="avatar" id="file-1" class="inputfile"
              data-multiple-caption="{count} files selected" multiple>
                          <label for="file-1" class="tx-white bg-warning">
                            <i class="icon ion-ios-upload-outline tx-24"></i>
                            <span>Avatar</span>
                          </label>
                    </div>
                </div>

                
                  <div class="row row-sm">
                    <div class="col-sm-12 col-xl-6 form-check">
                      <input id="checkActive" class="form-check-input" @if( old("is_active") == "on" ) checked @endif type="checkbox" name="is_active">
                      <label class="form-check-label" for="checkActive">User is Active?</label>
                    </div>
                  </div>
          
        </div><!-- modal-body -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-light-green btn-sm mg-l-10">Add User</button>
        </div>

      </form>

      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->