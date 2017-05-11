	<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="BanyanInfoTech" >
    <title>Add Products</title>
    <link rel="apple-touch-icon" sizes="60x60" href="robust-assets/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="robust-assets/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="robust-assets/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="robust-assets/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="robust-assets/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="robust-assets/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" href="robust-assets/css/vendors.min.css"/>
    <!-- BEGIN VENDOR CSS-->
    <!-- BEGIN Font icons-->
    <link rel="stylesheet" type="text/css" href="robust-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="robust-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <!-- END Font icons-->
    <!-- BEGIN Plugins CSS-->
    <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/sliders/slick/slick.css">
    <!-- END Plugins CSS-->
    
    <!-- BEGIN Vendor CSS-->
    <!-- END Vendor CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" href="robust-assets/css/app.min.css"/>
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">
    <!-- START PRELOADER-->

    <div id="preloader-wrapper">
      <div id="loader">
        <div class="line-scale-pulse-out-rapid loader-white">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
      <div class="loader-section section-top bg-cyan"></div>
      <div class="loader-section section-bottom bg-cyan"></div>
    </div>

    <!-- END PRELOADER-->

    <?php include 'header.php'?>
    <div class="robust-content content container-fluid">
      <div class="content-wrapper">
      <div class="content-body"><!-- Basic form layout section start -->
<section id="horizontal-form-layouts">

	<div class="row">
	    <div class="col-md-12">
	        <div class="card">
	           
	            <div class="card-body collapse in">
	                <div class="card-block">
						  <form class="form form-horizontal" id="theform" action="#" method="post">
	                    	<div class="form-body">
	                    		<h4 class="form-section"><i class="icon-head"></i> Enquiry Info</h4>
								
								<div class="form-group row">
		                        	<label class="col-md-3 label-control" for="projectinput7">Product category :</label>
		                        	<div class="col-md-9">
			                            <select id="budget" class="form-control" onChange="getplace(this.value)">
										
			                                <option value="0" selected>Select Product Group</option>
											<?php  include 'dbconnect.php';
											$q=mysqli_query($conn,"select* from tbl_product_group");
											while($row=mysqli_fetch_array($q)){
											?>
			                                <option value="<?php echo $row['product_id']; ?>" ><?php echo $row['product_group_name']; ?></option>
			                                <?php } ?>
			                             
			                            </select>
		                            </div>
		                        </div>
								<div class="form-group row">
		                        	<label class="col-md-3 label-control" for="projectinput7">Product Series :</label>
		                        	<div class="col-md-9">
			                            <select class="form-control" id="hide">
							 <option value="0" selected>Select Product Group First</option>			
			                            </select>
                                                    <span id="show"></span>
		                            </div>
		                        </div>
								
			                    
								
	              <div id="2KD" style="display:none" >
								<input type="hidden" name="2kd_action">
								
								<!-- span  2kd -->
								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="2kdprd_model" class="form-control" placeholder="Enter Product Model" name="2kdprd_model">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Air Cooled R134a Price :</label>
									<div class="col-md-9">
	                            		<input type="text" id="2kdac_r134" class="form-control" placeholder="Enter Air Cooled R134a" name="2kdac_r134">
	                            	</div>
		                        </div>
		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Air Cooled R407c Price:</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="2kdac_r404c" class="form-control" placeholder="Enter Air Cooled R407c" name="2kdac_r404c">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Water Cooled R407c Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="2kdac_r407cs" class="form-control" placeholder="Enter Water Cooled R407c" name="2kdac_r407cs">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Capacity :</label>
									<div class="col-md-9">
		                            	<input type="text" id="2kdcap" class="form-control" placeholder="Enter Capacity" name="2kdcap">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Working Pressure :</label>
									<div class="col-md-9">
		                            	<input type="text" id="2kdwrk_pressure" class="form-control" placeholder="Enter Working Pressure" name="2kdwrk_pressure">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Air Connection In/Out :</label>
									<div class="col-md-9">
		                            	<input type="text" id="2kdac_io" class="form-control" placeholder="Enter Air Connection In/Out" name="2kdac_io">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Rate Power KW :</label>
									<div class="col-md-9">
		                            	<input type="text" id="2kdrate_pwr_kw" class="form-control" placeholder="Enter Rate Power KW  :" name="2kdrate_pwr_kw">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Times :</label>
									<div class="col-md-9">
		                            	<input type="text" id="2kddelivery_terms" class="form-control" placeholder="Enter Delivery Time" name="2kddelivery_terms">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Electrical Connection 220v/1s/50Hz :</label>
									<div class="col-md-9">
		                            	<input type="text" id="2kdec_220v" class="form-control" placeholder="Enter Electrical Connection 220v/1s/50Hz" name="2kdec_220v">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Electrical Connection 415v/3s/50Hz :</label>
									<div class="col-md-9">
		                            	<input type="text" id="2kdec_415v" class="form-control" placeholder="Enter Electrical Connection 415v/3s/50Hz" name="2kdec_415v">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" id="2kdwarranty_doc" class="form-control" placeholder="Enter Warranty Doc" name="2kdwarranty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="2kdwarranty_doi" class="form-control" placeholder="Enter Warranty Doi" name="2kdwarranty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="2kdweight" class="form-control" placeholder="Enter Product Weight" name="2kdweight">
		                            </div>
		                        </div>
								<!--<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Discount :</label>
									<div class="col-md-9">
		                            	<input type="text" id="projectinput5" class="form-control" placeholder="Enter Product Discount" name="discount">
		                            </div>
		                        </div>-->
								</div>
								
								<!-- span  2kw -->
								
								<div id="2KW" style="display:none">
								<input type="hidden" name="action" value="2kw" >
								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="2kw_prd_model" class="form-control" placeholder="Enter Product Model" name="2kw_prd_model">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Air Cooled R134 Pirce :</label>
									<div class="col-md-9">
	                            		<input type="text" id="2kw_ac_r134" class="form-control" placeholder="Enter Air Cooled R134 Price" name="2kw_ac_r134">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Capacity :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="2kw_cap" class="form-control" placeholder="Enter Capacity" name="2kw_cap">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Working Pressure :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="2kw_wrk_pressure" class="form-control" placeholder="Enter Working Pressure :" name="2kw_wrk_pressure">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Air Connection In/Out :</label>
									<div class="col-md-9">
		                            	<input type="text" id="2kw_ac_io" class="form-control" placeholder="Enter Air Connection In/Out" name="2kw_ac_io">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Power Consumption :</label>
									<div class="col-md-9">
		                            	<input type="text" id="2kw_pwr_cons" class="form-control" placeholder="Enter Power Consumption" name="2kw_pwr_cons">
		                            </div>
		                        </div>

								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Terms :</label>
									<div class="col-md-9">
		                            	<input type="text" id="2kw_delivery_times" class="form-control" placeholder="Enter Delivery Terms :" name="2kw_delivery_times">
		                            </div>
		                        </div>
							<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Electrical Connection 230v/1s/50Hz :</label>
									<div class="col-md-9">
		                            	<input type="text" id="2kw_ec_230v" class="form-control" placeholder="Enter Electrical Connection 230v/1s/50Hz" name="2kw_ec_230v">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Electrical Connection 415v/3s/50Hz :</label>
									<div class="col-md-9">
		                            	<input type="text" id="2kw_ec_415v" class="form-control" placeholder="Enter Electrical Connection 415v/3s/50Hz" name="2kw_ec_415v">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" id="2kw_warnty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="2kw_warnty_doc">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warrenty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="2kw_warnty_doi" class="form-control" placeholder="Enter Warrenty Date Of Invoice" name="2kw_warnty_doi">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="2kw_weght" class="form-control" placeholder="Enter Product Weight" name="2kw_weght">
		                            </div>
		                        </div>
								<!--<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Discount :</label>
									<div class="col-md-9">
		                            	<input type="text" id="projectinput5" class="form-control" placeholder="Enter Product discount" name="2kw_dscunt">
		                            </div>
		                        </div>-->
								
								</div>
								<!--span acc-->
								
								<div id="ACC" style="display:none" >
								
								<input type="hidden" name="action" value="acc" >
								
									<!--span acc-->
								
							<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="acc_Prd_model" class="form-control" placeholder="Enter Product Model" name="acc_Prd_model">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Without vartex separator Price :</label>
									<div class="col-md-9">
	                            		<input type="text" id="acc_without_var_price" class="form-control" placeholder="Enter Without vartex separator Price " name="acc_without_var_price">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Capacity :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="acc_cap" class="form-control" placeholder="Enter Capacity" name="acc_cap">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Working Pressure :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="acc_wrk_presure" class="form-control" placeholder="Enter Working Pressure" name="acc_wrk_presure">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Air Connection In/Out BSP :</label>
									<div class="col-md-9">
		                            	<input type="text" id="acc_io_bsp" class="form-control" placeholder="Enter Air Connection In/Out BSP" name="acc_io_bsp">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Rate Power Req KW :</label>
									<div class="col-md-9">
		                            	<input type="text" id="acc_rate_pwr" class="form-control" placeholder="Enter Rate Power Req KW" name="acc_rate_pwr">
		                            </div>
		                        </div>

								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Electrical Connection R220 1ph 50HZ :</label>
									<div class="col-md-9">
		                            	<input type="text" id="acc_ec_r220v" class="form-control" placeholder="Enter Electrical Connection R220v 1ph 50HZ" name="acc_ec_r220v">
		                            </div>
		                        </div>
							<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Elecrical Connection 415v 3ph 50HZ :</label>
									<div class="col-md-9">
		                            	<input type="text" id="acc_ec_r415v" class="form-control" placeholder="Enter Elecrical Connection R413v 3ph 50HZ" name="acc_ec_r415v">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" id="acc_waranty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="acc_waranty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="acc_Warranty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="acc_Warranty_doi">
		                            </div>
		                        </div><div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Terms :</label>
									<div class="col-md-9">
		                            	<input type="text" id="acc_delivery_term" class="form-control" placeholder="Enter Delivery Times" name="acc_delivery_term">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="acc_weght" class="form-control" placeholder="Enter Product Weight" name="acc_weght">
		                            </div>
		                        </div>
								<!--<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Discount :</label>
									<div class="col-md-9">
		                            	<input type="text" id="acc_dscunt" class="form-control" placeholder="Enter Product Discount" name="acc_dscunt">
		                            </div>
		                        </div>-->
								
								</div>
								
								
								<!-- span  At -->
								
								<div id="AT"  style="display:none" >
								<input type="hidden" name="action" value="at" >
								
							<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="at_Prd_model" class="form-control" placeholder="Product model" name="at_Prd_model">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Capacity :</label>
									<div class="col-md-9">
	                            		<input type="text" id="at_cap" class="form-control" placeholder="Enter Capacity" name="at_cap">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3"><strong>Model variance price </strong>7.5-10.5 Bar :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="at_model_var" class="form-control" placeholder="Enter Model variance price 7.5-10.5 Bar" name="at_model_var">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3"><strong>Model variance price </strong>Acessories :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="at_model_var_accesrs" class="form-control" placeholder="Enter Model variance price Acessories " name="at_model_var_accesrs">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Shell/dish thikness:</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="at_shell" class="form-control" placeholder="Enter Shell/dish thikness " name="at_shell">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5"> in/out Connection :</label>
									<div class="col-md-9">
		                            	<input type="text" id="at_io_out" class="form-control" placeholder="Enter in/out Connection" name="at_io_out">
		                            </div>
		                        </div>
								
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Terms :</label>
									<div class="col-md-9">
		                            	<input type="text" id="at_delivry" class="form-control" placeholder="Enter Delivery" name="at_delivry">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Hand Hole/Man Hole :</label>
									<div class="col-md-9">
		                            	<input type="text" id="at_hnd_hol" class="form-control" placeholder="Enter Hand Hole/Man Hole" name="at_hnd_hol">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" id="at_warranty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="at_warranty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="at_warranty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="at_warranty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Moc/Coc :</label>
									<div class="col-md-9">
		                            	<input type="text" id="at_moc_coc" class="form-control" placeholder="Enter Moc/Coc " name="at_moc_coc">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="at_wght" class="form-control" placeholder="Enter Weight" name="at_wght">
		                            </div>
		                        </div>
									<!--<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Discount :</label>
									<div class="col-md-9">
		                            	<input type="text" id="projectinput5" class="form-control" placeholder=" Discount" name="company">
		                            </div>
		                        </div>-->
								
								</div>
								
								<!-- span  cht_mini -->
								
								<div id="CHT_MINI" style="display:none">
								<input type="hidden" name="action" value="cht_mini" >
			                    

								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="cht_prd_model" class="form-control" placeholder="Product Model" name="cht_prd_model">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">1 to 3 Bar AC R22 Price :</label>
									<div class="col-md-9">
	                            		<input type="text" id="cht_1_3acr22" class="form-control" placeholder="1 to 3 Bar AC R22 Price " name="cht_1_3acr22">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">1 to 3 Bar AC R22/PHE Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="cht_1_3acphe" class="form-control" placeholder="1 to 3 Bar AC R22/PHE Price" name="cht_1_3acphe">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Capacity :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="cht_cap" class="form-control" placeholder="Capacity" name="cht_cap">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Heat Load Kcal/h :</label>
									<div class="col-md-9">
		                            	<input type="text" id="cht_heat" class="form-control" placeholder="Contact Person Name" name="cht_heat">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Heat Load Kw :</label>
									<div class="col-md-9">
		                            	<input type="text" id="cht_heat_kw" class="form-control" placeholder="Heat Load Kw" name="cht_heat_kw">
		                            </div>
		                        </div>

								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Water Pump Flow rate lpm :</label>
									<div class="col-md-9">
		                            	<input type="text" id="aht_water_flw" class="form-control" placeholder="Water Pump Flow rate lpm" name="aht_water_flw">
		                            </div>
		                        </div>
							<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Water Pump Absorbed Power Kw :</label>
									<div class="col-md-9">
		                            	<input type="text" id="cht_water_pump" class="form-control" placeholder="Water Pump Absorbed Power Kw" name="cht_water_pump">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Cooling fan Supply :</label>
									<div class="col-md-9">
		                            	<input type="text" id="cht_coolingfan" class="form-control" placeholder="Cooling fan Supply" name="cht_coolingfan">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Input/Output water Bsp :</label>
									<div class="col-md-9">
		                            	<input type="text" id="cht_in_out" class="form-control" placeholder="Input/Output water Bsp" name="cht_in_out">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery :</label>
									<div class="col-md-9">
		                            	<input type="text" id="cht_delivry" class="form-control" placeholder="Delivery" name="cht_delivry">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission : </label>
									<div class="col-md-9">
		                            	<input type="text" id="cht_warrnty_doc" class="form-control" placeholder="Warranty Date Of Commission" name="cht_warrnty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="cht_warrnty_doi" class="form-control" placeholder="Warranty Date Of invoice" name="cht_warrnty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="cht_wght" class="form-control" placeholder="Weight" name="cht_wght">
		                            </div>
		                        </div>
								<!--<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5"> Discount :</label>
									<div class="col-md-9">
		                            	<input type="text" id="projectinput5" class="form-control" placeholder="Enter Product Discount" name="cht_dscnt">
		                            </div>
		                        </div>-->
								
								</div><!-- cht_nxgen_hh -->


								
								<!-- span  cht_nexgen_hh -->
								
								<div id="CHT_NEXTGEN_HH" style="display:none">
								<input type="hidden" name="action" value="cht_nexgen_hh">
								
								  <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="nxtgen_hh_prd_model" class="form-control" placeholder="Enter Product Model" name="nxtgen_hh_prd_model">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">High temperature,water tempe design-15'c Air coolded Price:</label>
									<div class="col-md-9">
	                            		<input type="text" id="nxtgen_hh_hig_tempac" class="form-control" placeholder="Enter High temperature,water tempe design-15'c Air coolded Price" 
	                            		name="nxtgen_hh_hig_tempac">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">High temperature,water tempe design-15'c water coolded Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="nxtgen_hh_high_tempwater" class="form-control" placeholder="Enter High temperature,water tempe design-15'c water coolded Price" name="nxtgen_hh_high_tempwater">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Capacity :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="nxtgen_hh_cap" class="form-control" placeholder="Enter Capacity " name="nxtgen_hh_cap">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Heat Load kcal :</label>
									<div class="col-md-9">
		                            	<input type="text" id="nxtgen_hh_heatkcal" class="form-control" placeholder="Enter Heat Load kcal" name="nxtgen_hh_heatkcal">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Heat Load kw :</label>
									<div class="col-md-9">
		                            	<input type="text" id="nxtgen_hh_heatkw" class="form-control" placeholder="Enter Heat Load kw" name="nxtgen_hh_heatkw">
		                            </div>
		                        </div>

								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Water pump Flow Rate lpm :</label>
									<div class="col-md-9">
		                            	<input type="text" id="water_pump_1pm" class="form-control" placeholder="Enter Water pump Flow Rate lpm" name="water_pump_1pm">
		                            </div>
		                        </div>
							<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Water Pump Absorbed Power Kw :</label>
									<div class="col-md-9">
		                            	<input type="text" id="nxt_genhh_waterpump_power" class="form-control" placeholder="Enter Water Pump Absorbed Power Kw" name="nxt_genhh_waterpump_power">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Cooling Fan Supply:</label>
									<div class="col-md-9">
		                            	<input type="text" id="nxt_gen_hh_cooling" class="form-control" placeholder="Enter Cooling fan supply" name="nxt_gen_hh_cooling">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Input output water :</label>
									<div class="col-md-9">
		                            	<input type="text" id="nxt_gen_hh_io" class="form-control" placeholder="Enter Input output water" name="nxt_gen_hh_io">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">DElivery Terms :</label>
									<div class="col-md-9">
		                            	<input type="text" id="nxt_gen_hh_delivery_terms" class="form-control" placeholder="Enter DElivery Terms" name="nxt_gen_hh_delivery_terms">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" id="nxt_gen_hh_warranty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission " name="nxt_gen_hh_warranty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="nxt_gen_hh_warranty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="nxt_gen_hh_warranty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="nxtgen_hh_wight" class="form-control" placeholder="Enter Weight" name="nxtgen_hh_wight">
		                            </div>
		                        </div>
								<!--<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5"> Discount :</label>
									<div class="col-md-9">
		                            	<input type="text" id="projectinput5" class="form-control" placeholder="Enter Product Discount" name="discount">
		                            </div>
		                        </div>-->
								
								</div>
								
								<!-- span  nexgen_lh -->
								
								<div id="CHT_NEX_GENLH"  style="display:none">
								<input type="hidden" name="action" value="cht_nexgen_lh" >
								
									<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="cht_nexlh_prd_model" class="form-control" placeholder="Product Model" name="cht_nexlh_prd_model">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">low temperature,water tempe design-10'c Air coolded Price :</label>
									<div class="col-md-9">
	                            		<input type="text" id="cht_nexlh_lowtemp_ac" class="form-control" placeholder="low temperature,water tempe design-10'c Air coolded" name="cht_nexlh_lowtemp_ac">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">low temperature,water tempe design-10'c Water coolded Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="cht_nexlh_lowtemp_water" class="form-control" placeholder="low temperature,water tempe design-10'c Water coolded :" name="cht_nexlh_lowtemp_water">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Capacity :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="cht_nexlh_cap" class="form-control" placeholder="Capacity" name="cht_nexlh_cap">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Heat Load Kcal/h :</label>
									<div class="col-md-9">
		                            	<input type="text" id="cht_nexlh_heatkcal" class="form-control" placeholder="Heat Load Kcal/h " name="cht_nexlh_heatkcal">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Heat Load Kw : </label>
									<div class="col-md-9">
		                            	<input type="text" id="cht_nexlh_heatkw" class="form-control" placeholder="Heat Load Kw" name="cht_nexlh_heatkw">
		                            </div>
		                        </div>
							<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Water Pump Floe rate lpm :</label>
									<div class="col-md-9">
		                            	<input type="text" id="cht_nexlh_water_flow" class="form-control" placeholder="Water Pump Floe rate lpm" name="cht_nexlh_water_flow">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Water Pump absorbed rate Kw :</label>
									<div class="col-md-9">
		                            	<input type="text" id="cht_nexlh_water_abrob" class="form-control" placeholder="Water Pump absorbed rate Kw" name="cht_nexlh_water_abrob">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Cooling Fan Supply :</label>
									<div class="col-md-9">
		                            	<input type="text" id="cht_nexlh_coolfan" class="form-control" placeholder="Cooling Fan Supply" name="cht_nexlh_coolfan">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Input output water  :</label>
									<div class="col-md-9">
		                            	<input type="text" id="cht_nexlh_inout" class="form-control" placeholder="Input output water " name="cht_nexlh_inout">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Terms</label>
									<div class="col-md-9">
		                            	<input type="text" id="cht_nexlh_delivr" class="form-control" placeholder="Contact Person  Mobile No" name="cht_nexlh_delivr">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" id="cht_nexlh_warnt_doc" class="form-control" placeholder="Enter Warranty Date Of Commission " name="cht_nexlh_warnt_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="cht_nexlh_warnty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="cht_nexlh_warnty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="cht_nexlh_wight" class="form-control" placeholder="Enter Weight" name="cht_nexlh_wight">
		                            </div>
		                        </div>
								<!--<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5"> Discount :</label>
									<div class="col-md-9">
		                            	<input type="text" id="projectinput5" class="form-control" placeholder="Enter Product Discount" name="company">
		                            </div>
		                        </div>-->
								
								</div>
								
								
								<!-- span  dct -->
								
								<div id="DCT" style="display:none" >
								<input type="hidden" name="action" value="dct" >
								
								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="dct_prd_modl" class="form-control" placeholder="Product Model" name="dct_prd_modl">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Price :</label>
									<div class="col-md-9">
	                            		<input type="text" id="dct_prc" class="form-control" placeholder="Price" name="dct_prc">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Motor Power Hp :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="dct_motr_pwr" class="form-control" placeholder="Motor Power Hp" name="dct_motr_pwr">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Fan Quality :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="dct_fan_qul" class="form-control" placeholder="Fan Quality" name="dct_fan_qul">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Header Pipe & Flag size :</label>
									<div class="col-md-9">
		                            	<input type="text" id="dct_header_flg" class="form-control" placeholder="Header Pipe & Flag size" name="dct_header_flg">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Contact Person Fan Diametter :</label>
									<div class="col-md-9">
		                            	<input type="text" id="dct_contact_fan" class="form-control" placeholder="Contact Person Fan Diametter" name="dct_contact_fan">
		                            </div>
		                        </div>

								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Term :</label>
									<div class="col-md-9">
		                            	<input type="text" id="dct_delivry" class="form-control" placeholder="Delivery Term" name="dct_delivry">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" id="dct_warnty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission " name="dct_warnty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="dct_warnty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="dct_warnty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="dct_wight" class="form-control" placeholder="Enter Weight" name="dct_wight">
		                            </div>
		                        </div>
								<!--<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5"> Discount :</label>
									<div class="col-md-9">
		                            	<input type="text" id="dct_discunt" class="form-control" placeholder="Enter Product Discount" name="dct_discunt">
		                            </div>
		                        </div>-->
								
								</div>
								
								
								
								<!-- span  ect -->
								
								<div id="ECT" style="display:none">
								<input type="hidden" name="action" value="ect" >
								
								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="ect_prd_model" class="form-control" placeholder="Product Model" name="ect_prd_model">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Coil 2-8 Rows Price :</label>
									<div class="col-md-9">
	                            		<input type="text" id="ect_coilrow" class="form-control" placeholder="Coil 2-8 Rows" name="ect_coilrow">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Motor hp /rpm :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="ect_motorhp" class="form-control" placeholder="Motor hp /rpm " name="ect_motorhp">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">In/out Bsp :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="ect_inout" class="form-control" placeholder="In/out Bsp" name="ect_inout">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Terms :</label>
									<div class="col-md-9">
		                            	<input type="text" id="ect_delvry" class="form-control" placeholder="Delivery Terms" name="ect_delvry">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" id="ect_warnty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission " name="ect_warnty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="ect_warnty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="ect_warnty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Outlet Water Temperature :</label>
									<div class="col-md-9">
		                            	<input type="text" id="ect_warnty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="ect_outlet_temp">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="ect_wight" class="form-control" placeholder="Enter Weight" name="ect_wight">
		                            </div>
		                        </div>
								    <!--<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Product Cost :</label>
									<div class="col-md-9">
		                            	<input type="text" id="ect_prd_cost" class="form-control" placeholder="Enter Product Cost" name="ect_prd_cost">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5"> Discount :</label>
									<div class="col-md-9">
		                            	<input type="text" id="ect__dscunt" class="form-control" placeholder="Enter Product Discount" name="ect__dscunt">
		                            </div>
		                        </div>-->
								</div>
								
								
								<!-- span  gas -->
								
								<div id="GAS" style="display:none">
								<input type="hidden" name="action" value="gas" >
									
									<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gas_prd_model" class="form-control" placeholder="Product Model" name="gas_prd_model">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Model Variance :</label>
									<div class="col-md-9">
	                            		<input type="text" id="gas_modl_vari" class="form-control" placeholder="Model Variance" name="gas_modl_vari">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gas_prices" class="form-control" placeholder="Price" name="gas_prices">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Total Connect Power Hp :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gas_conct_pwr" class="form-control" placeholder="Total Connect Power Hp" name="gas_conct_pwr">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Water in/out :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gas_water_in" class="form-control" placeholder="Water in/out" name="gas_water_in">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Fan diameter :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gas_fan_diae" class="form-control" placeholder="Fan diameter" name="gas_fan_diae">
		                            </div>
		                        </div>

								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Motor Quality :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gas_motr_qul" class="form-control" placeholder="Motor Quality" name="gas_motr_qul">
		                            </div>
		                        </div>
							<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Header Pipe & flag size :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gas_head_pip" class="form-control" placeholder="Header Pipe & flag size " name="gas_head_pip">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Terms :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gas_delvr" class="form-control" placeholder="Delivery Terms" name="gas_delvr">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Configuration :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gas_Configu" class="form-control" placeholder="Delivery Terms" name="gas_Configu">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gas_wrnt_doc" class="form-control" placeholder="Enter Warranty Date Of Commission " name="gas_wrnt_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gas_wrnt_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="gas_wrnt_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Outlet water Temp :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gas_outlet_water" class="form-control" placeholder="Enter Outlet water Temp" name="gas_outlet_water">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gas_wight" class="form-control" placeholder="Enter Weight" name="gas_wight">
		                            </div>
		                        </div>
								<!--<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5"> Discount :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gas_dst" class="form-control" placeholder="Enter Product Discount" name="gas_dst">
		                            </div>
		                        </div>-->
								
								</div>
								
								<!-- span  gct_eco -->
								
								<div id="GCT_ECHO" style="display:none">
								<input type="hidden" name="action" value="gct_eco" >
								
								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gcteco_prd_model" class="form-control" placeholder="Product Model" name="gcteco_prd_model">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Low price :</label>
									<div class="col-md-9">
	                            		<input type="text" id="gcteco_lowcost" class="form-control" placeholder="Low price" name="gcteco_lowcost">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">High price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gcteco_highcost" class="form-control" placeholder="High price" name="gcteco_highcost">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Recommended Erection charge Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gcteco_ec_price" class="form-control" placeholder="Recommended Erection charge Price " name="gcteco_ec_price">
		                            </div>
		                        </div>
							<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Capacity :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gcteco_cap" class="form-control" placeholder="Capacity" name="gcteco_cap">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Motor rpm :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gcteco_motor" class="form-control" placeholder="Motor rpm " name="gcteco_motor">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Power consumed :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gcteco_powrcons" class="form-control" placeholder="Power consumed" name="gcteco_powrcons">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Water Flow rate :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gcteco_water" class="form-control" placeholder="Water Flow rate" name="gcteco_water">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">In/out size :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gcteco_inout" class="form-control" placeholder="In/out size" name="gcteco_inout">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Basin Holding Capacity :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gcteco_basincap" class="form-control" placeholder="Basin Holding Capacity" name="gcteco_basincap">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Terms :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gcteco_delvry" class="form-control" placeholder="Delivery Terms" name="gcteco_delvry">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gcteco_wrnty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission " name="gcteco_wrnty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gcteco_wrnty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="gcteco_wrnty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gcteco_wight" class="form-control" placeholder="Enter Weight" name="gcteco_wight">
		                            </div>
		                        </div>
								<!--<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5"> Discount :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gcteco_discunt" class="form-control" placeholder="Enter Product Discount" name="gcteco_discunt">
		                            </div>
		                        </div>-->
								
								</div>
								
								<!-- span  gzf -->
								
								<div id="GZF"  style="display:none">
								<input type="hidden" name="action" value="gzf" >
									
									<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gzf_prd_model" class="form-control" placeholder="Product Model" name="gzf_prd_model">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Grade :</label>
									<div class="col-md-9">
	                            		<input type="text" id="gzf_grd" class="form-control" placeholder="Grade" name="gzf_grd">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gzf_cost" class="form-control" placeholder="Price" name="gzf_cost">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Particle Removal :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gzf_particl" class="form-control" placeholder="Particle Removal" name="gzf_particl">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Oil Removal :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gzf_oilremovl" class="form-control" placeholder="Oil Removal" name="gzf_oilremovl">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Max operating Pressure :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gzf_maxopr_pre" class="form-control" placeholder="Max operating Pressure" name="gzf_maxopr_pre">
		                            </div>
		                        </div>

								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Effeciency :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gzf_effec" class="form-control" placeholder="Effeciency" name="gzf_effec">
		                            </div>
		                        </div>
							<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Capacity :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gzf_cap" class="form-control" placeholder="Capacity" name="gzf_cap">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Air Connected in Bsp :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gzf_ac_bsp" class="form-control" placeholder="Air Connected in Bsp" name="gzf_ac_bsp">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Terms :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gzf_delv" class="form-control" placeholder="Delivery Terms" name="gzf_delv">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gzf_warnty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission " name="gzf_warnty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gzf_warnty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="gzf_warnty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gzf_wight" class="form-control" placeholder="Enter Weight" name="gzf_wight">
		                            </div>
		                        </div>
								<!--<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5"> Discount :</label>
									<div class="col-md-9">
		                            	<input type="text" id="projectinput5" class="form-control" placeholder="Enter Product Discount" name="company">
		                            </div>
		                        </div>-->
								
								</div>
								
								
								<!-- span  gzf_cartridges -->
								
                                                                <div id="GZF_CATRIDGES" style="display:none">
								<input type="hidden" name="action" value="gzf_cartridges" >
								
								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gzf_cart_prd_model" class="form-control" placeholder="Product model" name="gzf_cart_prd_model">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Genral Purpose Filter Catridge Price :</label>
									<div class="col-md-9">
	                            		<input type="text" id="gzf_cart_genralfilter" class="form-control" placeholder="Genral Purpose Filter Catridge" name="gzf_cart_genralfilter">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Micro oil Removing filter Catridge Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gzf_cart_microil" class="form-control" placeholder="Micro oil Removing filter Catridge" name="gzf_cart_microil">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Sub Micro oil Removing filter Catridge Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gzf_cart_sub_microil" class="form-control" placeholder="Micro oil Removing filter Catridge" name="gzf_cart_sub_microil">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Activated corbon filter Catridge Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gzf_cart_activatedcarb" class="form-control" placeholder="Activated corbon filter Catridge" name="gzf_cart_activatedcarb">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Capacity :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gzf_cart_cap" class="form-control" placeholder="Capacity" name="gzf_cart_cap">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Terms :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gzf_cart_delvr" class="form-control" placeholder="Delivery Terms" name="gzf_cart_delvr">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gzf_cart_warnty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission " name="gzf_cart_warnty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gzf_cart_warnty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="gzf_cart_warnty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gzf_cart_wight" class="form-control" placeholder="Enter Weight" name="gzf_cart_wight">
		                            </div>
		                        </div>
								    
								<!--<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5"> Discount :</label>
									<div class="col-md-9">
		                            	<input type="text" id="projectinput5" class="form-control" placeholder="Enter Product Discount" name="company">
		                            </div>
		                        </div>-->
								
								</div>
								
								<!-- span  hld -->
								
								<div id="HLD" style="display:none">
								<input type="hidden" name="action" value="hld" >
								

			                    <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="hld_prd_model" class="form-control" placeholder="Enter Product Model" name="hld_prd_model">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2"><strong>Desiccant Activated Alumina(50&deg;c)</strong><br>IS2825 code of Construction Price :</label>
									<div class="col-md-9">
	                            		<input type="text" id="hld_desiccantalumina_50" class="form-control" placeholder="Enter IS2825 code of Construction Price " name="hld_desiccantalumina_50">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3"><strong>Desiccant Activated Alumina(50&deg;c)</strong><br>ASME sec VIII 1 code of Construction Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="hld_construction_price" class="form-control" placeholder="Enter ASME sec VIII 1 code of Construction Price" name="hld_Construction_price">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4"><strong>Desiccant molecular sieve</strong><br>IS2825 code of Construction Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="hld_is2825" class="form-control" placeholder="Enter IS2825 code of Construction Price" name="hld_is2825">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5"><strong>Desiccant molecular sieve</strong><br>ASME sec VIII 1 code of Construction Price :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hld_molecular_construct" class="form-control" placeholder="Enter ASME sec VIII 1 code of Construction Price " name="hld_molecular_construct">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Air flow :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hld_airfl" class="form-control" placeholder="Enter Air flow" name="hld_airfl">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5"> Inlet/Outlet flg :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hld_inlet" class="form-control" placeholder="Enter Inlet/Outlet flg" name="hld_inlet">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Desiccant Qty/tower :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hld_qty" class="form-control" placeholder="Enter Desiccant Qty/tower" name="hld_qty">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Terms :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hld_delvry" class="form-control" placeholder="Enter Delivery Terms" name="hld_delvry">
		                            </div>
		                        </div>
								    
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hld_warenty_doc" class="form-control" placeholder="Enter Warranty Doc" name="hld_warenty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hld_warnty_doi" class="form-control" placeholder="Enter Warranty Doi" name="hld_warnty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hld_wight" class="form-control" placeholder="Enter Product Weight" name="hld_wight">
		                            </div>
		                        </div>
								
								</div>
	
	
						<!-- span  hln -->

								<div id="HLN" style="display:none">
								<input type="hidden" name="action" value="hln" >
								
									<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="hln_prd_model" class="form-control" placeholder="Enter Product Model" name="hln_prd_model">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2"><strong>Desiccant Activated Alumina(50&deg;c)</strong><br>IS2825 code of Construction Price :</label>
									<div class="col-md-9">
	                            		<input type="text" id="hln_is2825" class="form-control" placeholder="Enter IS2825 code of Construction Price" name="hln_is2825">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3"><strong>Desiccant Activated Alumina(65&deg;c)</strong><br>IS2825 code of Construction Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="hln_activated_65" class="form-control" placeholder="Enter IS2825 code of Construction Price" name="hln_activated_65">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Air flow :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hln_airflows" class="form-control" placeholder="Enter Air flow" name="hln_airflows">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5"> Inlet/Outlet flg :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hln_inlet" class="form-control" placeholder="Enter Inlet/Outlet flg" name="hln_inlet">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Desiccant Qty/tower :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hln_desicant_qty" class="form-control" placeholder="Enter Desiccant Qty/tower" name="hln_desicant_qty">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Terms :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hln_delvry" class="form-control" placeholder="Enter Delivery Terms" name="hln_delvry">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hln_wrnty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="hln_wrnty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hln_wrnty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="hln_wrnty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Work Pressure :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hln_wrk_pres" class="form-control" placeholder="Enter Work Pressure" name="hln_wrk_pres">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Rated Condition Inlet Temperature :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hln_rate_conditioninlet" class="form-control" placeholder="Enter Rated Condition Inlet Temperature" name="hln_rate_conditioninlet">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Rated Condition Atmospheric Temperature :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hln_rate_conditiontemp" class="form-control" placeholder="Rated Condition Atmospheric Temperature" name="hln_rate_conditiontemp">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hln_wight" class="form-control" placeholder="Enter Product Weight" name="hln_wight">
		                            </div>
		                        </div>
			                    
								
								</div>
								
								
								<!-- span  Hp filter -->
								<div id="hpfilter" style="display:none">
								<input type="hidden" name="action" value="hpfilter" >
								
			                    <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="hp_prd_modl" class="form-control" placeholder="Enter Product Model" name="hp_prd_modl">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">General Purpose Filters Price :</label>
									<div class="col-md-9">
	                            		<input type="text" id="hp_gnrl_filter" class="form-control" placeholder="Enter General Purpose Filters Price" name="hp_gnrl_filter">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Micro Oil Removing Filter Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="hp_gndrl_oil" class="form-control" placeholder="Enter ASME sec VIII 1 code of Construction Price" name="hp_gndrl_oil">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Sub Micro Oil Removing Filter Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="hp_sub_gndrl_oil" class="form-control" placeholder="Enter Sub Micro Oil Removing Filter Price" name="hp_sub_gndrl_oil">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Activated carbon filters :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hp_active_car" class="form-control" placeholder="Enter Activated carbon filters" name="hp_active_car">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery terms :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hp_dlevir" class="form-control" placeholder="Enter Delivery terms " name="hp_dlevir">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hp_warnty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="hp_warnty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hp_warnty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="hp_warnty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Working pressure :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hp_wrk_prsur" class="form-control" placeholder="Enter Working pressure" name="hp_wrk_prsur">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hp_wght" class="form-control" placeholder="Enter Product Weight" name="hp_wght">
		                            </div>
		                        </div>
								</div>
								
								<!-- span  Hp filter Element -->
								<div id="hpfilter_ele" style="display:none">
								<input type="hidden" name="action" value="hpfilter_ele" >
								
			                    <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="hp_ele_prdt_model" class="form-control" placeholder="Enter Product Model" name="hp_ele_prdt_model">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">General Purpose Filter element Price :</label>
									<div class="col-md-9">
	                            		<input type="text" id="hp_ele_gen_pur" class="form-control" placeholder="Enter IGeneral Purpose Filter element Price" name="hp_ele_gen_pur">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Micro Oil Removing Filter element Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="hp_ele_mic_oil" class="form-control" placeholder="Enter Micro Oil Removing Filter element Price" name="hp_ele_mic_oil">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Sub Micro Oil Removing Filter element Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="hp_ele_sub_mic_oil" class="form-control" placeholder="Enter Sub Micro Oil Removing Filter element Price" name="hp_ele_sub_mic_oil">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Activated carbon filter element :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hp_ele_act_carbon" class="form-control" placeholder="Enter Activated carbon filter element " name="hp_ele_act_carbon">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery terms :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hp_ele_deli" class="form-control" placeholder="Enter Delivery terms " name="hp_ele_deli">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hp_ele_wrnt_doc" class="form-control" placeholder="Enter Warranty Doc" name="hp_ele_wrnt_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hp_ele_wrnt_doi" class="form-control" placeholder="Enter Warranty Doi" name="hp_ele_wrnt_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Working pressure :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hp_ele_wrk_pres" class="form-control" placeholder="Enter Working pressure" name="hp_ele_wrk_pres">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="hp_ele_wgt" class="form-control" placeholder="Enter Product Weight" name="hp_ele_wgt">
		                            </div>
		                        </div>
								</div>
								
								<!-- span  mst -->
								<div id="MST" style="display:none">
								<input type="hidden" name="action" value="mst" >
								
			                    <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="mst_prdt_model" class="form-control" placeholder="Enter Product Model" name="mst_prdt_model">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Baffle type Price :</label>
									<div class="col-md-9">
	                            		<input type="text" id="mst_baff" class="form-control" placeholder="Enter Baffle type Price " name="mst_baff">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Demister Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="mst_dem" class="form-control" placeholder="Enter Demister Price Price" name="mst_dem">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery terms :</label>
									<div class="col-md-9">
		                            	<input type="text" id="mst_deli" class="form-control" placeholder="Enter Delivery termsPrice " name="mst_deli">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" id="mst_wrnt_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="mst_wrnt_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="mst_wrnt_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="mst_wrnt_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Working pressure :</label>
									<div class="col-md-9">
		                            	<input type="text" id="mst_wrk_pres" class="form-control" placeholder="Enter Working pressure" name="mst_wrk_pres">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="mst_wgt" class="form-control" placeholder="Enter Product Weight" name="mst_wgt">
		                            </div>
		                        </div>
								</div>
								
								
								<!-- span  nxg_nexgen -->
								<div id="NXG" style="display:none">
								<input type="hidden" name="action" value="nxg_nexgen" >
								
			                    <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="nxg_prdt_model" class="form-control" placeholder="Enter Product Model" name="nxg_prdt_model">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Air cooled R134a Price :</label>
									<div class="col-md-9">
	                            		<input type="text" id="nxg_ac_r134a" class="form-control" placeholder="Enter Air cooled R134a Price " name="nxg_ac_r134a">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Air cooled R404a Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="nxg_ac_r404a" class="form-control" placeholder="Enter Air cooled R404a Price" name="nxg_ac_r404a">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Air cooled R407c Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="nxg_ac_r407c" class="form-control" placeholder="Enter Air cooled R407c Price" name="nxg_ac_r407c">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Capacity :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="nxg_cap" class="form-control" placeholder="Enter Capacity" name="nxg_cap">
		                            </div>
		                        </div><div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Working Pressure :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="nxg_wrk_pres" class="form-control" placeholder="Enter Working Pressure" name="nxg_wrk_pres">
		                            </div>
		                        </div><div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Air Connect in/out :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="nxg_ac_io" class="form-control" placeholder="Enter Air Connect in/out" name="nxg_ac_io">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Rate Power Kw :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="nxg_rp_kw" class="form-control" placeholder="Enter Rate Power Kw" name="nxg_rp_kw">
		                            </div>
		                        </div><div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Delivery Terms :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="nxg_deli" class="form-control" placeholder="Enter Delivery Terms" name="nxg_deli">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Electrical Connection 220v/1phase/50hz :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="nxg_ec_220v" class="form-control" placeholder="Enter Electrical Connection 220v/1phase/50hz" name="nxg_ec_220v">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Electrical Connection 415v/3phase/50hz :</label>
									<div class="col-md-9">
		                            	<input type="text" id="nxg_ec_415v" class="form-control" placeholder="Enter Electrical Connection 415v/3phase/50hz " name="nxg_ec_415v">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" id="nxg_wrnt_doc" class="form-control" placeholder="Enter Warranty Doc" name="nxg_wrnt_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="nxg_wrnt_doi" class="form-control" placeholder="Enter Warranty Doi" name="nxg_wrnt_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="nxg_wght" class="form-control" placeholder="Enter Product Weight" name="nxg_wght">
		                            </div>
		                        </div>
								</div>
								
								
								<!-- span  rad -->
								<div id="RAD" style="display:none">
								<input type="hidden" name="action" value="rad" >
								
			                    <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="rad_prd_model" class="form-control" placeholder="Enter Product Model" name="rad_prd_model">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Water cooled Refrigerant R407c Price :</label>
									<div class="col-md-9">
	                            		<input type="text" id="rad_wcr_r407" class="form-control" placeholder="Enter Water cooled Refrigerant R407c Price " name="rad_wcr_r407">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Capacity :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="rad_cap" class="form-control" placeholder="Enter Capacity" name="rad_cap">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">In/out :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="rad_io" class="form-control" placeholder="Enter In/out" name="rad_io">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Rate powered Electrical Connection ANSI 415/3/50hz  :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="rad_rpec_415" class="form-control" placeholder="Enter Rate powered Electrical Connection ANSI 415/3/50hz" name="rad_rpec_415">
		                            </div>
		                        </div><div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Delivery Terms :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="rad_deli" class="form-control" placeholder="Enter Delivery Terms" name="rad_deli">
		                            </div>
		                        </div><div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Working Pressure :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="rad_wrk_pres" class="form-control" placeholder="Enter Working Pressure" name="rad_wrk_pres">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" id="rad_wrnt_doc" class="form-control" placeholder="Enter Warranty Doc" name="rad_wrnt_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="rad_wrnt_doi" class="form-control" placeholder="Enter Warranty Doi" name="rad_wrnt_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="rad_wgt" class="form-control" placeholder="Enter Product Weight" name="rad_wgt">
		                            </div>
		                        </div>
								</div>
								
								<!-- span  scb -->
								<div id="SCB" style="display:none">
								<input type="hidden" name="action" value="scb" >
								
			                    <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="scb_prd_model" class="form-control" placeholder="Enter Product Model" name="scb_prd_model">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Low temperature Price :</label>
									<div class="col-md-9">
	                            		<input type="text" id="scb_low" class="form-control" placeholder="Enter Low temperature Price " name="scb_low">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">High temperature Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="scb_high" class="form-control" placeholder="Enter High temperature Price" name="scb_high">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Motor :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="scb_moto" class="form-control" placeholder="Enter Motor" name="scb_moto">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">In/out sizes :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="scb_io" class="form-control" placeholder="Enter In/out sizes" name="scb_io">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Water flow rate :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="scb_wfr" class="form-control" placeholder="Enter Water flow rate" name="scb_wfr">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Delivery Terms :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="scb_deli" class="form-control" placeholder="Enter Delivery Terms" name="scb_deli">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Outlet water temp :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="scb_out_water" class="form-control" placeholder="Enter Outlet water temp" name="scb_out_water">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" id="scb_wrnt_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="scb_wrnt_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="scb_wrnt_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="scb_wrnt_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="scb_wgt" class="form-control" placeholder="Enter Product Weight" name="scb_wgt">
		                            </div>
		                        </div>
								</div>
								
								<!-- span  sct -->
								<div id="SCT" style="display:none">
								<input type="hidden" name="action" value="sct" >
								
			                    <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="sct_prd_model" class="form-control" placeholder="Enter Product Model" name="sct_prd_model">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Low temperature fills Price :</label>
									<div class="col-md-9">
	                            		<input type="text" id="sct_low" class="form-control" placeholder="Low temperature fills Price" name="sct_low">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">High temperature fills Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="sct_high" class="form-control" placeholder="High temperature fills Price" name="sct_high">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">In/out sizes :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="sct_io" class="form-control" placeholder="Enter In/out sizes" name="sct_io">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Water flow rate :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="sct_wfr" class="form-control" placeholder="Enter Water flow rate" name="sct_wfr">
		                            </div>
		                        </div>
								
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Motor :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="sct_moto" class="form-control" placeholder="Enter Motor" name="sct_moto">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Delivery Terms :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="sct_deli" class="form-control" placeholder="Enter Delivery Terms" name="sct_deli">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Outlet water temp :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="sct_out_water" class="form-control" placeholder="Enter Outlet water temp" name="sct_out_water">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" id="sct_wrnt_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="sct_wrnt_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="sct_wrnt_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="sct_wrnt_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="sct_wgt" class="form-control" placeholder="Enter Product Weight" name="sct_wgt">
		                            </div>
		                        </div>
								</div>
								
								
								<!-- span  spd -->
								<div id="SPD" style="display:none">
								<input type="hidden" name="action" value="spd" >
								
			                    <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="spd_prd_model" class="form-control" placeholder="Enter Product Model" name="spd_prd_model">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Molecular sieve(65&deg;c)/Price with Filter :</label>
									<div class="col-md-9">
	                            		<input type="text" id="spd_ms" class="form-control" placeholder="Enter Molecular sieve(65&deg;c)/Price with Filter" name="spd_ms">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Air Flow :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="spd_air" class="form-control" placeholder="Enter Air Flow" name="spd_air">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Inlet/outlet :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="spd_inlet_out" class="form-control" placeholder="Enter Inlet/outlet sizes " name="spd_inlet_out">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Delivery Terms :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="spd_deli" class="form-control" placeholder="Enter Delivery Terms" name="spd_deli">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" id="spd_wrnt_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="spd_wrnt_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="spd_wrnt_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="spd_wrnt_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Inlet Temperature :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="spd_in" class="form-control" placeholder="Enter Inlet Temperature" name="spd_in">
		                            </div>
		                        </div>
								
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Atmospheric dew point :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="spd_atmo" class="form-control" placeholder="Enter Atmospheric dew point" name="spd_atmo">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Accessories :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="spd_acc" class="form-control" placeholder="Enter Accessories" name="spd_acc">
		                            </div>
		                        </div>
		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Work Pressure :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="spd_wrkprs" class="form-control" placeholder="Enter Work Pressure" name="spd_wrkprs">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="spd_wgt" class="form-control" placeholder="Enter Product Weight" name="spd_wgt">
		                            </div>
		                        </div>
								</div>
								
								
								<!-- span  var -->
								<div  id="VAR" style="display:none">
								<input type="hidden" name="action" value="var" >
								 <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="var_prd_model" class="form-control" placeholder="Enter Product Model" name="var_prd_model">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Model Variance :</label>
									<div class="col-md-9">
	                            		<input type="text" id="var_modal_vari" class="form-control" placeholder="Enter Model Variance" name="var_modal_vari">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Working Pressure :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="var_wrkpressur" class="form-control" placeholder="Enter Working Pressure " name="var_wrkpressur">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="var_prc" class="form-control" placeholder="Enter Price" name="var_prc">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Capacity in ltrs :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="var_cap" class="form-control" placeholder="Enter Capacity in ltrs " name="var_cap">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Shell/Dish Thickness :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="var_shell" class="form-control" placeholder="Enter Shell/Dish Thickness" name="var_shell">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">In/Out Connection :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="var_inout" class="form-control" placeholder="Enter In/Out Connection" name="var_inout">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Hand/Man Hole :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="var_hand" class="form-control" placeholder="Enter Hand/Man Hole" name="var_hand">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Delivery Terms :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="var_delivr" class="form-control" placeholder="Enter Delivery Terms" name="var_delivr">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" id="var_warnty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="var_warnty_doc">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="var_warnty_doi" class="form-control" placeholder="Enter Warranty Date Of Commission" name="var_warnty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Moc/Coc :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="var_moc" class="form-control" placeholder="Enter Moc/Coc" name="var_moc">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="var_wight" class="form-control" placeholder="Enter Product Weight" name="var_wight">
		                            </div>
		                        </div>
			                    
								</div>
								
								<!-- span  vxs -->
								<div  id="VXS"  style="display:none">
								<input type="hidden" name="action" value="vxs" >
								
									<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="vxs_prd_model" class="form-control" placeholder="Enter Product Model" name="vxs_prd_model">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Vartex Separator Drain Value Price :</label>
									<div class="col-md-9">
	                            		<input type="text" id="vxs_vartexdrain" class="form-control" placeholder="Enter Vartex Separator Drain Value Price" name="vxs_vartexdrain">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Pipe Size :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="vxs_pipe" class="form-control" placeholder="Enter Pipe Size " name="vxs_pipe">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Line pressure Weight :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="vxs_line_pressur" class="form-control" placeholder="Enter Line pressure Weight" name="vxs_line_pressur">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Capacity in Cfm :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="vxs_cap" class="form-control" placeholder="Enter Capacity in Cfm" name="vxs_cap">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">In/Out :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="vxs_inout" class="form-control" placeholder="Enter In/Out Connection" name="vxs_inout">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Delivery Terms :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="vxs_delivry" class="form-control" placeholder="Enter Delivery Terms" name="vxs_delivry">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" id="vxs_warnty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="vxs_warnty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="vxs_warnty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="vxs_warnty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Working Pressure :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="vxs_wrk_prssur" class="form-control" placeholder="Enter Working Pressure" name="vxs_wrk_prssur">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="vxs_wight" class="form-control" placeholder="Enter Product Weight" name="vxs_wight">
		                            </div>
		                        </div>
								</div>
								
								<!-- span  wah -->
								<div id="WAH" style="display:none">
								<input type="hidden" name="action" value="wah" >
								
								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="wah_prd_model" class="form-control" placeholder="Enter Product Model" name="wah_prd_model">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">With Moisture seprator Price :</label>
									<div class="col-md-9">
	                            		<input type="text" id="wah_moisture" class="form-control" placeholder="Enter With Moisture seprator Price" name="wah_moisture">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Capacity Cfm :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="wah_capacity" class="form-control" placeholder="Enter Capacity Cfm" name="wah_capacity">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Air connection in/out Bsp :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="wah_aircon" class="form-control" placeholder="Enter Air connection in/out Bsp" name="wah_aircon">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Cooling Water in/out :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="wah_coolng" class="form-control" placeholder="Enter Cooling Water in/out" name="wah_coolng">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Water Flow Rate LPM :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="wah_water_rate" class="form-control" placeholder="Enter Water Flow Rate LPM " name="wah_water_rate">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Shell dia :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="wah_shelldia" class="form-control" placeholder="Enter Shell dia" name="wah_shelldia">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Delivery Terms :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="wah_delivrytrm" class="form-control" placeholder="Enter Delivery Terms" name="wah_delivrytrm">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" id="wah_warranty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="wah_warranty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="wah_warranty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="wah_warranty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Working Pressure :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="wah_wrkpressur" class="form-control" placeholder="Enter Working Pressure" name="wah_wrkpressur">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="wah_wight" class="form-control" placeholder="Enter Product Weight" name="wah_wight">
		                            </div>
		                        </div>
			                    
								</div>
								
								<!-- span  gz -->
								<div id="GZ" style="display:none">
								<input type="hidden" name="action" value="gz" >
								
			                    <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gz_prd_model" class="form-control" placeholder="Enter Product Model" name="gz_prd_model">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2"> Price :</label>
									<div class="col-md-9">
	                            		<input type="text" id="gz_prc" class="form-control" placeholder="Enter Price" name="gz_prc">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Valve opening intervel :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gz_valveopen" class="form-control" placeholder="Enter Valve opening intervel" name="gz_valveopen">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Vale Discharge :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gz_valvedischrg" class="form-control" placeholder="Enter Vale Discharge" name="gz_valvedischrg">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Power consumption :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gz_pwrcon" class="form-control" placeholder="Enter Cooling Water in/out" name="gz_pwrcon">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Max operating Temperature:</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gz_max_temp" class="form-control" placeholder="Enter Water Flow Rate LPM " name="gz_max_temp">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Max operating pressure :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gz_max_oper" class="form-control" placeholder="Enter Shell dia" name="gz_max_oper">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Input/Output ports :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gz_inout_port" class="form-control" placeholder="Enter Shell dia" name="gz_inout_port">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gz_warranty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="gz_warranty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gz_warranty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="gz_warranty_doi">
		                            </div>
		                        </div>
								
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Delivery Terms :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gz_delivr" class="form-control" placeholder="Enter Delivery Terms" name="gz_delivr">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gz_wight" class="form-control" placeholder="Enter Product Weight" name="gz_wight">
		                            </div>
		                        </div>
								</div>
								
								<!-- span  gfv -->
								<div id="GFV" style="display:none">
								<input type="hidden" name="action" value="gfv" >
								
			                    <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gzf_prd_model" class="form-control" placeholder="Enter Product Model" name="gzf_prd_model">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2"> Price :</label>
									<div class="col-md-9">
	                            		<input type="text" id="gzf_prc" class="form-control" placeholder="Enter Price" name="gzf_prc">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Valve opening intervel :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gzf_valveopen" class="form-control" placeholder="Enter Valve opening intervel" name="gzf_valveopen">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Vale Discharge :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gzf_valvedischrg" class="form-control" placeholder="Enter Vale Discharge" name="gzf_valvedischrg">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Power consumption :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gz_pwrcon" class="form-control" placeholder="Enter Cooling Water in/out" name="gzf_pwrcon">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Max operating Temperature:</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gzf_max_temp" class="form-control" placeholder="Enter Water Flow Rate LPM " name="gzf_max_temp">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Max operating pressure :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gzf_max_oper" class="form-control" placeholder="Enter Shell dia" name="gzf_max_oper">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Input/Output ports :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gzf_inout_port" class="form-control" placeholder="Enter Shell dia" name="gzf_inout_port">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gzf_warranty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="gzf_warranty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gzf_warranty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="gzf_warranty_doi">
		                            </div>
		                        </div>
								
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Delivery Terms :</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="gzf_delivr" class="form-control" placeholder="Enter Delivery Terms" name="gzf_delivr">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gzf_wight" class="form-control" placeholder="Enter Product Weight" name="gzf_wight">
		                            </div>
		                        </div>
								</div>
								
								
								
								
								
								
								
								
								
								
								
								
								
								
							</div>
  <div class="form-group col-md-12" style="text-align:center">		<span id="errors"  style="color:#ff0000;text-align:center"></span></div>
                                                <div class="form-group col-md-12" style="text-align:center">		<span id="success"  style="color:#139c9b;text-align:center"></span></div>
                                                
	                        <div class="form-actions" style="float:right;">
                                    
	                           <!-- <button type="reset" class="btn btn-warning mr-1">
	                            	<i class="icon-cross2"></i> Cancel
	                            </button>-->
	                            <button type="button" class="btn btn-primary" id="product_submit">
	                                <i class="icon-check2"></i> Save
	                            </button>
	                        </div>
	                    </form>
	                    </div>
	            </div>
	        </div>
	    </div>
	</div>
</section>
<!-- // Basic form layout section end -->
        </div>
      </div>
    </div>


    <footer class="footer footer-light">
      <p class="clearfix text-muted text-sm-center mb-0 px-2"> <span  class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 grey darken-2">banyaninfotech</a>, All rights reserved. </span> <span  class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span></p>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="robust-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="robust-assets/js/app.min.js"></script>
    <script src="robust-assets/js/components/products/addproducts.js"></script>
    <!-- END ROBUST JS-->

 <script>

            function getplace(countryId) {
                var id = countryId;
  $.ajax({
                    type: "POST",
                    url: 'gettype.php',
                    data: {
                        id:id,
                    },
                    success: function (data)
                    {
                    $('#show').show();
                            $('#hide').hide();
                            $('#show').html(data);

                        //location.reload();
                    },
                });
}




            function getmodel(modelno) {
              
              if(modelno=='2KD'){
                   $('#2KD').show();
				    $('#2KW').hide();
                   $('#GFV').hide();
                   $('#GZ').hide();
                   $('#WAH').hide();
                   $('#VXS').hide();
                   $('#VAR').hide();
                   $('#SPD').hide();
                   $('#SCT').hide(); 
				   $('#RAD').hide();
                   $('#SCB').hide();
                   $('#NXG').hide();
                   $('#MST').hide();
                   $('#hpfilter_ele').hide();
                   $('#hpfilter').hide();
                   $('#HLN').hide();
                   $('#HLD').hide();
                   $('#GZF_CATRIDGES').hide();
                   $('#GCT_ECHO').hide();
                   $('#GZF').hide();
                   $('#ECT').hide();
                   $('#GAS').hide();
                   $('#ACC').hide();
                   $('#AT').hide();
                   $('#CHT_MINI').hide();
                   $('#CHT_NEXTGEN_HH').hide();
                   $('#CHT_NEX_GENLH').hide();
                   $('#DCT').hide();
                      
                      
              }
			  
			  //GFV
			    if(modelno=='GFV'){
					
                   $('#2KD').hide();$('#2KW').hide();
                   $('#GFV').show();
                   $('#GZ').hide();
                   $('#WAH').hide();
                   $('#VXS').hide();
                   $('#VAR').hide();
                   $('#SPD').hide();
                   $('#SCT').hide(); 
				   $('#RAD').hide();
                   $('#SCB').hide();
                   $('#NXG').hide();
                   $('#MST').hide();
                   $('#hpfilter_ele').hide();
                   $('#hpfilter').hide();
                   $('#HLN').hide();
                   $('#HLD').hide();
                   $('#GZF_CATRIDGES').hide();
                   $('#GCT_ECHO').hide();
                   $('#GZF').hide();
                   $('#ECT').hide();
                   $('#GAS').hide();
                   $('#ACC').hide();
                   $('#AT').hide();
                   $('#CHT_MINI').hide();
                   $('#CHT_NEXTGEN_HH').hide();
                   $('#CHT_NEX_GENLH').hide();
                   $('#DCT').hide();
                      
                      
              }
			  
			  //gz
			  
			   if(modelno=='GZ'){
                   $('#2KD').hide();$('#2KW').hide();
                   $('#GFV').hide();
                   $('#GZ').show();
                   $('#WAH').hide();
                   $('#VXS').hide();
                   $('#VAR').hide();
                   $('#SPD').hide();
                   $('#SCT').hide(); 
				   $('#RAD').hide();
                   $('#SCB').hide();
                   $('#NXG').hide();
                   $('#MST').hide();
                   $('#hpfilter_ele').hide();
                   $('#hpfilter').hide();
                   $('#HLN').hide();
                   $('#HLD').hide();
                   $('#GZF_CATRIDGES').hide();
                   $('#GCT_ECHO').hide();
                   $('#GZF').hide();
                   $('#ECT').hide();
                   $('#GAS').hide();
                   $('#ACC').hide();
                   $('#AT').hide();
                   $('#CHT_MINI').hide();
                   $('#CHT_NEXTGEN_HH').hide();
                   $('#CHT_NEX_GENLH').hide();
                   $('#DCT').hide();
                     }
					 
					 
					 //WAH
               if(modelno=='WAH'){
                   $('#2KD').hide();$('#2KW').hide();
                   $('#GFV').hide();
                   $('#GZ').hide();
                   $('#WAH').show();
                   $('#VXS').hide();
                   $('#VAR').hide();
                   $('#SPD').hide();
                   $('#SCT').hide(); 
				   $('#RAD').hide();
                   $('#SCB').hide();
                   $('#NXG').hide();
                   $('#MST').hide();
                   $('#hpfilter_ele').hide();
                   $('#hpfilter').hide();
                   $('#HLN').hide();
                   $('#HLD').hide();
                   $('#GZF_CATRIDGES').hide();
                   $('#GCT_ECHO').hide();
                   $('#GZF').hide();
                   $('#ECT').hide();
                   $('#GAS').hide();
                   $('#ACC').hide();
                   $('#AT').hide();
                   $('#CHT_MINI').hide();
                   $('#CHT_NEXTGEN_HH').hide();
                   $('#CHT_NEX_GENLH').hide();
                   $('#DCT').hide();
                     }
              //vxs
			   if(modelno=='VXS'){
                   $('#2KD').hide();$('#2KW').hide();
                   $('#GFV').hide();
                   $('#GZ').hide();
                   $('#WAH').hide();
                   $('#VXS').show();
                   $('#VAR').hide();
                   $('#SPD').hide();
                   $('#SCT').hide(); 
				   $('#RAD').hide();
                   $('#SCB').hide();
                   $('#NXG').hide();
                   $('#MST').hide();
                   $('#hpfilter_ele').hide();
                   $('#hpfilter').hide();
                   $('#HLN').hide();
                   $('#HLD').hide();
                   $('#GZF_CATRIDGES').hide();
                   $('#GCT_ECHO').hide();
                   $('#GZF').hide();
                   $('#ECT').hide();
                   $('#GAS').hide();
                   $('#ACC').hide();
                   $('#AT').hide();
                   $('#CHT_MINI').hide();
                   $('#CHT_NEXTGEN_HH').hide();
                   $('#CHT_NEX_GENLH').hide();
                   $('#DCT').hide();
                     }
              
			  //VAR
			  
			    if(modelno=='VAR'){
                   $('#2KD').hide();$('#2KW').hide();
                   $('#GFV').hide();
                   $('#GZ').hide();
                   $('#WAH').hide();
                   $('#VXS').hide();
                   $('#VAR').show();
                   $('#SPD').hide();
                   $('#SCT').hide(); 
				   $('#RAD').hide();
                   $('#SCB').hide();
                   $('#NXG').hide();
                   $('#MST').hide();
                   $('#hpfilter_ele').hide();
                   $('#hpfilter').hide();
                   $('#HLN').hide();
                   $('#HLD').hide();
                   $('#GZF_CATRIDGES').hide();
                   $('#GCT_ECHO').hide();
                   $('#GZF').hide();
                   $('#ECT').hide();
                   $('#GAS').hide();
                   $('#ACC').hide();
                   $('#AT').hide();
                   $('#CHT_MINI').hide();
                   $('#CHT_NEXTGEN_HH').hide();
                   $('#CHT_NEX_GENLH').hide();
                   $('#DCT').hide();
                     }
              
			    if(modelno=='SPD'){
                   $('#2KD').hide();$('#2KW').hide();
                   $('#GFV').hide();
                   $('#GZ').hide();
                   $('#WAH').hide();
                   $('#VXS').hide();
                   $('#VAR').hide();
                   $('#SPD').show();
                   $('#SCT').hide(); 
				   $('#RAD').hide();
                   $('#SCB').hide();
                   $('#NXG').hide();
                   $('#MST').hide();
                   $('#hpfilter_ele').hide();
                   $('#hpfilter').hide();
                   $('#HLN').hide();
                   $('#HLD').hide();
                   $('#GZF_CATRIDGES').hide();
                   $('#GCT_ECHO').hide();
                   $('#GZF').hide();
                   $('#ECT').hide();
                   $('#GAS').hide();
                   $('#ACC').hide();
                   $('#AT').hide();
                   $('#CHT_MINI').hide();
                   $('#CHT_NEXTGEN_HH').hide();
                   $('#CHT_NEX_GENLH').hide();
                   $('#DCT').hide();
                     }
              //sct
			    if(modelno=='SCT'){
                   $('#2KD').hide();$('#2KW').hide();
                   $('#GFV').hide();
                   $('#GZ').hide();
                   $('#WAH').hide();
                   $('#VXS').hide();
                   $('#VAR').hide();
                   $('#SPD').hide();
                   $('#SCT').show(); 
				   $('#RAD').hide();
                   $('#SCB').hide();
                   $('#NXG').hide();
                   $('#MST').hide();
                   $('#hpfilter_ele').hide();
                   $('#hpfilter').hide();
                   $('#HLN').hide();
                   $('#HLD').hide();
                   $('#GZF_CATRIDGES').hide();
                   $('#GCT_ECHO').hide();
                   $('#GZF').hide();
                   $('#ECT').hide();
                   $('#GAS').hide();
                   $('#ACC').hide();
                   $('#AT').hide();
                   $('#CHT_MINI').hide();
                   $('#CHT_NEXTGEN_HH').hide();
                   $('#CHT_NEX_GENLH').hide();
                   $('#DCT').hide();
                     }
              //RAD
			     if(modelno=='RAD'){
                   $('#2KD').hide();$('#2KW').hide();
                   $('#GFV').hide();
                   $('#GZ').hide();
                   $('#WAH').hide();
                   $('#VXS').hide();
                   $('#VAR').hide();
                   $('#SPD').hide();
                   $('#SCT').hide(); 
				   $('#RAD').show();
                   $('#SCB').hide();
                   $('#NXG').hide();
                   $('#MST').hide();
                   $('#hpfilter_ele').hide();
                   $('#hpfilter').hide();
                   $('#HLN').hide();
                   $('#HLD').hide();
                   $('#GZF_CATRIDGES').hide();
                   $('#GCT_ECHO').hide();
                   $('#GZF').hide();
                   $('#ECT').hide();
                   $('#GAS').hide();
                   $('#ACC').hide();
                   $('#AT').hide();
                   $('#CHT_MINI').hide();
                   $('#CHT_NEXTGEN_HH').hide();
                   $('#CHT_NEX_GENLH').hide();
                   $('#DCT').hide();
                     }  

//SCB
					 if(modelno=='SCB'){
                   $('#2KD').hide();$('#2KW').hide();
                   $('#GFV').hide();
                   $('#GZ').hide();
                   $('#WAH').hide();
                   $('#VXS').hide();
                   $('#VAR').hide();
                   $('#SPD').hide();
                   $('#SCT').hide(); 
				   $('#RAD').hide();
                   $('#SCB').show();
                   $('#NXG').hide();
                   $('#MST').hide();
                   $('#hpfilter_ele').hide();
                   $('#hpfilter').hide();
                   $('#HLN').hide();
                   $('#HLD').hide();
                   $('#GZF_CATRIDGES').hide();
                   $('#GCT_ECHO').hide();
                   $('#GZF').hide();
                   $('#ECT').hide();
                   $('#GAS').hide();
                   $('#ACC').hide();
                   $('#AT').hide();
                   $('#CHT_MINI').hide();
                   $('#CHT_NEXTGEN_HH').hide();
                   $('#CHT_NEX_GENLH').hide();
                   $('#DCT').hide();
                     }
         
//NXG

    	 if(modelno=='NXG'){
                   $('#2KD').hide();$('#2KW').hide();
                   $('#GFV').hide();
                   $('#GZ').hide();
                   $('#WAH').hide();
                   $('#VXS').hide();
                   $('#VAR').hide();
                   $('#SPD').hide();
                   $('#SCT').hide(); 
				   $('#RAD').hide();
                   $('#SCB').hide();
                   $('#NXG').show();
                   $('#MST').hide();
                   $('#hpfilter_ele').hide();
                   $('#hpfilter').hide();
                   $('#HLN').hide();
                   $('#HLD').hide();
                   $('#GZF_CATRIDGES').hide();
                   $('#GCT_ECHO').hide();
                   $('#GZF').hide();
                   $('#ECT').hide();
                   $('#GAS').hide();
                   $('#ACC').hide();
                   $('#AT').hide();
                   $('#CHT_MINI').hide();
                   $('#CHT_NEXTGEN_HH').hide();
                   $('#CHT_NEX_GENLH').hide();
                   $('#DCT').hide();
                     }
               
			   
			   //mst
			   if(modelno=='HP FILTER ELEMENT'){
                   $('#2KD').hide();$('#2KW').hide();
                   $('#GFV').hide();
                   $('#GZ').hide();
                   $('#WAH').hide();
                   $('#VXS').hide();
                   $('#VAR').hide();
                   $('#SPD').hide();
                   $('#SCT').hide(); 
				   $('#RAD').hide();
                   $('#SCB').hide();
                   $('#NXG').hide();
                   $('#MST').hide();
                   $('#hpfilter_ele').show();
                   $('#hpfilter').hide();
                   $('#HLN').hide();
                   $('#HLD').hide();
                   $('#GZF_CATRIDGES').hide();
                   $('#GCT_ECHO').hide();
                   $('#GZF').hide();
                   $('#ECT').hide();
                   $('#GAS').hide();
                   $('#ACC').hide();
                   $('#AT').hide();
                   $('#CHT_MINI').hide();
                   $('#CHT_NEXTGEN_HH').hide();
                   $('#CHT_NEX_GENLH').hide();
                   $('#DCT').hide();
                     }
              
			     //mst
			   if(modelno=='HP FILTER'){
                   $('#2KD').hide();$('#2KW').hide();
                   $('#GFV').hide();
                   $('#GZ').hide();
                   $('#WAH').hide();
                   $('#VXS').hide();
                   $('#VAR').hide();
                   $('#SPD').hide();
                   $('#SCT').hide(); 
				   $('#RAD').hide();
                   $('#SCB').hide();
                   $('#NXG').hide();
                   $('#MST').hide();
                   $('#hpfilter_ele').hide();
                   $('#hpfilter').show();
                   $('#HLN').hide();
                   $('#HLD').hide();
                   $('#GZF_CATRIDGES').hide();
                   $('#GCT_ECHO').hide();
                   $('#GZF').hide();
                   $('#ECT').hide();
                   $('#GAS').hide();
                   $('#ACC').hide();
                   $('#AT').hide();
                   $('#CHT_MINI').hide();
                   $('#CHT_NEXTGEN_HH').hide();
                   $('#CHT_NEX_GENLH').hide();
                   $('#DCT').hide();
                     }
              //hln
			    if(modelno=='HLN'){
                   $('#2KD').hide();$('#2KW').hide();
                   $('#GFV').hide();
                   $('#GZ').hide();
                   $('#WAH').hide();
                   $('#VXS').hide();
                   $('#VAR').hide();
                   $('#SPD').hide();
                   $('#SCT').hide(); 
				   $('#RAD').hide();
                   $('#SCB').hide();
                   $('#NXG').hide();
                   $('#MST').hide();
                   $('#hpfilter_ele').hide();
                   $('#hpfilter').hide();
                   $('#HLN').show();
                   $('#HLD').hide();
                   $('#GZF_CATRIDGES').hide();
                   $('#GCT_ECHO').hide();
                   $('#GZF').hide();
                   $('#ECT').hide();
                   $('#GAS').hide();
                   $('#ACC').hide();
                   $('#AT').hide();
                   $('#CHT_MINI').hide();
                   $('#CHT_NEXTGEN_HH').hide();
                   $('#CHT_NEX_GENLH').hide();
                   $('#DCT').hide();
                     }
        
	//hld
		if(modelno=='HLD'){
                   $('#2KD').hide();$('#2KW').hide();
                   $('#GFV').hide();
                   $('#GZ').hide();
                   $('#WAH').hide();
                   $('#VXS').hide();
                   $('#VAR').hide();
                   $('#SPD').hide();
                   $('#SCT').hide(); 
				   $('#RAD').hide();
                   $('#SCB').hide();
                   $('#NXG').hide();
                   $('#MST').hide();
                   $('#hpfilter_ele').hide();
                   $('#hpfilter').hide();
                   $('#HLN').hide();
                   $('#HLD').show();
                   $('#GZF_CATRIDGES').hide();
                   $('#GCT_ECHO').hide();
                   $('#GZF').hide();
                   $('#ECT').hide();
                   $('#GAS').hide();
                   $('#ACC').hide();
                   $('#AT').hide();
                   $('#CHT_MINI').hide();
                   $('#CHT_NEXTGEN_HH').hide();
                   $('#CHT_NEX_GENLH').hide();
                   $('#DCT').hide();
                     }
          
		  
		 //dct 
		  if(modelno=='DCT'){
                   $('#2KD').hide();$('#2KW').hide();
                   $('#GFV').hide();
                   $('#GZ').hide();
                   $('#WAH').hide();
                   $('#VXS').hide();
                   $('#VAR').hide();
                   $('#SPD').hide();
                   $('#SCT').hide(); 
				   $('#RAD').hide();
                   $('#SCB').hide();
                   $('#NXG').hide();
                   $('#MST').hide();
                   $('#hpfilter_ele').hide();
                   $('#hpfilter').hide();
                   $('#HLN').hide();
                   $('#HLD').hide();
                   $('#GZF_CATRIDGES').hide();
                   $('#GCT_ECHO').hide();
                   $('#GZF').hide();
                   $('#ECT').hide();
                   $('#GAS').hide();
                   $('#ACC').hide();
                   $('#AT').hide();
                   $('#CHT_MINI').hide();
                   $('#CHT_NEXTGEN_HH').hide();
                   $('#CHT_NEX_GENLH').hide();
                   $('#DCT').show();
                     }
           
		   //gzf
		   if(modelno=='GZF'){
                   $('#2KD').hide();$('#2KW').hide();
                   $('#GFV').hide();
                   $('#GZ').hide();
                   $('#WAH').hide();
                   $('#VXS').hide();
                   $('#VAR').hide();
                   $('#SPD').hide();
                   $('#SCT').hide(); 
				   $('#RAD').hide();
                   $('#SCB').hide();
                   $('#NXG').hide();
                   $('#MST').hide();
                   $('#hpfilter_ele').hide();
                   $('#hpfilter').hide();
                   $('#HLN').hide();
                   $('#HLD').hide();
                   $('#GZF_CATRIDGES').hide();
                   $('#GCT_ECHO').hide();
                   $('#GZF').show();
                   $('#ECT').hide();
                   $('#GAS').hide();
                   $('#ACC').hide();
                   $('#AT').hide();
                   $('#CHT_MINI').hide();
                   $('#CHT_NEXTGEN_HH').hide();
                   $('#CHT_NEX_GENLH').hide();
                   $('#DCT').hide();
                     }
 //ect          
if(modelno=='ECT'){
                   $('#2KD').hide();$('#2KW').hide();
                   $('#GFV').hide();
                   $('#GZ').hide();
                   $('#WAH').hide();
                   $('#VXS').hide();
                   $('#VAR').hide();
                   $('#SPD').hide();
                   $('#SCT').hide(); 
				   $('#RAD').hide();
                   $('#SCB').hide();
                   $('#NXG').hide();
                   $('#MST').hide();
                   $('#hpfilter_ele').hide();
                   $('#hpfilter').hide();
                   $('#HLN').hide();
                   $('#HLD').hide();
                   $('#GZF_CATRIDGES').hide();
                   $('#GCT_ECHO').hide();
                   $('#GZF').hide();
                   $('#ECT').show();
                   $('#GAS').hide();
                   $('#ACC').hide();
                   $('#AT').hide();
                   $('#CHT_MINI').hide();
                   $('#CHT_NEXTGEN_HH').hide();
                   $('#CHT_NEX_GENLH').hide();
                   $('#DCT').hide();
                     }
           
    //gas       
if(modelno=='GAS'){
                   $('#2KD').hide();$('#2KW').hide();
                   $('#GFV').hide();
                   $('#GZ').hide();
                   $('#WAH').hide();
                   $('#VXS').hide();
                   $('#VAR').hide();
                   $('#SPD').hide();
                   $('#SCT').hide(); 
				   $('#RAD').hide();
                   $('#SCB').hide();
                   $('#NXG').hide();
                   $('#MST').hide();
                   $('#hpfilter_ele').hide();
                   $('#hpfilter').hide();
                   $('#HLN').hide();
                   $('#HLD').hide();
                   $('#GZF_CATRIDGES').hide();
                   $('#GCT_ECHO').hide();
                   $('#GZF').hide();
                   $('#ECT').hide();
                   $('#GAS').show();
                   $('#ACC').hide();
                   $('#AT').hide();
                   $('#CHT_MINI').hide();
                   $('#CHT_NEXTGEN_HH').hide();
                   $('#CHT_NEX_GENLH').hide();
                   $('#DCT').hide();
                     }
     //ACC       
if(modelno=='ACC'){
                   $('#2KD').hide();$('#2KW').hide();
                   $('#GFV').hide();
                   $('#GZ').hide();
                   $('#WAH').hide();
                   $('#VXS').hide();
                   $('#VAR').hide();
                   $('#SPD').hide();
                   $('#SCT').hide(); 
				   $('#RAD').hide();
                   $('#SCB').hide();
                   $('#NXG').hide();
                   $('#MST').hide();
                   $('#hpfilter_ele').hide();
                   $('#hpfilter').hide();
                   $('#HLN').hide();
                   $('#HLD').hide();
                   $('#GZF_CATRIDGES').hide();
                   $('#GCT_ECHO').hide();
                   $('#GZF').hide();
                   $('#ECT').hide();
                   $('#GAS').hide();
                   $('#ACC').show();
                   $('#AT').hide();
                   $('#CHT_MINI').hide();
                   $('#CHT_NEXTGEN_HH').hide();
                   $('#CHT_NEX_GENLH').hide();
                   $('#DCT').hide();
                     }
      
//AT
	  if(modelno=='AT'){
                   $('#2KD').hide();$('#2KW').hide();
                   $('#GFV').hide();
                   $('#GZ').hide();
                   $('#WAH').hide();
                   $('#VXS').hide();
                   $('#VAR').hide();
                   $('#SPD').hide();
                   $('#SCT').hide(); 
				   $('#RAD').hide();
                   $('#SCB').hide();
                   $('#NXG').hide();
                   $('#MST').hide();
                   $('#hpfilter_ele').hide();
                   $('#hpfilter').hide();
                   $('#HLN').hide();
                   $('#HLD').hide();
                   $('#GZF_CATRIDGES').hide();
                   $('#GCT_ECHO').hide();
                   $('#GZF').hide();
                   $('#ECT').hide();
                   $('#GAS').hide();
                   $('#ACC').hide();
                   $('#AT').show();
                   $('#CHT_MINI').hide();
                   $('#CHT_NEXTGEN_HH').hide();
                   $('#CHT_NEX_GENLH').hide();
                   $('#DCT').hide();
                     }
      

//CHI MINI
	  if(modelno=='CHT MINI'){
                   $('#2KD').hide();$('#2KW').hide();
                   $('#GFV').hide();
                   $('#GZ').hide();
                   $('#WAH').hide();
                   $('#VXS').hide();
                   $('#VAR').hide();
                   $('#SPD').hide();
                   $('#SCT').hide(); 
				   $('#RAD').hide();
                   $('#SCB').hide();
                   $('#NXG').hide();
                   $('#MST').hide();
                   $('#hpfilter_ele').hide();
                   $('#hpfilter').hide();
                   $('#HLN').hide();
                   $('#HLD').hide();
                   $('#GZF_CATRIDGES').hide();
                   $('#GCT_ECHO').hide();
                   $('#GZF').hide();
                   $('#ECT').hide();
                   $('#GAS').hide();
                   $('#ACC').hide();
                   $('#AT').hide();
                   $('#CHT_MINI').show();
                   $('#CHT_NEXTGEN_HH').hide();
                   $('#CHT_NEX_GENLH').hide();
                   $('#DCT').hide();
                     }
		//cht lh			 
        if(modelno=='CHT NEXTGEN LH'){
                   $('#2KD').hide();$('#2KW').hide();
                   $('#GFV').hide();
                   $('#GZ').hide();
                   $('#WAH').hide();
                   $('#VXS').hide();
                   $('#VAR').hide();
                   $('#SPD').hide();
                   $('#SCT').hide(); 
				   $('#RAD').hide();
                   $('#SCB').hide();
                   $('#NXG').hide();
                   $('#MST').hide();
                   $('#hpfilter_ele').hide();
                   $('#hpfilter').hide();
                   $('#HLN').hide();
                   $('#HLD').hide();
                   $('#GZF_CATRIDGES').hide();
                   $('#GCT_ECHO').hide();
                   $('#GZF').hide();
                   $('#ECT').hide();
                   $('#GAS').hide();
                   $('#ACC').hide();
                   $('#AT').hide();
                   $('#CHT_MINI').hide();
                   $('#CHT_NEXTGEN_HH').hide();
                   $('#CHT_NEX_GENLH').show();
                   $('#DCT').hide();
                     }
          //nex gen hh 
 if(modelno=='CHT NEXTGEN HH'){
	
                   $('#2KD').hide();$('#2KW').hide();
                   $('#GFV').hide();
                   $('#GZ').hide();
                   $('#WAH').hide();
                   $('#VXS').hide();
                   $('#VAR').hide();
                   $('#SPD').hide();
                   $('#SCT').hide(); 
				   $('#RAD').hide();
                   $('#SCB').hide();
                   $('#NXG').hide();
                   $('#MST').hide();
                   $('#hpfilter_ele').hide();
                   $('#hpfilter').hide();
                   $('#HLN').hide();
                   $('#HLD').hide();
                   $('#GZF_CATRIDGES').hide();
                   $('#GCT_ECHO').hide();
                   $('#GZF').hide();
                   $('#ECT').hide();
                   $('#GAS').hide();
                   $('#ACC').hide();
                   $('#AT').hide();
                   $('#CHT_MINI').hide();
                   $('#CHT_NEXTGEN_HH').show();
                   $('#CHT_NEX_GENLH').hide();
                   $('#DCT').hide();
                     }
					 
					 //gct
            if(modelno=='GCT+ ECO'){
                   $('#2KD').hide();$('#2KW').hide();
                   $('#GFV').hide();
                   $('#GZ').hide();
                   $('#WAH').hide();
                   $('#VXS').hide();
                   $('#VAR').hide();
                   $('#SPD').hide();
                   $('#SCT').hide(); 
				   $('#RAD').hide();
                   $('#SCB').hide();
                   $('#NXG').hide();
                   $('#MST').hide();
                   $('#hpfilter_ele').hide();
                   $('#hpfilter').hide();
                   $('#HLN').hide();
                   $('#HLD').hide();
                   $('#GZF_CATRIDGES').hide();
                   $('#GCT_ECHO').show();
                   $('#GZF').hide();
                   $('#ECT').hide();
                   $('#GAS').hide();
                   $('#ACC').hide();
                   $('#AT').hide();
                   $('#CHT_MINI').hide();
                   $('#CHT_NEXTGEN_HH').hide();
                   $('#CHT_NEX_GENLH').hide();
                   $('#DCT').hide();
                     }
           
 if(modelno=='GZF CATRIDGES'){
                   $('#2KD').hide();$('#2KW').hide();
                   $('#GFV').hide();
                   $('#GZ').hide();
                   $('#WAH').hide();
                   $('#VXS').hide();
                   $('#VAR').hide();
                   $('#SPD').hide();
                   $('#SCT').hide(); 
				   $('#RAD').hide();
                   $('#SCB').hide();
                   $('#NXG').hide();
                   $('#MST').hide();
                   $('#hpfilter_ele').hide();
                   $('#hpfilter').hide();
                   $('#HLN').hide();
                   $('#HLD').hide();
                   $('#GZF_CATRIDGES').show();
                   $('#GCT_ECHO').hide();
                   $('#GZF').hide();
                   $('#ECT').hide();
                   $('#GAS').hide();
                   $('#ACC').hide();
                   $('#AT').hide();
                   $('#CHT_MINI').hide();
                   $('#CHT_NEXTGEN_HH').hide();
                   $('#CHT_NEX_GENLH').hide();
                   $('#DCT').hide();
                     }
           
if(modelno=='2KW'){
                   $('#2KD').hide();$('#2KW').show();
                   $('#GFV').hide();
                   $('#GZ').hide();
                   $('#WAH').hide();
                   $('#VXS').hide();
                   $('#VAR').hide();
                   $('#SPD').hide();
                   $('#SCT').hide(); 
				   $('#RAD').hide();
                   $('#SCB').hide();
                   $('#NXG').hide();
                   $('#MST').hide();
                   $('#hpfilter_ele').hide();
                   $('#hpfilter').hide();
                   $('#HLN').hide();
                   $('#HLD').hide();
                   $('#GZF_CATRIDGES').hide();
                   $('#GCT_ECHO').hide();
                   $('#GZF').hide();
                   $('#ECT').hide();
                   $('#GAS').hide();
                   $('#ACC').hide();
                   $('#AT').hide();
                   $('#CHT_MINI').hide();
                   $('#CHT_NEXTGEN_HH').hide();
                   $('#CHT_NEX_GENLH').hide();
                   $('#DCT').hide();
                     }
if(modelno=='MST'){
                   $('#2KD').hide();$('#2KW').hide();
                   $('#GFV').hide();
                   $('#GZ').hide();
                   $('#WAH').hide();
                   $('#VXS').hide();
                   $('#VAR').hide();
                   $('#SPD').hide();
                   $('#SCT').hide(); 
				   $('#RAD').hide();
                   $('#SCB').hide();
                   $('#NXG').hide();
                   $('#MST').show();
                   $('#hpfilter_ele').hide();
                   $('#hpfilter').hide();
                   $('#HLN').hide();
                   $('#HLD').hide();
                   $('#GZF_CATRIDGES').hide();
                   $('#GCT_ECHO').hide();
                   $('#GZF').hide();
                   $('#ECT').hide();
                   $('#GAS').hide();
                   $('#ACC').hide();
                   $('#AT').hide();
                   $('#CHT_MINI').hide();
                   $('#CHT_NEXTGEN_HH').hide();
                   $('#CHT_NEX_GENLH').hide();
                   $('#DCT').hide();
                     }
			
		}
</script>
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>