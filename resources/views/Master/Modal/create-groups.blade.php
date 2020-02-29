<div id="newgroup" class="modal fade">
    <div class="modal-dialog modal-sm modal-notify modal-dark" role="document">
      <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
          <h6 class="tx-16 mg-b-0 tx-uppercase tx-inverse text-white">Add New Group</h6>
        </div>
        <div class="modal-body pd-20">
            
        <form action="{{ route($text_editor["route_name"]) }}" method="post">
            @csrf
            <div class="row row-sm">
                <div class="col-12 form-group">
                    <label>Group Name</label>
                    <input name="name" class="form-control" type="text">
                </div>
                <div class="col-12 form-group">
                    <label>Select Users</label>
                    <select name="users[]" id="grouptags" class="form-control tags" multiple="multiple" style="width: 100%">
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
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn bg-green btn-sm mg-l-10">Add Group</button>
        </div>

      </form>

      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->