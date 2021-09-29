$(function(){

    $("#footer-contact").on("submit",function(e){
        e.preventDefault()
        var postdata = $(this).serialize()

        $.ajax({
            type:'POST',
            url:'php/contactBack.php',
            data:postdata,
            dataType:'json',
            success:function(result){
                 if(result.isSuccess){
                     $("#footer-contact")[0].reset();
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Merci pour votre contact',
                        showConfirmButton: false,
                        timer: 1500
                    })

                 }
             
            },
            error : function(a,b,c){
                console.log(a)
                console.log(b)
                console.log(c)
            }
         });
    })


    $("#contact-form").on("submit",function(e){
        e.preventDefault()
        var postdata = $(this).serialize()

        $.ajax({
            type:'POST',
            url:'php/contactBack.php',
            data:postdata,
            dataType:'json',
            success:function(result){
                 if(result.isSuccess){
                     $("#contact-form")[0].reset();
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Merci pour votre contact',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    $('.error').html(result.nameError);
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
         
                       if(result.subjectError){
                        $('#subject + .error').html(result.subjectError);
                        $('#subject').addClass('is-invalid');
                        //$('#object').addClass('has-feedback');
                       // $('#email + .glyphicon').css('display','block');
                      }
                      else {
                        $('#subject').removeClass('is-invalid');
                        $('#subject + .error').html("");
                       // $('#object').removeClass('has-feedback');
                     //   $('#email + .glyphicon').css('display','none');
                      }
         
                       if(result.messageError){
                        $('#message + .error').html(result.messageError);
                        $('#message').addClass('is-invalid');
                     //   $('#email').addClass('has-feedback');
                       // $('#email + .glyphicon').css('display','block');
                      }
                      else {
                        $('#message').removeClass('is-invalid');
                        $('#message + .error').html("");
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