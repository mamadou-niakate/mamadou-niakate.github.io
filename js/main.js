
/*  permettre à l'entete de prendre toute la hauteur de la fenêtre */
$(document).ready(function(){
    $('.header').height($(window).height());
    
})

/** effet de scroll*/
$(".navbar a").click(function(){
    $("body,html").animate({
     scrollTop:$("#" + $(this).data('value')).offset().top
    },1000)
})


/*----------------------- VALIDATION DU FORMULAIRE DE CONTACT -------------------------*/

$(document).ready(function () {
  var toValidate = jQuery('#username, #userEmail, #content'),
  valid = false;
  toValidate.keyup(function () {
    if (jQuery(this).val().length > 0) {
        jQuery(this).data('valid', true);
    } else {
        jQuery(this).data('valid', false);
    }

    toValidate.each(function () {
        if (jQuery(this).data('valid') == true) {
            valid = true;
        } else {
            valid = false;
        }
    });

    if (valid === true) {
        jQuery("#Submit").prop('disabled', false);
    } else {
        jQuery("#Submit").prop('disabled', true);
    }
    });
})

