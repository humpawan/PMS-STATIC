// keyCode for Enter and Escape
var nEnterBtnKeyCode = 13;
var nEscapeBtnKeyCode = 27;

$(document).ready(function () {

    // open textarea when clicked on +.
    $(document).on('click', '.new-card-open', function () {

        $(this).parents('.col-md-3').find('.tasks').prepend("<textarea rows='2' " + "cols='10' " + "draggable='true' " + "id='item10' " +
            "class='form-control new-card-textarea mb-3 card card-body'" + "style='resize: none;' " + "'>");

        $(this).parents('.col-md-3').find('.new-card-textarea').focus();
    });

    // textarea loses focus when clicked outside.
    $(document).on('blur', '.new-card-', function () {
        $(this).hide();
    });

    // on escape, textarea loses focus.
    $(document).on('keyup', '.new-card-textarea', function (e) {
        if (e.keyCode == nEscapeBtnKeyCode) {
            return $(this).trigger('blur');
        }
    });

    // on enter, open new textarea.
    $(document).on('keypress', '.new-card-textarea', function (e) {

        if (e.keyCode === nEnterBtnKeyCode) {
            e.preventDefault();
            var textarea = $(this);
            taskVal = $.trim(textarea.val());


            if (taskVal !== '') {
                $(this).after(
                    "<div class='card'>"
                    + "<div class='card-body' draggable='true' id='item1'>"
                    + "<h5 class='card-title mb-3'>" + taskVal + "</h5>"
                    + "<div class='form-group'>"
                    + "<div class='input-group date'>"
                    + "<div class='assignedTo'>"
                    + "<i class='fa fa-user mr-3 pt-2' style='color: grey' "
                    + "data-container='body' data-html='true' "
                    + "data-content='Assigned To - xyz' data-placement='bottom' data-toggle='popover' data-trigger='focus' "
                    + "tabindex='0' data-original-title='' title=''>"
                    + "</i>"
                    + "</div>"
                    + "<i class='far fa-calendar-alt mr-2 pt-2' style='color: grey'></i>"
                    + "<input type='text' class='form-control pull-right datepicker'>"
                    + "</div>"
                    + "</div>"
                    + "</div>"
                    + "</div>"
                );
                $(this).val('');
            }
        }
    });


    //Date picker
    $('.datepicker').datepicker({
        autoclose: true
    });

    // popover - Assigned To
    $(function () {
        $('[data-toggle="popover"]').popover();
    });

});

$(function () {
    var kanbanCol = $('.task-panel');
    kanbanCol.css('max-height', (window.innerHeight - 150) + 'px');

    var kanbanColCount = parseInt(kanbanCol.length);
    $('.container-fluid').css('min-width', (kanbanColCount * 350) + 'px');

    draggableInit();
});

function draggableInit() {
    var sourceId;

    $('[draggable=true]').bind('dragstart', function (event) {
        sourceId = $(this).parent().attr('id');
        event.originalEvent.dataTransfer.setData("text/plain", event.target.getAttribute('id'));
    });

    $('.task-panel').bind('dragover', function (event) {
        event.preventDefault();
    });

    $('.task-panel').bind('drop', function (event) {
        var children = $(this).children();
        var targetId = children.attr('id');

        if (sourceId != targetId) {
            var elementId = event.originalEvent.dataTransfer.getData("text/plain");

            setTimeout(function () {
                var element = document.getElementById(elementId);
                children.prepend(element);
            });
        }
        event.preventDefault();
    });
}