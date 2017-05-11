$(function () {

    $("#target_button").click(function () {
      
var data = $("#add_target").serialize();
var from = $("#from").val();
var to = $("#to").val();
var amt = $("#amt").val();
 var dryerqty = $("#dryerqty").val();
  var chillerqty = $("#chillerqty").val();
  var coolerqty = $("#coolerqty").val();
   var target_varqty = $("#target_varqty").val();
 
   var smallqty = $("#smallqty").val();
   var enquiry = $("#enquiry").val();
   var campaign = $("#campaign").val();

        if (from == '')
        {
            $('#errors').html('Enter from date');
            $("#from").focus();

            return false;
        } if (to == '')
        {
            $('#errors').html('Enter to date');
            $("#to").focus();

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
url : 'add_target_process.php',
data : data,
beforeSend: function(){
$("#errors").html('');
$("#target_button").html('Please Wait');
},
success : function(response){
$("#target_button").html('Save');
 if(response==1){
$("#success").html("Target Created Sucessfully!");
 setTimeout(function () {
                            $('#success').html('');
window.location.href='target_list.php';
                        }, 2000);
  }
  else if(response==3){
$("#errors").html("Target Already created");
		 setTimeout(function () {
                            $('#errors').html('');
                        }, 2000);

  }

						
		  else {
$("#errors").html("Error Occured");
		 setTimeout(function () {
                            $('#errors').html('');
                        }, 2000);

  }				
  }				
				


});
}
return false;
});
});
