$(function () {

    $("#enq_reg").click(function () {

        var data = $("#enq-registration").serialize();
        var cname = $("#cname").val();
        var cemail = $("#cemail").val();
		   var cemail1 = $("#cemail1").val();
        var cemail2 = $("#cemail2").val();
        var cemail3 = $("#cemail3").val();
        var phone = $("#phone").val();
        var address = $("#address").val();
        var pincode = $("#pincode").val();
        var cpname = $("#cpname").val();
        var ethrouch = $("#ethrouch").val();
        var cphno = $("#cphno").val();
        var enq_campaign = $("#enq_campaign").val();

        var enq_product = $("#enq_product").val();
        var enq_specification = $("#enq_specification").val();
        var refername = $("#refername").val();
        var enq_team = $("#enq_team").val();
        if (cname == '')
        {

            $('#errors').html('Enter Company Name');
            $("#cname").focus();

            return false;
        }


        if (phone == '' && cemail == '')
        {
            $('#errors').html("Enter Mobile No or Email Id");



            return false;
        }
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

 if (cemail1 != '') {
            var x = $("#cemail1").val();
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                $('#errors').html('Enter vaild Email address');
                $("#cemail1").focus();
                return false;
            }
        }

		 if (cemail2 != '') {
            var x = $("#cemail2").val();
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                $('#errors').html('Enter vaild Email address');
                $("#cemail2").focus();
                return false;
            }
        }

		 if (cemail3 != '') {
            var x = $("#cemail3").val();
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                $('#errors').html('Enter vaild Email address');
                $("#cemail3").focus();
                return false;
            }
        }
		

        if (cpname == '')
        {
            $('#errors').html('Enter Contact Person Name');
            $("#cpname").focus();

            return false;
        }
        if (ethrouch == '0')
        {
            $('#errors').html('Please Select Enquiry');
            $("#ethrouch").focus();

            return false;
        }

        if (ethrouch == '1') {

            if (enq_campaign == '0')
            {

                $('#errors').html('Enter Campaign');
                $("#enq_campaign").focus();

                return false;
            }
        }

       
        if (enq_product == '0')
        {
            $('#errors').html('Enter Product');
            $("#enq_product").focus();

            return false;
        }if (enq_team == '0')
        {
            $('#errors').html('Enter Region');
            $("#enq_team").focus();

            return false;
        }
        if (enq_specification == '')
        {
            $('#errors').html('Enter Specification');
            $("#enq_specification").focus();

            return false;
        }
        if (address == '')
        {
            $('#errors').html('Enter address');
            $("#address").focus();

            return false;
        } else {

            $.ajax({
                type: 'POST',
                url: 'add_enquiry_process.php',
                data: data,
                beforeSend: function () {
                    $("#errors").html('');
$("#enq_reg").html('Please Wait..');

                },
                success: function (response) {
$("#enq_reg").html('Save');
                    if (response == 1) {
                        $("#success").html("Enquiry added successfully!");
                    } else {
$("#errors").html("Error Occured");
//$("#errors").html(response);
                    }
                   document.getElementById("enq-registration").reset();
                    setTimeout(function () {
                        $('#success').html('');
												window.location.href='enquiry_list.php';

                    }, 5000);


                    setTimeout(function () {
                        $('#errors').html('');
                    }, 5000);


                }
            });
        }
        return false;
    });
});

