$(function () {

    $("#enq_update").click(function () {

        var data = $("#enq_update").serialize();
       
       
		        var cemail = $("#cemail").val();
		        var phone = $("#phone").val();
		        var enq_pin = $("#enq_pin").val();
		        var cphno = $("#cphno").val();
		        var enq_specification = $("#enq_specification").val();
		        var enq_model = $("#enq_model").val();
		        var type = $("#type").val();
		        var models = $("#models").val();
var qty=$('#qty').val();
var price=$('#prices').val();
var status=$('#status').val();

      
       


   if (phone == '')
        {
            $('#errors').html("Enter Mobile No");

$("#phone").focus();

            return false;
        }
		
		if (cemail == '')
        {
			  $('#errors').html('Enter  Email address');
                $("#cemail").focus();
		}	if (cemail == '')
      
        if (cemail != '') {
            var x = $("#cemail").val();
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                $('#errors').html('Enter vaild Email address');
                $("#cemail").focus();
                return false;
            }
        }
		
      
         if (enq_pin == '') 
		  {
			  $('#errors').html('Enter  Pin Code');
                $("#enq_pin").focus();
		    return false;
            }
			  if (cphno == '') 
		  {
			  $('#errors').html('Enter  Phone No');
                $("#cphno").focus();
		    return false;
            }
			
			
			  if (enq_specification == '') 
		  {
			  $('#errors').html('Enter specification');
                $("#enq_specification").focus();
		    return false;
            }

			if (enq_model == '0') 
		  {
			  $('#errors').html('Enter Model No');
                $("#enq_model").focus();
		    return false;
            }	if (models == '0') 
		  {
			  $('#errors').html('Enter Model');
                $("#models").focus();
		    return false;
            }
				if (type == '') 
		  {
			  $('#errors').html('Enter Model type');
                $("#type").focus();
		    return false;
            }
			
		  
		  else {

            $.ajax({
                type: 'POST',
                url: 'update_enquiry_process.php',
                data: data,
                beforeSend: function () {
                    $("#errors").html('');

                },
                success: function (response) {
					alert(response);
                    if (response == 1) {
                        $("#success").html("Enquiry Alloted successfully!");
                    } else {
	$("#errors").html(response);
				
//$("#errors").html("Error Occured ");
                    }
                    setTimeout(function () {
                        $('#success').html('');
						window.location.href='enquiry_list.php';
                    }, 10000);


                    setTimeout(function () {
                        $('#errors').html('');
                    }, 10000);


                }
            });
        }
        return false;
    });
});

