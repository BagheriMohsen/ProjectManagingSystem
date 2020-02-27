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
                    <input class="form-control" type="text">
                </div>
                <div class="col-sm-12 col-xl-6">
                    <label>Select Users</label>
                    <select id="grouptags" class="form-control tags" multiple="multiple">
                        <option selected="selected">orange</option>
                        <option>white</option>
                        <option selected="selected">purple</option>
                    </select>
                </div>
            </div>
        </form>


        </div><!-- modal-body -->
        <div class="modal-footer">
          <button type="button" class="btn btn-success mg-l-10">Add Group</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->