$(document).ready(function(){

    $('#btnregister').click(e =>{
        let email =$('#email').val().trim();
        let email2 =$('#email2').val().trim();
        if (email != email2) {
            $('#email2').get(0).setCustomValidity('email does not match');
            $('#emess').html('email does not match');
            e.preventDefault();
        } else {
            $('#email2').get(0).setCustomValidity('');
            $('#emess').html('');
            $('#fmAddVolunteer').submit();
        }
    });
    
    
   
});