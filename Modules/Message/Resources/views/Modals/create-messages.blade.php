
    <div id="new_messages" class="modal fade">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-notify modal-dark" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                    <h6 class="tx-16 mg-b-0 tx-uppercase tx-inverse text-white">Add message</h6>
                </div>
                <div class="modal-body pd-20">
                    <form class="form" action="{{route("messages.store")}}" method="POST" 
                    enctype="multipart/form-data">
                        @csrf


                            <div class="row mp0">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Contact</label>
                                        <br/>
                                        <select id="contact" class="form-control text-dark"  name="receiver_id" style="width: 100%">
                                            @foreach( $users as $user )
                                                @if($user->id != auth()->user()->id)
                                                    <option value="{{ $user->id }}">
                                                        {{ $user->first_name." ".$user->last_name }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="row mp0">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Title<span class="tx-danger">*</span></label>
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
                                        <input type="file" name="attach" id="file" class="inputfile"
                                        data-multiple-caption="{count} files selected" multiple>
                                        <label for="file" class="tx-white bg-warning">
                                            <i class="icon ion-ios-upload-outline tx-24"></i>
                                            <span>Attach</span>
                                        </label>
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
