const nEnterBtnKeyCode = 13;
$(document).ready(function(){
    //on click of add task button
    $(document).on('click', '#add_task_btn',  function(e){
        addTaskObject();
    });


    $(document).on('keypress', '.to-do-task', function (e) {
        if (e.keyCode === nEnterBtnKeyCode) {
          //  console.log('enter button pressed');
            addTaskObject($(this));
        }
    });

});

function addTaskObject(currentTask){
    var taskListLi = $('.to_do_task_list li:first').text();
    console.log(taskListLi);
    if(taskListLi ===''){

    }
    currentTask = (arguments.length >= 1) ? arguments[0] : null;
    var newTask = $('<li>')
        .attr("class", "task to-do-task list-group-item new-task")
        .attr("contenteditable", true);
     if(currentTask){
         currentTask.after(newTask);
     }else{
         $(".to_do_task_list").prepend(newTask);
     }
    newTask.focus();
}


