// Check project's process percentage before creating new project
$('#project_create').submit(function(event){
    event.preventDefault();

    let percent = 0;

    $('.project_percent').each(function(index,item){
        percent += parseInt(item.value);
        console.log(percent)
    })
    
    if(percent == '100'){
        $(this)[0].submit();
    }else{
        alert('Sum of process percentage should be equal to 100');
    }
})