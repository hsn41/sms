$(document).ready(function () {


   $('.parent').each(function () {
      $(this).click(function (event) {

          $('#titleParent').text('Update Parent');
          $('#savechanges').show();
          $('#addparent').hide();

      });
   });
   $('#demo-dt-ad-btn').click(function (event) {
       $('#titleParent').text('Add Parent');
       $('#savechanges').hide();
       $('#addparent').show();

   });
    // $('#addparent').click(function(event){
    //     event.preventDefault();
    //     $.ajax({
    //         type:"POST",
    //         url:'admin/parents/create',
    //         data:$('parentform').serialize(),
    //         datatype:"text",
    //
    //         success: function(strMessage){
    //             $('#msg').text(strMessage)
    //             alert('strMessage');
    //         }
    //
    //
    //     });
    // });

   $('#addparent').click(function (event) {

       var name=$('#name').val();
       var profession=$('#profession').val();
       var address=$('#address').val();
       var email=$('#email').val();
       var password=$('#password').val();

       $.post('parents',{'name':name,'profession':profession,'address':address,'email':email,'password':password},function (data) {
           console.log(data);
       });
   });
});