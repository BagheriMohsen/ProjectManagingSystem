
    <div id="new_tickets" class="modal fade">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-notify modal-dark" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                    <h6 class="tx-16 mg-b-0 tx-uppercase tx-inverse text-white">Add ticket</h6>
                </div>
                <div class="modal-body pd-20">
                    <form class="form" action="" method="POST" 
                    enctype="multipart/form-data">
                        @csrf

                            <div class="row mp0">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Subject<span class="tx-danger">*</span></label>
                                        <input class="form-control" name="subject" value="" id="" placeholder="subject">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mp0">
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Departement</label>
                                        <br/>
                                        <select id="departement" class="form-control text-dark"  name="departement" style="width: 100%">
                                           
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Service</label>
                                        <br/>
                                        <select id="service" class="form-control text-dark"  name="service" style="width: 100%">
                                           
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Priority</label>
                                        <br/>
                                        <select id="priority" class="form-control text-dark"  name="priority" style="width: 100%">
                                           
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="row mp0">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Description<span class="tx-danger">*</span></label>
                                        <textarea class="form-control textarea" name="desc" id="textbody" placeholder="Description">{{old("desc")}}</textarea>
                                    </div>
                                </div>
                            </div>
                     

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-green btn-sm mg-l-10">Add Message</button>
                </div>

            </form>
            </div>
        </div><!-- modal-dialog -->
    </div>
    <!-- modal -->
