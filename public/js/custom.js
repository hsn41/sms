$(document).ready(function () {

    $(document).on('click','.show-edit-modal',function () {
        var action = $(this).data('action');
        $('#dynamic-content').hide();
        $('#modal-loader').show();
        $.ajax({
            type: "GET",    //////////type post or get
            url: action,    ////getting form data-action from btn
            dataType :"html",
            success:function(data){

                $('#dynamic-content').show();
                $('#modal-loader').hide();
                $('#dynamic-content').html(data);


            }
        });
    });

    $(document).on('click','.show-delete-modal',function () {

        var action =$(this).data('action');
        $('#deleteForm').attr('action',action);
    });




    /* attach a submit handler to the form */
    $("#flash_message").keyup(function(event) {
        var title = $("#flash_title").val() ;
        var message = $("#flash_message").val();
        var type = $("#flash_type").val();
        $.niftyNoty({
            type: type,
            container : 'floating',
            title : title,
            message : message,
            closeBtn : false,
            timer : 5000

        });

    });
$(document).ready(function(){$.uploadPreview({input_field:"#image-upload",preview_box:"#image-preview",label_field:"#image-label"})});

    $('#flash_message').trigger('keyup');

});