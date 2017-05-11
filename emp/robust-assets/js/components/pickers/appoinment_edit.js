$(function () {

    $("#appoinment_update_submit").click(function () {
     
		var data = $("#update_appoinment_form").serialize();
			var appoint_date	 = $("#appoint_date").val();
            var appoint_tme		 = $("#textColor").val();
            var appoint_Cmpny 	 = $("#appoint_Cmpny").val();
            var appoint_thrugh = $("#appoint_thrugh").val();
            var appoint_locatn = $("#appoint_locatn").val();
			var appoint_cmd 	= $("#appoint_cmd").val();
			var id				= $('#id');
	
	
        if (appoint_date == '')
            {
                $('#errors').html('Enter Appointment date ');
                $("#appoint_date").focus();

                return false;
            }
		if (appoint_tme == '')
            {
                $('#errors').html('Enter Appointment time  ');
                $("#appoint_tme").focus();

                return false;
            }
		if (appoint_Cmpny == '')
            {
                $('#errors').html('Enter Appointment Company Name  ');
                $("#appoint_Cmpny").focus();

                return false;
            }
		                      
		 
		if (appoint_thrugh == '')
            {
                $('#errors').html('Enter Appointment Through  ');
                $("#appoint_thrugh").focus();

                return false;
            }
           
        if (appoint_locatn == '')
            {
                $('#errors').html('Enter Appointment location ');
                $("#appoint_locatn").focus();

                return false;
            }
		if (appoint_cmd == '')
            {
                $('#errors').html('Enter Appointment Commend ');
                $("#appoint_cmd").focus();

                return false;
            }
		
        else{
        
$.ajax({
type : 'POST',
url : 'appointmen_update.php',
     data: data,
beforeSend: function(){
$("#errors").html('');

},
success : function(response){
 if(response==1){
$("#success").html("Appointment Updated successfully! please wait...");
  }
  else{
	  $("#errors").html(response);
//$("#errors").html("Error Occured Please Contact Your Service Provider");
  }

 setTimeout(function () {
                            $('#success').html('');
							window.location.href='appointment_list.php';
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

