<div id="newunit" class="modal fade">
    <div class="modal-dialog modal-sm modal-notify modal-dark" role="document">
      <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
          <h6 class="tx-16 mg-b-0 tx-uppercase tx-inverse text-white">Add New Unit</h6>
        </div>
        <div class="modal-body pd-20">
            
        <form action="{{ route("users.units.store") }}" method="post">
            @csrf
            <div class="row row-sm">
                <div class="col-sm-12">
                    <label>Unit Name</label>
                    <input class="form-control" name="name" type="text">
                </div>
            </div>
       


        </div><!-- modal-body -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-green btn-sm mg-l-10">Add Unit</button>
        </div>
      </form>
      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->