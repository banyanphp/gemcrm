<?php 
include('dbconnect.php');
 $id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Appointment Order - Gemcrm</title>
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
    <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/extensions/datedropper.min.css">
    <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/extensions/timedropper.min.css">
    <!-- END Vendor CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" href="robust-assets/css/app.min.css"/>
    <!-- END ROBUST CSS-->
	    <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/ui/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
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

    <?php include('header.php'); ?>


    <div class="robust-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
         
          
        </div>
        <div class="content-body"><!-- Date dropper section start -->
<section id="date-dropper">
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-block">
                        <div class="options">
                            <h3>Appointment</h3>
                            <hr>
                            <div class="row">
							<form class="form form-horizontal" name="update_appoinment_form" id="update_appoinment_form" method="POST"><br>
							<?php
							$sql=mysqli_query($conn,"SELECT * FROM `tbl_appointment` WHERE appointment_id='$id'");
								while ($row=mysqli_fetch_array($sql)){
									
									$dat = $row['appointment_date'];
$dat= date("d/m/Y", strtotime($dat));
							?>
                                <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Appointment Date :</label>
		                            <div class="col-md-9">
									<input type="text" id="appoint_date" name="appoint_date" class="form-control datepicker-default" value="<?php echo $dat; ?>" />
		                            	
		                            </div>
		                        </div>
								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Appointment Time :</label>
		                            <div class="col-md-9">
		                        <input type="text" value="<?php echo $row['appointment_time']; ?>" class="form-control input-lg" id="textColor" placeholder="Select Your Appointment Time" name="appoint_tme">	
		                            </div>
		                        </div>
								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Appointment Company Name :</label>
		                            <div class="col-md-9">
		                        <input type="text" class="form-control" id="appoint_Cmpny" placeholder="Appointment Company Name" name="appoint_Cmpny" value="<?php echo $row['appointment_company_name'];  ?>">	
		                            </div>
		                        </div>
								<?php /*<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Appointment User code :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row['appointment_user_code']; ?>"  id="" class="form-control" placeholder="Enter Appointment User code" name="appoint_usrcode">
	                            	</div>
		                        </div>*/ ?>
								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Appointment With :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row['appointment_with']; ?>" disabled  id="" class="form-control" placeholder="Enter Appointment With	" name="appoint_usrnam">
	                            	</div>
		                        </div> 
								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Appointment Through :</label>
									<div class="col-md-9">
                            <input type="text" value="<?php echo $row['appointment_through']; ?>" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" placeholder="Enter Appointment Through" data-title="(Ex: Phone,skype,video call,direct)" data-original-title="" title="" id="appoint_thrugh" name="appoint_thrugh">
	                            	</div>
		                        </div>
								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Appointment Location :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row['appointment_location']; ?>"  id="appoint_locatn" class="form-control" placeholder="Enter Appointment Location" name="appoint_locatn">
	                            	</div>
		                        </div>
								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Appointment Description :</label>
									<div class="col-md-9">
	                            		<textarea id="appoint_cmd" rows="5" class="form-control" name="appoint_cmd" placeholder="Enter Description"><?php echo $row['appointment_description']; ?></textarea>
	                            	</div>
		                        </div>
								<div class="col-md-12" style="text-align:center">
                                                        <span id="errors" style="color:#ff0000;text-align:center"></span>

                                                        <span id="success" style="color:#967ADC;text-align:center"></span>

                                                    </div>
									<div class="form-actions" style="float:right;">
                                    
	                           <!-- <button type="reset" class="btn btn-warning mr-1">
	                            	<i class="icon-cross2"></i> Cancel
	                            </button>-->
								<input type="hidden" value="<?php echo $id; ?>"  id="id" name='id'class="form-control">
								
	                            <button type="button" class="btn btn-primary" name="appoinment_update_submit" id="appoinment_update_submit">
	                                <i class="icon-check2"></i> Save
	                            </button>
	                        </div>
									<?php } ?>
							</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


 <?php include('footer.php'); ?>

     <!-- BEGIN VENDOR JS-->
<script src="robust-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="robust-assets/js/plugins/extensions/datedropper.min.js" type="text/javascript"></script>
    <script src="robust-assets/js/plugins/extensions/timedropper.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="robust-assets/js/app.min.js"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="robust-assets/js/components/extensions/date-time-dropper.js" type="text/javascript"></script>   
    <!-- END PAGE LEVEL JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="robust-assets/js/core/libraries/jquery_ui/jquery-ui.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="robust-assets/js/components/ui/jquery-ui/date-pickers.js" type="text/javascript"></script>    
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="robust-assets/js/components/ui/jquery-ui/date-pickers.js" type="text/javascript"></script>
	    <script src="robust-assets/js/components/pickers/appoinment_edit.js" type="text/javascript"></script>

  </body>
</html>