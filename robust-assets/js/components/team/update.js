$(function () {

    $("#add_team").click(function () {
      
var data = $("#add_team_form").serialize();
var cname = $("#cname").val();
var discount = $("#discount").val();
var team = $("#team").val();
var tl_mail = $("#tl_mail").val();
var t_id = $("#t_id").val();

	
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
        

		
if (team == '0')
        {
            $('#errors').html('Please Select Team Head');
            $("#team").focus();

            return false;
        }
			
if (tl_mail == '')
        {
            $('#errors').html('Enter email');
            $("#tl_mail").focus();

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
url : 'update_team_process.php',
     data: {
            cname: cname,
            tl_mail: tl_mail,
            team:team,
             discount:discount, 
             test:t,
             t_id:t_id,             
            
        },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){
 if(response==1){
$("#success").html("Team  Updated successfully!");
 setTimeout(function () {
                            $('#success').html('');
							window.location.href='team_list.php';
                        }, 3000);
						
  }
  else{
$("#errors").html("Error Occured Please Contact Your Service Provider");
	 setTimeout(function () {
                            $('#errors1').html('');
                        }, 3000);
  }

						
					


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


