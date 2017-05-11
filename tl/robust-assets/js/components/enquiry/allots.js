$(function () {

    $("#enq_update").click(function () {

        var data = $("#enq_update_form").serialize();
			        var permission = $("#permission").val();
			       
					if(permission=='1'){
						 var alloted = $("#participants").val();
						 if(alloted=='0'){
							 $('#errors').html('Please Select Members');
                $("#participants").focus();
		    return false;
						 }
						 else{
						
						$.ajax({
                type: 'POST',
                url: 'update_enquiry_process3.php',
                data: data,
                beforeSend: function () {
                    $("#errors").html('');
 $("#enq_update").html('Please Wait');
                },
                success: function (response) {
			 $("#enq_update").html('Save');

				if(response=='1'){
					 $("#success").html("Allotment Created successfully!");
					 setTimeout(function () {
                        $('#success').html('');
						window.location.href='enquiry_list.php';
                    }, 1000);
				}
				else{
				 $("#error").html(response);
				    setTimeout(function () {
                        $('#errors').html('');
                    }, 50000);
				}
				


                 
				}
				

                   


                
            });
					}
					}
if(permission=='2'){
if($("#allotment").prop('checked') != true){
    //do something
	 $('#errors').html('Please Check Self alotment');
                $("#allotment").focus();return false;
}
	 else{
						
						$.ajax({
                type: 'POST',
                url: 'update_enquiry_process3.php',
                data: data,
                beforeSend: function () {
                    $("#errors").html('');
 $("#enq_update").html('Please Wait');

                },
                success: function (response) {


				 $("#enq_update").html('Save');
						if(response=='1'){
					 $("#success").html("Allotment Created successfully!");
					 setTimeout(function () {
                        $('#success').html('');
						window.location.href='enquiry_list.php';
                    }, 1000);
				}
					else if(response=='11'){
					 $("#success").html("Allotment Created successfully!");
					 setTimeout(function () {
                        $('#success').html('');
						window.location.href='enquiry_list.php';
                    }, 1000);
				}
				else{
					
				$("#error").html("Error Occured!");
				// $("#errors").html(response);
                    setTimeout(function () {
                        $('#errors').html('');
                    }, 100000);
				}
				



				}
				 
                   


                    
                   


                
            });
					}					
					
}

		
	});
});
