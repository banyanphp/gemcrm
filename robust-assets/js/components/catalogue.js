$(function () {

    $("#catalogue_submit").click(function () {

		var data = $("#catalogue_submit_form").serialize();
		var catalogue_mail= $("#snd_cat").val();
	

var lengths=$('[name="type[]"]:checked').length;

        if (catalogue_mail == '')
            {
                $('#errors1').html('Enter Catalogue Mail ');
                $("#snd_cat").focus();

                return false;
            }
			  if (lengths == '0')
            {
                $('#errors1').html('Please select any catalogue');
				
                

                return false;
            }
        else{
        
$.ajax({
type : 'POST',
url : 'mail_catalogue.php',
     data: data,
	 

beforeSend: function(){
$("#errors1").html('');
 $('#catalogue_submit').html('Please Wait');
},
success : function(response){
 $('#catalogue_submit').html('send');
	
 if(response==1){
$("#successe").html("catalogue Mail Send successfully!");
  }
  else{
	  $("#errors1").html(response);
//$("#errors1").html("Error Occured Please Contact Your Service Provider");
  }

 setTimeout(function () {
                            $('#success').html('');
                        }, 1000);
						
						
 setTimeout(function () {
                            $('#errors1').html('');
                        }, 1000);


}
});
}
return false;
});
});

