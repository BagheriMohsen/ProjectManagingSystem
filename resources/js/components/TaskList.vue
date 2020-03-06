<template>
    <div class="row row-sm">
        <div id="taskList" class="col-12">
            <div class="card mg-b-20">
                <div class="card-header bg-info tx-white p5">
                    Tasks 
                </div>
                <div class="card-body p20">
                    <form action="#" @submit.prevent="addSubTask()">
                        <div class="form-row justify-content-center">
                            <div class="col-auto">
                                <button @click.prevent="addSubTask()" class="btn btn-sm btn-info">Add</button>
                            </div>
                            <div class="col-8 align-self-center">
                                <input v-model="subTask_title" type="text" class="form-control" style="height: 34px;" placeholder="Add your text here...">
                            </div>
                            <div class="col-auto align-self-center">
                                <div class="timepicker-box ">
                                    <input v-model="subTask_hours" class="timepicker" type="text" placeholder="HH">:
                                    <input v-model="subTask_minutes" class="timepicker" type="text" placeholder="MM">
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <div class="accordion mt-3" id="accordionExample">
                        <div class="task-header">
                            <div class="d-flex align-items-center">
                                <div class="form-check d-flex pl-0">
                                    <input type="checkbox" class="form-check-input" id="todoCheckbox">
                                    <label class="form-check-label" for="todoCheckbox"></label>
                                </div>
                                <span data-toggle="collapse" data-target="#taskCollapse1" style="cursor:pointer">
                                     Title of Task
                                </span>
                            </div>
                            <div>
                                Estimated time
                            </div>
                        </div>
                        <div id="taskCollapse1" class="task-body collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="d-flex justify-content-between">
                                <timepicker/>
                                <timer></timer>
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
        data(){
            return{
                subTask_title : 'fdsafda',
                subTask_hours : '',
                subTask_minutes : ''
            }
        },
        methods:{
            addSubTask(){
                this.$http.get('subTasks/store/1',{

                    params:{
                        title:this.subTask_title,
                       
                    }

                }).then(res => console.log(res))
                .catch(err => console.log(err));
            },
            updateSubTask(){

            },
        
        },
        computed:{
           
        },
        mounted() {
            this.$http.get('subTasks/all-sub-tasks')
            .then(res => console.log(res))
            .catch(err => console.log(err));
        }
    }
</script>
