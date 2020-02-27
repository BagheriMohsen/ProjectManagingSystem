<div id="newunit" class="modal fade">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add New Unit</h6>
        </div>
        <div class="modal-body pd-20">
            
        <form action="{{ route($text_editor["route_name"]) }}" method="post">
            @csrf
            <div class="row row-sm">
                <div class="col-sm-12">
                    <label>Unit Name</label>
                    <input class="form-control" type="text">
                </div>
            </div>
        </form>


        </div><!-- modal-body -->
        <div class="modal-footer">
          <button type="button" class="btn btn-success mg-l-10">Add Unit</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->