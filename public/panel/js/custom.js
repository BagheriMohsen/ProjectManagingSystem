$(document).ready(function() {
   
    $('.post-comments .toggle-reply').on('click',function(){
        var post_comments = $(this).parents('.post-comments');
        var reply_box = post_comments.find('form');
        reply_box.toggle()
    });

    $('.post-comments .cancel_reply').on('click',function(){
        var reply_box = $(this).parents('form');
        console.log(reply_box);
        reply_box.hide()
    });

    //Initiazing select2
    $("#grouptags").select2({
        dropdownParent: $("#newgroup"),
        dropdownAutoWidth : true
    });
    $("#timelineTags").select2({
        tags: true,
        tokenSeparators: [',', ' '],
        dropdownParent: $("#modalCompose"),
        dropdownAutoWidth : true,
        minimumResultsForSearch: ''
    });

    // Create project 
    $('#project_create').submit(function(event){
        event.preventDefault();
        var form = $(this);
        var tasks = [];
        var action_url          = $(this).attr('action');
        var token               = $(this).find('input[name="_token"]').val();
        var title               = $(this).find('input[name="title"]').val();
        var subject             = $(this).find('input[name="subject"]').val();
        var manager_id          = $(this).find('select[name="manager_id"]').val();
        var start_date          = $(this).find('input[name="start_date"]').val();
        var color               = $(this).find('input[name="color"]').val();
        var dead_date           = $(this).find('input[name="dead_date"]').val();
        var applicant_unit_id   = $(this).find('input[name="applicant_unit_id"]').val();
        var operating_unit_id   = $(this).find('select[name="operating_unit_id"]').val();
        var priority            = $(this).find('select[name="priority"]').val();
        var supervisor_id       = $(this).find('select[name="supervisor_id"]').val();
        var desc                = $(this).find('textarea[name="desc"]').val();
        var is_private          = $(this).find('input[name="is_private"]').val(); 
        $('.mr-group').each(function(){
            var task = {};
            task.title          = $(this).find('input[name="task_title"]').val();
            task.operator_id    = $(this).find('select[name="task_operator"]').val();
            task.percent        = $(this).find('input[name="task_percent"]').val();
            task.estimated_time = $(this).find('input[name="task_hour"]').val() + '.' + $(this).find('input[name="task_min"]').val();
            task.priority       = $(this).find('select[name="task_priority"]').val();
            task.desc           = $(this).find('textarea[name="task_desc"]').val();
            task.color          = $(this).find('input[name="task_color"]').val();
            task.reminder_time  = $(this).find('input[name="reminder_time"]').val();
            task.reminder_type  = $(this).find('select[name="reminder_type"]').val();
            tasks.push(task);
        })
       
        var formData = {
            '_token':token,
            'title': title,
            'subject': subject,
            'manager_id': manager_id,
            'applicant_unit_id': applicant_unit_id,
            'operating_unit_id': operating_unit_id,
            'priority': priority,
            'start_date':start_date,
            'dead_date':dead_date,
            'supervisor_id': supervisor_id,
            'desc': desc,
            'color':color,
            'tasks': tasks,
            'is_private':is_private,
        }
        console.log(formData);

        $.ajax({
            url: action_url,
            method:'Post',
            data: formData,
            success:function(res){
                alert(res);
                location.reload();
            },
            error:function(err){
                alert(err);
            }
        })

    });


    $("#item_delete").click(function(e){
        e.preventDefault();
        var action_url = $(this).attr('href');
        $.ajax({
            url: action_url,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method:'DELETE',
            success:function(res){
                alert(res);
                location.reload();
            },
            error:function(err){
                alert(err);
            }
        })

    });


    //Timer for subtasks

    $('.timer').each(function(){

        var timer = new easytimer.Timer();
        var startBtn = $(this).find('.startTimer');
        var pauseBtn = $(this).find('.pauseTimer');
        var stopBtn = $(this).find('.stopTimer');
        var resumeBtn = $(this).find('.resumeTimer');
        var timerText = $(this).find('.timerText');
        var timerControl = $(this).find('.timer-control');

        var addLogDiv = $(this).siblings('.addLog');
        var hours_input = addLogDiv.find('.hours-subtask');
        var minutes_input = addLogDiv.find('.minutes-subtask');
        console.log(hours_input,minutes_input);

        startBtn.on('click',function(){
            startBtn.css('display','none');
            timerControl.css('display','block');
            timer.start();
            timer.addEventListener('secondsUpdated', (e) => {
                timerText.html(timer.getTimeValues().toString());
            });
        })

        pauseBtn.on('click',function(){
            timer.pause();
            pauseBtn.css('display','none');
            resumeBtn.css('display','inline');
        })
        stopBtn.on('click',function(){
            
            hours_input.val(timer.getTimeValues().hours);
            minutes_input.val(timer.getTimeValues().minutes);
            timer.stop();
            timerText.html('00:00:00');
            pauseBtn.css('display','inline');
            resumeBtn.css('display','none');
            startBtn.css('display','inline');
            timerControl.css('display','none');
        })
        resumeBtn.on('click',function(){
            pauseBtn.css('display','inline');
            resumeBtn.css('display','none');
            timer.start();
            timer.addEventListener('secondsUpdated', (e) => {
                timerText.html(timer.getTimeValues().toString());
            });
        })
       
    });

   


});
