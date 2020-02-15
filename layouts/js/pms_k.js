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

    // $( function() {
    //     $( "#task_move_id" ).sortable();
    //     $( "#task_move_id" ).disableSelection();
    // } );
    //
    // $(".to_do_task_list").on('mouseenter', 'li', function () {
    //     $( ".to-do-task" ).draggable();
    // });

    // $( ".to-do-task" ).droppable({
    //     drop: function( event, ui ) {
    //         $( this )
    //             .find( "append-draggable-class" )
    //             .html( "Dropped!" );
    //     }
    // });
    // $( function() {
    //     $( ".to-do-task" ).draggable();
    // });

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

