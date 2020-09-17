$(function() {
    "use strict";
    var formError = true,  // setting error status
        message = true;
    $(".email, .name, .phone, .subject").blur(function (){  // click out event
        if($(this).val().length < 5){    // less than 5 car
            $(this).parent().find('.error').fadeIn(200);
            $(this).css('border','1px solid red');
            formError = true;
        } else{
            $(this).parent().find('.error').fadeOut(200);
            $(this).css('border','1px solid green');
            formError = false;
        }
        if($(this).val().length > 30){   // more than 30 car
            $(this).parent().find('.more-than').fadeIn(200);
            $(this).css('border','1px solid red');
            formError = true;
        }else{
            $(this).parent().find('.more-than').fadeOut(200);
            $(this).css('border','1px solid grean');
            formError = false;
        }
    }); // End of blur event
    /* Begin message validation */
    $('.messages').blur(function (){
        if($(this).val().length < 10){  // message less than 10 car
            $(this).parent().find('.error').fadeIn(200);
            $(this).css('border','1px solid red');
            message = true;
        }else {
            $(this).parent().find('.error').fadeOut(200);
            $(this).css('border','1px solid green');
            message = false;
        }
        if($(this).val().length > 100){
            $(this).parent().find('.more-than').fadeIn(200);
            $(this).css('border','1px solid red');
            message = true;
        } else {
            $(this).parent().find('.more-than').fadeOut(200);
            $(this).css('border','1px solid green');
            message = false;
        }
    }); // end of messages blur
    /* End of message validation */
/* Begin check form and submit if no errors */
    $('.submit').submit(function (e){
        if (formError === true || message === true){
            e.preventDefault();
        }
        });
/* End check form and submit if no errors */
});
