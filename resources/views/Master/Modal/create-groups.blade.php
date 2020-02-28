<div id="newgroup" class="modal fade">
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
                    <label>Group Name</label>
                    <input name="name" class="form-control" type="text">
                </div>
                <div class="col-sm-12 col-xl-6">
                    <label>Select Users</label>
                    <select name="users[]" id="grouptags" class="form-control tags" multiple="multiple">
                      @foreach($users as $user)
                        <option value="{{ $user->id }}">
                          {{ $user->first_name." ".$user->last_name }}
                        </option>
                      @endforeach
                    </select>
                </div>
            </div>
        


        </div><!-- modal-body -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-success btn-sm mg-l-10">Add Group</button>
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
        </div>

      </form>

      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->