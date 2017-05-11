$(function () {

    $("#sales-registration").on("submit", (function(g) {
var data = $("#sales-registration").serialize();
var username = $("#ename").val();
var gender = $("#gender").val();


 var code = $("#code").val();
  var code = $("#code").val();
  var edept = $("#edept").val();
   var ecell = $("#ecell").val();
   var password = $("#password").val();
   var rpassword = $("#rpassword").val();
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
url : 'add_sales_process.php',
data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
beforeSend: function(){
$("#errors").html('');
$("#reg_button").html('Please Wait');
},
success : function(response){
	  $('#success').html('');
$("#reg_button").html('Save');

 if(response==1){
$("#success").html("Employee added successfully!");
  }
  else{
$("#errors").html("Employee Already Exist");
  }
document.getElementById("sales-registration").reset();
 setTimeout(function () {
                            $('#success').html('');
							window.location.href='sales_executive_list.php';

                        }, 2000);
						
						
						 setTimeout(function () {
                            $('#errors').html('');
                        }, 2000);


}
});
}
return false;
}));
});

