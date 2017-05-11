$(function () {

    $("#product_submit").click(function () {

        var budget = $("#budget").val();
        var gem = $("#gem").val();

        if (budget == '0')
        {
            $('#errors').html('Please Select Product Group');
            $("#budget").focus();

            return false;
        }


        if (gem == '0')
        {
            $('#errors').html('Please Select Product Series');
            $("#gem").focus();

            return false;
        }
	//hp filter

		if (gem == 'HP_Filter') {


            var hp_prd_modl = $("#hp_prd_modl").val();
		  var hp_sapcode = $("#hp_sapcode").val();
            var hp_gnrl_filter = $("#hp_gnrl_filter").val();
            var hp_gndrl_oil = $("#hp_gndrl_oil").val();
          var hp_sub_gndrl_oil = $("#hp_sub_gndrl_oil").val();
            
            
            var hp_active_car = $("#hp_active_car").val();
            var hp_dlevir = $("#hp_dlevir").val();
            var hp_warnty_doc = $("#hp_warnty_doc").val();
            var hp_warnty_doi = $("#hp_warnty_doi").val();

            var hp_wrk_prsur = $("#hp_wrk_prsur").val();
            var hp_wght = $("#hp_wght").val();
              var hp_descrp = $("#hp_descrp").val();

            if (hp_prd_modl == '')
            {
                $('#errors').html('Enter Product Model ');
                $("#hp_prd_modl").focus();

                return false;
            }

			  if (hp_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#hp_sapcode").focus();

                return false;
            }
           
            if (hp_gnrl_filter == '')
            {
                $('#errors').html('Enter General Purpose Filters Price  ');
                $("#hp_gnrl_filter").focus();

                return false;
            }
           
		  
          if (hp_gndrl_oil == '')
            {
                $('#errors').html('Enter Micro Oil Removing Filter Price ');
                $("#hp_gndrl_oil").focus();

                return false;
            }
            if (hp_sub_gndrl_oil == '')
            {
                $('#errors').html('Enter Sub Micro Oil Removing Filter Price ');
                $("#hp_sub_gndrl_oil").focus();

                return false;
            }
               if (hp_active_car == '')
            {
                $('#errors').html('Enter Activated carbon filters ');
                $("#hp_active_car").focus();

                return false;
            }
                if (hp_dlevir == '')
            {
                $('#errors').html('Enter Delivery terms ');
                $("#hp_dlevir").focus();

                return false;
            }

            if (hp_warnty_doc == '')
            {
                $('#errors').html('Enter Warranty Date Of Commission ');
                $("#hp_warnty_doc").focus();

                return false;
            }
               if (hp_warnty_doi == '')
            {
                $('#errors').html('Enter Warranty Date Of Invoice ');
                $("#hp_warnty_doi").focus();

                return false;
            }
            
           
            if (hp_wrk_prsur == '')
            {
                $('#errors').html('Enter  Working pressure ');
                $("#hp_wrk_prsur").focus();

                return false;
            }
            if (hp_wght == '')
            {
                $('#errors').html('Enter Weight  ');
                $("#hp_wght").focus();

                return false;
            }

              if (hp_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#hp_descrp").focus();

                return false;
            }


			
			     else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
		hp_prd_modl:hp_prd_modl,
		hp_sapcode:hp_sapcode,
		hp_gnrl_filter:hp_gnrl_filter,
		hp_gndrl_oil:hp_gndrl_oil,
		hp_sub_gndrl_oil:hp_sub_gndrl_oil,
		hp_active_car:hp_active_car,
		hp_dlevir:hp_dlevir,
		hp_warnty_doc:hp_warnty_doc,
		hp_warnty_doi:hp_warnty_doi,
		hp_wrk_prsur:hp_wrk_prsur,
		hp_wght:hp_wght,
		hp_descrp:hp_descrp,
		gem:gem,
	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;


        }

//hln
        if (gem == 'HLN') {


            var hln_prd_model = $("#hln_prd_model").val();
			  var hln_sapcode = $("#hln_sapcode").val();
            var hln_is2825 = $("#hln_is2825").val();
            var hln_activated_65 = $("#hln_activated_65").val();
            var hln_airflows = $("#hln_airflows").val();

            var hln_inlet = $("#hln_inlet").val();
            var hln_desicant_qty = $("#hln_desicant_qty").val();
            var hln_delvry = $("#hln_delvry").val();
            var hln_wrnty_doc = $("#hln_wrnty_doc").val();
            var hln_wrnty_doi = $("#hln_wrnty_doi").val();
            var hln_wrk_pres = $("#hln_wrk_pres").val();
            var hln_rate_conditioninlet = $("#hln_rate_conditioninlet").val();
            var hln_rate_conditiontemp = $("#hln_rate_conditiontemp").val();
            var hln_wight = $("#hln_wight").val();
			  var hln_descrp = $("#hln_descrp").val();

            if (hln_prd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#hln_prd_model").focus();

                return false;
            }
 
		    if (hln_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#hln_sapcode").focus();

                return false;
            }
           


            if (hln_is2825 == '')
            {
                $('#errors').html('Desiccant Activated Alumina(50°c) & IS2825 code of Construction Price');
                $("#hln_is2825").focus();

                return false;
            }
            if (hln_activated_65 == '')
            {
                $('#errors').html('Desiccant Activated Alumina(65°c) & IS2825 code of Construction Price :');
                $("#hln_activated_65").focus();

                return false;
            }


            if (hln_airflows == '')
            {
                $('#errors').html('Enter Air flow');
                $("#hln_airflows").focus();

                return false;
            }
            if (hln_inlet == '')
            {
                $('#errors').html('Enter Inlet/Outlet flg');
                $("#hln_inlet").focus();

                return false;
            }


            if (hln_desicant_qty == '')
            {
                $('#errors').html('Enter Desiccant Qty/tower');
                $("#hln_desicant_qty").focus();

                return false;
            }
            if (hln_delvry == '')
            {
                $('#errors').html('Enter Delivery Terms');
                $("#hln_delvry").focus();

                return false;
            }
            if (hln_wrnty_doc == '')
            {
                $('#errors').html('Enter Warranty Date of commisioning');
                $("#hln_wrnty_doc").focus();

                return false;
            }




            if (hln_wrnty_doi == '')
            {
                $('#errors').html('Enter Warranty Date of invoice');
                $("#hln_wrnty_doi").focus();

                return false;
            }
            if (hln_wrk_pres == '')
            {
                $('#errors').html('Enter Work Pressure');
                $("#hln_wrk_pres").focus();

                return false;
            }

            if (hln_rate_conditioninlet == '')
            {
                $('#errors').html('Enter Rated Condition Inlet Temperature :');
                $("#hln_rate_conditioninlet").focus();

                return false;
            }
            if (hln_rate_conditiontemp == '')
            {
                $('#errors').html('Enter Rated Condition Atmospheric Temperature');
                $("#hln_rate_conditiontemp").focus();

                return false;
            }

            if (hln_wight == '')
            {
                $('#errors').html('Enter weight');
                $("#hln_wight").focus();

                return false;
            }
            
              if (hln_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#hln_descrp").focus();

                return false;
            }



        
		
		 else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
		hln_prd_model:hln_prd_model,
		hln_sapcode:hln_sapcode,
		hln_is2825:hln_is2825,
		hln_activated_65:hln_activated_65,
		hln_airflows:hln_airflows,
		hln_inlet:hln_inlet,
		hln_desicant_qty:hln_desicant_qty,
		hln_delvry:hln_delvry,
		hln_wrenty_doc:hln_wrnty_doc,
		hln_wrenty_doi:hln_wrnty_doi,
		hln_wrk_pres:hln_wrk_pres,
		hln_rate_conditioninlet:hln_rate_conditioninlet,
		hln_rate_conditiontemp:hln_rate_conditiontemp,
		hln_descrp:hln_descrp,
		hln_wight:hln_wight,

		gem:gem,
	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;


        }
				//Cooler Acc

       if (gem == 'ACC') {


            var acc_Prd_model = $("#acc_Prd_model").val();
			  var acc_sapcode = $("#acc_sapcode").val();
            var acc_without_var_price = $("#acc_without_var_price").val();
            var acc_cap = $("#acc_cap").val();
            var acc_wrk_presure = $("#acc_wrk_presure").val();
            
            var acc_io_bsp = $("#acc_io_bsp").val();
            var acc_rate_pwr = $("#acc_rate_pwr").val();
          
            var acc_ec_r220v = $("#acc_ec_r220v").val();
			var acc_ec_r415v = $("#acc_ec_r415v").val();
            var acc_waranty_doc = $("#acc_waranty_doc").val();
            var acc_Warranty_doi = $("#acc_Warranty_doi").val();
            var acc_delivery_term = $("#acc_delivery_term").val();
			var acc_weght = $("#acc_weght").val();
			 var acc_descrp = $("#acc_descrp").val();
           
            if (acc_Prd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#acc_Prd_model").focus();

                return false;
            }
			  if (acc_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#acc_sapcode").focus();

                return false;
            }
           

            if (acc_without_var_price == '')
            {
                $('#errors').html('Enter Without vartex separator Price');
                $("#acc_without_var_price").focus();

                return false;
            }
           
          if (acc_cap == '')
            {
                $('#errors').html('Enter Capacity ');
                $("#acc_cap").focus();

                return false;
            }
            if (acc_wrk_presure == '')
            {
                $('#errors').html('Enter Working Pressure');
                $("#acc_wrk_presure").focus();

                return false;
            }
			 if (acc_io_bsp == '')
            {
                $('#errors').html('Enter Air Connection In/Out BSP');
                $("#acc_io_bsp").focus();

                return false;
            }
			
			if (acc_rate_pwr == '')
            {
                $('#errors').html('Enter Rate Power Req KW ');
                $("#acc_rate_pwr").focus();

                return false;
            }
              
                if (acc_ec_r220v == '')
            {
                $('#errors').html('Enter Electrical Connection R220 1ph 50HZ ');
                $("#acc_ec_r220v").focus();

                return false;
            }

            if (acc_ec_r415v == '')
            {
                $('#errors').html('Enter Elecrical Connection 415v 3ph 50HZ');
                $("#acc_ec_r415v").focus();

                return false;
            }
			
			 if (acc_waranty_doc == '')
            {
                $('#errors').html('Enter Warranty Date Of Commission ');
                $("#acc_waranty_doc").focus();

                return false;
            }
			
			
               if (acc_Warranty_doi == '')
            {
                $('#errors').html(' Enter Warranty Date Of Invoice ');
                $("#acc_Warranty_doi").focus();

                return false;
            }
            
           
            if (acc_delivery_term == '')
            {
                $('#errors').html('Enter Delivery Terms ');
                $("#acc_delivery_term").focus();

                return false;
            }
            if (acc_weght == '')
            {
                $('#errors').html('Enter Weight ');
                $("#acc_weght").focus();

                return false;
            }
              if (acc_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#acc_descrp").focus();

                return false;
            }
			
			

			     else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
        acc_Prd_model:acc_Prd_model,
		acc_sapcode:acc_sapcode,
		acc_without_var_price:acc_without_var_price,
		acc_cap:acc_cap,
		acc_wrk_presure:acc_wrk_presure,
		acc_io_bsp:acc_io_bsp,
		acc_rate_pwr:acc_rate_pwr,
		acc_ec_r220v:acc_ec_r220v,
		acc_ec_r415v:acc_ec_r415v,
		acc_waranty_doc:acc_waranty_doc,
		acc_Warranty_doi:acc_Warranty_doi,
		acc_delivery_term:acc_delivery_term,
		acc_weght:acc_weght,
		acc_descrp:acc_descrp,
		gem:gem,
	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;
        }
		 //Cooler gas

       if (gem == 'GAS') {

            var gas_prd_model = $("#gas_prd_model").val();
			  var gas_sapcode = $("#gas_sapcode").val();
            var gas_modl_vari = $("#gas_modl_vari").val();
            var gas_prices = $("#gas_prices").val();
            var gas_conct_pwr = $("#gas_conct_pwr").val();
            
            var gas_water_in = $("#gas_water_in").val();
            var gas_fan_diae = $("#gas_fan_diae").val();
          
            var gas_motr_qul = $("#gas_motr_qul").val();
            var gas_head_pip = $("#gas_head_pip").val();
            var gas_delvr = $("#gas_delvr").val();
            var gas_Configu = $("#gas_Configu").val();
            var gas_wrnt_doc = $("#gas_wrnt_doc").val();
          
		  
		   var gas_wrnt_doi = $("#gas_wrnt_doi").val();
            var gas_outlet_water = $("#gas_outlet_water").val();
            var gas_wight = $("#gas_wight").val();
          var gas_descrp = $("#gas_descrp").val();
            if (gas_prd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#gas_prd_model").focus();

                return false;
            }

			  if (gas_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#gas_sapcode").focus();

                return false;
            }
           
            if (gas_modl_vari == '')
            {
                $('#errors').html('Enter Model Variance');
                $("#gas_modl_vari").focus();

                return false;
            }
           
          if (gas_prices == '')
            {
                $('#errors').html('Enter Price');
                $("#gas_prices").focus();

                return false;
            }
            if (gas_conct_pwr == '')
            {
                $('#errors').html('Enter Total Connect Power Hp');
                $("#gas_conct_pwr").focus();

                return false;
            }
               if (gas_water_in == '')
            {
                $('#errors').html('Water Water in/out ');
                $("#gas_water_in").focus();

                return false;
            }
                if (gas_fan_diae == '')
            {
                $('#errors').html('Fan diameter');
                $("#gas_fan_diae").focus();

                return false;
            }

            if (gas_motr_qul == '')
            {
                $('#errors').html('Enter Motor Quality');
                $("#gas_motr_qul").focus();

                return false;
            }
               if (gas_head_pip == '')
            {
                $('#errors').html('Header Pipe & flag size');
                $("#gas_head_pip").focus();

                return false;
            }
            
           
            if (gas_delvr == '')
            {
                $('#errors').html('Enter Delivery Terms');
                $("#gas_delvr").focus();

                return false;
            }
            if (gas_Configu == '')
            {
                $('#errors').html('Enter Configuration ');
                $("#gas_Configu").focus();

                return false;
            }

            if (gas_wrnt_doc == '')
            {
                $('#errors').html('Enter Warranty Date Of Commission');
                $("#gas_wrnt_doc").focus();

                return false;
            }
			
            if (gas_wrnt_doi == '')
            {
                $('#errors').html('Enter Warranty Date Of Invoice');
                $("#gas_wrnt_doi").focus();

                return false;
            }
			
            if (gas_outlet_water == '')
            {
                $('#errors').html('Enter Outlet water Temp');
                $("#gas_outlet_water").focus();

                return false;
            }
			
            if (gas_wight == '')
            {
                $('#errors').html('Enter Weight');
                $("#gas_wight").focus();

                return false;
            }
			  if (gas_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#gas_descrp").focus();

                return false;
            }
          
           
			
			     else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
gas_prd_model:gas_prd_model,
gas_sapcode:gas_sapcode,
		gas_modl_vari:gas_modl_vari,
		gas_prices:gas_prices,
		gas_conct_pwr:gas_conct_pwr,
		gas_water_in:gas_water_in,
		gas_fan_diae:gas_fan_diae,
		gas_motr_qul:gas_motr_qul,
		gas_head_pip:gas_head_pip,
		gas_delvr:gas_delvr,
		gas_Configu:gas_Configu,
		gas_wrnt_doc:gas_wrnt_doc,
		gas_wrnt_doi:gas_wrnt_doi,
		gas_outlet_water:gas_outlet_water,
		gas_wight:gas_wight,
		gas_descrp:gas_descrp,
		gem:gem,
	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;


        }
		
				//Cooler wah

       if (gem == 'WAH') {


            var wah_prd_model = $("#wah_prd_model").val();
			  var wah_sapcode = $("#wah_sapcode").val();
            var wah_moisture = $("#wah_moisture").val();
            var wah_capacty = $("#wah_capacity").val();
            var wah_aircon = $("#wah_aircon").val();
            
            var wah_coolng = $("#wah_coolng").val();
            var wah_water_rate = $("#wah_water_rate").val();
          
            var wah_sheldia = $("#wah_shelldia").val();
			var wah_delivrytrm = $("#wah_delivrytrm").val();
            var wah_warranty_doc = $("#wah_warranty_doc").val();
            var wah_warranty_doi = $("#wah_warranty_doi").val();
            var wah_wrkpressur = $("#wah_wrkpressur").val();
			
             var wah_wight = $("#wah_wight").val();
           var wah_descrp = $("#wah_descrp").val();
            if (wah_prd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#wah_prd_model").focus();

                return false;
            }

			  if (wah_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#wah_sapcode").focus();

                return false;
            }
           
            if (wah_moisture == '')
            {
                $('#errors').html('Enter With Moisture seprator Price ');
                $("#wah_moisture").focus();

                return false;
            }
           
          if (wah_capacty == '')
            {
                $('#errors').html('Enter Capacity Cfm ');
                $("#wah_capacity").focus();

                return false;
            }
            if (wah_aircon == '')
            {
                $('#errors').html('Enter Air connection in/out Bsp');
                $("#wah_aircon").focus();

                return false;
            }
			 if (wah_coolng == '')
            {
                $('#errors').html('Enter Cooling Water in/out');
                $("#wah_coolng").focus();

                return false;
            }
			
			if (wah_water_rate == '')
            {
                $('#errors').html('Enter Water Flow Rate LPM');
                $("#wah_water_rate").focus();

                return false;
            }
              
                if (wah_sheldia == '')
            {
                $('#errors').html('Enter Shell dia ');
                $("#wah_shelldia").focus();

                return false;
            }

            if (wah_delivrytrm == '')
            {
                $('#errors').html('Enter Delivery Terms');
                $("#wah_delivrytrm").focus();

                return false;
            }
			
			
			
			
               if (wah_warranty_doc == '')
            {
                $('#errors').html(' Enter Warranty Date Of Commission ');
                $("#wah_warranty_doc").focus();

                return false;
            }
            
           
            if (wah_warranty_doi == '')
            {
                $('#errors').html('Enter Warranty Date Of Invoice ');
                $("#wah_warranty_doi").focus();

                return false;
            }
			if (wah_wrkpressur == '')
            {
                $('#errors').html('Enter Working Pressure');
                $("#wah_wrkpressur").focus();

                return false;
            }

            if (wah_wight == '')
            {
                $('#errors').html('Enter Weight');
                $("#wah_wight").focus();

                return false;
            }
  if (wah_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#wah_descrp").focus();

                return false;
            }
			
			

			

			     else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
wah_prd_model:wah_prd_model,
wah_sapcode:wah_sapcode,
		wah_moisture:wah_moisture,
		wah_capacty:wah_capacty,
		wah_aircon:wah_aircon,
		wah_coolng:wah_coolng,
		wah_water_rate:wah_water_rate,
		wah_sheldia:wah_sheldia,
		wah_delivrytrm:wah_delivrytrm,
		wah_warranty_doc:wah_warranty_doc,
		wah_warranty_doi:wah_warranty_doi,
		wah_wrkpressur:wah_wrkpressur,
		wah_wight:wah_wight,
		wah_descrp:wah_descrp,
		gem:gem,
	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;
        }
		

//hld
        if (gem == 'HLD') {


            var hld_prd_model = $("#hld_prd_model").val();
			  var hld_sapcode = $("#hld_sapcode").val();
            var hld_desiccantalumina_50 = $("#hld_desiccantalumina_50").val();
            var hld_construction_price = $("#hld_construction_price").val();
            var hld_is2825 = $("#hld_is2825").val();
            var hld_molecular_construct = $("#hld_molecular_construct").val();
            var hld_airfl = $("#hld_airfl").val();
            var hld_inlet = $("#hld_inlet").val();
            var hld_qty = $("#hld_qty").val();
            var hld_delvry = $("#hld_delvry").val();
            var gzf_wrk_press = $("#gzf_wrk_press").val();
		   var hld_warenty_doc = $("#hld_warenty_doc").val();
            var hld_warnty_doi = $("#hld_warnty_doi").val();
          
            var hld_wight = $("#hld_wight").val();
var hld_descrp = $("#hld_descrp").val();
            if (hld_prd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#hld_prd_model").focus();

                return false;
            }

			  if (hld_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#hld_sapcode").focus();

                return false;
            }
           

            if (hld_desiccantalumina_50 == '')
            {
                $('#errors').html('Desiccant Activated Alumina(50&deg;c) &Enter IS2825 code of Construction Price');
                $("#hld_desiccantalumina_50").focus();

                return false;
            }
            if (hld_construction_price == '')
            {
                $('#errors').html('Desiccant Activated Alumina(50&deg;c) &Enter IS2825 code of Construction Price & ASME sec VIII 1 code of Construction Price');
                $("#hld_construction_price").focus();

                return false;
            }


            if (hld_is2825 == '')
            {
                $('#errors').html('Desiccant molecular sieve & IS2825 code of Construction Price');
                $("#hld_is2825").focus();

                return false;
            }
            if (hld_molecular_construct == '')
            {
                $('#errors').html('Desiccant molecular sieve& ASME sec VIII 1 code of Construction Price');
                $("#hld_molecular_construct").focus();

                return false;
            }


            if (hld_airfl == '')
            {
                $('#errors').html('Enter Air flow');
                $("#hld_airfl").focus();

                return false;
            }
            if (hld_inlet == '')
            {
                $('#errors').html('Enter Inlet/Outlet flg');
                $("#hld_inlet").focus();

                return false;
            }


            if (hld_qty == '')
            {
                $('#errors').html('Enter Desiccant Qty/tower');
                $("#hld_qty").focus();

                return false;
            }
          
			 if (hld_delvry == '')
            {
                $('#errors').html('Enter Delivery Terms');
                $("#hld_delvry").focus();

                return false;
            }
			  if (gzf_wrk_press == '')
            {
                $('#errors').html('Enter Work pressure');
                $("#gzf_wrk_press").focus();

                return false;
            }
            if (hld_warenty_doc == '')
            {
                $('#errors').html('Enter Warranty Date of commisioning');
                $("#hld_warenty_doc").focus();

                return false;
            }


            if (hld_warnty_doi == '')
            {
                $('#errors').html('Enter Warranty Date of invoice');
                $("#hld_warnty_doi").focus();

                return false;
            }


            if (hld_wight == '')
            {
                $('#errors').html('Enter weight');
                $("#hld_wight").focus();

                return false;
            }


          if (hld_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#hld_descrp").focus();

                return false;
            }
		
		 else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
		hld_prd_model:hld_prd_model,
		hld_sapcode:hld_sapcode,
		hld_desiccantalumina_50:hld_desiccantalumina_50,
		hld_construction_price:hld_construction_price,
		hld_is2825:hld_is2825,
		hld_molecular_construct:hld_molecular_construct,
		hld_airfl:hld_airfl,
		hld_inlet:hld_inlet,
		hld_qty:hld_qty,
		hld_delvry:hld_delvry,
		gzf_wrk_press:gzf_wrk_press,
		hld_warenty_doc:hld_warenty_doc,
		hld_warnty_doi:hld_warnty_doi,
		hld_wight:hld_wight,
		hld_descrp:hld_descrp,
		gem:gem,
		
	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;


        }

       //AT
		
		if (gem == 'AT') {


            var at_Prd_model = $("#at_Prd_model").val();
			  var at_sapcode = $("#at_sapcode").val();
            var at_cap = $("#at_cap").val();
            var at_model_var = $("#at_model_var").val();
          var at_model_var_accesrs = $("#at_model_var_accesrs").val();
            
            
            var at_shell = $("#at_shell").val();
            var at_io_out = $("#at_io_out").val();
            var at_delivry = $("#at_delivry").val();
            var at_hnd_hol = $("#at_hnd_hol").val();
			var at_warranty_doc = $("#at_warranty_doc").val();
			var at_warranty_doi = $("#at_warranty_doi").val();
			var at_moc_coc = $("#at_moc_coc").val();
			var at_wght = $("#at_wght").val();
var at_descrp = $("#at_descrp").val();
           
            

            if (at_Prd_model == '')
            {
                $('#errors').html('Enter Product Model ');
                $("#at_Prd_model").focus();

                return false;
            }

			  if (at_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#at_sapcode").focus();

                return false;
            }
           
            if (at_cap == '')
            {
                $('#errors').html('Enter Capacity     ');
                $("#at_cap").focus();

                return false;
            }
           
          if (at_model_var == '')
            {
                $('#errors').html('Enter Model variance price 7.5-10.5 Bar  ');
                $("#at_model_var").focus();

                return false;
            }
            if (at_model_var_accesrs == '')
            {
                $('#errors').html('Enter Model variance price Acessories     ');
                $("#at_model_var_accesrs").focus();

                return false;
            }
               if (at_shell == '')
            {
                $('#errors').html('Enter Shell/dish thikness:  ');
                $("#at_shell").focus();

                return false;
            }
                if (at_io_out == '')
            {
                $('#errors').html('Enter in/out Connection  ');
                $("#at_io_out").focus();

                return false;
            }

            if (at_delivry == '')
            {
                $('#errors').html('Enter Delivery Terms   ');
                $("#at_delivry").focus();

                return false;
            }
			if (at_hnd_hol == '')
            {
                $('#errors').html('Enter Hand Hole/Man Hole    ');
                $("#at_hnd_hol").focus();

                return false;
            }
			if (at_warranty_doc == '')
            {
                $('#errors').html('Enter Warranty Date Of Commission     ');
                $("#at_warranty_doc").focus();

                return false;
            }
			if (at_warranty_doi == '')
            {
                $('#errors').html('Enter Warranty Date Of Invoice   ');
                $("#at_warranty_doi").focus();

                return false;
            }
			if (at_moc_coc == '')
            {
                $('#errors').html('Enter Moc/Coc     ');
                $("#at_moc_coc").focus();

                return false;
            }
			if (at_wght == '')
            {
                $('#errors').html('Enter Weight    ');
                $("#at_wght").focus();

                return false;
            }
			
			
  if (at_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#at_descrp").focus();

                return false;
            }
            

			
			     else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
		at_Prd_model:at_Prd_model,
		at_sapcode:at_sapcode,
		at_cap:at_cap,
		at_model_var:at_model_var,
		at_model_var_accesrs:at_model_var_accesrs,
		at_shell:at_shell,
		at_io_out:at_io_out,
		at_delivry:at_delivry,
		at_hnd_hol:at_hnd_hol,
		at_warranty_doc:at_warranty_doc,
		at_warranty_doi:at_warranty_doi,
		at_moc_coc:at_moc_coc,
		at_wght:at_wght,
		at_descrp:at_descrp,
		gem:gem,
	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;


        }


//spd

        if (gem == 'SPD') {


            var spd_prd_model = $("#spd_prd_model").val();
			  var spd_sapcode = $("#spd_sapcode").val();
            var spd_ms = $("#spd_ms").val();
            var spd_air = $("#spd_air").val();

            var spd_inlet_out = $("#spd_inlet_out").val();
            var spd_deli = $("#spd_deli").val();
            var spd_wrnt_doc = $("#spd_wrnt_doc").val();
            var spd_wrnt_doi = $("#spd_wrnt_doi").val();

            var spd_in = $("#spd_in").val();
            var spd_atmo = $("#spd_atmo").val();
            var spd_acc = $("#spd_acc").val();
            var spd_wrkprs = $("#spd_wrkprs").val();
            

            var spd_wgt = $("#spd_wgt").val();
var spd_descrp = $("#spd_descrp").val();
            if (spd_prd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#spd_prd_model").focus();

                return false;
            }

			
			  if (spd_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#spd_sapcode").focus();

                return false;
            }
           
            if (spd_ms == '')
            {
                $('#errors').html('Molecular sieve(65°c)/Price with Filter :');
                $("#spd_ms").focus();

                return false;
            }
           
            if (spd_air == '')
            {
                $('#errors').html('Enter Air flow');
                $("#spd_air").focus();

                return false;
            }
            if (spd_inlet_out == '')
            {
                $('#errors').html('Enter Inlet/Outlet flg');
                $("#spd_inlet_out").focus();

                return false;
            }

            if (spd_deli == '')
            {
                $('#errors').html('Enter Delivery Terms');
                $("#spd_deli").focus();

                return false;
            }
            if (spd_wrnt_doc == '')
            {
                $('#errors').html('Enter Warranty Date of commisioning');
                $("#spd_wrnt_doc").focus();

                return false;
            }

            if (spd_wrnt_doi == '')
            {
                $('#errors').html('Enter Warranty Date of invoice');
                $("#spd_wrnt_doi").focus();

                return false;
            }
              if (spd_in == '')
            {
                $('#errors').html('Enter Inlet Temperature :');
                $("#spd_in").focus();

                return false;
            }
            
            if (spd_atmo == '')
            {
                $('#errors').html('Atmospheric dew point :');
                $("#spd_atmo").focus();

                return false;
            }
            
           
            if (spd_acc == '')
            {
                $('#errors').html('Enter Acessories');
                $("#spd_acc").focus();

                return false;
            }
			 if (spd_wrkprs == '')
            {
                $('#errors').html('Enter Work Space');
                $("#spd_wrkprs").focus();

                return false;
            }


            if (spd_wgt == '')
            {
                $('#errors').html('Enter weight');
                $("#spd_wgt").focus();

                return false;
            }



  if (spd_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#spd_descrp").focus();

                return false;
            }
        
        
		
		 else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
		spd_prd_model:spd_prd_model,
		spd_sapcode:spd_sapcode,
		spd_ms:spd_ms,
		spd_air:spd_air,
		spd_inlet_out:spd_inlet_out,
		spd_deli:spd_deli,
		spd_wrnt_doc:spd_wrnt_doc,
		spd_wrnt_doi:spd_wrnt_doi,
		spd_in:spd_in,
		spd_atmo:spd_atmo,
		spd_acc:spd_acc,
		spd_wrkprs:spd_wrkprs,
		spd_wgt:spd_wgt,
		spd_descrp:spd_descrp,
		gem:gem,
	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;


        }
//2KD
     if (gem == '2KD') {

            var kdprd_model = $("#2kdprd_model").val();
			  var kd_sapcode = $("#2kd_sapcode").val();
            var kdac_r134 = $("#2kdac_r134").val();
            var kdac_r404c = $("#2kdac_r404c").val();
          var kdac_r407cs = $("#2kdac_r407cs").val();
            
            
            var kdcap = $("#2kdcap").val();
            var kdwrk_pressure = $("#2kdwrk_pressure").val();
            var kdac_io = $("#2kdac_io").val();
            var kdrate_pwr_kw = $("#2kdrate_pwr_kw").val();

            var kddelivery_terms = $("#2kddelivery_terms").val();
            var kdec_220v = $("#2kdec_220v").val();
            var kdec_415v = $("#2kdec_415v").val();
            var kdwarranty_doc = $("#2kdwarranty_doc").val();
            var kdwarranty_doi = $("#2kdwarranty_doi").val();
            var kdweight = $("#2kdweight").val();
var kd_descrp = $("#kd_descrp").val();
            if (kdprd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#2kdprd_model").focus();

                return false;
            }
			  if (kd_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#2kd_sapcode").focus();

                return false;
            }
           

            if (kdac_r134 == '')
            {
                $('#errors').html('Enter Air Cooled R134a');
                $("#2kdac_r134").focus();

                return false;
            }
           
            if (kdac_r404c == '')
            {
                $('#errors').html('Enter Air Cooled R404c');
                $("#2kdac_r404c").focus();

                return false;
            }
            if (kdac_r407cs == '')
            {
                $('#errors').html('Enter Water Cooled R407c');
                $("#2kdac_r407cs").focus();

                return false;
            }

 if (kdcap == '')
            {
                $('#errors').html('Enter Capacity');
                $("#2kdcap").focus();

                return false;
            }
            if (kdwrk_pressure == '')
            {
                $('#errors').html('Enter Work Pressure');
                $("#2kdwrk_pressure").focus();

                return false;
            }
               if (kdac_io == '')
            {
                $('#errors').html('Enter Air Connection In/Out');
                $("#2kdac_io").focus();

                return false;
            }
                if (kdrate_pwr_kw == '')
            {
                $('#errors').html('Enter Rate Power KW ');
                $("#2kdrate_pwr_kw").focus();

                return false;
            }

            if (kddelivery_terms == '')
            {
                $('#errors').html('Enter Delivery Terms');
                $("#2kddelivery_terms").focus();

                return false;
            }
               if (kdec_220v == '')
            {
                $('#errors').html('Electrical Connection 220v/1s/50Hz');
                $("#2kdec_220v").focus();

                return false;
            }
            
           
            if (kdec_415v == '')
            {
                $('#errors').html('Enter Electrical Connection 415v/3s/50Hz');
                $("#2kdec_415v").focus();

                return false;
            }
            if (kdwarranty_doc == '')
            {
                $('#errors').html('Enter Warranty Date of commisioning');
                $("#2kdwarranty_doc").focus();

                return false;
            }

            if (kdwarranty_doi == '')
            {
                $('#errors').html('Enter Warranty Date of invoice');
                $("#2kdwarranty_doi").focus();

                return false;
            }
           
         

            if (kdweight == '')
            {
                $('#errors').html('Enter weight');
                $("#2kdweight").focus();

                return false;
            }


  if (kd_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#2kd_descrp").focus();

                return false;
            }
			else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
	kdprd_model:kdprd_model,
	kd_sapcode:kd_sapcode,
		kdac_r134:kdac_r134,
		kdac_r404c:kdac_r404c,
		kdac_r407cs:kdac_r407cs,
		kdcap:kdcap,
		kdwrk_pressure:kdwrk_pressure,
		kdac_io:kdac_io,
		kdrate_pwr_kw:kdrate_pwr_kw,
		kddelivery_terms:kddelivery_terms,
		kdec_220v:kdec_220v,
		kdec_415v:kdec_415v,
		kdwarranty_doc:kdwarranty_doc,
		kdwarranty_doi:kdwarranty_doi,
		kdweight:kdweight,
		kd_descrp:kd_descrp,
		gem:gem,
	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;
			
			
			
			
			

        }
      
	  //2KD7
     if (gem == '2KD7') {
alert('gem')

            var kd7_prd_model = $("#kd7_prd_model").val();
			  var kd7_sapcode = $("#kd7_sapcode").val();
            var kd7_ac_r134 = $("#kd7_ac_r134").val();
            var kd7_cap = $("#kd7_cap").val();
          var kd7_wrk_pressure = $("#kd7_wrk_pressure").val();
           
            
            var kd7_ac_io = $("#kd7_ac_io").val();
            var kd7_pwr_cons = $("#kd7_pwr_cons").val();
            var kd7_delivery_times = $("#kd7_delivery_times").val();
            var kd7_ec_230v = $("#kd7_ec_230v").val();

            var kd7_ec_415v = $("#kd7_ec_415v").val();
            var kd7_warnty_doc = $("#kd7_warnty_doc").val();
            var kd7_warnty_doi = $("#kd7_warnty_doi").val();
            var kd7_weght = $("#kd7_weght").val();
            var kd7_air = $("#kd7_air").val();
            var kd7_dew = $("#kd7_dew").val();
              var kd7_ambient = $("#kd7_ambient").val();
			var kd7_descrp = $("#kd7_descrp").val();
			
			
            if (kd7_prd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#kd7_prd_model").focus();

                return false;
            }

			  if (kd7_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#kd7_sapcode").focus();

                return false;
            }
           
            if (kd7_ac_r134 == '')
            {
                $('#errors').html('Enter Air Cooled R134a Pirce');
                $("#kd7_ac_r134").focus();

                return false;
            }
           
            if (kd7_cap == '')
            {
                $('#errors').html('Enter Capacity');
                $("#kd7_cap").focus();

                return false;
            }
            if (kd7_wrk_pressure == '')
            {
                $('#errors').html('Enter Working Pressure');
                $("#kd7_wrk_pressure").focus();

                return false;
            }

           if (kd7_ac_io == '')
            {
                $('#errors').html('Enter Air Connection In/Out');
                $("#kd7_ac_io").focus();

                return false;
            }
            if (kd7_pwr_cons == '')
            {
                $('#errors').html('Enter Rate Power');
                $("#kd7_pwr_cons").focus();

                return false;
            }
               if (kd7_delivery_times == '')
            {
                $('#errors').html('Enter Delivery Terms');
                $("#kd7_delivery_times").focus();

                return false;
            }
                if (kd7_ec_230v == '')
            {
                $('#errors').html('Enter Electrical Connection 230v/1s/50Hz');
                $("#kd7_ec_230v").focus();

                return false;
            }

            if (kd7_ec_415v == '')
            {
                $('#errors').html('Enter Electrical Connection 415v/3s/50Hz');
                $("#kd7_ec_415v").focus();

                return false;
            }
              
            
           
            if (kd7_warnty_doc == '')
            {
                $('#errors').html('Enter Warranty Date Of Commission');
                $("#kd7_warnty_doc").focus();

                return false;
            }
			 if (kd7_warnty_doi == '')
            {
                $('#errors').html('Warrenty Date Of Invoice');
                $("#kd7_warnty_doi").focus();

                return false;
            }
            if (kd7_weght == '')
            {
                $('#errors').html('Enter Weight');
                $("#kd7_weght").focus();

                return false;
            }

            if (kd7_air == '')
            {
                $('#errors').html('Enter Air inlet temperature');
                $("#kd7_air").focus();

                return false;
            }
           
         

            if (kd7_dew == '')
            {
                $('#errors').html('Enter Dew point');
                $("#kd7_dew").focus();

                return false;
            }
          if (kd7_ambient == '')
            {
                $('#errors').html('Enter Ambient Temperature');
                $("#kd7_ambient").focus();

                return false;
            }
  if (kd7_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#kd7_descrp").focus();

                return false;
            }

			else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
	kd7_prd_model:kd7_prd_model,
	kd7_sapcode:kd7_sapcode,
		kd7_ac_r134:kd7_ac_r134,
		kd7_cap:kd7_cap,
		kd7_wrk_pressure:kd7_wrk_pressure,
		kd7_ac_io:kd7_ac_io,
		kd7_pwr_cons:kd7_pwr_cons,
		kd7_delivery_times:kd7_delivery_times,
		kd7_ec_230v:kd7_ec_230v,
		kd7_ec_415v:kd7_ec_415v,
		kd7_warnty_doc:kd7_warnty_doc,
		kd7_warnty_doi:kd7_warnty_doi,
		kd7_weght:kd7_weght,
		kd7_air:kd7_air,
		kd7_dew:kd7_dew,
		kd7_ambient:kd7_ambient,
		kd7_descrp:kd7_descrp,
		gem:gem,
	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;
			
			
			
			
			

        }
  
    //nxg
       if (gem =='NXG') {


            var nxg_prdt_model = $("#nxg_prdt_model").val();
			  var nxg_sapcode = $("#nxg_sapcode").val();
            var nxg_ac_r134a = $("#nxg_ac_r134a").val();
            var nxg_ac_r404a = $("#nxg_ac_r404a").val();
          var nxg_ac_r407c = $("#nxg_ac_r407c").val();
            
            
            var nxg_cap = $("#nxg_cap").val();
            var nxg_wrk_pres = $("#nxg_wrk_pres").val();
            var nxg_ac_io = $("#nxg_ac_io").val();
            var nxg_rp_kw = $("#nxg_rp_kw").val();

            var nxg_deli = $("#nxg_deli").val();
            var nxg_ec_220v = $("#nxg_ec_220v").val();
            var nxg_ec_415v = $("#nxg_ec_415v").val();
            var nxg_wrnt_doc = $("#nxg_wrnt_doc").val();
            var nxg_wrnt_doi = $("#nxg_wrnt_doi").val();
            var nxg_wght = $("#nxg_wght").val();
var nxg_descrp = $("#nxg_descrp").val();
            if (nxg_prdt_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#nxg_prdt_model").focus();

                return false;
            }
			  if (nxg_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#nxg_sapcode").focus();

                return false;
            }
           

            if (nxg_ac_r134a == '')
            {
                $('#errors').html('Enter Air Cooled R134a');
                $("#nxg_ac_r134a").focus();

                return false;
            }
           
            if (nxg_ac_r404a == '')
            {
                $('#errors').html('Enter Air Cooled R404c');
                $("#nxg_ac_r404a").focus();

                return false;
            }
            if (nxg_ac_r407c == '')
            {
                $('#errors').html('Enter Air Cooled R407c');
                $("#nxg_ac_r407c").focus();

                return false;
            }

 if (nxg_cap == '')
            {
                $('#errors').html('Enter Capacity');
                $("#nxg_cap").focus();

                return false;
            }
            if (nxg_wrk_pres == '')
            {
                $('#errors').html('Enter Work Pressure');
                $("#nxg_wrk_pres").focus();

                return false;
            }
               if (nxg_ac_io == '')
            {
                $('#errors').html('Enter Air Connection In/Out');
                $("#nxg_ac_io").focus();

                return false;
            }
                if (nxg_rp_kw == '')
            {
                $('#errors').html('Enter Rate Power KW ');
                $("#nxg_rp_kw").focus();

                return false;
            }

            if (nxg_deli == '')
            {
                $('#errors').html('Enter Delivery Terms');
                $("#nxg_deli").focus();

                return false;
            }
               if (nxg_ec_220v == '')
            {
                $('#errors').html('Electrical Connection 220v/1s/50Hz');
                $("#nxg_ec_220v").focus();

                return false;
            }
            
           
            if (nxg_ec_415v == '')
            {
                $('#errors').html('Enter Electrical Connection 415v/3s/50Hz');
                $("#nxg_ec_415v").focus();

                return false;
            }
            if (nxg_wrnt_doc == '')
            {
                $('#errors').html('Enter Warranty Date of commisioning');
                $("#nxg_wrnt_doc").focus();

                return false;
            }

            if (nxg_wrnt_doi == '')
            {
                $('#errors').html('Enter Warranty Date of invoice');
                $("#nxg_wrnt_doi").focus();

                return false;
            }
           
         

            if (nxg_wght == '')
            {
                $('#errors').html('Enter weight');
                $("#nxg_wght").focus();

                return false;
            }
			  if (nxg_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#nxg_descrp").focus();

                return false;
            }
else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
	nxg_prdt_model:nxg_prdt_model,
	nxg_sapcode:nxg_sapcode,
		nxg_ac_r134a:nxg_ac_r134a,
		nxg_ac_r404a:nxg_ac_r404a,
		nxg_ac_r407c:nxg_ac_r407c,
		nxg_cap:nxg_cap,
		nxg_wrk_pres:nxg_wrk_pres,
		nxg_ac_io:nxg_ac_io,
		nxg_rp_kw:nxg_rp_kw,
		nxg_deli:nxg_deli,
		nxg_ec_220v:nxg_ec_220v,
		nxg_ec_415v:nxg_ec_415v,
		nxg_wrnt_doc:nxg_wrnt_doc,
		nxg_wrnt_doi:nxg_wrnt_doi,
		nxg_wght:nxg_wght,
		nxg_descrp:nxg_descrp,
		gem:gem,
	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;
			
			
			
			



        }
        
         //2kw
        if (gem == '2KW') {
alert('gem')
            var kw_prd_model = $("#2kw_prd_model").val();
			  var kw_sapcode = $("#kw_sapcode").val();
            var kw_ac_r134 = $("#2kw_ac_r134").val();
            var kw_ac_r404c = $("#2kw_ac_r404c").val();
          var kw_ac_r407cs = $("#2kw_ac_r407cs").val();
            
            
            var kw_cap = $("#2kw_cap").val();
            var kw_wrk_pressure = $("#2kw_wrk_pressure").val();
            var kw_ac_io = $("#2kw_ac_io").val();
            var kw_pwr_cons = $("#2kw_pwr_cons").val();

            var kw_delivery_times = $("#2kw_delivery_times").val();
            var kw_ec_230v = $("#kw_ec_230v").val();
            var kw_ec_415v = $("#kw_ec_415v").val();
            var kw_warnty_doc = $("#2kw_warnty_doc").val();
            var kw_warnty_doi = $("#2kw_warnty_doi").val();
            var kw_weght = $("#2kw_weght").val();
var kw_descrp = $("#kw_descrp").val();
            if (kw_prd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#2kw_prd_model").focus();

                return false;
            }

			  if (kw_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#kw_sapcode").focus();

                return false;
            }
           
            if (kw_ac_r134 == '')
            {
                $('#errors').html('Enter Air Cooled R134a');
                $("#2kw_ac_r134").focus();

                return false;
            }
           
          if (kw_cap == '')
            {
                $('#errors').html('Enter Capacity');
                $("#2kw_cap").focus();

                return false;
            }
            if (kw_wrk_pressure == '')
            {
                $('#errors').html('Enter Work Pressure');
                $("#2kw_wrk_pressure").focus();

                return false;
            }
               if (kw_ac_io == '')
            {
                $('#errors').html('Enter Air Connection In/Out');
                $("#2kw_ac_io").focus();

                return false;
            }
                if (kw_pwr_cons == '')
            {
                $('#errors').html('Power Consumption');
                $("#2kw_pwr_cons").focus();

                return false;
            }

            if (kw_delivery_times == '')
            {
                $('#errors').html('Enter Delivery Terms');
                $("#2kw_delivery_times").focus();

                return false;
            }
               if (kw_ec_230v == '')
            {
                $('#errors').html('Electrical Connection 230v/1s/50Hz');
                $("#2kw_ec_230v").focus();

                return false;
            }
            
           
            if (kw_ec_415v == '')
            {
                $('#errors').html('Enter Electrical Connection 415v/3s/50Hz');
                $("#2kw_ec_415v").focus();

                return false;
            }
            if (kw_warnty_doc == '')
            {
                $('#errors').html('Enter Warranty Date of commisioning');
                $("#2kw_warnty_doc").focus();

                return false;
            }

            if (kw_warnty_doi == '')
            {
                $('#errors').html('Enter Warranty Date of invoice');
                $("#2kw_warnty_doi").focus();

                return false;
            }
           
         

            if (kw_weght == '')
            {
                $('#errors').html('Enter weight');
                $("#2kw_weght").focus();

                return false;
            }
  if (kw_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#kw_descrp").focus();

                return false;
            }
			
			     else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
		kw_prd_model:kw_prd_model,
		kw_sapcode:kw_sapcode,
		kw_ac_r134:kw_ac_r134,
		kw_cap:kw_cap,
		kw_wrk_pressure:kw_wrk_pressure,
		kw_ac_io:kw_ac_io,
		kw_pwr_cons:kw_pwr_cons,
		kw_delivery_times:kw_delivery_times,
		kw_ec_230v:kw_ec_230v,
		kw_ec_415v:kw_ec_415v,
		kw_warnty_doc:kw_warnty_doc,
		kw_warnty_doi:kw_warnty_doi,
		kw_weght:kw_weght,
		kw_descrp:kw_descrp,
		gem:gem,
	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;


        }
      // chiller rad
        
        
         if (gem == 'RAD') {


            var rad_prd_model = $("#rad_prd_model").val();
        var rad_sapcode = $("#rad_sapcode").val();
            var rad_wcr_r407 = $("#rad_wcr_r407").val();
            
            
            var rad_cap = $("#rad_cap").val();    var rad_io = $("#rad_io").val();
          
                      var rad_rpec_415 = $("#rad_rpec_415").val();


            var rad_deli = $("#rad_deli").val();
            var rad_wrk_pres = $("#rad_wrk_pres").val();
        
            var rad_wrnt_doc = $("#rad_wrnt_doc").val();
            var rad_wrnt_doi = $("#rad_wrnt_doi").val();
            var rad_wgt = $("#rad_wgt").val();
var rad_descrp = $("#rad_descrp").val();
            if (rad_prd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#rad_prd_model").focus();

                return false;
            }
  if (rad_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#rad_sapcode").focus();

                return false;
            }
           
            if (rad_wcr_r407 == '')
            {
                $('#errors').html('Enter Water cooled Refrigerant R407c Price ');
                $("#rad_wcr_r407").focus();

                return false;
            }
           
          if (rad_cap == '')
            {
                $('#errors').html('Enter Capacity');
                $("#rad_cap").focus();

                return false;
            }
              if (rad_io == '')
            {
                $('#errors').html('Enter Air Connection In/Out');
                $("#rad_io").focus();

                return false;
            }
              if (rad_rpec_415 == '')
            {
                $('#errors').html('Enter Rate powered Electrical Connection ANSI 415/3/50hz');
                $("#rad_rpec_415").focus();

                return false;
            }
             if (rad_deli == '')
            {
                $('#errors').html('Enter Delivery Terms');
                $("#rad_deli").focus();

                return false;
            }
            if (rad_wrk_pres == '')
            {
                $('#errors').html('Enter Work Pressure');
                $("#rad_wrk_pres").focus();

                return false;
            }
             
         
           
             
          
            if (rad_wrnt_doc == '')
            {
                $('#errors').html('Enter Warranty Date of commisioning');
                $("#rad_wrnt_doc").focus();

                return false;
            }

            if (rad_wrnt_doi == '')
            {
                $('#errors').html('Enter Warranty Date of invoice');
                $("#rad_wrnt_doi").focus();

                return false;
            }
           
         

            if (rad_wgt == '')
            {
                $('#errors').html('Enter weight');
                $("#rad_wgt").focus();

                return false;
            }

  if (rad_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#rad_descrp").focus();

                return false;
            }
						     else{
       
$.ajax({
type : 'POST',
url : 'update-file.php?action=RAD',
    data: {
		rad_prd_model:rad_prd_model,
		rad_sapcode:rad_sapcode,
		rad_wcr_r407:rad_wcr_r407,
		rad_cap:rad_cap,
		rad_io:rad_io,
		rad_rpec_415:rad_rpec_415,
		rad_deli:rad_deli,
		rad_wrk_pres:rad_wrk_pres,
		rad_wrnt_doc:rad_wrnt_doc,
		rad_wrnt_doi:rad_wrnt_doi,
		rad_wgt:rad_wgt,
		rad_descrp:rad_descrp,
		gem:gem,

	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;
			
			
			
			


        }
        
        
        // chiller mini
        if (gem == 'CHT_MINI') {


            var cht_prd_model = $("#cht_prd_model").val();
			  var cht_sapcode = $("#cht_sapcode").val();
            var cht_1_3acr22 = $("#cht_1_3acr22").val();
            var cht_1_3acphe = $("#cht_1_3acphe").val();
                      
            var cht_cap = $("#cht_cap").val();
            var cht_heat = $("#cht_heat").val();
            var cht_heat_kw = $("#cht_heat_kw").val();
            var aht_water_flw = $("#aht_water_flw").val();

          
            var cht_water_pump = $("#cht_water_pump").val();
            var cht_coolingfan = $("#cht_coolingfan").val();
                 var cht_in_out = $("#cht_in_out").val();
              var cht_delivry = $("#cht_delivry").val();
            var cht_warrnty_doc = $("#cht_warrnty_doc").val();
            var cht_warrnty_doi = $("#cht_warrnty_doi").val();
            var cht_wght = $("#cht_wght").val();
var cht_descrp = $("#cht_descrp").val();
            if (cht_prd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#cht_prd_model").focus();

                return false;
            }
 if (cht_sapcode == '')
            {
                $('#errors').html('Enter Product Model');
                $("#cht_sapcode").focus();

                return false;
            }
            if (cht_1_3acr22 == '')
            {
                $('#errors').html('Enter 1 to 3 Bar AC R22 Price ');
                $("#cht_1_3acr22").focus();

                return false;
            }
           
          if (cht_1_3acphe == '')
            {
                $('#errors').html('Enter 1 to 3 Bar AC R22/PHE Price :');
                $("#cht_1_3acphe").focus();

                return false;
            }
            if (cht_cap == '')
            {
                $('#errors').html('Enter Capacity');
                $("#cht_cap").focus();

                return false;
            }
            if (cht_heat == '')
            {
                $('#errors').html('Heat Load Kcal/h');
                $("#cht_heat").focus();

                return false;
            }
               if (cht_heat_kw== '')
            {
                $('#errors').html('Heat Load Kw :');
                $("#cht_heat_kw").focus();

                return false;
            }
                if (aht_water_flw == '')
            {
                $('#errors').html('Enter Water Pump Flow rate lpm ');
                $("#aht_water_flw").focus();

                return false;
            }

            if (cht_water_pump == '')
            {
                $('#errors').html('Water Pump Absorbed Power Kw');
                $("#cht_water_pump").focus();

                return false;
            }
               if (cht_coolingfan == '')
            {
                $('#errors').html('Enter Cooling fan Supply');
                $("#cht_coolingfan").focus();

                return false;
            }
            
           
            if (cht_in_out == '')
            {
                $('#errors').html('Enter Input/Output water Bsp ');
                $("#cht_in_out").focus();

                return false;
            }
            if (cht_delivry == '')
            {
                $('#errors').html('Enter Delivery');
                $("#cht_delivry").focus();

                return false;
            }

            if (cht_warrnty_doc == '')
            {
                $('#errors').html('Enter Warranty Date Of Commission ');
                $("#cht_warrnty_doc").focus();

                return false;
            }
       
         
		      if (cht_warrnty_doi == '')
            {
                $('#errors').html('Enter Warranty Date Of invoice ');
                $("#cht_warrnty_doi").focus();

                return false;
            }
		 
            if (cht_wght == '')
            {
                $('#errors').html('Enter weight');
                $("#cht_wght").focus();

                return false;
            }

  if (cht_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#cht_descrp").focus();

                return false;
            }
			
						     else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
		cht_prd_model:cht_prd_model,
		cht_sapcode:cht_sapcode,
		cht_1_3acr22:cht_1_3acr22,
		cht_1_3acphe:cht_1_3acphe,
		cht_cap:cht_cap,
		cht_heat:cht_heat,
		cht_heat_kw:cht_heat_kw,
		aht_water_flw:aht_water_flw,
		cht_water_pump:cht_water_pump,
		cht_coolingfan:cht_coolingfan,
		cht_in_out:cht_in_out,
		cht_delivry:cht_delivry,
		cht_warrnty_doc:cht_warrnty_doc,
		cht_warrnty_doi:cht_warrnty_doi,
		cht_wght:cht_wght,
		cht_descrp:cht_descrp,
		gem:gem,

	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;
			
			


        }
              

			  
			    // chiller nexgen LH
        if (gem == 'CHT NEXTGEN LH') {


            var cht_nexlh_prd_model = $("#cht_nexlh_prd_model").val();
			  var cht_nexlh_sapcode = $("#cht_nexlh_sapcode").val();
            var cht_nexlh_lowtemp_ac = $("#cht_nexlh_lowtemp_ac").val();
            var cht_nexlh_lowtemp_water = $("#cht_nexlh_lowtemp_water").val();
                      
            var cht_nexlh_cap = $("#cht_nexlh_cap").val();
            var cht_nexlh_heatkcal = $("#cht_nexlh_heatkcal").val();
            var cht_nexlh_heatkw = $("#cht_nexlh_heatkw").val();
            var cht_nexlh_water_flow = $("#cht_nexlh_water_flow").val();

          
            var cht_nexlh_water_abrob = $("#cht_nexlh_water_abrob").val();
            var cht_nexlh_coolfan = $("#cht_nexlh_coolfan").val();
                 var cht_nexlh_inout = $("#cht_nexlh_inout").val();
              var cht_nexlh_delivr = $("#cht_nexlh_delivr").val();
            var cht_nexlh_warnt_doc = $("#cht_nexlh_warnt_doc").val();
            var cht_nexlh_warnty_doi = $("#cht_nexlh_warnty_doi").val();
            var cht_nexlh_wight = $("#cht_nexlh_wight").val();
var cht_nexlh_descrp = $("#cht_nexlh_descrp").val();
            if (cht_nexlh_prd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#cht_nexlh_prd_model").focus();

                return false;
            } 
       if (cht_nexlh_sapcode == '')
            {
                $('#errors').html('Enter Product Model');
                $("#cht_nexlh_sapcode").focus();

                return false;
            } 			
			if (cht_nexlh_prd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#cht_nexlh_prd_model").focus();

                return false;
            }


            if (cht_nexlh_lowtemp_ac == '')
            {
                $('#errors').html('Enter low temperature,water tempe design-10 degree c Air coolded Price ');
                $("#cht_nexlh_lowtemp_ac").focus();

                return false;
            }
           
          if (cht_nexlh_lowtemp_water == '')
            {
                $('#errors').html('Enter low temperature,water tempe design-10 degree c Water coolded Price :');
                $("#cht_nexlh_lowtemp_water").focus();

                return false;
            }
            if (cht_nexlh_cap == '')
            {
                $('#errors').html('Enter Capacity');
                $("#cht_nexlh_cap").focus();

                return false;
            }
            if (cht_nexlh_heatkcal == '')
            {
                $('#errors').html('Heat Load Kcal/h');
                $("#cht_nexlh_heatkcal").focus();

                return false;
            }
               if (cht_nexlh_heatkw== '')
            {
                $('#errors').html('Heat Load Kw :');
                $("#cht_nexlh_heatkw").focus();

                return false;
            }
                if (cht_nexlh_water_flow == '')
            {
                $('#errors').html('Enter Water Pump Floe rate lpm ');
                $("#cht_nexlh_water_flow").focus();

                return false;
            }

            if (cht_nexlh_water_abrob == '')
            {
                $('#errors').html('Enter Water Pump absorbed rate Kw');
                $("#cht_nexlh_water_abrob").focus();

                return false;
            }
               if (cht_nexlh_coolfan == '')
            {
                $('#errors').html('Cooling Fan Supply');
                $("#cht_nexlh_coolfan").focus();

                return false;
            }
            
           
            if (cht_nexlh_inout == '')
            {
                $('#errors').html('Enter Input output water');
                $("#cht_nexlh_inout").focus();

                return false;
            }
            if (cht_nexlh_delivr == '')
            {
                $('#errors').html('Delivery Terms');
                $("#cht_nexlh_delivr").focus();

                return false;
            }
			if (cht_nexlh_warnt_doc == '')
            {
                $('#errors').html('Enter Warranty Date Of Commission');
                $("#cht_nexlh_warnt_doc").focus();

                return false;
            }

            if (cht_nexlh_warnty_doi == '')
            {
                $('#errors').html('Enter Warranty Date of invoice');
                $("#cht_nexlh_warnty_doi").focus();

                return false;
            }
           
         

            if (cht_nexlh_wight == '')
            {
                $('#errors').html('Enter weight');
                $("#cht_nexlh_wight").focus();

                return false;
            }
  if (cht_nexlh_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#cht_nexlh_descrp").focus();

                return false;
            }
	
						     else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
		cht_nexlh_prd_model:cht_nexlh_prd_model,
		cht_lh_sapcode:cht_lh_sapcode,
		cht_nexlh_lowtemp_ac:cht_nexlh_lowtemp_ac,
		cht_nexlh_lowtemp_water:cht_nexlh_lowtemp_water,
		cht_nexlh_cap:cht_nexlh_cap,
		cht_nexlh_heatkcal:cht_nexlh_heatkcal,
		cht_nexlh_heatkw:cht_nexlh_heatkw,
		cht_nexlh_water_flow:cht_nexlh_water_flow,
		cht_nexlh_water_abrob:cht_nexlh_water_abrob,
		cht_nexlh_coolfan:cht_nexlh_coolfan,
		cht_nexlh_inout:cht_nexlh_inout,
		cht_nexlh_delivr:cht_nexlh_delivr,
		cht_nexlh_warnt_doc:cht_nexlh_warnt_doc,
		cht_nexlh_warnty_doi:cht_nexlh_warnty_doi,
		cht_nexlh_wight:cht_nexlh_wight,
		cht_nexlh_descrp:cht_nexlh_descrp,
    	gem:gem,

	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;
			
		
   }

// chiller nexgen HH
        if (gem =='CHT NEXTGEN HH') {


            var nxtgen_hh_prd_model = $("#nxtgen_hh_prd_model").val();
			  var nxtgen_hh_sapcode = $("#nxtgen_hh_sapcode").val();
            var nxtgen_hh_hig_tempac = $("#nxtgen_hh_hig_tempac").val();
            var nxtgen_hh_high_tempwater = $("#nxtgen_hh_high_tempwater").val();
                      
            var nxtgen_hh_cap = $("#nxtgen_hh_cap").val();
            var nxtgen_hh_heatkcal = $("#nxtgen_hh_heatkcal").val();
            var nxtgen_hh_heatkw = $("#nxtgen_hh_heatkw").val();
            var water_pump_1pm = $("#water_pump_1pm").val();

          
            var nxt_genhh_waterpump_power = $("#nxt_genhh_waterpump_power").val();
            var nxt_gen_hh_cooling = $("#nxt_gen_hh_cooling").val();
            var nxt_gen_hh_io = $("#nxt_gen_hh_io").val();
              var nxt_gen_hh_delivery_terms = $("#nxt_gen_hh_delivery_terms").val();
            var nxt_gen_hh_warranty_doc = $("#nxt_gen_hh_warranty_doc").val();
           
			  var nxt_gen_hh_warranty_doi = $("#nxt_gen_hh_warranty_doi").val();
            var nxtgen_hh_wight = $("#nxtgen_hh_wight").val();
var nxtgen_hh_descrp = $("#nxtgen_hh_descrp").val();
            if (nxtgen_hh_prd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#nxtgen_hh_prd_model").focus();

                return false;
            }
  if (nxtgen_hh_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#nxtgen_hh_sapcode").focus();

                return false;
            }
           
            if (nxtgen_hh_hig_tempac == '')
            {
                $('#errors').html('Enter High temperature,water tempe design-15 degree c Air coolded Price');
                $("#nxtgen_hh_hig_tempac").focus();

                return false;
            }
           
          if (nxtgen_hh_high_tempwater == '')
            {
                $('#errors').html('Enter High temperature,water tempe design-15 degree c water coolded Price');
                $("#nxtgen_hh_high_tempwater").focus();

                return false;
            }
            if (nxtgen_hh_cap == '')
            {
                $('#errors').html('Enter Capacity');
                $("#nxtgen_hh_cap").focus();

                return false;
            }
            if (nxtgen_hh_heatkcal == '')
            {
                $('#errors').html('Heat Load Kcal/h');
                $("#nxtgen_hh_heatkcal").focus();

                return false;
            }
               if (nxtgen_hh_heatkw== '')
            {
                $('#errors').html('Heat Load Kw :');
                $("#nxtgen_hh_heatkw").focus();

                return false;
            }
                if (water_pump_1pm == '')
            {
                $('#errors').html('Enter Water Pump Floe rate lpm ');
                $("#water_pump_1pm").focus();

                return false;
            }

            if (nxt_genhh_waterpump_power == '')
            {
                $('#errors').html('Enter Water Pump absorbed rate Kw');
                $("#nxt_genhh_waterpump_power").focus();

                return false;
            }
               if (nxt_gen_hh_cooling == '')
            {
                $('#errors').html('Cooling Fan Supply');
                $("#nxt_gen_hh_cooling").focus();

                return false;
            }
            
           
            if (nxt_gen_hh_io == '')
            {
                $('#errors').html('Enter Input output water');
                $("#nxt_gen_hh_io").focus();

                return false;
            }
            if (nxt_gen_hh_delivery_terms == '')
            {
                $('#errors').html('Delivery Terms');
                $("#nxt_gen_hh_delivery_terms").focus();

                return false;
            }
			if (nxt_gen_hh_warranty_doc == '')
            {
                $('#errors').html('Enter Warranty Date Of Commission');
                $("#nxt_gen_hh_warranty_doc").focus();

                return false;
            }

            if (nxt_gen_hh_warranty_doi == '')
            {
                $('#errors').html('Enter Warranty Date of invoice');
                $("#nxt_gen_hh_warranty_doi").focus();

                return false;
            }
           
         

            if (nxtgen_hh_wight == '')
            {
                $('#errors').html('Enter weight');
                $("#nxtgen_hh_wight").focus();

                return false;
            }
			  if (nxtgen_hh_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#nxtgen_hh_descrp").focus();

                return false;
            }

 else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
        nxtgen_hh_prd_model:nxtgen_hh_prd_model,
		nxtgen_hh_sapcode:nxtgen_hh_sapcode,
		nxtgen_hh_hig_tempac:nxtgen_hh_hig_tempac,
		nxtgen_hh_high_tempwater:nxtgen_hh_high_tempwater,
		nxtgen_hh_cap:nxtgen_hh_cap,
		nxtgen_hh_heatkcal:nxtgen_hh_heatkcal,
		nxtgen_hh_heatkw:nxtgen_hh_heatkw,
		water_pump_1pm:water_pump_1pm,
		nxt_genhh_waterpump_power:nxt_genhh_waterpump_power,
		nxt_gen_hh_cooling:nxt_gen_hh_cooling,
		nxt_gen_hh_io:nxt_gen_hh_io,
		nxt_gen_hh_delivery_terms:nxt_gen_hh_delivery_terms,
		nxt_gen_hh_warranty_doc:nxt_gen_hh_warranty_doc,
		nxt_gen_hh_warranty_doi:nxt_gen_hh_warranty_doi,
		nxtgen_hh_wight:nxtgen_hh_wight,
		nxtgen_hh_descrp:nxtgen_hh_descrp,
    	gem:gem,

	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;
			
		
   }
//Cooler sct

       if (gem == 'SCT') {


            var sct_prd_model = $("#sct_prd_model").val();
			  var sct_sapcode = $("#sct_sapcode").val();
            var sct_low = $("#sct_low").val();
            var sct_high = $("#sct_high").val();
            var sct_io = $("#sct_io").val();
            
            var sct_wfr = $("#sct_wfr").val();
            var sct_moto = $("#sct_moto").val();
          
            var sct_deli = $("#sct_deli").val();
            var sct_out_water = $("#sct_out_water").val();
            var sct_wrnt_doc = $("#sct_wrnt_doc").val();
            var sct_wrnt_doi = $("#sct_wrnt_doi").val();
            var sct_wgt = $("#sct_wgt").val();
          var sct_descrp = $("#sct_descrp").val();

            if (sct_prd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#sct_prd_model").focus();

                return false;
            }
  if (sct_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#sct_sapcode").focus();

                return false;
            }
           
            if (sct_low == '')
            {
                $('#errors').html('Enter Low temperature fills Price');
                $("#sct_low").focus();

                return false;
            }
           
          if (sct_high == '')
            {
                $('#errors').html('Enter High temperature fills Price');
                $("#sct_high").focus();

                return false;
            }
            if (sct_io == '')
            {
                $('#errors').html('Enter In/out sizes');
                $("#sct_io").focus();

                return false;
            }
               if (sct_wfr == '')
            {
                $('#errors').html('Water flow rate ');
                $("#sct_wfr").focus();

                return false;
            }
                if (sct_moto == '')
            {
                $('#errors').html('Power Motor');
                $("#sct_moto").focus();

                return false;
            }

            if (sct_deli == '')
            {
                $('#errors').html('Enter Delivery Terms');
                $("#sct_deli").focus();

                return false;
            }
               if (sct_out_water == '')
            {
                $('#errors').html('Outlet water temp');
                $("#sct_out_water").focus();

                return false;
            }
            
           
            if (sct_wrnt_doc == '')
            {
                $('#errors').html('Enter Warranty Date Of Commission');
                $("#sct_wrnt_doc").focus();

                return false;
            }
            if (sct_wrnt_doi == '')
            {
                $('#errors').html('Enter Warranty Date Of Invoice');
                $("#sct_wrnt_doi").focus();

                return false;
            }

            if (sct_wgt == '')
            {
                $('#errors').html('Enter Weight');
                $("#sct_wgt").focus();

                return false;
            }
           
			  if (sct_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#sct_descrp").focus();

                return false;
            }
			     else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
	    sct_prd_model:sct_prd_model,
		sct_sapcode:sct_sapcode,
		sct_low:sct_low,
		sct_high:sct_high,
		sct_io:sct_io,
		sct_wfr:sct_wfr,
		sct_moto:sct_moto,
		sct_deli:sct_deli,
		sct_out_water:sct_out_water,
		sct_wrnt_doc:sct_wrnt_doc,
		sct_wrnt_doi:sct_wrnt_doi,
		sct_wgt:sct_wgt,
		sct_descrp:sct_descrp,
		gem:gem,
	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;


        }
     //Cooler scb

       if (gem == 'SCB') {


            var scb_prd_model = $("#scb_prd_model").val();
			  var scb_sapcode = $("#scb_sapcode").val();
            var scb_low = $("#scb_low").val();
            var scb_high = $("#scb_high").val();
            var scb_moto = $("#scb_moto").val();
            
            var scb_io = $("#scb_io").val();
            var scb_wfr = $("#scb_wfr").val();
          
            var scb_deli = $("#scb_deli").val();
            var scb_out_water = $("#scb_out_water").val();
            var scb_wrnt_doc = $("#scb_wrnt_doc").val();
            var scb_wrnt_doi = $("#scb_wrnt_doi").val();
            var scb_wgt = $("#scb_wgt").val();
          var scb_descrp = $("#scb_descrp").val();

            if (scb_prd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#scb_prd_model").focus();

                return false;
            }
			  if (scb_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#scb_sapcode").focus();

                return false;
            }
           

            if (scb_low == '')
            {
                $('#errors').html('Enter Low temperature fills Price');
                $("#scb_low").focus();

                return false;
            }
           
          if (scb_high == '')
            {
                $('#errors').html('Enter High temperature fills Price');
                $("#scb_high").focus();

                return false;
            }
            if (scb_moto == '')
            {
                $('#errors').html('Enter In/out sizes');
                $("#scb_moto").focus();

                return false;
            }
               if (scb_io == '')
            {
                $('#errors').html('Water flow rate ');
                $("#scb_io").focus();

                return false;
            }
                if (scb_wfr == '')
            {
                $('#errors').html('Power Motor');
                $("#scb_wfr").focus();

                return false;
            }

            if (scb_deli == '')
            {
                $('#errors').html('Enter Delivery Terms');
                $("#scb_deli").focus();

                return false;
            }
               if (scb_out_water == '')
            {
                $('#errors').html('Outlet water temp');
                $("#scb_out_water").focus();

                return false;
            }
            
           
            if (scb_wrnt_doc == '')
            {
                $('#errors').html('Enter Warranty Date Of Commission');
                $("#scb_wrnt_doc").focus();

                return false;
            }
            if (scb_wrnt_doi == '')
            {
                $('#errors').html('Enter Warranty Date Of Invoice');
                $("#scb_wrnt_doi").focus();

                return false;
            }

            if (scb_wgt == '')
            {
                $('#errors').html('Enter Weight');
                $("#scb_wgt").focus();

                return false;
            }
             if (scb_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#scb_descrp").focus();

                return false;
            }
			
			     else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
	    scb_prd_model:scb_prd_model,
		scb_sapcode:scb_sapcode,
		scb_low:scb_low,
		scb_high:scb_high,
		scb_io:scb_io,
		scb_wfr:scb_wfr,
		scb_moto:scb_moto,
		scb_deli:scb_deli,
		scb_out_water:scb_out_water,
		scb_wrnt_doc:scb_wrnt_doc,
		scb_wrnt_doi:scb_wrnt_doi,
		scb_wgt:scb_wgt,
		scb_descrp:scb_descrp,
		gem:gem,
	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;


        }

		//Cooler DCT

       if (gem == 'DCT') {


            var dct_prd_modl = $("#dct_prd_modl").val();
			  var dct_sapcode = $("#dct_sapcode").val();
            var dct_prc = $("#dct_prc").val();
            var dct_motr_pwr = $("#dct_motr_pwr").val();
            var dct_fan_qul = $("#dct_fan_qul").val();
            
            var dct_header_flg = $("#dct_header_flg").val();
            var dct_contact_fan = $("#dct_contact_fan").val();
          
            var dct_delivry = $("#dct_delivry").val();
            var dct_warnty_doc = $("#dct_warnty_doc").val();
            var dct_warnty_doi = $("#dct_warnty_doi").val();
            var dct_wight = $("#dct_wight").val();
          
var dct_descrp = $("#dct_descrp").val();
            if (dct_prd_modl == '')
            {
                $('#errors').html('Enter Product Model');
                $("#dct_prd_modl").focus();

                return false;
            }
			  if (dct_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#dct_sapcode").focus();

                return false;
            }

            if (dct_prc == '')
            {
                $('#errors').html('Enter Price');
                $("#dct_prc").focus();

                return false;
            }
           
          if (dct_motr_pwr == '')
            {
                $('#errors').html('Enter Motor Power Hp ');
                $("#dct_motr_pwr").focus();

                return false;
            }
            if (dct_fan_qul == '')
            {
                $('#errors').html('Enter Fan Quality');
                $("#dct_fan_qul").focus();

                return false;
            }
               if (dct_header_flg == '')
            {
                $('#errors').html('Enter Header Pipe & Flag size');
                $("#dct_header_flg").focus();

                return false;
            }
                if (dct_contact_fan == '')
            {
                $('#errors').html('Enter Contact Person Fan Diametter');
                $("#dct_contact_fan").focus();

                return false;
            }

            if (dct_delivry == '')
            {
                $('#errors').html('Enter Delivery Term');
                $("#dct_delivry").focus();

                return false;
            }
               if (dct_warnty_doc == '')
            {
                $('#errors').html(' Enter Warranty Date Of Commission');
                $("#dct_warnty_doc").focus();

                return false;
            }
            
           
            if (dct_warnty_doi == '')
            {
                $('#errors').html('Enter Warranty Date Of Invoice');
                $("#dct_warnty_doi").focus();

                return false;
            }
            if (dct_wight == '')
            {
                $('#errors').html('Enter Configuration ');
                $("#dct_wight").focus();

                return false;
            }

			  if (dct_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#dct_descrp").focus();

                return false;
            }
			     else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
dct_prd_modl:dct_prd_modl,
dct_sapcode:dct_sapcode,
		dct_prc:dct_prc,
		dct_motr_pwr:dct_motr_pwr,
		dct_fan_qul:dct_fan_qul,
		dct_header_flg:dct_header_flg,
		dct_contact_fan:dct_contact_fan,
		dct_delivry:dct_delivry,
		dct_warnty_doc:dct_warnty_doc,
		dct_warnty_doi:dct_warnty_doi,
		dct_wight:dct_wight,
		dct_descrp:dct_descrp,
		gem:gem,
	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;


        }
		
			//VXS
		
		if (gem == 'VXS') {


            var vxs_prd_model = $("#vxs_prd_model").val();
			  var vxs_sapcode = $("#vxs_sapcode").val();
            var vxs_vartexdrain = $("#vxs_vartexdrain").val();
            var vxs_pipe = $("#vxs_pipe").val();
          var vxs_line_pressur = $("#vxs_line_pressur").val();
            
            
            var vxs_cap = $("#vxs_cap").val();
            var vxs_inout = $("#vxs_inout").val();
            var vxs_delivry = $("#vxs_delivry").val();
            var vxs_warnty_doc = $("#vxs_warnty_doc").val();
			var vxs_warnty_doi = $("#vxs_warnty_doi").val();
			var vxs_wrk_prssur = $("#vxs_wrk_prssur").val();
			var vxs_wight = $("#vxs_wight").val();
			
			var vxs_descrp = $("#vxs_descrp").val();

           
            

            if (vxs_prd_model == '')
            {
                $('#errors').html('Enter Product Model  ');
                $("#vxs_prd_model").focus();

                return false;
            }
			  if (vxs_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#vxs_sapcode").focus();

                return false;
            }

            if (vxs_vartexdrain == '')
            {
                $('#errors').html('Enter Vartex Separator Drain Value Price       ');
                $("#vxs_vartexdrain").focus();

                return false;
            }
           
          if (vxs_pipe == '')
            {
                $('#errors').html('Enter Pipe Size   ');
                $("#vxs_pipe").focus();

                return false;
            }
            if (vxs_line_pressur == '')
            {
                $('#errors').html('Enter Line pressure Weight     ');
                $("#vxs_line_pressur").focus();

                return false;
            }
               if (vxs_cap == '')
            {
                $('#errors').html('Enter Capacity in Cfm   ');
                $("#vxs_cap").focus();

                return false;
            }
                if (vxs_inout == '')
            {
                $('#errors').html('Enter In/Out   ');
                $("#vxs_inout").focus();

                return false;
            }

            if (vxs_delivry == '')
            {
                $('#errors').html('Enter Delivery Terms   ');
                $("#vxs_delivry").focus();

                return false;
            }
			if (vxs_warnty_doc == '')
            {
                $('#errors').html('Enter Warranty Date Of Commission     ');
                $("#vxs_warnty_doc").focus();

                return false;
            }
			if (vxs_warnty_doi == '')
            {
                $('#errors').html('Enter Warranty Date Of Invoice      ');
                $("#vxs_warnty_doi").focus();

                return false;
            }
			if (vxs_wrk_prssur == '')
            {
                $('#errors').html('Enter Working Pressure    ');
                $("#vxs_wrk_prssur").focus();

                return false;
            }
			if (vxs_wight == '')
            {
                $('#errors').html('Enter Weight     ');
                $("#vxs_wight").focus();

                return false;
            }
			
			
			  if (vxs_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#vxs_descrp").focus();

                return false;
            }

            

			
			     else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
		
		vxs_prd_model:vxs_prd_model,
		vxs_sapcode:vxs_sapcode,
		vxs_vartexdrain:vxs_vartexdrain,
		vxs_pipe:vxs_pipe,
		vxs_line_pressur:vxs_line_pressur,
		vxs_cap:vxs_cap,
		vxs_inout:vxs_inout,
		vxs_delivry:vxs_delivry,
		vxs_warnty_doc:vxs_warnty_doc,
		vxs_warnty_doi:vxs_warnty_doi,
		vxs_wrk_prssur:vxs_wrk_prssur,
		vxs_wight:vxs_wight,
		vxs_descrp:vxs_descrp,
		gem:gem,
	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;


        }
		//VAR
			if (gem == 'VAR') {


            var var_prd_model = $("#var_prd_model").val();
			  var var_sapcode = $("#var_sapcode").val();
            var var_modal_vari = $("#var_modal_vari").val();
            var var_wrkpressur = $("#var_wrkpressur").val();
          var var_prc = $("#var_prc").val();
            
            
            var var_cap = $("#var_cap").val();
            var var_shell = $("#var_shell").val();
            var var_inout = $("#var_inout").val();
            var var_hand = $("#var_hand").val();
			var var_delivr = $("#var_delivr").val();
			var var_warnty_doc = $("#var_warnty_doc").val();
			var var_warnty_doi = $("#var_warnty_doi").val();
			var var_moc = $("#var_moc").val();
			var var_wight = $("#var_wight").val();
			
var var_descrp = $("#var_descrp").val();
           
            

            if (var_prd_model == '')
            {
                $('#errors').html('Enter Product Model  ');
                $("#var_prd_model").focus();

                return false;
            }
			  if (var_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#var_sapcode").focus();

                return false;
            }

            if (var_modal_vari == '')
            {
                $('#errors').html('Enter Model Variance      ');
                $("#var_modal_vari").focus();

                return false;
            }
           
          if (var_wrkpressur == '')
            {
                $('#errors').html('Enter Working Pressure :  ');
                $("#var_wrkpressur").focus();

                return false;
            }
            if (var_prc == '')
            {
                $('#errors').html('Enter Price     ');
                $("#var_prc").focus();

                return false;
            }
               if (var_cap == '')
            {
                $('#errors').html('Enter Capacity in ltrs  ');
                $("#var_cap").focus();

                return false;
            }
                if (var_shell == '')
            {
                $('#errors').html('Enter Shell/Dish Thickness  ');
                $("#var_shell").focus();

                return false;
            }

            if (var_inout == '')
            {
                $('#errors').html('Enter In/Out Connection    ');
                $("#var_inout").focus();

                return false;
            }
			if (var_hand == '')
            {
                $('#errors').html('Enter Hand/Man Hole     ');
                $("#var_hand").focus();

                return false;
            }
			if (var_delivr == '')
            {
                $('#errors').html('Enter Delivery Terms      ');
                $("#var_delivr").focus();

                return false;
            }
			if (var_warnty_doc == '')
            {
                $('#errors').html('Enter Warranty Date Of Commission   ');
                $("#var_warnty_doc").focus();

                return false;
            }
			if (var_warnty_doi == '')
            {
                $('#errors').html('Enter Warranty Date Of Invoice     ');
                $("#var_warnty_doi").focus();

                return false;
            }
			if (var_moc == '')
            {
                $('#errors').html('Enter Moc/Coc   ');
                $("#var_moc").focus();

                return false;
            }
			if (var_wight == '')
            {
                $('#errors').html('Enter Weight    ');
                $("#var_wight").focus();

                return false;
            }
			
			  if (var_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#var_descrp").focus();

                return false;
            }

            

			
			     else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
		var_prd_model:var_prd_model,
		var_sapcode:var_sapcode,
		var_modal_vari:var_modal_vari,
		var_wrkpressur:var_wrkpressur,
		var_prc:var_prc,
		var_cap:var_cap,
		var_shell:var_shell,
		var_inout:var_inout,
		var_hand:var_hand,
		var_delivr:var_delivr,
		var_warnty_doc:var_warnty_doc,
		var_warnty_doi:var_warnty_doi,
		var_moc:var_moc,
		var_wight:var_wight,
		var_descrp:var_descrp,
		gem:gem,
	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;


        }
		
				
			
		//gzf catridges
		
		
		if (gem == 'GZF CATRIDGES') {


            var gzf_cart_prd_model = $("#gzf_cart_prd_model").val();
			  var gzf_cart_sapcode = $("#gzf_cart_sapcode").val();
            var gzf_cart_genralfilter = $("#gzf_cart_genralfilter").val();
            var gzf_cart_microil = $("#gzf_cart_microil").val();
          var gzf_cart_sub_microil = $("#gzf_cart_sub_microil").val();
            
            
            var gzf_cart_activatedcarb = $("#gzf_cart_activatedcarb").val();
            var gzf_cart_cap = $("#gzf_cart_cap").val();
            var gzf_cart_delvr = $("#gzf_cart_delvr").val();
            var gzf_cart_warnty_doc = $("#gzf_cart_warnty_doc").val();

            var gzf_cart_warnty_doi = $("#gzf_cart_warnty_doi").val();
            var gzf_cart_wight = $("#gzf_cart_wight").val();
            var gzf_cart_descrp = $("#gzf_cart_descrp").val();
            if (gzf_cart_prd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#gzf_cart_prd_model").focus();

                return false;
            }

			  if (gzf_cart_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#gzf_cart_sapcode").focus();

                return false;
            }
            if (gzf_cart_genralfilter == '')
            {
                $('#errors').html('Enter Genral Purpose Filter Catridge Price ');
                $("#gzf_cart_genralfilter").focus();

                return false;
            }
           
          if (gzf_cart_microil == '')
            {
                $('#errors').html('Enter Micro oil Removing filter Catridge Price');
                $("#gzf_cart_microil").focus();

                return false;
            }
            if (gzf_cart_sub_microil == '')
            {
                $('#errors').html('Enter Sub Micro oil Removing filter Catridge Price ');
                $("#gzf_cart_sub_microil").focus();

                return false;
            }
               if (gzf_cart_activatedcarb == '')
            {
                $('#errors').html('Enter Activated corbon filter Catridge Price  :');
                $("#gzf_cart_activatedcarb").focus();

                return false;
            }
                if (gzf_cart_cap == '')
            {
                $('#errors').html('Enter Capacity ');
                $("#gzf_cart_cap").focus();

                return false;
            }

            if (gzf_cart_delvr == '')
            {
                $('#errors').html('Enter Delivery Terms');
                $("#gzf_cart_delvr").focus();

                return false;
            }
               if (gzf_cart_warnty_doc == '')
            {
                $('#errors').html('Enter Warranty Date Of Commission');
                $("#gzf_cart_warnty_doc").focus();

                return false;
            }
            
           
            if (gzf_cart_warnty_doi == '')
            {
                $('#errors').html('Enter  Warranty Date Of Invoice ');
                $("#gzf_cart_warnty_doi").focus();

                return false;
            }
            if (gzf_cart_wight == '')
            {
                $('#errors').html('Enter Weight ');
                $("#gzf_cart_wight").focus();

                return false;
            }

            
  if (gzf_cart_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#gzf_cart_descrp").focus();

                return false;
            }
			
			     else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
		gzf_cart_prd_model:gzf_cart_prd_model,
		gzf_cart_sapcode:gzf_cart_sapcode,
		gzf_cart_genralfilter:gzf_cart_genralfilter,
		gzf_cart_microil:gzf_cart_microil,
		gzf_cart_sub_microil:gzf_cart_sub_microil,
		gzf_cart_activatedcarb:gzf_cart_activatedcarb,
		gzf_cart_cap:gzf_cart_cap,
		gzf_cart_delvr:gzf_cart_delvr,
		gzf_cart_warnty_doc:gzf_cart_warnty_doc,
		gzf_cart_warnty_doi:gzf_cart_warnty_doi,
		gzf_cart_wight:gzf_cart_wight,
		gzf_cart_descrp:gzf_cart_descrp,
		
		gem:gem,
	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;


        }
		
		//Cooler GCT_ECHO

       if (gem == 'GCT_ECHO') {


            var gcteco_prd_model = $("#gcteco_prd_model").val();
			  var gcteco_sapcode = $("#gcteco_sapcode").val();
            var gcteco_lowcost = $("#gcteco_lowcost").val();
            var gcteco_highcost = $("#gcteco_highcost").val();
            var gcteco_ec_price = $("#gcteco_ec_price").val();
            
            var gcteco_cap = $("#gcteco_cap").val();
            var gcteco_motor = $("#gcteco_motor").val();
          
            var gcteco_powrcons = $("#gcteco_powrcons").val();
			var gcteco_water = $("#gcteco_water").val();
            var gcteco_inout = $("#gcteco_inout").val();
            var gcteco_basincap = $("#gcteco_basincap").val();
            var gcteco_delvry = $("#gcteco_delvry").val();
			
             var gcteco_wrnty_doc = $("#gcteco_wrnty_doc").val();
            var gcteco_wrnty_doc = $("#gcteco_wrnty_doc").val();
            var gcteco_wrnty_doi = $("#gcteco_wrnty_doi").val();
            var gcteco_wight = $("#gcteco_wight").val();
          var gcteco_descrp = $("#gcteco_descrp").val();
            if (gcteco_prd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#gcteco_prd_model").focus();

                return false;
            }

			  if (gcteco_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#gcteco_sapcode").focus();

                return false;
            }
            if (gcteco_lowcost == '')
            {
                $('#errors').html('Enter Low price');
                $("#gcteco_lowcost").focus();

                return false;
            }
           
          if (gcteco_highcost == '')
            {
                $('#errors').html('Enter High price ');
                $("#gcteco_highcost").focus();

                return false;
            }
            if (gcteco_ec_price == '')
            {
                $('#errors').html('Enter Fan Quality');
                $("#gcteco_ec_price").focus();

                return false;
            }
			 if (gcteco_cap == '')
            {
                $('#errors').html('Enter Capacity');
                $("#gcteco_cap").focus();

                return false;
            }
			
			if (gcteco_motor == '')
            {
                $('#errors').html('Enter Recommended Erection charge Price');
                $("#gcteco_motor").focus();

                return false;
            }
              
                if (gcteco_motor == '')
            {
                $('#errors').html('Enter Motor rpm');
                $("#gcteco_motor").focus();

                return false;
            }

            if (gcteco_powrcons == '')
            {
                $('#errors').html('Enter Power consumed');
                $("#gcteco_powrcons").focus();

                return false;
            }
			
			 if (gcteco_water == '')
            {
                $('#errors').html('Enter Water Flow rate ');
                $("#gcteco_water").focus();

                return false;
            }
			
			
               if (gcteco_inout == '')
            {
                $('#errors').html(' Enter In/out size ');
                $("#gcteco_inout").focus();

                return false;
            }
            
           
            if (gcteco_basincap == '')
            {
                $('#errors').html('Enter Basin Holding Capacity ');
                $("#gcteco_basincap").focus();

                return false;
            }
            if (gcteco_delvry == '')
            {
                $('#errors').html('Enter Delivery Terms ');
                $("#gcteco_delvry").focus();

                return false;
            }

			if (gcteco_wrnty_doc == '')
            {
                $('#errors').html('Enter Warranty Date Of Commission');
                $("#gcteco_wrnty_doc").focus();

                return false;
            }

			if (gcteco_wrnty_doi == '')
            {
                $('#errors').html('Enter Warranty Date Of Invoice');
                $("#gcteco_wrnty_doi").focus();

                return false;
            }

			if (gcteco_wight == '')
            {
                $('#errors').html('Enter Weight ');
                $("#gcteco_wight").focus();

                return false;
            }

			  if (gcteco_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#gcteco_descrp").focus();

                return false;
            }

			     else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
        gcteco_prd_model:gcteco_prd_model,
		gcteco_sapcode:gcteco_sapcode,
		gcteco_lowcost:gcteco_lowcost,
		gcteco_highcost:gcteco_highcost,
		gcteco_ec_price:gcteco_ec_price,
		gcteco_cap:gcteco_cap,
		gcteco_motor:gcteco_motor,
		gcteco_powrcons:gcteco_powrcons,
		gcteco_water:gcteco_water,
		gcteco_inout:gcteco_inout,
		gcteco_basincap:gcteco_basincap,
		gcteco_delvry:gcteco_delvry,
		gcteco_wrnty_doc:gcteco_wrnty_doc,
		gcteco_wrnty_doi:gcteco_wrnty_doi,
		gcteco_wight:gcteco_wight,
		gcteco_descrp:gcteco_descrp,
		gem:gem,
	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;
        }
		//hp filter element
		
		
		
		if (gem == 'HP_FILTER_ELEMENT') {


            var hp_ele_prdt_model = $("#hp_ele_prdt_model").val();
			  var hp_ele_sapcode = $("#hp_ele_sapcode").val();
            var hp_ele_gen_pur = $("#hp_ele_gen_pur").val();
            var hp_ele_mic_oil = $("#hp_ele_mic_oil").val();
          var hp_ele_sub_mic_oil = $("#hp_ele_sub_mic_oil").val();
            
            
            var hp_ele_act_carbon = $("#hp_ele_act_carbon").val();
            var hp_ele_deli = $("#hp_ele_deli").val();
            var hp_ele_wrnt_doc = $("#hp_ele_wrnt_doc").val();
            var hp_ele_wrnt_doi = $("#hp_ele_wrnt_doi").val();

            var hp_ele_wrk_pres = $("#hp_ele_wrk_pres").val();
            var hp_ele_wgt = $("#hp_ele_wgt").val();
            
var hp_ele_descrp = $("#hp_ele_descrp").val();
            if (hp_ele_prdt_model == '')
            {
                $('#errors').html('Enter Product Model ');
                $("#hp_ele_prdt_model").focus();

                return false;
            }
			  if (hp_ele_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#hp_ele_sapcode").focus();

                return false;
            }

            if (hp_ele_gen_pur == '')
            {
                $('#errors').html('Enter General Purpose Filter element Price  ');
                $("#hp_ele_gen_pur").focus();

                return false;
            }
           
          if (hp_ele_mic_oil == '')
            {
                $('#errors').html('Enter Micro Oil Removing Filter element Price  ');
                $("#hp_ele_mic_oil").focus();

                return false;
            }
            if (hp_ele_sub_mic_oil == '')
            {
                $('#errors').html('Enter Sub Micro Oil Removing Filter element Price  ');
                $("#hp_ele_sub_mic_oil").focus();

                return false;
            }
               if (hp_ele_act_carbon == '')
            {
                $('#errors').html('Enter Activated carbon filter element  ');
                $("#hp_ele_act_carbon").focus();

                return false;
            }
                if (hp_ele_deli == '')
            {
                $('#errors').html('Enter Delivery terms  ');
                $("#hp_ele_deli").focus();

                return false;
            }

            if (hp_ele_wrnt_doc == '')
            {
                $('#errors').html('Enter Warranty Date Of Commission ');
                $("#hp_ele_wrnt_doc").focus();

                return false;
            }
               if (hp_ele_wrnt_doi == '')
            {
                $('#errors').html('Enter Warranty Date Of Invoice  ');
                $("#hp_ele_wrnt_doi").focus();

                return false;
            }
            
           
            if (hp_ele_wrk_pres == '')
            {
                $('#errors').html('Enter  Working pressure  ');
                $("#hp_ele_wrk_pres").focus();

                return false;
            }
            if (hp_ele_wgt == '')
            {
                $('#errors').html('Enter Weight  ');
                $("#hp_ele_wgt").focus();

                return false;
            }

              if (hp_ele_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#hp_ele_descrp").focus();

                return false;
            }

			
			     else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
		hp_ele_prdt_model:hp_ele_prdt_model,
		hp_ele_sapcode:hp_ele_sapcode,
		hp_ele_gen_pur:hp_ele_gen_pur,
		hp_ele_mic_oil:hp_ele_mic_oil,
		hp_ele_sub_mic_oil:hp_ele_sub_mic_oil,
		hp_ele_act_carbon:hp_ele_act_carbon,
		hp_ele_deli:hp_ele_deli,
		hp_ele_wrnt_doc:hp_ele_wrnt_doc,
		hp_ele_wrnt_doi:hp_ele_wrnt_doi,
		hp_ele_wrk_pres:hp_ele_wrk_pres,
		hp_ele_wgt:hp_ele_wgt,
		hp_ele_descrp:hp_ele_descrp,
		gem:gem,
	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;


        }
		
		
		//mst
		
				if (gem == 'MST') {


            var mst_prdt_model = $("#mst_prdt_model").val();
			  var mst_sapcode = $("#mst_sapcode").val();
            var mst_baff = $("#mst_baff").val();
            var mst_dem = $("#mst_dem").val();
          var mst_deli = $("#mst_deli").val();
            
            
            var mst_wrnt_doc = $("#mst_wrnt_doc").val();
            var mst_wrnt_doi = $("#mst_wrnt_doi").val();
            var mst_wrk_pres = $("#mst_wrk_pres").val();
            var mst_wgt = $("#mst_wgt").val();
            var mst_descrp = $("#mst_descrp").val();
           
            

            if (mst_prdt_model == '')
            {
                $('#errors').html('Enter Product Model ');
                $("#mst_prdt_model").focus();

                return false;
            }

			  if (mst_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#mst_sapcode").focus();

                return false;
            }
            if (mst_baff == '')
            {
                $('#errors').html('Enter Baffle type Price    ');
                $("#mst_baff").focus();

                return false;
            }
           
          if (mst_dem == '')
            {
                $('#errors').html('Enter Demister Price   ');
                $("#mst_dem").focus();

                return false;
            }
            if (mst_deli == '')
            {
                $('#errors').html('Enter Delivery terms    ');
                $("#mst_deli").focus();

                return false;
            }
               if (mst_wrnt_doc == '')
            {
                $('#errors').html('Enter Warranty Date Of Commission  ');
                $("#mst_wrnt_doc").focus();

                return false;
            }
                if (mst_wrnt_doi == '')
            {
                $('#errors').html('EnterWarranty Date Of Invoice  ');
                $("#mst_wrnt_doi").focus();

                return false;
            }

            if (mst_wrk_pres == '')
            {
                $('#errors').html('Enter Working pressure   ');
                $("#mst_wrk_pres").focus();

                return false;
            }
			if (mst_wgt == '')
            {
                $('#errors').html('Enter Weight    ');
                $("#mst_wgt").focus();

                return false;
            }
			
			
  if (mst_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#mst_descrp").focus();

                return false;
            }
            

			
			     else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
		mst_prdt_model:mst_prdt_model,
		mst_sapcode:mst_sapcode,
		mst_baff:mst_baff,
		mst_dem:mst_dem,
		mst_deli:mst_deli,
		mst_wrnt_doc:mst_wrnt_doc,
		mst_wrnt_doi:mst_wrnt_doi,
		mst_wrk_pres:mst_wrk_pres,
		mst_wgt:mst_wgt,
		mst_descrp:mst_descrp,
		gem:gem,
	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;


        }
		//GFV
		if (gem == 'GFV') {


            var gzf_prd_model = $("#gv_prd_model").val();
			  var gzf_sapcode = $("#gzf_sapcode").val();
            var gzf_prc = $("#gzf_prc").val();
            var gzf_valveopen = $("#gzf_valveopen").val();
          var gzf_valvedischrg = $("#gzf_valvedischrg").val();
            
            
            var gzf_pwrcon = $("#gzf_pwrcon").val();
            var gzf_max_temp = $("#gzf_max_temp").val();
            var gzf_max_oper = $("#gzf_max_oper").val();
            var gzf_inout_port = $("#gzf_inout_port").val();
 
            var gzf_warranty_doc = $("#gzf_warranty_doc").val();
			var gzf_warranty_doi = $("#gzf_warranty_doi").val();
            var gzf_delivr = $("#gzf_delivr").val();
			var gzf_wght = $("#gzf_wght").val();
			var gzf_descrp = $("#gzf_descrp").val();
            

            if (gzf_prd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#gv_prd_model").focus();

                return false;
            }

			  if (gzf_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#gzf_sapcode").focus();

                return false;
            }
            if (gzf_prc == '')
            {
                $('#errors').html('Enter Price');
                $("#gzf_prc").focus();

                return false;
            }
           
          if (gzf_valveopen == '')
            {
                $('#errors').html('Enter Valve opening intervel');
                $("#gzf_valveopen").focus();

                return false;
            }
            if (gzf_valvedischrg  == '')
            {
                $('#errors').html('Enter Valve Discharge');
                $("#gzf_valvedischrg").focus();

                return false;
            }
               if (gzf_pwrcon == '')
            {
                $('#errors').html('Enter Power consumption');
                $("#gzf_pwrcon").focus();

                return false;
            }
                if (gzf_max_temp == '')
            {
                $('#errors').html('Enter Max operating Temperature:');
                $("#gzf_max_temp").focus();

                return false;
            }

            if (gzf_max_oper == '')
            {
                $('#errors').html('Enter Max operating pressure');
                $("#gzf_max_oper").focus();

                return false;
            }
			
			if (gzf_inout_port == '')
            {
                $('#errors').html('Enter Input/Output ports');
                $("#gzf_inout_port").focus();

                return false;
            }
               if (gzf_warranty_doc == '')
            {
                $('#errors').html('Enter Warranty Date Of Commission ');
                $("#gzf_warranty_doc").focus();

                return false;
            }
            
           
            if (gzf_warranty_doi == '')
            {
                $('#errors').html('Enter  Warranty Date Of Invoice ');
                $("#gzf_warranty_doi").focus();

                return false;
            }
            if (gzf_delivr == '')
            {
                $('#errors').html('Enter Delivery Terms');
                $("#gzf_delivr").focus();

                return false;
            }
			if (gzf_wght == '')
            {
                $('#errors').html('Enter Weight');
                $("#gzf_wght").focus();

                return false;
            }

            
  if (gzf_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#gzf_descrp").focus();

                return false;
            }
			
			     else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
		gzf_prd_modelm:gzf_prd_model,
		gzf_sapcode:gzf_sapcode,
		gzf_prc:gzf_prc,
		gzf_valveopen:gzf_valveopen,
		gzf_valvedischrg:gzf_valvedischrg,
		gzf_pwrcon:gzf_pwrcon,
		gzf_max_temp:gzf_max_temp,
		gzf_max_oper:gzf_max_oper,
		gzf_inout_port:gzf_inout_port,
		gzf_warranty_doc:gzf_warranty_doc,
		gzf_warranty_doi:gzf_warranty_doi,
		gzf_delivr:gzf_delivr,
		gzf_wght:gzf_wght,
		gzf_descrp:gzf_descrp,
		gem:gem,
	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;


        }
		//gz
		
		
		
		if (gem == 'GZ') {


            var gz_prd_model = $("#gz_prd_model").val();
			  var gz_sapcode = $("#gz_sapcode").val();
            var gz_prc = $("#gz_prc").val();
            var gz_valveopen = $("#gz_valveopen").val();
          var gz_valvedischrg = $("#gz_valvedischrg").val();
            
            
            var gz_pwrcon = $("#gz_pwrcon").val();
            var gz_max_temp = $("#gz_max_temp").val();
            var gz_max_oper = $("#gz_max_oper").val();
            var gz_inout_port = $("#gz_inout_port").val();

            var gz_warranty_doc = $("#gz_warranty_doc").val();
			var gz_inout_port = $("#gz_inout_port").val();
            var gz_warranty_doi = $("#gz_warranty_doi").val();
			var gz_delivr = $("#gz_delivr").val();
			var gz_wight = $("#gz_wight").val();
            var gz_descrp = $("#gz_descrp").val();

            if (gz_prd_model == '')
            {
                $('#errors').html('Enter Product Model : ');
                $("#gz_prd_model").focus();

                return false;
            }

			  if (gz_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#gz_sapcode").focus();

                return false;
            }
            if (gz_prc == '')
            {
                $('#errors').html('Enter Price   ');
                $("#gz_prc").focus();

                return false;
            }
           
          if (gz_valveopen == '')
            {
                $('#errors').html('Enter Valve opening intervel  ');
                $("#gz_valveopen").focus();

                return false;
            }
            if (gz_valvedischrg == '')
            {
                $('#errors').html('Enter Vale Discharge   ');
                $("#gz_valvedischrg").focus();

                return false;
            }
               if (gz_pwrcon == '')
            {
                $('#errors').html('Enter Power consumption ');
                $("#gz_pwrcon").focus();

                return false;
            }
                if (gz_max_temp == '')
            {
                $('#errors').html('EnterMax operating Temperature ');
                $("#gz_max_temp").focus();

                return false;
            }

            if (gz_max_oper == '')
            {
                $('#errors').html('Enter Max operating pressure  ');
                $("#gz_max_oper").focus();

                return false;
            }
			
			if (gz_inout_port == '')
            {
                $('#errors').html('Enter Max  Temperature  ');
                $("#gz_inout_port").focus();

                return false;
            }
               if (gz_warranty_doc == '')
            {
                $('#errors').html('Enter Warranty Date Of Commission   ');
                $("#gz_warranty_doc").focus();

                return false;
            }
            
           
            if (gz_warranty_doi == '')
            {
                $('#errors').html('Enter  Warranty Date Of Invoice  ');
                $("#gz_warranty_doi").focus();

                return false;
            }
            if (gz_delivr == '')
            {
                $('#errors').html('Enter Delivery Terms   ');
                $("#gz_delivr").focus();

                return false;
            }
			if (gz_wight == '')
            {
                $('#errors').html('Enter Weight  ');
                $("#gz_wight").focus();

                return false;
            }

            
  if (gz_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#gz_descrp").focus();

                return false;
            }
			
			     else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
		gz_prd_model:gz_prd_model,
		gz_sapcode:gz_sapcode,
		gz_prc:gz_prc,
		gz_valveopen:gz_valveopen,
		gz_valvedischrg:gz_valvedischrg,
		gz_pwrcon:gz_pwrcon,
		gz_max_temp:gz_max_temp,
		gz_max_oper:gz_max_oper,
		gz_inout_port:gz_inout_port,
		gz_warranty_doc:gz_warranty_doc,
		gz_warranty_doi:gz_warranty_doi,
		gz_delivr:gz_delivr,
		gz_wight:gz_wight,
		gz_descrp:gz_descrp,
		gem:gem,
	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;


        }
		//GZF
		if (gem == 'GZF') {


            var gzf_prd_model = $("#gzf_prd_model").val();
			  var g_sapcode = $("#g_sapcode").val();
            var gzf_grd = $("#gzf_grd").val();
            var gzf_cost = $("#gzf_cost").val();
          var gzf_particl = $("#gzf_particl").val();
            
            
            var gzf_oilremovl = $("#gzf_oilremovl").val();
            var gzf_maxopr_pre = $("#gzf_maxopr_pre").val();
            var gzf_effec = $("#gzf_effec").val();
            var gzf_cap = $("#gzf_cap").val();

            var gzf_ac_bsp = $("#gzf_ac_bsp").val();
            var gzf_delv = $("#gzf_delv").val();
            var gzf_warenty_doc = $("#gzf_warnty_doc").val();
            var gzf_warenty_doi = $("#gzf_warnty_doi").val();
            var gzf_wrk_press = $("#gzf_wrk_press").val();
            var gzf_wight = $("#gzf_wight").val();
var descrp = $("#descrp").val();
            if (gzf_prd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#gzf_prd_model").focus();

                return false;
            }
  if (g_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#g_sapcode").focus();

                return false;
            }
            if (gzf_grd == '')
            {
                $('#errors').html('Enter Grade');
                $("#gzf_grd").focus();

                return false;
            }
           
          if (gzf_cost == '')
            {
                $('#errors').html('Enter Price');
                $("#gzf_cost").focus();

                return false;
            }
            if (gzf_particl == '')
            {
                $('#errors').html('Enter Work Particle Removal');
                $("#gzf_particl").focus();

                return false;
            }
               if (gzf_oilremovl == '')
            {
                $('#errors').html('Enter Oil Removal');
                $("#gzf_oilremovl").focus();

                return false;
            }
                if (gzf_maxopr_pre == '')
            {
                $('#errors').html('Enter Max Operating Pressure');
                $("#gzf_maxopr_pre").focus();

                return false;
            }

            if (gzf_effec == '')
            {
                $('#errors').html('Enter Efficiency');
                $("#gzf_effec").focus();

                return false;
            }
               if (gzf_cap == '')
            {
                $('#errors').html('Enter Capaity');
                $("#gzf_cap").focus();

                return false;
            }
            
           
            if (gzf_ac_bsp == '')
            {
                $('#errors').html('Enter Air Connected In Bsp');
                $("#gzf_ac_bsp").focus();

                return false;
            }
            if (gzf_delv == '')
            {
                $('#errors').html('Enter Delivery Terms');
                $("#gzf_delv").focus();

                return false;
            }

            if (gzf_warenty_doc == '')
            {
                $('#errors').html('Enter Warrenty Date Of Commission');
                $("#gzf_warnty_doc").focus();

                return false;
            }
           
         

            if (gzf_warenty_doi == '')
            {
                $('#errors').html('Enter Warranty Date Of Invoice');
                $("#gzf_warnty_doi").focus();

                return false;
            }
			
			if (gzf_wrk_press == '')
            {
                $('#errors').html('Enter Working Pressure');
                $("#gzf_wrk_press").focus();

                return false;
            }
			
			if (gzf_wight == '')
            {
                $('#errors').html('Enter Weight');
                $("#gzf_wight").focus();

                return false;
            }
  if (g_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#g_descrp").focus();

                return false;
            }
			
			     else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
		gzf_prd_model:gzf_prd_model,
		g_sapcode:g_sapcode,
		gzf_grd:gzf_grd,
		gzf_cost:gzf_cost,
		gzf_particl:gzf_particl,
		gzf_oilremovl:gzf_oilremovl,
		gzf_maxopr_pre:gzf_maxopr_pre,
		gzf_effec:gzf_effec,
		gzf_cap:gzf_cap,
		gzf_ac_bsp:gzf_ac_bsp,
		gzf_delv:gzf_delv,
		gzf_warnty_doc:gzf_warenty_doc,
		gzf_warnty_doi:gzf_warenty_doi,
		gzf_wight:gzf_wight,
		g_descrp:g_descrp,
		
		gem:gem,
	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);

//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;


        }

		
		//GFV
		
		
		
		if (gem == 'GFV') {


            var gzf_prd_model = $("#prd_model").val();
			  var gzf_sapcode = $("#gzf_sapcode").val();
            var gzf_prc = $("#gzf_prc").val();
            var gzf_valveopen = $("#gzf_valveopen").val();
          var gz_valvedischrg = $("#gz_valvedischrg").val();
            
            
            var gff_pwrcon = $("#gff_pwrcon").val();
            var gzf_max_temp = $("#gzf_max_temp").val();
            var gzf_max_oper = $("#gzf_max_oper").val();
            var gzf_inout_port = $("#gzf_inout_port").val();
 
            var gzf_warranty_doc = $("#gzf_warranty_doc").val();
			var gzf_warranty_doi = $("#gzf_warranty_doi").val();
            var gzf_delivr = $("#gzf_delivr").val();
			var gzf_wght = $("#gzf_wght").val();
			var gzf_descrp = $("#gzf_descrp").val();
            

            if (gzf_prd_model == '')
            {
                $('#errors').html('Enter Product Model  ');
                $("#prd_model").focus();

                return false;
            }
  if (gzf_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#gzf_sapcode").focus();

                return false;
            }
            if (gzf_prc == '')
            {
                $('#errors').html('Enter Price    ');
                $("#gzf_prc").focus();

                return false;
            }
           
          if (gzf_valveopen == '')
            {
                $('#errors').html('Enter Valve opening intervel :  ');
                $("#gzf_valveopen").focus();

                return false;
            }
            if (gz_valvedischrg  == '')
            {
                $('#errors').html('Enter Vale Discharge    ');
                $("#gz_valvedischrg").focus();

                return false;
            }
               if (gff_pwrcon == '')
            {
                $('#errors').html('Enter Power consumption  ');
                $("#gff_pwrcon").focus();

                return false;
            }
                if (gzf_max_temp == '')
            {
                $('#errors').html('Enter Max operating Temperature:');
                $("#gzf_max_temp").focus();

                return false;
            }

            if (gzf_max_oper == '')
            {
                $('#errors').html('Enter Max operating pressure  ');
                $("#gzf_max_oper").focus();

                return false;
            }
			
			if (gzf_inout_port == '')
            {
                $('#errors').html('Enter Input/Output ports  ');
                $("#gzf_inout_port").focus();

                return false;
            }
               if (gzf_warranty_doc == '')
            {
                $('#errors').html('Enter Warranty Date Of Commission    ');
                $("#gzf_warranty_doc").focus();

                return false;
            }
            
           
            if (gzf_warranty_doi == '')
            {
                $('#errors').html('Enter  Warranty Date Of Invoice   ');
                $("#gzf_warranty_doi").focus();

                return false;
            }
            if (gzf_delivr == '')
            {
                $('#errors').html('Enter Delivery Terms    ');
                $("#gzf_delivr").focus();

                return false;
            }
			if (gzf_wght == '')
            {
                $('#errors').html('Enter Weight   ');
                $("#gzf_wght").focus();

                return false;
            }

              if (gzf_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#gzf_descrp").focus();

                return false;
            }

			
			     else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
		data,
		gem:gem,
	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;


        }

//Cooler ECT

       if (gem == 'ECT') {


            var ect_prd_model = $("#ect_prd_model").val();
			  var ect_sapcode = $("#ect_sapcode").val();
            var ect_coilrow = $("#ect_coilrow").val();
            var ect_motorhp = $("#ect_motorhp").val();
            var ect_inout = $("#ect_inout").val();
            
            var ect_delvry = $("#ect_delvry").val();
            var ect_warnty_doc = $("#ect_warnty_doc").val();
          
            var ect_warnty_doi = $("#ect_warnty_doi").val();
            var ect_outlet_temp = $("#ect_outlet_temp").val();
            var ect_wight = $("#ect_wight").val();
           
          var ect_descrp = $("#ect_descrp").val();

            if (ect_prd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#ect_prd_model").focus();

                return false;
            
			}
			  if (ect_sapcode == '')
            {
                $('#errors').html('Enter Sapcode ');
                $("#ect_sapcode").focus();

                return false;
            }

            if (ect_coilrow == '')
            {
                $('#errors').html('Enter Coil 2-8 Rows Price');
                $("#ect_coilrow").focus();

                return false;
            }
           
          if (ect_motorhp == '')
            {
                $('#errors').html('Enter Motor hp /rpm');
                $("#ect_motorhp").focus();

                return false;
            }
            if (ect_inout == '')
            {
                $('#errors').html('Enter In/out sizes');
                $("#ect_inout").focus();

                return false;
            }
               if (ect_delvry == '')
            {
                $('#errors').html('Delivery Terms  ');
                $("#ect_delvry").focus();

                return false;
            }
                if (ect_warnty_doc == '')
            {
                $('#errors').html('Power Warranty Date Of Commission');
                $("#ect_warnty_doc").focus();

                return false;
            }

           
           
            if (ect_warnty_doi == '')
            {
                $('#errors').html('Enter Warranty Date Of Invoice');
                $("#ect_warnty_doi").focus();

                return false;
            }
            if (ect_outlet_temp == '')
            {
                $('#errors').html('Enter Outlet Water Temperature');
                $("#ect_outlet_temp").focus();

                return false;
            }

            if (ect_wight == '')
            {
                $('#errors').html('Enter Weight');
                $("#ect_wight").focus();

                return false;
            }
           
			  if (ect_descrp == '')
            {
                $('#errors').html('Enter Descripition  ');
                $("#ect_descrp").focus();

                return false;
            }
			     else{
       
$.ajax({
type : 'POST',
url : 'update-file.php',
    data: {
	  		ect_prd_model:ect_prd_model,
			ect_sapcode:ect_sapcode,
		ect_coilrow:ect_coilrow,
		ect_motorhp:ect_motorhp,
		ect_inout:ect_inout,
		ect_delvry:ect_delvry,
		ect_wrnty_doc:ect_warnty_doc,
		ect_wrnty_doi:ect_warnty_doi,
		ect_outlet_temp:ect_outlet_temp,
		ect_wight:ect_wight,
		ect_descrp:ect_descrp,
		gem:gem,
	       },
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

if(response==1){
$("#success").html("product added successfully!");
 }
 else{
$("#errors").html(response);
	 
//$("#errors").html("Error Occured Please Contact Your Service Provider");
 }
setTimeout(function () {
                           $('#success').html('');
                       }, 5000);


setTimeout(function () {
                           $('#errors1').html('');
                       }, 5000);


}
});
}
return false;


        }
 









});
});