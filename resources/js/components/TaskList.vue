<template>
    <div class="row row-sm">
        <div id="taskList" class="col-12">
            <div class="card mg-b-20">
                <div class="card-header bg-info tx-white p5">
                    Tasks
                </div>
                <div class="card-body p20">
                    <form action="#">
                        <div class="form-row">
                            <div class="col-auto">
                                <button class="btn btn-sm">Add</button>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder="Add your text here...">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Your estimate time">
                            </div>
                        </div>
                    </form>
                   
                    <div class="accordion mt-3" id="accordionExample">
                        <div class="d-flex justify-content-between align-items-center" >
                            <div class="d-flex align-items-center">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="todoCheckbox">
                                    <label class="form-check-label" for="todoCheckbox"></label>
                                </div>
                                <span data-toggle="collapse" data-target="#taskCollapse1">
                                     Title of Task
                                </span>
                            </div>
                            <div>
                                Estimated time
                            </div>
                        </div>
                        <div id="taskCollapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="d-flex justify-content-between">
                                <div class="addLog">
                                    <button class="btn btn-sm btn-outline-info">Add log</button>
                                    <input type="number" placeholder="HH">:
                                    <input type="number" placeholder="MM">
                                </div>
                                <div class="timer" @click="startTimer()">
                                    <timer></timer>
                                    <button class="btn btn-sm btn-outline-info">Start timer</button>
                                    <div id="basicUsage">00:00:00</div>
                                </div>
                            </div>
                            <div class="mt-2 pl-2">
                                Overall time spend on Task : 22:30 
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
            
            }
        },
        methods:{
         startTimer(){
            let timer = new easytimer.Timer();
            timer.start();
            timer.addEventListener('secondsUpdated', function (e) {
                $('#basicUsage').html(timer.getTimeValues().toString());
            });
         }
        },
        computed:{
           
        },
        mounted() {
          console.log(timer)
        }
    }
</script>
