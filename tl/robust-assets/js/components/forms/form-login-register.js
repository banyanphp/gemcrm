$(function () {
    $(document).on("keyup", "input#user-name", function () {

        $('#errors').html('');
    });
    $(document).on("keyup", "input#user-password", function () {
 $('#errors').html('');

    });
 

});
		$(function () {

    $("#login_button").click(function () {
        
var data = $("#login-form").serialize();
var username = $("#user-name").val();
 var password = $("#user-password").val();
 if (username == '')
        {
            $('#errors').html('Enter UserName');
            $("#user-name").focus();

            return false;
        }

        if (password == '')
        {
            $('#errors').html('Enter your password');
            $("#user-password").focus();

            return false;
        }
          else{
          
$.ajax({
type : 'POST',
url : 'login_check.php',
data : data,
beforeSend: function(){
//$("#errors").fadeOut();
$("#login_button").html('Please wait..');
},
success : function(response){
//alert(response);
if(response==1){
$("#login_button").html('Signing In ...');
 window.location.href = "home.php";
} 

else{
$("#login_button").html('<i class="icon-unlock2"></i> Login');
$("#errors").html(response);
}


}
});
}

return false;
});
});