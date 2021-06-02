$(document).ready(function() {


    $('#form-obat-update').submit(function(e) {
        e.preventDefault();
        var me = $(this);
        updateObat(me);
    });

});


function updateObat(request) {
    var me = request;

    $.ajax({
        url: me.attr('action'),
        type: 'post',
        data: me.serialize(),
        dataType: 'json',
        success: function(response) {
           
            if (response.success == true) {
                $('#message-body').append('<div class="alert alert-success">'+response.message+'</div>');
                $('.form-group').removeClass('has-error').removeClass('has-success');
                $('.text-danger').remove();

                
                me[0].reset();
                $('.alert-success').delay(500).show(10, function() {
                    $(this).delay(2000).hide(10, function() {
                        $(this).remove();
                    });
                });

                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: response.message,
                    showConfirmButton: false,
                    timer: 1500
                  }) 
                      setTimeout(function(){location.replace('http://localhost/Emedica/obat/')}, 1500);
            
            } else {
                $.each(response.message, function(key, val) {
                    var element = $('#' + key);
                    element.closest('div.form-group')
                        .removeClass('has-error')
                        .addClass(val.length > 0 ? 'has-error' : 'has-success')
                        .find('.text-danger')
                        .remove();
                    element.after(val);
                });
            }
        },
        error: function(exception) {
            alert(exception + "\n" + me.serialize() + "\n" + me.attr('action') + "\n" + me.attr('method'));
        }
    });

}