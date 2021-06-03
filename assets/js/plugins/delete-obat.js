$(document).ready(function() {


    $('#form-obat-hapus').submit(function(e) {
        e.preventDefault();
        alert('test');
        // var me = $(this);
        // deleteObat(me);
    });

});


function deleteObat(request) {
    var me = request;

    $.ajax({
        url: me.attr('action'),
        type: 'post',
        data: me.serialize(),
        dataType: 'json',
        success: function(response) {
           
            if (response.success) {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: response.message,
                    showConfirmButton: false,
                    timer: 1500
                  }) 
                      setTimeout(function(){location.reload()}, 1500);
            
            } 
        },
        error: function(exception) {
            alert(exception + "\n" + me.serialize() + "\n" + me.attr('action') + "\n" + me.attr('method'));
        }
    });

}