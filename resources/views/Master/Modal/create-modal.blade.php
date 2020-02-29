@if(isset($text_editor))
    <div id="modalCompose" class="modal fade">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-notify modal-dark" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                    <h6 class="tx-16 mg-b-0 tx-uppercase tx-inverse text-white">New Discuss</h6>
                </div>
                <div class="modal-body pd-20">
                    <form class="form" action="{{route($text_editor['route_name'])}}" method="POST" 
                    enctype="multipart/form-data">
                        @csrf
                        @if($text_editor['title'])
                            <div class="row mp0">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label class="form-control-label">title<span class="tx-danger">*</span></label>
                                        <input class="form-control" name="title" value="{{old('title')}}" id="timelinetitle" placeholder="title">
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if($text_editor['desc'])
                            <div class="row mp0">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Description<span class="tx-danger">*</span></label>
                                        <textarea class="form-control textarea" name="desc" id="textbody" placeholder="Description">{{old("desc")}}</textarea>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if($text_editor['tags'])
                            <div class="row mp0">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Tags</label>
                                        <br/>
                                        <select id="timelineTags" class="form-control text-dark"  name="tags[]" multiple="multiple" style="width: 100%">
                                            @foreach($text_editor['tags_item'] as $tag)
                                            <option selected="selected">
                                                {{$tag->name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if($text_editor['image'])
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
                        @endif
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-green btn-sm mg-l-10">Add Unit</button>
                </div>
            </div>
        </div><!-- modal-dialog -->
    </div>
    <!-- modal -->
@endif