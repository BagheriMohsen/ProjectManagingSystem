<template>
    <div>

         <div class="row row-sm">
        <div class="col-sm-12 col-xl-12">
            <div class="timesheet-wr">
                <div class="row row-sm bg-gray mg-b-10">
                    <div class="col-md-3">
                    <form id="todo-create" action="#" >
                        
                            <div class="form-row">
                                <div class="input-group">
                                    <input name="desc" type="text" class="form-control" placeholder="+ New">
                                    <div class="input-group-append">
                                      <button class="btn btn-warning" type="submit"><i class="fa fa-chevron-right pd-r-3 pd-l-3"></i></button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row row-sm bg-white">
                        <div class="col-md-7">
                        <div class="card card-body bd-0 pd-25 tx-12 ">
                            <table class="table table-hover table-bordered">
                            
                                    <tr v-for="todo_list in todo_lists">
                                        <td>
                                            <label class="ckbox mp0">
                                                <input type="checkbox">
                                                <span>
                                                    {{ todo_list.desc }}
                                                </span>
                                            </label>
                                        </td>
                                    </tr> 
                               
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
