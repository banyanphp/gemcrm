$(function () {

    $("#target_button").click(function () {
      
var data = $("#add_target").serialize();
var year = $("#year").val();
var amt = $("#amt").val();
var team = $("#team").val();
var month = $("#month").val();
 var dryerqty = $("#dryerqty").val();
  var chillerqty = $("#chillerqty").val();
  var coolerqty = $("#coolerqty").val();
   var target_varqty = $("#target_varqty").val();
 
   var smallqty = $("#smallqty").val();
   var enquiry = $("#enquiry").val();
   var campaign = $("#campaign").val();

        if (year == '0')
        {
            $('#errors').html('Select year');
            $("#year").focus();

            return false;
        }
		 if (team == '0')
        {
            $('#errors').html('Select team');
            $("#team").focus();

            return false;
        }
		 if (month == '0')
        {
            $('#errors').html('Select month');
            $("#month").focus();

            return false;
        }
if (amt == '')
        {
            $('#errors').html('Enter amount');
            $("#amt").focus();

            return false;
        }
 if (dryerqty == '')
        {
            $('#errors').html("Enter dryer quantity");
            $("#dryerqty").focus();

            return false;
        }
		if (chillerqty == '')
        {
            $('#errors').html('Enter chiller quantity');
            $("#chillerqty").focus();

            return false;
        }
 
 if (coolerqty == '')
        {
            $('#errors').html('Please  cooler quantity');
            $("#coolerqty").focus();

            return false;
        }
if (target_varqty == '')
        {
            $('#errors').html('Enter var Products Qty');
            $("#target_varqty").focus();

            return false;
        }
		if (smallqty == '')
        {
            $('#errors').html('Enter small products quantity');
            $("#smallqty").focus();

            return false;
        }
		if (enquiry == '')
        {
            $('#errors').html('Enter enquiry');
            $("#enquiry").focus();

            return false;
        }
if (campaign == '')
        {
            $('#errors').html('Enter campaign');
            $("#campaign").focus();

            return false;
        }
		

        else{
          
$.ajax({
type : 'POST',
url : 'add_team_target_process.php',
data : data,
beforeSend: function(){
$("#errors").html('');

},
success : function(response){
 if(response==1){
$("#success").html("Target Created Sucessfully!");
  }
  else if(response==3){
$("#errors").html("Already Exist!");
  }
  else{
//$("#errors").html("Error Occured");
$("#errors").html(response);
  }
 setTimeout(function () {
                            $('#success').html('');
window.location.href='target_list.php';
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
