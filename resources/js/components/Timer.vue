<template>

    <div class="timer">
        <button @click="startTimer()" :style="{display:startDisplay}" class="btn btn-sm btn-outline-info">Start timer</button>
        
        <div class="p-2 bg-info timer-control text-white" :style="{display:timerControlDisplay}">
            <span class="text-right text-white px-3">{{timerBox}}</span>
            <a href="#" @click.prevent="pauseTimer()" :style="{display:pauseDisplay}" class="text-white px-1">
                <i class="fas fa-pause"></i>
            </a>
            <a href="#" @click.prevent="startTimer()" :style="{display:resumeDisplay}" class="text-white px-1">
                <i class="fas fa-play"></i>
            </a>
            <a href="#" @click.prevent="stopTimer()" :style="{display:stopDisplay}" class="text-white px-1">
                <i class="fas fa-stop"></i>
            </a>
        </div>

    </div>

</template>

<script>

    let timer = new window.easytimer.Timer();
    console.log(timer);
    export default {
        data(){
            return{
                timerBox: '00:00:00',
                startDisplay:'inline-block',
                resumeDisplay:'none',
                stopDisplay:'none',
                pauseDisplay:'none',
                timerControlDisplay:'none'
            }
        },
        methods:{
            startTimer(){
                timer.start();
                timer.addEventListener('secondsUpdated', (e) => {
                    this.timerBox = timer.getTimeValues().toString();
                });
                this.startDisplay = 'none';
                this.pauseDisplay = 'inline-block';
                this.stopDisplay = 'inline-block';
                this.timerControlDisplay = 'block';
                this.resumeDisplay = 'none';
            },
            pauseTimer(){
                timer.pause();
                this.pauseDisplay = 'none';
                this.resumeDisplay = 'none';
                this.resumeDisplay = 'inline-block';
            },
            resetTimer(){
                timer.reset();
            },
            stopTimer(){
                timer.stop();
                this.timerBox = '00:00:00';
                this.startDisplay = 'inline-block';
                this.pauseDisplay = 'none';
                this.stopDisplay = 'none';
                this.resumeDisplay = 'none';
                this.timerControlDisplay = 'none';
            }
        },
        computed:{
            timeBox:function(){
                return this.timerBox;
            }
        },
        mounted() {
          
        }
    }
</script>
