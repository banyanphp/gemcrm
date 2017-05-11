	<?php
include('dbconnect.php');	
$nam=$_GET['series_name'];
$model=$_GET['id'];
	?>
	
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
						  <form class="form form-horizontal" id="theform"  method="post">
	                    	<div class="form-body">
	                    		<h4 class="form-section"><i class="icon-head"></i> Enquiry Info</h4>
					
								
			        <?php 
							if($_GET['series_name']=='2KD'){
								
								$query2=mysqli_query($conn,"select * from  tbl_product_2kd where `product_model`='$model'");
                                         $fet1=mysqli_fetch_array($query2);
								?>            
									
	            
								
								<!-- span  2kd -->
								
								 <!-- 2KD -->
	                                      <div id="2KD">
										  <input type="hidden" name="action"  value="2KD"  id="gem">
										<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $fet1['product_model']; ?>"  id="2kdprd_model" class="form-control" disabled placeholder="Enter Product Model" name="kdprd_model">
										<input type="hidden" value="<?php echo $fet1['product_model']; ?>" id="2kdprd_model" name="kdprd_model">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $fet1['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Air Cooled R134a Price :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $fet1['2kd_ac_r134a']; ?>"  id="2kdac_r134" class="form-control" placeholder="Enter Air Coolded R134a" name="kdac_r134">
	                            	</div>
		                        </div>
		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Air Cooled R404c Price:</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $fet1['2kd_ac_r404a']; ?>"  id="2kdac_r404c" class="form-control" placeholder="Enter Air Coolded R404c" name="kdac_r404c">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Water Cooled R407c Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $fet1['2kd_ac_r407c']; ?>"  id="2kdac_r407cs" class="form-control" placeholder="Enter Water Cooled R407c" name="kdac_r407cs">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Capacity :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $fet1['2kd_capty_cfm']; ?>"  id="2kdcap" class="form-control" placeholder="Enter Capacity" name="kdcap">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Working Pressure :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $fet1['2kd_wrk_pressure']; ?>"  id="2kdwrk_pressure" class="form-control" placeholder="Enter Working Pressure" name="kdwrk_pressure">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Air Connection In/Out :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $fet1['2kd_ac_in_out']; ?>"  id="2kdac_io" class="form-control" placeholder="Enter Air Connection In/Out" name="kdac_io">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Rate Power KW :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $fet1['2kd_rat_pwr']; ?>"  id="2kdrate_pwr_kw" class="form-control" placeholder="Enter Rate Power KW  :" name="kdrate_pwr_kw">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Times :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $fet1['2kd_delvry_term']; ?>"  id="2kddelivery_terms" class="form-control" placeholder="Enter Delivery Times" name="kddelivery_terms">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Electrical Connection 220v/1s/50Hz :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $fet1['2kd_ec_220v']; ?>"  id="2kdec_220v" class="form-control" placeholder="Enter Electrical Connection 220v/1s/50Hz" name="kdec_220v">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Electrical Connection 415v/3s/50Hz :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $fet1['2kd_ec_415v']; ?>"  id="2kdec_415v" class="form-control" placeholder="Enter Electrical Connection 415v/3s/50Hz" name="kdec_415v">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $fet1['2kd_wrnt_doc']; ?>"  id="2kdwarranty_doc" class="form-control" placeholder="Enter Warranty Doc" name="kdwarranty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $fet1['2kd_wrnt_doi']; ?>"  id="2kdwarranty_doi" class="form-control" placeholder="Enter Warranty Doi" name="kdwarranty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $fet1['weight']; ?>"  id="2kdweight" class="form-control" placeholder="Enter Product Weight" name="kdweight">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="descrp" id="descrp" value="<?php echo $fet1['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
		                            </div>
		                        </div>

								<!--<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Discount :</label>
									<div class="col-md-9">
		                            	<input type="text" id="projectinput5" class="form-control" placeholder="Enter Product Discount" name="discount">
		                            </div>
		                        </div>-->
								</div>
								<?PHP } ?>
								<!-- span  2kw -->
								    <?php 
								if($_GET['series_name']=='2KW'){
									//echo "select * from  tbl_product_2kw where product_model='$model'";
									$query2=mysqli_query($conn,"select * from  tbl_product_2kw where product_model='$model'");
									$fet=mysqli_fetch_array($query2);
									
								?>  
								
								
								
								<div id="2KW" >
								<input type="hidden" name="action" value="2KW" id="gem" >

										<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
									
		                            	<input type="text" value="<?php echo $fet['product_model']; ?>" id="2kw_prd_model" class="form-control" disabled placeholder="Enter Product Model" name="2kw_prd_model">
										<input type="hidden" value="<?php echo $fet['product_model']; ?>" id="2kw_prd_model" name="kw_prd_model">
		                            </div>
		                            </div>
		                     	<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $fet['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Air Cooled R134 Pirce :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $fet['2kw_air_cooled_r134']; ?>" id="2kw_ac_r134" class="form-control" placeholder="Enter Air Cooled R134 Price" name="kw_ac_r134">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Capacity :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $fet['2kw_capacity']; ?>" id="2kw_cap" class="form-control" placeholder="Enter Capacity" name="kw_cap">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Working Pressure :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $fet['2kw_working_pressure']; ?>" id="2kw_wrk_pressure" class="form-control" placeholder="Enter Working Pressure :" name="kw_wrk_pressure">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Air Connection In/Out :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $fet['2kw_air_connection_in_out']; ?>" id="2kw_ac_io" class="form-control" placeholder="Enter Air Connection In/Out" name="kw_ac_io">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Power Consumption :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $fet['2kw_power_consumption']; ?>" id="2kw_pwr_cons" class="form-control" placeholder="Enter Power Consumption" name="kw_pwr_cons">
		                            </div>
		                        </div>

								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Terms :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $fet['2kw_delivery_terms']; ?>" id="2kw_delivery_times" class="form-control" placeholder="Enter Delivery Terms :" name="kw_delivery_times">
		                            </div>
		                        </div>
							<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Electrical Connection 230v/1s/50Hz :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $fet['2kw_electric_230v']; ?>" id="kw_ec_230v" class="form-control" placeholder="Enter Electrical Connection 230v/1s/50Hz" name="kw_ec_230v">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Electrical Connection 415v/3s/50Hz :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $fet['2kw_electric_415v']; ?>" id="kw_ec_415v" class="form-control" placeholder="Enter Electrical Connection 415v/3s/50Hz" name="kw_ec_415v">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $fet['2kw_warrenet_doc']; ?>" id="2kw_warnty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="kw_warnty_doc">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warrenty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $fet['2kw_warrenty_doi']; ?>" id="2kw_warnty_doi" class="form-control" placeholder="Enter Warrenty Date Of Invoice" name="kw_warnty_doi">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $fet['2kw_weight']; ?>" id="2kw_weght" class="form-control" placeholder="Enter Product Weight" name="kw_weght">
		                            </div>
		                        </div>
									<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="descrp" id="descrp" value="<?php echo $fet['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
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
								<?php } ?>
    <?php 
								if($_GET['series_name']=='ACC'){
									//echo "select * from tbl_product_acc where product_model='$model'";
								echo	"select * from tbl_product_acc where product_model='$model'";
								$query=mysqli_query($conn,"select * from tbl_product_acc where product_model='$model'");
								$row3=mysqli_fetch_array($query);
								?> 
								
								
								<div id="ACC">
								
								<input type="hidden" name="action" value="ACC" id="gem">
								
									<!--span acc-->
								
							<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row3['product_model']; ?>" id="acc_Prd_model" class="form-control" disabled placeholder="Enter Product Model" name="acc_Prd_model">
										<input type="hidden" value="<?php echo $row3['product_model']; ?>" id="acc_Prd_model" name="acc_Prd_model"> 
		                            </div>
		                        </div>
								    	<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row3['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Without vartex separator Price :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row3['acc_wthout_vertax']; ?>" id="acc_without_var_price" class="form-control" placeholder="Enter Without vartex separator Price " name="acc_without_var_price">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Capacity :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row3['acc_capacity']; ?>" id="acc_cap" class="form-control" placeholder="Enter Capacity" name="acc_cap">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Working Pressure :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row3['acc_wrk_pressure']; ?>" id="acc_wrk_presure" class="form-control" placeholder="Enter Working Pressure" name="acc_wrk_presure">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Air Connection In/Out BSP :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row3['acc_ac_bsp']; ?>" id="acc_io_bsp" class="form-control" placeholder="Enter Air Connection In/Out BSP" name="acc_io_bsp">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Rate Power Req KW :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row3['acc_rate_power']; ?>" id="acc_rate_pwr" class="form-control" placeholder="Enter Rate Power Req KW" name="acc_rate_pwr">
		                            </div>
		                        </div>

								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Electrical Connection R220 1ph 50HZ :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row3['acc_ec_220v']; ?>" id="acc_ec_r220v" class="form-control" placeholder="Enter Electrical Connection R220v 1ph 50HZ" name="acc_ec_r220v">
		                            </div>
		                        </div>
							<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Elecrical Connection 415v 3ph 50HZ :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row3['acc_ec_415v']; ?>" id="acc_ec_r415v" class="form-control" placeholder="Enter Elecrical Connection R413v 3ph 50HZ" name="acc_ec_r415v">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row3['acc_warenty_doc']; ?>" id="acc_waranty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="acc_waranty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row3['acc_warenty_doi']; ?>" id="acc_Warranty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="acc_Warranty_doi">
		                            </div>
		                        </div><div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Terms :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row3['acc_delivery']; ?>" id="acc_delivery_term" class="form-control" placeholder="Enter Delivery Times" name="acc_delivery_term">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row3['acc_weight']; ?>" id="acc_weght" class="form-control" placeholder="Enter Product Weight" name="acc_weght">
		                            </div>
		                        </div>
									<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="descrp" id="descrp" value="<?php echo $row3['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
		                            </div>
		                        </div>
								<!--<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Discount :</label>
									<div class="col-md-9">
		                            	<input type="text" id="acc_dscunt" class="form-control" placeholder="Enter Product Discount" name="acc_dscunt">
		                            </div>
		                        </div>-->
								
								</div>
								
								<?php } ?>
								<!-- span  At -->
								
    <?php 
								if($_GET['series_name']=='AT'){
								$query2=mysqli_query($conn,"select * from tbl_product_at where product_model='$model'");
								$row4=mysqli_fetch_array($query2);
								?> 



								
								<div id="AT"   >
								<input type="hidden" name="action" value="AT" id="gem">
								
							<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row4['product_model']; ?>" id="at_Prd_model" class="form-control" disabled placeholder="Product model" name="at_Prd_model">
										<?php /* <input type="hidden" value="<?php echo $row4['product_model']; ?>" id="at_Prd_model" name="at_Prd_model"> */ ?>
		                            </div>
		                        </div>
								   	<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row4['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
								
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Capacity :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row4['at_capacity']; ?>" id="at_cap" class="form-control" placeholder="Enter Capacity" name="at_cap">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3"><strong>Model variance price </strong>7.5-10.5 Bar :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row4['at_mv_bar']; ?>" id="at_model_var" class="form-control" placeholder="Enter Model variance price 7.5-10.5 Bar" name="at_model_var">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3"><strong>Model variance price </strong>Acessories :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row4['at_mv_accessories']; ?>" id="at_model_var_accesrs" class="form-control" placeholder="Enter Model variance price Acessories " name="at_model_var_accesrs">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Shell/dish thikness:</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row4['at_shell_thick']; ?>" id="at_shell" class="form-control" placeholder="Enter Shell/dish thikness " name="at_shell">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5"> in/out Connection :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row4['at_in_out_connection']; ?>" id="at_io_out" class="form-control" placeholder="Enter in/out Connection" name="at_io_out">
		                            </div>
		                        </div>
								
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Terms :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row4['at_delevery_trm']; ?>" id="at_delivry" class="form-control" placeholder="Enter Delivery" name="at_delivry">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Hand Hole/Man Hole :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row4['at_hand_hole']; ?>" id="at_hnd_hol" class="form-control" placeholder="Enter Hand Hole/Man Hole" name="at_hnd_hol">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row4['at_warenty_doc']; ?>" id="at_warranty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="at_warranty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row4['at_warenty_doi']; ?>" id="at_warranty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="at_warranty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Moc/Coc :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row4['at_moc']; ?>" id="at_moc_coc" class="form-control" placeholder="Enter Moc/Coc" name="at_moc_coc">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row4['at_weight']; ?>" id="at_wght" class="form-control" placeholder="Enter Weight" name="at_wght">
		                            </div>
		                        </div>
									<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="descrp" id="descrp" value="<?php echo $row4['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
		                            </div>
		                        </div>
									<!--<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Discount :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php/* echo $row4[''];*/ ?>" id="projectinput5" class="form-control" placeholder=" Discount" name="company">
		                            </div>
		                        </div>-->
								
								</div>
								<?php } ?>
								<!-- span  cht_mini -->
								<?php 

								if($_GET['series_name']=='CHT MINI'){
								
					$query2=mysqli_query($conn,"select * from tbl_product_cht_mini where product_model='$model'");	
		                      $row5=mysqli_fetch_array($query2);
								?>
								
								<div id="CHT_MINI">
								<input type="hidden" name="action" value="CHT_MINI" id="gem">
			                    

								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row5['product_model']; ?>" id="cht_prd_model" class="form-control" disabled placeholder="Product Model" name="cht_prd_model">
										 <input type="hidden" value="<?php echo $row5['product_model']; ?>" id="cht_prd_model" name="cht_prd_model"> 
		                            </div>
		                        </div>
								   	<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row5['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">1 to 3 Bar AC R22 Price :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row5['cht_mini_bar_ac_r22']; ?>" id="cht_1_3acr22" class="form-control" placeholder="1 to 3 Bar AC R22 Price " name="cht_1_3acr22">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">1 to 3 Bar AC R22/PHE Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row5['cht_mini_bar_ac_r22_phe']; ?>" id="cht_1_3acphe" class="form-control" placeholder="1 to 3 Bar AC R22/PHE Price" name="cht_1_3acphe">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Capacity :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row5['cht_mini_capacity']; ?>" id="cht_cap" class="form-control" placeholder="Capacity" name="cht_cap">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Heat Load Kcal/h :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row5['cht_mini_heatload_kw']; ?>" id="cht_heat" class="form-control" placeholder="Contact Person Name" name="cht_heat">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Heat Load Kw :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row5['cht_mini_heatload_kcal']; ?>" id="cht_heat_kw" class="form-control" placeholder="Heat Load Kw" name="cht_heat_kw">
		                            </div>
		                        </div>

								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Water Pump Flow rate lpm :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row5['cht_mini_waterpump_absorbed']; ?>" id="aht_water_flw" class="form-control" placeholder="Water Pump Flow rate lpm" name="aht_water_flw">
		                            </div>
		                        </div>
							<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Water Pump Absorbed Power Kw :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row5['cht_mini_waterpump_flow']; ?>" id="cht_water_pump" class="form-control" placeholder="Water Pump Absorbed Power Kw" name="cht_water_pump">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Cooling fan Supply :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row5['cht_mini_cooling_fan']; ?>" id="cht_coolingfan" class="form-control" placeholder="Cooling fan Supply" name="cht_coolingfan">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Input/Output water Bsp :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row5['cht_mini_in_out_water']; ?>" id="cht_in_out" class="form-control" placeholder="Input/Output water Bsp" name="cht_in_out">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row5['cht_mini_delivery']; ?>" id="cht_delivry" class="form-control" placeholder="Delivery" name="cht_delivry">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission : </label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row5['cht_mini_warenty_doc']; ?>" id="cht_warrnty_doc" class="form-control" placeholder="Warranty Date Of Commission" name="cht_warrnty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row5['cht_mini_warenty_doi']; ?>" id="cht_warrnty_doi" class="form-control" placeholder="Warranty Date Of invoice" name="cht_warrnty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row5['cht_mini_weight']; ?>" id="cht_wght" class="form-control" placeholder="Weight" name="cht_wght">
		                            </div>
		                        </div>
									<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="descrp" id="descrp" value="<?php echo $row5['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
		                            </div>
		                        </div>
								<!--<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5"> Discount :</label>
									<div class="col-md-9">
		                            	<input type="text" value="" id="projectinput5" class="form-control" placeholder="Enter Product Discount" name="cht_dscnt">
		                            </div>
		                        </div>-->
								
								</div><!-- cht_nxgen_hh -->
								<?PHP }  ?>

								
								<!-- span  cht_nexgen_hh -->
							
                                 <?php 
								if($_GET['series_name']=='CHT NEXTGEN HH'){
								$query2=mysqli_query($conn,"select * from tbl_product_cht_nexgen_hh where product_model='$model'");
								$row6=mysqli_fetch_array($query2);
								?> 


								
								<div id="CHT NEXTGEN HH">
								<input type="hidden" name="action" value="CHT NEXTGEN HH" id="gem">
								
								  <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row6['product_model']; ?>" id="nxtgen_hh_prd_model" class="form-control" disabled placeholder="Enter Product Model" name="nxtgen_hh_prd_model">
										<input type="hidden" value="<?php echo $row6['product_model']; ?>" id="pro_mdl" name="nxtgen_hh_prd_model">
										
		                            </div>
		                        </div>
								   	<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row6['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">High temperature,water tempe design-15'c Air coolded Price:</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row6['cht_hh_high_temp_air_cooled_a']; ?>" id="nxtgen_hh_hig_tempac" class="form-control" placeholder="Enter High temperature,water tempe design-15'c Air coolded Price" 
	                            		name="nxtgen_hh_hig_tempac">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">High temperature,water tempe design-15'c water coolded Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row6['cht_hh_high_temp_water_cooled_b']; ?>" id="nxtgen_hh_high_tempwater" class="form-control" placeholder="Enter High temperature,water tempe design-15'c water coolded Price" name="nxtgen_hh_high_tempwater">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Capacity :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row6['cht_hh_capacity']; ?>" id="nxtgen_hh_cap" class="form-control" placeholder="Enter Capacity " name="nxtgen_hh_cap">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Heat Load kcal :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row6['cht_hh_heat_load_kcal_h']; ?>" id="nxtgen_hh_heatkcal" class="form-control" placeholder="Enter Heat Load kcal" name="nxtgen_hh_heatkcal">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Heat Load kw :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row6['cht_hh_heat_load_kw']; ?>" id="nxtgen_hh_heatkw" class="form-control" placeholder="Enter Heat Load kw" name="nxtgen_hh_heatkw">
		                            </div>
		                        </div>

								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Water pump Flow Rate lpm :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row6['cht_hh_water_pump_flow_rate_lpm']; ?>" id="water_pump_1pm" class="form-control" placeholder="Enter Water pump Flow Rate lpm" name="water_pump_1pm">
		                            </div>
		                        </div>
							<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Water Pump Absorbed Power Kw :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row6['cht_hh_water_pump_absorbed_pw_kw']; ?>" id="nxt_genhh_waterpump_power" class="form-control" placeholder="Enter Water Pump Absorbed Power Kw" name="nxt_genhh_waterpump_power">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Cooling Fan Supply:</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row6['cht_hh_cooling_fan']; ?>" id="nxt_gen_hh_cooling" class="form-control" placeholder="Enter Cooling fan supply" name="nxt_gen_hh_cooling">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Input output water :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row6['cht_hh_input_output_water']; ?>" id="nxt_gen_hh_io" class="form-control" placeholder="Enter Input output water" name="nxt_gen_hh_io">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">DElivery Terms :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row6['cht_hh_delivery_terms']; ?>" id="nxt_gen_hh_delivery_terms" class="form-control" placeholder="Enter DElivery Terms" name="nxt_gen_hh_delivery_terms">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row6['cht_hh_warranty_doc']; ?>" id="nxt_gen_hh_warranty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission " name="nxt_gen_hh_warranty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row6['cht_hh_warranty_doi']; ?>" id="nxt_gen_hh_warranty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="nxt_gen_hh_warranty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row6['cht_hh_weight']; ?>" id="nxtgen_hh_wight" class="form-control" placeholder="Enter Weight" name="nxtgen_hh_wight">
		                            </div>
		                        </div>
										<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="descrp" id="descrp" value="<?php echo $row6['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
		                            </div>
		                        </div>
								<!--<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5"> Discount :</label>
									<div class="col-md-9">
		                            	<input type="text" value="" id="projectinput5" class="form-control" placeholder="Enter Product Discount" name="discount">
		                            </div>
		                        </div>-->
								
								</div>
								<?php } ?>
								<!-- span  nexgen_lh -->
								    <?php 
								if($_GET['series_name']=='CHT NEXTGEN LH'){
									echo"select * from tbl_product_cht_nexgen_lh where product_model='$model'";
								$query2=mysqli_query($conn,"select * from tbl_product_cht_nexgen_lh where product_model='$model'");
								$row7=mysqli_fetch_array($query2);
								?> 
								
								
								
								
								<div id="CHT_NEXTGEN_LH">
								<input type="hidden" name="action" value="CHT NEXTGEN LH" id="gem" >
								
									<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row7['product_model']; ?>" id="cht_nexlh_prd_model" class="form-control" disabled placeholder="Product Model" name="cht_nexlh_prd_model">
										<?php /* <input type="hidden" value="<?php echo $row7['product_model']; ?>" id="pro_mdls" name="nxtgen_hh_prd_model"> */ ?>
		                            </div>
		                        </div>
								   	<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row7['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">low temperature,water tempe design-10'c Air coolded Price :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row7['cht_low_temp_air_cooled_a']; ?>" id="cht_nexlh_lowtemp_ac" class="form-control" placeholder="low temperature,water tempe design-10'c Air coolded" name="cht_nexlh_lowtemp_ac">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">low temperature,water tempe design-10'c Water coolded Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row7['cht_low_temp_water_cooled_b']; ?>" id="cht_nexlh_lowtemp_water" class="form-control" placeholder="low temperature,water tempe design-10'c Water coolded :" name="cht_nexlh_lowtemp_water">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Capacity :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row7['cht_capacity']; ?>" id="cht_nexlh_cap" class="form-control" placeholder="Capacity" name="cht_nexlh_cap">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Heat Load Kcal/h :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row7['cht_heat_load_kcal_h']; ?>" id="cht_nexlh_heatkcal" class="form-control" placeholder="Heat Load Kcal/h " name="cht_nexlh_heatkcal">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Heat Load Kw : </label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row7['cht_heat_load_kw']; ?>" id="cht_nexlh_heatkw" class="form-control" placeholder="Heat Load Kw" name="cht_nexlh_heatkw">
		                            </div>
		                        </div>
							<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Water Pump Floe rate lpm :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row7['cht_water_pump_flow_rate_lpm']; ?>" id="cht_nexlh_water_flow" class="form-control" placeholder="Water Pump Floe rate lpm" name="cht_nexlh_water_flow">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Water Pump absorbed rate Kw :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row7['cht_water_pump_absobed_pow_kw']; ?>" id="cht_nexlh_water_abrob" class="form-control" placeholder="Water Pump absorbed rate Kw" name="cht_nexlh_water_abrob">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Cooling Fan Supply :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row7['cht_cooling_fan']; ?>" id="cht_nexlh_coolfan" class="form-control" placeholder="Cooling Fan Supply" name="cht_nexlh_coolfan">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Input output water  :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row7['cht_input_output_water']; ?>" id="cht_nexlh_inout" class="form-control" placeholder="Input output water " name="cht_nexlh_inout">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Terms</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row7['cht_delivery_terms']; ?>" id="cht_nexlh_delivr" class="form-control" placeholder="Contact Person  Mobile No" name="cht_nexlh_delivr">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row7['cht_warranty_doc']; ?>" id="cht_nexlh_warnt_doc" class="form-control" placeholder="Enter Warranty Date Of Commission " name="cht_nexlh_warnt_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row7['cht_warranty_doi']; ?>" id="cht_nexlh_warnty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="cht_nexlh_warnty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row7['cht_weight']; ?>" id="cht_nexlh_wight" class="form-control" placeholder="Enter Weight" name="cht_nexlh_wight">
		                            </div>
		                        </div>
										<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="descrp" id="descrp" value="<?php echo $row7['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
		                            </div>
		                        </div>
								<!--<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5"> Discount :</label>
									<div class="col-md-9">
		                            	<input type="text" value="" id="projectinput5" class="form-control" placeholder="Enter Product Discount" name="company">
		                            </div>
		                        </div>--> 
								
								</div>
								
								<?php } ?>
								<!-- span  dct -->
								      <?php 
								if($_GET['series_name']=='DCT'){
								$query2=mysqli_query($conn,"select * from tbl_product_dct where product_model='$model'");
								$row8=mysqli_fetch_array($query2);
								?>  
								
								
								
								
								<div id="DCT">
								<input type="hidden" name="action" value="DCT"  id="gem">
								
								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row8['product_model']; ?>" id="dct_prd_modl" class="form-control" disabled placeholder="Product Model" name="dct_prd_modl">
										<?php /* <input type="hidden" value="<?php echo $row8['product_model']; ?>" id="pro_mdls" name="nxtgen_hh_prd_model"> */ ?>
		                            </div>
		                        </div>
								   	<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row8['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Price :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row8['dct_price']; ?>" id="dct_prc" class="form-control" placeholder="Price" name="dct_prc">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Motor Power Hp :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row8['dct_motor_power']; ?>" id="dct_motr_pwr" class="form-control" placeholder="Motor Power Hp" name="dct_motr_pwr">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Fan Quality :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row8['dct_fan_qty']; ?>" id="dct_fan_qul" class="form-control" placeholder="Fan Quality" name="dct_fan_qul">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Header Pipe & Flag size :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row8['dct_header_pipe']; ?>" id="dct_header_flg" class="form-control" placeholder="Header Pipe & Flag size" name="dct_header_flg">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Contact Person Fan Diametter :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row8['dct_fan_dia']; ?>" id="dct_contact_fan" class="form-control" placeholder="Contact Person Fan Diametter" name="dct_contact_fan">
		                            </div>
		                        </div>

								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Term :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row8['dct_delivery_trm']; ?>" id="dct_delivry" class="form-control" placeholder="Delivery Term" name="dct_delivry">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row8['dct_warenty_doc']; ?>" id="dct_warnty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission " name="dct_warnty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row8['dct_warenty_doi']; ?>" id="dct_warnty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="dct_warnty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row8['dct_weight']; ?>" id="dct_wight" class="form-control" placeholder="Enter Weight" name="dct_wight">
		                            </div>
		                        </div>
										<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="descrp" id="descrp" value="<?php echo $row8['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
		                            </div>
		                        </div>
								<!--<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5"> Discount :</label>
									<div class="col-md-9">
		                            	<input type="text" value="" id="dct_discunt" class="form-control" placeholder="Enter Product Discount" name="dct_discunt">
		                            </div>
		                        </div>-->
								
								</div>
								<?php } ?>
								
								
								<!-- span  ect -->
								<?php 
								if($_GET['series_name']=='ECT'){
								$query2=mysqli_query($conn,"select * from tbl_product_ect where product_model='$model'");
								$row9=mysqli_fetch_array($query2);
								?> 



								
								<div id="ECT" >
								<input type="hidden" name="action" value="ECT"  id="gem"> 
								
								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row9['product_model']; ?>" id="ect_prd_model" class="form-control" disabled placeholder="Product Model" name="ect_prd_model">
										<?php /* <input type="hidden" value="<?php echo $row9['product_model']; ?>" id="ect_prd_models" name="ect_prd_model"> */ ?>
		                            </div>
		                        </div>
								  	<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row9['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Coil 2-8 Rows Price :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row9['ect_coil_2_rows']; ?>" id="ect_coilrow" class="form-control" placeholder="Coil 2-8 Rows" name="ect_coilrow">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Motor hp /rpm :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row9['ect_motor_hp']; ?>" id="ect_motorhp" class="form-control" placeholder="Motor hp /rpm " name="ect_motorhp">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">In/out Bsp :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row9['ect_in_out_bsp']; ?>" id="ect_inout" class="form-control" placeholder="In/out Bsp" name="ect_inout">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Terms :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row9['ect_delivery_terms']; ?>" id="ect_delvry" class="form-control" placeholder="Delivery Terms" name="ect_delvry">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row9['ect_warnty_doc']; ?>" id="ect_warnty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission " name="ect_warnty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row9['ect_warnty_doi']; ?>" id="ect_warnty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="ect_warnty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Outlet Water Temperature :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row9['ect_outlet_temp']; ?>" id="ect_outlet_temp" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="ect_outlet_temp">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row9['ect_weight']; ?>" id="ect_wight" class="form-control" placeholder="Enter Weight" name="ect_wight">
		                            </div>
		                        </div>
										<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="descrp" id="descrp" value="<?php echo $row9['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
		                            </div>
		                        </div>
								    <!--<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Product Cost :</label>
									<div class="col-md-9">
		                            	<input type="text" value="" id="ect_prd_cost" class="form-control" placeholder="Enter Product Cost" name="ect_prd_cost">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5"> Discount :</label>
									<div class="col-md-9">
		                            	<input type="text" value="" id="ect__dscunt" class="form-control" placeholder="Enter Product Discount" name="ect__dscunt">
		                            </div>
		                        </div>-->
								</div>
								
								<?php } ?>
								<!-- span  gas -->
								<?php 
								if($_GET['series_name']=='GAS'){
								$query2=mysqli_query($conn,"select * from tbl_product_gas where product_model='$model'");
								$row10=mysqli_fetch_array($query2);
								?>  
								
								 
								
								
								
								<div id="GAS" >
								<input type="hidden" name="action" value="GAS"  id="gem">
									
																	<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row10['product_model']; ?>" id="gas_prd_model" class="form-control" disabled placeholder="Product Model" name="gas_prd_model">
										<?php /* <input type="hidden" value="<?php echo $row10['product_model']; ?>" id="gas_prd_model" name="ect_prd_model"> */ ?>
		                            </div>
		                        </div>
								  	<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row10['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Model Variance :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row10['gas_model_variance']; ?>" id="gas_modl_vari" class="form-control" placeholder="Model Variance" name="gas_modl_vari">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row10['gas_price']; ?>" id="gas_prices" class="form-control" placeholder="Price" name="gas_prices">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Total Connect Power Hp :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row10['gas_total_connect_powr']; ?>" id="gas_conct_pwr" class="form-control" placeholder="Total Connect Power Hp" name="gas_conct_pwr">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Water in/out :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row10['gas_water_in_out']; ?>" id="gas_water_in" class="form-control" placeholder="Water in/out" name="gas_water_in">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Fan diameter :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row10['gas_fan_dia']; ?>" id="gas_fan_diae" class="form-control" placeholder="Fan diameter" name="gas_fan_diae">
		                            </div>
		                        </div>

								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Motor Quality :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row10['gas_motor_qty']; ?>" id="gas_motr_qul" class="form-control" placeholder="Motor Quality" name="gas_motr_qul">
		                            </div>
		                        </div>
							<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Header Pipe & flag size :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row10['gas_header_pip_flg']; ?>" id="gas_head_pip" class="form-control" placeholder="Header Pipe & flag size " name="gas_head_pip">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Terms :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row10['gas_delivery_trm']; ?>" id="gas_delvr" class="form-control" placeholder="Delivery Terms" name="gas_delvr">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Configuration :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row10['gas_config']; ?>" id="gas_Configu" class="form-control" placeholder="Delivery Terms" name="gas_Configu">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row10['gas_warenty_doc']; ?>" id="gas_wrnt_doc" class="form-control" placeholder="Enter Warranty Date Of Commission " name="gas_wrnt_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row10['gas_warenty_doi']; ?>" id="gas_wrnt_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="gas_wrnt_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Outlet water Temp :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row10['gas_outlet_temp']; ?>" id="gas_outlet_water" class="form-control" placeholder="Enter Outlet water Temp" name="gas_outlet_water">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row10['gas_weight']; ?>" id="gas_wight" class="form-control" placeholder="Enter Weight" name="gas_wight">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="descrp" id="descrp" value="<?php echo $row10['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
		                            </div>
		                        </div>
								<!--<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5"> Discount :</label>
									<div class="col-md-9">
		                            	<input type="text" value="" id="gas_dst" class="form-control" placeholder="Enter Product Discount" name="gas_dst">
		                            </div>
		                        </div>-->
								
								</div>
                                   <?php } ?>


								<?php 
								if($_GET['series_name']=='GCT  ECO'){
									
								$query2=mysqli_query($conn,"select * from tbl_product_gct_eco where product_model='$model'");
								$row11=mysqli_fetch_array($query2);

								?>  
								
								
								<!-- span  gct_eco -->
								
								<div id="GCT_ECHO" >
								<input type="hidden" name="action" value="GCT_ECHO" id="gem">
								
								
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row11['product_model']; ?>" id="gcteco_prd_model" class="form-control" disabled placeholder="Product Model" name="gcteco_prd_model">
										<?php /* <input type="hidden" value="<?php echo $row11['product_model']; ?> id="var_prd_models" name="var_prd_model"> */ ?>
		                            </div>
		                        </div>
									<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row11['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Low price :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row11['gct_low_price']; ?>" id="gcteco_lowcost" class="form-control" placeholder="Low price" name="gcteco_lowcost">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">High price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row11['gct_high_price']; ?>" id="gcteco_highcost" class="form-control" placeholder="High price" name="gcteco_highcost">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Recommended Erection charge Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row11['gct_recommended_erection_charges']; ?>" id="gcteco_ec_price" class="form-control" placeholder="Recommended Erection charge Price " name="gcteco_ec_price">
		                            </div>
		                        </div>
							<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Capacity :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row11['gct_capacity']; ?>" id="gcteco_cap" class="form-control" placeholder="Capacity" name="gcteco_cap">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Motor rpm :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row11['gct_motor']; ?>" id="gcteco_motor" class="form-control" placeholder="Motor rpm " name="gcteco_motor">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Power consumed :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row11['gct_power_consumed']; ?>" id="gcteco_powrcons" class="form-control" placeholder="Power consumed" name="gcteco_powrcons">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Water Flow rate :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row11['gct_water_flow_rate']; ?>" id="gcteco_water" class="form-control" placeholder="Water Flow rate" name="gcteco_water">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">In/out size :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row11['gct_in_out_size']; ?>" id="gcteco_inout" class="form-control" placeholder="In/out size" name="gcteco_inout">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Basin Holding Capacity :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row11['gct_basin_holding_capacity']; ?>" id="gcteco_basincap" class="form-control" placeholder="Basin Holding Capacity" name="gcteco_basincap">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Terms :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row11['gct_delivery_terms']; ?>" id="gcteco_delvry" class="form-control" placeholder="Delivery Terms" name="gcteco_delvry">
		                            </div>
									</div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row11['gct_wrnty_doc']; ?>" id="gcteco_wrnty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission " name="gcteco_wrnty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row11['gct_wrnty_doi']; ?>" id="gcteco_wrnty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="gcteco_wrnty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row11['gct_weight']; ?>" id="gcteco_wight" class="form-control" placeholder="Enter Weight" name="gcteco_wight">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="descrp" id="descrp" value="<?php echo $row11['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
		                            </div>
		                        </div>
								<!--<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5"> Discount :</label>
									<div class="col-md-9">
		                            	<input type="text" id="gcteco_discunt" class="form-control" placeholder="Enter Product Discount" name="gcteco_discunt">
		                            </div>
		                        </div>-->
								
								</div>
								<?Php } ?>
								<!-- span  gzf -->
								<?php 
								if($_GET['series_name']=='GZF'){
								$query2=mysqli_query($conn,"select * from tbl_product_gzf where product_model='$model'");
								$row12=mysqli_fetch_array($query2);
								?>  
								
								
								
								
								<div id="GZF">
								<input type="hidden" name="action" value="gzf" >
									
																		<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row12['product_model']; ?>" id="gzf_prd_model" class="form-control" disabled placeholder="Product Model" name="gzf_prd_model">
										<?php /* <input type="hidden" value="<?php echo $row12['product_model']; ?> id="var_prd_models" name="var_prd_model"> */ ?>
		                            </div>
		                        </div>
									<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row12['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Grade :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row12['gzf_grade']; ?>" id="gzf_grd" class="form-control" placeholder="Grade" name="gzf_grd">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row12['gzf_price']; ?>" id="gzf_cost" class="form-control" placeholder="Price" name="gzf_cost">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Particle Removal :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row12['gzf_practical_removal']; ?>" id="gzf_particl" class="form-control" placeholder="Particle Removal" name="gzf_particl">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Oil Removal :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row12['gzf_oil_removal']; ?>" id="gzf_oilremovl" class="form-control" placeholder="Oil Removal" name="gzf_oilremovl">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Max operating Pressure :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row12['gzf_max_operating']; ?>" id="gzf_maxopr_pre" class="form-control" placeholder="Max operating Pressure" name="gzf_maxopr_pre">
		                            </div>
		                        </div>

								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Effeciency :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row12['gzf_effeciency']; ?>" id="gzf_effec" class="form-control" placeholder="Effeciency" name="gzf_effec">
		                            </div>
		                        </div>
							<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Capacity :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row12['gzf_capacity']; ?>" id="gzf_cap" class="form-control" placeholder="Capacity" name="gzf_cap">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Air Connected in Bsp :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row12['gzf_air_connection']; ?>" id="gzf_ac_bsp" class="form-control" placeholder="Air Connected in Bsp" name="gzf_ac_bsp">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Terms :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row12['gzf_delivery_trm']; ?>" id="gzf_delv" class="form-control" placeholder="Delivery Terms" name="gzf_delv">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row12['gzf_warenty_doc']; ?>" id="gzf_warnty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission " name="gzf_warnty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row12['gzf_warenty_doi']; ?>" id="gzf_warnty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="gzf_warnty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row12['gzf_weight']; ?>" id="gzf_wight" class="form-control" placeholder="Enter Weight" name="gzf_wight">
		                            </div>
		                        </div>
									<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="descrp" id="descrp" value="<?php echo $row12['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
		                            </div>
		                        </div>
								<!--<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5"> Discount :</label>
									<div class="col-md-9">
		                            	<input type="text"  id="projectinput5" class="form-control" placeholder="Enter Product Discount" name="company">
		                            </div>
		                        </div>-->
								
								</div>
								<?php } ?>
								
								<!-- span  gzf_cartridges -->
<?php 
								if($_GET['series_name']=='GZF CATRIDGES'){
								$query2=mysqli_query($conn,"select * from tbl_product_gzf_cartridges where product_model='$model'");
								$row13
								=mysqli_fetch_array($query2);
								?>  
								
								 
								
								
								
                               <div id="GZF_CATRIDGES" >
								<input type="hidden" name="action" value="GZF CATRIDGES" id="gem">
								
								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row13['product_model']; ?>" id="gzf_cart_prd_model" class="form-control" disabled placeholder="Product model" name="gzf_cart_prd_model">
										<?php /* <input type="hidden" value="<?php echo $row13['product_model']; ?> id="var_prd_models" name="var_prd_model"> */ ?>
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row13['sap_code']; ?>"  id="gzf_cart_sapcode" class="form-control" placeholder="Enter Sapcode" name="gzf_cart_sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Genral Purpose Filter Catridge Price :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row13['gzf_cartridges_mv_gpe']; ?>" id="gzf_cart_genralfilter" class="form-control" placeholder="Genral Purpose Filter Catridge" name="gzf_cart_genralfilter">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Micro oil Removing filter Catridge Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row13['gzf_cartridges_mv_zpe']; ?>" id="gzf_cart_microil" class="form-control" placeholder="Micro oil Removing filter Catridge" name="gzf_cart_microil">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Sub Micro oil Removing filter Catridge Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row13['gzf_cartridges_mv_zoe']; ?>" id="gzf_cart_sub_microil" class="form-control" placeholder="Micro oil Removing filter Catridge" name="gzf_cart_sub_microil">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Activated corbon filter Catridge Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row13['gzf_cartridges_mv_zce']; ?>" id="gzf_cart_activatedcarb" class="form-control" placeholder="Activated corbon filter Catridge" name="gzf_cart_activatedcarb">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Capacity :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row13['gzf_cartridges_capacity']; ?>" id="gzf_cart_cap" class="form-control" placeholder="Capacity" name="gzf_cart_cap">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Terms :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row13['gzf_cartridges_delivery_trm']; ?>" id="gzf_cart_delvr" class="form-control" placeholder="Delivery Terms" name="gzf_cart_delvr">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row13['gzf_cartridges_warenty_doc']; ?>" id="gzf_cart_warnty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission " name="gzf_cart_warnty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row13['gzf_cartridges_warenty_doi']; ?>" id="gzf_cart_warnty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="gzf_cart_warnty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row13['gzf_cartridges_weight']; ?>" id="gzf_cart_wight" class="form-control" placeholder="Enter Weight" name="gzf_cart_wight">
		                            </div>
		                        </div>
									<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="gzf_cart_descrp" id="gzf_cart_descrp"  rows="4" cols="121"class="form-control" placeholder="Enter Description" ><?php echo $row13['description']; ?></textarea>
		                            </div>
		                        </div>
								    
								<!--<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5"> Discount :</label>
									<div class="col-md-9">
		                            	<input type="text" value="" id="projectinput5" class="form-control" placeholder="Enter Product Discount" name="company">
		                            </div>
		                        </div>-->
								
								</div>
								<?php } ?>
								<!-- span  hld -->
								<?php 
								if($_GET['series_name']=='HLD'){
									
								$query2=mysqli_query($conn,"select * from tbl_product_hld where product_model='$model'");
								$row14=mysqli_fetch_array($query2);
								?>  
								
								
								
								
								<div id="HLD">
								<input type="hidden" name="action" value="HLD" id="gem">
								

			                    								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row14['product_model']; ?>" id="hld_prd_model" class="form-control" disabled placeholder="Enter Product Model" name="hld_prd_model">
										<?php /* <input type="hidden" value="<?php echo $row14['product_model']; ?>" id="hld_prd_models" name="hld_prd_model"> */ ?>
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row14['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2"><strong>Desiccant Activated Alumina(50&deg;c)</strong><br>IS2825 code of Construction Price :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row14['hld_daa_is2825cc']; ?>" id="hld_desiccantalumina_50" class="form-control" placeholder="Enter IS2825 code of Construction Price " name="hld_desiccantalumina_50">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3"><strong>Desiccant Activated Alumina(50&deg;c)</strong><br>ASME sec VIII 1 code of Construction Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row14['hld_daa_asme_cc']; ?>" id="hld_construction_price" class="form-control" placeholder="Enter ASME sec VIII 1 code of Construction Price" name="hld_construction_price">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4"><strong>Desiccant molecular sieve</strong><br>IS2825 code of Construction Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row14['hld_dms_is2825_cc']; ?>" id="hld_is2825" class="form-control" placeholder="Enter IS2825 code of Construction Price" name="hld_is2825">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5"><strong>Desiccant molecular sieve</strong><br>ASME sec VIII 1 code of Construction Price :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row14['hld_dms_asme_cc']; ?>" id="hld_molecular_construct" class="form-control" placeholder="Enter ASME sec VIII 1 code of Construction Price " name="hld_molecular_construct">	
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Air flow :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row14['hld_air_flow_cfm']; ?>" id="hld_airfl" class="form-control" placeholder="Enter Air flow" name="hld_airfl">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5"> Inlet/Outlet flg :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row14['hld_inlet_outlet_flg']; ?>" id="hld_inlet" class="form-control" placeholder="Enter Inlet/Outlet flg" name="hld_inlet">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Desiccant Qty/tower :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row14['hld_desiccant_qty']; ?>" id="hld_qty" class="form-control" placeholder="Enter Desiccant Qty/tower" name="hld_qty">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Terms :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row14['hld_delivery_trm']; ?>" id="hld_delvry" class="form-control" placeholder="Enter Delivery Terms" name="hld_delvry">
		                            </div>
		                        </div>
								    
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row14['hld_warnty_doc']; ?>" id="hld_warenty_doc" class="form-control" placeholder="Enter Warranty Doc" name="hld_warenty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row14['hld_warenty_doi']; ?>" id="hld_warnty_doi" class="form-control" placeholder="Enter Warranty Doi" name="hld_warnty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Working presssure :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row14['hld_wrk_pressure']; ?>" id="gzf_wrk_press" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="gzf_wrk_press">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row14['hld_weight']; ?>" id="hld_wight" class="form-control" placeholder="Enter Product Weight" name="hld_wight">
		                            </div>
		                        </div>
									<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="descrp" id="descrp" value="<?php echo $row14['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
		                            </div>
		                        </div>
								</div>
	
	<?php } ?>
						<!-- span  hln -->
                                   <?php 
								if($_GET['series_name']=='HLN'){
								$query2=mysqli_query($conn,"select * from tbl_product_hln where product_model='$model'");
								$row15=mysqli_fetch_array($query2);
								?>  
								
								
								
								<div id="HLN">
								<input type="hidden" name="action" value="HLN" id="gem">
								
										<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row15['product_model']; ?>" id="hln_prd_model" class="form-control" disabled placeholder="Enter Product Model" name="hln_prd_model">
										<?php /* <input type="hidden" value="<?php echo $row15['product_model']; ?>" id="hld_prd_models" name="hld_prd_model"> */ ?>
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row15['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2"><strong>Desiccant Activated Alumina(50&deg;c)</strong><br>IS2825 code of Construction Price :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row15['hln_daa_is2825_price']; ?>" id="hln_is2825" class="form-control" placeholder="Enter IS2825 code of Construction Price" name="hln_is2825">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3"><strong>Desiccant Activated Alumina(65&deg;c)</strong><br>IS2825 code of Construction Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row15['hln_dms_is2825_price']; ?>" id="hln_activated_65" class="form-control" placeholder="Enter IS2825 code of Construction Price" name="hln_activated_65">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Air flow :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row15['hln_airflow_cfm']; ?>" id="hln_airflows" class="form-control" placeholder="Enter Air flow" name="hln_airflows">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5"> Inlet/Outlet flg :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row15['hln_in_out_flg']; ?>" id="hln_inlet" class="form-control" placeholder="Enter Inlet/Outlet flg" name="hln_inlet">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Desiccant Qty/tower :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row15['hln_dessiccant_qty']; ?>" id="hln_desicant_qty" class="form-control" placeholder="Enter Desiccant Qty/tower" name="hln_desicant_qty">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Terms :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row15['hln_delivery_trm']; ?>" id="hln_delvry" class="form-control" placeholder="Enter Delivery Terms" name="hln_delvry">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row15['hln_wrnty_doc']; ?>" id="hln_wrnty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="hln_wrenty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row15['hln_wrnty_doi']; ?>" id="hln_wrnty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="hln_wrenty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Work Pressure :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row15['hln_wrk_pressure']; ?>" id="hln_wrk_pres" class="form-control" placeholder="Enter Work Pressure" name="hln_wrk_pres">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Rated Condition Inlet Temperature :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row15['hn_inlet_temp']; ?>" id="hln_rate_conditioninlet" class="form-control" placeholder="Enter Rated Condition Inlet Temperature" name="hln_rate_conditioninlet">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Rated Condition Atmospheric Temperature :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row15['hn_admos_dew_pt']; ?>" id="hln_rate_conditiontemp" class="form-control" placeholder="Rated Condition Atmospheric Temperature" name="hln_rate_conditiontemp">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row15['hln_weight']; ?>" id="hln_wight" class="form-control" placeholder="Enter Product Weight" name="hln_wight">
		                            </div>
		                        </div>
			                    	<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="descrp" id="descrp" value="<?php echo $row15['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
		                            </div>
		                        </div>
								
								</div>
								<?php }?>
								
								<!-- span  Hp filter -->
<?php 
								if($_GET['series_name']=='HP FILTER'){
								$query2=mysqli_query($conn,"select * from tbl_product_hp_filter where product_model='$model'");
								$row16=mysqli_fetch_array($query2);
								?>  
								
								
								
								<div id="HP_Filter">
								<input type="hidden" name="action" value="HP_Filter" id="gem">
								
			                    								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row16['product_model']; ?>" id="hp_prd_modl" class="form-control" disabled placeholder="Enter Product Model" name="hp_prd_modl">
										<?php /* <input type="hidden" value="<?php echo $row16['product_model']; ?>" id="hp_prd_modls" name="hp_prd_modl"> */ ?>
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row16['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">General Purpose Filters Price :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row16['hp_filter_gp']; ?>" id="hp_gnrl_filter" class="form-control" placeholder="Enter General Purpose Filters Price" name="hp_gnrl_filter">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Micro Oil Removing Filter Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row16['hp_filter_zp']; ?>" id="hp_gndrl_oil" class="form-control" placeholder="Enter ASME sec VIII 1 code of Construction Price" name="hp_gndrl_oil">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Sub Micro Oil Removing Filter Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row16['hp_filter_zo']; ?>" id="hp_sub_gndrl_oil" class="form-control" placeholder="Enter Sub Micro Oil Removing Filter Price" name="hp_sub_gndrl_oil">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Activated carbon filters :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row16['hp_filter_zc']; ?>" id="hp_active_car" class="form-control" placeholder="Enter Activated carbon filters" name="hp_active_car">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery terms :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row16['hp_filter_delivery_trm']; ?>" id="hp_dlevir" class="form-control" placeholder="Enter Delivery terms " name="hp_dlevir">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row16['hp_filter_warenty_doc']; ?>" id="hp_warnty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="hp_warnty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row16['hp_filter_warenty_doi']; ?>" id="hp_warnty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="hp_warnty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Working pressure :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row16['hp_filter__wrk_pressure']; ?>" id="hp_wrk_prsur" class="form-control" placeholder="Enter Working pressure" name="hp_wrk_prsur">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row16['hp_filter_weight']; ?>" id="hp_wght" class="form-control" placeholder="Enter Product Weight" name="hp_wght">
		                            </div>
		                        </div>
									<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="descrp" id="descrp" value="<?php echo $row16['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
		                            </div>
		                        </div>
								</div>
								<?php } ?>
								<!-- span  Hp filter Element -->
<?php 
								if($_GET['series_name']=='HP FILTER ELEMENT'){
									
								$query2=mysqli_query($conn,"select * from tbl_product_hp_filter_element where product_model='$model'");
								$row17=mysqli_fetch_array($query2);
								?>  
								
								
								
								
								<div id="HP FILTER ELEMENT">
								<input type="hidden" name="action" value="HP_FILTER_ELEMENT" id="gem">
								
			                    								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row17['product_model']; ?>" id="hp_ele_prdt_model" class="form-control" disabled placeholder="Enter Product Model" name="hp_ele_prdt_model">
										<?php /* <input type="hidden" value="<?php echo $row17['product_model']; ?>" id="hp_ele_prdt_models" name="hp_ele_prdt_model"> */ ?>
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row17['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">General Purpose Filter element Price :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row17['hp_filter_ele_gpe']; ?>" id="hp_ele_gen_pur" class="form-control" placeholder="Enter IGeneral Purpose Filter element Price" name="hp_ele_gen_pur">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Micro Oil Removing Filter element Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row17['hp_filter_ele_zpe']; ?>" id="hp_ele_mic_oil" class="form-control" placeholder="Enter Micro Oil Removing Filter element Price" name="hp_ele_mic_oil">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Sub Micro Oil Removing Filter element Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row17['hp_filter_ele_zoe']; ?>" id="hp_ele_sub_mic_oil" class="form-control" placeholder="Enter Sub Micro Oil Removing Filter element Price" name="hp_ele_sub_mic_oil">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Activated carbon filter element :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row17['hp_filter_ele_zce']; ?>" id="hp_ele_act_carbon" class="form-control" placeholder="Enter Activated carbon filter element " name="hp_ele_act_carbon">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery terms :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row17['hp_filter_ele_delivery_trm']; ?>" id="hp_ele_deli" class="form-control" placeholder="Enter Delivery terms " name="hp_ele_deli">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row17['hp_filter_ele_warenty_doc']; ?>" id="hp_ele_wrnt_doc" class="form-control" placeholder="Enter Warranty Doc" name="hp_ele_wrnt_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row17['hp_filter_ele_warenty_doi']; ?>" id="hp_ele_wrnt_doi" class="form-control" placeholder="Enter Warranty Doi" name="hp_ele_wrnt_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Working pressure :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row17['hp_filter_ele_wrk_presure']; ?>" id="hp_ele_wrk_pres" class="form-control" placeholder="Enter Working pressure" name="hp_ele_wrk_pres">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row17['hp_filter_ele_weight']; ?>" id="hp_ele_wgt" class="form-control" placeholder="Enter Product Weight" name="hp_ele_wgt">
		                            </div>
		                        </div>
									<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="descrp" id="descrp" value="<?php echo $row17['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
		                            </div>
		                        </div>
								</div>
								<?php } ?>
								<!-- span  mst -->
<?php 
								if($_GET['series_name']=='MST'){
								$query2=mysqli_query($conn,"select * from tbl_product_mst where product_model='$model'");
								$row18=mysqli_fetch_array($query2);
								?>  
								
								
								
								<div id="MST" >
								<input type="hidden" name="action" value="MST"  id="gem">
								
			                    								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row18['product_model']; ?>" id="mst_prdt_model" class="form-control" disabled placeholder="Enter Product Model" name="mst_prdt_model">
										<?php /* <input type="hidden" value="<?php echo $row18['product_model']; ?>" id="mst_prdt_models" name="mst_prdt_model"> */ ?>
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row18['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Baffle type Price :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row18['mst_mv_baffle']; ?>" id="mst_baff" class="form-control" placeholder="Enter Baffle type Price " name="mst_baff">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Demister Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row18['mst_demister']; ?>" id="mst_dem" class="form-control" placeholder="Enter Demister Price Price" name="mst_dem">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery terms :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row18['mst_delivery_trm']; ?>" id="mst_deli" class="form-control" placeholder="Enter Delivery termsPrice " name="mst_deli">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row18['mst_warenty_doc']; ?>" id="mst_wrnt_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="mst_wrnt_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row18['mst_warenty_doi']; ?>" id="mst_wrnt_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="mst_wrnt_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Working pressure :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row18['mst_wrk_presure']; ?>" id="mst_wrk_pres" class="form-control" placeholder="Enter Working pressure" name="mst_wrk_pres">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row18['mst_weight']; ?>" id="mst_wgt" class="form-control" placeholder="Enter Product Weight" name="mst_wgt">
		                            </div>
		                        </div>
									<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="descrp" id="descrp" value="<?php echo $row18['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
		                            </div>
		                        </div>
								</div>
								
								<?php } ?>
								<!-- span  nxg_nexgen -->
<?php 
								if($_GET['series_name']=='NXG'){
								$query2=mysqli_query($conn,"select * from tbl_product_nxg_nex_gen where product_model='$model'");
								$row19=mysqli_fetch_array($query2);
								?>  
								
								
								
								<div id="NXG">
								<input type="hidden" name="action" value="NXG" id="gem">
								
			                    								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row19['product_model']; ?>" id="nxg_prdt_model" class="form-control" disabled placeholder="Enter Product Model" name="nxg_prdt_model">
										<?php /* <input type="hidden" value="<?php echo $row19['product_model']; ?>" id="nxg_prdt_models" name="nxg_prdt_model"> */ ?>
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Air cooled R134a Price :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row19['nxg_air_cooled_r134a']; ?>" id="nxg_ac_r134a" class="form-control" placeholder="Enter Air cooled R134a Price " name="nxg_ac_r134a">
	                            	</div>
		                        </div>
<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row19['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Air cooled R404a Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row19['nxg_air_cooled_r404a']; ?>" id="nxg_ac_r404a" class="form-control" placeholder="Enter Air cooled R404a Price" name="nxg_ac_r404a">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Air cooled R407c Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row19['nxg_air_cooled_r407c']; ?>" id="nxg_ac_r407c" class="form-control" placeholder="Enter Air cooled R407c Price" name="nxg_ac_r407c">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Capacity :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row19['nxg_capacity_cfm']; ?>" id="nxg_cap" class="form-control" placeholder="Enter Capacity" name="nxg_cap">
		                            </div>
		                        </div><div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Working Pressure :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row19['nxg_working_pressure']; ?>" id="nxg_wrk_pres" class="form-control" placeholder="Enter Working Pressure" name="nxg_wrk_pres">
		                            </div>
		                        </div><div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Air Connect in/out :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row19['nxg_air_connection_in_out']; ?>" id="nxg_ac_io" class="form-control" placeholder="Enter Air Connect in/out" name="nxg_ac_io">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Rate Power Kw :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row19['nxg_rate_power_kw']; ?>" id="nxg_rp_kw" class="form-control" placeholder="Enter Rate Power Kw" name="nxg_rp_kw">
		                            </div>
		                        </div><div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Delivery Terms :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row19['nxg_delivery_terms']; ?>" id="nxg_deli" class="form-control" placeholder="Enter Delivery Terms" name="nxg_deli">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Electrical Connection 220v/1phase/50hz :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row19['nxg_electrical_connection_220v']; ?>" id="nxg_ec_220v" class="form-control" placeholder="Enter Electrical Connection 220v/1phase/50hz" name="nxg_ec_220v">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Electrical Connection 415v/3phase/50hz :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row19['nxg_electrical_connection_415v']; ?>" id="nxg_ec_415v" class="form-control" placeholder="Enter Electrical Connection 415v/3phase/50hz " name="nxg_ec_415v">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row19['nxg_warrenty_doc']; ?>" id="nxg_wrnt_doc" class="form-control" placeholder="Enter Warranty Doc" name="nxg_wrnt_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row19['nxg_warrenty_doi']; ?>" id="nxg_wrnt_doi" class="form-control" placeholder="Enter Warranty Doi" name="nxg_wrnt_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row19['nxg_weight']; ?>" id="nxg_wght" class="form-control" placeholder="Enter Product Weight" name="nxg_wght">
		                            </div>
		                        </div>
									<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="descrp" id="descrp" value="<?php echo $row19['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
		                            </div>
		                        </div>
								</div>
								<?php } ?>
								
								<!-- span  rad -->
<?php 
								if($_GET['series_name']=='RAD'){
							
								$query2=mysqli_query($conn,"select * from tbl_product_rad where product_model='$model'");
								$row20=mysqli_fetch_array($query2);
								?>  
								
								
								<div id="RAD">
								<input type="hidden" name="action" value="RAD" id="gem">
								
			                    								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row20['product_model']; ?>" id="rad_prd_model" class="form-control" disabled placeholder="Enter Product Model" name="rad_prd_model">
										<?php /* <input type="hidden" value="<?php echo $row20['product_model']; ?>" id="var_prd_models" name="var_prd_model"> */ ?>
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row20['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Water cooled Refrigerant R407c Price :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row20['rad_mv_water_cooled_ref_r407c']; ?>" id="rad_wcr_r407" class="form-control" placeholder="Enter Water cooled Refrigerant R407c Price " name="rad_wcr_r407">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Capacity :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row20['rad_mv_capacity']; ?>" id="rad_cap" class="form-control" placeholder="Enter Capacity" name="rad_cap">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">In/out :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row20['rad_mv_in_out']; ?>" id="rad_io" class="form-control" placeholder="Enter In/out" name="rad_io">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Rate powered Electrical Connection ANSI 415/3/50hz  :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row20['rad_mv_rate_pow_ele_conn_415_3a']; ?>" id="rad_rpec_415" class="form-control" placeholder="Enter Rate powered Electrical Connection ANSI 415/3/50hz" name="rad_rpec_415">
		                            </div>
		                        </div><div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Delivery Terms :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row20['rad_delivery_terms']; ?>" id="rad_deli" class="form-control" placeholder="Enter Delivery Terms" name="rad_deli">
		                            </div>
		                        </div><div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Working Pressure :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row20['rad_wrk_pressur']; ?>" id="rad_wrk_pres" class="form-control" placeholder="Enter Working Pressure" name="rad_wrk_pres">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row20['rad_warrenty_doc']; ?>" id="rad_wrnt_doc" class="form-control" placeholder="Enter Warranty Doc" name="rad_wrnt_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row20['rad_warrenty_doi']; ?>" id="rad_wrnt_doi" class="form-control" placeholder="Enter Warranty Doi" name="rad_wrnt_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row20['rad_weight']; ?>" id="rad_wgt" class="form-control" placeholder="Enter Product Weight" name="rad_wgt">
		                            </div>
		                        </div>
									<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="descrp" id="descrp" value="<?php echo $row20['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
		                            </div>
		                        </div>
								</div>
								<?php } ?>
								<!-- span  scb -->
<?php 
								if($_GET['series_name']=='SCB'){
								$query2=mysqli_query($conn,"select * from tbl_product_scb where product_model='$model'");
								$row21=mysqli_fetch_array($query2);
								?>  
								
								<div id="SCB" >
								<input type="hidden" name="action" value="SCB" id="gem">
								
			                    								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row21['product_model']; ?>" id="scb_prd_model" class="form-control" disabled placeholder="Enter Product Model" name="scb_prd_model">
										<?php /* <input type="hidden" value="<?php echo $row21['product_model']; ?>" id="scb_prd_models" name="scb_prd_model"> */ ?>
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row21['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Low temperature Price :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row21['scb_low_temp']; ?>" id="scb_low" class="form-control" placeholder="Enter Low temperature Price " name="scb_low">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">High temperature Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row21['scb_high_temp']; ?>" id="scb_high" class="form-control" placeholder="Enter High temperature Price" name="scb_high">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Motor :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row21['scb_motor']; ?>" id="scb_moto" class="form-control" placeholder="Enter Motor" name="scb_moto">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">In/out sizes :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row21['scb_in_out_size']; ?>" id="scb_io" class="form-control" placeholder="Enter In/out sizes" name="scb_io">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Water flow rate :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row21['scb_water_flow']; ?>" id="scb_wfr" class="form-control" placeholder="Enter Water flow rate" name="scb_wfr">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Delivery Terms :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row21['scb_delivery_trm']; ?>" id="scb_deli" class="form-control" placeholder="Enter Delivery Terms" name="scb_deli">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Outlet water temp :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row21['scb_outlet_temp']; ?>" id="scb_out_water" class="form-control" placeholder="Enter Outlet water temp" name="scb_out_water">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row21['scb_warenty_doc']; ?>" id="scb_wrnt_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="scb_wrnt_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row21['scb_warenty_doi']; ?>" id="scb_wrnt_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="scb_wrnt_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row21['scb_weight']; ?>" id="scb_wgt" class="form-control" placeholder="Enter Product Weight" name="scb_wgt">
		                            </div>
		                        </div>
									<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="descrp" id="descrp" value="<?php echo $row21['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
		                            </div>
		                        </div>
								</div>
								<?php } ?>
								<!-- span  sct -->
<?php 
								if($_GET['series_name']=='SCT'){
								$query2=mysqli_query($conn,"select * from tbl_product_sct where product_model='$model'");
								$row22=mysqli_fetch_array($query2);
								?>  
																						
															
								<div id="SCT">
								<input type="hidden" name="action" value="SCT" id="gem">
								
			                    								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row22['product_model']; ?>" id="sct_prd_model" class="form-control" disabled placeholder="Enter Product Model" name="sct_prd_model">
										<?php /* <input type="hidden" value="<?php echo $row22['product_model']; ?>" id="sct_prd_models" name="sct_prd_model"> */ ?>
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row22['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Low temperature fills Price :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row22['sct_low_temp_price']; ?>" id="sct_low" class="form-control" placeholder="Low temperature fills Price" name="sct_low">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">High temperature fills Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row22['sct_high_temp_price']; ?>" id="sct_high" class="form-control" placeholder="High temperature fills Price" name="sct_high">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">In/out sizes :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row22['sct_in_out_size']; ?>" id="sct_io" class="form-control" placeholder="Enter In/out sizes" name="sct_io">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Water flow rate :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row22['sct_water_rate']; ?>" id="sct_wfr" class="form-control" placeholder="Enter Water flow rate" name="sct_wfr">
		                            </div>
		                        </div>
								
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Motor :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row22['sct_motor']; ?>" id="sct_moto" class="form-control" placeholder="Enter Motor" name="sct_moto">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Delivery Terms :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row22['sct_delvery_trm']; ?>" id="sct_deli" class="form-control" placeholder="Enter Delivery Terms" name="sct_deli">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Outlet water temp :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row22['sct_outlet_temp']; ?>" id="sct_out_water" class="form-control" placeholder="Enter Outlet water temp" name="sct_out_water">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row22['sct_warenty_doc']; ?>" id="sct_wrnt_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="sct_wrnt_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row22['sct_warenty_doi']; ?>" id="sct_wrnt_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="sct_wrnt_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row22['sct_weight']; ?>" id="sct_wgt" class="form-control" placeholder="Enter Product Weight" name="sct_wgt">
		                            </div>
		                        </div>
									<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="descrp" id="descrp" value="<?php echo $row22['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
		                            </div>
		                        </div>
								</div>
								
								<?php } ?>
								<!-- span  spd -->
<?php 
								if($_GET['series_name']=='SPD'){
								$query2=mysqli_query($conn,"select * from tbl_product_spd where product_model='$model'");
								$row23=mysqli_fetch_array($query2);
								?>  
								 
								
								<div id="SPD" >
								<input type="hidden" name="action" value="SPD" id="gem">
								
			                    								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row23['product_model']; ?>" id="spd_prd_model" class="form-control" disabled placeholder="Enter Product Model" name="spd_prd_model">
										<?php /* <input type="hidden" value="<?php echo $row23['product_model']; ?>" id="spd_prd_models" name="spd_prd_model"> */ ?>
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row23['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Molecular sieve(65&deg;c)/Price with Filter :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row23['spd_moleculer_sieve_pric']; ?>" id="spd_ms" class="form-control" placeholder="Enter Molecular sieve(65&deg;c)/Price with Filter" name="spd_ms">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Air Flow :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row23['spd_air_flow']; ?>" id="spd_air" class="form-control" placeholder="Enter Air Flow" name="spd_air">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Inlet/outlet :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row23['spd_inlet_outlet']; ?>" id="spd_inlet_out" class="form-control" placeholder="Enter Inlet/outlet sizes " name="spd_inlet_out">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Delivery Terms :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row23['spd_delivery_trm']; ?>" id="spd_deli" class="form-control" placeholder="Enter Delivery Terms" name="spd_deli">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row23['spd_warnty_doc']; ?>" id="spd_wrnt_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="spd_wrnt_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row23['spd_warnty_doi']; ?>" id="spd_wrnt_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="spd_wrnt_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Inlet Temperature :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row23['spd_inlet_temp']; ?>" id="spd_in" class="form-control" placeholder="Enter Inlet Temperature" name="spd_in">
		                            </div>
		                        </div>
								
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Atmospheric dew point :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row23['spd_atmospheric_dew_pt']; ?>" id="spd_atmo" class="form-control" placeholder="Enter Atmospheric dew point" name="spd_atmo">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Accessories :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row23['spd_access']; ?>" id="spd_acc" class="form-control" placeholder="Enter Accessories" name="spd_acc">
		                            </div>
		                        </div>
		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Work Space :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row23['spd_wrk_pressure']; ?>" id="spd_wrkprs" class="form-control" placeholder="Enter Accessories" name="spd_wrkprs">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row23['spd_weight']; ?>" id="spd_wgt" class="form-control" placeholder="Enter Product Weight" name="spd_wgt">
		                            </div>
		                        </div>
									<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="descrp" id="descrp" value="<?php echo $row23['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
		                            </div>
		                        </div>
								</div>
								<?php } ?>
								
								<!-- span  var -->
<?php 
								if($_GET['series_name']=='VAR'){
								$query2=mysqli_query($conn,"select * from tbl_product_var where product_model='$model'");
								$row24=mysqli_fetch_array($query2);
								?>  
								
								<div  id="VAR">
								<input type="hidden" name="action" value="VAR" id="gem">
								 <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row24['product_model']; ?>" id="var_prd_model" class="form-control" disabled placeholder="Enter Product Model" name="var_prd_model">
										<?php /* <input type="hidden" value="<?php echo $row24['product_model']; ?>" id="var_prd_models" name="var_prd_model"> */ ?>
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row24['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Model Variance :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row24['var_ar_model_var']; ?>" id="var_modal_vari" class="form-control" placeholder="Enter Model Variance" name="var_modal_vari">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Working Pressure :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row24['var_ar_wrk_pressure']; ?>" id="var_wrkpressur" class="form-control" placeholder="Enter Working Pressure " name="var_wrkpressur">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Price :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row24['var_ar_price']; ?>" id="var_prc" class="form-control" placeholder="Enter Price" name="var_prc">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Capacity in ltrs :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row24['var_ar_capacity']; ?>" id="var_cap" class="form-control" placeholder="Enter Capacity in ltrs " name="var_cap">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Shell/Dish Thickness :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row24['var_ar_shell_thick']; ?>" id="var_shell" class="form-control" placeholder="Enter Shell/Dish Thickness" name="var_shell">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">In/Out Connection :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row24['var_ar_in_out']; ?>" id="var_inout" class="form-control" placeholder="Enter In/Out Connection" name="var_inout">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Hand/Man Hole :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row24['var_ar_hand']; ?>" id="var_hand" class="form-control" placeholder="Enter Hand/Man Hole" name="var_hand">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Delivery Terms :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row24['var_ar_delivery_trm']; ?>" id="var_delivr" class="form-control" placeholder="Enter Delivery Terms" name="var_delivr">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row24['var_warenty_doc']; ?>" id="var_warnty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="var_warnty_doc">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row24['var_warenty_doi']; ?>" id="var_warnty_doi" class="form-control" placeholder="Enter Warranty Date Of Commission" name="var_warnty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Moc/Coc :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row24['var_moc']; ?>" id="var_moc" class="form-control" placeholder="Enter Moc/Coc" name="var_moc">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row24['var_weight']; ?>" id="var_wight" class="form-control" placeholder="Enter Product Weight" name="var_wight">
		                            </div>
		                        </div>
			                    	<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="descrp" id="descrp" value="<?php echo $row24['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
		                            </div>
		                        </div>
								</div>
								<?php } ?>
								<!-- span  vxs -->
<?php 
								if($_GET['series_name']=='VXS'){
								$query2=mysqli_query($conn,"select * from tbl_product_vxs where product_model='$model'");
								$row25=mysqli_fetch_array($query2);
								?>  
								 
								
								<div  id="VXS">
								<input type="hidden" name="action" value="VXS"  id="gem">
								
								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row25['product_model']; ?>" id="vxs_prd_model" class="form-control" disabled placeholder="Enter Product Model" name="vxs_prd_model">
										<?php /*<input type="hidden" value="<?php echo $row24['product_model']; ?>" id="vxs_prd_models" name="vxs_prd_model"> */ ?>
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row25['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Vartex Separator Drain Value Price :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row25['vxs_vartex_separator']; ?>" id="vxs_vartexdrain" class="form-control" placeholder="Enter Vartex Separator Drain Value Price" name="vxs_vartexdrain">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Pipe Size :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row25['vxs_pipe_size']; ?>" id="vxs_pipe" class="form-control" placeholder="Enter Pipe Size " name="vxs_pipe">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Line pressure Weight :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row25['vxs_line_weight']; ?>" id="vxs_line_pressur" class="form-control" placeholder="Enter Line pressure Weight" name="vxs_line_pressur">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Capacity in Cfm :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row25['vxs_capacity']; ?>" id="vxs_cap" class="form-control" placeholder="Enter Capacity in Cfm" name="vxs_cap">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">In/Out :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row25['vxs_in_out']; ?>" id="vxs_inout" class="form-control" placeholder="Enter In/Out Connection" name="vxs_inout">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Delivery Terms :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row25['vxs_delivery_trm']; ?>" id="vxs_delivry" class="form-control" placeholder="Enter Delivery Terms" name="vxs_delivry">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row25['vxs_warenty_doc']; ?>" id="vxs_warnty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="vxs_warnty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row25['vxs_warenty_doi']; ?>" id="vxs_warnty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="vxs_warnty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Working Pressure :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row25['vxs_wrk_presure']; ?>" id="vxs_wrk_prssur" class="form-control" placeholder="Enter Working Pressure" name="vxs_wrk_prssur">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row25['vxs_weight']; ?>" id="vxs_wight" class="form-control" placeholder="Enter Product Weight" name="vxs_wight">
		                            </div>
		                        </div>
									<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="descrp" id="descrp" value="<?php echo $row25['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
		                            </div>
		                        </div>
								</div>
								<?php } ?>
								<!-- span  wah -->
<?php 
								if($_GET['series_name']=='WAH'){
									echo"select * from tbl_product_wah where product_model='$model'";
								$query2=mysqli_query($conn,"select * from tbl_product_wah where product_model='$model'");
								$row26=mysqli_fetch_array($query2);
								?>  
								
								<div id="WAH">
								<input type="hidden" name="action" value="WAH" id="gem">
								
								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row26['product_model']; ?>" id="wah_prd_model" class="form-control" disabled placeholder="Enter Product Model" name="wah_prd_model">
										 <?php /*<input type="hidden" value="<?php echo $row26['product_model']; ?>" id="wah_prd_models" name="wah_prd_model"> */ ?>
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row26['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">With Moisture seprator Price :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row26['wah_with_moisture']; ?>" id="wah_moisture" class="form-control" placeholder="Enter With Moisture seprator Price" name="wah_moisture">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Capacity Cfm :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row26['wah_capacity']; ?>" id="wah_capacity" class="form-control" placeholder="Enter Capacity Cfm" name="wah_capacty">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Air connection in/out Bsp :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row26['wah_ac_bsp']; ?>" id="wah_aircon" class="form-control" placeholder="Enter Air connection in/out Bsp" name="wah_aircon">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Cooling Water in/out :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row26['wah_cooling_water']; ?>" id="wah_coolng" class="form-control" placeholder="Enter Cooling Water in/out" name="wah_coolng">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Water Flow Rate LPM :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row26['wah_water_flow_lpm']; ?>" id="wah_water_rate" class="form-control" placeholder="Enter Water Flow Rate LPM " name="wah_water_rate">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Shell dia :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row26['wah_shelldia']; ?>" id="wah_shelldia" class="form-control" placeholder="Enter Shell dia" name="wah_sheldia">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Delivery Terms :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row26['wah_delivery_trm']; ?>" id="wah_delivrytrm" class="form-control" placeholder="Enter Delivery Terms" name="wah_delivrytrm">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row26['wah_warenty_doc']; ?>" id="wah_warranty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="wah_warranty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row26['wah_warenty_doi']; ?>" id="wah_warranty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="wah_warranty_doi">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Working Pressure :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row26['wah_wrk_pressure']; ?>" id="wah_wrkpressur" class="form-control" placeholder="Enter Working Pressure" name="wah_wrkpressur">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row26['wah_weight']; ?>" id="wah_wight" class="form-control" placeholder="Enter Product Weight" name="wah_wight">
		                            </div>
		                        </div>
			                    	<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="descrp" id="descrp" value="<?php echo $row26['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
		                            </div>
		                        </div>
								</div>
								<?php } ?>
<?php 
								if($_GET['series_name']=='GZ'){
								$query2=mysqli_query($conn,"select * from tbl_product_gz_gfv where product_model='$model'");
								$row27=mysqli_fetch_array($query2);
								?>  
								
								
								<!-- span  gz -->
								<div id="GZ" >
								<input type="hidden" name="action" value="GZ" id="gem">
								
			                    <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row27['product_model']; ?>" id="gz_prd_model" class="form-control"  disabled placeholder="Enter Product Model" name="gz_prd_model">
										<?php /*<input type="hidden" value="<?php echo $row27['product_model']; ?>" id="gz_prd_models" name="gz_prd_model"> */ ?>
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row27['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2"> Price :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row27['gz_gfv_price']; ?>" id="gz_prc" class="form-control" placeholder="Enter Price" name="gz_prc">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Valve opening intervel :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row27['gz_gfv_valve_opn_intervel']; ?>" id="gz_valveopen" class="form-control" placeholder="Enter Valve opening intervel" name="gz_valveopen">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Vale Discharge :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row27['gz_gfv_valve_dischrg']; ?>" id="gz_valvedischrg" class="form-control" placeholder="Enter Vale Discharge" name="gz_valvedischrg">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Power consumption :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row27['gz_gfv_pwr_consum']; ?>" id="gff_pwrcon" class="form-control" placeholder="Enter Cooling Water in/out" name="gff_pwrcon">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Max operating Temperature:</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row27['gz_gfv_max_opt_temp']; ?>" id="gz_max_temp" class="form-control" placeholder="Enter Water Flow Rate LPM " name="gz_max_temp">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Max operating pressure :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row27['gz_gfv_max_opt_presure']; ?>" id="gz_max_oper" class="form-control" placeholder="Enter Shell dia" name="gz_max_oper">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Input/Output ports :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row27['gz_gfv_io_ports']; ?>" id="gz_inout_port" class="form-control" placeholder="Enter Shell dia" name="gz_inout_port">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row27['gz_gfv_warenty_doc']; ?>" id="gz_warranty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="gz_warranty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row27['gz_gfv_warenty_doi']; ?>" id="gz_warranty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="gz_warranty_doi">
		                            </div>
		                        </div>
								
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Delivery Terms :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row27['gz_gfv_deliver_trm']; ?>" id="gz_delivr" class="form-control" placeholder="Enter Delivery Terms" name="gz_delivr">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row27['gz_gfv_weight']; ?>" id="gz_wight" class="form-control" placeholder="Enter Product Weight" name="gz_wight">
		                            </div>
		                        </div>
									<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="descrp" id="descrp" value="<?php echo $row27['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
		                            </div>
		                        </div>
								</div>
								<?php } ?>
								<!-- span  gfv -->
                                 <?php 
								if($_GET['series_name']=='GFV'){
									
								$query2=mysqli_query($conn,"select * from tbl_product_gz_gfv where product_model='$model'");
								$row28=mysqli_fetch_array($query2);
								?>  
								
								
								<div id="GFV">
								<input type="hidden" name="action" value="GFV" id="gem">
								
			                   <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row28['product_model']; ?>" id="gzf_prd_model" class="form-control" placeholder="Enter Product Model" name="gzf_prd_model">
										<?php /*<input type="hidden" value="<?php echo $row28['product_model']; ?>" id="gzf_prd_modeles" name="gzf_prd_modelm"> */ ?>
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row28['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2"> Price :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row28['gz_gfv_price']; ?>" id="gzf_prc" class="form-control" placeholder="Enter Price" name="gzf_prc">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Valve opening intervel :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row28['gz_gfv_valve_opn_intervel']; ?>" id="gzf_valveopen" class="form-control" placeholder="Enter Valve opening intervel" name="gzf_valveopen">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Vale Discharge :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row28['gz_gfv_valve_dischrg']; ?>" id="gzf_valvedischrg" class="form-control" placeholder="Enter Vale Discharge" name="gzf_valvedischrg">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Power consumption :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row28['gz_gfv_pwr_consum']; ?>" id="gz_pwrcon" class="form-control" placeholder="Enter Cooling Water in/out" name="gzf_pwrcon">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Max operating Temperature:</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row28['gz_gfv_max_opt_temp']; ?>" id="gzf_max_temp" class="form-control" placeholder="Enter Water Flow Rate LPM " name="gzf_max_temp">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Max operating pressure :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row28['gz_gfv_max_opt_presure']; ?>" id="gzf_max_oper" class="form-control" placeholder="Enter Shell dia" name="gzf_max_oper">
		                            </div>
		                        </div>
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Input/Output ports :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row28['gz_gfv_io_ports']; ?>" id="gzf_inout_port" class="form-control" placeholder="Enter Shell dia" name="gzf_inout_port">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row28['gz_gfv_warenty_doc']; ?>" id="gzf_warranty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="gzf_warranty_doc">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row28['gz_gfv_warenty_doi']; ?>" id="gzf_warranty_doi" class="form-control" placeholder="Enter Warranty Date Of Invoice" name="gzf_warranty_doi">
		                            </div>
		                        </div>
								
								<div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Delivery Terms :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row28['gz_gfv_deliver_trm']; ?>" id="gzf_delivr" class="form-control" placeholder="Enter Delivery Terms" name="gzf_delivr">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row28['gz_gfv_weight']; ?>" id="gzf_wght" class="form-control" placeholder="Enter Product Weight" name="gzf_wght">
		                            </div>
									
		                        </div>
									<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text" name="descrp" id="descrp" value="<?php echo $row28['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
		                            </div>
		                        </div>
								</div>
								<?php } ?>
								
							
							   <?php 
								if($_GET['series_name']=='2KD7'){
									
								$query2=mysqli_query($conn,"select * from tbl_product_2kd7 where product_model='$model'");
								$row29=mysqli_fetch_array($query2);
								?>  
				 <div id="2KD" style="display:none" >
								<input type="hidden" name="2kd_action">
								
								  	<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row29['product_model']; ?>" id="kd7_prd_model" class="form-control" placeholder="Enter Product Model" name="kd7_prd_model">
										<!--<input type="hidden" value="<?php echo $row29['product_model']; ?>" id="kd7_prd_model" name="kd7_prd_model">-->
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Sap code :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row29['sap_code']; ?>"  id="sapcode" class="form-control" placeholder="Enter Sapcode" name="sapcode">
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Air Cooled R134a Pirce :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row29['kd7_acr134a']; ?>" id="kd7_ac_r134" class="form-control" placeholder="Enter Air Cooled R134a Price" name="kd7_ac_r134">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Capacity :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row29['kd7_capcty']; ?>" id="kd7_cap" class="form-control" placeholder="Enter Capacity" name="kd7_cap">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Working Pressure :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row29['kd7_wrkpressur']; ?>" id="kd7_wrk_pressure" class="form-control" placeholder="Enter Working Pressure :" name="kd7_wrk_pressure">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Air Connection In/Out :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row29['kd7_ac_inout']; ?>" id="kd7_ac_io" class="form-control" placeholder="Enter Air Connection In/Out" name="kd7_ac_io">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Rate Power :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row29['kd7_rate_pwr']; ?>" id="kd7_pwr_cons" class="form-control" placeholder="Enter Rate Power" name="kd7_pwr_cons">
		                            </div>
		                        </div>

								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Terms :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row29['kd7_delvr']; ?>" id="kd7_delivery_times" class="form-control" placeholder="Enter Delivery Terms :" name="kd7_delivery_times">
		                            </div>
		                        </div>
							<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Electrical Connection 230v/1s/50Hz :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row29['kd7_elec_230v']; ?>" id="kd7_ec_230v" class="form-control" placeholder="Enter Electrical Connection 230v/1s/50Hz" name="kd7_ec_230v">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Electrical Connection 415v/3s/50Hz :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row29['kd7_elec_415v']; ?>" id="kd7_ec_415v" class="form-control" placeholder="Enter Electrical Connection 415v/3s/50Hz" name="kd7_ec_415v">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row29['kd7_warenty_doc']; ?>" id="kd7_warnty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="kd7_warnty_doc">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warrenty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row29['kd7_warenty_doi']; ?>" id="kd7_warnty_doi" class="form-control" placeholder="Enter Warrenty Date Of Invoice" name="kd7_warnty_doi">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row29['kd7_weigt']; ?>" id="kd7_weght" class="form-control" placeholder="Enter Product Weight" name="kd7_weght">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Air inlet temperature :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row29['kd7_air_inlet']; ?>" id="kd7_air" class="form-control" placeholder="Enter Air inlet temperature" name="kd7_air">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Dew point :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row29['kd7_dew_pt']; ?>" id="kd7_dew" class="form-control" placeholder="Enter Dew point" name="kd7_dew">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Ambient Temperature :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row29['kd7_ambinet']; ?>" id="kd7_ambient" class="form-control" placeholder="Enter Ambient Temperature" name="kd7_ambient">
		                            </div>
		                        </div>
								<!--<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Discount :</label>
									<div class="col-md-9">
		                            	<input type="text" id="projectinput5" class="form-control" placeholder="Enter Product discount" name="2kw_dscunt">
		                            </div>
		                        </div>-->
								  </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Descripition :</label>
									<div class="col-md-9">
		                            	<textarea type="text"  value="<?php echo $row29['descrip']; ?>"  name="descrp" id="descrp" value="<?php echo $row28['description']; ?>" rows="4" cols="121"class="form-control" placeholder="Enter Description" ></textarea>
		                            </div>
		                        </div>
								</div>
								<?php } ?>
							
							
  <div class="form-group col-md-12" style="text-align:center">		
  <span id="errors"  style="color:#ff0000;text-align:center"></span>
  </div>
   <div class="form-group col-md-12" style="text-align:center">	
   <span id="success"  style="color:#139c9b;text-align:center"></span></div>
                                                
	<div class="form-actions" style="float:right;">
                                    
	                           <!-- <button type="reset" class="btn btn-warning mr-1">
	                            	<i class="icon-cross2"></i> Cancel
	                            </button>-->
	                            <button type= "button" name="submit" class="btn btn-primary" id="product_submit"> 
	                                <i class="icon-check2"></i> update
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
    <!-- ////////////////////////////////////////////////////////////////////////////-->


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
    <script src="robust-assets/js/components/products/update.js"></script>
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