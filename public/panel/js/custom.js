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
        $('.mr-group').each(function(index,item){
            var process = {};
            process.process_title = form.find('input[name="process_title"]').val();
            process.process_operator = form.find('select[name="process_operator"]').val();
            process.process_percent = form.find('input[name="process_percent"]').val();
            process.process_due_time = form.find('input[name="process_hours"]').val() + '/' + form.find('input[name="process_minutes"]').val();
            process.process_priority = form.find('select[name="process_priority"]').val();
            process.process_desc = form.find('textarea[name="process_desc"]').val();
            processes.push(process);
        })
        // console.log(title,category,project_manager,date,applicant_unit,operating_unit,priority,supervisor,desc);
        // console.log(processes);
        var formData = {
            'title': title,
            '_token':token,
            'category': category,
            'project_manager': project_manager,
            'due_time': due_time,
            'applicant_unit': applicant_unit,
            'operating_unit': operating_unit,
            'priority': priority,
            'supervisor': supervisor,
            'desc': desc,
            'processes': processes,
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
