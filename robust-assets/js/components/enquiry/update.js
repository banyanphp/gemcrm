$(function () {

    $("#enq_update").click(function () {

        var data = $("#enq-update").serialize();
       
        var enq_user = $("#enq_user").val();
        var enq_team = $("#enq_team").val();

      
       



      
        
		   if (enq_team == '0' && enq_user == '0')
        {
            $('#errors').html("Please Select Team Or user");



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
					
                    if (response == 1) {
                        $("#success").html("Enquiry Alloted successfully!");
                    } else {
	$("#errors").html(response);
				
//$("#errors").html("Error Occured ");
                    }
                    setTimeout(function () {
                        $('#success').html('');
						window.location.href='enquiry_list.php';
                    }, 1000);


                    setTimeout(function () {
                        $('#errors').html('');
                    }, 1000);


                }
            });
        }
        return false;
    });
});

