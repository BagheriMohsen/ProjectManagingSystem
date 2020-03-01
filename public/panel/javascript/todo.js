$(document).ready(function(){


    $('#todo-create').submit(function(e){
        e.preventDefault()
        var actionUrl = $(this).attr("action");
        var token  = $(this).find("input[name='_token']").val();
        var desc  = $(this).find("input[name='desc']").val();

        var form_data = new FormData();
        form_data.append( 'desc', desc );
        form_data.append( '_token', token );

        $.ajax({
            url: actionUrl,
            type: "POST",
            data: form_data,
            success: function (msg) {
              alert("its created")
            },
            processData: false,
            contentType: false,
         
          });

    });


    


});

