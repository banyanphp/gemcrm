<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Sales Executive Registration</title>
    <link rel="apple-touch-icon" sizes="60x60" href="robust-assets/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="robust-assets/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="robust-assets/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="robust-assets/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="robust-assets/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="robust-assets/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
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
						<?php
include 'dbconnect.php';

$id=$_REQUEST['id'];

$st_ex = mysqli_query($conn,"select * from tbl_user where user_id = '$id'");
$row=mysqli_fetch_array($st_ex);
?>
	                    <form class="form form-horizontal" id="sales-registration" action="#">
	                    	<div class="form-body">
	                    		<h4 class="form-section"><i class="icon-head"></i> Sales Executive Info</h4>
			                    <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Name</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="ename" value="<?php echo $row['user_name'];?>" class="form-control" placeholder="First Name" name="fname">
		                            </div>
		                        </div>
		                       

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">E-mail</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="e_mail" value="<?php echo $row['user_email'];?>" class="form-control" placeholder="E-mail" name="e_mail">
		                            </div>
		                        </div>

	<div class="form-group row">
                                            <label class="col-md-3 label-control">Gender</label>
                                            <div class=" col-md-9">
                                                        <select class="form-control"  name="gender" id="gender">
														  <option  value="0">Select</option>

          <option value="Male" <?php if($row['user_gender']=='Male'){ ?>Selected <?php } ?>Male</option>
          <option value="Female" <?php if($row['user_gender']=='Female'){ echo "Selected"; } ?>>Female</option>
														</select>
                                               
                                            </div>
                                        </div>
		

		                        <div class="form-group row">
                                            <label class="col-md-3 label-control">Contact Cell No.</label>
                                            <div class=" col-md-9">
                                                <input type="text" class="form-control" value="<?php echo $row['user_phone_no'];?>" name="ecell" id="ecell" placeholder="Enter Engineer Mobile">
                                               
                                            </div>
                                        </div>
  <div class="form-group row">
                                            <label class="col-md-3 label-control">Employee Code</label>
                                            <div class=" col-md-9">
                                                <input type="text" class="form-control" value="<?php echo $row['user_code'];?>" name="ecode" id="code" placeholder="Enter Engineer Code" disabled>
                                               
                                            </div>
                                        </div>
                     

		                       
		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Discount Allowed</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="discount" class="form-control"  value="<?php echo $row['user_discount'];?>" placeholder="Enter Discount" name="discount">
		                            </div>
		                        </div>
 
		                         <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Specialist In</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="edept" class="form-control" value="<?php echo $row['user_speciality'];?>" placeholder="Enter Specialist" name="edept">
		                            </div>
		                        </div>
 
		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Grade</label>
		                            <div class="col-md-9">
		                            	<input type="radio" id="Grade" name="Grade" value="senior" <?php if($row['user_grade']=='senior'){ echo "checked"; } ?> >Senior
		                            	<input type="radio" id="Grade" name="Grade" value="junior" <?php if($row['user_grade']=='junior'){ echo "checked"; } ?>>junior
		                            </div>
		                        </div>

						
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput9">Address</label>
									<div class="col-md-9">
										<textarea id="address" rows="5" class="form-control" name="address" placeholder="Address"> <?php echo $row['user_address'];?></textarea>
									</div>
								</div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Pin Code</label>
									<div class="col-md-9">
		                            	<input type="text" id="pincode" class="form-control"  value="<?php echo $row['user_pincode'];?>" placeholder="Pin Code" name="pincode">
		                            </div>
		                        </div>
								 <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput5">Sales Executive Registration</label>
                                                        <div class="col-md-9">    

														<?php  if($row['user_permsission_sales'] == 'yes') { $user_zone = "checked='checked'"; }else { $user_zone = ""; }?>

                                                            <input type="Checkbox" id="reg" value="yes" <?php echo $user_zone; ?>  name="reg">
                                                        </div>
                                                    </div>
													 <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput5">Self Enquiry Allotment</label>
                                                        <div class="col-md-9">												
														<?php  if($row['user_permsission_self_allotment'] == 'yes') { $user_zone = "checked='checked'"; }else { $user_zone = ""; }?>
                                                            <input type="Checkbox" id="self" value="yes"  <?php echo $user_zone; ?>  name="self">
                                                        </div>
                                                    </div>
													 <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput5">Enquiry Allotment</label>
                                                        <div class="col-md-9">
														<?php  if($row['user_permsission_alotment'] == 'yes') { $user_zone = "checked='checked'"; }else { $user_zone = ""; }?>
                                                            <input type="Checkbox" id="allot" value="yes" <?php echo $user_zone; ?>  name="allot">
                                                        </div>
                                                    </div>
							</div>
	 <div class="form-group col-md-12" style="text-align:center">		<span id="errors"  style="color:#ff0000;text-align:center"></span></div>
								  <div class="form-group col-md-12" style="text-align:center">		<span id="success"  style="color:#139c9b;text-align:center"></span></div>
<input type="hidden" name="id" value="<?php echo $row['user_id'];?>">
	                        <div class="form-actions" style="float:right;">
	                            <button type="reset" class="btn btn-warning mr-1">
	                            	<i class="icon-cross2"></i> Cancel
	                            </button>
	                            <button type="button" class="btn btn-primary" id="reg_button">
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
    <!-- ////////////////////////////////////////////////////////////////////////////-->



    <!-- BEGIN VENDOR JS-->
    <script src="robust-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="robust-assets/js/app.min.js"></script>
    <script src="robust-assets/js/components/salesexecutive/updatereg.js"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>