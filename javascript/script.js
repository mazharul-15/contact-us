/*---------------------------------------------------------------------
Email Sending function using SMTP
---------------------------------------------------------------------*/
function sendEmail() {
    // e.preventDefault();
    var name = jQuery("#name").val();
    var email = jQuery("#email").val();
    var mobile = jQuery("#mobile").val();
    var comment = jQuery("#comment").val();
    // console.log("HELLLLLLLLLLLLLL!!");
    jQuery.ajax({
        url: 'send_email.php',
        type: 'POST',
        data: 'name=' + name + '&email=' + email + '&mobile=' + mobile + '&comment=' + comment,
        success: function (result) {
            console.log(result);
            // console.log("HELLLLLLLLLLLLLL!!!!!2222");
            jQuery("#email-message").html(result);
        }
    });
}

