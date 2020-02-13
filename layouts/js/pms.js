const nEnterBtnKeyCode = 13;

$(document).ready(function(){

    //on click of add task button
    $(document).on('click', '#add_task_btn',  function(e){
        alert('hello');
        addTaskObject();
    });


    $(document).on('keypress', '.task-create-input-box', function (e) {
        if (e.keyCode === nEnterBtnKeyCode) {
            console.log('enter button pressed');
            addTaskObject();
        }
    });

});

function addTaskObject(){
    $("#append_task_text_box").append("<br>" +
        "<input class='form-control task-create-input-box task' type='text' value='write a task here'/>");
}

