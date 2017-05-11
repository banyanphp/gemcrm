$(function () {

    $("#add_team").click(function () {
      
var data = $("#add_team_form").serialize();
var cname = $("#cname").val();
var discount = $("#discount").val();
var team = $("#team").val();
var tl_mails = $("#tl_mail").val();
   var password = $("#password").val();
   var rpassword = $("#rpassword").val();
	
	var participants = [];
        $.each($(".participants option:selected"), function(){            
            participants.push($(this).val());
        });
       var t=participants.join(", ");
        
        if (cname == '')
        {
            $('#errors').html('Enter Team Name');
            $("#cname").focus();

            return false;
        }
          if (discount == '')
        {
            $('#errors').html('Enter discount');
            $("#discount").focus();

            return false;
        }
        
       if (password.length == 0) {
                            $('#errors').html('Enter Password');
                            //alert("Enter Password");
                          
                             $("#password").focus();
                            return false;
                        }
                        // check for minimum length
                        var minLength = 6; // Minimum length
                        if (password.length < minLength) {
                            $('#errors').html('Your password must be at least ' + minLength + ' characters long. Try again.');
                            $("#password").focus();
                            return false;
                        }

                        if (password!=rpassword) {
                            $('#errors').html('Password does not match. Please make sure.');
 $("#rpassword").focus();
                           
                            return false;
                        }
		
	if (tl_mails == '')
        {
            $('#errors').html('Please Enter E-Mail');
            $("#tl_mail").focus();

            return false;
        }
	if (team == '0')
        {
            $('#errors').html('Please Select Team Head');
            $("#team").focus();

            return false;
        }
	
		
 if (t == '')
        {
            $('#errors').html("Please Select Participants");
            document.theform.participants.focus();

            return false;
        }
		
        else{
        
$.ajax({
type : 'POST',
url : 'add_team_process.php',
     data: {
            cname: cname,
            team:team,
             discount:discount, 
             test:t,
			 tl_mails:tl_mails,
               password:password,
               
            
        },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){
	
 if(response==1){
	 
$("#success").html("Team  Created successfully!");
  }
  else{
$("#errors").html("Error Occured Please Contact Your Service Provider");
  }
 setTimeout(function () {
                            $('#success').html('');
                        }, 5000);
						
						
						 setTimeout(function () {
                            $('#errors1').html('');
                        }, 5000);


}
});
}
return false;
});
});

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


