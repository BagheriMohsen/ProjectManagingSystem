<template>

    <div>
        <button :style="{display:btnDisplay}" @click.prevent="showTimepicker" class="btn btn-sm btn-outline-info">Add log</button>
        <div :style="{display:timepickerDisplay}">
            <div class="timepicker-box">
                <input v-model="hours" class="timepicker" type="text" placeholder="HH">:
                <input v-model="minutes" class="timepicker" type="text" placeholder="MM">
            </div>
            <a href="#" @click.prevent="cancelLog" class="p-1 text-danger">
                <i class="fas fa-times"></i>
            </a>
            <a href="#" @click.prevent="addLog" class="p-1">
                <i class="fas fa-check"></i>
            </a>
        </div>
        <div class="pl-2 mt-2">
            Overall time spend on Task : 22:30 
        </div>
    </div>

</template>

<script>
    export default {
        data(){
            return{
               timepickerDisplay:'none',
               btnDisplay:'inline',
               hours:'',
               minutes:'',
            }
        },
        methods:{
          cancelLog(){
              this.timepickerDisplay = 'none';
              this.btnDisplay = 'inline-block';
              this.hours = '';
              this.minutes = '';
          },
          addLog(){
              this.timepickerDisplay = 'none';
              this.btnDisplay = 'inline-block';
              //Get request
              this.hours = '';
              this.minutes = '';
          },
          showTimepicker(){
              this.timepickerDisplay = 'inline-block';
              this.btnDisplay = 'none';
          }
        },
        computed:{
            
        },
        mounted() {
          
        }
    }
</script>
