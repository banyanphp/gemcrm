$(function () {

    $("#reg_button").click(function () {
      
var data = $("#sales-registration").serialize();
var username = $("#ename").val();
var gender = $("#gender").val();


 var code = $("#code").val();
  var code = $("#code").val();
  var edept = $("#edept").val();
   var ecell = $("#ecell").val();
 
   var discount = $("#discount").val();
   var Grade = $("#Grade").val();
   var address = $("#address").val();

   var pincode = $("#pincode").val();
        if (username == '')
        {
            $('#errors').html('Enter names');
            $("#ename").focus();

            return false;
        }
if (e_mail == '')
        {
            $('#errors').html('Enter email');
            $("#e_mail").focus();

            return false;
        }
		                        var x = $("#e_mail").val();
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        $('#errors').html('Enter vaild Email address');
	    $("#e_mail").focus();
        return false;
    }
		 if (ecell == '')
        {
            $('#errors').html("Enter Mobile No");
            $("#ecell").focus();

            return false;
        }
		if (code == '')
        {
            $('#errors').html('Enter code');
            $("#code").focus();

            return false;
        }
 
 if (gender == '0')
        {
            $('#errors').html('Please Select gender');
            $("#gender").focus();

            return false;
        }
if (discount == '')
        {
            $('#errors').html('Enter Discount');
            $("#discount").focus();

            return false;
        }
		if (edept == '')
        {
            $('#errors').html('Enter Department');
            $("#edept").focus();

            return false;
        }
		
		if (address == '')
        {
            $('#errors').html('Enter address');
            $("#address").focus();

            return false;
        }
if (pincode == '')
        {
            $('#errors').html('Enter pincode');
            $("#pincode").focus();

            return false;
        }
		

        else{
          
$.ajax({
type : 'POST',
url : 'update_sales_process.php',
data : data,
beforeSend: function(){
$("#errors").html('');

},
success : function(response){
 if(response==1){
$("#success").html("Updated Sucessfully!");
  }
  else{
	  
$("#errors").html(response);
  }
 setTimeout(function () {
                            $('#success').html('');
							window.location.href='sales_executive_list.php';
                        }, 2000);
						
						
						 setTimeout(function () {
                            $('#errors').html('');
                        }, 21000);


}
});
}
return false;
});
});
