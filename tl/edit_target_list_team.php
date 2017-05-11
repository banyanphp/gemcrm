<?php
include 'dbconnect.php';
$id=$_GET['id'];
$sql=mysqli_query($conn,"select * from tbl_user_target_for_the_month where user_target_id=$id");
$row2=mysqli_fetch_array($sql);
$user_targer_year_id=$row2['user_targer_year_id'];
$user_target_month_id=$row2['user_target_month_id'];
 $n="select * from tbl_target_month where target_month_id='$user_target_month_id'";
$sql2=mysqli_fetch_array(mysqli_query($conn,$n));
$month_name=$sql2['month_name'];
 $year="select * from tbl_target where target_id='$user_targer_year_id'";
$year2=mysqli_fetch_array(mysqli_query($conn,$year));
$year_name=$year2['target_year'];

$user_target_user_code=$row2['user_target_user_code'];
 $n="select * from tbl_user where user_code='$user_target_user_code'";
$sql2=mysqli_fetch_array(mysqli_query($conn,$n));
$user_name=$sql2['user_name'];
$user_target_amount=$row2['user_target_amount'];
$user_target_dryer=$row2['user_target_dryer'];
$user_target_chiller=$row2['user_target_chiller'];
$user_target_cooler=$row2['user_target_cooler'];
$user_target_var=$row2['user_target_var'];
$user_target_small_products=$row2['user_target_small_products'];
$user_target_enquiry=$row2['user_target_enquiry'];
$user_target_campaign=$row2['user_target_campaign'];

?><!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="">
    <title>Target Team Month</title>
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
						
	                    <form class="form form-horizontal" id="add_target">
	                    	<div class="form-body">
	                    		<h4 class="form-section"><i class="icon-head"></i> Target for the year</h4>
			                    
	<div class="form-group row">
            <?php $team_id = $_SESSION['team_id'];
$qs=mysqli_query($conn,"select * from tbl_team_members where team_id='$team_id'"); ?>
                                            <label class="col-md-3 label-control">Year</label>
                                            <div class=" col-md-9">
								 <input type="text" id="year" class="form-control" placeholder="Enter amount" name="year" Value="<?php echo $year_name; ?>" disabled>

                                            </div>
                                        </div>
		
<div class="form-group row">
                                            <label class="col-md-3 label-control">Select Team Members</label>
                                            <div class=" col-md-9">
                                                         <input type="text" id="team" class="form-control" placeholder="Enter month" name="team" Value="<?php echo $user_name;?>" disabled>
                                               
                                            </div>
											  
                                        </div>
		<div class="form-group row">
                                            <label class="col-md-3 label-control">Enter Month</label>
                                            <div class=" col-md-9">
                                            <input type="text" id="month" class="form-control" placeholder="Enter month" name="month" Value="<?php echo $month_name;?>" disabled>

                                            </div>
                                        </div>

		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Enter Amount</label>
									<div class="col-md-9">
	                            		<input type="text" id="amt" class="form-control" placeholder="Enter amount" name="amt" Value="<?php echo $user_target_amount; ?>">
	                            	</div>
		                        </div>
		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Dryer</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="dryerqty" class="form-control" placeholder="Dryer Qty" name="Dryer" value="<?php echo $user_target_dryer; ?>">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Chiller</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="chillerqty" class="form-control" placeholder="Chiller Qty" name="Chiller"value="<?php echo $user_target_chiller; ?>">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Cooler</label>
									<div class="col-md-9">
		                            	<input type="text" id="coolerqty" class="form-control" placeholder="Cooler Qty" name="Cooler" value="<?php echo $user_target_cooler; ?>">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Var Products </label>
									<div class="col-md-9">
		                            	<input type="text" id="target_varqty" class="form-control" placeholder="Enter Var Products" name="varproducts" value="<?php echo $user_target_var; ?>">
		                            </div>
		                        </div>
								 <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Small Products </label>
									<div class="col-md-9">
		                            	<input type="text" id="smallqty" class="form-control" placeholder="Enter Small Products " name="smallproducts"  value="<?php echo $user_target_small_products; ?>">
		                            </div>
		                        </div>
 <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Enquiry </label>
									<div class="col-md-9">
		                            	<input type="text" id="enquiry" class="form-control" placeholder="Enquiry" name="enquiry" value="<?php echo $user_target_enquiry; ?>">
		                            </div>
		                        </div>
<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Campaign </label>
									<div class="col-md-9">
		                            	<input type="text" id="campaign" class="form-control" placeholder="Campaign" name="Campaign" value="<?php echo $user_target_campaign; ?>">
		                            </div>
		                        </div>
								<input type="hidden" value="<?php echo $id ?>" name="id" id="ids">
								 <div class="form-group col-md-12" style="text-align:center">		
								 <span id="errors"  style="color:#ff0000;text-align:center"></span></div>
								   <div class="form-group col-md-12" style="text-align:center">		<span id="success"  style="color:#139c9b;text-align:center"></span></div>
		                        <div class="form-actions" style="float:right;">
	                           
	                            <button type="button" class="btn btn-primary" id="target_button">
	                                <i class="icon-check2"></i> Save
	                            </button>
	                        </div>  

							
								  
		                        </div></form>
							</div>

	                      
	                    
	                </div>
	            </div>
	        </div>
	    </div></section>

	</div>
<!-- // Basic form layout section end -->
        </div>
      </div>
   
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-light">
      <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 <a href="#" target="_blank" class="text-bold-800 grey darken-2">banyaninfotech</a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span></p>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="robust-assets/js/vendors.min.js"></script>
    <script src="robust-assets/js/components/target/team_target_button.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="robust-assets/js/app.min.js"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>