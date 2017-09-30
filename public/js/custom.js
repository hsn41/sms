$(document).ready(function () {

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
        }
    });
    $("#teachercreate").submit(function(event) {
        event.preventDefault();
        var photo_id = new FormData();
        file.append('file',$('.file')[0].files[0]);
        posting.append('file',$('.file')[0].files[0]);
        var $form = $( this ),
            url = $form.attr( 'action' );
        contentType: false,
      var posting = $.post( url, $("#teachercreate").serialize());
        posting.done(function(data) {
            alert(data);
            if(data==1)
            {

                $('#demo-default-modal').modal('toggle');
                $.niftyNoty({
                    type: 'success',
                    container : 'floating',
                    title : 'Teacher',
                    message : 'Teacher data created successfully',
                    closeBtn : false,
                    timer : 9500,
                    onShow:function(){
                        location.reload();
                    }
                });
            }
            elseif(data==0)
            {
                $('#demo-default-modal').modal('toggle');
                $.niftyNoty({
                    type: 'danger',
                    container : 'floating',
                    title : 'Teacher',
                    message : 'Teacher not created',
                    closeBtn : false,
                    timer : 9500,
                    onShow:function(){
                        location.reload();
                    }
                });

            }





        });
    });





    /* attach a submit handler to the form */




});