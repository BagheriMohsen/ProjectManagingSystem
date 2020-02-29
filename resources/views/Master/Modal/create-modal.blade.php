@if(isset($text_editor))
    <div id="modalCompose" class="modal fade">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">New Discuss</h6>
                </div>
            <form class="form" action="{{route($text_editor['route_name'])}}" method="POST" 
            enctype="multipart/form-data">
                @csrf
                <div class="modal-body pd-20">
                    <div class="form-layout form-layout-1">

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
                                    <select class="form-control tags text-dark"  name="tags[]" multiple="multiple">
                                        @foreach($text_editor['tags_item'] as $tag)
                                            <option selected="selected">
                                                {{$tag->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        @endif

                        @if($text_editor['image'])
                            <div class="row mp0">
                                <div class="col-xl-12">
                                <div class="form-group">
                                    <label class="form-control-label">Images<span class="tx-danger">*</span></label>
                                    <div class="custom-file">
                                        <input type="file" name="image" id="file" class="custom-file-input" >
                                        <label class="custom-file-label"></label>
                                    </div>
                                </div>
                                </div>
                            </div>
                        @endif
                </div><!-- modal-body -->
                <div class="modal-footer">
                    <button type="submit" class="btn bg-green tx-12 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-l-20 mg-r-20">Publish</button>
                    <button type="button" class="btn btn-secondary tx-12 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-r-20 mg-l-20" data-dismiss="modal">Cancel</button>
                </div>
                </form>
            </div>
        </div><!-- modal-dialog -->
    </div>
    <!-- modal -->
@endif