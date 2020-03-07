    <div id="newsubtask" class="modal fade">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-notify modal-dark" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                    {{-- <h6 class="tx-16 mg-b-0 tx-uppercase tx-inverse text-white">New Item</h6> --}}
                </div>
                <div class="modal-body pd-20">

                    <form action="{{ route("subTasks.store") }}" method="POST">
                        @csrf
                        <input value="{{ $task->id }}" class="form-control" name="project_task_id" type="hidden">
                        <div class="row row-sm">
                            <div class="col-sm-12 col-xl-6 form-group">
                                <label>Subtask title</label>
                                <input value="" class="form-control" name="title" type="text">
                            </div>
                            <div class="col-sm-12 col-xl-6 form-group">
                                <label>Percent of task</label>
                                <input name="percent" type="number" class="form-control " placeholder="Percent">
                            </div>
                        </div>
                          <div class="row row-sm">
                            <div class="col-sm-12 col-xl-6 form-group">
                                <label>Priority</label>
                                <select name="priority" class="form-control">
                                    <option value="low">low</option>
                                    <option value="normal">Normal</option>
                                    <option value="high">High</option>
                                </select>
                            </div>
                            <div class="col-sm-12 col-xl-6 form-group">
                                <label>Color</label>
                                <input value="" name="color" type="color" class="form-control">
                            </div>
                        </div>
                          
                          <div class="row row-sm">
                            <div class="col-sm-12 col-xl-6 form-group">
                                <label>Reminder time</label>
                                <input name="reminder_time" type="time" class="form-control" placeholder="">
                            </div>
        
                            <div class="col-sm-12 col-xl-6 form-group">
                                <label>Reminder type</label>
                                <select name="reminder_type" class="form-control">
                                    <option value="daily">daily</option>
                                    <option value="weekly">weekly</option>
                                </select>
                            </div>
                        </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-light-green btn-sm mg-l-10">Add Subtask</button>
                </div>
                    </form>

                </div>
            </div>
        </div><!-- modal-dialog -->
    </div>
    <!-- modal -->
