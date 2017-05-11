<?php
include('dbconnect.php');
$id=$_GET['id'];
	if(isset($_POST['submit'])){
		
		
		move_uploaded_file($_FILES['file']['tmp_name'],"gadiagrams/".$_FILES['file']['name']);
			
		$upl=$_FILES['file']['name'];

		$sql=mysqli_query($conn,"UPDATE `tbl_type_price` SET `ga_diagram`='$upl' WHERE type_price_model_no='$id'");	
				if($sql)
				{
		
					header('location:gadiagram.php');
	}}
	 
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
    <title>Upload GA diagram - Gemcrm</title>
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

    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
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

    <?php include('header.php'); ?>


    <div class="robust-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
         
          
        </div>
        <div class="content-body"><!-- Date dropper section start -->
<section id="date-dropper">
    <div class="row">
        
    </div>
  <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-block">
                        <div class="options">
                            <h3>Upload GA diagram</h3>
                            <hr>
                            <div class="row">

							<form class="form form-horizontal" enctype="multipart/form-data" method="POST"><br>
                               
								<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Upload  :</label>
									<div class="col-md-9">
	                            		<input type="file"  name="file" id="fileUpload" class="form-control" placeholder="Choose your file">
	                            	</div>
		                        </div>
								<span id="lblError" style="color: red;"></span><br>
	                            <button type="submit" class="btn btn-primary" name="submit" id="submit" onclick="return ValidateExtension()">
	                                <i class="icon-check2"></i> Save
	                            </button>
	                        </div>
								
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
	<!-- includ validation js  -->
	
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="robust-assets/js/core/libraries/jquery_ui/jquery-ui.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="robust-assets/js/components/ui/jquery-ui/date-pickers.js" type="text/javascript"></script>    
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <!-- END ROBUST JS-->
	<script type="text/javascript">
        function ValidateExtension() {
            var allowedFiles = [".doc", ".docx", ".pdf"];
            var fileUpload = document.getElementById("fileUpload");
            var lblError = document.getElementById("lblError");
            var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
            if (!regex.test(fileUpload.value.toLowerCase())) {
                lblError.innerHTML = "Please upload files having extensions: <b>" + allowedFiles.join(', ') + "</b> only.";
                return false;
            }
            lblError.innerHTML = "";
            return true;
        }
    </script>
    <!-- BEGIN PAGE LEVEL JS-->

	
  </body>
</html>