const nEnterBtnKeyCode = 13;
const nEscapeBtnKeyCode = 27;

/**
 * global ajax setup
 */
$.ajaxSetup({
    error: function (x, status, error) {
        if (x.status === 422) {
            toastr.error(x.responseJSON.message)
        }
    },
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

/**
 * input textbox focus for all create modals
 */
$('.modal').on('shown.bs.modal', function () {
    var oModal = $(this);
    oModal.find('input').focus();
});

/**
 * reset all form attribute on modal close
 */
$('.modal').on('hidden.bs.modal', function(e){
    var oModal = $(this);
    var oForm = oModal.find('form');
    if(oForm.length){
        oForm[0].reset();
    }
});


//TODO: check if working for outside click of an object
(function($){
    $.fn.outside = function(ename, cb){
        return this.each(function(){
            var $this = $(this),
                self = this;

            $(document).bind(ename, function tempo(e){
                if(e.target !== self && !$.contains(self, e.target)){
                    cb.apply(self, [e]);
                    if(!self.parentNode) $(document.body).unbind(ename, tempo);
                }
            });
        });
    };
}(jQuery));
