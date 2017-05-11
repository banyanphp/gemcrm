$(function () {

    $("#target_button").click(function () {
      
var data = $("#add_target").serialize();
var amt = $("#amt").val();
 var dryerqty = $("#dryerqty").val();
  var chillerqty = $("#chillerqty").val();
  var coolerqty = $("#coolerqty").val();
   var target_varqty = $("#target_varqty").val();
 
   var smallqty = $("#smallqty").val();
   var enquiry = $("#enquiry").val();
   var campaign = $("#campaign").val();

      
if (amt == '0' || amt =='')
        {
            $('#errors').html('Enter amount');
            $("#amt").focus();

            return false;
        }
 if (dryerqty == '0' || dryerqty =='')
        {
            $('#errors').html("Enter dryer quantity");
            $("#dryerqty").focus();

            return false;
        }
		if (chillerqty == '0'|| chillerqty =='')
        {
            $('#errors').html('Enter chiller quantity');
            $("#chillerqty").focus();

            return false;
        }
 
 if (coolerqty == '0'|| coolerqty =='')
        {
            $('#errors').html('Please  cooler quantity');
            $("#coolerqty").focus();

            return false;
        }
if (target_varqty == '0'|| target_varqty =='')
        {
            $('#errors').html('Enter var Products Qty');
            $("#target_varqty").focus();

            return false;
        }
		if (smallqty == '0'|| smallqty =='')
        {
            $('#errors').html('Enter small products quantity');
            $("#smallqty").focus();

            return false;
        }
		if (enquiry == '0'|| enquiry =='')
        {
            $('#errors').html('Enter enquiry');
            $("#enquiry").focus();

            return false;
        }
if (campaign == '0'|| campaign =='')
        {
            $('#errors').html('Enter campaign');
            $("#campaign").focus();

            return false;
        }
		

        else{
          
$.ajax({
type : 'POST',
url : 'edit_team_target_process.php',
data : data,
beforeSend: function(){
$("#errors").html('');

},
success : function(response){
 if(response==1){
$("#success").html("Target Created Sucessfully!");
  }
  else{
$("#errors").html("Error Occured");
  }
 setTimeout(function () {
                            $('#success').html('');
window.location.href='target_list_team.php';
                        }, 2000);
						
						
						 setTimeout(function () {
                            $('#errors').html('');
                        }, 2000);


}
});
}
return false;
});
});
