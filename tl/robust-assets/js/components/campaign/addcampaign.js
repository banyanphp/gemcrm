$(function () {

    $("#add_campaign").click(function () {
      
var data = $("#add_campaign_form").serialize();
var cname = $("#cname").val();
var cplace = $("#cplace").val();
var description = $("#description").val();
var date = $("#from").val();

	
	var participants = [];
        $.each($(".participants option:selected"), function(){            
            participants.push($(this).val());
        });
       var t=participants.join(", ");
        
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
		
 if (t == '')
        {
            $('#errors').html("Please Select Participants");
            document.theform.participants.focus();

            return false;
        }
		
        else{
        
$.ajax({
type : 'POST',
url : 'add_campaign_process.php',
     data: {
            cname: cname,
            cplace:cplace,
            cdescription:description,
            date:date,
		test:t,
            
        },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){
	
 if(response==1){
$("#success").html("Campaign  Scheduled successfully!");
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

