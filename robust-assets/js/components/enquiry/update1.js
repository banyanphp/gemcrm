$(function () {

    $("#enq_update").click(function () {

        var data = $("#enq_update_form").serialize();
       
		        var cemail = $("#cemail").val();
				   var cemail1 = $("#cemail1").val();
        var cemail2 = $("#cemail2").val();
        var cemail3 = $("#cemail3").val();
		        var phone = $("#phone").val();
		        var enq_pin = $("#enq_pin").val();
		        var cphno = $("#cphno").val();
		        var enq_specification = $("#enq_specification").val();
		        var type = $("#type").val();
		        var models = $("#models").val();

var status=$('#status').val();
var enq_product=$('#enq_product').val();
var enq_model = $("#enq_model").val();
var enq_model_no=$('#enq_model_no').val();
var enq_type=$('#enq_type').val();
var qty=$('#enq_qty').val();
var price=$('#qprice').val();
var prices=$('#prices').val();
var tax=$('#tax').val();
var vat_tax=$('#vat_tax').val();
var exc_tax=$('#exc_tax').val();
var erectn_val=$('#erectn_val').val();
var freigt_term=$('#freigt_term').val();
var delevry_week=$('#delevry_week').val();


 
       
	

   if (phone == '')
        {
            $('#errors').html("Enter Mobile No");

$("#phone").focus();

            return false;
        }
		
		if (cemail == '')
        {
			
			  $('#errors').html('Enter  Email address');
                $("#cemail").focus();  return false;
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
			  if (status== '') 
		  {
			  $('#errors').html('Enter status');
                $("#status").focus();
		    return false;
            }
			
			if (status == 'New Quotation') {

			if (enq_product == '') 
		  {
			  $('#errors').html('Enter Product');
                $("#enq_product").focus();
		    return false;
            }
			if (enq_model == '') 
		  {
			  $('#errors').html('Enter Model No');
                $("#enq_model").focus();
		    return false;
            }
			if (enq_model_no == '') 
		  {
			 
			  $('#errors').html('Enter model no');
                $("#enq_model_no").focus();
		    return false;
            }
				if (enq_type == '') 
		  {
			  $('#errors').html('Enter Model type');
                $("#enq_type").focus();
		    return false;
            }
			if ((price =='0')||(price == ''))
		  {
			
			  $('#errors').html('Please Choose Different types');
                $("#enq_type").focus();
		    return false;
            }
			if (qty == '') 
		  {
			  $('#errors').html('Enter qty');
                $("#enq_qty").focus();
		    return false;
            }
			if (tax == '') 
		  {
			  $('#errors').html('Enter packaging tax');
                $("#tax").focus();
		    return false;
            }	
			if (vat_tax == '') 
		  {
			  $('#errors').html('Enter VAT/CST tax');
                $("#vat_tax").focus();
		    return false;
            }	
			if (exc_tax == '') 
		  {
			  $('#errors').html('Enter Excise Duty');
                $("#exc_tax").focus();
		    return false;
            }
			if (erectn_val == '') 
		  {
			  $('#errors').html('Enter Erection Value');
                $("#erectn_val").focus();
		    return false;
            }
			if (freigt_term == '') 
		  {
			  $('#errors').html('Select Freight terms ');
                $("#freigt_term").focus();
		    return false;
            }	
			if (delevry_week == '') 
		  {
			  $('#errors').html('Delivery in weeks');
                $("#delevry_week").focus();
		    return false;
            }		
		
		  
		if($("#entry2").length != 0) {
		var enq_product2=$("#ID2_enq_product").val();
		
var enq_model2 = $("#entry2 #ID2_enq_model").val();
var enq_model_no2=$('#entry2 #ID2_enq_model_no').val();
var enq_type2=$('#entry2 #ID2_enq_type').val();
var qty2=$('#entry2 #ID2_enq_qty').val();
var price2=$('#entry2 #ID2_qprice').val();

if (enq_product2 == '') 
		  {
			  $('#errors').html('Enter Product');
                $("#entry2 #ID2_enq_product").focus();
		    return false;
            }
		 if (enq_model2 == '') 
		  {

			  $('#errors').html('Enter Model No');
                $("#entry2 #ID2_enq_model").focus();
		    return false;
            }
			if (enq_model_no2 == '') 
		  {
			  $('#errors').html('Enter model no');
                $("#entry2 #ID2_enq_model_no").focus();
		    return false;
            }
				if (enq_type2 == '') 
		  {
			  $('#errors').html('Enter Model type');
                $("#entry2 #ID2_enq_type").focus();
		    return false;
            }
				if ((price2 == '0')||(price2 == ''))
		  {
$('#errors').html('Please Choose Different types');
                $("#entry2 #ID2_enq_type").focus();
		    return false;
            }
			if (qty2 == '') 
		  {
			  $('#errors').html('Enter qty');
                $("#entry2 #ID2_qprice").focus();
		    return false;
            }
      
       
		}
//3


		if($("#entry3").length != 0) {
		var enq_product3=$("#ID3_enq_product").val();
		
var enq_model3 = $("#entry3 #ID3_enq_model").val();
var enq_model_no3=$('#entry3 #ID3_enq_model_no').val();
var enq_type3=$('#entry3 #ID3_enq_type').val();
var qty3=$('#entry3 #ID3_enq_qty').val();
var price3=$('#entry3 #ID3_qprice').val();

if (enq_product3 == '') 
		  {
			  $('#errors').html('Enter Product');
                $("#entry3 #ID3_enq_product").focus();
		    return false;
            }
		 if (enq_model3 == '') 
		  {

			  $('#errors').html('Enter Model No');
                $("#entry3 #ID3_enq_model").focus();
		    return false;
            }
			if (enq_model_no3 == '') 
		  {
			  $('#errors').html('Enter model no');
                $("#entry3 #ID3_enq_model_no").focus();
		    return false;
            }
				if (enq_type3 == '') 
		  {
			  $('#errors').html('Enter Model type');
                $("#entry3 #ID3_enq_type").focus();
		    return false;
            }
				if ((price3 == '0') || (price3 == ''))
		  {
$('#errors').html('Please Choose Different types');
                $("#entry3 #ID4_enq_type").focus();
		    return false;
            }
			if (qty3 == '') 
		  {
			  $('#errors').html('Enter qty');
                $("#entry3 #ID3_qprice").focus();
		    return false;
            }
      
       
		}
//4

			if($("#entry4").length != 0) {
		var enq_product4=$("#ID4_enq_product").val();
		
var enq_model4 = $("#entry4 #ID4_enq_model").val();
var enq_model_no4=$('#entry4 #ID4_enq_model_no').val();
var enq_type4=$('#entry4 #ID4_enq_type').val();
var qty4=$('#entry4 #ID4_enq_qty').val();
var price4=$('#entry4 #ID4_qprice').val();

if (enq_product4 == '') 
		  {
			  $('#errors').html('Enter Product');
                $("#entry4 #ID4_enq_product").focus();
		    return false;
            }
		 if (enq_model4 == '') 
		  {

			  $('#errors').html('Enter Model No');
                $("#entry4 #ID4_enq_model").focus();
		    return false;
            }
			if (enq_model_no4 == '') 
		  {
			  $('#errors').html('Enter model no');
                $("#entry4 #ID4_enq_model_no").focus();
		    return false;
            }
				if (enq_type4 == '') 
		  {
			  $('#errors').html('Enter Model type');
                $("#entry4 #ID4_enq_type").focus();
		    return false;
            }
				if ((price4 == '0' || price4 == ''))
		  {
$('#errors').html('Please Choose Different types');
                $("#entry4 #ID4_enq_type").focus();
		    return false;
            }
			if (qty4 == '') 
		  {
			  $('#errors').html('Enter qty');
                $("#entry4 #ID4_qprice").focus();
		    return false;
            }
      
       
		}

		
		
//5			
			if($("#entry5").length != 0) {
		var enq_product5=$("#ID5_enq_product").val();
		
var enq_model5 = $("#entry5 #ID5_enq_model").val();
var enq_model_no5=$('#entry5 #ID5_enq_model_no').val();
var enq_type5=$('#entry5 #ID5_enq_type').val();
var qty5=$('#entry5 #ID5_enq_qty').val();
var price5=$('#entry5 #ID5_qprice').val();

if (enq_product5 == '') 
		  {
			  $('#errors').html('Enter Product');
                $("#entry5 #ID5_enq_product").focus();
		    return false;
            }
		 if (enq_model5 == '') 
		  {

			  $('#errors').html('Enter Model No');
                $("#entry5 #ID5_enq_model").focus();
		    return false;
            }
			if (enq_model_no5 == '') 
		  {
			  $('#errors').html('Enter model no');
                $("#entry5 #ID5_enq_model_no").focus();
		    return false;
            }
				if (enq_type5 == '') 
		  {
			  $('#errors').html('Enter Model type');
                $("#entry5 #ID5_enq_type").focus();
		    return false;
            }
				if ((price5 == '0')||(price5 == ''))
		  {
$('#errors').html('Please Choose Different types');
                $("#entry5 #ID5_enq_type").focus();
		    return false;
            }
			if (qty5 == '') 
		  {
			  $('#errors').html('Enter qty');
                $("#entry5 #ID5_qprice").focus();
		    return false;
            }
      
       
		}

		//6
		
		
			if($("#entry6").length != 0) {
		var enq_product6=$("#ID6_enq_product").val();
		
var enq_model6 = $("#entry6 #ID6_enq_model").val();
var enq_model_no6=$('#entry6 #ID6_enq_model_no').val();
var enq_type6=$('#entry6 #ID6_enq_type').val();
var qty6=$('#entry6 #ID6_enq_qty').val();
var price6=$('#entry6 #ID6_qprice').val();

if (enq_product6 == '') 
		  {
			  $('#errors').html('Enter Product');
                $("#entry6 #ID6_enq_product").focus();
		    return false;
            }
		 if (enq_model6 == '') 
		  {

			  $('#errors').html('Enter Model No');
                $("#entry6 #ID6_enq_model").focus();
		    return false;
            }
			if (enq_model_no6 == '') 
		  {
			  $('#errors').html('Enter model no');
                $("#entry6 #ID6_enq_model_no").focus();
		    return false;
            }
				if (enq_type6 == '') 
		  {
			  $('#errors').html('Enter Model type');
                $("#entry6 #ID6_enq_type").focus();
		    return false;
            }
				if ((price6 == '0')||(price6 == ''))
		  {
$('#errors').html('Please Choose Different types');
                $("#entry6 #ID6_enq_type").focus();
		    return false;
            }
			if (qty6 == '') 
		  {
			  $('#errors').html('Enter qty');
                $("#entry6 #ID6_qprice").focus();
		    return false;
            }
      
       
		}

		
		
		else{
			  $.ajax({
                type: 'POST',
                url: 'update_enquiry_process1.php',
                data: data,
                beforeSend: function () {
                    $("#errors").html('');

                },
                success: function (response) {

					var json = response,
    obj = JSON.parse(json);

var response1=obj.success;
var response2=obj.qno;
                    if (response1 == 1) {
                      alert("Quotation created successfully");
					  window.location.href='quotation.php?id='+response2;
						
                    } else {
				
$("#errors").html("Error Occured ");
                    }
                   


                }
            });
		}
		
			}
			
			if(status=="Appointment"){
				
				var date=$('#test').val();
var time = $("#textColor").val();
var appthrough=$('#appthrough').val();
var applocation=$('#applocation').val();
var appoint_cmd=$('#appoint_cmd').val();
if (date == '') 
		  {
			  $('#errors').html('Enter date');
                $("#test").focus();
		    return false;
            }if (time == '') 
		  {
			  $('#errors').html('Enter Time');
                $("#textColor").focus();
		    return false;
            }if (appthrough == '') 
		  {
			  $('#errors').html('Enter appointment through');
                $("#appthrough").focus();
		    return false;
            }if (applocation == '') 
		  {
			  $('#errors').html('Enter appointment location');
                $("#applocation").focus();
		    return false;
            }if (appoint_cmd == '') 
		  {
			  $('#errors').html('Enter appointment description');
                $("#appoint_cmd").focus();
		    return false;
            }
			else{
				
			  $.ajax({
                type: 'POST',
                url: 'update_enquiry_process1.php',
                data: data,
                beforeSend: function () {
                    $("#errors").html('');

                },
                success: function (response) {
                    if (response == 1) {
                        $("#success").html("Appointment Created successfully!");
                    } else {
				
$("#errors").html("Error Occured ");
                    }
                   
setTimeout(function () {
                        $('#success').html('');
						window.location.href='list_scheduling.php';
                    }, 1000);


                    setTimeout(function () {
                        $('#errors').html('');
                    }, 1000);

				}
				 

               
            });
		}
      	
			}
		
					
		   return false;
    });
});

