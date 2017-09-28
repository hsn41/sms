$(document).ready(function () {

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
        }
    });





        /* attach a submit handler to the form */
        $("#parentscreate").submit(function(event) {
            event.preventDefault();
            var $form = $( this ),
                url = $form.attr( 'action' );
            var posting = $.post( url, $("#parentscreate").serialize());
            posting.done(function(data) {
                if(data==1)
                {
                    $('#demo-default-modal').modal('toggle');
                    $.niftyNoty({
                        type: 'success',
                        container : 'floating',
                        title : 'Parents',
                        message : 'parents data created successfully',
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
                        title : 'Parents',
                        message : 'Parents not created',
                        closeBtn : false,
                        timer : 9500,
                        onShow:function(){
                            location.reload();
                        }
                    });

                }





            });
        });


});