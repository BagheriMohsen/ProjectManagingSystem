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
        var processes = [];
        var action_url = $(this).attr('action');
        var token = $(this).find('input[name="_token"]').val();
        var title = $(this).find('input[name="title"]').val();
        var category = $(this).find('input[name="category"]').val();
        var project_manager = $(this).find('select[name="project_manager"]').val();
        var due_time = $(this).find('input[name="hours"]').val() + '/' + $(this).find('input[name="minutes"]').val();
        var applicant_unit = $(this).find('input[name="applicant_unit"]').val();
        var operating_unit = $(this).find('select[name="operating_unit"]').val();
        var priority = $(this).find('select[name="priority"]').val();
        var supervisor = $(this).find('select[name="supervisor"]').val();
        var desc = $(this).find('textarea[name="desc"]').val();
        var is_private = $(this).find('input[name="is_private"]').val(); 
        $('.mr-group').each(function(){
            var process = {};
            process.process_title = $(this).find('input[name="process_title"]').val();
            process.process_operator = $(this).find('select[name="process_operator"]').val();
            process.process_percent = $(this).find('input[name="process_percent"]').val();
            process.process_due_time = $(this).find('input[name="process_hours"]').val() + '/' + $(this).find('input[name="process_minutes"]').val();
            process.process_priority = $(this).find('select[name="process_priority"]').val();
            process.process_desc = $(this).find('textarea[name="process_desc"]').val();
            process.reminder_time = $(this).find('input[name="reminder_time"]').val();
            process.reminder_type = $(this).find('select[name="reminder_type"]').val();
            processes.push(process);
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
            'reminder_time':reminder_time,
            'reminder_type':reminder_type,

        }
        console.log(formData);

        $.ajax({
            url: action_url,
            method:'Post',
            data: formData,
            success:function(reponse){
                alert(res);
                location.reload();
            },
            error:function(err){
                alert(err);
            }
        })

    })
});
