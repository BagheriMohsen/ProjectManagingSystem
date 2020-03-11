
    <div id="newtimeline" class="modal fade">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-notify modal-dark" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                    {{-- <h6 class="tx-16 mg-b-0 tx-uppercase tx-inverse text-white">New Item</h6> --}}
                </div>
                <div class="modal-body pd-20">
                    <form class="form" action="{{route("timeline.store")}}" method="POST" 
                    enctype="multipart/form-data">
                        @csrf
                            <div class="row mp0">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label class="form-control-label">title<span class="tx-danger">*</span></label>
                                        <input class="form-control" name="title" value="{{old('title')}}" id="timelinetitle" placeholder="title">
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
                    

                 
                            <div class="row mp0">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Tags</label>
                                        <br/>
                                        <select id="timelineTags" class="form-control text-dark"  name="tags[]" multiple="multiple" style="width: 100%">
                                            <option > </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
               
                            <div class="row mp0">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <input type="file" name="image" id="file" class="inputfile"
                                        data-multiple-caption="{count} files selected" multiple>
                                        <label for="file" class="tx-white bg-warning">
                                            <i class="icon ion-ios-upload-outline tx-24"></i>
                                            <span>Image</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                 
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-green btn-sm mg-l-10">Add Unit</button>
                </div>

            </form>
            </div>
        </div><!-- modal-dialog -->
    </div>
    <!-- modal -->
