const nEnterBtnKeyCode = 13;
$(document).ready(function(){
    //on click of add task button
    $(document).on('click', '#add_task_btn', function (e) {
        addNewTaskObject();
    });

        $('.datepicker').datepicker({
            autoclose: true,
            container:'.user-date-picker'
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
    var toggle = true;
    $(".down-arrow").on("click", function(e){
        if(toggle){
            $('.support-support-type').show();
            $(".support-support-type").attr('size', 3); // show all 3 options
            toggle = false;
        }
        else{
            $('.support-support-type-two').hide();
            $('.support-support-type').hide();
            $("select.support-support-type").attr('size', 1); // show only the selected option
            toggle = true;
        }
    });
    var toggle = true;
    $(".down-arrow-two").on("click", function(){
        if(toggle){

            $('.support-support-type-two').show();
            $(".support-support-type-two").attr('size', 3); // show all 3 options
            toggle = false;
        }
        else{
            $('.support-support-type').hide();
         //   $('.support_support_type').hide();
            $('.support-support-type-two').hide();
            $("select.support-support-type-two").attr('size', 1); // show only the selected option
            toggle = true;
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

