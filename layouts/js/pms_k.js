const nEnterBtnKeyCode = 13;
$(document).ready(function(){
    //on click of add task button
    $(document).on('click', '#add_task_btn', function (e) {
        addNewTaskObject();
    });

    $(document).on('keypress', '.to-do-task', function (e) {
        if (e.keyCode === nEnterBtnKeyCode) {
            addNewTaskObject($(this));
        }
    });

    $(document).on('blur', '.new-task', function (e) {
        if ($(this).text() === '') {
            $(this).remove();
        }
    });

});

function addNewTaskObject(currentTask) {
    if ($('.new-task').length
        && $('.new-task').text() === '') {
        return;
    }
    currentTask = (arguments.length >= 1) ? arguments[0] : null;
    var newTask = $('<li>')
        .attr("class", "task to-do-task list-group-item new-task")
        .attr("contenteditable", true)
    if (currentTask) {
        currentTask.after(newTask);
    } else {
        $(".to_do_task_list").prepend(newTask);
    }
    newTask.focus();
}


$(document).ready(function(){
    //on click of add task button
    $(document).on('click', '#add-sub-task-btn', function (e) {
        addNewSubTask();
    });

    $(document).on('keypress', '.sub-task', function (e) {
        if (e.keyCode === nEnterBtnKeyCode) {
            addNewSubTask($(this));
        }
    });

    $(document).on('blur', '.new-sub-task', function (e) {
        if ($(this).text() === '') {
            $(this).remove();
        }
    });

});

function addNewSubTask(currentSubTask) {
    if ($('.new-sub-task').length
        && $('.new-sub-task').text() === '') {
        return;
    }
    currentSubTask = (arguments.length >= 1) ? arguments[0] : null;
    var newSubTask = $('<li>')
        .attr("class", "task sub-task list-group-item new-sub-task")
        .attr("contenteditable", true)
    if (currentSubTask ) {
        currentSubTask .after(newSubTask);
    } else {
        $(".sub-task-list").prepend(newSubTask);
    }
    newSubTask.focus();
}


const textarea = document.querySelector('textarea');
textarea.addEventListener('keydown', autosize);

function autosize(){
    const el = this;
    setTimeout(function(){

        el.style.cssText = 'height:' + el.scrollHeight + 'px';
    },0);
}
