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
        var tasks           = [];
        var action_url          =   $(this).attr('action');
        var token               =   $(this).find('input[name="_token"]').val();
        var title               =   $(this).find('input[name="title"]').val();
        var subject             =   $(this).find('input[name="subject"]').val();
        var manager_id          =   $(this).find('select[name="manager_id"]').val();
        var start_date           =   $(this).find('input[name="start_date"]').val();
        var dead_date           =   $(this).find('input[name="dead_date"]').val();
        var color               =   $(this).find('input[name="color"]').val();
        var applicant_unit_id   =   $(this).find('input[name="applicant_unit_id"]').val();
        var operating_unit_id   =   $(this).find('select[name="operating_unit_id"]').val();
        var priority            =   $(this).find('select[name="priority"]').val();
        var supervisor_id       =   $(this).find('select[name="supervisor_id"]').val();
        var desc                =   $(this).find('textarea[name="desc"]').val();
        $('.mr-group').each(function(index,item){
            var task = {};
            task.title          = form.find('input[name="task_title"]').val();
            task.operator_id    = form.find('select[name="task_operator_id"]').val();
            task.percent        = form.find('input[name="task_percent"]').val();
            task.estimated_time = form.find('input[name="task_hour"]').val() + '.' + form.find('input[name="task_min"]').val();
            task.priority       = form.find('select[name="task_priority"]').val();
            task.desc           = form.find('textarea[name="task_desc"]').val();
            task.color           = form.find('input[name="task_color"]').val();
            tasks.push(task);
        })
        // console.log(title,category,project_manager,date,applicant_unit,operating_unit,priority,supervisor,desc);
        // console.log(processes);
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
        }
        console.log(formData);

        $.ajax({
            url: action_url,
            method:'Post',
            data: formData,
            success:function(reponse){
                console.log(reponse)
            }
        })

    })
});
