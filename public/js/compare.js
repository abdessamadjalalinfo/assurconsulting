$(function(){
    $("#compare").on("submit",function(e){
        e.preventDefault()
        var postdata = $(this).serialize()

        $.ajax({
            type:'POST',
            url:'php/compareBack.php',
            data:postdata,
            dataType:'json',
            success:function(result){
                 if(result.isSuccess){
                     $("#compare")[0].reset();
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Merci pour votre demande',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    $('.error').html("");
                    $('.is-invalid').removeClass('is-invalid');
                 }else{
                    if(result.nameError){
                        $('#name + .error').html(result.nameError);
                     //   $('#nom + .glyphicon').css('display','inline');
                        $('#name').addClass('is-invalid');
                       // $('#nom').addClass('has-feedback');
                        
                      }
                      else {
                        $('#name').removeClass('is-invalid');
                        $('#name + .error').html("");
                        //$('#nom').removeClass('has-feedback');
                    //    $('#nom + .glyphicon').css('display','none');
                      }
                        
                        if(result.emailError){
                        $('#email + .error').html(result.emailError);
                        $('#email').addClass('is-invalid');
                        //$('#email').addClass('has-feedback');
                       // $('#email + .glyphicon').css('display','block');
                      }
                      else {
                        $('#email').removeClass('is-invalid');
                        $('#email + .error').html("");
                      //  $('#email').removeClass('has-feedback');
                     //   $('#email + .glyphicon').css('display','none');
                      }
         
                       if(result.phoneError){
                        $('#phone + .error').html(result.phoneError);
                        $('#phone').addClass('is-invalid');
                        //$('#object').addClass('has-feedback');
                       // $('#email + .glyphicon').css('display','block');
                      }
                      else {
                        $('#phone').removeClass('is-invalid');
                        $('#phone + .error').html("");
                       // $('#object').removeClass('has-feedback');
                     //   $('#email + .glyphicon').css('display','none');
                      }
         
                       if(result.naissanceError){
                        $('#naissance + .error').html(result.naissanceError);
                        $('#naissance').addClass('is-invalid');
                     //   $('#email').addClass('has-feedback');
                       // $('#email + .glyphicon').css('display','block');
                      }
                      else {
                        $('#naissance').removeClass('is-invalid');
                        $('#naissance + .error').html("");
                        //$('#email').removeClass('has-feedback');
                     //   $('#email + .glyphicon').css('display','none');
                      }
                      if(result.postalError){
                        $('#postal + .error').html(result.postalError);
                        $('#postal').addClass('is-invalid');
                     //   $('#email').addClass('has-feedback');
                       // $('#email + .glyphicon').css('display','block');
                      }
                      else {
                        $('#postal').removeClass('is-invalid');
                        $('#postal + .error').html("");
                        //$('#email').removeClass('has-feedback');
                     //   $('#email + .glyphicon').css('display','none');
                      }

                      if(result.formuleError){
                        $('#formule + .error').html(result.formuleError);
                        $('#formule').addClass('is-invalid');
                     //   $('#email').addClass('has-feedback');
                       // $('#email + .glyphicon').css('display','block');
                      }
                      else {
                        $('#formule').removeClass('is-invalid');
                        $('#formule + .error').html("");
                        //$('#email').removeClass('has-feedback');
                     //   $('#email + .glyphicon').css('display','none');
                      }

                 }
             
            },
            error : function(a,b,c){
                console.log(a)
                console.log(b)
                console.log(c)
            }
         });
    })
})