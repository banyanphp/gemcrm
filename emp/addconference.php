<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Conference</title>
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
    
    <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/forms/selects/select2.min.css">
    <!-- BEGIN Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/ui/jquery-ui.min.css">
    <!-- END Vendor CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" href="robust-assets/css/app.min.css"/>
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- BEGIN Custom CSS-->
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
	<style>.select2-selection{
	
	}
	.select2-container--classic, .select2-container--default{
		width:74% !important;
	}
	.select2 select2-container select2-container--default select2-container--focus select2-container--below select2-container--open{
	margin-left:5px !important;	
	}
	</style>

    <!-- END PRELOADER-->

    <?php include 'header.php'; include 'dbconnect.php';?>
    <div class="robust-content content container-fluid">
      <div class="content-wrapper">
      <div class="content-body"><!-- Basic form layout section start -->
<section id="horizontal-form-layouts">

	<div class="row">
	    <div class="col-md-12">
	        <div class="card">
	           
	            <div class="card-body collapse in">
	                <div class="card-block">
					
	                    <form class="form form-horizontal" id="participants">
	                    	<div class="form-body">
	                    		<h4 class="form-section"><i class="icon-head"></i> Add conference</h4>
			                    <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1"> Reason</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="projectinput1" class="form-control" placeholder="Reason" name="fname" style="width:99%;">
		                            </div>
		                        </div>
		                    
		                         <div class="form-group row">
                            <label class ="col-md-3 label-control"> Date</label>
                            <div class="input-group col-md-9" style="margin-top: -10px;width: 75%;">
                                <span class="input-group-addon"><i class="icon-calendar3"></i></span>
                                <input type="text" id="test" name="date"  class="form-control datepicker-default col-md-9" style="width:99%;margin-=left:25%" />
                            </div>
                      
</div>
		                    

							

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Time</label>
		                            <div class="col-md-9">
		                            	<input type="text" id="projectinput4" class="form-control" placeholder="time" name="time" style="width:99%;">
		                            </div>
		                        </div>


		                     <div class="form-group">
							 <label class="col-md-3 label-control" for="projectinput5">Add Participants</label>
							<select class="select2 form-control block" name="test" multiple="multiple" id="responsive_multi" style="width: 75%;margin-left:100px">
								
							<?php $q=mysql_query("select * from tbl_participants");
					 while($row=mysql_fetch_array($q)){
					 ?>       
                              
                            
                              
									<option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
					 <?php } ?>
								
								</optgroup>
							</select>
						</div>  
		                        

							<div class="col-md-12" style="text-align:center">
<span id="errors" style="color:#ff0000;text-align:center"></span>

<span id="success" style="color:#967ADC;text-align:center"></span>

</div>
	                        <div class="form-actions" style="float:right;">
	                            <button type="reset" class="btn btn-warning mr-1" >
	                            	<i class="icon-cross2"></i> Cancel
	                            </button>
	                            <button type="button" class="btn btn-primary" id="login_button">
	                                <i class="icon-check2"></i> Submit
	                            </button>
	                        </div></div>
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
      <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 <a href="#" target="_blank" class="text-bold-800 grey darken-2">BanyanInfotech</a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span></p>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="robust-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="robust-assets/js/app.min.js"></script>
  <script>
               $(function () {

                $("#login_button").click(function () {
 var projectinput4 = $("#test").val();
                    var projectinput1 = $("#projectinput1").val();
                    var projectinput3 = $("#projectinput4").val();
					 var responsive_multi = $("#responsive_multi").val();
				 
					                    var data = $("#participants").serialize();
										
										if (projectinput1 == '')
                    {
                        $('#errors').html('Enter reason');
                        $("#projectinput1").focus();

                        return false;
                    }if (projectinput3 == '')
                    {
                        $('#errors').html('Enter Time ');
                        $("#projectinput4").focus();

                        return false;
                    }if (projectinput4 == '')
                    {
                        $('#errors').html('Please select date');
                        $("#test").focus();

                        return false;
                    }
					if (responsive_multi == '')
                    {
                        $('#errors').html('Please select participants');
                        $("#responsive_multi").focus();

                        return false;
                    }


                else {
										
    $.ajax({
                            type: 'POST',
                            url: 'add.php',
                            data: data,
                            beforeSend: function () {
                                $("#errors").html('');
       $("#login_button").html('Please wait..');

                            },
                            success: function (response) {
						       $("#login_button").html('submit');
		
                             $("#success").html(response);
                                if (response == 1) {
                                    $("#success").html("Video Conference scheduled successfully !");					
									//document.getElementById("participants").reset();

                                } else {
                                    $("#errors").html("error occured");
                                } 
							document.getElementById("participants").reset();
 setTimeout(function () {
                            $('#success').html('');
                        }, 5000);
						
						
						 setTimeout(function () {
                            $('#errors').html('');
                        }, 5000);

                           

                            }
                        });
                 


				}
});
});
</script>
    <script src="robust-assets/js/core/libraries/jquery_ui/jquery-ui.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->

    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="robust-assets/js/components/ui/jquery-ui/date-pickers.js" type="text/javascript"></script> 
	    <script src="robust-assets/js/plugins/forms/select/select2.full.min.js" type="text/javascript"></script>

	<script src="robust-assets/js/components/forms/select/form-select2.js" type="text/javascript"></script>

  </body>
</html>