<div id="newuser" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add New User</h6>
        </div>
        <div class="modal-body pd-20">
            
        <form action="{{ route($text_editor["route_name"]) }}" method="post">
            @csrf
                <div class="row row-sm">
                    <div class="col-sm-12 col-xl-6">
                        <label>First Name</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <label>Last Name</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                  <div class="row row-sm">
                    <div class="col-sm-12 col-xl-6">
                        <label>Unit</label>
                        <select class="form-control">
                            <option>Management Unit</option>
                            <option>Network Unit</option>
                            <option>Programming Unit</option>
                            <option>Support Unit</option>
                            <option>Research Unit</option>
                            <option>Finance Unit</option>
                        </select>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <label>Job title</label>
                        <select class="form-control">
                            <option>Manager</option>
                            <option selected>Staff</option>
                        </select>
                    </div>
                </div>
                  <div class="row row-sm">
                    <div class="col-sm-12 col-xl-6">
                        <label>E-Mail</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <label>Mobile Number</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                  <div class="row row-sm">
                    <div class="col-sm-12 col-xl-6">
                        <label>Username</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <label>Verfication Code</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                  <div class="row row-sm">
                    <div class="col-sm-12 col-xl-6 mg-t-20">
                        <input type="file" name="file-1[]" id="file-1" class="inputfile"
      data-multiple-caption="{count} files selected" multiple>
                                <label for="file-1" class="tx-white bg-warning">
                                  <i class="icon ion-ios-upload-outline tx-24"></i>
                                  <span>Photo</span>
                                </label>
                    </div>
                </div>

            </form>


        </div><!-- modal-body -->
        <div class="modal-footer">
          <button type="button" class="btn btn-success mg-l-10">Add User</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->