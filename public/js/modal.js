
$(document).on('click',".openModal",function(e) {
    var id = $(this).attr("data-id");
    $.ajax($(this).attr("data-link"), {
        data: {id:id},
        success: function (data) {
            $("#modalContent").html(data);
            $("#Modal").modal("show");
        }
    });
});

$(document).ready(function () {
    $('.confirmclosed').click(function () {
        $('#Modal').modal('hide');
    });
     $(document).on('click',".Delete",function(e) {
        if (confirm("Вы хотите удалить?")) {
            var id = $(this).attr("data-id");
            var token = $('input[name=_token]').val();
            $.post($(this).attr("data-link"), {'_token': token, 'id':id } ,function( data ) {
                location.reload();
            });
        }
    });
});
