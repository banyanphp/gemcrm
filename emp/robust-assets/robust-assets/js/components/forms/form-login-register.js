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
			  if ((password == '123456')&& (username == 'hari')){
				  window.location.href='home.php';
				  return false;
			  }
			  else{
				 $('#errors').html('Username/Password is wrong'); 
			
			  }
			  
          

}
return false;
});
});