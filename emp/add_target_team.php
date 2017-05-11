<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="">
    <title>Enquiry Registration</title>
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
						
	                    <form class="form form-horizontal">
	                    	<div class="form-body">
	                    		<h4 class="form-section"><i class="icon-head"></i> Target for the year(Amount)</h4>
			                    <div class="form-group row">
		                        	<label class="col-md-3 label-control" for="projectinput7">Select Year</label>
		                        	<div class="col-md-8">
			                            <select id="projectinput7" name="budget" class="form-control">
			                                <option value="0" selected="" disabled="">2017-2018</option>
			                                <option value="less than 5000$">2018-2019</option>
			                                <option value="5000$ - 10000$">2019-2020</option>
			                                <option value="10000$ - 20000$">2020-2021</option>
			                             
			                            </select>
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Amount(in Cr)</label>
									<div class="col-md-8">
	                            		<input type="text" disabled id="projectinput2" class="form-control" placeholder="Enter amount" name="year" Value="Rs.100cr ">
	                            	</div>
		                        </div>
		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Dryer</label>
		                            <div class="col-md-8">
		                            	<input type="text" disabled id="projectinput3" class="form-control" placeholder="Dryer Qty" name="Dryer">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Chiller</label>
		                            <div class="col-md-8">
		                            	<input type="text"  disabled id="projectinput4" class="form-control" placeholder="Chiller Qty" name="Chiller">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Cooler</label>
									<div class="col-md-8">
		                            	<input type="text" disabled id="projectinput5" class="form-control" placeholder="Cooler Qty" name="Cooler">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Other Products </label>
									<div class="col-md-8">
		                            	<input type="text" disabled id="projectinput5" class="form-control" placeholder="Other Products Qty " name="OtherProducts ">
		                            </div>
		                        </div>
<h4 class="form-section"><i class="icon-head"></i>Team A</h4>
 <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Amount(in Cr)</label>
									<div class="col-md-8">
	                            		<input type="text"  id="projectinput2" class="form-control" placeholder="Enter amount" name="year" Value="Rs.100cr ">
	                            	</div>
		                        </div>
		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Dryer</label>
		                            <div class="col-md-8">
		                            	<input type="text"  id="projectinput3" class="form-control" placeholder="Dryer Qty" name="Dryer">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Chiller</label>
		                            <div class="col-md-8">
		                            	<input type="text"   id="projectinput4" class="form-control" placeholder="Chiller Qty" name="Chiller">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Cooler</label>
									<div class="col-md-8">
		                            	<input type="text"  id="projectinput5" class="form-control" placeholder="Cooler Qty" name="Cooler">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Other Products </label>
									<div class="col-md-8">
		                            	<input type="text"  id="projectinput5" class="form-control" placeholder="Other Products Qty " name="OtherProducts ">
		                            </div>
		                        </div>
<h4 class="form-section"><i class="icon-head"></i>Team B</h4>
 <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Amount(in Cr)</label>
									<div class="col-md-8">
	                            		<input type="text"  id="projectinput2" class="form-control" placeholder="Enter amount" name="year" Value="Rs. ">
	                            	</div>
		                        </div>
		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Dryer</label>
		                            <div class="col-md-8">
		                            	<input type="text"  id="projectinput3" class="form-control" placeholder="Dryer Qty" name="Dryer">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Chiller</label>
		                            <div class="col-md-8">
		                            	<input type="text"   id="projectinput4" class="form-control" placeholder="Chiller Qty" name="Chiller">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Cooler</label>
									<div class="col-md-8">
		                            	<input type="text"  id="projectinput5" class="form-control" placeholder="Cooler Qty" name="Cooler">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Other Products </label>
									<div class="col-md-8">
		                            	<input type="text"  id="projectinput5" class="form-control" placeholder="Other Products Qty " name="OtherProducts ">
		                            </div>
		                        </div>
<h4 class="form-section"><i class="icon-head"></i>Team C</h4>
 <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Amount(in Cr)</label>
									<div class="col-md-8">
	                            		<input type="text"  id="projectinput2" class="form-control" placeholder="Enter amount" name="year" Value="Rs.">
	                            	</div>
		                        </div>
		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Dryer</label>
		                            <div class="col-md-8">
		                            	<input type="text"  id="projectinput3" class="form-control" placeholder="Dryer Qty" name="Dryer">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Chiller</label>
		                            <div class="col-md-8">
		                            	<input type="text"   id="projectinput4" class="form-control" placeholder="Chiller Qty" name="Chiller">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Cooler</label>
									<div class="col-md-8">
		                            	<input type="text"  id="projectinput5" class="form-control" placeholder="Cooler Qty" name="Cooler">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Other Products </label>
									<div class="col-md-8">
		                            	<input type="text"  id="projectinput5" class="form-control" placeholder="Other Products Qty " name="OtherProducts">
		                            </div>
		                        </div>
<h4 class="form-section"><i class="icon-head"></i>Team D</h4>
 <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Amount(in Cr)</label>
									<div class="col-md-8">
	                            		<input type="text"  id="projectinput2" class="form-control" placeholder="Enter amount" name="year" Value="Rs.">
	                            	</div>
		                        </div>
		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Dryer</label>
		                            <div class="col-md-8">
		                            	<input type="text"  id="projectinput3" class="form-control" placeholder="Dryer Qty" name="Dryer">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Chiller</label>
		                            <div class="col-md-8">
		                            	<input type="text"   id="projectinput4" class="form-control" placeholder="Chiller Qty" name="Chiller">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Cooler</label>
									<div class="col-md-8">
		                            	<input type="text"  id="projectinput5" class="form-control" placeholder="Cooler Qty" name="Cooler">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Other Products </label>
									<div class="col-md-8">
		                            	<input type="text"  id="projectinput5" class="form-control" placeholder="Other Products Qty " name="OtherProducts ">
		                            </div>
		                        </div>

		                        <div class="form-actions" style="float:right;">
	                           
	                            <button type="button" class="btn btn-primary">
	                                <i class="icon-check2"></i> Save
	                            </button>
	                        </div>  

							
								  
		                        </div>
                            
                            
                            </form>
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
      <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 grey darken-2">banyaninfotech</a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span></p>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="robust-assets/js/vendors.min.js"></script>
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