$(function () {

    $("#edit_campaign").click(function () {
   
var data = $("#edit_campaign_form").serialize();
var cname = $("#cname").val();
var cplace = $("#cplace").val();
var description = $("#description").val();
var date = $("#from").val();
var id = $("#ids").val();

	

        
        if (cname == '')
        {
            $('#errors').html('Enter Campaign Name');
            $("#cname").focus();

            return false;
        }
if (cplace == '')
        {
            $('#errors').html('Enter Campaign Place');
            $("#cplace").focus();

            return false;
        }
		                      
		 if (description == '')
        {
            $('#errors').html("Enter description");
            $("#description").focus();

            return false;
        }
		

		
        else{
        
$.ajax({
type : 'POST',
url : 'edit_campaign_process.php',
     data: {
            cname: cname,
            cplace:cplace,
            cdescription:description,
            date:date,
		
		id:id,
            
        },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){
	
 if(response==1){
$("#success").html("Campaign  Scheduled successfully!");
  }
  else{
	  $("#errors").html(response);
//$("#errors").html("Error Occured Please Contact Your Service Provider");
  }
 setTimeout(function () {
                            $('#success').html('');
							                            window.location.href='campaign_list.php';

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

