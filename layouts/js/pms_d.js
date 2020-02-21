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

// opens textarea when clicked on +.
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

// Sortable jquery
function initTaskSortable(){
    $(".tasks").sortable({
        connectWith: "div"
    });
}

// Date input mask
function initDateInputMask(){
    $('#datemask').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'});
}

// Date picker
function initDatepicker() {
    $('.datepicker').datepicker({
        autoclose: true
    });
}

// popover - Assigned To
function initPopOver() {
    var showPopover = function() {
        $(this).popover('toggle');
    };

    var hidePopover = function() {
        $(this).popover('hide');
    };

    $('[data-toggle="popover"]').popover({
        trigger: 'manual'
    }).click(showPopover).hover(hidePopover);
}

// Modal js

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

//text area expand on task name
const textarea = document.querySelector('.textarea-auto-resize');
const textarea1 = document.querySelector('.textarea-description-auto-resize');
textarea.addEventListener('keydown', autosize);
textarea1.addEventListener('keydown', autosize);
function autosize(){
    const el = this;
    setTimeout(function(){

        el.style.cssText = 'height:' + el.scrollHeight + 'px';
    },0);
}

//editor js
$('.textarea').summernote({
    toolbar: [
        ["style", ["style"]],
        ["font", ["bold", "underline"]],
        ["fontname", ["fontname"]],
        ["para", ["ul", "ol", "paragraph"]],
        ["table", ["table"]],
        ["view", ["codeview"]]
    ],
});

// select2
$('.select2').select2()

//Initialize Select2 Elements
$('.select2bs4').select2({
    theme: 'bootstrap4'
})

