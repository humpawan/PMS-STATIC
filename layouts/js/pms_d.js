// keyCode for Enter and Escape
var nEnterBtnKeyCode = 13;
var nEscapeBtnKeyCode = 27;


$(document).ready(function ()
{
    initDatepicker();
    initPopOver();
    initDateInputMask();
    initTaskSortable();
});
//
$(document).on('click', '.new-task', function () {

    $(this).parents('.task-list').find('.tasks').prepend("<textarea rows='3' " + "cols='10' " +
        "class='form-control new-task-textarea mt-2 mb-3'" + "style='resize: none;' " + "'>");

    $(this).parents('.task-list').find('.new-task-textarea').focus();
});

// textarea loses focus when clicked outside.
$(document).on('blur', '.new-task-textarea', function () {
    $(this).hide();
});

// on escape, textarea is closed.
$(document).on('keyup', '.new-task-textarea', function (e) {
    if (e.keyCode == nEscapeBtnKeyCode) {
        return $(this).trigger('blur');
    }
});

// on enter, open new task.
$(document).on('keypress', '.new-task-textarea', function (e) {

    if (e.keyCode === nEnterBtnKeyCode) {
        e.preventDefault();
        var textarea = $(this);
        taskVal = $.trim(textarea.val());

        if (taskVal !== '') {
            $(this).after(
                "<div class='card task'>"
                + "<div class='card-body'>"
                + "<h5 class='card-title task-title mb-3'>" + taskVal + "</h5>"
                + "<div class='form-group'>"
                + "<div class='input-group date'>"
                + "<div class='assignedTo'>"
                + "<i class='fa fa-user mr-3 pt-2' style='color: grey' "
                + "data-container='body' data-html='true' "
                + "data-content='Assigned To - xyz' data-placement='bottom' data-toggle='popover' data-trigger='focus' "
                + "tabindex='0' data-original-title='' title=''>"
                + "</i>"
                + "</div>"
                + "<div class='input-group-prepend'>"
                + "<span class='input-group-text'><i class='far fa-calendar-alt' style='color: grey'></i></span>"
                + "</div>"
                + "<input type='text' name='task-date' class='form-control pull-right datepicker task-date' data-inputmask-alias='datetime' "
                + "data-inputmask-inputformat='mm/dd/yyyy' data-mask placeholder='Date'>"
                + "</div>"
                + "</div>"
                + "</div>"
                + "</div>"
            );
            $(this).val('');
            initDatepicker();
            initPopOver();


        }
    }
});

//Datemask dd/mm/yyyy
function initDateInputMask(){
    $('#datemask').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'});
}

function initDatepicker() {
    $('.datepicker').datepicker({
        autoclose: true
    });
}

// // popover - Assigned To
function initPopOver() {
    var showPopover = function() {
        $(this).popover('toggle');
    };

    $('[data-toggle="popover"]').click(showPopover);
}

function initTaskSortable(){
    // Sortable jquery
    $(".tasks").sortable({
        connectWith: "div"
    });
}
